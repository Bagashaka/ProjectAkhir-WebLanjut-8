<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTbPenyakit extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'       => ['type' => 'INT', 'constraint' => 11,  'auto_increment' => true],
            'penyakit' => ['type' => 'VARCHAR', 'constraint' => '50'],
            'info'     => ['type' => 'LONGTEXT'],
            'solusi'   => ['type' => 'LONGTEXT'],
            
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id', 'tb_gejala', 'id', 'CASCADE', 'CASCADE', 'fk_gejala');
        $this->forge->createTable('tb_penyakit');
    }

    public function down()
    {
        $this->forge->dropTable('tb_penyakit');
    }
}
