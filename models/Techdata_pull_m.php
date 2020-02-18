<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Techdata_pull_m extends CI_Model {

	public function fetch_uk_scrap(){
		$this->db->select('*');
		$this->db->from('local_supplier_service');
		$this->db->where('openrange', '');
		$this->db->where('service_provider', 'TechData UK');
		$query = $this->db->get();
		return $query->num_rows();
		//return $this->db->last_query();
	}

	public function get_all_sync_data(){
		$this->db->SELECT('*');
		$this->db->from('td_pull_records');
		$this->db->where('email_receiver', 'Techdata UK');
		$this->db->where('date',date("Y-m-d"));
		$query = $this->db->get();
		return $query->row();
	}

	public function get_records(){
		$this->db->SELECT('*');
		$this->db->from('td_pull_records');
		$this->db->where('email_receiver', 'Techdata UK');
		$this->db->like('date', date("Y-m-d"), 'after');
		$query = $this->db->get();
		return $query->row();
	}

	public function all_admin(){
		$this->db->SELECT('*');
		$this->db->from('user');
		$this->db->where('user_type','admin');
		$query = $this->db->get();
		return $query->result();
	}

	public function update_records_td_admin($td_records,$records_id){
		$this->db->where('td_pull_records_id', $records_id);
		$this->db->update('td_pull_records', $td_records);
		return true;
	}

	public function get_all_sync_data_tdus(){
		$this->db->SELECT('*');
		$this->db->from('td_pull_records');
		$this->db->where('email_receiver', 'Techdata US');
		$this->db->where('date',date("Y-m-d"));
		$query = $this->db->get();
		return $query->row();
	}

	public function get_records_us(){
		$this->db->SELECT('*');
		$this->db->from('td_pull_records');
		$this->db->where('email_receiver', 'Techdata US');
		$this->db->like('date', date("Y-m-d"), 'after');
		$query = $this->db->get();
		return $query->row();
	}
}