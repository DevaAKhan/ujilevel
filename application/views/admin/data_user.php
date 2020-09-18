<div class="container-fluid">

  <div class="card shadow mb-4">

    <div class="card-body">
      <table class="table table-bordered">
          <tr class="text-center">
              <th>ID User</th>
              <th>Username</th>
              <th>Password</th>
              <th>Nama User</th>
              <th>ID Level</th>
              <th>Aksi</th>
          </tr>

          <?php 
              foreach($users as $us) : ?>

              <tr>
                  <td class="text-center"><?php echo $us->id_user ?></td>
                  <td><?php echo $us->username ?></td>
                  <td><?php echo $us->password ?></td>
                  <td><?php echo $us->nama_user ?></td>
                  <td class="text-center"><?php echo $us->id_level ?></td>
                  <td class="text-center">
                    <?php echo anchor('admin/data_user/hapus/'.$us->id_user, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?>  
                  </td>
              </tr>

          <?php endforeach;?>

      </table>
    </div>
  </div>
</div>