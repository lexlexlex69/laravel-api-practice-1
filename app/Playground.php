<?php

namespace App;

use App\Services\Geolocation\Geolocation;
use App\Services\Geolocation\GeolocationFacade;

class Playground
{
    public function __construct(Geolocation $geolocation)
    {
        // $geolocation = app(Geolocation::class);
        $result = GeolocationFacade::search('a');

        return dump($result);
    }
}