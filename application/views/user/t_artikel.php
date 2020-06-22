  <div id="banner">
    <h1 class="banner-title">Form Artikel</h1>
  </div>

  <div id="blog">
    <?php
    echo validation_errors('<div class="alert alert-danger">', '</div>');
    echo form_open_multipart(site_url('user/manajemen_artikel/add')) ?>
    <div class="row">
      <div class="col-md-7">
        <div class="tambah-artikel">
          <h4 class="titleh3">Tambah Artikel Baru</h4>
            <div class="form-group">
              <label class="title-manajemen">Judul artikel</label>
              <input type="text" class="form-control" placeholder="Masukkan Judul Artikel" name="judul_artikel">
            </div>
            <div class="form-group">
              <label class="title-manajemen">Excerpt</label>
              <textarea rows="2" cols="40" name="expert_artikel" placeholder="Masukkan Expert Artikel" class="form-control" required></textarea>
            </div>
            <div class="form-group">
              <label class="title-manajemen">Isi artikel</label>
              <textarea class="form-control" name="detail_artikel"></textarea>
              <script>
                CKEDITOR.replace( 'detail_artikel' );
              </script>
            </div>
            <button type="submit" class="btn btn-success c wd pl-5 pr-5">Tambah Artikel</button>
        </div>
      </div>

      <div class="col-md-5">
        <div class="tambah-artikel">
          <h4 class="titleh3">Publish Artikel</h4>
            <div class="form-group">
              <label class="title-manajemen">Gambar artikel</label>
              <div class="custom-file">
                <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile02" name="gambar_artikel">
                <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
              </div>
              </div>
            </div>
            <div class="form-group">
              <div class="float-right spec">Ukuran max : 150kb <br>Resolusi max : 840x540 pixel</div>
            </div>
            <div class="form-group">
              <label class="title-manajemen">Penulis artikel</label>
              <input type="text" class="form-control" name="id_user" value="<?php echo $user->nama_user ?>" readonly>
            </div>
              <select class="custom-select form-control" id="status_artikel" name="status_artikel" hidden>
                <option selected>Pilih jenis Status Artikel</option>
                <option value="0">Pending</option>
              </select> 
            <div class="form-group">
              <label class="title-manajemen">Tanggal publish</label>
              <input type="date" class="form-control" placeholder="Masukkan Nama Kota" name="tgl_publish">
            </div>
          </form>
        </div>

        <div class="tambah-artikel">
          <h4 class="titleh3">Kategori Artikel</h4>
            <div class="form-group">
              <select class="custom-select form-control" name="id_kategori_artikel">
                <option selected>Pilih jenis Kategori Artikel</option>
                <?php foreach ($select as $select) { ?>       
                  <option value="<?php echo $select->id_kategori_artikel ?>"><?php echo $select->nama_kategori_artikel ?></option>
                <?php } ?> 
              </select>
            </div>
          </form>
        </div>

      </div>
    </div>

<?php echo form_close(); ?>
  </div>