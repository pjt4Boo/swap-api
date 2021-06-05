<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanetController extends SwapiController
{
    public function __construct() {
        $this->view = 'planets';
        $this->url = config('app.swapi') . 'planets';
    }
}
