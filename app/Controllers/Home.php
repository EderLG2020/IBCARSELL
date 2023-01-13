<?php

namespace App\Controllers;

//use App\Models\Veh;

use App\Models\Mostrarvehiculo;
use App\Models\Vehiculo;

class Home extends BaseController {

    public function index(){

        $vehiculo=  new Vehiculo();
        $datos['vehiculos']= $vehiculo->orderBy('cat_id','ASC')->findAll();
        return view('listar',$datos);
    }

    public function vehiculos($id = null){
        // echo "datos de auto" . $id;
        $vehiculo2=  new Mostrarvehiculo();
        $datos2['vehiculos2']= $vehiculo2->where('id_categoria',$id)->findAll();
        return view('lista-vehiculos',$datos2);
    }

    
}
