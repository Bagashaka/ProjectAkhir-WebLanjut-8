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

    public $db, $builder;
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->db         = \Config\Database::connect();
        $this->builder    = $this->db->table('users');
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

    public function edit(){

        $dataDokter = $this->userModel->getDokter(user_id());
        $data = [
            'dokter' => $dataDokter,
        ];
        return view('update_profile', $data); 
    }

    public function updateProfile($id){
        $data = [ 
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'nama_dokter' => $this->request->getVar('nama_dokter'),            
            'nomor_kontak' => $this->request->getVar('nomor_kontak'),
            'spesialisasi' => $this->request->getVar('spesialisasi'),
        ];
        // dd($data);
        $this->builder->where('id', $id);
        $result = $this->builder->update($data);
        if (!$result) {
            session()->setFlashdata('error', 'Gagal Mengedit User');
            return redirect()->back()->withInput()
                ->with('error', 'Gagal mengubah data');
        }
        else {
            session()->setFlashdata('success', 'Berhasil Mengubah User');
            return redirect()->to('/dokter/profile');
        }
    }
}
