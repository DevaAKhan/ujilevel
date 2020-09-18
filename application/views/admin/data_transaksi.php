<div class="container-fluid">

  <div class="card shadow mb-4">

    <div class="card-body">
      <table class="table table-bordered">
          <tr class="text-center">
              <th>ID Transaksi</th>
              <th>ID User</th>
              <th>ID Order</th>
              <th>Tanggal</th>
              <th>Total Harga</th>
              <th>Aksi</th>
          </tr>

          <?php 
              foreach($transaksi as $trans) : ?>

              <tr>
                  <td class="text-center"><?php echo $trans->id_transaksi ?></td>
                  <td class="text-center"><?php echo $trans->id_user ?></td>
                  <td class="text-center"><?php echo $trans->id_order ?></td>
                  <td class="text-center"><?php echo $trans->tanggal ?></td>
                  <td>Rp. <?php echo $trans->total_harga ?></td>
                  <td class="text-center">
                  <?php echo anchor('admin/data_transaksi/hapus/'.$trans->id_transaksi, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?>  
                  </td>
              </tr>

          <?php endforeach;?>

      </table>
    </div>
  </div>
</div>