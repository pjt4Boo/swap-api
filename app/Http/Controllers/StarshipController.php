<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StarshipController extends SwapiController
{
    public function __construct() {
        $this->view = 'starships';
        $this->url = config('app.swapi') . 'starships';
    }
}
