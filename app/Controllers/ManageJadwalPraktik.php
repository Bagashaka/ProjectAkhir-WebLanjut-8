<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JadwalModel;
use App\Models\UserModel;

class ManageJadwalPraktik extends BaseController
{
    

    public $jadwalModel, $userModel;
 
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->jadwalModel = new JadwalModel();
    }

    public function index()
    {
        $jadwal = $this->jadwalModel->getJadwalPraktik();

        $data = [
            'title' => "Manajemen Jadwal Praktik",
            'jadwal' => $jadwal,
        ];

        return view('list_jadwal_praktik', $data);
    }

    public function create()
    {
        helper('form');
        $data = [
            'title' => 'Tambah Rekam Medis',
            'users' => $this->userModel->getDokter(user_id()),
            'validation' => \Config\Services::validation()
        ];
        return view('create_jadwal_praktik_dokter');
    }

    public function save(){
        $this->jadwalModel->save([
            'id_dokter' => $this->request->getVar('nama_dokter'),
            'hari' => $this->request->getVar('hari'),
            'jam_mulai' => $this->request->getVar('jam_mulai'),
            'jam_selesai' => $this->request->getVar('jam_selesai'),
            'lokasi' => $this->request->getVar('lokasi'),
        ]);
        return redirect()->to(base_url('/dokter/jadwal'));
    }

    public function edit($id)
    {
        $jadwal = $this->jadwalModel->getJadwalPraktik($id);

        $data = [
            'jadwal' => $jadwal,
            'validation' => \Config\Services::validation()
        ];

        return view('edit_jadwal_praktik', $data);
    }

    public function update($id)
    {
        $data = [ 
            'id_dokter' => $this->request->getVar('nama_dokter'),
            'hari' => $this->request->getVar('hari'),
            'jam_mulai' => $this->request->getVar('jam_mulai'),
            'jam_selesai' => $this->request->getVar('jam_selesai'),
            'lokasi' => $this->request->getVar('lokasi'),
        ];

        $this->jadwalModel->update($id, $data);

        return redirect()->to('/dokter/jadwal');
    }

    public function showJadwal(){
        $jadwal = $this->jadwalModel->getJadwal();

        $data = [
            'title' => "Manajemen Jadwal Praktik",
            'jadwal' => $jadwal,
        ];

        return view('list_jadwal_admin', $data);
        
    }

    public function delete($id)
    {
        $this->jadwalModel->delete($id);

        return redirect()->to('/dokter/jadwal');
    }
}
