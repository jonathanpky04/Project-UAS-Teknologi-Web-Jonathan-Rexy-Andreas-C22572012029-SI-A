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
            <?= form_open_multipart('form/update', ['class'=>'user']);?>
            <div class="form-group row">
              <div class="col-md-7">
                <label>Nama Laptop</label>
                <input type="text" class="form-control" name="nama" value="<?= $info->nama ?>">
              </div>
              
              <div class="col-md-7">
                <label>Sufiks Laptop</label>
                <select name="id_jenis" class="form-control form-control-lg" value="<?= old('id_jenis')?>">
                  <option value="">--Pilih Jenis Sufiks Laptop--</option>
                  <?php foreach($jenisltp as $j) {?>
                  <option value="<?=$j->id_jenis?>"><?=$j->id_jenis?></option>
                  <?php }?>
                  </select>
              </div>
                
              <div class="col-md-7">
                <label>Jenis Performa Laptop</label>
                <select name="jenis" class="form-control form-control-lg" value="<?= old('jenis')?>">
                  <option value="">--Pilih Jenis Performa Laptop--</option>
                  <?php foreach($jenisltp as $j) {?>
                  <option value="<?=$j->jenis?>"><?=$j->jenis?></option>
                  <?php }?>
                  </select>
              </div>

              <div class="col-md-7">
                <label>Produser Laptop</label>
                <select name="produser" id="produser" class="form-control form-control-lg" value="<?= old('produser')?>">
                  <option value="">--Perusahaan Produser Laptop--</option>
                  <option value="Acer" <?= ($info->produser == 'Acer') ? 'selected' : ''?>>
                    Acer
                  </option>
                  <option value="Asus" <?= ($info->produser == 'Asus') ? 'selected' : ''?>>
                    Asus
                  </option>
                  <option value="Lenovo" <?= ($info->produser == 'Lenovo') ? 'selected' : ''?>>
                    Lenovo
                  </option>
                  <option value="HP" <?= ($info->produser == 'HP') ? 'selected' : ''?>>
                    HP
                  </option>
                  <option value="Dell" <?= ($info->produser == 'Dell') ? 'selected' : ''?>>
                    Dell
                  </option>
                  <option value="Apple" <?= ($info->produser == 'Apple') ? 'selected' : ''?>>
                    Apple
                  </option>
                  <option value="Samsung" <?= ($info->produser == 'Samsung') ? 'selected' : ''?>>
                    Samsung
                  </option>
                  <option value="MSI" <?= ($info->produser == 'MSI') ? 'selected' : ''?>>
                    MSI
                  </option>
                  </select>
              </div>

            <div class="row">
              <div class="col-md-7 mt-2">
                <label>Deskripsi</label>
                  <input type="text" class="form-control" name="deskripsi" value="<?php echo $info->deskripsi?>">
                </div>
                
                <div class="col-lg-5 mt-3 me-1">
                  <label>Foto Produk/Laptop</label>
                  <input type="file" name="foto" class="form-control form-control-lg" accept="image/jpeg"/>
                  <?php if(!empty($info->foto)): ?>
                    <div class="mt-2">
                        <img src="<?= base_url('uploads/' . $info->foto) ?>" width="120">
                    </div>
                    <?php endif; ?>
                </div>
                <input type="hidden" name="idlt" value="<?php echo $info->idlt ?>">
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