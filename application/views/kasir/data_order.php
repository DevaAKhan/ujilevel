<div class="container-fluid">

  <div class="card shadow mb-4">

    <div class="card-body">
      <table class="table table-bordered">
          <tr class="text-center">
              <th>ID Order</th>
              <th>No Meja</th>
              <th>Tanggal</th>
              <th>ID User</th>
              <th>Keterangan</th>
              <th>Total Harga</th>
              <th>Status Order</th>
              <th>Aksi</th>
          </tr>

          <?php 
              foreach($orders as $order) : ?>

              <tr>
                  <td class="text-center"><?php echo $order->id_order ?></td>
                  <td class="text-center"><?php echo $order->no_meja ?></td>
                  <td class="text-center"><?php echo $order->tanggal?></td>
                  <td class="text-center"><?php echo $order->id_user ?></td>
                  <td><?php echo $order->keterangan ?></td>
                  <td class="text-center">Rp. <?php echo $order->total_harga ?></td>
                  <td class="text-center"><?php echo $order->status_order ?></td>
                  <td class="text-center">
                    <?php echo anchor('kasir/data_order/bayar/'.$order->id_order, '<div class="btn btn-success btn-sm">Pembayaran</div>')?>
                  </td>
              </tr>

          <?php endforeach;?>

      </table>
    </div>
  </div>
</div>