<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KunjunganModel;
use App\Models\DokterModel;
use App\Models\UserModel;

class UserController extends BaseController
{
    public $dokterModel;
    public $kunjunganModel;
    public $userModel;

    public function __construct(){
        $this->dokterModel = new DokterModel();
        $this->kunjunganModel= new KunjunganModel();
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $dokter = $this->userModel->getDokter(user_id());

        $data = [
            'dokter' => $dokter,
        ];
        // dd($data);
        return view('profile_page' , $data);   
    }
}
