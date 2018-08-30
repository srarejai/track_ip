<?php

// src/Http/routes.php

Route::get('demo/test', function () {
    return 'Track-Ip Testing';
});

Route::get('demo/{ip}', function () {
    return Demo::getGeoLocation($ip);
});
