<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct() {   
		parent::__construct();
	    $this->load->model('M_user');
	}

	public function index() {
		$get_user = $this->M_user->get_user($this->session->userdata('id_user'));
		if ($get_user['foto'] == "0") {
			$get_user['foto'] = 'profil.png';
		}
		$data = array(
			'title' => 'Home DPK',
			'metades' => 'DPK ini aja',
			'isi' 	=> 'user/v_profil',
    		'get_user' => $get_user
		);
		$this->load->view("layout/wrapper", $data, false);
	}

}

/* End of file Profil.php */
/* Location: ./application/controllers/Profil.php */