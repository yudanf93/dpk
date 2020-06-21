<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panduan extends CI_Controller { 	

	public function __construct() {   
		parent::__construct();

	}  

	public function index() {
		$data = array(
		'title' => 'Direktori Profesi Keuangan (DPK)',
		'metades' => 'Direktori Profesi Keuangan (DPK) adalah portal informasi para professional bidang keuangan yang bermanfaat bagi pelaku bisnis untuk menemukan profesi yang dibutuhkan sesuai dengan permasalahan yang dihadapinya. DPK berfungsi mempertemukan antara professional dengan pelaku bisnis.', 
		'isi' 	=> 'panduan',
	);     
	$this->load->view("layout/wrapper", $data, false);
	}

}

/* End of file Panduan.php */
/* Location: ./application/controllers/Panduan.php */