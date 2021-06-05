<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpeciesController extends SwapiController
{
    public function __construct() {
        $this->view = 'species';
        $this->url = config('app.swapi') . 'species';
    }
}
