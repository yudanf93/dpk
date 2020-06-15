<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori_profesi extends CI_Model {

	Public function __construct() {
		parent::__construct();
		$this->load->database();
	}   

	public function select_kategori_profesi() {
		$this->db->select('*');   
		$this->db->from('kategori_profesi');
		$this->db->order_by('id_kategori_profesi', 'DESC');
		$query  = $this->db->get();
		return $query->result();
	}

	public function delete($data) {
		$this->db->where('id_kategori_profesi',$data['id']);
		$this->db->delete('kategori_profesi');
	}

	public function add($data) {
		$this->db->insert('kategori_profesi', $data);
	}

	public function detail($id_kategori_profesi) {
		$this->db->select('*');
		$this->db->from('kategori_profesi');
		$this->db->where('id_kategori_profesi', $id_kategori_profesi);
		$query  = $this->db->get();
		return $query->row();
	}
	
	public function edit($data,$id_kategori_profesi){
		$this->db->where('id_kategori_profesi',$id_kategori_profesi);
		$this->db->update('kategori_profesi',$data);
	}

}

/* End of file M_kategori_profesi.php */
/* Location: ./application/models/M_kategori_profesi.php */