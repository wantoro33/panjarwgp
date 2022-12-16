<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelurahanKomdanasModel;
use App\Models\KelurahanModel;
use CodeIgniter\HTTP\RequestInterface;

class KelurahanKomdanas extends BaseController
{
    public function __construct()
    {   
        helper(['url']);
    }

    public function index()
    {
        return view('home');
    }

    public function list_kelurahan()
    {
        helper(['form', 'url']);

        $term = $this->request->getVar('term');
        $KelurahanKomdanasModel = new KelurahanKomdanasModel();
        $nama = $KelurahanKomdanasModel->like('daerah', $term, 'both')->findColumn('daerah');
        return $this->response->setJSON($nama);
    }

    public function GetNilaiKomdanas()
    {
        $kel = $this->request->getVar('term');
        $KelurahanKomdanasModel = new KelurahanKomdanasModel();
        $nilai = $KelurahanKomdanasModel->where('daerah', $kel)->findAll();

        echo json_encode($nilai);
    }
}
