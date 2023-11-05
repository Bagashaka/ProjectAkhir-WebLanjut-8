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
              'tanggal_lahir'=>[
                  'type'           => 'DATE',
              ],
              'nomor_kontak'=> [
                  'type'=> 'INT',
                  'constrain'=> 13,
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
            $this->forge->createTable('pasien');
        
    }

    public function down()
    {
        $this->forge->dropTable('pasien', true);
    }
}
