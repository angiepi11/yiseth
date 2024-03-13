<?php 
namespace App\Models;

use CodeIgniter\Model;

class contacto extends Model{

protected $table ='contactanos';
//campos que se permiten para guardar
protected $allowedFields=[
    'nombre_completo',	
    'correo',
    'asunto',
    'detalles',
    'id'	];
  
}