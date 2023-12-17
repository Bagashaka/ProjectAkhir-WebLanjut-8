<?php

namespace App\Controllers;

use App\Models\KunjunganModel;
use App\Models\MedisModel;
use App\Models\UserModel;
use PSpell\Config;

class Home extends BaseController
{

    public $userModel, $kunjunganModel, $medisModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kunjunganModel = new KunjunganModel();
        $this->medisModel = new MedisModel();
    }
    public function index(): string
    { 
        if(logged_in() && in_groups('admin')){
            
            $dataPasien = $this->userModel->withGroup('pasien')->getPasien();
            $dataDokter = $this->userModel->withGroup('dokter')->getDokter();
            $data = [
                'users' => $dataPasien,
                'dokters' => $dataDokter
            ];
            // dd($data);
            return view('home_page',$data);

        }elseif (logged_in() && in_groups('pasien')) 
        {
            
            $dataKunjungan = $this->kunjunganModel->getKunjunganPasien();              
            $data = [
            'kunjungan' => $dataKunjungan,  
            ];

            // dd($data);
            return view('home_page', $data);
        }

        elseif (logged_in() && in_groups('dokter'))
        {
            $dataKunjungan = $this->kunjunganModel->getKunjunganDokter();              
            $data = [
            'title' => "Jadwal Kunjungan Anda",
            'kunjungan' => $dataKunjungan,  
            ];
    
            // dd($data);
            return view('home_page', $data);
        }else
        {
        return view('landing_page');
        }
    }

 

}
