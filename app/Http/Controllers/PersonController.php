<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends SwapiController
{
    public function __construct() {
        $this->view = 'people';
        $this->url = config('app.swapi') . 'people';
    }
}
