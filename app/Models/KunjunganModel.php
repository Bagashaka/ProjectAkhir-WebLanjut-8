<?php

namespace App\Models;

use CodeIgniter\Model;
 
class KunjunganModel extends Model
{
    public function getKunjungan($id = null){
        if ($id == null) {
            return $this->select('riwayat_kunjungan.id, riwayat_kunjungan.id_pasien, riwayat_kunjungan.id_dokter, riwayat_kunjungan.id_rekam_medis, riwayat_kunjungan.tanggal_kunjungan, riwayat_kunjungan.validasi_kunjungan, users.nama_dokter')
            ->join('users','users.id=riwayat_kunjungan.id_dokter')                   
            ->find($id);
        }
            return$this->select('riwayat_kunjungan.id, riwayat_kunjungan.id_pasien, riwayat_kunjungan.id_dokter, riwayat_kunjungan.id_rekam_medis, riwayat_kunjungan.tanggal_kunjungan, riwayat_kunjungan.validasi_kunjungan, users.nama_dokter')
            ->join('users','users.id=riwayat_kunjungan.id_dokter')                   
            ->findAll();

    }
    public function getKunjunganPasien($id = null)
    {
        if ($id != null) {
            return $this->select('riwayat_kunjungan.id, riwayat_kunjungan.id_pasien, riwayat_kunjungan.id_dokter, riwayat_kunjungan.id_rekam_medis, riwayat_kunjungan.tanggal_kunjungan, riwayat_kunjungan.validasi_kunjungan, users.nama_dokter')
            ->join('users','users.id=riwayat_kunjungan.id_dokter')
            ->where('riwayat_kunjungan.validasi_kunjungan', 0)
            ->where('riwayat_kunjungan.id_pasien', user_id())            
            ->find($id);
        }
            return $this->select('riwayat_kunjungan.id, riwayat_kunjungan.id_pasien, riwayat_kunjungan.id_dokter, riwayat_kunjungan.id_rekam_medis, riwayat_kunjungan.tanggal_kunjungan, riwayat_kunjungan.validasi_kunjungan, users.nama_dokter')
            ->join('users','users.id=riwayat_kunjungan.id_dokter')
            ->where('riwayat_kunjungan.validasi_kunjungan', 0)
            ->where('riwayat_kunjungan.id_pasien', user_id())
            ->findAll();
    }

    public function getKunjunganDokter($id = null)
    {
        if ($id != null) {
            return $this->select('riwayat_kunjungan.id, riwayat_kunjungan.id_pasien, riwayat_kunjungan.id_dokter, riwayat_kunjungan.id_rekam_medis, riwayat_kunjungan.tanggal_kunjungan, riwayat_kunjungan.validasi_kunjungan, users.nama_pasien')
            ->join('users','users.id=riwayat_kunjungan.id_pasien')
            ->where('riwayat_kunjungan.validasi_kunjungan', 0)
            ->where('riwayat_kunjungan.id_dokter', user_id())            
            ->find($id);
        }
        return $this->select('riwayat_kunjungan.id, riwayat_kunjungan.id_pasien, riwayat_kunjungan.id_dokter, riwayat_kunjungan.id_rekam_medis, riwayat_kunjungan.tanggal_kunjungan, riwayat_kunjungan.validasi_kunjungan, users.nama_pasien')
        ->join('users','users.id=riwayat_kunjungan.id_pasien')
        ->where('riwayat_kunjungan.validasi_kunjungan', 0)
        ->where('riwayat_kunjungan.id_dokter', user_id())
        ->findAll();
    }


    public function getKunjunganPasienTerselesaikan($id = null)
    {
        if ($id != null) {
            return $this->select('riwayat_kunjungan.id, riwayat_kunjungan.id_pasien, riwayat_kunjungan.id_dokter, riwayat_kunjungan.id_rekam_medis, riwayat_kunjungan.tanggal_kunjungan, riwayat_kunjungan.validasi_kunjungan, users.nama_dokter, rekam_medis.keluhan,rekam_medis.diagnosa, rekam_medis.resep_obat')
            ->join('users','users.id=riwayat_kunjungan.id_dokter')
            ->join('rekam_medis', 'rekam_medis.id = riwayat_kunjungan.id_rekam_medis')
            ->where('riwayat_kunjungan.validasi_kunjungan', 1)
            ->where('riwayat_kunjungan.id_pasien', user_id())            
            ->find($id);
        }
        return $this->select('riwayat_kunjungan.id, riwayat_kunjungan.id_pasien, riwayat_kunjungan.id_dokter, riwayat_kunjungan.id_rekam_medis, riwayat_kunjungan.tanggal_kunjungan, riwayat_kunjungan.validasi_kunjungan, users.nama_dokter, rekam_medis.keluhan,rekam_medis.diagnosa, rekam_medis.resep_obat')
            ->join('users','users.id=riwayat_kunjungan.id_dokter')
            ->join('rekam_medis', 'rekam_medis.id = riwayat_kunjungan.id_rekam_medis')
            ->where('riwayat_kunjungan.validasi_kunjungan', 1)
            ->where('riwayat_kunjungan.id_pasien', user_id())        
            ->findAll();
    }

    public function getKunjunganDokterTerselesaikan($id = null)
    {
        if ($id != null) {
            return $this->select('riwayat_kunjungan.id, riwayat_kunjungan.id_pasien, riwayat_kunjungan.id_dokter, riwayat_kunjungan.id_rekam_medis, riwayat_kunjungan.tanggal_kunjungan, riwayat_kunjungan.validasi_kunjungan, users.nama_pasien, rekam_medis.keluhan,rekam_medis.diagnosa, rekam_medis.resep_obat')
            ->join('users','users.id=riwayat_kunjungan.id_pasien')
            ->join('rekam_medis', 'rekam_medis.id = riwayat_kunjungan.id_rekam_medis')
            ->where('riwayat_kunjungan.validasi_kunjungan', 1)
            ->where('riwayat_kunjungan.id_dokter', user_id())            
            ->find($id);
        }
        return $this->select('riwayat_kunjungan.id, riwayat_kunjungan.id_pasien, riwayat_kunjungan.id_dokter, riwayat_kunjungan.id_rekam_medis, riwayat_kunjungan.tanggal_kunjungan, riwayat_kunjungan.validasi_kunjungan, users.nama_pasien, rekam_medis.keluhan,rekam_medis.diagnosa, rekam_medis.resep_obat')
            ->join('users','users.id=riwayat_kunjungan.id_pasien')
            ->join('rekam_medis', 'rekam_medis.id = riwayat_kunjungan.id_rekam_medis')
            ->where('riwayat_kunjungan.validasi_kunjungan', 1)
            ->where('riwayat_kunjungan.id_dokter', user_id())        
            ->findAll();
    }

    

    

    protected $table            = 'riwayat_kunjungan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_pasien', 'id_dokter','id_rekam_medis','tanggal_kunjungan','validasi_kunjungan'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
