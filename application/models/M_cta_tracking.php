<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cta_tracking extends CI_Model {

	Public function __construct() {
		parent::__construct();
		$this->load->database();
	}   

	public function select_cta_tracking() {
		$this->db->select('cta_tracking.*, user.*');   
		$this->db->from('cta_tracking');
		$this->db->join('user', 'user.id_user = cta_tracking.id_user', 'left');
		$this->db->order_by('id_cta_track', 'DESC');
		$query  = $this->db->get();
		return $query->result();
	}

	public function delete($data) {
		$this->db->where('id_cta_track',$data['id']);
		$this->db->delete('cta_tracking');
	}

	public function add($data) {
		$this->db->insert('cta_tracking', $data);
	}

	public function detail($id_cta_track) {
		$this->db->select('*');
		$this->db->from('cta_tracking');
		$this->db->where('id_cta_track', $id_cta_track);
		$query  = $this->db->get();
		return $query->row();
	}
	
	public function edit($data,$id_cta_track){
		$this->db->where('id_cta_track',$id_cta_track);
		$this->db->update('cta_tracking',$data);
	}


}

/* End of file M_cta_tracking.php */
/* Location: ./application/models/M_cta_tracking.php */