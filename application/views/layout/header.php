<body>
  <nav class="navbar navbar-expand-lg navStyle sticky-top">
      <a class="brand-navbar" href="index.html">
        <img class="img-fluid logo" src="<?php base_url(); ?>assets/frontend/assets/images/logo-perusahaan.png" alt="logo-perusahaan">
      </a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#mainMenu">
          <span><i class="fa fa-align-right iconStyle"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="mainMenu">
          <ul class="navbar-nav ml-auto navList">
              <li class="nav-item active">
                <a href="#header" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                  <a href="#langkah" class="nav-link">Langkah</a>
              </li>
              <li class="nav-item">
                  <a href="#profesi" class="nav-link">Bidang Profesi</a>
              </li>
              <li class="nav-item">
                  <a href="#blog" class="nav-link">Blog</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" data-toggle="modal" data-target="#daftar-start">Daftar</a>
              </li>
          </ul>
            <?php if($this->session->userdata('online')==false):?>
            <a class="mr-3" data-toggle="modal" data-target="#login-start" href="<?php echo base_url().'login' ?>">
            <button class="btn btn-success c my-2 my-sm-0">Login</button>
            </a>
            <?php else:?>
            <a class="mr-3" data-toggle="modal" data-target="#login-start" href="<?php echo base_url().'login/logout' ?>">
            <button class="btn btn-success c my-2 my-sm-0">Logout</button>
            </a>
            <?php endif;?>
          <div class="input-group cari">
            <input type="text" class="form-control" name="" id="" placeholder="Searching....">
            <div class="input-group-append">
              <button class="btn btn-success c" type="button">Search</button>
            </div>
          </div>
      </div>
  </nav>

  <!-- popup login -->
  <div class="modal fade" id="login-start" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body login">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>  
          <div class="row">
            <div class="col-md-12">
              <h3 class="title-login">Login</h3>

              <form action="<?php echo site_url('Login') ?>" method="post">
                <div class="form-group">
                  <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus name="email_user">
                </div>
                <div class="form-group">
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="passsword_user">
                </div>
                <button type="submit" class="btn btn-success c login pl-5 pr-5">Login</button>
              </form>

              <div class="link login">
                <p>Belum punya akun? <a data-toggle="modal" data-target="#daftar-start">Daftar</a></p>
              </div>
            </div>  
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- popup daftar -->
  <div class="modal fade" id="daftar-start" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body login">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="row">
            <div class="col-md-12">
              <h3 class="title-login">Daftar</h3>
              <form action="profil.html">
                <div class="form-group">
                  <input type="text" class="form-control" id="" placeholder="No. registrasi">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="" placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="" placeholder="Konfirmasi Password">
                </div>
                <div class="input-group mb-3">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile02">
                    <label class="custom-file-label" for="inputGroupFile02">Lampirkan surat izin</label>
                  </div>
                </div>
                <button type="submit" class="btn btn-success c login pl-5 pr-5">Daftar</button>
              </form>
              <div class="link login">
                <p>Sudah punya akun? <a data-toggle="modal" data-target="#login-start">Login</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- header -->
  <div id="header">
    <div class="container">
      <?php
      if ($this->session->flashdata('notifikasi')) {
        ?>
        <p style="text-align: center; color: red;"><b><?php echo $this->session->flashdata('notifikasi'); ?></b></p>  
      <?php } ?>
      <div class="row justify-content-center">
        <h1 class="title-header">Direktori Profesi Keuangan</h1>
        <p class="description-header">Direktori Profesi Keuangan (DPK) adalah portal informasi para professional bidang keuangan yang bermanfaat bagi user (pelaku bisnis) untuk menemukan profesi yang dibutuhkan sesuai dengan permasalahan yang dihadapinya.</p>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form class="form-header" action="professional.html">
            <h3 class="subtitle-header">Cari Profesi</h3>
            <div class="form-row">
              <div class="col-md-4">
                <select class="custom-select prof">
                  <option selected>Bidang Profesi</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="col-md-4">
                <select class="custom-select prof">
                  <option selected>Lokasi Profesi</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="col-md-4">
                <a href="pencarian-professional.html"><button type="button" class="btn btn-success c professional"><i class="fa fa-search"></i> Cari Profesional</button></a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>