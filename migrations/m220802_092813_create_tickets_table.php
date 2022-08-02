<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tickets}}`.
 */
class m220802_092813_create_tickets_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tickets}}', [
            'id' => $this->primaryKey(),
            'created_at' => $this->dateTime(),
            'created_at' => $this->dateTime(),
            'resolved_at' => $this->dateTime(),
            'manager_id' => $this->integer(),
            'category_id' => $this->integer(),
            'status_id' => $this->integer()->defaultValue(1),
            'body' => $this->text(),
        ]);

        $this->createIndex(
            'idx-tickets-manager_id',
            'tickets',
            'manager_id'
        );

        $this->addForeignKey(
            'fk-tickets-manager_id',
            'tickets',
            'manager_id',
            'managers',
            'id',
            'CASCADE'
        );
        $this->createIndex(
            'idx-tickets-category_id',
            'tickets',
            'category_id'
        );

        $this->addForeignKey(
            'fk-tickets-category_id',
            'tickets',
            'category_id',
            'categories',
            'id',
            'CASCADE'
        );
        $this->createIndex(
            'idx-tickets-status_id',
            'tickets',
            'status_id'
        );

        $this->addForeignKey(
            'fk-tickets-status_id',
            'tickets',
            'status_id',
            'statuses',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-tickets-manager_id',
            'managers'
        );
        $this->dropIndex(
            'idx-tickets-manager_id',
            'managers'
        );
        $this->dropForeignKey(
            'fk-tickets-category_id',
            'categories'
        );
        $this->dropIndex(
            'idx-tickets-category_id',
            'category_id'
        );
        $this->dropForeignKey(
            'fk-tickets-status_id',
            'statuses'
        );
        $this->dropIndex(
            'idx-tickets-status_id',
            'status_id'
        );

        $this->dropTable('{{%tickets}}');
    }
}
