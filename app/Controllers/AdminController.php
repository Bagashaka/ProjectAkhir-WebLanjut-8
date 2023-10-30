<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MedisModel;
use App\Models\AdminModel;

class AdminController extends BaseController
{
    public function index(){
        //
    }

    public function admin()
    {
        return view('dashboard_admin');
    }

}
