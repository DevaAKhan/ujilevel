<div class="container-fluid">
    <div class="card shadow mb-4">
    
        <div class="card-body">
            <h3><i class="fas fa-edit"></i> Edit Data Menu</h3><hr>


            <?php foreach($makanan as $mknan) : ?>

                <form method="post" action="<?php echo base_url().'admin/data_makanan/update' ?>">
                    <div class="form-group">
                        <label for="">Nama Menu</label>
                        <input type="hidden" name="id_makanan" class="form-control" value="<?php echo $mknan->id_makanan?>">
                        <input type="text" name="nama_makanan" class="form-control" value="<?php echo $mknan->nama_makanan?>">
                    </div>
                    <div class="form-group">
                        <label for="">Harga Menu</label>
                        <input type="text" name="harga" class="form-control" value="<?php echo $mknan->harga?>">
                    </div>
                    <div class="form-group">
                        <label for="inputUsername">Status Menu</label>
                        <select class="form-control" name="status_makanan" value="<?php echo $mknan->status_makanan?>">
                            <option selected value="<?php echo $mknan->status_makanan?>"><?php echo $mknan->status_makanan?></option>
                            <option value="Tersedia">Tersedia</option>
                            <option value="Kosong">Kosong</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputUsername">Kategori</label>
                        <select class="form-control" name="kategori" value="<?php echo $mknan->kategori?>">
                            <option selected value="<?php echo $mknan->kategori?>"><?php echo $mknan->kategori?></option>
                            <option value="Makanan">Makanan</option>
                            <option value="Minuman">Minuman</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>

                </form>

            <?php endforeach; ?>
        </div>
    </div>
</div>