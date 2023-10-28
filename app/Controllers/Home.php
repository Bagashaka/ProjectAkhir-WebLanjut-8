<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('dashboard_pasien');
    }

    public function profile($nama="", $umurPasien="", $alammatPasien=""){
        $data = [
            'nama' => 'Bagas Muhammad Shaka',
            'umurPasien' => 20,
            'alamatPasien' => 'Kampung Baru' 
        ];

        return view('dashboard_pasien', $data);
    }
}
