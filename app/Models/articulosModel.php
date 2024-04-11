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
    protected $allowedFields = ['meta_titulo','titulo'];

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
        "meta_title"=>"required|alpha_numeric_space_length[3]"
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