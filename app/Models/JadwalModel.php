<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model
{
    public function getJadwalPraktik($id = null)
    {
        if ($id != null) {
            return $this->select('jadwal_praktik_dokter.id, jadwal_praktik_dokter.id_dokter, jadwal_praktik_dokter.hari, jadwal_praktik_dokter.jam_mulai, jadwal_praktik_dokter.jam_selesai,jadwal_praktik_dokter.lokasi, users.nama_dokter')
            ->join('users', 'jadwal_praktik_dokter.id_dokter = users.id')
            ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
            ->where('auth_groups_users.group_id', 3)
            ->where('users.id', user_id())
            ->find($id);
        }
        return $this->select('jadwal_praktik_dokter.id, jadwal_praktik_dokter.id_dokter, jadwal_praktik_dokter.hari, jadwal_praktik_dokter.jam_mulai, jadwal_praktik_dokter.jam_selesai,jadwal_praktik_dokter.lokasi, users.nama_dokter')
            ->join('users', 'jadwal_praktik_dokter.id_dokter = users.id')
            ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
            ->where('auth_groups_users.group_id', 3)
            ->where('users.id', user_id())
            ->findAll();
    }

    public function getJadwal($id = null)
    {
        if ($id != null) {
            return $this->select('jadwal_praktik_dokter.id, jadwal_praktik_dokter.id_dokter, jadwal_praktik_dokter.hari, jadwal_praktik_dokter.jam_mulai, jadwal_praktik_dokter.jam_selesai,jadwal_praktik_dokter.lokasi, users.nama_dokter')
            ->join('users', 'jadwal_praktik_dokter.id_dokter = users.id')
            ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
            ->where('auth_groups_users.group_id', 3)
            ->find($id);
        }
        return $this->select('jadwal_praktik_dokter.id, jadwal_praktik_dokter.id_dokter, jadwal_praktik_dokter.hari, jadwal_praktik_dokter.jam_mulai, jadwal_praktik_dokter.jam_selesai,jadwal_praktik_dokter.lokasi, users.nama_dokter')
            ->join('users', 'jadwal_praktik_dokter.id_dokter = users.id')
            ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
            ->where('auth_groups_users.group_id', 3)
            ->findAll();
    }

    protected $table            = 'jadwal_praktik_dokter';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_dokter', 'hari', 'jam_mulai', 'jam_selesai', 'lokasi'];

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
