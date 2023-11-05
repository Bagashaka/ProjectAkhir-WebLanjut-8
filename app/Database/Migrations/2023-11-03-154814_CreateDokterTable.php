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
            'nama_dokter'=>[
                'type'  =>'VARCHAR',
                'constraint'=>'255',
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
        $this->forge->createTable('dokter');
    }

    public function down()
    {
        $this->forge->dropTable('dokter',true);
    }
}
