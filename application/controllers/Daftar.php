<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	public function __construct() {   
		parent::__construct();
		$this->load->model('M_artikel');
		$this->load->model('M_user');
		$this->load->library(['form_validation','session']);
	}

	public function index() {
		$artikel = $this->M_artikel->select_artikel_publish();  
		
		$valid = $this->form_validation;
		$valid->set_rules('email_user', '<strong>Email yang anda masukkan sudah terdaftar</strong>', 'required|trim|is_unique[user.email_user]|min_length[6]|max_length[40]|valid_email');

		$valid->set_rules(
			'password_user',
			'password_user',
			'required',
			array(
				'required'  =>  'Anda belum mengisikan Password.')
		);
		$valid->set_rules('passconf', 'Password anda tidak sesuai', 'required|matches[password_user]');

		$valid->set_rules(
			'nama_user',
			'nama_user',
			'required',  
			array(
				'required'  =>  'Anda belum mengisikan Nama.')
		);

		$config['upload_path']          = './dokumen/dok_user/';
		$config['allowed_types']        = 'pdf';
		$config['max_size']             = 9000;
		$config['encrypt_name']         = TRUE;
		
		$this->load->library('upload', $config); 
		$i  = $this->input;
		if ($valid->run()===false) {
		$data = array(
			'title' => 'Home DPK',
			'metades' => 'Direktori Profesi Keuangan (DPK) adalah portal informasi para professional bidang keuangan yang bermanfaat bagi pelaku bisnis untuk menemukan profesi yang dibutuhkan sesuai dengan permasalahan yang dihadapinya. DPK berfungsi mempertemukan antara professional dengan pelaku bisnis.',
			'isi' 	=> 'index',
			'artikel' =>  $artikel
		);
		$this->load->view("layout/wrapper", $data, false);

		}else{
			if ( ! $this->upload->do_upload('file_user'))
			{
				$error = array('error' => $this->upload->display_errors());
				print_r($error); 
			}else{
			$data = array(
				'nama_user'     =>  $i->post('nama_user'),
				'no_surat'     =>  $i->post('no_surat'),
				'email_user'    =>  $i->post('email_user'),
				'status_user'    =>  '0',
				'password_user'	=>  MD5($i->post('password_user')),
				'foto'          =>  '0',
				'akses_level'   =>  $i->post('akses_level'),
				'file_user'     =>  $this->upload->data('file_name'),
				'created'      	=>  $i->post('created')
			);

			$this->M_user->add($data);
			$this->send_konfirmasi($data['email_user'],$data['nama_user'],$data['no_surat']);
			redirect('/home/');
		}
	}
}

public function send_konfirmasi($email_user,$nama_user,$no_surat)
{ 
	$data['email_user'] = $email_user;
	$data['nama_user'] = $nama_user;
	$data['no_surat'] = $no_surat;
    // echo "<pre>";
    // print_r($data);
	$this->load->view('user/v_email_register', $data);
    // exit();
	$subject  = "Pendaftaran Akun Direktori Profesi Keuangan (DPK)";
	$message  = $this->load->view('user/v_email_register',$data,true);
    $config   = array(
      'protocol'    => 'smtp',
      'smtp_host'   => 'ssl://mail.sevenpion.com',
      'smtp_port'   => '465',
      'smtp_user'   => 'developers@sevenpion.com',
      'smtp_pass'   => 'qweasdzxc123',
      'mailtype'    => 'html',
      'charset'     => 'utf-8',
      'wordwrap'    => TRUE

    );
	$this->load->library('email', $config);
    // $this->email->initialize($config); 
	$this->email->set_newline("\r\n");
	$this->email->from('developers@sevenpion.com','Direktori Profesi Keuangan (DPK)');
	$this->email->to($data['email_user']);
	$this->email->subject($subject);
	$this->email->message($message);
	if($this->email->send()){
		$this->session->set_flashdata('notifikasi', '<div class="alert alert-success alert-dismissible fade show"><center>Silahkan Cek Email <strong> Anda</strong></center><button type="button" class=close data-dismiss=alert aria-label=Close>
			<span aria-hidden=true>&times;</span>
			</button></div>');
	} else {
      # code...
		$this->session->set_flashdata('notifikasi', '<div class="alert alert-danger alert-dismissible fade show"><center>Pengiriman Email anda<strong> Gagal</strong></center><button type="button" class=close data-dismiss=alert aria-label=Close>
			<span aria-hidden=true>&times;</span>
			</button></div>');
      echo $this->email->print_debugger();
      exit();  
	}
}

}

/* End of file Daftar.php */
/* Location: ./application/controllers/Daftar.php */