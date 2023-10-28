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
              'nama_pasien' => [
                  'type'=>'VARCHAR',
                  'constraint' => 28,
              ],
              'alamat_pasien'=> [
                  'type'=>'VARCHAR',
                  'constraint' => 100,
              ],
              'umur_pasien'=>[
                  'type'           => 'INT',
                  'constraint'     => 2,
              ],
              'nomor_kontak'=> [
                  'type'=> 'INT',
                  'constrain'=> 13,
              ],
              'username'=> [
                'type'=> 'VARCHAR',
                'constraint' => 30,
              ],
              'password'=> [
                'type'=> 'VARCHAR',
                'constraint' => 30,
              ],
              'validasi'=> [
                'type'=> 'CHAR',
                'constraint' => 1,
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
            $this->forge->createTable('pasien');
        
    }

    public function down()
    {
        $this->forge->dropTable('pasien', true);
    }
}
