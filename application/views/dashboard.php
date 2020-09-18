<div class="container-fluid">
    <div class="col-md-12">
            <div class="text-center text-white mb-3">
                <video width="50%" controls autoplay>
                    <source src="<?php echo base_url().'assets/video/video_kantin.mp4'; ?>" type="video/mp4">
                </video>
            </div>
    </div>

    <h3 class="text-center">Data Menu</h3> <hr>
    <div class="row text-center">
        <?php foreach($makanan as $mknan) : ?>
            <div class="card ml-3 mb-3" style="width: 16.2rem;">
                <img src="<?php echo base_url().'/upload/'.$mknan->gambar?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $mknan->nama_makanan ?></h5>
                    <span class="badge badge-pill badge-success mb-3">Rp. <?php echo number_format($mknan->harga, 0,',','.') ?></span>
                    <br>
                    <?php echo anchor('dashboard/tambah_ke_keranjang/'.$mknan->id_makanan,'<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>')?>
                    <?php echo anchor('dashboard/detail/'.$mknan->id_makanan,'<div class="btn btn-sm btn-success">Detail</div>')?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>