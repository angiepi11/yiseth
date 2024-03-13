<?php 
namespace App\Models;

use CodeIgniter\Model;

class producto extends Model{

protected $table ='productos';
protected $primaryKey = 'id';
//campos que se permiten para guardar
protected $allowedFields=[
    
    'imagen',	
    'nombre',
    'precio_anterior',
    'precio_actual',
    'descripcion'	];
  
}