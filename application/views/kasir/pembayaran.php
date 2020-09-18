<div class="container-fluid">
    <div class="card shadow mb-4">
    
        <div class="card-body">
            <h3><i class="far fa-money-bill-alt"></i> Pembayaran</h3><hr>

            <table>
            <?php
            $no = 1;
            foreach ($this->cart->contents() as $items) : ?>

                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $items['name'] ?></td>
                    <td><?php echo $items['qty'] ?></td>
                    <td align="right">Rp. <?php echo number_format($items['price'], 0,',','.') ?></td>
                    <td align="right">Rp. <?php echo number_format($items['subtotal'], 0,',','.') ?></td>
                </tr>
                
        <?php endforeach; ?>
            </table>
            
            <?php foreach($orders as $order) : ?>

                <form action="<?php echo base_url().'kasir/data_transaksi/simpan_transaksi'?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">ID Order</label>
                        <input type="text" name="id_order" class="form-control" value="<?php echo $order->id_order?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">ID User</label>
                        <input type="text" name="id_user" class="form-control" value="<?php echo $order->id_user?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" value="<?php echo date('Y-m-d'); ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Total Harga</label>
                        <input type="number" name="total_harga" class="form-control" value="<?php echo $order->total_harga?>" readonly>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-sm">Bayar</button>

                </form>

            <?php endforeach; ?>
        </div>
    </div>
</div>