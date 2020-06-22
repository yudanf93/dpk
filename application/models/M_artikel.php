<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_artikel extends CI_Model {

	Public function __construct() {
		parent::__construct();
		$this->load->database();
	}   

   public function count_semua() {
      $this->db->select('*');
      $this->db->from('artikel');
      $publish  =  $this->db->count_all_results();
      return $publish;
    }     
    public function count_publish() {   
      $this->db->select('*');
      $this->db->from('artikel');
      $this->db->where('status_artikel', '1');
      $publish  =   $this->db->count_all_results();
      return $publish;
    }   
    public function count_pending() { 
      $this->db->select('*');   
      $this->db->from('artikel');
      $this->db->where('status_artikel', '0');
      $pending  =   $this->db->count_all_results();
      return $pending;  
    }
    public function count_reviewer() { 
      $this->db->select('*');   
      $this->db->from('artikel');
      $this->db->where('status_artikel', '2');
      $pending  =   $this->db->count_all_results();
      return $pending;
    }

	public function select_artikel() {
		$this->db->select('artikel.*, kategori_artikel.*, user.*');   
		$this->db->from('artikel');
		$this->db->join('kategori_artikel', 'kategori_artikel.id_kategori_artikel = artikel.id_kategori_artikel', 'left');
		$this->db->join('user', 'user.id_user = artikel.id_user', 'left');
		$this->db->order_by('id_artikel', 'DESC');
		$query  = $this->db->get();
		return $query->result();
	}
    public function select_artikel_publish() {
		$this->db->select('artikel.*, kategori_artikel.*, user.*');   
		$this->db->from('artikel');
      	$this->db->where('status_artikel', '1');
		$this->db->join('user', 'user.id_user = artikel.id_user', 'left');
		$this->db->join('kategori_artikel', 'kategori_artikel.id_kategori_artikel = artikel.id_kategori_artikel', 'left');
		$this->db->order_by('id_artikel', 'DESC');
      	$query  = $this->db->get();
     	 return $query->result();
    }     
    public function select_artikel_publish_user() {
		$this->db->select('artikel.*, kategori_artikel.*, user.*');   
		$this->db->from('artikel');
      	$this->db->where('status_artikel', '1');
		$this->db->join('user', 'user.id_user = artikel.id_user', 'left');
		$this->db->join('kategori_artikel', 'kategori_artikel.id_kategori_artikel = artikel.id_kategori_artikel', 'left');
		$this->db->order_by('id_artikel', 'DESC');		
        $this->db->limit(3);
      	$query  = $this->db->get();
     	 return $query->result();
    }   
    public function select_artikel_pending() {
		$this->db->select('artikel.*, kategori_artikel.*, user.*');   
		$this->db->from('artikel');
      	$this->db->where('status_artikel', '0');
		$this->db->join('user', 'user.id_user = artikel.id_user', 'left');
		$this->db->join('kategori_artikel', 'kategori_artikel.id_kategori_artikel = artikel.id_kategori_artikel', 'left');
		$this->db->order_by('id_artikel', 'DESC');
      	$query  = $this->db->get();
      	return $query->result();
    }

   	public function select_artikel_user() {
		$this->db->select('artikel.*, kategori_artikel.*, user.*');   
		$this->db->from('artikel');
		$this->db->where('artikel.id_user', $this->session->userdata('id_user'));
		$this->db->join('user', 'user.id_user = artikel.id_user', 'left');
		$this->db->join('kategori_artikel', 'kategori_artikel.id_kategori_artikel = artikel.id_kategori_artikel', 'left');
		$this->db->order_by('id_artikel', 'DESC');
		$query  = $this->db->get();
		return $query->result();
	}

	public function artikel_profesional($slug) {
		$this->db->select('artikel.*, kategori_artikel.*, user.*');   
		$this->db->from('artikel');
		$this->db->where('artikel.status_artikel','1', $slug); 
        $this->db->where('user.slug',$slug);
		$this->db->join('user', 'user.id_user = artikel.id_user', 'left');
		$this->db->join('kategori_artikel', 'kategori_artikel.id_kategori_artikel =   artikel.id_kategori_artikel', 'left');
		$this->db->order_by('id_artikel', 'DESC');
		$query  = $this->db->get();
		return $query->result();
	}

	public function add_artikel() {
		$this->db->select('artikel.*, kategori_artikel.*, user.*');   
		$this->db->from('artikel');
		$this->db->join('kategori_artikel', 'kategori_artikel.id_kategori_artikel = artikel.id_kategori_artikel', 'left');
		$this->db->join('user', 'user.id_user = artikel.id_user', 'left');
		$this->db->order_by('id_artikel', 'DESC');
		$query  = $this->db->get();
		return $query->result();
	}

	public function delete($data) {
		$this->db->where('id_artikel',$data['id']);
		$this->db->delete('artikel');
	}

	public function add($data) {
		$this->db->insert('artikel', $data);
	}

	public function detail($id_artikel) {
		$this->db->select('*');
		$this->db->from('artikel');
		$this->db->where('id_artikel', $id_artikel);
		$query  = $this->db->get();
		return $query->row();
	}

	public function detail_user($slug) {
		$this->db->select('artikel.*, kategori_artikel.*');
		$this->db->from('artikel');
		$this->db->where('slug_artikel', $slug);
		$this->db->join('kategori_artikel', 'kategori_artikel.id_kategori_artikel = artikel.id_kategori_artikel', 'left');
		$query  = $this->db->get();
		return $query->row();
	}
	public function detail_e($slug_artikel) {
		$this->db->select('artikel.*, kategori_artikel.*');
		$this->db->from('artikel');
		$this->db->where('slug_artikel', $slug_artikel);
		$this->db->join('kategori_artikel', 'kategori_artikel.id_kategori_artikel = artikel.id_kategori_artikel', 'left');
		$query  = $this->db->get();
		return $query->row();
	}
	
	public function edit($data,$id_artikel){
		$this->db->where('id_artikel',$id_artikel);
		$this->db->update('artikel',$data);
	}

	public function get_kategori_list($limit, $start){
		$this->db->join('kategori_artikel', 'kategori_artikel.id_kategori_artikel = artikel.id_kategori_artikel', 'left');
		$this->db->join('user', 'user.id_user = artikel.id_user', 'left');
        $this->db->where('status_artikel', '1');	
        $this->db->order_by('id_artikel', 'DESC');
        $query = $this->db->get('artikel', $limit, $start);
        return $query;
    }
       public function jumlah_kategori(){
        $this->db->select('*');
        $query  = $this->db->get('artikel')->num_rows();
        return $query;   

    }

    // Controller Detail Profesional
    public function get_list_artikel_profesional($slug,$limit, $start){
		$this->db->join('kategori_artikel', 'kategori_artikel.id_kategori_artikel = artikel.id_kategori_artikel', 'left');
		$this->db->join('user', 'user.id_user = artikel.id_user', 'left');
        $this->db->where('user.slug',$slug);	
        $this->db->where('status_artikel', '1',$slug);
        $this->db->order_by('id_artikel', 'DESC');
        $query = $this->db->get('artikel', $limit, $start);
        return $query;
    }
       public function jumlah_artikel_profesional($slug){
        $this->db->select('*');
       	$this->db->join('kategori_artikel', 'kategori_artikel.id_kategori_artikel = artikel.id_kategori_artikel', 'left');
		$this->db->join('user', 'user.id_user = artikel.id_user', 'left');		
        $this->db->where('status_artikel', '1',$slug);
        $this->db->where('user.slug',$slug);
        $query  = $this->db->get('artikel')->num_rows();
        return $query;   

    }


}
/* End of file M_artikel.php */
/* Location: ./application/models/M_artikel.php */