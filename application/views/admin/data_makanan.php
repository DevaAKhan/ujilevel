<div class="container-fluid">
  <!-- <button type="button" class="btn btn-sm btn-dark mb-3" style="margin-left: 950px"><i class="fas fa-print fa-sm"></i> Cetak Data</button> -->
  <a href="<?php echo site_url('admin/data_makanan/cetak_pdf_makanan');?>" class="btn btn-sm btn-dark mb-3" style="margin-left: 950px"><i class="fas fa-download mr-2"></i> Cetak Data</a> 

  <div class="card shadow mb-4">
   
    <div class="card-body">
      <button type="button" class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_makanan"><i class="fas fa-plus fa-sm"></i> Tambah Menu</button>

      <table class="table table-bordered">
          <tr class="text-center">
              <th>ID Menu</th>
              <th>Nama Menu</th>
              <th>Harga</th>
              <th>Status Menu</th>
              <th>Kategori</th>
              <th>Gambar</th>
              <th colspan="3">Aksi</th>
          </tr>

          <?php 
              foreach($makanan as $mknan) : ?>

              <tr>
                  <td class="text-center"><?php echo $mknan->id_makanan ?></td>
                  <td><?php echo $mknan->nama_makanan ?></td>
                  <td>Rp. <?php echo $mknan->harga ?></td>
                  <td class="text-center"><?php echo $mknan->status_makanan ?></td>
                  <td class="text-center"><?php echo $mknan->kategori ?></td>
                  <td class="text-center"><img style="width: 120px" src="<?php echo base_url('upload/'.$mknan->gambar)?>" alt=""></td>
                  <td class="text-center">
                      <?php echo anchor('admin/dashboard_admin/detail/'.$mknan->id_makanan,'<div class="btn btn-sm btn-success"><i class="fas fa-search-plus"></i></div>')?>
                  </td>
                  <td class="text-center">
                    <?php echo anchor('admin/data_makanan/edit/'.$mknan->id_makanan, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>')?>
                  </td>
                  <td class="text-center">
                    <?php echo anchor('admin/data_makanan/hapus/'.$mknan->id_makanan, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?>  
                  </td>
              </tr>

          <?php endforeach;?>

      </table>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="tambah_makanan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/data_makanan/tambah_aksi'?>" method="post" enctype="multipart/form-data">
              
              <div class="form-group">
                <label for="">Nama Menu</label>
                <input type="text" name="nama_makanan" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Harga Menu</label>
                <input type="text" name="harga" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputUsername">Status Menu</label>
                <select class="form-control" name="status_makanan">
                    <option value="">Pilih Status</option>
                    <option value="Tersedia">Tersedia</option>
                    <option value="Kosong">Kosong</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputUsername">Kategori</label>
                <select class="form-control" name="kategori">
                    <option value="">Pilih Kategori</option>
                    <option value="Makanan">Makanan</option>
                    <option value="Minuman">Minuman</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Gambar Menu</label>
                <input type="file" name="gambar" class="form-control">
              </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>