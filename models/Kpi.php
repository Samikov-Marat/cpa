<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kpi".
 *
 * @property int $id
 * @property int $group_id
 * @property int $traffic_source_id
 * @property int $clicks
 * @property int $leads
 * @property string $revenue
 * @property string $event_2
 */
class Kpi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kpi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['group_id', 'traffic_source_id', 'clicks', 'leads'], 'integer'],
            [['revenue', 'event_2'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'group_id' => 'Group ID',
            'traffic_source_id' => 'Traffic Source ID',
            'clicks' => 'Clicks',
            'leads' => 'Leads',
            'revenue' => 'Revenue',
            'event_2' => 'Event 2',
        ];
    }
}
