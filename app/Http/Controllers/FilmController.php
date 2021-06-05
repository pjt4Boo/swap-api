<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends SwapiController
{
    public function __construct() {
        $this->view = 'films';
        $this->url = config('app.swapi') . 'films';
    }
}
