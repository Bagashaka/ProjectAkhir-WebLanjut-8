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
            'nama'=>[
                'type'  =>'VARCHAR',
                'constraint'=>'255',
            ],
            'sip'=>[
                'type'  =>'INT',
                'constraint'=>'50',
            ],
            'spesialisasi'=>[
                'type'  =>'VARCHAR',
                'constraint'=>'255',
            ],
            
            'jadwal_prak'=>[
                'type'=>'DATETIME',
                'null'=>true,
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
