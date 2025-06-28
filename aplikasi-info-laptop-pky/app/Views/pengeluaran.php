<?php echo $this->extend('layout');?>
<?php echo $this->section('konten');?>
<div class="container">
  <div class="page-inner">
    <div class="d-flex justify-content-between page-header mb-2">
      <h1 class="h3 fw-bold mb-3">Example</h1>
      <h1><a href="#" class="h2 btn btn-primary btn-sm text-light">ADD NEW DATA</a></h1>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header py-3">
            <?php if(session()->getFlashdata('Success')): ?>
              <div class="alert alert-success">
              <?= session()->getFlashdata('Success') ?>
              </div>
              <?php endif; ?>
            <h4 class="card-title">Datatables Example</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table
                class="display table table-striped table-hover">
                <thead>
                    <tr>
                      <th>ID Transaksi</th>
                      <th>Jenis Transaksi</th>
                      <th>Tanggal Transaksi</th>
                      <th>Deskripsi</th>
                      <th>Jumlah</th>
                      <th>Foto/Bukti</th>
                      <th style="width: 10%">Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID Transaksi</th>
                      <th>Jenis Transaksi</th>
                      <th>Tanggal Transaksi</th>
                      <th>Deskripsi</th>
                      <th>Jumlah</th>
                      <th>Foto/Bukti</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                <tbody>
                  <?php foreach($transaction as $t){?>
                  <tr>
                    <td><?php echo $t->idtr?></td>
                      <td><?php echo $t->jenis?></td>
                      <td><?php echo $t->tgl?></td>
                      <td><?php echo $t->deskripsi?></td>
                      <td><?php echo $t->jumlah?>,00</td>
                      <td>
                        <?php if(!empty($t->foto)): ?>
                        <img src="<?= base_url('uploads/' . $t->foto)?>" width="100" alt="foto">
                      <?php else: ?>
                        <span class="text-muted">Tidak Ada Bukti Foto</span>
                        <?php endif; ?>
                      </td>
                      <td>
                        <div class="form-button-action">
                          <a href="<?php echo base_url('form/edit/'. $t->idtr); ?>"
                          class="btn btn-link btn-primary btn-lg">
                            <i class="fa fa-edit"></i>
                      </a>
                          <a href="<?php echo base_url('tables/hapuspm/'. $t->idtr); ?>"
                          class="btn btn-link btn-danger btn-lg" onclick="return confirm('Yakin Ingin Menghapus Data?')">
                            <i class="fa fa-trash"></i>
                      </a>
                      </div>
                    </td>
                  </tr>
                  <?php }?>
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