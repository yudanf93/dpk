<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_login');
  }

  public function index()
  {
    $valid = $this->form_validation;  

    $valid->set_rules(
      'email_user',
      'email_user',
      'required',
      array('required'  =>  'Email harus diisi')
    );  

    $valid->set_rules(
      'passsword_user',
      'passsword_user',
      'required|min_length[4]',
      array('required'  =>  'Password harus diisi',
        'min_length' =>  'Password minimal 6 karakter')
    );
    
    if ($valid->run() == false) {
      $data = array(
        'title'   => 'Login Direktori Profesi Keuangan',
        'metades' => 'Direktori Profesi Keuangan',
        'isi'   => 'index'
      );  
      $this->load->view('layout/wrapper', $data, false);
    } else {   
      $i            = $this->input;
      $email        = $i->post('email_user');     
      $password     = md5($i->post('passsword_user'));
      $check_login  = $this->M_login->login($email, $password);

      if ($check_login) {
        $this->session->set_userdata('online',true);
        $this->session->set_userdata('email_user', $email);
        $this->session->set_userdata('nama_user', $check_login->nama_user);
        $this->session->set_userdata('akses_level', $check_login->akses_level);
        $this->session->set_userdata('foto', $check_login->foto);
        $this->session->set_userdata('id_user', $check_login->id_user);

        if($this->session->userdata('akses_level') == 'admin'){
          redirect(site_url('admin/dashboard'), 'refresh');
        }else if($this->session->userdata('akses_level') == 'user'){
          redirect(site_url('user/profil'), 'refresh');
        }
          
      } else {
        $this->session->set_userdata('online',false);
        $this->session->set_flashdata('notifikasi', '<center>Email dan password tidak cocok... !</center>');
        redirect(site_url('home'), 'refresh');
      }
    }
  }
  public function logout(){
    $this->session->unset_userdata('email_user');
    $this->session->unset_userdata('akses_level');
    $this->session->unset_userdata('id_user');
    $this->session->unset_userdata('nama_user');
    $this->session->sess_destroy();
    $this->session->set_flashdata('notifikasi', '<center>Anda berhasil logout</center>');
    redirect(site_url('home'),'refresh');
  }

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */