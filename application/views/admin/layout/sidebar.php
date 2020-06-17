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
        <a href="<?php echo base_url('admin/user'); ?>"><i class="far fa-user pr-2"></i>User</a>
      </li>
      <li class="<?php if ($title == "Teams") {echo " active";}?>">
        <a href="#artikel" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed"><i class="far fa-bookmark pr-2"></i> Kontent </a>
        <ul class="list-unstyled collapse" id="artikel" style="">
          <li>
            <a href="<?php echo base_url('admin/artikel'); ?>"><i class="far fa-newspaper pr-2"></i>Artikel</a>
          </li>
          <li>
            <a href="<?php echo base_url('admin/kategori_artikel'); ?>"><i class="fa fa-bars pr-2"></i>Kategori Artikel</a>
          </li>
        </ul>
      </li>
      <li class="<?php if ($title == "Teams") {echo " active";}?>">
        <a href="#profesi" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed"><i class="fa fa-users pr-2"></i> Profesi </a>
        <ul class="list-unstyled collapse" id="profesi" style="">
          <li>
            <a href="<?php echo base_url('admin/kategori_profesi'); ?>"><i class="fa fa-hourglass-start pr-2"></i>Kategori Profesi</a>
          </li>
          <li>
            <a href="<?php echo base_url('admin/sub_kategori_profesi'); ?>"><i class="fa fa-hourglass-end pr-2"></i>Sub Kategori Profesi</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="<?php echo base_url('admin/search_tracking'); ?>"><i class="fa fa-map pr-2"></i>Search Tracking</a>
      </li>      
      <li>
        <a href="<?php echo base_url('admin/cta_tracking'); ?>"><i class="fa fa-street-view pr-2"></i>Cta Tracking</a>
      </li>
      <li>
        <a href="<?php echo base_url('login/logout'); ?>"><i class="fas fa-sign-out-alt pr-2"></i> Logout</a>
      </li>
    </ul>
  </nav>