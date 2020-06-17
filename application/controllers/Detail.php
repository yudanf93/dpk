<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	public function __construct() {   
		parent::__construct();
        $this->load->model('M_artikel');

	}  

	public function blog($slug){
	$detail = $this->M_artikel->detail_user($slug);  

	$data = array(
		'title' => 'Home DPK',
		'metades' => 'DPK ini aja', 
		'isi' 	=> 'detail',
		'detail' =>  $detail
	);
	$this->load->view("layout/wrapper", $data, false);
	}
}

/* End of file detail.php */
/* Location: ./application/controllers/detail.php */