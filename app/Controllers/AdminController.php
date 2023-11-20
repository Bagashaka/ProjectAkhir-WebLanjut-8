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

    public $db, $builder;

    public function __construct(){
        $this->adminModel = new UserModel();
        $this->db         = \Config\Database::connect();
        $this->builder    = $this->db->table('users');

        $this->kunjunganModel = new KunjunganModel();
        $this->medisModel = new MedisModel();
    }

    protected $helpers=['form']; 
    
    public function index(){

        
        return view('profile_page');
    }
 

    public function edit(){

        $dataAdmin = $this->adminModel->getAdmin(user_id());
        $data = [
            'admin' => $dataAdmin,
        ];
        return view('update_profile', $data); 
    }

    public function updateProfile($id){
            $data = ([
            'email' => $this->request->getVar('email'),
            'nama_admin' => $this->request->getVar('nama_admin'),
            'umur_admin' => $this->request->getVar('umur_admin'),
            'alamat_admin' => $this->request->getVar('alamat_admin'),
            'username' => $this->request->getVar('username'),
        ]);

        // dd($data);
        $this->builder->where('id', $id);         
        $result = $this->builder->update($data);
        if (!$result) {
            session()->setFlashdata('error', 'Gagal Mengubah Profile');
            return redirect()->back()->withInput()
                ->with('error', 'Gagal mengubah data');
        }
        else {
            session()->setFlashdata('success', 'Berhasil Mengubah Profile');
            return redirect()->to('/admin/profile');
        }
    }

    public function userCreate(){
        return view('register_user');
    }

}
