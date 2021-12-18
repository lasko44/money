<?php

namespace Merik\NewsTracker;

use Illuminate\Support\ServiceProvider;

class NewsTrackerServiceProvider extends ServiceProvider{

    public function boot(){
        dd('My package works');
    }

    public function register()
    {

    }
}
