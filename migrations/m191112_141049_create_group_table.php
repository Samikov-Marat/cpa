<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%group}}`.
 */
class m191112_141049_create_group_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%group}}', [
            'id' => $this->primaryKey(),
            'old_id' => $this->integer(),
            'name' => $this->string(),
        ]);
        $this->createIndex('old_id', '{{%group}}', 'old_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%group}}');
    }
}
