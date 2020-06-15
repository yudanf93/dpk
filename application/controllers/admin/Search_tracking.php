<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_tracking extends CI_Controller {

	public function __construct()
  {
    parent::__construct();
    $this->load->model('M_search_tracking');
  }

  public function index() { 
    $tracking = $this->M_search_tracking->select_search_tracking();

    $data = array(  
      'title' => 'Dasboard Admin UKAI',
      'tracking' => $tracking,
      'isi' => 'admin/search_tracking_v'
    );
    $this->load->view("admin/layout/wrapper", $data, false);
  }   

  public function add() {  
    $profesi = $this->M_kategori_profesi->select_kategori_profesi();

    $valid = $this->form_validation;
    $valid->set_rules(
      'nama_kategori_profesi',
      'nama_kategori_profesi',  
      'required',  
      array(         
        'required'  =>  'Anda belum mengisikan Nama Kategori Profesi.') 
    );    

    if ($valid->run()===false) {
      $data = array(
        'title'   => 'Dashboard Admin DPK - Tambah Kategori Artikel',   
        'profesi' => $profesi,
        'isi' => 'admin/kategori_profesi_t'
      );
      $this->load->view("admin/layout/wrapper", $data, false);
    } else {
      $i = $this->input;
      $slug = url_title($this->input->post('nama_kategori_profesi'), 'dash', TRUE);
      $data = array(
          'nama_kategori_profesi' =>  $i->post('nama_kategori_profesi'),
          'Slug_kategori_profesi' =>  $slug
        );

        $this->M_kategori_profesi->add($data);
        $this->session->set_flashdata('notifikasi', '<center>Berhasil Menambahkan data <strong> Kategori Profesi Baru</strong></center>');
        redirect('/admin/kategori_profesi/add/');
      }
    }

  public function edit($id_kategori_profesi) {
    $edit  = $this->M_kategori_profesi->detail($id_kategori_profesi); 
    $profesi = $this->M_kategori_profesi->select_kategori_profesi();

    $valid = $this->form_validation;
    $valid->set_rules(
      'nama_kategori_profesi',
      'nama_kategori_profesi',  
      'required',  
      array(         
        'required'  =>  'Anda belum mengisikan Nama Kategori.') 
    );  

    if ($valid->run()===false) {  
      $data = array(
        'title' => 'Dashboard Admin DPK',
        'isi'   => 'admin/kategori_profesi_e',
        'profesi'     => $profesi,
        'edit'  => $edit
      );       
      $this->load->view("admin/layout/wrapper", $data, false);
    }else{        
        $i  = $this->input;
        $slug = url_title($this->input->post('nama_kategori_profesi'), 'dash', TRUE);
        $data = array(
          'nama_kategori_profesi' =>  $i->post('nama_kategori_profesi'),
          'Slug_kategori_profesi' =>  $slug
        );

        $this->M_kategori_profesi->edit($data,$id_kategori_profesi);
        $this->session->set_flashdata('notifikasi', '<center>Berhasil Merubah <strong> Data Kategori Profesi</strong></center>');
        redirect('/admin/kategori_profesi/edit/'.$edit->id_kategori_profesi);
      }
    }

  public function delete($id) {
    $data = array('id'  =>  $id);
    $this->M_kategori_profesi->delete($data);
    $this->session->set_flashdata('notifikasi', '<center>Berhasil Menghapus <strong> Data Kategori Artikel</strong></center>');
    redirect('admin/kategori_profesi');
  }

}

/* End of file Search_tracking.php */
/* Location: ./application/controllers/admin/Search_tracking.php */