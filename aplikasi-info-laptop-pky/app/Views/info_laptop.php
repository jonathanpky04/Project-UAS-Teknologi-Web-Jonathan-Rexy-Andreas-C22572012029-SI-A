<?php echo $this->extend('layout');?>
<?php echo $this->section('konten');?>
<div class="container">
    <div class="page-inner">
      <div class="d-flex justify-content-between page-header mb-2">
        <h1 class="h3 fw-bold mb-3">Data Laptop Di Kota Palangka Raya</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header py-3">
              <?php if(session()->getFlashdata('success')): ?>
                <div class="alert alert-success">
                  <?= session()->getFlashdata('success')?>
                </div>
                <?php endif;?>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table
                  class="display table table-striped table-hover">
                  <thead>
                    <tr>
                      <th>Nama Laptop</th>
                      <th>Sufiks Laptop</th>
                      <th>Jenis Laptop</th>
                      <th>Produser</th>
                      <th>Deskripsi</th>
                      <th>Foto</th>
                      <th style="width: 10%">Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nama Laptop</th>
                      <th>Sufiks Laptop</th>
                      <th>Jenis Laptop</th>
                      <th>Produser</th>
                      <th>Deskripsi</th>
                      <th>Foto</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    foreach($infoltp as $i){
                    ?>
                    <tr>
                      <td><?php echo $i->nama?></td>
                      <td><?php echo $i->id_jenis?></td>
                      <td><?php echo $i->jenis?></td>
                      <td><?php echo $i->produser?></td>
                      <td><?php echo $i->deskripsi?></td>
                      <td>
                        <?php if(!empty($i->foto)): ?>
                        <img src="<?= base_url('uploads/' . $i->foto)?>" width="100" alt="foto">
                      <?php else: ?>
                        <span class="text-muted">Tidak Ada Bukti Foto</span>
                        <?php endif; ?>
                      </td>
                      <td>
                        <div class="form-button-action">
                          <a href="<?php echo base_url('form/edit/' . $i->nama); ?>"
                          class="btn btn-link btn-primary btn-lg">
                            <i class="fa fa-edit"></i>
                      </a>
                          <a href="<?php echo base_url('laptop/deleteData/'. $i->nama); ?>"
                          class="btn btn-link btn-danger btn-lg" onclick="return confirm('Yakin Ingin Menghapus Data?')">
                            <i class="fa fa-trash"></i>
                      </a>
                        </div>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<?php echo $this->endSection();?>