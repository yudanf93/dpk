<main role="main" class="col-md-12 ml-sm-auto col-lg-12 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		<h1 class="h2">Form Tambah Artikel</h1>

		<div class="btn-toolbar mb-2 mb-md-0">
			<a href="<?php echo base_url(); ?>admin/artikel">
				<button class="btn btn-sm btn-outline-success">Kembali</button></a>

			</div>
   
		</div>  
    <?php
    echo validation_errors('<div class="alert alert-danger">', '</div>');
    echo form_open_multipart(site_url('admin/artikel/add')) ?>
		<div class="row my-4">

			<div class="col-md-8">  
				<div class="card">
					<div class="card-header">
						<h6>Tambah Artikel Baru</h6>
					</div>
					<div class="card-body">   
						<div class="form-group">
							<label>Judul Artikel</label>
							<input type="text" class="form-control" placeholder="Masukkan Judul Artikel" name="judul_artikel">
						</div>
						<div class="form-group">
							<label>Expert Artikel</label>
							<textarea rows="2" cols="40" name="expert_artikel" placeholder="Masukkan Expert Artikel" class="form-control" required></textarea>
						</div>  
						<div class="form-group">
							<label>Detail Artikel</label>
							<br><textarea id="editor1"  name="detail_artikel" placeholder="Masukkan Detail Artikel" required></textarea>
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
							<label>Upload Gambar</label>
							<input type="file" class="form-control"  name="gambar_artikel">
							<strong><small style="float:right;color:crimson;">Ukuran image Max : 150 kb</small></strong>
							<br>
							<strong><small style="float:right;color:crimson;"> Resolusi max : 840 x 504 pixel</small></strong>
						</div>
						<div class="form-group">
							<label>Nama User</label>
							<select class="custom-select form-control" name="id_user">
								<option selected>Pilih Nama User</option>
								<?php foreach ($user as $user) { ?>				
									<option value="<?php echo $user->id_user ?>"><?php echo $user->nama_user ?></option>
								<?php } ?> 
							</select>
						</div>
						<div class="form-group">
							<label>Tanggal Publish</label>
							<input type="date" class="form-control" placeholder="Masukkan Nama Kota" name="tgl_publish">
						</div>
						<div class="form-group">
							<label>Status artikel</label>
							<select class="custom-select form-control	" name="status_artikel">
								<option selected>Pilih jenis Status Artikel</option>
								<option value="1">Publish</option>
								<option value="2">Reviewer</option>
								<option value="0">Pending</option>
							</select>  
						</div>
					</div>
				</div>  <br>
				<div class="card">
					<div class="card-header">
						<h6>Kategori Artikel</h6>
					</div>
					<div class="card-body">   				
						<div class="form-group">
							<label>Kategori Artikel</label>
							<select class="custom-select form-control" name="id_kategori_artikel">
								<option selected>Pilih jenis Kategori Artikel</option>
								<?php foreach ($select as $select) { ?>				
								<option value="<?php echo $select->id_kategori_artikel ?>"><?php echo $select->nama_kategori_artikel ?></option>
								<?php } ?> 
							</select>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
			</div>

		</div>
		<?php echo form_close(); ?>
	</main>
  