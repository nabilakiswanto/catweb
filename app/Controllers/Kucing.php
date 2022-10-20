<?php

namespace App\Controllers;

class Kucing extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
}
