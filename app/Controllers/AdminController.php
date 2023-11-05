<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MedisModel;
use App\Models\AdminModel;

class AdminController extends BaseController
{
    public function index(){
        return view('dashboard_admin');
    }

    public function admin()
    {
   
    }

}
