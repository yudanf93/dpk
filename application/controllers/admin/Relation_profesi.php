<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relation_profesi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_relation_profesi');
		$this->load->model('M_artikel');
		$this->load->model('M_sub_kategori_profesi');
	}

	public function index() {  
		$relasi = $this->M_relation_profesi->select_relation_profesi();
		$data = array(
			'title' => 'Dashboard Admin DPK',
			'relasi'  => $relasi,
			'isi' => 'admin/relation_profesi_v'
		);
		$this->load->view("admin/layout/wrapper", $data, false);
	}

	public function add() {  
		$relasi = $this->M_relation_profesi->select_relation_profesi();
		$artikel = $this->M_artikel->select_artikel();
		$sub = $this->M_sub_kategori_profesi->select_sub_kategori_profesi();

		$valid = $this->form_validation;
		$valid->set_rules(
			'id_artikel',
			'id_artikel',  
			'required',  
			array(         
				'required'  =>  'Anda belum mengisikan Judul Artikel.') 
		);		

		if ($valid->run()===false) {
			$data = array(
				'title'   => 'Dashboard Admin DPK - Tambah Relasi Profesi',   
				'relasi' => $relasi,
				'artikel' => $artikel,
				'sub' => $sub,
				'isi' => 'admin/relation_profesi_t'
			);
			$this->load->view("admin/layout/wrapper", $data, false);
		} else {
			$i = $this->input;
			$data = array(
					'id_artikel' =>  $i->post('id_artikel'),
					'id_sub_kategori_profesi' =>  $i->post('id_sub_kategori_profesi')
				);

				$this->M_relation_profesi->add($data);
				$this->session->set_flashdata('notifikasi', '<center>Berhasil Menambahkan data <strong> Relasi Profesi Baru</strong></center>');
				redirect('/admin/relation_profesi/add/');
			}
		}

	public function edit($id_kategori_artikel) {
		$edit  = $this->M_relation_profesi->detail($id_kategori_artikel); 
		$kategori_artikel = $this->M_relation_profesi->select_kategori_artikel();

		$valid = $this->form_validation;
		$valid->set_rules(
			'nama_kategori_artikel',
			'nama_kategori_artikel',  
			'required',  
			array(         
				'required'  =>  'Anda belum mengisikan Nama Kategori Artikel.') 
		);	

		if ($valid->run()===false) {  
			$data = array(
				'title' => 'Dashboard Admin DPK',
				'isi' 	=> 'admin/kategori_artikel_e',
				'kategori_artikel'     => $kategori_artikel,
				'edit'  => $edit
			);       
			$this->load->view("admin/layout/wrapper", $data, false);
		}else{ 				
				$i  = $this->input;
				$slug = url_title($this->input->post('nama_kategori_artikel'), 'dash', TRUE);
				$data = array(
					'nama_kategori_artikel' =>  $i->post('nama_kategori_artikel'),
					'slug_kategori_artikel' =>  $slug
				);

				$this->M_relation_profesi->edit($data,$id_kategori_artikel);
				$this->session->set_flashdata('notifikasi', '<center>Berhasil Merubah <strong> Data Kategori Artikel</strong></center>');
				redirect('/admin/kategori_artikel/edit/'.$edit->id_kategori_artikel);
			}
		}

	public function delete($id)	{
		$data = array('id'  =>  $id);
		$this->M_relation_profesi->delete($data);
		$this->session->set_flashdata('notifikasi', '<center>Berhasil Menghapus <strong> Data Kategori Artikel</strong></center>');
		redirect('admin/relation_profesi');
	}

}

/* End of file Relation_profesi.php */
/* Location: ./application/controllers/admin/Relation_profesi.php */