<main role="main" class="col-md-12 ml-sm-auto col-lg-12 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		<h1 class="h2">Ubah Serach Tracking</h1>

		<div class="btn-toolbar mb-2 mb-md-0">
			<a href="<?php echo base_url(); ?>admin/search_tracking">
				<button class="btn btn-sm btn-outline-success">Kembali</button></a>

			</div>

		</div>  
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
		echo form_open_multipart(site_url('admin/search_tracking/edit/'.$edit->id_search_tracking)) ?>
		<div class="row my-4">

			<div class="col-md-8">  
				<div class="card">
					<div class="card-header">
						<h6>Wilayah</h6>
					</div>
					<div class="card-body">   
						<div class="form-group">
							<label>Kota</label>
							<input type="text" class="form-control" value="<?php echo $edit->kota ?>" name="kota">
						</div>
						<div class="form-group">
							<label>Provinsi</label>
							<input type="text" class="form-control" value="<?php echo $edit->provinsi ?>" name="provinsi">
						</div>						
						<div class="form-group">
							<label>Ip Address</label>
							<input type="text" class="form-control" value="<?php echo $edit->ip_address ?>" name="ip_address">
						</div>
					</div>
				</div>  
			</div>

			<div class="col-md-4">  
				<div class="card">
					<div class="card-header">
						<h6>Kategori Profesi</h6>
					</div>
					<div class="card-body">   
						<div class="form-group">
							<label>Kategori Profesi</label>
							<select class="custom-select form-control" name="id_kategori_profesi">
								<?php foreach ($kategori as $kategori) { ?>       
									<option value="<?php echo $kategori->id_kategori_profesi ?>" <?php if($edit->id_kategori_profesi == $kategori->id_kategori_profesi ) { echo "selected"; } ?>>
										<?php echo $kategori->nama_kategori_profesi; ?>
									</option>
								<?php } ?> 
							</select> 
						</div>
						<div class="form-group">
							<label>Sub Kategori Profesi</label>
							<select class="custom-select form-control" name="id_sub_kategori_profesi">
								<?php foreach ($sub as $sub) { ?>       
									<option value="<?php echo $sub->id_sub_kategori_profesi ?>" <?php if($edit->id_sub_kategori_profesi == $sub->id_sub_kategori_profesi ) { echo "selected"; } ?>>
										<?php echo $sub->nama_sub_kategori_profesi; ?>
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
	</main>
