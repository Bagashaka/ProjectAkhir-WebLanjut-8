<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDokterTable extends Migration
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
            'id_users'=> [
                'type'=> 'INT',
                'constraint'=> 5,
                'unsigned'=> true,
              ],
            'nama_dokter'=>[
                'type'  =>'VARCHAR',
                'constraint'=>'255',
            ],
            'nomor_kontak'=> [
                'type'=> 'VARCHAR',
                'constraint'=> '14',
            ],
            'spesialisasi'=>[
                'type'  =>'VARCHAR',
                'constraint'=>'255',
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
        $this->forge->addKey('id',true, true);
        $this->forge->addForeignKey('id_users', 'users', 'id', 'CASCADE', 'CASCADE', 'fk_users_dokter');
        $this->forge->createTable('dokter');
    }

    public function down()
    {
        $this->forge->dropTable('dokter',true);
    }
}
