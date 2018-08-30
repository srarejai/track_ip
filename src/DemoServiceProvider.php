<?php

// src/DemoServiceProvider.php

namespace track_ip\Demo;

use Illuminate\Support\ServiceProvider;

class DemoServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('track-ip-demo', function() {
            return new Demo();
        });
    }

    public function boot()
    {
        require __DIR__ . '/Http/routes.php';
    }
}
