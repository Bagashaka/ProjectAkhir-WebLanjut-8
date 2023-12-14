<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTbGejala extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'   => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            // Tambahkan kolom G001 sampai G050
            'G001' => ['type' => 'TINYINT', 'constraint' => 1],
            'G002' => ['type' => 'TINYINT', 'constraint' => 1],
            'G003' => ['type' => 'TINYINT', 'constraint' => 1],
            'G004' => ['type' => 'TINYINT', 'constraint' => 1],
            'G005' => ['type' => 'TINYINT', 'constraint' => 1],
            'G006' => ['type' => 'TINYINT', 'constraint' => 1],
            'G007' => ['type' => 'TINYINT', 'constraint' => 1],
            'G008' => ['type' => 'TINYINT', 'constraint' => 1],
            'G009' => ['type' => 'TINYINT', 'constraint' => 1],
            'G010' => ['type' => 'TINYINT', 'constraint' => 1],
            'G011' => ['type' => 'TINYINT', 'constraint' => 1],
            'G012' => ['type' => 'TINYINT', 'constraint' => 1],
            'G013' => ['type' => 'TINYINT', 'constraint' => 1],
            'G014' => ['type' => 'TINYINT', 'constraint' => 1],
            'G015' => ['type' => 'TINYINT', 'constraint' => 1],
            'G016' => ['type' => 'TINYINT', 'constraint' => 1],
            'G017' => ['type' => 'TINYINT', 'constraint' => 1],
            'G018' => ['type' => 'TINYINT', 'constraint' => 1],
            'G019' => ['type' => 'TINYINT', 'constraint' => 1],
            'G020' => ['type' => 'TINYINT', 'constraint' => 1],
            'G021' => ['type' => 'TINYINT', 'constraint' => 1],
            'G022' => ['type' => 'TINYINT', 'constraint' => 1],
            'G023' => ['type' => 'TINYINT', 'constraint' => 1],
            'G024' => ['type' => 'TINYINT', 'constraint' => 1],
            'G025' => ['type' => 'TINYINT', 'constraint' => 1],
            'G026' => ['type' => 'TINYINT', 'constraint' => 1],
            'G027' => ['type' => 'TINYINT', 'constraint' => 1],
            'G028' => ['type' => 'TINYINT', 'constraint' => 1],
            'G029' => ['type' => 'TINYINT', 'constraint' => 1],
            'G030' => ['type' => 'TINYINT', 'constraint' => 1],
            'G031' => ['type' => 'TINYINT', 'constraint' => 1],
            'G032' => ['type' => 'TINYINT', 'constraint' => 1],
            'G033' => ['type' => 'TINYINT', 'constraint' => 1],
            'G034' => ['type' => 'TINYINT', 'constraint' => 1],
            'G035' => ['type' => 'TINYINT', 'constraint' => 1],
            'G036' => ['type' => 'TINYINT', 'constraint' => 1],
            'G037' => ['type' => 'TINYINT', 'constraint' => 1],
            'G038' => ['type' => 'TINYINT', 'constraint' => 1],
            'G039' => ['type' => 'TINYINT', 'constraint' => 1],
            'G040' => ['type' => 'TINYINT', 'constraint' => 1],
            'G041' => ['type' => 'TINYINT', 'constraint' => 1],
            'G042' => ['type' => 'TINYINT', 'constraint' => 1],
            'G043' => ['type' => 'TINYINT', 'constraint' => 1],
            'G044' => ['type' => 'TINYINT', 'constraint' => 1],
            'G045' => ['type' => 'TINYINT', 'constraint' => 1],
            'G046' => ['type' => 'TINYINT', 'constraint' => 1],
            'G047' => ['type' => 'TINYINT', 'constraint' => 1],
            'G048' => ['type' => 'TINYINT', 'constraint' => 1],
            'G049' => ['type' => 'TINYINT', 'constraint' => 1],
            'G050' => ['type' => 'TINYINT', 'constraint' => 1],
            
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('tb_gejala');
    }

    public function down()
    {
        $this->forge->dropTable('tb_gejala');
    }
}
