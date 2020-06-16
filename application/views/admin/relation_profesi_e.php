<main role="main" class="col-md-12 ml-sm-auto col-lg-12 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		<h1 class="h2">Ubah Relasi Profesi</h1>

		<div class="btn-toolbar mb-2 mb-md-0">
			<a href="<?php echo base_url(); ?>admin/relation_profesi">
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
		echo form_open_multipart(site_url('admin/relation_profesi/edit'.$edit->id_relation_profesi)) ?>
		<div class="row my-4">

			<div class="col-md-6">  
				<div class="card">
					<div class="card-header">
						<h6>Ubah Relasi Profesi</h6>
					</div>
					<div class="card-body">   
						<div class="form-group">
							<label>Judul Artikel</label>
							<select class="custom-select form-control" name="id_user">
								<?php foreach ($artikel as $artikel) { ?>       
									<option value="<?php echo $artikel->id_artikel ?>" <?php if ($edit->id_artikel == $artikel->id_artikel ) { echo "selected"; } ?>>
										<?php echo $artikel->judul_artikel; ?>
									</option>
								<?php } ?> 
							</select>
						</div>
						<div class="form-group">
							<label>Sub Kategori Profesi</label>
							<select class="custom-select form-control" name="id_user">
								<?php foreach ($sub as $sub) { ?>       
									<option value="<?php echo $sub->id_sub_kategori_profesi ?>" <?php if ($edit->id_sub_kategori_profesi == $sub->id_sub_kategori_profesi ) { echo "selected"; } ?>>
										<?php echo $sub->nama_sub_kategori_profesi; ?>
									</option>
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
						<h6>Tabel Relasi Profesi</h6>
					</div>  
					<div class="table-responsive p-4">
						<table id="example" class="table table-striped table-bordered" style="width:100%">
							<thead>
								<tr>
									<th>No</th>
									<th>Judul Artikel</th>
									<th>Sub Kategori</th>
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
