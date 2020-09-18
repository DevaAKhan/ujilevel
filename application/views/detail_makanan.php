<div class="container-fluid">

    <div class="card">
        <h5 class="card-header">Detail Makanan</h5>
        <div class="card-body">

        <?php foreach($makanan as $mknan) : ?>
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php echo base_url().'/upload/'.$mknan->gambar?>" class="card-img-top" alt="">
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <tr>
                            <td>Nama Makanan</td>
                            <td><strong><?php echo $mknan->nama_makanan?></strong></td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td><strong><?php echo $mknan->kategori?></strong></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><strong><div class="btn btn-sm btn-success">Rp. <?php echo number_format($mknan->harga, 0,',','.') ?></div></strong></td>
                        </tr>
                    </table>
                    <?php echo anchor('dashboard/tambah_ke_keranjang/'.$mknan->id_makanan,'<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>')?>
                    <?php echo anchor('dashboard/index/','<div class="btn btn-sm btn-danger">Kembali</div>')?>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</div>