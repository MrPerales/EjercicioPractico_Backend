<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;

class RestArticulos extends ResourceController
{
    protected $modelName = 'App\Models\articulosModel';
    protected $format    = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll());
    }

}