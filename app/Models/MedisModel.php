<?php

namespace App\Models;

use CodeIgniter\Model;

class MedisModel extends Model
{

    public function getRekam($id = null)
    {
        if($id != null){
            return $this->select('rekam_medis.id, rekam_medis.id_pasien, rekam_medis.keluhan, rekam_medis.diagnosa, rekam_medis.resep_obat,rekam_medis.tanggal_pemeriksaan, users.nama_pasien')
                ->join('users', 'users.id = rekam_medis.id_pasien')
                ->find($id);
        }    
            return $this->select('rekam_medis.id, rekam_medis.id_pasien, rekam_medis.keluhan, rekam_medis.diagnosa, rekam_medis.resep_obat,rekam_medis.tanggal_pemeriksaan, users.nama_pasien')
            ->join('users', 'users.id = rekam_medis.id_pasien')
            ->findAll();   
    }

    protected $table            = 'rekam_medis';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_pasien', 'keluhan', 'diagnosa', 'resep_obat', 'tanggal_pemeriksaan'];

    // Dates
    protected $useTimestamps = false;
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
