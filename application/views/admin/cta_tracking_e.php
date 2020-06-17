<main role="main" class="col-md-12 ml-sm-auto col-lg-12 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		<h1 class="h2">Ubah Cta Tracking</h1>

		<div class="btn-toolbar mb-2 mb-md-0">
			<a href="<?php echo base_url(); ?>admin/cta_tracking">
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
		echo form_open_multipart(site_url('admin/cta_tracking/edit/'.$edit->id_cta_track)) ?>
		<div class="row my-4">

			<div class="col-md-6">  
				<div class="card">
					<div class="card-header">
						<h6>Ubah Cta Tracking</h6>
					</div>
					<div class="card-body">   
						<div class="form-group">
							<label>Nama Useri</label>
							<select class="custom-select form-control" name="id_user">
								<?php foreach ($user as $user) { ?>       
									<option value="<?php echo $user->id_user ?>" <?php if($edit->id_user == $user->id_user ) { echo "selected"; } ?>>
										<?php echo $user->nama_user; ?>
									</option>
								<?php } ?> 
							</select> 
						</div>
						<div class="form-group">
							<label></label>
							<input type="text" class="form-control" value="<?php echo $edit->ip_address ?>" name="ip_address">
						</div>
					</div>
				</div>  
			</div>

			<div class="col-md-6">  
				<div class="card">
					<div class="card-header">
						<h6>Tabel Cta Tracking</h6>
					</div>
					<table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>No</th>
								<th>User</th>
								<th>Ip address</th>
								<th>Created</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($cta as $cta):
								?>
								<tr>
									<td><?php echo $no; ?></td>
									<td><?php echo $cta->nama_user; ?></td>
									<td><?php echo $cta->ip_address; ?></td>
									<td><?php echo $cta->created; ?></td>
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
		<?php echo form_close(); ?>
	</main>
