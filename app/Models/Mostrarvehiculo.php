<?php
namespace App\Models;
use CodeIgniter\Model;

class Mostrarvehiculo extends Model{
   protected $table      = 'vehiculo';
    // Uncomment below if you want add primary key
   protected $primaryKey = 'id_vehiculo';
   protected $allowedFields = ['cat_id'];

   public function getVehiculo($slug){
      $db      = \Config\Database::connect();
      $builder = $db->table('vehiculo'); 
      $builder->select('*');
      $builder->join('caracteristica ', 'caracteristica.idCarac = vehiculo.idCarac');
      $builder->join('marca ', 'marca.idmarca = vehiculo.idmarca');
      $builder->where('slug_vehiculo', $slug);
      $query   = $builder->get();
      //var_dump($query);
      return $query->getResultArray(); 
      // return $this-> where(['slug_vehiculo' => $slug]) -> first();
   }

   // public function getVehiculo2(){
   //    $db      = \Config\Database::connect();
   //    $builder = $db->table('news'); 
   //    $builder->select('title');
   //    $builder->join('new', 'cat_new = id_new');
   //    $query   = $builder->get(); 

   //    return $query->getResultArray();
   // }
}