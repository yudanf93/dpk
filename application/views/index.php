  <!-- header -->
  <div id="header">
    <div class="container">
        <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
        <?php
        if ($this->session->flashdata('pesan')) {
          echo "<br>";
          echo "<div class='alert alert-danger alert-dismissible fade show'><center>";
          echo $this->session->flashdata('pesan');
          echo "</center><button type='button' class='close' data-dismiss='alert'>
          </button></div>";
        }
        ?>        
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
  <div id="langkah">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="titleh2">Langkah Cepat dan Mudah Dalam Mencari Profesional</h2>
        </div>

        <div class="col-md-4">
          <center class="mob top">
          <div class="bungkus-img">
            <img class="img-fluid bk" src="<?php base_url(); ?>assets/frontend/assets/images/langkah.png" alt="langkah-cepat">
          </div>
          </center>
          <div class="bungkus">
            <h3 class="bungkus-title">Temukan</h3>
            <p class="bungkus-description">Si ergo ila tantum fasitidium. Si ergo ila tantum fasitidium</p>
            <p class="step">Step 1</p>
          </div>
        </div>
        <div class="col-md-4">
          <center class="mob">
          <div class="bungkus-img2">
            <img class="img-fluid bk" src="<?php base_url(); ?>assets/frontend/assets/images/langkah.png" alt="langkah-cepat">
          </div>
          </center>
          <div class="bungkus2">
            <h3 class="bungkus-title">Hubungi</h3>
            <p class="bungkus-description">Si ergo ila tantum fasitidium. Si ergo ila tantum fasitidium</p>
            <p class="step">Step 2</p>
          </div>
        </div>
        <div class="col-md-4">
          <center class="mob">
          <div class="bungkus-img">
            <img class="img-fluid bk" src="<?php base_url(); ?>assets/frontend/assets/images/langkah.png" alt="langkah-cepat">
          </div>
          </center>
          <div class="bungkus">
            <h3 class="bungkus-title">Konsultasi</h3>
            <p class="bungkus-description">Si ergo ila tantum fasitidium. Si ergo ila tantum fasitidium</p>
            <p class="step">Step 3</p>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div id="profesi">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="titleh2">Bidang Profesi</h2>
        </div>
        <div class="col-md-3">
          <h3 class="titleh3">Akuntan Publik</h3>
          <p class="description-profesi">Some quick example text to build on the card title and make up the bulk of the card's content. </p>
        </div>
        <div class="col-md-3">
          <h3 class="titleh3">Akuntan Profesional</h3>
          <p class="description-profesi">Some quick example text to build on the card title and make up the bulk of the card's content. </p>
        </div>
        <div class="col-md-3">
          <h3 class="titleh3">Penilai</h3>
          <p class="description-profesi">Some quick example text to build on the card title and make up the bulk of the card's content. </p>
        </div>
        <div class="col-md-3">
          <h3 class="titleh3">Aktuaris</h3>
          <p class="description-profesi">Some quick example text to build on the card title and make up the bulk of the card's content. </p>
        </div>
        <div class="col-md-3">
          <h3 class="titleh3">Konsultan Pajak</h3>
          <p class="description-profesi">Some quick example text to build on the card title and make up the bulk of the card's content. </p>
        </div>
        <div class="col-md-3">
          <h3 class="titleh3">Kurator</h3>
          <p class="description-profesi">Some quick example text to build on the card title and make up the bulk of the card's content. </p>
        </div>
        <div class="col-md-3">
          <h3 class="titleh3">Akuntan Forensik</h3>
          <p class="description-profesi">Some quick example text to build on the card title and make up the bulk of the card's content. </p>
        </div>
        <div class="col-md-3">
          <h3 class="titleh3">Perencana Keuangan</h3>
          <p class="description-profesi">Some quick example text to build on the card title and make up the bulk of the card's content. </p>
        </div>
      </div>
    </div>
  </div>

  <div id="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="titleh2">Blog</h2>
        </div>
      <?php foreach ($artikel as $artikel): ?>
        <div class="col-md-4">
          <div class="card">
            <img src="<?php echo base_url().'img/img_artikel/'.$artikel->gambar_artikel ?>" class="card-img-top" alt="">
            <div class="card-body">
              <h3 class="titleh3"><?php echo $artikel->judul_artikel; ?></h3>
              <p class="card-text"><?php echo $artikel->nama_kategori_artikel; ?></p>
              <hr>
              <div class="float-left date">
                <i class="fa fa-clock-o"></i> <?php $date=date_create($artikel->tgl_publish); echo date_format($date, 'd F Y'); ?>
              </div>
              <div class="float-right det">
                <a href="<?php echo base_url('detail/blog/'.$artikel->slug_artikel) ?>"><button type="button" class="btn btn-success c">Detail</button></a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?>
        <div class="col-md-12">
          <center><a href="<?php echo base_url('blog') ?>"><button type="button" class="btn btn-success c">Selengkapnya</button></a></center>
        </div>
      </div>
    </div>
  </div>