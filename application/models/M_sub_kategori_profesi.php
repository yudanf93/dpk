<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_sub_kategori_profesi extends CI_Model {

		Public function __construct() {
		parent::__construct();
		$this->load->database();
	}   

	public function select_sub_kategori_profesi() {
		$this->db->select('sub_kategori_profesi.*, kategori_profesi.*');   
		$this->db->from('sub_kategori_profesi');
		$this->db->join('kategori_profesi', 'kategori_profesi.id_kategori_profesi = sub_kategori_profesi.id_kategori_profesi', 'left');
		$this->db->order_by('id_sub_kategori_profesi', 'DESC');
		$query  = $this->db->get();
		return $query->result();
	}

	public function delete($data) {
		$this->db->where('id_sub_kategori_profesi',$data['id']);
		$this->db->delete('sub_kategori_profesi');
	}

	public function add($data) {
		$this->db->insert('sub_kategori_profesi', $data);
	}

	public function detail($id_sub_kategori_profesi) {
		$this->db->select('*');
		$this->db->from('sub_kategori_profesi');
		$this->db->where('id_sub_kategori_profesi', $id_sub_kategori_profesi);
		$query  = $this->db->get();
		return $query->row();
	}
	
	public function edit($data,$id_sub_kategori_profesi){
		$this->db->where('id_sub_kategori_profesi',$id_sub_kategori_profesi);
		$this->db->update('sub_kategori_profesi',$data);
	}


}

/* End of file M_sub_kategori_profesi.php */
/* Location: ./application/models/M_sub_kategori_profesi.php */