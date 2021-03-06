  <div id="banner">
    <h1 class="banner-title">List Artikel</h1>
  </div>

  <div id="blog">
    <div class="row">
      <div class="col-md-9">
        <div class="row">      

          <?php foreach ($data->result() as $blog_user) : ?>
          <div class="col-md-4">
            <div class="card">
              <img src="<?php echo base_url().'img/img_artikel/'.$blog_user->gambar_artikel ?>" class="card-img-top" alt="">
              <div class="card-body">
                <h3 class="titleh3"><?php echo $blog_user->judul_artikel; ?></h3>
                <p class="card-text"><?php echo $blog_user->nama_kategori_artikel ?></p>
                <hr>
                <div class="float-left date">
                  <i class="fa fa-clock-o"></i> <?php $date=date_create($blog_user->tgl_publish); echo date_format($date, 'd F Y'); ?>
                </div>
                <div class="float-right det">
                  <a href="<?php echo base_url('detail/blog/'.$blog_user->slug_artikel) ?>"><button type="button" class="btn btn-success c">Detail</button></a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach ?>

        </div>
      </div>
      <div class="col-md-3">
        <form class="cari-artikel" action="pencarian.html">
          <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        </form>
        <div class="kategori">
          <h3 class="titleh3">Kategori Artikel</h3>
          <ul>
            <?php foreach ($kategori as $kategori) : ?>
            <li><?php echo $kategori->nama_kategori_artikel ?></li>
          <?php endforeach ?>
          </ul>
        </div>
      </div>

      <div class="col-md-12">
        
        <?php echo $pagination; ?>
      </div>
    </div>
  </div>