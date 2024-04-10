<?php

namespace App\Controllers;
use App\Models\ArticulosModel;

class Home extends BaseController
{
    public function index(): string
    {
        // creamos una instancia para recivir valores 
        $articulosModel= new ArticulosModel();
        // buscamos un id
        $articuloId=$articulosModel->find('1');
        var_dump($articuloId);
        $homePage= view('Home/header').view('Home/body');
        return $homePage;
    }
}
