<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
	}

	public function index() {  
		$user = $this->M_user->select_user();
		$data = array(
			'title' => 'Dashboard Admin DPK',
			'user'  => $user,
			'isi' => 'admin/user_v'
		);
		$this->load->view("admin/layout/wrapper", $data, false);
	}
		// get sub category by category_id
	function kota(){
		$category_id = $this->input->post('id',TRUE);
		$data = $this->M_user->kota($category_id)->result();
		echo json_encode($data);
	} 

	public function add() {  
		$provinsi  = $this->M_user->provinsi(); 

  
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
		$valid->set_rules(
			'regency_id',
			'regency_id', 
			'required',
			array(
				'required'  =>  'Anda belum mengisikan Kota.')
		);
		$valid->set_rules(
			'alamat_user',
			'alamat_user',
			'required',
			array(
				'required'  =>  'Anda belum mengisikan Alamat.')
		);
		$valid->set_rules(
			'province_id',
			'province_id',
			'required',
			array(
				'required'  =>  'Anda belum mengisikan Provinsi.')
		);
		$valid->set_rules(
			'file_user',
			'file_user',
			'required',
			array(
				'required'  =>  'Anda belum mengisikan File.')
		);
		$valid = $this->form_validation;
		$valid->set_rules(
			'password_user',
			'password_user',
			'required',
			array(
				'required'  =>  'Anda belum mengisikan Password.')
		);


		$config['upload_path']          = './img/img_user/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 3000;
		$config['max_width']            = 2000;
		$config['max_height']           = 2000;
		$config['encrypt_name']         = TRUE;

		$this->load->library('upload', $config); 
		$i = $this->input;
		if ($valid->run()===false) {
			$data = array(
				'title'   => 'Dashboard Admin DPK - Tambah User',   
				'isi' => 'admin/user_t',
				'provinsi' => $provinsi
			);
			$this->load->view("admin/layout/wrapper", $data, false);
		} else {
			if ( ! $this->upload->do_upload('foto'))
			{
				$error = array('error' => $this->upload->display_errors());
				print_r($error); 
			}else{
				$data = array(
					'nama_user'     =>  $i->post('nama_user'),
					'email_user'    =>  $i->post('email_user'),
					'password_user'=>  md5($i->post('password_user')),
					'regency_id'	 	=>  $i->post('regency_id'),
					'alamat_user' 	=>  $i->post('alamat_user'),
					'province_id' =>  $i->post('province_id'),
					'nohp_user'     =>  $i->post('nohp_user'),
					'foto'          =>  $this->upload->data('file_name'),
					'akses_level'   =>  $i->post('akses_level'),
					'file_user'     =>  $i->post('file_user'),
					'status_user'   =>  $i->post('status_user'),
					'created'      	=>  $i->post('created')
				);

				$this->M_user->add($data);
				$this->session->set_flashdata('notifikasi', '<center>Berhasil Menambahkan data <strong> User Baru</strong></center>');
				redirect('/admin/user/');
			}
		}
	}


	public function edit($id_user) {
		$edit  = $this->M_user->detail($id_user); 

		$valid = $this->form_validation;
		$valid->set_rules(
			'status_user',
			'status_user',
			'required',
			array(
				'required'  =>  'Anda belum mengisikan Status.')
		);

		if ($valid->run()===false) {  
			$data = array(
				'title' => 'Dashboard Admin DPK',
				'isi' => 'admin/user_e',
				'edit'     => $edit
			);       
			$this->load->view("admin/layout/wrapper", $data, false);

		}else{
			$i  = $this->input; 
			$data = array(
				'status_user'     =>  $i->post('status_user'),
				'id_user'    =>  $id_user
			);
			$this->session->set_flashdata('notifikasi', '<center>Berhasil Merubah data <strong> Ubah User </strong></center>');
			if ($data['status_user']==1) {
				$this->send_konfirmasi($edit->nama_user, $edit->no_surat, $edit->email_user);
				$this->session->set_flashdata('notifikasi', '<center>Berhasil Mengaktifkan Status User <strong> email berhasil dikirim </strong></center>');
			}
				$this->M_user->edit($data,$id_user);
				redirect('/admin/user');
			}

		}

public function send_konfirmasi($nama_user, $no_surat, $email_user)
  { 
    $data['nama_user'] = $nama_user;
    $data['no_surat'] = $no_surat;
    $data['email_user'] = $email_user;
    // echo "<pre>";
    // print_r($this->load->view('admin/email_user_aktif_v',$data,true));
    // exit();
    $subject  = "Konfirmasi Status User Direktori Profesi Keuangan (DPK)";
    $message  = $this->load->view('admin/email_user_aktif_v',$data,true);
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
      $this->session->set_flashdata('notifikasi', '<center>Berhasil Mengaktifkan Status User dan  <strong> email berhasil dikirim </strong></center>');
    } else {
      # code...
      $this->session->set_flashdata('notifikasi', 'Pengiriman Email Gagal');
      // echo $this->email->print_debugger();
      // exit();  
    }
  }   
	public function reset_password($id_user)  {  
		$edit  = $this->M_user->detail($id_user); 

		$valid = $this->form_validation->set_rules('password_user', 'Pasword anda belum di isi', 'required'); 
		$valid = $this->form_validation->set_rules('passconf', 'Password anda tidak sesuai', 'required|matches[password_user]');
		$valid = $this->form_validation->set_message('required','%s wajib diisi');
		$valid = $this->form_validation->set_error_delimiters('<p class="alert">','</p>');

		if ($valid->run()===false) {  
			$data = array(
				'title' => 'Dashboard Admin DPK',
				'isi' => 'admin/user_e',
				'edit'     => $edit
			);       
			$this->load->view("admin/layout/wrapper", $data, false);

		}else{  
			$i  = $this->input;
			$data = array(
				'password_user'=>  md5($i->post('password_user'))
			);         

			if ( $this->M_user->updatePassword($data,$id_user)); {
				$this->session->set_flashdata('sukses', 'Update Password gagal.'); 
			}
			$this->session->set_flashdata('notifikasi', '<center>Berhasil Merubah <strong> Password User </strong></center>');
			redirect('/admin/user');        
		}  
	} 

	public function delete($id)
	{
		$data = array('id'  =>  $id);
		$this->M_user->delete($data);
		$this->session->set_flashdata('notifikasi', '<center>Berhasil Menghapus <strong> Data User </strong></center>');
		redirect('admin/user');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/admin/User.php */