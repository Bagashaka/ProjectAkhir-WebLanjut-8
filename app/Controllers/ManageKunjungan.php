<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KunjunganModel;
use App\Models\MedisModel;
use App\Models\UserModel;

class ManageKunjungan extends BaseController
{

    public $userModel, $kunjunganModel, $medisModel;
    public $db, $builder;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kunjunganModel = new KunjunganModel();
        $this->medisModel = new MedisModel();
        $this->db         = \Config\Database::connect();
        $this->builder    = $this->db->table('riwayat_kunjungan');
    }
    public function index()
    {
        //
    }

    public function jadwalKunjungan(){
         
        $dataKunjungan = $this->kunjunganModel->getKunjunganPasien();              
        $data = [
        'title' => "Jadwal Kunjungan Anda",
        'kunjungan' => $dataKunjungan,  
        ];

        // dd($data);
        return view('list_jadwal_kunjungan', $data);
    }

    public function KunjunganTerselesaikanPasien(){
         
        $dataKunjungan = $this->kunjunganModel->getKunjunganPasienTerselesaikan();              
        $data = [
        'title' => "Kunjungan Terselesaikan",
        'kunjungan' => $dataKunjungan,  
        ];
        // dd($data);
        return view('list_kunjungan_pasien', $data);
    }

    public function create(){
        helper('form');
        $data = [
            'title' => 'Buat Rencana Kunjungan',
            'users' => $this->userModel->getPasien(),
            'dokter'=> $this->userModel->getDokter(),
            'validation' => \Config\Services::validation()
        ];
        return view('create_kunjungan', $data);
    }

    public function save()
    {
        $this->kunjunganModel->save([
            'id_pasien' => $this->request->getVar('nama_pasien'),
            'id_dokter' => $this->request->getVar('nama_dokter'),          
            'tanggal_kunjungan' => $this->request->getVar('tanggal_kunjungan'),
        ]);

        return redirect()->to(base_url('/'));
    }

    public function delete($id)
    {
        $this->kunjunganModel->delete($id);
        return redirect()->to('/pasien/jadwal/kunjungan');
    }

    public function edit($id)
    {
        $dataKunjungan = $this->kunjunganModel->getKunjunganPasien($id);
        $data = [
            'title' => 'Update Rencana Kunjungan',
            'kunjungan' => $dataKunjungan,
            'users' => $this->userModel->getPasien(),
            'dokter'=> $this->userModel->getDokter(),
            'validation' => \Config\Services::validation()
        ];
        // dd($data);

        return view('edit_kunjungan_pasien', $data);
    }

    public function update($id)
    {
        $data = [
            'id_pasien' => $this->request->getVar('nama_pasien'),
            'id_dokter' => $this->request->getVar('nama_dokter'),          
            'tanggal_kunjungan' => $this->request->getVar('tanggal_kunjungan'),
        ];
        $this->builder->where('id', $id);
        $result = $this->builder->update($data);
        if(!$result){
            session()->setFlashdata('error', 'Gagal Memperbarui Jadwal Kunjungan');
            return redirect()->back()->withInput()
                ->with('error', 'Gagal mengubah data');
        }
        else {
            session()->setFlashdata('success', 'Berhasil Mengubah Jadwal Kunjungan');
            return redirect()->to('/pasien/jadwal/kunjungan');
        }
    }


    //--------------------------------Kunjungan Dokter----------------------------------------------------------
    public function jadwalKunjunganDokter(){
         
        $dataKunjungan = $this->kunjunganModel->getKunjunganDokter();              
        $data = [
        'title' => "Jadwal Kunjungan Anda",
        'kunjungan' => $dataKunjungan,  
        ];

        // dd($data);
        return view('list_jadwal_kunjungan_dokter', $data);
    }

    public function editDokter($id)
    {
        $dataKunjungan = $this->kunjunganModel->getKunjunganDokter($id);
        $data = [
            'title' => 'Update Rencana Kunjungan',
            'kunjungan' => $dataKunjungan,
            'users' => $this->userModel->getPasien(),
            'dokter'=> $this->userModel->getDokter(),
            'medis' => $this->medisModel->getRekam(),
            'validation' => \Config\Services::validation()
        ];
        // dd($data);

        return view('edit_kunjungan_dokter', $data);
    }

    public function updateDokter($id)
    {
        $data = [
            'id_pasien' => $this->request->getVar('nama_pasien'),
            'id_dokter' => $this->request->getVar('nama_dokter'),   
            'id_rekam_medis' => $this->request->getVar('rekam_medis'),      
            'tanggal_kunjungan' => $this->request->getVar('tanggal_kunjungan'),
            'validasi_kunjungan' => $this->request->getVar('validasi_kunjungan'),
        ];
        $this->builder->where('id', $id);
        $result = $this->builder->update($data);
        if(!$result){
            session()->setFlashdata('error', 'Gagal Memperbarui Jadwal Kunjungan');
            return redirect()->back()->withInput()
                ->with('error', 'Gagal mengubah data');
        }
        else {
            session()->setFlashdata('success', 'Berhasil Mengubah Jadwal Kunjungan');
            return redirect()->to('/dokter/jadwal/kunjungan');
        }
    }

    public function KunjunganTerselesaikanDokter(){
         
        $dataKunjungan = $this->kunjunganModel->getKunjunganDokterTerselesaikan();              
        $data = [
        'title' => "Kunjungan Terselesaikan",
        'kunjungan' => $dataKunjungan,  
        ];

        // dd($data);
        return view('list_kunjungan_dokter', $data);
    }
    // ------------------------ ADMIN --------------------------------------------------
    public function daftarKunjungan()
    {
        $dataKunjungan = $this->kunjunganModel->getKunjungan();              
        $data = [
        'title' => "Daftar Jadwal Kunjungan",
        'kunjungan' => $dataKunjungan,  
        ];

        // dd($data);
        return view('list_jadwal_kunjungan_admin', $data);
    }

    public function deleteAdmin($id)
    {
        $this->kunjunganModel->delete($id);
        return redirect()->to('/admin/kunjungan');
    }
}
