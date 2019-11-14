<?php

namespace app\common;

use app\models\Group;
use app\models\Kpi;
use app\models\TrafficSource;

class BannerRepository
{
    var $group;
    var $trafficSource;
    var $kpi;

    public function clear(){
        Group::deleteAll();
        TrafficSource::deleteAll();
        Kpi::deleteAll();
    }

    public function findOrNewGroup($old_id, $name)
    {
        $group = Group::find()
            ->where(['old_id' => $old_id])
            ->limit(1)
            ->one();
        if (!isset($group)) {
            $group = new Group();
            $group->old_id = $old_id;
            $group->name = $name;
            $group->save();
        }
        $this->group = $group;
    }

    public function findOrNewTrafficSource($old_id, $name)
    {
        $trafficSource = TrafficSource::find()
            ->where(['old_id' => $old_id])
            ->limit(1)
            ->one();
        if (!isset($trafficSource)) {
            $trafficSource = new TrafficSource();
            $trafficSource->old_id = $old_id;
            $trafficSource->name = $name;
            $trafficSource->save();
        }
        $this->trafficSource = $trafficSource;
    }


    public function saveKpi($clicks, $leads, $revenue, $event_2)
    {
        $kpi = new Kpi();
        $kpi->group_id = $this->group->id;
        $kpi->traffic_source_id = $this->trafficSource->id;
        $kpi->clicks = $clicks;
        $kpi->leads = $leads;
        $kpi->revenue = $revenue;
        $kpi->event_2 = $event_2;
        $kpi->save();
    }
}