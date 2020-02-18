<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ixcg_pending_import_m extends CI_Model {

	public function get_it($records)
		{
			$condition = "product_description ='".$records['description']."'";
			$this->db->select('*');
			$this->db->from('nick_service');
			$this->db->where($condition);
			$query = $this->db->get();
			//$count = $query->num_rows();
			//return $count;
			if($query != FALSE && $query->num_rows() == 0) // if the affected number of rows is one---LINE 19---
			{
				return true;
			}
			else
			{
				return false;
			} 
		}
	public function get_it_service($records)
		{
			$condition = "product_description ='".$records['description']."'";
			$this->db->select('*');
			$this->db->from('supplier_service');
			$this->db->where($condition);
			$query = $this->db->get();
			//$count = $query->num_rows();
			//return $count;
			if($query != FALSE && $query->num_rows() == 0) // if the affected number of rows is one---LINE 19---
			{
				return true;
			}
			else
			{
				return false;
			} 
		}
		public function ixcg_import($records)
		{
			$this->db->insert('nick_service', $records);
			return true;
		}
		

}

/* End of file Recover_pass_m.php */
/* Location: ./application/models/Recover_pass_m.php */