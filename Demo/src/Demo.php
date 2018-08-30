<?php

// src/Demo.php

namespace track_ip\Demo;

class Demo
{

    public function __construct($)
    {

    }

    public function getGeoLocation($ip)
    {
        $geo = json_decode(file_get_contents("http://extreme-ip-lookup.com/json/".$ip), true);
        return $geo;
    }
}
