<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sub_kategori_profesi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_kategori_profesi');
		$this->load->model('M_sub_kategori_profesi');
	}

	public function index() {  
		$edit = $this->M_sub_kategori_profesi->select_sub_kategori_profesi();
		$data = array(
			'title' => 'Dashboard Admin DPK',
			'sub'  => $edit,
			'isi' => 'admin/sub_kategori_profesi_v'
		);
		$this->load->view("admin/layout/wrapper", $data, false);
	}
  
	public function add() {  
		$kategori_profesi = $this->M_kategori_profesi->select_kategori_profesi();
		$sub = $this->M_sub_kategori_profesi->select_sub_kategori_profesi();

		$valid = $this->form_validation;
		$valid->set_rules(
			'nama_sub_kategori_profesi',
			'nama_sub_kategori_profesi',  
			'required',  
			array(         
				'required'  =>  'Anda belum mengisikan Nama Sub Kategori Profesi.') 
		);		

		if ($valid->run()===false) {
			$data = array(
				'title'   => 'Dashboard Admin DPK - Tambah Sub Kategori Profesi',   
				'kategori_profesi' => $kategori_profesi,
				'sub' => $sub,
				'isi' => 'admin/sub_kategori_profesi_t'
			);
			$this->load->view("admin/layout/wrapper", $data, false);
		} else {
			$i = $this->input;
			$slug = url_title($this->input->post('nama_sub_kategori_profesi'), 'dash', TRUE);
			$data = array(
					'nama_sub_kategori_profesi' =>  $i->post('nama_sub_kategori_profesi'),
					'id_kategori_profesi' =>  $i->post('id_kategori_profesi'),
					'slug_sub_kategori_profesi' =>  $slug
				);

				$this->M_sub_kategori_profesi->add($data);
				$this->session->set_flashdata('notifikasi', '<center>Berhasil Menambahkan data <strong> Sub Kategori Profesi Baru</strong></center>');
				redirect('/admin/sub_kategori_profesi/add/');
			}
		}

	public function edit($id_sub_kategori_profesi) {
		$kategori = $this->M_kategori_profesi->select_kategori_profesi();
		$sub = $this->M_sub_kategori_profesi->select_sub_kategori_profesi();
		$edit = $this->M_sub_kategori_profesi->detail($id_sub_kategori_profesi);

		$valid = $this->form_validation;
		$valid->set_rules(
			'nama_sub_kategori_profesi',
			'nama_sub_kategori_profesi',  
			'required',  
			array(         
				'required'  =>  'Anda belum mengisikan Nama Sub Kategori Profesi.') 
		);		

		if ($valid->run()===false) {
			$data = array(
				'title'   => 'Dashboard Admin DPK - Tambah Sub Kategori Profesi',   
				'kategori' => $kategori,
				'edit' => $edit,
				'sub' => $sub,
				'isi' => 'admin/sub_kategori_profesi_e'
			);
			$this->load->view("admin/layout/wrapper", $data, false);
		} else {
			$i = $this->input;
			$slug = url_title($this->input->post('nama_sub_kategori_profesi'), 'dash', TRUE);
			$data = array(
					'nama_sub_kategori_profesi' =>  $i->post('nama_sub_kategori_profesi'),
					'id_kategori_profesi' =>  $i->post('id_kategori_profesi'),
					'slug_sub_kategori_profesi' =>  $slug
				);

				$this->M_sub_kategori_profesi->edit($data,$id_sub_kategori_profesi);
				$this->session->set_flashdata('notifikasi', '<center>Berhasil Merubah data <strong> Sub Kategori Profesi</strong></center>');
				redirect('/admin/sub_kategori_profesi/edit/'.$edit->id_sub_kategori_profesi);
			}
		}

	public function delete($id)	{
		$data = array('id'  =>  $id);
		$this->M_kategori_profesi->delete($data);
		$this->session->set_flashdata('notifikasi', '<center>Berhasil Menghapus <strong> Data Kategori Artikel</strong></center>');
		redirect('admin/kategori_artikel');
	}
}

/* End of file Sub_kategori_profesi.php */
/* Location: ./application/controllers/admin/Sub_kategori_profesi.php */