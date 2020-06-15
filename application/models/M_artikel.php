<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_artikel extends CI_Model {

	Public function __construct() {
		parent::__construct();
		$this->load->database();
	}   

	public function select_artikel() {
		$this->db->select('artikel.*, kategori_artikel.*, user.*');   
		$this->db->from('artikel');
		$this->db->join('user', 'user.id_user = artikel.id_user', 'left');
		$this->db->join('kategori_artikel', 'kategori_artikel.id_kategori_artikel = artikel.id_kategori_artikel', 'left');
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
	
	public function edit($data,$id_artikel){
		$this->db->where('id_artikel',$id_artikel);
		$this->db->update('artikel',$data);
	}


}
/* End of file M_artikel.php */
/* Location: ./application/models/M_artikel.php */