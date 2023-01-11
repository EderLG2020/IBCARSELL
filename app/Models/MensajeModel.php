<?php namespace App\Models;

use Codeigniter\Model;

class Buscar_model extends Model{

    // public function obtenerCarros($tipo){
    public function obtenerCarros(){
        // $query = $this->db->query("select * from carros where tipo='$tipo'");
        $query = $this->db->query("select * from carros");
        return $query->get();
    }

}