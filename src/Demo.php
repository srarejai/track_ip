<?php

// src/Demo.php

namespace track_ip\Demo;

class Demo
{

    /**** Function to geocode ip address. Accepts ip as parameter and returns geocoded details as an array ****/
 	
    public function getGeoLocation($ip)
    {
	/**** Check if passed ip is valid ****/

	$valid = preg_match('/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\z/', $ip);

	if($valid)
	{
          /**** geo code using extreme-ip-lookup service and store in array ****/
	  $geo = json_decode(file_get_contents("http://extreme-ip-lookup.com/json/".$ip), true);

	  /**** return geooded array ****/
	  return $geo;
	}
    }
}
