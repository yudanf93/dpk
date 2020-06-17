<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_relation_profesi extends CI_Model {

	Public function __construct() {
		parent::__construct();
		$this->load->database();
	}   

	public function select_relation_profesi($id_artikel) {
		$this->db->select('relation_profesi.*, sub_kategori_profesi.*, artikel.*');   
		$this->db->from('relation_profesi');
		$this->db->where('relation_profesi.id_artikel', $id_artikel);
		$this->db->join('sub_kategori_profesi', 'sub_kategori_profesi.id_sub_kategori_profesi = relation_profesi.id_sub_kategori_profesi', 'left');
		$this->db->join('artikel', 'artikel.id_artikel = relation_profesi.id_artikel', 'left');
		$this->db->order_by('id_relation_profesi', 'DESC');
		$query  = $this->db->get();
		return $query->result();
	}

	public function delete($data) {
		$this->db->where('id_relation_profesi',$data['id']);
		$this->db->delete('relation_profesi');
	}

	public function add($data) {
		$this->db->insert('relation_profesi', $data);
	}

	public function detail($id_relation_profesi) {
		$this->db->select('relation_profesi.*, artikel.*');
		$this->db->from('relation_profesi');
		$this->db->join('artikel', 'artikel.id_artikel = relation_profesi.id_artikel', 'left');
		$this->db->where('id_relation_profesi', $id_relation_profesi);
		$query  = $this->db->get();
		return $query->row();
	}
	
	public function edit($data,$id_relation_profesi){
		$this->db->where('id_relation_profesi',$id_relation_profesi);
		$this->db->update('relation_profesi',$data);
	}

}

/* End of file M_relation_profesi.php */
/* Location: ./application/models/M_relation_profesi.php */