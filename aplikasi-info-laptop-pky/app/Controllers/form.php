<?php

namespace App\Controllers;

class form extends BaseController{
    protected $dml;

    public function __construct(){
        $this->dml = model('App\Models\DML');
    }
    function input(){
        helper(['form']);
        $data['info'] = $this->dml->dataRead('info');
        $data['jenisltp'] = $this->dml->dataRead('jenisltp');
        return view('forms', $data);
    }

    function simpan(){
        $file = $this->request->getFile('foto');
        $originalName = null;
        if($file && $file->isValid() && !$file->hasMoved()){
            $mimeType = $file->getClientMimeType();
            $ext = strtolower($file->getClientExtension());

            if($ext !== 'jpg' || $mimeType !== 'image/jpeg'){
                session()->setFlashdata('error', 'File Foto Harus Berupa Ekstensi .jpg');
                return redirect()->back()->withInput();
            }

            $originalName = $file->getName();
            $file->move(FCPATH . 'uploads/' , $originalName);
        }

        $data = array(
            'nama' => $this->request->getVar('nama'),
            'id_jenis' => $this->request->getVar('id_jenis'),
            'jenis' => $this->request->getVar('jenis'),
            'produser' => $this->request->getVar('produser'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'foto' => $originalName
        );

        $nama = $this->request->getVar('nama');
        $id_jenis = $this->request->getVar('id_jenis');
        $jenis = $this->request->getVar('jenis');
        $produser = $this->request->getVar('produser');
        $deskripsi = $this->request->getVar('deskripsi');
        $foto = $originalName;

        $aturan = array(
            'nama' => 'required',
            'id_jenis' => 'required',
            'jenis' => 'required',
            'produser' => 'required',
            'deskripsi' => 'min_length[30]'
        );

        $validasi = \Config\Services::validation();
        $validasi->setRules($aturan);
        if($validasi->withRequest($this->request)->run()){
            $data = array(
            'nama' => $nama,
            'id_jenis' => $id_jenis,
            'jenis' => $jenis,
            'produser' => $produser,
            'deskripsi' => $deskripsi,
            'foto' => $foto
            );
        
        $data = $this->dml->dataInsert('info', $data);
        if($data==1){
            $pesan = ['pesan' => 'Hore Datang Lagi Laptop Baru Di Palangka Raya!'];
            session()->setFlashdata('pesan',$pesan);
            
        }
        else{
            $pesan = ['pesan' => 'Loh? Kayanya Ada Data Yang Salah Dimasukkan Tuh.'];
            session()->setFlashdata('pesan', $pesan);
        }
        return redirect()->to('laptop/info');
        }
        else{
            $pesan = $validasi->getErrors();
            session()->setFlashdata('pesan', $pesan);
            return redirect()->back()->withInput();
        }
        
    }
    public function edit($nama){
        helper(['form']);
        $data['info'] = $this->dml->dataRead('info', ['nama' => $nama])[0];
        $data['jenisltp'] = $this->dml->dataRead('jenisltp');
        return view('forms_edit', $data);
    }

    public function update(){
        $idlt = $this->request->getVar('idlt');
        $file = $this->request->getFile('foto');

        $originalName = null;
        if($file && $file->isValid() && !$file->hasMoved()){
            $mimeType = $file->getClientMimeType();
            $ext = strtolower($file->getClientExtension());

            if($ext !== 'jpg' || $mimeType !== 'image/jpeg'){
                session()->setFlashdata('error', 'File Foto Harus Berupa Ekstensi .jpg');
                return redirect()->back()->withInput();
            }

            $originalName = $file->getName();
            $file->move(FCPATH . 'uploads/' , $originalName);
        }

            $data = [
            'nama' => $this->request->getVar('nama'),
            'id_jenis' => $this->request->getVar('id_jenis'),
            'jenis' => $this->request->getVar('jenis'),
            'produser' => $this->request->getVar('produser'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            ];
        
        if($originalName){
            $data['foto'] = $originalName;
        }
        
        $data = $this->dml->dataupdate('info', $data, ['idlt' => $idlt]);
        session()->setFlashdata('success', 'Oke Perubahan Berhasil!');
        return redirect()->to('laptop/info');
        
        }
}