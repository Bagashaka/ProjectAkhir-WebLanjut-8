<?php

namespace App\Controllers;

use App\Models\UserModel;
use PSpell\Config;

class Home extends BaseController
{

    public $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
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
            return view('home_page');
        }

        elseif (logged_in() && in_groups('dokter'))
        {
            return view('home_page');
        }else
        {
        return view('landing_page');
        }

         
    }

}
