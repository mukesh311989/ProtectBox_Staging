<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bundle_json_m extends CI_Model {

	public function insert_bundle($records){
		$this->db->insert('preparing_bundle', $records);
		return $this->db->insert_id();
	}

	public function insert_bundle_loader($records){
		$this->db->insert('preparing_bundle_loader', $records);
		return $this->db->insert_id();
	}

	public function update_bundle_loader($records_loader,$loader_id){
		$this->db->where('preparing_bundle_loader_ID', $loader_id);
		$query = $this->db->update('preparing_bundle_loader', $records_loader);
	}
	
	public function fetch_bundle_order($user_id){
		$this->db->select("*");
		$this->db->from('preparing_bundle');
		$this->db->where('user_id',$user_id);
		$this->db->order_by('bundle_order','DESC');
		$query = $this->db->get();
		return $query->row();
	}

	public function check_loader_exists($user_id){
		$this->db->select("*");
		$this->db->from('preparing_bundle_loader');
		$this->db->where('user_id',$user_id);
		$query = $this->db->get();
		return $query->row();
	}
	public function count_rows($user_id,$order_no){
		$this->db->select('*');
		$this->db->from('preparing_bundle');
		$this->db->where('smb_id',$user_id);
		$this->db->where('bundle_order',$order_no);
		$query = $this->db->get();
		return $query->row();
		//return $this->db->last_query();
	}
	public function updatezz_loader($records_loader,$user_id){
		$this->db->where('user_id', $user_id);
		$query = $this->db->update('preparing_bundle_loader', $records_loader);
	}

	public function ajax_loader_progress($user_id){
		$this->db->select("*");
		$this->db->from('preparing_bundle_loader');
		$this->db->where('user_id',$user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function updatezz_bundle($records,$bundle_id){
		$this->db->where('bundle_id', $bundle_id);
		$query = $this->db->update('preparing_bundle', $records);
        //return $this->db->last_query();
		return true;
	}

	public function rem_prev_bundles($userid){
		$tables = array('preparing_mysmb_bundle');
		$this->db->where('smb_id', $userid);
		$this->db->delete($tables);
		return true;
	}

    public function remove_bundles($userid){
        $this->db->where('smb_id', $userid);
        $this->db->delete('preparing_bundle');
		return true;
    }

	public function insert_mysmb_bundle($records){
		$this->db->insert('preparing_mysmb_bundle', $records);
		return $this->db->insert_id();
	}

	public function count_mysmb_rows($user_id){
		$this->db->select('*');
		$this->db->from('preparing_mysmb_bundle');
		$this->db->where('smb_id',$user_id);
		$query = $this->db->get();
		return $query->num_rows();
		//return $this->db->last_query();
	}

	// DYNAMIC INSTANCE IP STARTS
	public function fetch_free_ip(){
		$this->db->select('*');
		$this->db->from('result_bundle_instance');
		$this->db->where('instance_status','free');
		$query = $this->db->get();
		return $query->row();
		//return $this->db->last_query();
	}
	
	public function update_user_no($bundle_instance_id,$records){
		$this->db->where('result_bundle_instance_id',$bundle_instance_id);
        $query = $this->db->update('result_bundle_instance',$records);
        //return true;
		return $this->db->last_query();
	}

	// DYNAMIC INSTANCE IP ENDS
}

/* End of file Bundle_json_m.php */
/* Location: ./application/models/Bundle_json_m.php */