<?php

namespace App\Models;

use CodeIgniter\Model;

class KunjunganModel extends Model
{
    public function getKunjungan($id = null){
        if ($id !=null) {
            return $this->select('riwayat_kunjungan.id, riwayat_kunjungan.id_pasien, riwayat_kunjungan.id_dokter, riwayat_kunjungan.id_rekam_medis, riwayat_kunjungan.tanggal_kunjungan, riwayat_kunjungan.validasi_kunjungan, pasien.nama_pasien, dokter.nama_dokter, rekam_medis.keluhan, rekam_medis.diagnosa, rekam_medis.resep_obat ')
            ->join('pasien','pasien.id=riwayat_kunjungan.id_pasien')->join('dokter','dokter.id=riwayat_kunjungan.id_dokter')->join('rekam_medis', 'rekam_medis.id=riwayat_kunjungan.id_rekam_medis','left')->find($id);
        }
        return $this->select('riwayat_kunjungan.id, riwayat_kunjungan.id_pasien, riwayat_kunjungan.id_dokter, riwayat_kunjungan.id_rekam_medis, riwayat_kunjungan.tanggal_kunjungan, riwayat_kunjungan.validasi_kunjungan, pasien.nama_pasien, dokter.nama_dokter, rekam_medis.keluhan, rekam_medis.diagnosa, rekam_medis.resep_obat ')
            ->join('pasien','pasien.id=riwayat_kunjungan.id_pasien')->join('dokter','dokter.id=riwayat_kunjungan.id_dokter')->join('rekam_medis', 'rekam_medis.id=riwayat_kunjungan.id_rekam_medis','left')->find();
    }

    protected $DBGroup          = 'default';
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
