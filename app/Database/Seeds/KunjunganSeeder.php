<?php

namespace App\Database\Seeds;


use App\Models\KunjunganModel;
use CodeIgniter\Database\Seeder;

class KunjunganSeeder extends Seeder
{
    public function run()
    {
        $kunjunganModel  = new KunjunganModel();

        $kunjunganModel->save([
            'id_pasien' => '2',
            'diagnosa' => 'Sakit Hati',
            'resep_obat' => 'Healing',
            'catatan_medis' => 'Jangan Kecapean',
            'tanggal_kunjungan' => '2023-10-29',
            'validasi_kunjungan' => 'Y'
        ]);
    }
}
