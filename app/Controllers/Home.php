<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('vw-header');
        echo view('contenido');
        echo view('vw-footer');
    }
}
