<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	public function __construct() {   
		parent::__construct();
        $this->load->model('M_artikel');
        $this->load->model('M_relation_profesi');

	}  

	public function blog($slug){
	$detail = $this->M_artikel->detail_user($slug);  
	$relasi = $this->M_relation_profesi->relasi_user($slug);  

	$data = array(
		'title' => 'Home DPK',
		'metades' => 'DPK ini aja', 
		'isi' 	=> 'detail',
		'detail' =>  $detail,
		'relasi' =>  $relasi
	);     
	$this->load->view("layout/wrapper", $data, false);
	}
}

/* End of file detail.php */
/* Location: ./application/controllers/detail.php */  