<main role="main" class="col-md-12 ml-sm-auto col-lg-12 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Cta Tracking </h1>
<!--     <div class="btn-toolbar mb-2 mb-md-0">
      <a href="<?php echo site_url('admin/search_tracking/add'); ?>">
        <button class="btn btn-sm btn-outline-primary">Tambah</button></a>
      </div> -->
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
         <th>User</th>
         <th>Ip address</th>
         <th>Created</th>
         <th>Aksi</th>
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
        <td>
         <a href="<?php echo site_url('admin/cta_tracking/edit/'.$cta->id_cta_track); ?>">
          <button class="btn btn-sm btn-outline-success">Edit</button>
        </a>

        <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#<?php echo $cta->id_cta_track; ?><?php echo $cta->id_cta_track; ?>">
          Delete
        </button>

        <!-- Modal -->
        <div class="modal fade" id="<?php echo $cta->id_cta_track; ?><?php echo $cta->id_cta_track; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
           <div class="modal-content">
            <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           Apakah Anda ingin menghapus data <b><?php echo $cta->ip_address; ?></b> ?
         </div>
         <div class="modal-footer">
           <a href="<?php echo site_url('admin/cta_tracking/delete/'.$cta->id_cta_track)?>">
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

