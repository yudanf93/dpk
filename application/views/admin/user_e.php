<main role="main" class="col-md-12 ml-sm-auto col-lg-12 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		<h1 class="h2">Form Ubah User</h1>

		<div class="btn-toolbar mb-2 mb-md-0">
			<a href="<?php echo base_url(); ?>admin/user">
				<button class="btn btn-sm btn-outline-success">Kembali</button></a>

			</div>

		</div>     
		<?php
		echo validation_errors('<div class="alert alert-danger">', '</div>');
		echo form_open_multipart(site_url('admin/user/edit/'.$edit->id_user)) ?>
		<div class="row my-4">
			<div class="col-md-6">  
				<div class="card">  
					<div class="card-body">   
						<div class="form-group">
							<label>Nama User</label>
							<input type="text" class="form-control" value="<?php echo $edit->nama_user ?>" name="nama_user" readonly>
						</div>
						<div class="form-group">
							<label>No Telepon</label>
							<input type="number" class="form-control" value="<?php echo $edit->nohp_user ?>" name="nohp_user" readonly>
						</div>
						<div class="form-group">
							<label>Alamat Lengkap</label>
							<textarea rows="2" cols="40"  name="alamat_user"  class="form-control" required readonly><?php echo $edit->alamat_user ?></textarea >
						</div>
						<div class="form-group">
							<label>Provinsi</label>
							<input type="text" class="form-control" value="<?php echo $edit->province_name ?>" readonly>
						</div>
						<div class="form-group">
							<label>Kota</label>
							<input type="text" class="form-control" value="<?php echo $edit->regency_name ?>" readonly>
						</div>
						<button type="submit" class="btn btn-primary btn-sm">Submit</button>
					</div>
				</div>  
			</div>

			<div class="col-md-6">  
				<div class="card">
					<div class="card-body">   
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control"  value="<?php echo $edit->email_user ?>"  name="email_user">
						</div>						
						<div class="form-group">
							<label>Password <b>(Untuk Form ubah Password ada di bawah)</b></label>
							<input type="password" class="form-control"  value="<?php echo $edit->password_user ?>"  name="password_user" readonly>
						</div>
						<div class="form-group">
							<label>Akses level</label>
							<input type="text" class="form-control"  value="<?php echo $edit->akses_level ?>"  name="akses_level" readonly>
						</div>
						<div class="form-group">
							<label>Status User</label>
							<select class="custom-select form-control" name="status_user">
								<option value="1" <?php if ($edit->status_user=='1'){echo "selected";} ?>>Aktif</option>
								<option value="0" <?php if ($edit->status_user=='0'){echo "selected";} ?>>Tidak</option>
							</select>  
						</div>
						<div class="form-group">
							<label>Surat Izin</label>
								<input type="text" class="form-control" value="<?php echo $edit->file_user ?>" readonly>
							<p style="padding-left: 10px; margin-top: 10px;"><a href="<?php echo base_url('dokumen/dok_user/'.$edit->file_user); ?>"><i class="fa fa-download pr-2"></i>Lihat Surat</a></p>              
						</div>
					</div>  
				</div>  
			</div>
		</div>
		<?php echo form_close(); ?>

		<div class="row my-4">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
						<h5>Form Ubah Pasword Baru</h5>
						</div>   				
						<div class="form-group">
							<label>Password Lama</label>
							<input type="password" class="form-control"  value="<?php echo $edit->password_user ?>" disabled   > 
						</div>
						<form method="post" action="<?php echo base_url('admin/user/reset_password/'.$edit->id_user); ?>">
							<?php
							echo form_open_multipart(site_url('admin/user/edit/'.$edit->id_user)) ?>
							<div class="form-group">
								<label>Password Baru</label>
								<input type="password" class="form-control" placeholder="Isi Password Baru"  name="password_user">  
								<?php form_error('password_user'); ?>
							</div>  				 
							<div class="form-group">
								<label>Konfirmasi Password</label>
								<input type="password" class="form-control"  placeholder="Isi Password Baru anda sebelumnya"  name="passconf" required=""> 
								<?php form_error('passconf'); ?> 
							</div>
							<button type="submit" class="btn btn-primary btn-sm">Submit</button>
							<?php echo form_close(); ?>
						</form>
					</div>
				</div>
			</div>
		</div>
	</main>
