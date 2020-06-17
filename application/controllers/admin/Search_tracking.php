<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_tracking extends CI_Controller {

	public function __construct()
  {
    parent::__construct();
    $this->load->model('M_search_tracking');
    $this->load->model('M_sub_kategori_profesi');
    $this->load->model('M_kategori_profesi');
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

  public function edit($id_search_tracking) {
    $edit  = $this->M_search_tracking->detail($id_search_tracking); 
    $sub  = $this->M_sub_kategori_profesi->select_sub_kategori_profesi(); 
    $kategori  = $this->M_kategori_profesi->select_kategori_profesi(); 

    $valid = $this->form_validation;
    $valid->set_rules(
      'kota',
      'kota',  
      'required',  
      array(         
        'required'  =>  'Anda belum mengisikan Kota.') 
    );
    $valid->set_rules(
      'ip_address',
      'ip_address',  
      'required',  
      array(         
        'required'  =>  'Anda belum mengisikan Ip Address.') 
    ); 
    $valid->set_rules(
      'provinsi',
      'provinsi',  
      'required',  
      array(         
        'required'  =>  'Anda belum mengisikan Provinsi.') 
    );  

    if ($valid->run()===false) {  
      $data = array(
        'title' => 'Dashboard Admin DPK',
        'isi'   => 'admin/search_tracking_e',
        'sub'  => $sub,
        'kategori'  => $kategori,
        'edit'  => $edit
      );       
      $this->load->view("admin/layout/wrapper", $data, false);
    }else{        
        $i  = $this->input;
        $data = array(
          'id_kategori_profesi'     =>  $i->post('id_kategori_profesi'),
          'id_sub_kategori_profesi' =>  $i->post('id_sub_kategori_profesi'),
          'ip_address'  =>  $i->post('ip_address'),
          'kota'        =>  $i->post('kota'),
          'provinsi'    =>  $i->post('provinsi')
        );

        $this->M_search_tracking->edit($data,$id_search_tracking);
        $this->session->set_flashdata('notifikasi', '<center>Berhasil Merubah <strong> Data Search Tracking</strong></center>');
        redirect('/admin/search_tracking/');
      }
    }

  public function delete($id) {
    $data = array('id'  =>  $id);
    $this->M_search_tracking->delete($data);
    $this->session->set_flashdata('notifikasi', '<center>Berhasil Menghapus <strong> Data Search Tracking</strong></center>');
    redirect('admin/search_tracking/');
  }

}

/* End of file Search_tracking.php */
/* Location: ./application/controllers/admin/Search_tracking.php */