<?php

namespace App\Controllers;
use App\Models\JadwalModel;
use App\Models\UserModel;


use CodeIgniter\RESTful\ResourceController;

class JadwalPrak extends ResourceController
{
    protected $modelName = 'App\Models\JadwalModel';
    protected $format = 'json';
    /**
     * Return an array of resource objects, themselves in array format
     * 
     * @return mixed
     */
    public function index()
    {
        $jadwal = $this->model->getJadwalPraktik();
        $data = [
            'message' => 'success',
            'title' => "Manajemen Jadwal Praktik",
            'jadwal' => $jadwal,
        ];

        return $this->respond($data, 200);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $jadwal = $this->model->getJadwalPraktik($id);
        $data = [
            'message' => 'success',
            'jadwal' => $jadwal,
        ];

        if($data['jadwal'] == null){
            return $this->failNotFound('Data Pegawai tidak ditemukan');
        }
        return $this->respond($data, 200);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $rules = $this->validate([
            'id_dokter'     => 'required',
            'hari'          => 'required',
            'jam_mulai'     => 'required',
            'jam_selesai'   => 'required',
            'lokasi'        => 'required',
        ]);

        if(!$rules){
            $response = [
                'message' => $this->validator->getErrors()
            ];
 
            return $this->failValidationErrors($response);
        }

        $this->model->insert([
            'id_dokter'     => esc($this->request->getVar('nama_dokter')),
            'hari'          => esc($this->request->getVar('hari')),
            'jam_mulai'     => esc($this->request->getVar('jam_mulai')),
            'jam_selesai'   => esc($this->request->getVar('jam_selesai')),
            'lokasi'        => esc($this->request->getVar('lokasi')),
        ]);

        $response = [
            'message' => 'Data Jadwal Berhasil Ditambahkan',
        ];
        return $this->respondCreated($response);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $rules = $this->validate([
            'id_dokter'     => 'required',
            'hari'          => 'required',
            'jam_mulai'     => 'required',
            'jam_selesai'   => 'required',
            'lokasi'        => 'required',
        ]);

        if(!$rules){
            $response = [
                'message' => $this->validator->getErrors()
            ];
 
            return $this->failValidationErrors($response);
        }

        $this->model->update($id,[
            'id_dokter'     => esc($this->request->getVar('nama_dokter')),
            'hari'          => esc($this->request->getVar('hari')),
            'jam_mulai'     => esc($this->request->getVar('jam_mulai')),
            'jam_selesai'   => esc($this->request->getVar('jam_selesai')),
            'lokasi'        => esc($this->request->getVar('lokasi')),
        ]);

        $response = [
            'message' => 'Data Jadwal Berhasil Diubah',
        ];

        return $this->respond($response, 200);
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->model->delete($id);
        $response = [
            'message' => 'Data Jadwal Berhasil Dihapus',
        ];
        return $this->respondDeleted($response);
    }
}
