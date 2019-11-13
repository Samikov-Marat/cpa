<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%traffic_source}}`.
 */
class m191112_141234_create_traffic_source_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%traffic_source}}', [
            'id' => $this->primaryKey(),
            'old_id' => $this->integer(),
            'name' => $this->string(),
        ]);
        $this->createIndex('old_id', '{{%traffic_source}}', 'old_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%traffic_source}}');
    }
}
