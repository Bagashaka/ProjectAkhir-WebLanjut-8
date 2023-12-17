<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TbGejala1Seeder extends Seeder
{
    public function run()
    {
        $data = [
            ['kode' => 'G001', 'gejala' => 'Bau mulut tak sedap'],
            ['kode' => 'G002', 'gejala' => 'Gusi bengkak dan berdarah'],
            ['kode' => 'G003', 'gejala' => 'Gelisah'],
            ['kode' => 'G004', 'gejala' => 'Kelelahan'],
            ['kode' => 'G005', 'gejala' => 'Luka antara gusi dan gigi'],
            ['kode' => 'G006', 'gejala' => 'Benjolan di bagian kepala, leher, atau rahang'],
            ['kode' => 'G007', 'gejala' => 'Demam'],
            ['kode' => 'G008', 'gejala' => 'Gusi mudah berdarah'],
            ['kode' => 'G009', 'gejala' => 'Kelenjar getah bening di bagian bawah rahang sering bengkak'],
            ['kode' => 'G010', 'gejala' => 'Nyeri pada saat menelan makanan'],
            ['kode' => 'G011', 'gejala' => 'Nyeri pada mulut'],
            ['kode' => 'G012', 'gejala' => 'Kehilangan selera makan'],
            ['kode' => 'G013', 'gejala' => 'Bengkak pada gusi'],
            ['kode' => 'G014', 'gejala' => 'Sakit pada saat membuka mulut'],
            ['kode' => 'G015', 'gejala' => 'Pada sudut mulut pecah-pecah dan kemerahan'],
            ['kode' => 'G016', 'gejala' => 'Radang pada lidah'],
            ['kode' => 'G017', 'gejala' => 'Pembengkakan kelenjar getah bening di leher'],
            ['kode' => 'G018', 'gejala' => 'Permukaan lidah halus'],
            ['kode' => 'G019', 'gejala' => 'Sakit saat mengunyah makanan'],
            ['kode' => 'G020', 'gejala' => 'Lidah berwarna merah keputihan'],
            ['kode' => 'G021', 'gejala' => 'Alergi pada pasta gigi dan obat kumur'],
            ['kode' => 'G022', 'gejala' => 'Nyeri saat gigi tertekan oleh makanan'],
            ['kode' => 'G023', 'gejala' => 'Sulit mengunyah, menelan, dan berbicara'],
            ['kode' => 'G024', 'gejala' => 'Ujung gusi mengalami pengikisan'],
            ['kode' => 'G025', 'gejala' => 'Bintik kuning, putih, di dalam mulut'],
            ['kode' => 'G026', 'gejala' => 'Kulit terkelupas'],
            ['kode' => 'G027', 'gejala' => 'Pusing'],
            ['kode' => 'G028', 'gejala' => 'Pendarahan apabila gusi tergores'],
            ['kode' => 'G029', 'gejala' => 'Timbul kerak yang berlebihan'],
            ['kode' => 'G030', 'gejala' => 'Tubuh terasa meriang dan pegal-pegal'],
            ['kode' => 'G031', 'gejala' => 'Merintih kecil'],
            ['kode' => 'G032', 'gejala' => 'Bibir terasa kering'],
            ['kode' => 'G033', 'gejala' => 'Luka terbuka lebar pada mulut'],
            ['kode' => 'G034', 'gejala' => 'Gusi berwarna merah terang'],
            ['kode' => 'G035', 'gejala' => 'Banyak luka terbuka berwarna putih dan kuning pada mulut'],
            ['kode' => 'G036', 'gejala' => 'Perih di sekitar luka pada mulut'],
            ['kode' => 'G037', 'gejala' => 'Sakit dan bercak gatal di mulut dan kulit'],
            ['kode' => 'G038', 'gejala' => 'Perbedaan warna pada kulit sekitar mulut'],
            ['kode' => 'G039', 'gejala' => 'Kesemutan pada wilayah bibir'],
            ['kode' => 'G040', 'gejala' => 'Gusi menyerupai keju'],
            ['kode' => 'G041', 'gejala' => 'Di dalam mulut seperti terdapat kapas'],
            ['kode' => 'G042', 'gejala' => 'Gatal dan iritasi pada bagian bibir dan mulut'],
            ['kode' => 'G043', 'gejala' => 'Rasa nyeri dan sakit pada bibir dan mulut'],
            ['kode' => 'G044', 'gejala' => 'Muncul nanah pada mulut'],
            ['kode' => 'G045', 'gejala' => 'Pusing dan meriang'],
            ['kode' => 'G046', 'gejala' => 'Lecet pada bibir dan mulut'],
            ['kode' => 'G047', 'gejala' => 'Nyeri pada gusi'],
            ['kode' => 'G048', 'gejala' => 'Sakit tenggorokan'],
            ['kode' => 'G049', 'gejala' => 'Terjadi papular, lesi vesikular pada mukosa mulut'],
            ['kode' => 'G050', 'gejala' => 'Terjadi popular, lesi vesikular pada mukosa faringeal'],
        ];

        // Insert data ke dalam tabel
        $this->db->table('tb_gejala_1')->insertBatch($data);
    }
}