<main role="main" class="col-md-12 ml-sm-auto col-lg-12 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		<h1 class="h2">Tambah Sub Kategori Profesi</h1>

		<div class="btn-toolbar mb-2 mb-md-0">
			<a href="<?php echo base_url(); ?>admin/sub_kategori_profesi">
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
		echo form_open_multipart(site_url('admin/sub_kategori_profesi/add')) ?>
		<div class="row my-4">

			<div class="col-md-6">  
				<div class="card">
					<div class="card-header">
						<h6>Tambah Sub Kategori Profesi</h6>
					</div>
					<div class="card-body">   
						<div class="form-group">
							<label>Nama Sub Kategori</label>
							<input type="text" class="form-control" placeholder="Masukkan Nama Sub Kategori Profesi" name="nama_sub_kategori_profesi">
						</div>
						<div class="form-group">
							<label>Nama Kategori</label>
							<select class="custom-select form-control" name="id_kategori_profesi">
								<option selected>Pilih Nama Kategori Profesi</option>
								<?php foreach ($kategori_profesi as $kategori_profesi) { ?>				
									<option value="<?php echo $kategori_profesi->id_kategori_profesi ?>"><?php echo $kategori_profesi->nama_kategori_profesi ?></option>
								<?php } ?> 
							</select>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>  
			</div>

			<div class="col-md-6">  
				<div class="card">
					<div class="card-header">
						<h6>Tabel Kategori Profesi</h6>
					</div>  
					<div class="table-responsive p-4">
						<table id="example" class="table table-striped table-bordered" style="width:100%">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Sub Kategori</th>
									<th>Nama Kategori</th>
									<th>Tanggal</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($sub as $sub):
									?>
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo $sub->nama_sub_kategori_profesi; ?></td>
										<td><?php echo $sub->nama_kategori_profesi; ?></td>
										<td><?php echo $sub->created; ?></td>
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
	</main>
