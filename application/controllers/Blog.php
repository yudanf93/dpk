<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct() {   
		parent::__construct();
        $this->load->model('M_artikel');
        $this->load->model('M_kategori_artikel');

	} 

	public function index(){
	$blog_user = $this->M_artikel->select_artikel_publish();
	$kategori = $this->M_kategori_artikel->select_kategori_artikel();  
	$data = array(
		'title' => 'Home DPK',
		'metades' => 'DPK ini aja', 
		'isi' 	=> 'blog',
		'blog_user' =>  $blog_user,
		'kategori' =>  $kategori
	);     
	$this->load->view("layout/wrapper", $data, false);
	}

}

/* End of file Blog.php */
/* Location: ./application/controllers/Blog.php */