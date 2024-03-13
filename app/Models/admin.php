<?php 
namespace App\Models;

use CodeIgniter\Model;

class admin extends Model{

protected $table ='adminlogin';
//campos que se permiten para guardar
protected $allowedFields=[
"usuario_admin",
"clave",
"nombre"];
}