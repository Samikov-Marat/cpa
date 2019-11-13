<?php

namespace app\common;

class Parser
{
    var $url = null;

    public function __construct($url = 'http://209.97.133.143/tz/api.php?key=20e62b46af322affca0d9bccb7a')
    {
        $this->url = $url;
    }

    public function parse()
    {
        $json = file_get_contents($this->url);
        $banners = json_decode($json);

        foreach ($banners as $banner) {
            BannerAdapter::save($banner);
        }
    }
}