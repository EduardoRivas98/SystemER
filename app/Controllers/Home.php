<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('vw-header');
        echo view('tables');
        echo view('vw-footer');
    }
}
