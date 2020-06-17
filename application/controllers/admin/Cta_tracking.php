<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cta_tracking extends CI_Controller {

public function __construct()
  {
    parent::__construct();
    $this->load->model('M_user');
    $this->load->model('M_cta_tracking');
  }

  public function index() { 
    $cta = $this->M_cta_tracking->select_cta_tracking();

    $data = array(  
      'title' 	=> 'Dasboard Admin UKAI',
      'cta' 	=> $cta,
      'isi' 	=> 'admin/cta_tracking_v'
    );
    $this->load->view("admin/layout/wrapper", $data, false);
  }   

  public function edit($id_cta_tracking) {
    $edit  = $this->M_cta_tracking->detail($id_cta_tracking); 
    $user  = $this->M_user->select_user(); 
    $cta = $this->M_cta_tracking->select_cta_tracking();

    $valid = $this->form_validation;
    $valid->set_rules(
      'ip_address',
      'ip_address',  
      'required',  
      array(         
        'required'  =>  'Anda belum mengisikan Ip Address.') 
    );  

    if ($valid->run()===false) {  
      $data = array(
        'title' => 'Dashboard Admin DPK',
        'isi'   => 'admin/cta_tracking_e',
        'user'  => $user,
      	'cta' 	=> $cta,
        'edit'  => $edit
      );       
      $this->load->view("admin/layout/wrapper", $data, false);
    }else{        
        $i  = $this->input;
        $data = array(
          'id_user' =>  $i->post('id_user'),
          'ip_address'  =>  $i->post('ip_address')
        );

        $this->M_cta_tracking->edit($data,$id_cta_tracking);
        $this->session->set_flashdata('notifikasi', '<center>Berhasil Merubah <strong> Data Cta Tracking</strong></center>');
        redirect('/admin/cta_tracking/');
      }
    }

  public function delete($id) {
    $data = array('id'  =>  $id);
    $this->M_cta_tracking->delete($data);
    $this->session->set_flashdata('notifikasi', '<center>Berhasil Menghapus <strong> Data Cta Tracking</strong></center>');
    redirect('admin/cta_tracking/');
  }

}

/* End of file Cta_tracking.php */
/* Location: ./application/controllers/admin/Cta_tracking.php */