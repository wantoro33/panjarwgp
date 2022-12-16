<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        return view('vw_login');
    }

    public function process()
    {
        $UserModel = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $UserModel->where([
            'username' => $username,
        ])->first();
        if($dataUser)
        {
            if(password_verify($password, $dataUser->password))
            {
                session()->set([
                    'username' => $dataUser->namauser,
                    'namapegawai' => $dataUser->namapegawai,
                    'nip' => $dataUser->nip,
                    'jabatan' => $dataUser->jabatan,
                    'logged_in' => TRUE
                ]);

                return redirect()->to(base_url('dashboard'));
            } else {
                session()->setFlashdata('error', 'User Name & Password Salah!');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'User Name & Password Salah!');
            return redirect()->back();
        }
    }
}
