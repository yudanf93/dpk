  <div id="banner">
    <h1 class="banner-title">Profil</h1>
  </div>
    
  <div id="blog">
    <div class="row">
      <div class="col-md-6">
        <div class="tambah-artikel">
          <center>
            <img src="<?php echo base_url(); ?>img/img_user/<?php echo $get_user['foto']; ?>" alt="profil-user" class="img-fluid edp">
            <div class="form-group" style="width: 110px; margin-top: 15px">
              <input type="file" class="form-control-file" id="">
            </div>
          </center>
        </div>

        <div class="tambah-artikel">
          <h4 class="titleh3">Password</h4>
          <form action="artikel-manajemen.html">
            <div class="form-group">
              <input type="password" class="form-control" id="" placeholder="********">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="" placeholder="********">
            </div>
          </form>
        </div>
      </div>

      <div class="col-md-6">
        <div class="tambah-artikel">
          <h4 class="titleh3">Data Pengguna</h4>
          <form action="artikel-manajemen.html">
            <div class="form-group">
              <input type="text" class="form-control" id="" value="<?php echo $get_user['nama_user']?>">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="" value="<?php echo $get_user['email_user']?>">
            </div>
            <div class="form-group">
              <input type="number" class="form-control" id="" value="<?php echo $get_user['nohp_user']?>">
            </div>
            <div class="form-group">
              <textarea class="form-control" id="" rows="3"><?php echo $get_user['alamat_user']?>, <?php echo $get_user['kota_user']?>, <?php echo $get_user['provinsi_user']?></textarea>
            </div>
            <div class="form-group">
              <select class="custom-select prof">
                <option selected>Akuntan publik</option>
                <option value="1">Publish</option>
                <option value="2">Pending</option>
                <option value="3">Review</option> 
              </select>
            </div>
            <div class="form-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile02">
                <label class="custom-file-label" for="inputGroupFile02"> <?php echo $get_user['file_user']?></label>
              </div>
            </div>
            <p style="color: red; font-size: 12px; margin-top: -10px;">Noted : Dokumen dengan format.pdf, maksimal 200kb</p>
            <button type="submit" class="btn btn-success c wd pl-5 pr-5">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>