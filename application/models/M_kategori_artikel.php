<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori_artikel extends CI_Model {

	Public function __construct() {
		parent::__construct();
		$this->load->database();
	}   

	public function select_kategori_artikel() {
		$this->db->select('*');   
		$this->db->from('kategori_artikel');
		$this->db->order_by('id_kategori_artikel', 'DESC');
		$query  = $this->db->get();
		return $query->result();
	}

	public function delete($data) {
		$this->db->where('id_kategori_artikel',$data['id']);
		$this->db->delete('kategori_artikel');
	}

	public function add($data) {
		$this->db->insert('kategori_artikel', $data);
	}

	public function detail($id_kategori_artikel) {
		$this->db->select('*');
		$this->db->from('kategori_artikel');
		$this->db->where('id_kategori_artikel', $id_kategori_artikel);
		$query  = $this->db->get();
		return $query->row();
	}
	
	public function edit($data,$id_kategori_artikel){
		$this->db->where('id_kategori_artikel',$id_kategori_artikel);
		$this->db->update('kategori_artikel',$data);
	}

}

/* End of file M_kategori_artikel.php */
/* Location: ./application/models/M_kategori_artikel.php */