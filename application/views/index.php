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
                <i class="fa fa-clock-o"></i> <?php echo $artikel->tgl_publish; ?>
              </div>
              <div class="float-right det">
                <a href="<?php echo base_url('detail/blog/'.$artikel->slug_artikel) ?>"><button type="button" class="btn btn-success c">Detail</button></a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?>
        <div class="col-md-12">
          <center><a href="blog.html"><button type="button" class="btn btn-success c">Selengkapnya</button></a></center>
        </div>
      </div>
    </div>
  </div>