<?php

namespace app\models;

use yii\db\ActiveRecord;

class Kpi extends ActiveRecord
{
    public static function tableName()
    {
        return '{{kpi}}';
    }

}