Usage Instruction for package GeoCoding Ip addresses.

1. Include class on top using following line.

use track_ip\Demo\Demo;

2. In composer.json include following line

"require": {
     "track_ip/Demo": "dev-master"
}

3. Execute

composer update

4. Add following line to providers array in app.php

track_ip\Demo\DemoServiceProvider::class

5. Add following line to aliases array

'track_ip' => track_ip\Demo\Demo::class

5. Use following code in your controller

$ip = $_SERVER['REMOTE_ADDR'];
$geo = new Demo();
$geovalues = $geo->getGeoLocation($ip);
if($geovalues)
{
  /* Invalid IP sent */
}
