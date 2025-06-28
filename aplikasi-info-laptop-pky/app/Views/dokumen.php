<style>
    table {width: 100%}
    table, thead, tbody, th, td{
        border-collapse: collapse;
        border: 1px solid #000;
        padding: 3px;
    }
    h1 {
        text-align: center;
        padding-bottom: 10px;
        border-bottom: 1px solid #000 ;
        margin-bottom: 30px;
    }
</style>

    <h1>Daftar Laptop Palangka Raya</h1>
    <table>
        <thead>
            <tr>
            <th>Nama Laptop</th>
            <th>Sufiks</th>
            <th>Jenis Performa</th>
            <th>Produser</th>
            <th>Deskripsi</th>
            <th>Foto</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nama = 1;
            $id_jenis = 0;
            $jenis = 0;
            $produser = 0;
            $deskripsi = 0;
            $foto = 0;
            foreach($infoltp as $i){ ?>
            <tr>
            <td><?php echo $i->nama?></td>
            <td><?php echo $i->id_jenis?></td>
            <td><?php echo $i->jenis?></td>
            <td><?php echo $i->produser?></td>
            <td><?php echo $i->deskripsi?></td>
            <td><?php if(!empty($i->foto)): ?>
                <img src="<?= base_url('uploads/' . $i->foto) ?>" width="100" alt="foto">
                <?php else: ?>
                <span class="text-muted">Tidak Ada Bukti Foto</span>
                <?php endif; ?>
            </td>
            </tr>
            <?php }?>
        </tbody>
    </table>