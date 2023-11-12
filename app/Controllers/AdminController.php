<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MedisModel;
use App\Models\KunjunganModel;
use App\Models\UserModel;
class AdminController extends BaseController
{
    public $medisModel;
    public $adminModel;
    public $kunjunganModel;
    public function __construct(){
        $this->adminModel = new UserModel();
        $this->kunjunganModel = new KunjunganModel();
        $this->medisModel = new MedisModel();
    }

    protected $helpers=['form'];

    public function index(){

        return view('profile_page');
    }

}
