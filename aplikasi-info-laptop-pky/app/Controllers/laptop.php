<?php

namespace App\Controllers;

class laptop extends BaseController{
    protected $dml;

    public function __construct(){
        $this->dml = model('App\Models\DML');
    }
    public function info(){
        helper('info');
        $data['infoltp'] = $this->dml->dataRead('infoltp');
        return view('info_laptop', $data);
    }
    public function deleteData($nama){
        $this->dml->dataDelete('info',['nama' => $nama]);
        session()->setFlashdata('success','Data Berhasil Dihapus!');
        return redirect()->to('laptop/info');
    }
}