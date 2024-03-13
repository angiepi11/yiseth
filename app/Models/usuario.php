<?php 
namespace App\Models;

use CodeIgniter\Model;

class usuario extends Model{

protected $table ='registro';
//campos que se permiten para guardar
protected $allowedFields=[
    "id",
"nombre_completo",
"correo",
"usuario",
"clave"];
}