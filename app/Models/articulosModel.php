<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticulosModel extends Model
{
    // selecciona la tabla a cenectar
    protected $table      = 'articulos';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    
    protected $returnType     = 'array';
    // protected $useSoftDeletes = true; proteccion para no borrar datos en la tabla
    protected $useSoftDeletes = true;

    // campos a modificar 
    protected $allowedFields = [
        'meta_titulo',
        'meta_descripcion',
        'titulo',
        'descripcion',
        'imagen',
        'contenido_del_articulo',
        'fecha_de_programacion',
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        "titulo"=>"required|max_length[30]",
        "meta_titulo"=>"required",
        "meta_descripcion"=>"required",
        "descripcion"=>"required",
        "imagen"=>"required",
        "contenido_del_articulo"=>"required",
        "fecha_de_programacion"=>"required",
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}