<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTbGejala1 extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'     => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'kode'   => ['type' => 'VARCHAR', 'constraint' => '5'],
            'gejala' => ['type' => 'VARCHAR', 'constraint' => '200'],
            
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('tb_gejala_1');
    }

    public function down()
    {
        $this->forge->dropTable('tb_gejala_1');
    }
}
