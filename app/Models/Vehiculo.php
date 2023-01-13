<?php 
namespace App\Models;

use CodeIgniter\Model;

class Vehiculo extends Model{
    protected $table      = 'categoria';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'cat_id';
    protected $allowedFields = ['cat_nombre'];
}

// class Vehiculo2 extends Model{
//     protected $table      = 'vehiculo';
//     // Uncomment below if you want add primary key
//     protected $primaryKey = 'id_vehiculo';
//     protected $allowedFields = ['id_cat_vehiculo','nombre_vehiculo','marca_vehiculo'];
// }