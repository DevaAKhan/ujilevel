<div class="container-fluid">
    <h4>Keranjang Belanja</h4>

    <table class="table table-bordered table-striped table-hover">
        <tr class="text-center">
            <th>No</th>
            <th>Nama Makanan</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Subtotal</th>
        </tr>

        <?php
            $no = 1;
            foreach ($this->cart->contents() as $items) : ?>

                <tr>
                    <td class="text-center"><?php echo $no++ ?></td>
                    <td><?php echo $items['name'] ?></td>
                    <td class="text-center"><?php echo $items['qty'] ?></td>
                    <td align="right">Rp. <?php echo number_format($items['price'], 0,',','.') ?></td>
                    <td align="right">Rp. <?php echo number_format($items['subtotal'], 0,',','.') ?></td>
                </tr>
                
        <?php endforeach; ?>
                <tr>
                    <td colspan="4" class="text-center"><b>Total</b></td>
                    <td align="right">Rp. <b> <?php echo number_format($this->cart->total(), 0,',','.') ?></b></td>
                </tr>
    </table>
    
    <div align="right">
        <a href="<?php echo base_url('dashboard/hapus_keranjang') ?>"><div class="btn btn-sm btn-danger">Hapus Keranjang</div></a>
        <a href="<?php echo base_url('dashboard/index') ?>"><div class="btn btn-sm btn-primary">Lanjutkan Belanja</div></a>
        <a href="<?php echo base_url('dashboard/pemesanan') ?>"><div class="btn btn-sm btn-success">Pemesanan</div></a>
    </div>
</div>