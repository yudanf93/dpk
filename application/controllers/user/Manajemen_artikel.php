<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manajemen_artikel extends CI_Controller {

	public function __construct() {   
		parent::__construct();
	   	$this->load->model('M_artikel');
		$this->load->model('M_user');	}

	public function index() {
		$semua  = $this->M_artikel->count_semua();
		$publish  = $this->M_artikel->count_publish();
		$pending  = $this->M_artikel->count_pending();
		$artikel = $this->M_artikel->select_artikel_user();    
		$artikel_publish = $this->M_artikel->select_artikel_publish();
		$artikel_pending = $this->M_artikel->select_artikel_pending();
		$data = array(
			'title' => 'Direktori Profesi Keuangan (DPK)',
			'metades' => 'Direktori Profesi Keuangan (DPK) adalah portal informasi para professional bidang keuangan yang bermanfaat bagi pelaku bisnis untuk menemukan profesi yang dibutuhkan sesuai dengan permasalahan yang dihadapinya. DPK berfungsi mempertemukan antara professional dengan pelaku bisnis.',
			'isi' 	=> 'user/v_manajemen_artikel',			
			'semua' =>  $semua,
			'publish' =>  $publish,  
			'pending' =>  $pending,  
			'artikel' =>  $artikel,
			'artikel_publish' =>  $artikel_publish,
			'artikel_pending' =>  $artikel_pending
		);
		$this->load->view("layout/wrapper", $data, false);
	}

}

/* End of file Manajemen_artikel.php */
/* Location: ./application/controllers/Manajemen_artikel.php */