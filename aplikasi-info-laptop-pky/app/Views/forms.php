<?php echo $this->extend('layout');?>
<?php echo $this->section('konten');?>
<div class="container">
  <div class="page-inner">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title">Form Pengisian Data Transaksi</div>
          </div>
          <div class="card-body">
            <p><?php if(session()->getFlashdata('pesan')){
              $pesan = session()->getFlashdata('pesan');
              echo '<ul style="color:red">';
              foreach($pesan as $p){
                echo '<li>' . $p;
              }
              echo '<ul>';
            }?>
            </p>
            <?= form_open_multipart('form/simpan', ['class'=>'user']);?>
            <div class="form-group row">
              <div class="col-md-7 col-lg-5">
                <label>Nama Laptop</label>
                <input type="text" class="form-control" name="nama" value="<?= old('nama')?>">
              </div>
                <div class="col-md-7 col-lg-5">
                <label>Sufiks Laptop</label>
                  <select name="id_jenis" id="id_jenis" class="form-control form-control-lg" value="<?= old('id_jenis')?>">
                    <option value="">--Pilih Jenis Sufiks Laptop--</option>
                    <?php foreach($jenisltp as $j){ ?>
                    <option value="<?= $j->id_jenis?>" <?= old('id_jenis') == $j->id_jenis ? 'selected' : '' ?>>
                      <?= $j->id_jenis ?>
                    </option>
                    <?php }?>
                  </select>
                </div>
                <div class="col-md-7 col-lg-5">
                  <label>Jenis Laptop</label>
                  <select name="jenis" id="jenis" class="form-control form-control-lg" value="<?=old('jenis')?>">
                    <option value="">--Pilih Jenis Performa Laptop--</option>
                    <?php foreach($jenisltp as $j){ ?>
                    <option value="<?= $j->jenis?>" <?= old('jenis') == $j->jenis ? 'selected' : '' ?>>
                      <?= $j->jenis ?>
                    </option>
                    <?php }?>
                  </select>
                </div>

                <div class="col-md-7 col-lg-5">
                  <label>Perusahaan Produser Laptop</label>
                  <select name="produser" id="produser" class="form-control form-control-lg" value="<?=old('produser')?>">
                    <option value="">--Pilih Perusahaan Produser Laptop--</option>
                    <?php foreach($info as $i){ ?>
                    <option value="<?= $i->produser?>" <?= old('produser') == $i->produser ? 'selected' : '' ?>>
                      <?= $i->produser ?>
                    </option>
                    <?php }?>
                  </select>
                </div>
                
              <div class="row">
                <div class="col-md-7 col-lg-5 mt-2">
                  <label>Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" value="<?= old('deskripsi')?>" placeholder="--Deskripsi Laptop Tersebut--">
                  </div>
                  
                  <div class="row">
                      <div class="col-lg-5">
                        <input type="file" name="foto" class="form-control form-control-lg" accept="image/jpeg"/>
                        <small class="text-muted">Hanya diperbolehkan menggunakan file foto ekstensi <strong>.jpeg/jpg</strong></small>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      <button class="col-md-2 btn btn-success btn-lg btn-block">SIMPAN</button>
      <?php echo form_close() ?>
      </div>
    </div>
  </div>
</div>
<?php echo $this->endSection();?>