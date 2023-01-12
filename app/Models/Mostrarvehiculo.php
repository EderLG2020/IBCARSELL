<?php
namespace App\Models;
use CodeIgniter\Model;

class Mostrarvehiculo extends Model{
   protected $table      = 'vehiculo';
    // Uncomment below if you want add primary key
   protected $primaryKey = 'id_vehiculo';
   protected $allowedFields = ['costo_vehiculo','anio_vehiculo'];
}