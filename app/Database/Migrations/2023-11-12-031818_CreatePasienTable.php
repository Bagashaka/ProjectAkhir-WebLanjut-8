<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePasienTable extends Migration
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
            'id_users'=> [
              'type'=> 'INT',
              'constraint'=> 5,
              'unsigned'=> true,
            ],
            'nama_pasien' => [
                'type'=>'VARCHAR',
                'constraint' => 28,
            ],
            'alamat_pasien'=> [
                'type'=>'VARCHAR',
                'constraint' => 100,
            ],
            'tanggal_lahir'=>[
                'type'     => 'DATE',
            ],
            'nomor_kontak'=> [
                'type'=> 'VARCHAR',
                'constraint'=> '14',
            ],
            'validasi'=> [
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
    
          $this->forge->addKey('id', true, true);
          $this->forge->addForeignKey('id_users', 'users', 'id', 'CASCADE', 'CASCADE', 'fk_users_pasien');
          $this->forge->createTable('pasien');
    }

    public function down()
    {
        $this->forge->dropTable('pasien', true);
    }
}
