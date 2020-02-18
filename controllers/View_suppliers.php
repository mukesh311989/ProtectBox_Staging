<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_suppliers extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }else{
			$user_id = $this->session->userdata['logged_in']['user_id'];
		}
		 if($this->session->userdata['logged_in']['user_type'] != "admin"){
            redirect('error_page');
        }
     }
     
	public function index()
	{
		$this->load->model('view_suppliers_m');
        $data['all_suppliers'] = $this->view_suppliers_m->fetch_all_suppliers();
		$this->load->view('view_suppliers',$data);
	}

	public function update_status(){
        $this->load->model('view_suppliers_m');
        $user_id = $this->input->post('user_id');
        $status = $this->input->post('status_val');
        if($status == '1'){
			$updated_status = '0';
		}else if($status == '0'){
			$updated_status = '1';
		}
        $records = array(
                        'status'=>$updated_status,
                        );

        $status_update = $this->view_suppliers_m->update_user_status($user_id,$records);
        if($status_update){
            $supplier_status_update = $this->view_suppliers_m->update_supplier_status($user_id,$records);
        }
		echo $updated_status;
    }
}

/* End of file View_suppliers.php */
/* Location: ./application/controllers/View_suppliers.php */