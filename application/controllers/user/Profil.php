<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct() {   
		parent::__construct();
	    $this->load->model('M_user');
	}

	public function index() {
		$get_user = $this->M_user->get_user($this->session->userdata('id_user'));
		if ($get_user->foto == "0") {
			$get_user->foto = 'profil.png';
		}
		   // echo "<pre>";
   // print_r($get_user); 
   // exit();
		$data = array(
			'title' => 'Home DPK',
			'metades' => 'DPK ini aja',
			'isi' 	=> 'user/v_profil',
    		'get_user' => $get_user
		);
		$this->load->view("layout/wrapper", $data, false);
	}

	public function edit($id_user) {
		$edit  = $this->M_user->detail($id_user); 
		$get_user = $this->M_user->get_user($this->session->userdata('id_user'));
		if ($get_user->foto == "0") {
			$get_user->foto = 'profil.png';
		}

		$valid = $this->form_validation;
		$valid->set_rules(
			'nohp_user',
			'nohp_user',  
			'required',  
			array(         
				'required'  =>  'Anda belum mengisikan Nomer Handphone.') 
		);
		$valid->set_rules(
			'email_user',
			'email_user',
			'required',
			array(
				'required'  =>  'Anda belum mengisikan Email.')
		);

		$valid->set_rules(
			'nama_user',
			'nama_user',
			'required',  
			array(
				'required'  =>  'Anda belum mengisikan Nama.')
		);
		// $valid->set_rules(
		// 	'kota_user',
		// 	'kota_user',
		// 	'required',
		// 	array(
		// 		'required'  =>  'Anda belum mengisikan Kota.')
		// );
		// $valid->set_rules(
		// 	'alamat_user',
		// 	'alamat_user',
		// 	'required',
		// 	array(
		// 		'required'  =>  'Anda belum mengisikan Alamat.')
		// );
		// $valid->set_rules(
		// 	'provinsi_user',
		// 	'provinsi_user',
		// 	'required',
		// 	array(
		// 		'required'  =>  'Anda belum mengisikan Provinsi.')
		// );
		$valid->set_rules(
			'file_user',
			'file_user',
			'required',
			array(
				'required'  =>  'Anda belum mengisikan File.')
		);

		$config['upload_path']          = './img/img_user/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 3000;
		$config['max_width']            = 2000;
		$config['max_height']           = 2000;
		$config['encrypt_name']         = TRUE;


		$this->load->library('upload', $config);
		$i  = $this->input;
		if ($valid->run()===false) {  
			$data = array(
				'title' => 'Home DPK',
				'metades' => 'DPK ini aja',
				'isi' 	=> 'user/v_profil',
				'edit'     => $edit,
				'get_user'     => $get_user
			);       
			$this->load->view("layout/wrapper", $data, false);

		}else{
			if ( ! $this->upload->do_upload('foto'))
			{   
				$data = array(   
					'nama_user'     =>  $i->post('nama_user'),
					'email_user'    =>  $i->post('email_user'),
					'kota_user'	 	=>  $i->post('kota_user'),
					'alamat_user' 	=>  $i->post('alamat_user'),
					'provinsi_user' =>  $i->post('provinsi_user'),
					'nohp_user'     =>  $i->post('nohp_user'),
					'foto'          =>  $i->post('gambar_lama'),
					'akses_level'   =>  $i->post('akses_level'),
					'file_user'     =>  $i->post('file_user'),
					'status_user'   =>  $i->post('status_user'),
					'created'      	=>  $i->post('created')
				);

				$this->M_user->edit($data,$id_user);
				$this->session->set_flashdata('notifikasi', '<center>Berhasil Merubah <strong> Data User </strong></center>');
				redirect('/user/profil');
			}
			else   
			{
				$data = array(
					'nama_user'     =>  $i->post('nama_user'),
					'email_user'    =>  $i->post('email_user'),
					'kota_user'	 	=>  $i->post('kota_user'),
					'alamat_user' 	=>  $i->post('alamat_user'),
					'provinsi_user' =>  $i->post('provinsi_user'),
					'nohp_user'     =>  $i->post('nohp_user'),
					'foto'          =>  $this->upload->data('file_name'),
					'akses_level'   =>  $i->post('akses_level'),
					'file_user'     =>  $i->post('file_user'),
					'status_user'   =>  $i->post('status_user'),
					'created'      	=>  $i->post('created')
				);

				$this->M_user->edit($data,$id_user);
				$this->session->set_flashdata('notifikasi', '<center>Berhasil Merubah <strong> Data User </strong></center>');
				redirect('/user/profil');
			}
		}
	}

  
}

/* End of file Profil.php */
/* Location: ./application/controllers/Profil.php */