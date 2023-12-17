<?php

namespace App\Models;

use CodeIgniter\Model;

class TbGejalaModel extends Model
{
    protected $table            = 'tb_gejala';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id','G001','G002','G003','G004','G005','G006','G007','G008','G009','G010',
                                   'G011','G012','G013','G014','G015','G016','G017','G018','G019','G020',
                                   'G021','G022','G023','G024','G025','G026','G027','G028','G029','G030',
                                   'G031','G032','G033','G034','G035','G036','G037','G038','G039','G040',
                                   'G041','G042','G043','G044','G045','G046','G047','G048','G049','G050'];

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
