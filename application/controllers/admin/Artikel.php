<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		$this->load->model('M_artikel');
		$this->load->model('M_kategori_artikel');
		$this->load->model('M_user');
	}

	public function index() {  
		$artikel = $this->M_artikel->select_artikel();
		$data = array(
			'title' => 'Dashboard Admin DPK',
			'artikel'  => $artikel,
			'isi' => 'admin/artikel_v'
		);
		$this->load->view("admin/layout/wrapper", $data, false);
	}

	public function add() {  
		$select = $this->M_kategori_artikel->select_kategori_artikel();
		$user = $this->M_user->select_user();
		// echo "<pre>";
		// print_r($select);
		// exit();

		$valid = $this->form_validation;
		$valid->set_rules(
			'judul_artikel',
			'judul_artikel',  
			'required',  
			array(         
				'required'  =>  'Anda belum mengisikan Judul.') 
		);
		$valid->set_rules(
			'expert_artikel',
			'expert_artikel',
			'required',
			array(
				'required'  =>  'Anda belum mengisikan Expert Artikel.')
		);

		$valid->set_rules(
			'detail_artikel',
			'detail_artikel',
			'required',  
			array(
				'required'  =>  'Anda belum mengisikan Detail Artikel')
		);
		$valid->set_rules(
			'status_artikel',
			'status_artikel',
			'required',
			array(
				'required'  =>  'Anda belum mengisikan Status Artikel.')
		);
		$valid->set_rules(
			'tgl_publish',
			'tgl_publish',
			'required',
			array(
				'required'  =>  'Anda belum mengisikan Tanggal Publish.')
		);

		$config['upload_path']          = './img/img_artikel/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 3000;
		$config['max_width']            = 2000;
		$config['max_height']           = 2000;
		$config['encrypt_name']         = TRUE;

		$this->load->library('upload', $config); 
		$i = $this->input;
		$slug = url_title($this->input->post('judul_artikel'), 'dash', TRUE);
		if ($valid->run()===false) {
			$data = array(
				'title'   => 'Dashboard Admin DPK - Tambah Artikel',   
				'select' => $select,
				'user' => $user,
				'isi' => 'admin/artikel_t'
			);
			$this->load->view("admin/layout/wrapper", $data, false);
		} else {
			if ( ! $this->upload->do_upload('gambar_artikel'))
			{
				$error = array('error' => $this->upload->display_errors());
				print_r($error); 
			}else{
				$data = array(
					'judul_artikel' =>  $i->post('judul_artikel'),
					'expert_artikel'=>  $i->post('expert_artikel'),
					'detail_artikel'=>  $i->post('detail_artikel'),
					'id_user'	 	=>  $i->post('id_user'),
					'id_kategori_artikel' 	=>  $i->post('id_kategori_artikel'),
					'status_artikel'=>  $i->post('status_artikel'),
					'tgl_publish'   =>  $i->post('tgl_publish'),
					'gambar_artikel'=>  $this->upload->data('file_name'),
					'created'      	=>  $i->post('created'),
					'slug_artikel'  =>  $slug
				);

				$this->M_artikel->add($data);
				$this->session->set_flashdata('notifikasi', '<center>Berhasil Menambahkan data <strong> Artikel Baru</strong></center>');
				redirect('/admin/artikel/');
			}
		}
	}

	public function edit($id_artikel) {
		$edit  = $this->M_artikel->detail($id_artikel); 
		$select = $this->M_kategori_artikel->select_kategori_artikel();
		$user = $this->M_user->select_user();

		$valid = $this->form_validation;
		$valid->set_rules(
			'judul_artikel',
			'judul_artikel',  
			'required',  
			array(         
				'required'  =>  'Anda belum mengisikan Judul.') 
		);
		$valid->set_rules(
			'expert_artikel',
			'expert_artikel',
			'required',
			array(
				'required'  =>  'Anda belum mengisikan Expert Artikel.')
		);

		$valid->set_rules(
			'detail_artikel',
			'detail_artikel',
			'required',  
			array(
				'required'  =>  'Anda belum mengisikan Detail Artikel')
		);
		$valid->set_rules(
			'status_artikel',
			'status_artikel',
			'required',
			array(
				'required'  =>  'Anda belum mengisikan Status Artikel.')
		);
		$valid->set_rules(
			'tgl_publish',
			'tgl_publish',
			'required',
			array(
				'required'  =>  'Anda belum mengisikan Tanggal Publish.')
		);

		$config['upload_path']          = './img/img_artikel/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 3000;
		$config['max_width']            = 2000;
		$config['max_height']           = 2000;
		$config['encrypt_name']         = TRUE;


		$this->load->library('upload', $config);
		$i  = $this->input;
		if ($valid->run()===false) {  
			$data = array(
				'title' => 'Dashboard Admin DPK',
				'isi' => 'admin/artikel_e',
				'select'     => $select,
				'user'     => $user,
				'edit'     => $edit
			);       
			$this->load->view("admin/layout/wrapper", $data, false);



		}else{
			if ($edit->gambar_artikel != "") {
			 	unlink('./img/img_artikel/'.$edit->gambar_artikel);
			}
			if ( ! $this->upload->do_upload('gambar_artikel'))
			{   
				$slug = url_title($this->input->post('judul_artikel'), 'dash', TRUE);
				$data = array(
					'judul_artikel' =>  $i->post('judul_artikel'),
					'expert_artikel'=>  $i->post('expert_artikel'),
					'detail_artikel'=>  $i->post('detail_artikel'),
					'id_user'	 	=>  $i->post('id_user'),
					'id_kategori_artikel' 	=>  $i->post('id_kategori_artikel'),
					'status_artikel'=>  $i->post('status_artikel'),
					'tgl_publish'   =>  $i->post('tgl_publish'),
					'gambar_artikel'=>  $i->post('gambar_lama'),
					'created'      	=>  $i->post('created'),
					'slug_artikel'  =>  $slug
				);

				$this->M_artikel->edit($data,$id_artikel);
				$this->session->set_flashdata('notifikasi', '<center>Berhasil Merubah <strong> Data Artikel </strong></center>');
				redirect('/admin/artikel');
			}
			else   
			{
				$data = array(
					'judul_artikel' =>  $i->post('judul_artikel'),
					'expert_artikel'=>  $i->post('expert_artikel'),
					'detail_artikel'=>  $i->post('detail_artikel'),
					'id_user'	 	=>  $i->post('id_user'),
					'id_kategori_artikel' =>  $i->post('id_kategori_artikel'),
					'status_artikel'=>  $i->post('status_artikel'),
					'tgl_publish'   =>  $i->post('tgl_publish'),
					'gambar_artikel'=>  $this->upload->data('file_name'),
					'created'      	=>  $i->post('created'),
					'slug_artikel'  =>  $slug
				);

				$this->M_artikel->edit($data,$id_artikel);
				$this->session->set_flashdata('notifikasi', '<center>Berhasil Merubah <strong> Data Artikel </strong></center>');
				redirect('/admin/artikel');
			}
		}
	}

	public function delete($id)	{
		$delete = $this->M_artikel->detail($id);
		if ($delete->gambar_artikel != "") {
			unlink('./img/img_artikel/'.$delete->gambar_artikel);
		}
		$data = array('id'  =>  $id);
		$this->M_artikel->delete($data);
		$this->session->set_flashdata('notifikasi', '<center>Berhasil Menghapus <strong> Data User </strong></center>');
		redirect('admin/artikel');
	}

}
/* End of file Artikel.php */
/* Location: ./application/controllers/admin/Artikel.php */