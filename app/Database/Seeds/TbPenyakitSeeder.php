<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TbPenyakitSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id'       => 1,
                'penyakit' => 'Gingivitis',
                'info'     => 'Radang gusi yang disebabkan oleh plak bakteri. Gusi bengkak, merah, dan berdarah.',
                'solusi'   => 'Melakukan scaling, root planning, atau curettage yang disesuaikan dengan tingkat keparahan.',
            ],
            [
                'id'       => 2,
                'penyakit' => 'Trench Mouth',
                'info'     => 'Infeksi gusi yang menyebabkan peradangan dan ulserasi. Gejala meliputi rasa sakit dan bau mulut.',
                'solusi'   => 'Pemberian antibiotik atau antijamur.',
            ],
            [
                'id'       => 3,
                'penyakit' => 'Kandidiasis',
                'info'     => 'Infeksi jamur pada mulut yang disebabkan oleh Candida. Gejala meliputi bintik putih di dalam mulut.',
                'solusi'   => 'Pemberian antibiotik atau antijamur.',
            ],
            [
                'id'       => 4,
                'penyakit' => 'Abses Periodental',
                'info'     => 'Kumpulan nanah di dalam gusi yang disebabkan oleh infeksi bakteri. Menyebabkan rasa sakit dan bengkak.',
                'solusi'   => 'Melakukan scaling, root planning, atau curettage yang disesuaikan dengan tingkat keparahan.',
            ],
            [
                'id'       => 5,
                'penyakit' => 'Glositis',
                'info'     => 'Radang pada lidah yang dapat menyebabkan nyeri dan pembengkakan. Lidah berubah warna dan tekstur.',
                'solusi'   => 'Pemberian antibiotik atau antijamur.',
            ],
            [
                'id'       => 6,
                'penyakit' => 'Abses Periapikal',
                'info'     => 'Kumpulan nanah di ujung akar gigi yang disebabkan oleh infeksi bakteri. Menyebabkan rasa sakit hebat.',
                'solusi'   => 'Melakukan bedah mulut, pengobatan saluran akar, dan mencabut pulpa yang mengeluarkan nanah.',
            ],
            [
                'id'       => 7,
                'penyakit' => 'Herpes Labialis',
                'info'     => 'Infeksi virus pada bibir yang menyebabkan bintik-bintik kecil dan melepuh. Disertai rasa gatal dan panas.',
                'solusi'   => 'Diobati dengan salep acyclovir, dioleskan 3-5 kali sehari.',
            ],
            [
                'id'       => 8,
                'penyakit' => 'Herpes Zoster',
                'info'     => 'Infeksi virus yang menyebabkan ruam kulit dan rasa sakit. Terjadi pada saraf tertentu di kulit.',
                'solusi'   => 'Membersihkan luka dengan air garam dan menjaganya agar tetap kering.',
            ],
            [
                'id'       => 9,
                'penyakit' => 'Stomatitis',
                'info'     => 'Radang pada selaput lendir mulut yang disebabkan oleh infeksi virus atau bakteri.',
                'solusi'   => 'Pemberian antibiotik atau antijamur.',
            ],
            [
                'id'       => 10,
                'penyakit' => 'Gingivostomatitis',
                'info'     => 'Infeksi virus yang menyebabkan radang pada gusi dan selaput lendir mulut.',
                'solusi'   => 'Pemberian antibiotik atau antijamur.',
            ],
            [
                'id'       => 11,
                'penyakit' => 'Herpangina',
                'info'     => 'Infeksi virus yang menyebabkan bintik-bintik kemerahan pada tenggorokan dan mulut.',
                'solusi'   => 'Berkumur dengan obat kumur antiseptik, minum yang banyak, dan istirahat yang cukup.',
            ],
        ];

        // Insert data ke dalam tabel
        $this->db->table('tb_penyakit')->insertBatch($data);
    }
}
