<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_artikel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_kategori_artikel');
	}

	public function index() {  
		$kategori_artikel = $this->M_kategori_artikel->select_kategori_artikel();
		$data = array(
			'title' => 'Dashboard Admin DPK',
			'kategori_artikel'  => $kategori_artikel,
			'isi' => 'admin/kategori_artikel_v'
		);
		$this->load->view("admin/layout/wrapper", $data, false);
	}

	public function add() {  
		$kategori_artikel = $this->M_kategori_artikel->select_kategori_artikel();

		$valid = $this->form_validation;
		$valid->set_rules(
			'nama_kategori_artikel',
			'nama_kategori_artikel',  
			'required',  
			array(         
				'required'  =>  'Anda belum mengisikan Nama Kategori.') 
		);		

		if ($valid->run()===false) {
			$data = array(
				'title'   => 'Dashboard Admin DPK - Tambah Kategori Artikel',   
				'kategori_artikel' => $kategori_artikel,
				'isi' => 'admin/kategori_artikel_t'
			);
			$this->load->view("admin/layout/wrapper", $data, false);
		} else {
			$i = $this->input;
			$slug = url_title($this->input->post('nama_kategori_artikel'), 'dash', TRUE);
			$data = array(
					'nama_kategori_artikel' =>  $i->post('nama_kategori_artikel'),
					'slug_kategori_artikel' =>  $slug
				);

				$this->M_kategori_artikel->add($data);
				$this->session->set_flashdata('notifikasi', '<center>Berhasil Menambahkan data <strong> Kategori Artikel Baru</strong></center>');
				redirect('/admin/kategori_artikel/add/');
			}
		}

	public function edit($id_kategori_artikel) {
		$edit  = $this->M_kategori_artikel->detail($id_kategori_artikel); 
		$kategori_artikel = $this->M_kategori_artikel->select_kategori_artikel();

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

				$this->M_kategori_artikel->edit($data,$id_kategori_artikel);
				$this->session->set_flashdata('notifikasi', '<center>Berhasil Merubah <strong> Data Kategori Artikel</strong></center>');
				redirect('/admin/kategori_artikel/edit/'.$edit->id_kategori_artikel);
			}
		}

	public function delete($id)	{
		$data = array('id'  =>  $id);
		$this->M_kategori_artikel->delete($data);
		$this->session->set_flashdata('notifikasi', '<center>Berhasil Menghapus <strong> Data Kategori Artikel</strong></center>');
		redirect('admin/kategori_artikel');
	}

}


/* End of file Kategori_artikel.php */
/* Location: ./application/controllers/admin/Kategori_artikel.php */