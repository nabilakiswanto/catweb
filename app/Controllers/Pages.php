<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data['title']="Home";
        echo view('home',$data);
    }
}
