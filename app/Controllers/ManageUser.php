<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use Myth\Auth\Password;

class ManageUser extends BaseController
{

    
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
        
        $data_users = $this->userModel->getUsers();
        // dd($data_users);
        $data = [
            'title' => "Manajemen User",
            'result' =>$data_users,
        ];
        // dd($data);

        return view('list_user', $data);
    }

    public function create(){
        helper('form');
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('create_users', $data);
    }

    public function save(){
        if(!$this->validate([
            'email' => [
                'rules' =>  'required|valid_email|is_unique[users.email,id,{id}]',
                'errors'=>[
                    'required'=>"{field} harus diisi.",
                    'valid_email'=>"Format email salah.",
                    'is_unique'=>"Email sudah terdaftar."
                ]
            ],
            'username' => [
                'rules' =>  'required|alpha_numeric_punct|min_length[3]|max_length[30]|is_unique[users.username,id,{id}]',
                'errors' => [
                    'required'              =>  "{field} harus diisi.",
                    'min_length'            =>  "Panjang karakter minimal 3 huruf.",
                    'max_length'            =>  "Panjang karakter maksimal 30 huruf.",
                    'alpha_numeric_space'   =>  "Hanya boleh berupa angka dan huruf tanpa spasi.",
                    'is_unique'             =>  "Username sudah terdaftar."
                ]
            ]
        ])){
            $validation = \Config\Services::validation(); 
            // dd($validation); 
            return redirect()->to(base_url('/users/create'))->withInput()->with('validation', $validation);
        }

            $user_myth = new UserModel();
            $user_myth->withGroup($this->request->getVar('role'))->save([
                'email' => $this->request->getVar('email'),
                'username' => $this->request->getVar('username'),
                'password_hash' => Password::hash("MilkuatBeku"),
                'active' => 1
            ]);
            session()->setFlashdata('success', 'Berhasil Menambahkan User');
            return redirect()->to(base_url('/users'));
    }

    public function editPasien($id){
        $pasien = $this->userModel->getPasien($id);

        $data = [
            'pasien' => $pasien,
            'validation' => \Config\Services::validation()
        ];
        return view('edit_pasien', $data);
    }

    public function editDokter($id){
        $dokter = $this->userModel->withGroup('dokter')->getDokter($id);
        $data = [
            'dokter' => $dokter,
            'validation' => \Config\Services::validation()
        ];


        // dd($data);
        return view('edit_dokter', $data);
    }

    public function updatePasien($id){
        $data = [
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'nama_pasien' => $this->request->getVar('nama_pasien'),
            'alamat_pasien' => $this->request->getVar('alamat_pasien'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'nomor_kontak' => $this->request->getVar('nomor_kontak'),
            'validasi' => $this->request->getVar('validasi')
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
            return redirect()->to('/');
        } 
    }

    public function updateDokter($id){
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
            return redirect()->to('/');
        }
    }
 
    public function delete($id)
    {
        $this->userModel->delete($id);
        session()->setFlashdata('success', 'Data Berhasil Dihapus');
        return redirect()->to('/users');
    }

    public function resetPassword($id)
    {
        $this->userModel->save([
            'id'=>$id,
            'password_hash' =>Password::hash("MilkuatBeku"),
        ]);

        session()->setFlashdata('success', 'Reset Pasword Berhasil (MilkuatBeku)');
        return redirect()->to('/users');
    }
}
