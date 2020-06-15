<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_search_tracking extends CI_Model {

	Public function __construct() {
		parent::__construct();
		$this->load->database();
	}   

	public function select_search_tracking() {
		$this->db->select('*');   
		$this->db->from('search_tracking');
		$this->db->join('kategori_profesi', 'kategori_profesi.id_kategori_profesi = search_tracking.id_kategori_profesi', 'left');
		$this->db->join('sub_kategori_profesi', 'sub_kategori_profesi.id_sub_kategori_profesi = search_tracking.id_sub_kategori_profesi', 'left');
		$this->db->order_by('id_search_tracking', 'DESC');
		$query  = $this->db->get();
		return $query->result();
	}

	public function delete($data) {
		$this->db->where('id_search_tracking',$data['id']);
		$this->db->delete('search_tracking');
	}

	public function add($data) {
		$this->db->insert('search_tracking', $data);
	}

	public function detail($id_search_tracking) {
		$this->db->select('*');
		$this->db->from('search_tracking');
		$this->db->where('id_search_tracking', $id_search_tracking);
		$query  = $this->db->get();
		return $query->row();
	}
	
	public function edit($data,$id_search_tracking){
		$this->db->where('id_search_tracking',$id_search_tracking);
		$this->db->update('search_tracking',$data);
	}

}

/* End of file M_search_tracking.php */
/* Location: ./application/models/M_search_tracking.php */