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
            'groupName' => 'Group',
            'trafficSourceName' => 'Traffic Source',
            'clicks' => 'Clicks',
            'leads' => 'Leads',
            'revenue' => 'Revenue',
            'event_2' => 'Event 2',
        ];
    }

    public function getGroup()
    {
        return $this->hasOne(Group::class, ['id' => 'group_id']);
    }

    public function getGroupName()
    {
        return $this->group->name;
    }

    public function getTrafficSource()
    {
        return $this->hasOne(TrafficSource::class, ['id' => 'traffic_source_id']);
    }

    public function getTrafficSourceName()
    {
        return $this->trafficSource->name;
    }

}
