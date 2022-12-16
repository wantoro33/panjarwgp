<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KomponenBiayaModel as KomponenBiayaModel;

class KomponenBiaya extends BaseController
{
    public function index()
    {
        $komponenBiayaModel = new KomponenBiayaModel();

        $databiaya = $komponenBiayaModel->where('IsUsed', 1)->findAll();

        echo json_encode($databiaya);
    }
}
