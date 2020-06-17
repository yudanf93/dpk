<main role="main" class="col-md-12 ml-sm-auto col-lg-12 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Search Tracking </h1>
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
         <th>Nama Sub Kategori</th>
         <th>Nama Kategori</th>
         <th>Ip address</th>
         <th>Kota</th>
         <th>Provinsi</th>
         <th>Aksi</th>
       </tr>
     </thead>
     <tbody>
      <?php
      $no = 1;
      foreach ($tracking as $tracking):
       ?>
       <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $tracking->nama_sub_kategori_profesi; ?></td>
        <td><?php echo $tracking->nama_kategori_profesi; ?></td>
        <td><?php echo $tracking->ip_address; ?></td>
        <td><?php echo $tracking->kota; ?></td>
        <td><?php echo $tracking->provinsi; ?></td>
        <td>
         <a href="<?php echo site_url('admin/search_tracking/edit/'.$tracking->id_search_tracking); ?>">
          <button class="btn btn-sm btn-outline-success">Edit</button>
        </a>

        <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#<?php echo $tracking->id_search_tracking; ?><?php echo $tracking->id_search_tracking; ?>">
          Delete
        </button>

        <!-- Modal -->
        <div class="modal fade" id="<?php echo $tracking->id_search_tracking; ?><?php echo $tracking->id_search_tracking; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
           <div class="modal-content">
            <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           Apakah Anda ingin menghapus data <b><?php echo $tracking->ip_address; ?></b> ?
         </div>
         <div class="modal-footer">
           <a href="<?php echo site_url('admin/search_tracking/delete/'.$tracking->id_search_tracking)?>">
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

