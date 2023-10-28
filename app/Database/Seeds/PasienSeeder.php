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
            'umur_pasien'=> '20',
            'nomor_kontak'=> '085796125787',
            'username' => 'Bagashaka',
            'password'=> 'Bagashaka',
            'validasi' => 'Y'
        ]);
    }
}
