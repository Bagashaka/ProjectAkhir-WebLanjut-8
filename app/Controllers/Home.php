<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home_page');
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


}
