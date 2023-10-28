<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRiwayatKunjunganTable extends Migration
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
            'id_pasien'=> [
                'type'=> 'INT',
                'constraint'=> 5,
                'unsigned'=> true,
            ],
            'diagnosa' => [
                'type'=>'VARCHAR',
                'constraint' => 255,
            ],
            'resep_obat'=> [
                'type'=>'VARCHAR',
                'constraint' => 100,
            ],
            'catatan_medis'=>[
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'tanggal_kunjungan'=> [
                'type'=> 'DATE',
            ],
            'validasi_kunjungan'=>[
                'type'=> 'CHAR',
                'constraint'     => 1,
            ],
            'created_at' => [
                'type'=>'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type'=>'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type'=>'DATETIME',
                'null' => true,
            ],        
          ]);
    
          $this->forge->addKey('id', true, true);
          $this->forge->addForeignKey('id_pasien', 'pasien', 'id');
          $this->forge->createTable('riwayatKunjungan');
      
    }

    public function down()
    {
        $this->forge->dropTable('riwayatKunjungan', true);
    }
}
