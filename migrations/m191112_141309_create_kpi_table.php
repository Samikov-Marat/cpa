<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%kpi}}`.
 */
class m191112_141309_create_kpi_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%kpi}}', [
            'id' => $this->primaryKey(),
            'group_id' => $this->integer(),
            'traffic_source_id' => $this->integer(),
            'clicks' => $this->integer(),
            'leads' => $this->integer(),
            'revenue' => $this->decimal(20,5),
            'event_2' => $this->decimal(20,5),
        ]);
        $this->createIndex('group_id', '{{%kpi}}', 'group_id');
        $this->createIndex('traffic_source_id', '{{%kpi}}', 'traffic_source_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%kpi}}');
    }
}
