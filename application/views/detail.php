  <div id="banner">
    <h1 class="banner-title">Cara Mengatur Keuangan</h1>
  </div>

  <div id="blog">
    <div class="row">
      <div class="col-md-9">
        <img class="img-fluid artikel" src="<?php echo base_url().'img/img_artikel/'.$detail->gambar_artikel ?>" alt="judul-artikel">
        <div class="row">
          <div class="col-md-8">
            <h2 class="artikel-title"><?php echo $detail->judul_artikel ?></h2>
          </div>
          <div class="col-md-4">
            <div class="float-right date">
              <i class="fa fa-clock-o"></i> 4 Juni 2020
            </div>
          </div>
        </div>
        <p><?php echo $detail->detail_artikel ?></p>

        <div class="row">
          <div class="col-md-12">            
            <?php foreach ($relasi as $relasi) : ?>
              <button type="button" class="btn btn-outline-secondary"><?php echo $relasi->nama_sub_kategori_profesi ?></button>
            <?php endforeach ?>
            <div class="float-right share">
              <a href="#" class="sosm"><i class="fa fa-linkedin"></i></a>
              <a href="#" class="sosm"><i class="fa fa-facebook"></i></a>
              <a href="#" class="sosm"><i class="fa fa-twitter"></i></a>
            </div>
          </div>
        </div>
       
      </div>

      <div class="col-md-3">
        <form class="cari-artikel" action="pencarian.html">
          <input class="form-control" type="search" placeholder="Cari artikel" aria-label="Search">
        </form>
        <div class="kategori">
          <h3 class="titleh3">Kategori Artikel</h3>
          <ul>
            <li><?php echo $detail->nama_kategori_artikel ?></li>
          </ul>
        </div>
      </div>
    </div>
  </div>