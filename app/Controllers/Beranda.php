<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JenisPerkaraModel as JenisPerkaraModel;
use App\Models\KecamatanModel as KecamatanModel;
use App\Models\KelurahanModel as KelurahanModel;

class Beranda extends BaseController
{
    public function Index()
    {
        $jenisPerkaraModel = new JenisPerkaraModel();
        $data['jenisPerkara'] = $jenisPerkaraModel->findAll();

        $radiusModel = new KecamatanModel();
        $data['kecamatan'] = $radiusModel->findAll();

        return view('home', $data);
    }

    public function aksi()
    {
        if($this->request->getVar('aksi'))
        {
            $aksi = $this->request->getVar('aksi');

            $kelurahanModel = new KelurahanModel();

            if($aksi == 'getKelurahanP')
            {              
                $datakelurahan = $kelurahanModel->where('IdKecamatan', $this->request->getVar('IdKecamatan'))->findAll();
            } elseif ($aksi == 'getKelurahanT')
            {
                $datakelurahan = $kelurahanModel->where('IdKecamatan', $this->request->getVar('IdKecamatan'))->findAll();
            }

            echo json_encode($datakelurahan);
        }
    }
}
