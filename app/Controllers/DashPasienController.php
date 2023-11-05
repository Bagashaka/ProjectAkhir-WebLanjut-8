<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KunjunganModel;
use App\Models\PasienModel;

class DashPasienController extends BaseController
{

    public $pasienModel;
    public $kunjunganModel;

    public function __construct(){
        $this->pasienModel = new PasienModel();
        $this->kunjunganModel= new KunjunganModel();
    }

    public function index(){
        return view('dashboard_pasien');
    }

    public function show($id)
    {

        $pasien = $this->pasienModel->getPasien($id);
        $kunjungan = $this->kunjunganModel->getKunjungan();
        // dd($pasien);
        $data = [
            'pasien' => $pasien,
            'kunjungan' => $kunjungan,
            'title' => 'Dashboard Pasien',
        ];

        return view('dashboard_pasien', $data);
    }

}
