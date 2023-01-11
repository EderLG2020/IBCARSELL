<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TCarros extends Migration{
    public function up()
    {
        $this->forge->addField([
            'carros_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'carros_tipo' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('carros_id', true);
        $this->forge->createTable('carros');
    }


    public function down(){
        $this->forge->dropTable('carros');
    }
}
