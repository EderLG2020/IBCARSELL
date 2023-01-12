<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Carros extends Seeder
{
    public function run()
    {
        $data = [
                'tipo' => 'Carrito 2 ',
                'precio'    => '15243',
        ];
        // Using Query Builder
        $this->db->table('carros')->insert($data);
    }
}
