<main role="main" class="col-md-12 ml-sm-auto col-lg-12 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		<h1 class="h2">Tambah Kategori Profesi</h1>

		<div class="btn-toolbar mb-2 mb-md-0">
			<a href="<?php echo base_url(); ?>admin/kategori_profesi">
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
    echo form_open_multipart(site_url('admin/kategori_profesi/edit/'.$edit->id_kategori_profesi)) ?>
		<div class="row my-4">

			<div class="col-md-6">  
				<div class="card">
					<div class="card-header">
						<h6>Tambah Kategori Profesi</h6>
					</div>
					<div class="card-body">   
						<div class="form-group">
							<label>Nama Kategori</label>
							<input type="text" class="form-control" value="<?php echo $edit->nama_kategori_profesi ?>" name="nama_kategori_profesi">
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
									<th>Nama Kategori</th>
									<th>Tanggal</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($profesi as $profesi):
									?>
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo $profesi->nama_kategori_profesi; ?></td>
										<td><?php echo $profesi->created; ?></td>
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
