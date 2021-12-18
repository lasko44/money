<?php

namespace Merik\NewsTracker;

class NewsTracker
{
    private $url;

    public function _construct(string $url){
        $this->url  = $url;
        dd($url);
    }

}
