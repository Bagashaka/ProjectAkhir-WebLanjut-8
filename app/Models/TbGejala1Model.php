<?php

namespace App\Models;

use CodeIgniter\Model;

class TbGejala1Model extends Model
{

    protected $tablee = 'tb_gejala';

    public function processGejala($selectedGejala)
    {
        $qry = 'select id from ' . $this->tablee . ' where ';
        array_pop($selectedGejala);
        $rule_input = [];
        foreach ($selectedGejala as $where) {
            $qry .= $where . "=1 and ";
            array_push($rule_input, $where);
        }
        $qry .= "1=1";

        $data = $this->db->query($qry)->getRowArray();

        $id = '';
        $rule = [
            ['G001', 'G002', 'G005', 'G006', 'G007'],
            ['G003', 'G004', 'G008', 'G009', 'G045'],
            ['G015', 'G025', 'G028', 'G040', 'G041'],
            ['G011', 'G013', 'G019', 'G044'],
            ['G016', 'G018', 'G020', 'G021', 'G023'],
            ['G010', 'G014', 'G017', 'G022', 'G047'],
            ['G026', 'G029', 'G039', 'G043', 'G046'],
            ['G012', 'G027', 'G030', 'G037'],
            ['G031', 'G032', 'G036', 'G038', 'G042'],
            ['G024', 'G033', 'G034', 'G035'],
            ['G007', 'G048', 'G049', 'G050'],
        ];

        $status = false;
        foreach ($rule as $i => $r) {
            $result = ($rule_input == $r);
            if ($result) {
                $status = true;
            }
        }

        return [
            'status' => $status,
            'id' => $data['id'] ?? '',
        ];
    }

    public function getPenyakitById($id)
    {
        return $this->db->table('tb_penyakit')->where('id', $id)->get()->getRowArray();
    }
    public function  getGejala($id = null){

        if($id != null){
            return $this->select('tb_gejala_1.*')->find($id);
        }
        return $this->select('tb_gejala_1.*')->findAll();
    }

    protected $table            = 'tb_gejala_1';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id','kode', 'gejala'];

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
