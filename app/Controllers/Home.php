<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('landing_page');
    }

    public function dashdok()
    {
        return view('dashboard_dokter');
    }

    public function signin()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function landing_page()
    {
        return view('landing_page');
    }


}
