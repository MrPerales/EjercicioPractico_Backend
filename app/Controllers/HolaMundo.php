<?php

namespace App\Controllers;

class Holamundo extends BaseController
{
    public function index()
    {
        $datos['key1']="dato 1 desde index";
        return view('viewholamundo',$datos);
    }
    public function desdeOtraCarpeta()
    {
        $datos['key1']="dato 1";
        return view('viewholamundo',$datos);
    }
}