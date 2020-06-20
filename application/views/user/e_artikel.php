  <div id="banner">
    <h1 class="banner-title">Form Ubah Artikel</h1>
  </div>

  <div id="blog">
    <?php
    echo validation_errors('<div class="alert alert-danger">', '</div>');
    echo form_open_multipart(site_url('user/manajemen_artikel/edit/'.$edit->id_artikel)) ?>
    <div class="row">
      <div class="col-md-7">
        <div class="tambah-artikel">
          <h4 class="titleh3">Ubah Artikel</h4>
          <div class="form-group">
            <label class="title-manajemen">Judul artikel</label>
            <input type="text" class="form-control" value="<?php echo $edit->judul_artikel ?>"name="judul_artikel">
          </div>
          <div class="form-group">
            <label class="title-manajemen">Excerpt</label>
            <textarea rows="2" cols="40" name="expert_artikel" placeholder="Masukkan Expert Artikel" class="form-control" required><?php echo $edit->expert_artikel ?></textarea>
          </div>
          <div class="form-group">
            <label class="title-manajemen">Isi artikel</label>
            <textarea class="form-control" name="detail_artikel"><?php echo $edit->detail_artikel ?></textarea>
            <script>
              CKEDITOR.replace( 'detail_artikel' );
            </script>
          </div>
          <div class="tambah-artikel">
            <h4 class="titleh3">Kategori Artikel</h4>
            <div class="form-group">
              <select class="custom-select form-control" name="id_kategori_artikel">
                <?php foreach ($select as $select) { ?>       
                <option value="<?php echo $select->id_kategori_artikel ?>" <?php if($edit->id_kategori_artikel == $select->id_kategori_artikel ) { echo "selected"; } ?>>
                  <?php echo $select->nama_kategori_artikel; ?>
                  </option>
                <?php } ?> 
              </select> 
            </div>
          </div>
          <button type="submit" class="btn btn-success c wd pl-5 pr-5">Ubah Artikel</button>
        </div>
      </div>

      <div class="col-md-5">
        <div class="tambah-artikel">
          <h4 class="titleh3">Publish Artikel</h4>
          <div class="form-group">
            <label class="title-manajemen">Gambar Lama</label>
            <div class="card">
              <img src="<?php echo base_url().'img/img_artikel/'.$edit->gambar_artikel ?>" class="img-fluid" width="300px">
            </div>
            <label class="title-manajemen">Gambar artikel</label>
            <div class="custom-file">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile02" name="gambar_artikel">
                <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
              </div>
            </div>
            <input type="text" class="form-control" value="<?php echo $edit->gambar_artikel ?>" name="gambar_lama" hidden>
          </div>
          <div class="form-group">
            <div class="float-right spec">Ukuran max : 150kb <br>Resolusi max : 840x540 pixel</div>
          </div>
          <div class="form-group">
            <label class="title-manajemen">Penulis artikel</label>
            <input type="text" class="form-control" name="id_user" value="<?php echo $user->nama_user ?>" readonly>
          </div>
          <div class="form-group">
            <label class="title-manajemen">Status artikel</label>
              <select class="custom-select form-control " name="status_artikel">
                <option value="2" <?php if ($edit->status_artikel==2){echo "selected";} ?>>Reviewer</option>
                <option value="1" <?php if ($edit->status_artikel==1){echo "selected";} ?>>Publish</option>
                <option value="0" <?php if ($edit->status_artikel==0){echo "selected";} ?>>Pending</option>
              </select>  
          </div>
          <div class="form-group">
            <label class="title-manajemen">Tanggal publish</label>
            <input type="date" class="form-control" value="<?php echo $edit->tgl_publish ?>" name="tgl_publish">>
          </div>
        </form>
      </div>

    </div>
  </div>

  <?php echo form_close(); ?>
</div>

<div id="blog" style="margin-top: -80px">
  <?php
  if ($this->session->flashdata('notifikasi')) {
    echo "<br>";
    echo "<div class='alert alert-success alert-dismissible fade show'><center>";
    echo $this->session->flashdata('notifikasi');
    echo "</center><button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
    </button></div>";
  }
  ?>
  <?php
  echo validation_errors('<div class="alert alert-danger">', '</div>');
  echo form_open_multipart(site_url('user/manajemen_artikel/add_relasi/'.$edit->slug_artikel)) ?>
  <div class="row">
    <div class="col-md-4">
      <div class="tambah-artikel">
        <input type="text" class="form-control" value="<?php echo $edit->judul_artikel ?>" name="id_artikel" hidden>
        <div class="form-group">
          <label>Sub Kategori Profesi</label>
          <select class="custom-select form-control" name="id_sub_kategori_profesi" required>
            <option selected value="">Pilih Sub Kategori Profesi</option>
            <?php foreach ($sub as $sub) { ?>       
              <option value="<?php echo $sub->id_sub_kategori_profesi ?>"><?php echo $sub->nama_sub_kategori_profesi ?></option>
            <?php } ?> 
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>

    <div class="col-md-8">
      <div class="tambah-artikel">
        <h6 class="titleh3">Tabel Sub Kategori Artikel</h6>
        <div class="table-responsive p-4">
          <table id="example" class="table table-striped table-bordered" style="width:100%">
           <thead>
            <tr>
             <th>No</th>
             <th>Artikel</th>
             <th>Sub Kategori Profesi</th>
             <th>Aksi</th>
           </tr>
         </thead>
         <tbody>
          <?php
          $no = 1;
          foreach ($relasi as $relasi):
           ?>
           <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $relasi->judul_artikel; ?></td>
            <td><?php echo $relasi->nama_sub_kategori_profesi; ?></td>
            <td>
              <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#<?php echo $relasi->id_relation_profesi; ?><?php echo $relasi->id_relation_profesi; ?>">
                Delete
              </button>

              <!-- Modal -->
              <div class="modal fade" id="<?php echo $relasi->id_relation_profesi; ?><?php echo $relasi->id_relation_profesi; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                 <div class="modal-content">
                  <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                 Apakah Anda ingin menghapus data <b><?php echo $relasi->judul_artikel; ?></b> ?
               </div>
               <div class="modal-footer">
                 <a href="<?php echo site_url('user/manajemen_artikel/delete_relasi/'.$relasi->id_relation_profesi)?>">
                  <button type="button" class="btn btn-danger">Delete</button>
                </a>
              </div>
            </div>
          </div>
        </div>
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
</div>

<?php echo form_close(); ?>
</div>