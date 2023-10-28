<?php

namespace App\Models;

use CodeIgniter\Model;

class KunjunganModel extends Model
{
    public function getKunjungan($id = null){
        if ($id !=null) {
            return $this->select('riwayatkunjungan.id, riwayatkunjungan.id_pasien, riwayatkunjungan.diagnosa, riwayatkunjungan.resep_obat, riwayatkunjungan.catatan_medis, riwayatkunjungan.tanggal_kunjungan, riwayatkunjungan.validasi_kunjungan, pasien.nama_pasien')
            ->join('pasien','pasien.id=riwayatkunjungan.id_pasien')->find($id);
        }
        return $this->select('riwayatkunjungan.id,riwayatkunjungan.id_pasien, riwayatkunjungan.diagnosa, riwayatkunjungan.resep_obat, riwayatkunjungan.catatan_medis, riwayatkunjungan.tanggal_kunjungan, riwayatkunjungan.validasi_kunjungan, pasien.nama_pasien')
            ->join('pasien', 'pasien.id = riwayatkunjungan.id_pasien')->find();
    }

    protected $DBGroup          = 'default';
    protected $table            = 'riwayatkunjungan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['diagnosa','resep_obat', 'catatan_medis', 'tanggal_kunjungan', 'id_pasien','validasi_kunjungan'];

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
