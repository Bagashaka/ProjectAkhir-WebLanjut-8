<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JadwalPraktikDokter extends Migration
{
    public function up(){
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_dokter' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'hari' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
            ],
            'jam_mulai' => [
                'type' => 'TIME',
            ],
            'jam_selesai' => [
                'type' => 'TIME',
            ],
            'lokasi' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('id_dokter', 'users', 'id', 'CASCADE', 'CASCADE', 'fk_praktik');
        $this->forge->createTable('jadwal_praktik_dokter');
    }

    public function down()
    {
        $this->forge->dropTable('jadwal_praktik_dokter');
    }
}
