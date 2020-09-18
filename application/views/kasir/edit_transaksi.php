<div class="container-fluid">
    <div class="card shadow mb-4">
    
        <div class="card-body">
            <h3><i class="fas fa-edit"></i> Edit Data Transaksi</h3><hr>


            <?php foreach($transaksi as $trans) : ?>

                <form method="post" action="<?php echo base_url().'kasir/data_transaksi/update' ?>">
                    <div class="form-group">
                        <label for="">ID Transaksi</label>
                        <input type="text" name="id_transaksi" class="form-control" value="<?php echo $trans->id_transaksi?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">ID User</label>
                        <input type="text" name="id_user" class="form-control" value="<?php echo $trans->id_user?>">
                    </div>
                    <div class="form-group">
                        <label for="">ID Order</label>
                        <input type="text" name="id_order" class="form-control" value="<?php echo $trans->id_order?>">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal</label>
                        <input type="text" name="tanggal" class="form-control" value="<?php echo $trans->tanggal?>">
                    </div>
                    <div class="form-group">
                        <label for="">Total Harga</label>
                        <input type="text" name="total_harga" class="form-control" value="<?php echo $trans->total_harga?>">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>

                </form>

            <?php endforeach; ?>
        </div>
    </div>
</div>