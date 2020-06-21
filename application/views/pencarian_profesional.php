  <!-- header -->
  <div id="header2">
    <div class="container">
      <div class="row justify-content-center">
        <h1 class="title-header">Hasil Pencarian profesional</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form class="form-header" action="professional.html">
            <div class="form-row">
              <div class="col-md-4">
                <select class="custom-select prof">
                  <option selected>Perencana Keuangan</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="col-md-4">
                <select class="custom-select prof">
                  <option selected>Jakarta</option>
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

  <div id="blog">
    <div class="container">
      <div class="row">
    <?php foreach ($user as $user): ?>
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <div class="media">
              <div class="media-left">
                <img src="<?php echo base_url(); ?>img/img_user/<?php echo $user->foto; ?>" class="img-fluid" alt="profil-user">
              </div>
              <div class="media-body">
                <h3 class="titleh3"><?php echo $user->nama_user ?></h3>
                <div class="container single-profil2">
                  <div class="row">
                    <ul class="links">
                      <li><a>
                        <span class="icon"><i class="fa fa-briefcase"></i></span>
                        <span class="text">Bidang Akuntansi</span></a>
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
              </div>
            </div>
            <div class="card-body b">
              <hr>
              <div class="float-left date">
                <i class="fa fa-map-marker"></i> <?php echo $user->regency_name ?>
              </div>
              <div class="float-right det">
                <a href="<?php echo base_url('detail_profesional/profesi/'.$user->slug) ?>"><button type="button" class="btn btn-success c">Detail</button></a>
              </div>
            </div>
          </div>
        </div>
    <?php endforeach ?>
      </div>
      <div class="row">
        <div class="col-md-12">          
          <?php echo $pagination; ?>
      </div>
      </div>
    </div>
  </div>