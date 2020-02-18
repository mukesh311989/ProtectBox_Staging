<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Result_modal_m extends CI_Model { 

	public function fetch_services($service_id)
	{
		$this->db->Select('*');
		$this->db->from('supplier_service');
		$this->db->where('supplier_service_id',$service_id);
		$query = $this->db->get();
		return $query->row();
	}
	
	public function fetch_icecat($mpn)
	{
		$this->openrange_db = $this->load->database(db3, true);
		$this->openrange_db->Select('*');
		$this->openrange_db->from('openrange_data_map');
		$this->openrange_db->where('requested_prod_id',$mpn);
		$query = $this->openrange_db->get();
		return $query->row();
	}

	public function fetch_scrap_data($td_part,$service_provider)
	{
		$this->db->Select('*');
		$this->db->from('td_scrape');
		$this->db->where('td_part',$td_part);
		$this->db->where('service_provider',$service_provider);
		$query = $this->db->get();
		return $query->row();
		//return $this->db->last_query();
	}

	
}

/* End of file Result_modal_m.php */
/* Location: ./application/models/Result_modal_m.php */