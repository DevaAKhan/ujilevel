<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  <?php echo $this->session->flashdata('pesan') ?>
                  <form method="post" action="<?php echo base_url('auth/login') ?>" class="user">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="username" aria-describedby="emailHelp" placeholder="Masukan Username">
                      <?php echo form_error('username','<div class="text-danger small mt-2 ml-2">','</div>'); ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-password form-control-user" name="password" placeholder="Password">
                      <?php echo form_error('password','<div class="text-danger small mt-2 ml-2">','</div>'); ?>
                    </div>
                    <div class="form-group row ">
                        
                      <div class="col-md-9 ml-4">
                        <div class="row">
                          <input type="checkbox" class="form-checkbox form-control-user" style="margin-top: 2px" id="form-checkbox" name="" > 
                          <small class="ml-1">show password</small>
                        </div>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-user btn-block" value="login">Login</button>
                    
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="<?php echo base_url('registrasi/index') ?>">Belum Punya Akun? Daftar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>



</body>