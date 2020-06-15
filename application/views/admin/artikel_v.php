<main role="main" class="col-md-12 ml-sm-auto col-lg-12 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Artikel</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <a href="<?php echo site_url('admin/artikel/add'); ?>">
        <button class="btn btn-sm btn-outline-primary">Tambah</button></a>
      </div>
  </div>

  <div class="row my-4">
  	<div class="col-12 ">
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
 	 <div class="card">
       <div class="table-responsive p-4">
       	<table id="example" class="table table-striped table-bordered" style="width:100%">
       		<thead>
       			<tr>
       				<th>No</th>
       				<th>Judul & Gambar</th>
              <th>Expert</th>
              <th>Detail</th>
       				<th>Nama</th> 
       				<th>Kategori</th>
       				<th>Tanggal Publish</th>
       				<th>Status</th>
       				<th>Aksi</th>
       			</tr>
       		</thead>
       		<tbody>
       			<?php
       			$no = 1;
       			foreach ($artikel as $artikel):
       				?>
       				<tr>
       					<td><?php echo $no; ?></td>
       					<td><img src="<?php echo base_url().'img/img_artikel/'.$artikel->gambar_artikel ?>" class="img-fluid" width="400px"><b> <?php echo $artikel->judul_artikel; ?></b></td>
       					<td><?php echo $artikel->expert_artikel; ?></td>
       					<td><?php echo $artikel->detail_artikel; ?></td>
       					<td><?php echo $artikel->nama_user; ?></td>
                <td><?php echo $artikel->nama_kategori_artikel; ?></td>
                <td><?php echo $artikel->tgl_publish; ?></td>
                <td>
                  <?php if ($artikel->status_artikel=='0'){ ?>  
                  <button class="btn btn-sm btn-danger">Tidak</button>
                <?php }else {?>
                  <button class="btn btn-sm btn-success">Aktif</button>
                <?php } ?>
                </td>
       					<td>
       						<a href="<?php echo site_url('admin/artikel/edit/'.$artikel->id_artikel); ?>">
       							<button class="btn btn-sm btn-outline-success">Edit</button>
       						</a>

       						<button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#<?php echo $artikel->id_artikel; ?><?php echo $artikel->id_artikel; ?>">
       							Delete
       						</button>

       						<!-- Modal -->
       						<div class="modal fade" id="<?php echo $artikel->id_artikel; ?><?php echo $artikel->id_artikel; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       							<div class="modal-dialog" role="document">
       								<div class="modal-content">
       									<div class="modal-header">
       										<h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
       										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
       											<span aria-hidden="true">&times;</span>
       										</button>
       									</div>
       									<div class="modal-body">
       										Apakah Anda ingin menghapus data <b><?php echo $artikel->judul_artikel; ?></b> ?
       									</div>
       									<div class="modal-footer">
       										<a href="<?php echo site_url('admin/artikel/delete/'.$artikel->id_artikel)?>">
       											<button type="button" class="btn btn-danger">Delete</button>
       										</a>
       									</div>
       								</div>
       							</div>
       						</div>
       					</td>
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

</main>

