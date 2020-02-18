<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require FCPATH . 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class View_all_services extends CI_Controller {
	function __construct(){
        parent::__construct();
		$this->load->helper('url');
        $this->load->library("pagination");
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
		$this->load->model('view_all_services_m');
		echo 'HI';die;

		$config['base_url'] = base_url() . 'view_all_services';
		$config['first_url'] = '1';
		$config['total_rows'] = $this->db->count_all('supplier_service');
		$config['per_page'] = 10;
		$config["uri_segment"] = 2;
		$config['use_page_numbers'] = TRUE;
		$config['full_tag_open'] = '<ul class="pagination">'; 
		$config['full_tag_close'] = '</ul>';
		$config['first_tag_open'] = "<li class='paginate_button'>";
		$config['first_tag_close'] = "</li>";
		$config['prev_tag_open'] = "<li class='paginate_button'>";
		$config['prev_tag_close'] = "</li>";
		$config['next_tag_open'] = "<li class='paginate_button'>";
		$config['next_tag_close'] = "</li>";
		$config['last_tag_open'] = "<li class='paginate_button'>";
		$config['last_tag_close'] = "</li>";
		$config['cur_tag_open'] = "<li class='paginate_button active'><a href='page-link'>"; 
		$config['cur_tag_close'] = "</a></li>";
		$config['num_tag_open'] = "<li class='paginate_button'>";
		$config['num_tag_close'] = "</li>";
		$config['attributes'] = array('class' => 'page-link');


        $this->pagination->initialize($config);

		$page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $data["links"] = $this->pagination->create_links();

		$data['get_all_services'] = $this->view_all_services_m->all_services($config["per_page"], $page);
		$this->load->view('view_all_services',$data);
	}

	public function update_status(){
        $this->load->model('view_all_services_m');
        $supplier_service_id = $this->input->post('supplier_service_id');
        $status = $this->input->post('status_val');
        if($status == '1'){
			$updated_status = '0';
		}else if($status == '0'){
			$updated_status = '1';
		}
        $records = array(
                        'status'=>$updated_status,
                        );

        $status_update = $this->view_all_services_m->update_order_status($supplier_service_id,$records);
		echo $updated_status;

    }

	public function import(){
		$this->load->model('view_all_services_m');
		$file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

		if(isset($_FILES['mapped']['name']) && in_array($_FILES['mapped']['type'], $file_mimes)) {
			$arr_file = explode('.', $_FILES['mapped']['name']);
			$extension = end($arr_file);
			if('csv' == $extension){
				$reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
			}
			else{
				$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
			}
			$spreadsheet = $reader->load($_FILES['mapped']['tmp_name']);
			$sheetData = $spreadsheet->getActiveSheet()->toArray();
			//print_r ($sheetData);
			echo "<pre>";
			
			array_splice($sheetData, 0, 1);
			$i = 0;
			$single_data = array();
			foreach($sheetData as $single_array)
			{
				$single_data[$i]['supplier_service_id'] = $single_array[0];
				$single_data[$i]['product_category'] = $single_array[3];
				$single_data[$i]['commission_detail'] = $single_array[5];
				$single_data[$i]['payment_option'] = $single_array[6];

				$update_array = array('product_category' => $single_array[3],'commission_detail' => $single_array[5],'payment_option' => $single_array[6]);
				$update_local = $this->view_all_services_m->update_local($single_array[0],$update_array);
				$i++;
				break;
			}
			$this->session->set_flashdata("success", "Mapped data updated into database, thank you.");
			redirect('view_all_services');
		}
	}
	
}

/* End of file View_all_services.php */
/* Location: ./application/controllers/View_all_services.php */