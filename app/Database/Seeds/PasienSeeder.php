<?php

namespace App\Database\Seeds;

use App\Models\PasienModel;
use CodeIgniter\Database\Seeder;

class PasienSeeder extends Seeder
{
    public function run()
    {
        $pasienModel = new PasienModel();

        $pasienModel->save([
            'nama_pasien' => 'Bagas Muhammad Shaka',
            'alamat_pasien' => 'Gg. Surya Kencana III',
            'tanggal_lahir'=> '2003-07-08',
            'nomor_kontak'=> '085796125787',
            'validasi' => true
        ]);
    }
}
