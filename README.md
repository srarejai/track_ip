Usage Instruction for package GeoCoding Ip addresses.

1. For using this package you have to register in the IpInfoDb site and get your free API Key for geocoding IP addresses..

   URL for registering: https://www.ipinfodb.com/register

2. Include class on top using following line.

use track_ip\Demo\Demo;

3. In composer.json include following line

"require": {
     "track_ip/Demo": "dev-master"
}

4. Execute the command

composer update

5. Add following line to providers array in app.php

track_ip\Demo\DemoServiceProvider::class

6. Add following line to aliases array

'track_ip' => track_ip\Demo\Demo::class

7. Use following code in your controller

$ip = $_SERVER['REMOTE_ADDR'];
$geo = new Demo();
$geovalues = $geo->getGeoLocation($ip, "YOUR API KEY");

8. Results

statusCode: 100
statusMessage: Error: Invalid Number Of Arguments Passed

statusCode: 101
statusMessage: Invalid Result Format Requested

statusCode: 102
statusMessage: Invalid Ip Format

statusCode: OK
statusMessage: IP Geocoded Successfully
