<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KunjunganModel;
use App\Models\PasienModel;
use App\Models\UserModel;

class DashPasienController extends BaseController
{

    public $pasienModel;
    public $kunjunganModel;
    public $userModel;

    public function __construct(){
        $this->pasienModel = new PasienModel();
        $this->kunjunganModel= new KunjunganModel();
        $this->userModel = new UserModel();
    }

    public function index(){
        $pasien = $this->userModel->getPasien(user_id());

        $data = [
            'pasien' => $pasien,
        ];
        // dd($data);
        return view('profile_page' , $data);
    }

}
