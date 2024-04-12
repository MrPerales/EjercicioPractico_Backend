<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;

class RestArticulos extends ResourceController
{
    protected $modelName = 'App\Models\articulosModel';
    protected $format    = 'json';

    public function index()
    {
        return $this->genericResponse($this->model->findAll(),"",200);
    }
    public function show($id=null)
    {
        $articulo= $this->model->find($id);
        if($id==null){

            return $this->genericResponse(null,"id not found",500);
        }
        if(!$articulo){
            return $this->genericResponse(null,"id not found",500);
        }
        return $this->genericResponse($articulo,"",200);
        
    }
    private function genericResponse($data,$messaje,$code){
        if($code==200){
            return $this->respond([
                "data"=>$data,
                "code"=>$code,
            ]);
        }else{
            return $this-> respond([
                "msj"=>$messaje,
                "code"=>$code,
            ]);
        }
    }
}