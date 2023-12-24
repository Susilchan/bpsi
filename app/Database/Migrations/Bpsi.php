<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bpsi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'created_date datetime default current_timestamp',
            'ph' => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
            ],
            'tds' => [
                'type'       => 'VARCHAR',
                'constraint' => '11',
            ],
            'suhu' => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
            ],
            'kualitas' => [
                'type'       => 'VARCHAR',
                'constraint' => '11',
            ],
           
            // 'updated_date datetime default current_timestamp on update current_timestamp',
        ]);
        
        $this->forge->addKey('id', true);
        $this->forge->createTable('bpsi');
    }

    public function down()
    {
        $this->forge->dropTable('bpsi');
        
    }
}

