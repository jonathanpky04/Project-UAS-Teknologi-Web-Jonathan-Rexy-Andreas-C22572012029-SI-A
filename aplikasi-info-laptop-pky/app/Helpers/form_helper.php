<?php

use App\Controllers\tables;
use CodeIgniter\CodeIgniter;


function jenis($jenis){
    if($jenis == 045){
        return "Pemasukan";
    }
    else{
        return "Pengeluaran";
    }
}