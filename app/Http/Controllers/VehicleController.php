<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleController extends SwapiController
{
    public function __construct() {
        $this->view = 'vehicles';
        $this->url = config('app.swapi') . 'vehicles';
    }
}
