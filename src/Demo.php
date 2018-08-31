<?php

// src/Demo.php

namespace track_ip\Demo;

class Demo
{

    /**** Function to geocode ip address. Accepts ip as parameter and returns geocoded details as an array ****/

    public function getGeoLocation($ip, $apikey, $format)
    {

        /**** Check Number Of Arguments Passed ****/

        $numargs = func_num_args();

        if ($numargs !== 3) {
          $result = [];
          $result['statusCode'] = '100';
          $result['statusMessage'] = 'Error: Invalid Number Of Arguments Passed';
          return jscon_encode($result);
        }

        /**** Check format requested ****/

        if($format !== 'raw' && $format !== 'xml' && $format !== 'json')
        {
           $result = [];
           $result['statusCode'] = '101';
           $result['statusMessage'] = 'Invalid Result Format Requested';
           return jscon_encode($result);
        }

        /**** Check if passed ip is valid ****/

	      $valid = preg_match('/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\z/', $ip);

	      if($valid)
	      {
          /**** Construct IpInfoDB ****/

          $apiurl = "http://api.ipinfodb.com/v3/ip-city/?key=".$apikey."&ip=".$ip."&format=".$format;

          /**** geo code using extreme-ip-lookup service and store in array ****/
	        $geo = file_get_contents($apiurl);

	        /**** return geooded array ****/
	        return $geo;
	      }
        else {
          $result = [];
          $result['statusCode'] = '102';
          $result['statusMessage'] = 'Invalid Ip Format';
          return jscon_encode($result);
        }
    }
}
