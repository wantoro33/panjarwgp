<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JenisPerkaraModel as JenisPerkaraModel;

class JenisPerkara extends BaseController
{
    public function index()
    {
        $jenisPerkaraModel = new JenisPerkaraModel();
        $dataperkara = $jenisPerkaraModel->where('IdJenisPerkara',$this->request->getVar('IdJenisPerkara'))->findAll();

        echo json_encode($dataperkara);
    }
}