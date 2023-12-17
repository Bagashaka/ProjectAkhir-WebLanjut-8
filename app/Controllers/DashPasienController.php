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
    public $db, $builder;
 
    public function __construct(){
        $this->kunjunganModel= new KunjunganModel();
        $this->userModel = new UserModel();
        $this->db         = \Config\Database::connect();
        $this->builder    = $this->db->table('users');
    }

    public function index(){
        $pasien = $this->userModel->getPasien(user_id());

        $data = [
            'pasien' => $pasien,
        ];
        // dd($data);
        return view('profile_page' , $data);
    }

    public function edit(){

        $dataDokter = $this->userModel->getPasien(user_id());
        $data = [
            'pasien' => $dataDokter,
        ];
        return view('update_profile', $data); 
    }

    public function updateProfile($id){
        $data = [           
            'nama_pasien' => $this->request->getVar('nama_pasien'),
            'username' => $this->request->getVar('username'),            
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'alamat_pasien' => $this->request->getVar('alamat_pasien'),            
            'nomor_kontak' => $this->request->getVar('nomor_kontak'),
            'email' => $this->request->getVar('email'),            
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
            return redirect()->to('/pasien/profile');
        }
    }



    

}
