<?php

namespace app\common;

class BannerAdapter
{

    public static  function clear(){
        $repository = new BannerRepository();
        $repository->clear();
    }

    public static function save($bannerRaw)
    {
        $repository = new BannerRepository();
        $repository->findOrNewGroup($bannerRaw->group_id, $bannerRaw->group_name);
        $repository->findOrNewTrafficSource($bannerRaw->ts_id, $bannerRaw->ts_name);
        $repository->saveKpi($bannerRaw->clicks, $bannerRaw->leads, $bannerRaw->revenue, $bannerRaw->event_2);
    }
}