<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emailreader_m extends CI_Model {

	public function is_exist_email_sync(){
			
		$this->db->select('conn_id');  
		$getExistquery = $this->db->get('email_sync_status'); 
		if($getExistquery){ 
		//echo $this->db->last_query(); 
		 return $data = $getExistquery->result_array();	

		}else{
			return false;
		}
			
		}
	public function ftpConnection($conn_id,$connection_type ='FTP'){
	$this->db->select('*');

	$this->db->where(array('conn_id'=>$conn_id,'connection_type'=>$connection_type));	

	$connection = $this->db->get('pb_connections');
	$data = $connection->result_array();
	//echo $this->db->last_query();
	//log_message('debug', 'Last Query ftpConnection ['.$this->db->last_query().']');
	return $data;
				
	}
	public function is_excel_exist($seller_id,$date)
	{
		$this->db->select('*');
		$this->db->where('seller_id =', $seller_id);
		$this->db->where('file_name =', $date);
		$result = $this->db->get('pb_excel_import_history');
		return $result->result_array();
		
	}
}

/* End of file View_suppliers_m.php */
/* Location: ./application/models/View_suppliers_m.php */