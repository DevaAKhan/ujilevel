<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg col-lg-6 my-5 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Registrasi</h1>
              </div>
              <form method="post" action="<?php echo base_url('registrasi/index')?>" class="user">
                <div class="form-group">
                  <input type="text" class="form-control" style="border-radius: 100px; height: 45px;" name="username" placeholder="Masukan Username">
                  <?php echo form_error('username','<div class="text-danger small mt-2 ml-2">','</div>'); ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" style="border-radius: 100px; height: 45px;"  name="password" placeholder="Masukan Password">
                  <?php echo form_error('password','<div class="text-danger small mt-2 ml-2">','</div>'); ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" style="border-radius: 100px; height: 45px;" name="nama_user" placeholder="Masukan Nama">
                  <?php echo form_error('nama_user','<div class="text-danger small mt-2 ml-2">','</div>'); ?>
                </div>
                <div class="form-group">
                  <select name="id_level" id="" class="form-control" style="border-radius: 100px; height: 45px;">
                    <option value="">Pilih Level...</option>
                    <option value="1">1 (Waiter)</option>
                    <option value="2">2 (Admin)</option>
                    <option value="3">3 (Kasir)</option>
                  </select>
                  <?php echo form_error('id_level','<div class="text-danger small mt-2 ml-2">','</div>'); ?>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">Daftar Akun</button>
                <hr>
              </form>
              <div class="text-center">
                <a class="small" href="<?php echo base_url('auth/login') ?>">Sudah punya akun? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</body>

  
