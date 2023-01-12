<?php namespace App\Controllers;

use App\Models\MensajeModel;

class Home extends BaseController
{
    public function index()
    {
        echo view('welcome_message');
    }

    public function datos()
    {

        // $modelo = $this->Buscar_model;
        // $query1 = $modelo->obtenerCarros();
        // echo view('datos.php', $datos12);
        $query1='hola';
        echo view('datos.php');
    }
}
