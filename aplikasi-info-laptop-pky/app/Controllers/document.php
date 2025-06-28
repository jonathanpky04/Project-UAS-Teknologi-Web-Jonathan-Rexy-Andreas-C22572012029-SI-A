<?php

namespace App\Controllers;
use App\Libraries\Printpdf;

class document extends BaseController
{
    protected $dml;

    public function __construct(){
        $this->dml = model('App\Models\DML');
    }
    public function PDFLaptop(){   
        helper('infoltp');
        $data['infoltp'] = $this->dml->dataRead('infoltp');

        $printpdf = new Printpdf();
        $nama_file = 'Daftar Laptop Palangka Raya';
        $kertas = 'A4';
        $orientasi = 'portrait';
        $html = view('dokumen', $data);
        $printpdf->buatPDF($html, $nama_file, $kertas, $orientasi);
    }

}
