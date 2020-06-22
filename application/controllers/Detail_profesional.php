<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_profesional extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('M_user');
        $this->load->model('M_artikel');
        $this->load->library('pagination');
    }

	public function profesi($slug) 	{		
	$detail = $this->M_user->detail_profesional($slug);
	$artikel = $this->M_artikel->artikel_profesional($slug);
	// echo "<pre>";
	// print_r($artikel);
	// exit();

		$data = array(
			'title' => 'Direktori Profesi Keuangan (DPK)',
			'metades' => 'Direktori Profesi Keuangan (DPK) adalah portal informasi para professional bidang keuangan yang bermanfaat bagi pelaku bisnis untuk menemukan profesi yang dibutuhkan sesuai dengan permasalahan yang dihadapinya. DPK berfungsi mempertemukan antara professional dengan pelaku bisnis.', 
			'isi' 	=> 'detail_profesional',
			'detail' 	=> $detail,
			'artikel' 	=> $artikel
		);     
					//konfigurasi pagination
		$jumlah_data = $this->M_artikel->jumlah_artikel_profesional($slug);
       // echo "<pre>";
       // print_r($jumlah_data);
       // exit();

        $config['base_url'] = site_url('detail_profesional/profesi/'.$slug); //site url
        $config['total_rows'] = $jumlah_data; //total row
        $config['per_page'] = 6;  //show record per halaman
        $config["uri_segment"] = 4;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

         // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="col-md-12 justify-content-center"><nav aria-label="Page navigation example"><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>'; 
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->M_artikel->get_list_artikel_profesional($slug,$config["per_page"], $data['page']);         

        $data['pagination'] = $this->pagination->create_links();

		$this->load->view("layout/wrapper", $data, false);
	}
	

}

/* End of file Detail_profesional.php */
/* Location: ./application/controllers/Detail_profesional.php */