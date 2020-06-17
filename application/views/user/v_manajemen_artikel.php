 <div id="banner">
    <h1 class="banner-title">Manajemen Artikel</h1>
  </div>

  <div id="blog">
    <div class="row">
      <div class="col-md-12">
        <div class="float-right">
          <a href="artikel-tambah.html"><button class="btn btn-outline-success c my-2 my-sm-0">Tambah Artikel</button></a>
        </div>
      </div>
      <div class="table-responsive p-4">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>No</th>
              <th>Gambar Artikel</th>
              <th>Penulis</th>
              <th>Status</th>
              <th>Tanggal</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($artikel as $artikel):
              ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><b> <?php echo $artikel->judul_artikel; ?></b><br><img src="<?php echo base_url().'img/img_artikel/'.$artikel->gambar_artikel ?>" class="img-fluid" width="200px"></td>
                <td><?php echo $artikel->nama_user; ?></td>
                <td>
                  <?php if ($artikel->status_artikel=='0'){ ?>  
                    <button class="btn btn-sm btn-danger">Pending</button>
                  <?php }else {?>
                    <button class="btn btn-sm btn-success">Publish</button>
                  <?php } ?>
                </td>
                <td><?php echo $artikel->tgl_publish; ?></td>
                <td>
                  <a href="#" style="color: #91A440">Edit</a> |
                  <a href="#" style="color: red">Hapus</a>
                </td>
            </tr>
            <?php
            $no++;
          endforeach;
          ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>