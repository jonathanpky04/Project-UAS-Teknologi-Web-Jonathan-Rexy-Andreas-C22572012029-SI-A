<?php

namespace App\Controllers;

use CodeIgniter\Model;

class Home extends BaseController
{
    protected $dml;
    public function __construct(){
        $this->dml = model('App\Models\DML');
    }

    public function index(): string
    {
        helper('info');
        $data['info'] = $this->dml->dataRead('info');
        return view('index', $data);
    }
}
