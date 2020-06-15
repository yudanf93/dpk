<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function __construct()
  {   
    parent::__construct();
    //$this->load->model('M_dasbor');
  }

  function index() {
    $data = array(
      'title' => 'Dashboard Admin DPK',
      'isi' => 'admin/dashboard'
    );
    $this->load->view("admin/layout/wrapper", $data, false);
  }

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */