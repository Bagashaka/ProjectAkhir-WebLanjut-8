<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRekamMedisTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
                'type'          => 'INT',
                'constraint'    => 8,
                'unsigned'      => true,
                'auto_increment'=>true,
            ],
            'id_pasien'=> [
                'type'=> 'INT',
                'constraint'=> 5,
                'unsigned'=> true,
            ],
            'keluhan' => [
                'type'=>'VARCHAR',
                'constraint' => 255,
            ],
            'diagnosa' => [
                'type'=>'VARCHAR',
                'constraint' => 255,
            ],
            'resep_obat'=> [
                'type'=>'VARCHAR',
                'constraint' => 100,
            ],
            'tanggal_pemeriksaan'=> [
                'type'=> 'DATE',
            ],
            
        ]);
        $this->forge->addKey('id',true, true);
        $this->forge->addForeignKey('id_pasien', 'pasien', 'id', 'CASCADE', 'CASCADE', 'fk_pasien');
        $this->forge->createTable('rekam_medis');
    }

    public function down()
    {
        $this->forge->dropTable('rekam_medis', true);
    }
}
