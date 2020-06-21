<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_profesional extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('M_user');
    }

	public function profesi($slug) 	{
	$detail = $this->M_user->list_user();
		$data = array(
			'title' => 'Direktori Profesi Keuangan (DPK)',
			'metades' => 'Direktori Profesi Keuangan (DPK) adalah portal informasi para professional bidang keuangan yang bermanfaat bagi pelaku bisnis untuk menemukan profesi yang dibutuhkan sesuai dengan permasalahan yang dihadapinya. DPK berfungsi mempertemukan antara professional dengan pelaku bisnis.', 
			'isi' 	=> 'detail_profesional',
			'detail' 	=> $detail
		);     
		$this->load->view("layout/wrapper", $data, false);
	}
	

}

/* End of file Detail_profesional.php */
/* Location: ./application/controllers/Detail_profesional.php */