<main role="main" class="col-md-12 ml-sm-auto col-lg-12 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Form Ubah Artikel</h1>
    
    <div class="btn-toolbar mb-2 mb-md-0">
      <a href="<?php echo base_url(); ?>admin/artikel">
        <button class="btn btn-sm btn-outline-success">Kembali</button></a>
        
      </div>

    </div>  
    <?php
    echo validation_errors('<div class="alert alert-danger">', '</div>');
    echo form_open_multipart(site_url('admin/artikel/edit/'.$edit->id_artikel)) ?>
    <div class="row my-4">

      <div class="col-md-8">  
        <div class="card">
          <div class="card-header">
            <h6>Ubah Artikel</h6>
          </div>
          <div class="card-body">   
            <div class="form-group">
              <label>Judul Artikel</label>
              <input type="text" class="form-control" value="<?php echo $edit->judul_artikel ?>"name="judul_artikel">
            </div>
            <div class="form-group">
              <label>Expert Artikel</label>
              <textarea rows="2 " cols="40" name="expert_artikel" class="form-control" required><?php echo $edit->expert_artikel ?></textarea>
            </div>
            <div class="form-group">
              <label>Detail Artikel</label>
              <br><textarea id="editor1"  name="detail_artikel" placeholder="Masukkan Detail Artikel" required><?php echo $edit->detail_artikel ?></textarea>
            </div>
          </div>
        </div>  
      </div> 
      
      <div class="col-md-4">  
        <div class="card">
          <div class="card-header">
            <h6>Publish Artikel</h6>
          </div>
          <div class="card-body">   
            <div class="form-group">
              <label>Gambar Lama</label>
              <div class="card">
                <img src="<?php echo base_url().'img/img_artikel/'.$edit->gambar_artikel ?>" class="img-fluid" width="300px">
              </div>
              <label style="margin-top: 5px;">Upload Gambar</label>
              <input type="file" class="form-control"  name="gambar_artikel">
              <strong><small style="float:right;color:crimson;">Ukuran image Max : 150 kb</small></strong>
              <br>
              <strong><small style="float:right;color:crimson;"> Resolusi max : 840 x 504 pixel</small></strong>
              <input type="text" class="form-control" value="<?php echo $edit->gambar_artikel ?>" name="gambar_lama" hidden>
            </div>
            <div class="form-group">
              <label>Nama User</label>
              <select class="custom-select form-control" name="id_user">
              <?php foreach ($user as $user) { ?>       
                <option value="<?php echo $user->id_user ?>" <?php if ($edit->id_user == $user->id_user ) { echo "selected"; } ?>>
                  <?php echo $user->nama_user; ?>
                  </option>
                <?php } ?> 
              </select>
            </div>               
            <div class="form-group">
              <label>Tanggal Publish</label>
              <input type="date" class="form-control" value="<?php echo $edit->tgl_publish ?>" name="tgl_publish">
            </div>         
            <div class="form-group">
              <label>Status artikel</label>
              <select class="custom-select form-control " name="status_artikel">
                <option value="1" <?php if ($edit->status_artikel==1){echo "selected";} ?>>Aktif</option>
                <option value="0" <?php if ($edit->status_artikel==0){echo "selected";} ?>>Tidak</option>
              </select>  
            </div>
          </div>
        </div> <br> 
        <div class="card">
          <div class="card-header">
            <h6>Kategori Artikel</h6>
          </div>
          <div class="card-body">           
            <div class="form-group">
              <label>Kategori Artikel</label>
              <select class="custom-select form-control" name="id_kategori_artikel">
                <?php foreach ($select as $select) { ?>       
                <option value="<?php echo $select->id_kategori_artikel ?>" <?php if($edit->id_kategori_artikel == $select->id_kategori_artikel ) { echo "selected"; } ?>>
                  <?php echo $select->nama_kategori_artikel; ?>
                  </option>
                <?php } ?> 
              </select>  
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>
    </div>
  <?php echo form_close(); ?>

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
    echo form_open_multipart(site_url('admin/artikel/add_relasi/'.$edit->id_artikel)) ?>
  <div class="row my-4">
      <div class="col-md-4">  
        <div class="card">
          <div class="card-header">
            <h6>Tambah Relasi Profesi</h6>
          </div>
          <div class="card-body">   
            <input type="text" class="form-control" value="<?php echo $edit->judul_artikel ?>" name="id_artikel" hidden>
            <div class="form-group">
              <label>Sub Kategori Profesi</label>
              <select class="custom-select form-control" name="id_sub_kategori_profesi">
                <option selected>Pilih Sub Kategori Profesi</option>
                <?php foreach ($sub as $sub) { ?>       
                  <option value="<?php echo $sub->id_sub_kategori_profesi ?>"><?php echo $sub->nama_sub_kategori_profesi ?></option>
                <?php } ?> 
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>  
      </div> 
    <?php echo form_close(); ?>
      
    <div class="col-md-8 ">
      <div class="card">
        <div class="card-header">
          <h6>Tabel Relasi Profesi</h6>
        </div>
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
           <a href="<?php echo site_url('admin/artikel/delete_relasi/'.$relasi->id_relation_profesi)?>">
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

    </div>
</main>
