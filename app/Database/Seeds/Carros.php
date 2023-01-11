<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Carros extends Seeder
{
    public function run()
    {
        $data = [
                'tipo' => 'Carrito 1 ',
                'precio'    => '30000',
        ];
        // Using Query Builder
        $this->db->table('carros')->insert($data);
    }
}
