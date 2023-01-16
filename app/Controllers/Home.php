<?php

namespace App\Controllers;

//use App\Models\Veh;

use App\Models\Mostrarvehiculo;
use App\Models\Vehiculo;
use CodeIgniter\Exceptions\PageNotFoundException;

class Home extends BaseController {

    public function index(){

        $vehiculo=  new Vehiculo();
        $datos['vehiculos']= $vehiculo->orderBy('cat_id','ASC')->findAll();

        return view('head').
        view('cabecera').
        view('parte1').
        view('listar',$datos).
        view('equipo3').
        view('parte1-footer');
    }

    public function vehiculos($id = null){
        // echo "datos de auto" . $id;
        $vehiculo2=  new Mostrarvehiculo();
        $datos2['vehiculos2']= $vehiculo2->where('cat_id',$id)->findAll();
        
        return view('head').
        view('cabecera').
        view('lista-vehiculos',$datos2).
        view('parte1-footer');
    }

    // public function getVehsssiculo($slug = null){

    //     $getVehiculo=  new Mostrarvehiculo();
    //     $datos3['vehiculo']= $getVehiculo->where('slug_categoria',$slug)->findAll();
    //     print_r($datos3);
    //     return view('head').
    //     view('lista-vehiculos',$datos3);
    // }

    public function view($slug = null){
        $model = model(Mostrarvehiculo::class);
        $data['vehiculo'] = $model->getVehiculo($slug);

        if(empty($data['vehiculo'])){
            throw new PageNotFoundException('No se encuentra el vehiculo:' .  $slug);
            
        }

       // print_r(json_encode($data['vehiculo']['nombre_vehiculo']));
        $data['titulo'] = $data['vehiculo'][0]['version'];
    
        return view('head').
        view('cabecera').
        view('info-vehiculo',$data).
        view('parte1-footer');     
    }

    
}
