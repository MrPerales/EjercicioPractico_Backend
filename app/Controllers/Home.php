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
    public function guarda(){
        $articulosModel= new ArticulosModel();

        // obtenemos los datos 
        $request= \Config\Services::request();
        $data=[
            // obtenemos los datos por medio de get o post 
            'titulo'=> $request->getPostGet('titulo'),
            'metaTitulo'=> $request->getPostGet('metaTitulo'),
        ];
        $articulosModel->insert($data);
        if(!$articulosModel->insert($data)){
           var_dump($articulosModel->errors());
        }
        // regresamos al body o a cualquier otra vista 
        $homePage= view('Home/header').view('Home/body');
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
