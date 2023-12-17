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
            'id_dokter'=> [
                'type'=> 'INT',
                'constraint'=> 5,
                'unsigned'=> true,
            ],
            'id_rekam_medis'=> [
                'type'=> 'INT',
                'constraint'=> 5,
                'unsigned'=> true,
                'null' => true,
            ],
            'tanggal_kunjungan'=> [
                'type'=> 'DATE',
            ],
            'validasi_kunjungan'=>[
                'type'=> 'BOOL',
                'default'=> false,
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

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_pasien', 'users', 'id', 'CASCADE', 'CASCADE', 'fk_kunjungan_pasien');
        $this->forge->addForeignKey('id_dokter', 'users', 'id', 'CASCADE', 'CASCADE', 'fk_dokter');
        $this->forge->addForeignKey('id_rekam_medis', 'rekam_medis', 'id', 'CASCADE', 'CASCADE', 'fk_rekam_medis');
        $this->forge->createTable('riwayat_kunjungan');
    }

    public function down()
    {
        $this->forge->dropTable('riwayat_kunjungan', true);
    }
}
