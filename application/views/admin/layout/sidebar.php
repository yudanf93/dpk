<div class="wrapper">
  <!-- Sidebar Holder -->
  <nav id="sidebar">
    <div class="sidebar-header">
      <center> 
        <img src="<?php echo base_url();?>img/img_user/<?php echo $this->session->userdata('foto'); ?>" alt="Foto_Profil" class="rounded-circle coba mb-2" width="60%">
        <br>
        <span><?php echo $this->session->userdata('nama_user'); ?></span> 
        <hr>
      </center>
    </div>

    <ul class="list-unstyled components">
      <li>
        <a href="<?php echo base_url('admin/dashboard'); ?>"><i class="fas fa-tachometer-alt pr-2"></i> Dasboard</a>
      </li>
      <li>
        <a href="<?php echo base_url('admin/user'); ?>"><i class="far fa-user pr-3"></i>User</a>
      </li>
      <li>
        <a href="<?php echo base_url('admin/artikel'); ?>"><i class="far fa-newspaper pr-3"></i>Artikel</a>
      </li>
      <li>
        <a href="<?php echo base_url('admin/kategori_artikel'); ?>"><i class="far fa-newspaper pr-3"></i>Kategori Artikel</a>
      </li>
      <li>
        <a href="<?php echo base_url('admin/relation_profesi'); ?>"><i class="far fa-newspaper pr-3"></i>Relasi Profesi</a>
      </li>
      <li>
        <a href="<?php echo base_url('admin/kategori_profesi'); ?>"><i class="far fa-newspaper pr-3"></i>Kategori Profesi</a>
      </li>
      <li>
        <a href="<?php echo base_url('admin/sub_kategori_profesi'); ?>"><i class="far fa-newspaper pr-3"></i>Sub Kategori Profesi</a>
      </li>
      <li>
        <a href="<?php echo base_url('admin/search_tracking'); ?>"><i class="far fa-newspaper pr-3"></i>Search Tracking</a>
      </li>
      <li>
        <a href="<?php echo base_url('login/logout'); ?>"><i class="fas fa-sign-out-alt pr-3"></i> Logout</a>
      </li>
    </ul>
  </nav>