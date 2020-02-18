<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sme_order_m extends CI_Model {

	public function fetch_sme_name($sme_id)
    {
        $this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id', $sme_id);
		$this->db->order_by('order_id', 'DESC');
		$query = $this->db->get();
		return $query->row();
    }

	public function fetch_method($supplier_id)
	{
		$this->db->select('*');
		$this->db->from('supplier_service');
		$this->db->where('user_id', $supplier_id);
		$query = $this->db->get();
		return $query->row();
	}

}

/* End of file Profile_m.php */
/* Location: ./application/models/Profile_m.php */