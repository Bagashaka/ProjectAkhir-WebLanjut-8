<?php

namespace App\Controllers;
 
use App\Controllers\BaseController;
use App\Models\MedisModel;
use App\Models\UserModel;

class ManageRekamedis extends BaseController
{

    public $userModel, $medisModel;
    public $db, $builder;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->medisModel = new MedisModel();
        $this->db         = \Config\Database::connect();
        $this->builder    = $this->db->table('rekam_medis');
    }

    public function index() 
    {
        $data_medis = $this->medisModel->getRekam();

        $data = [
            'title' => 'Manage Rekam Medis',
            'medis' => $data_medis,
        ];
        // dd($data);
        return view('list_medis', $data);
    }
    public function create(){
        helper('form');
        $data = [
            'title' => 'Tambah Rekam Medis',
            'users' => $this->userModel->getPasien(),
            'validation' => \Config\Services::validation()
        ];
        return view('create_rekamedis', $data);
    }

    public function save()
    {
        $this->medisModel->save([
            'keluhan' => $this->request->getVar('keluhan'),
            'diagnosa' => $this->request->getVar('diagnosa'),
            'resep_obat' => $this->request->getVar('resep_obat'),
            'tanggal_pemeriksaan' => $this->request->getVar('tanggal_pemeriksaan'),
            'id_pasien' => $this->request->getVar('nama_pasien'),
        ]);

        return redirect()->to(base_url('/dokter/rekamedis'));
    }

    

    public function delete($id)
    {
        $this->medisModel->delete($id);
        return redirect()->to('/dokter/rekamedis');
    }

    public function edit($id){
        $data_medis = $this->medisModel->getRekam($id);

        $data = [
           'medis' => $data_medis,
           'users' => $this->userModel->getPasien(),
           'validation' => \Config\Services::validation()
        ];

        return view('edit_rekamedis', $data);
   }

   public function update($id){
       $data = [ 
           'keluhan' => $this->request->getVar('keluhan'),
           'diagnosa' => $this->request->getVar('diagnosa'),
           'resep_obat' => $this->request->getVar('resep_obat'),
           'tanggal_pemeriksaan' => $this->request->getVar('tanggal_pemeriksaan'),
           'id_pasien' => $this->request->getVar('nama_pasien'),
       ];

       $this->builder->where('id', $id);
       $result = $this->builder->update($data);
       if(!$result){
           session()->setFlashdata('error', 'Gagal Mengedit User');
           return redirect()->back()->withInput()
               ->with('error', 'Gagal mengubah data');
       }
       else {
           session()->setFlashdata('success', 'Berhasil Mengubah User');
           return redirect()->to('/dokter/rekamedis');
       }

   }

    
}
