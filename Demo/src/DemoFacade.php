<?php

// src/DemoFacade.php

namespace track_ip\Demo;

use Illuminate\Support\Facades\Facade;

class DemoFacade extends Facade
{
    protected static function getFacadeAccessor() {
        return 'track_ip_demo';
    }
}
