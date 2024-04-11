<?php

namespace App\Controllers;
use App\Models\ArticulosModel;

class Home extends BaseController
{
   
    public function formulario(){
        helper('form');
        $homePage= view('Home/header').view('Home/formulario');
        return $homePage;
    }
    public function index(): string
    {
        // creamos una instancia para recivir valores 
        $articulosModel= new ArticulosModel();
        // buscamos un id
        $articuloId=$articulosModel->find('1');
        var_dump($articuloId);
        $homePage= view('Home/header').view('Home/body',$articuloId);
        return $homePage;
    }
}
