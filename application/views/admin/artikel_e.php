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

      <div class="col-md-6">  
        <div class="card">
          <div class="card-body">   
            <div class="form-group">
              <label>Judul Artikel</label>
              <input type="text" class="form-control" value="<?php echo $edit->judul_artikel ?>"name="judul_artikel">
            </div>
            <div class="form-group">
              <label>Expert Artikel</label>
              <textarea rows="3" cols="40" name="expert_artikel" class="form-control" required><?php echo $edit->expert_artikel ?></textarea>
            </div>
            <div class="form-group">
              <label>Detail Artikel</label>
              <textarea rows="3" cols="40" name="detail_artikel" class="form-control" required><?php echo $edit->detail_artikel ?></textarea>
            </div>
            <div class="form-group">
              <label>Tanggal Publish</label>
              <input type="date" class="form-control" value="<?php echo $edit->tgl_publish ?>" name="tgl_publish">
            </div>
          </div>
        </div>  
      </div> 
      
      <div class="col-md-6">  
        <div class="card">
          <div class="card-body">   
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
              <label>Kategori Artikel</label>
              <select class="custom-select form-control" name="id_kategori_artikel">
                <?php foreach ($select as $select) { ?>       
                <option value="<?php echo $select->id_kategori_artikel ?>" <?php if($edit->id_kategori_artikel == $select->id_kategori_artikel ) { echo "selected"; } ?>>
                  <?php echo $select->nama_kategori_artikel; ?>
                  </option>
                <?php } ?> 
              </select>  
            </div>
            <div class="form-group">
              <label>Status artikel</label>
              <select class="custom-select form-control " name="status_artikel">
                <option value="1" <?php if ($edit->status_artikel==1){echo "selected";} ?>>Aktif</option>
                <option value="0" <?php if ($edit->status_artikel==0){echo "selected";} ?>>Tidak</option>
              </select>  
            </div>
            <div class="form-group">
              <label>Gambar Lama</label>
              <div class="card">
                <img src="<?php echo base_url().'img/img_artikel/'.$edit->gambar_artikel ?>" class="img-fluid" width="300px">
              </div>
              <label style="margin-top: 5px;">Upload Gambar</label>
              <input type="file" class="form-control"  name="gambar_artikel">
              <input type="text" class="form-control" value="<?php echo $edit->gambar_artikel ?>" name="gambar_lama" hidden>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>  
      </div>
    </div>

  <?php echo form_close(); ?>
</main>
