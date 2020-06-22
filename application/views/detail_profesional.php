  <div id="banner">
    <h1 class="banner-title">Detail Professional</h1>
  </div>

  <div id="blog">
    <div class="row">
      <div class="col-md-5">
        <img class="img-fluid professional" src="<?php echo base_url().'img/img_user/'.$detail->foto ?>" alt="profil" alt="foto_user">
      </div>

      <div class="col-md-7">
        <div class="profil">
          <h3 class="titleh3"><?php echo $detail->nama_user; ?></h3>
          <div class="container single-profil">
            <div class="row">
              <ul class="links">
                <li><a>
                  <span class="icon"><i class="fa fa-briefcase"></i></span>
                  <span class="text">Bidang Akuntansi</span></a>
                  <div class="clearfix"></div>
                </li>
                <li><a>
                  <span class="icon"><i class="fa fa-map-marker"></i></span>
                  <span class="text"><?php echo $detail->alamat_user; ?> , <?php  echo $detail->regency_name; ?> , <?php  echo $detail->province_name; ?></span></a>
                  <div class="clearfix"></div>
                </li>
                <li><a>
                  <span class="icon"><i class="fa fa-mobile"></i></span>
                  <span class="text"><?php  echo $detail->nohp_user; ?></span></a>
                  <div class="clearfix"></div>
                </li>
                <li><a>
                  <span class="icon"><i class="fa fa-list"></i></span>
                  <span class="text">10 artikel</span></a>
                  <div class="clearfix"></div>
                </li>
                <li><a>
                  <span class="icon"><i class="fa fa-hand-o-up"></i></span>
                  <span class="text">100 kali klik pesan</span></a>
                  <div class="clearfix"></div>
                </li>

              </ul>
            </div>
          </div>
          <center>
            <a href="https://wa.me/<?php echo $detail->nohp_user ?>" target="_blank"><button class="btn btn-success c" type="button" style="width: 80%">Kirim Pesan</button></a>
          </center>
        </div>
      </div>

      <div class="col-md-12"><br>
        <h2 class="titleh2"><center>Artikel Terkait</center></h2>
      </div>
      <?php foreach ($data->result() as $artikel) : ?>

      <div class="col-md-4">
        <div class="card">
          <img src="<?php echo base_url().'img/img_artikel/'.$artikel->gambar_artikel ?>" class="card-img-top" alt="">
          <div class="card-body">
            <h3 class="titleh3"><?php echo $artikel->judul_artikel ?></h3>
            <p class="card-text"><?php echo $artikel->nama_kategori_artikel ?></p>
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
        <?php echo $pagination; ?>
      </div>

    </div>
  </div>