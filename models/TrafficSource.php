<?php

namespace app\models;

use yii\db\ActiveRecord;

class TrafficSource extends ActiveRecord
{
    public static function tableName()
    {
        return '{{traffic_source}}';
    }
}