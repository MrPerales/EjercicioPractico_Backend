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
        helper('form');
        $articulosModel= new ArticulosModel();
        // obtenemos los datos 
        $request= \Config\Services::request();
        $data=[
            // obtenemos los datos por medio de get o post 
            'titulo'=> $request->getPostGet('titulo'),
            'meta_titulo'=> $request->getPostGet('meta_titulo'),
        ];
        // cuando se edite agregarle el mismo id que tenia
        if($request->getPostGet('id')){
            // agregamos el id
            $data['id']=$request-> getPostGet('id');
        }
        // $articulosModel->save($data);
        if($articulosModel->save($data)=== false){
           var_dump($articulosModel->errors());
        }
        if($request->getPostGet('id')){
            $articulos=$articulosModel->find([$request->getPostGet('id')]);
            $articulos=["articulos"=> $articulos];
            // mandar success
            // $check=true;
            $homePage= view('Home/header').view('Home/formulario',$articulos);
        }else{
            $articulos=$articulosModel->findAll();
            $articulos=["articulos"=> $articulos];
            $homePage= view('Home/header').view('Home/body',$articulos);
        }
        // regresamos al body o a cualquier otra vista 
        // $homePage= view('Home/header').view('Home/body');
        return $homePage;
    }
    public function index(): string
    {
        // creamos una instancia para recivir valores 
        $articulosModel= new ArticulosModel();
        $articulos=$articulosModel->findAll();
        $articulos=["articulos"=> $articulos];
        
        $homePage= view('Home/header').view('Home/body',$articulos);
        return $homePage;
    }
    public function edit($id){
        helper('form');
        // var_dump($id);
        $articulosModel= new ArticulosModel();
        // dentro de [] para que nos mande un array
        $articulos=$articulosModel->find([$id]);
        $articulos=["articulos"=> $articulos];
        
        $homePage= view('Home/header').view('Home/formulario',$articulos);
        return $homePage;

    }
}
