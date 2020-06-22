<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {   
		parent::__construct();
	    $this->load->model('M_artikel');
	}

	public function index() {
		$artikel = $this->M_artikel->select_artikel_publish_user();  
		
		$data = array(
			'title' => 'Direktori Profesi Keuangan (DPK)',
			'metades' => 'Direktori Profesi Keuangan (DPK) adalah portal informasi para professional bidang keuangan yang bermanfaat bagi pelaku bisnis untuk menemukan profesi yang dibutuhkan sesuai dengan permasalahan yang dihadapinya. DPK berfungsi mempertemukan antara professional dengan pelaku bisnis.',
			'isi' 	=> 'index',
			'artikel' =>  $artikel
		);
		$this->load->view("layout/wrapper", $data, false);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */