<?php

namespace app\models;

use yii\db\ActiveRecord;

class Kpi extends ActiveRecord
{
    public static function tableName()
    {
        return '{{kpi}}';
    }


    public function getGroup()
    {
        return $this->hasOne(Group::class, ['id' => 'group_id']);
    }

    public function getGroupName()
    {
        return $this->group->name;
    }
    public function attributeLabels() {
        return [
            'groupName' => 'Group Name',
        ];
    }
}