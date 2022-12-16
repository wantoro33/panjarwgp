<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AllRadiusModel as AllRadiusModel;
use App\Models\JenisPerkaraModel as JenisPerkaraModel;
use App\Models\JmlKomponenBiayaModel as JmlKomponenBiayaModel;

class AllRadius extends BaseController
{
    public function index()
    {
        $allRadiusModel = new AllRadiusModel();
        $dataRadius = $allRadiusModel->where('IdKelurahan',$this->request->getVar('IdKelurahan'))->findAll();
        
        echo json_encode($dataRadius);
    }

    public function panggilan()
    {
        $jenisPerkaraModel = new JenisPerkaraModel();
        $datapanggilan = $jenisPerkaraModel->where('IdJenisPerkara',$this->request->getVar('IdJenisPerkara'))->findAll();

        echo json_encode($datapanggilan);
    }

    public function sumkompbiaya()
    {
        $jmlKomponenBiayaModel = new JmlKomponenBiayaModel();
        $datakompbiaya = $jmlKomponenBiayaModel->findAll();

        echo json_encode($datakompbiaya);
    }
}
