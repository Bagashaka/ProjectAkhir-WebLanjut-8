<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TbGejala1Model;

class PenyakitController extends BaseController
{
    public $gejalaModel;

    public function __construct()
    {
        $this->gejalaModel = new TbGejala1Model();
    }
    public function index()
    {
        $dataGejala = $this->gejalaModel->getGejala();
        $data = [
            'title'  => "Silahkkan pilih gejala apa saja yang anda alami",
            'gejala' => $dataGejala
        ];
        return view('list_cari_penyakit', $data);
    }

    // PenyakitController.php

    public function proses()
    {
            $selectedGejala = $this->request->getPost();
            // Your logic for processing gejala here...
            $result = $this->gejalaModel->processGejala($selectedGejala);
    
            if ($result['status'] == true) {
                $data = $this->gejalaModel->getPenyakitById($result['id']);
    
                $penyakit = $data['penyakit'];
                $info = $data['info'];
                $solusi = $data['solusi'];
    
                // Load the view or redirect as needed
                return view('hasil', compact('penyakit', 'info', 'solusi'));
            } else {
                // Load the error view or redirect as needed
                return view('error_gejala');
            }
        
    }
}
