<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require FCPATH . 'application/vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Edit_solution extends CI_Controller {

	 function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }else{
			$user_id = $this->session->userdata['logged_in']['user_id'];
		}
		 if($this->session->userdata['logged_in']['user_type'] != "Supplier"){
            redirect('error_page');
        }
     }

	public function index()
	{

		$this->load->model('edit_solution_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];

		/* category list*/
		$data['get_categories'] = $this->edit_solution_m->get_all_categories();
		/* category list ends*/

		/* currency list*/
		$data['get_currency'] = $this->edit_solution_m->get_all_currency();
		/* currency list ends*/

		/*basic supplier information *//*basic supplier information */
		$get_supplier_information = $this->edit_solution_m->check_supplier_details($user_id);
		
		if(!empty($get_supplier_information)){
			$data['supplier_detail'] = $get_supplier_information;
		}else{
			$data['supplier_detail'] = array();
		}
		/* basic supplier information ends */

		/*basic services information */
		if($user_id == 52){
			$data['get_services_information'] = array();
			$data['matching_services_information'] = array();
			$data['services_detail'] = array();

		}else if($user_id == 54){
			$data['get_services_information'] = array();
			$data['matching_services_information'] = array();
			$data['services_detail'] = array();

		}else if($user_id != 52 && $user_id != 54){
			$data['get_services_information'] = $this->edit_solution_m->get_services_details($user_id);
			$data['matching_services_information'] = $this->edit_solution_m->get_matching_services_details($user_id);

			if(!empty($data['get_services_information'])){
				$data['services_detail'] = $data['get_services_information'];
			}else{
				$data['services_detail'] = array();
			}
		}

		/* basic services information ends */

		$this->load->view('edit_solution',$data);
	}


	public function basic_info()
	{
		$this->load->model('edit_solution_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$solution_category = $this->input->post('solution_category');
		$implode_solution_category = implode(',',$solution_category);
		
		$supplier_data = array(
			'user_id' => $user_id,
			'supplier_name' => $this->input->post('supplier_name'),
			'supplier_package_price' => $this->input->post('price_solution'),
			'supplier_categories' => $implode_solution_category,
			'supplier_bundle_with' => $this->input->post('supplier_bundle_with'),
			'email_alert' => $this->input->post('email_receive')
		);

	
		
		$check_additional_infor_p = $this->edit_solution_m->check_additional_info($user_id);
		if($check_additional_infor_p > 0){
			$insert_supplier_data = $this->edit_solution_m->update_supplier_info($supplier_data,$user_id);
			

		}else{
			$insert_supplier_data = $this->edit_solution_m->insert_supplier_info($supplier_data);
		}
		if($insert_supplier_data)
		{
			$this->session->set_flashdata("success", "Thank You , Your budget information inserted successfully!");
			redirect('edit_solution');
		}
		else
		{
			$this->session->set_flashdata("failed", "Something went wrong while submitting!");
			redirect('edit_solution');
		}
	}

	public function add_supplier()
	{
		$this->load->model('edit_solution_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
	   $check_row = $this->edit_solution_m->get_services_details($user_id);
	  
		if($this->input->post('status') == 'on')
		{
			$status = 1;
		}
		else
		{
			$status = 0;
		}
		
		$date = time();
			//$get_insert = $this->edit_solution_m->add_supplier_services($more_service_data);
		
				/* image upload section */
				
					$locations = $this->input->post('location_service');
					$implode_locations= implode(',',$locations);

					if(isset($_FILES['userFiles']['name']) && $_FILES['userFiles']['name'] != ""){
						$_FILES['userFile']['name'] = $_FILES['userFiles']['name'];
						$_FILES['userFile']['type'] = $_FILES['userFiles']['type'];
						$_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'];
						$_FILES['userFile']['error'] = $_FILES['userFiles']['error'];
						$_FILES['userFile']['size'] = $_FILES['userFiles']['size'];

						$uploadPath = 'uploads/';
						$config['upload_path'] = $uploadPath;
						$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
						
						$this->load->library('upload', $config);
						$this->upload->initialize($config);
						if($this->upload->do_upload('userFile')){
							$fileData = $this->upload->data();
							$uploadData['file_name'] = $fileData['file_name'];
							$uploadData['created'] = date("Y-m-d H:i:s");
							$uploadData['modified'] = date("Y-m-d H:i:s");
						}
					}else{
						$uploadData['file_name'] = "";
					}
					/* image upload section */
					
					

					$extra_service_data = array(
						'user_id' => $user_id,
						'logo' => $uploadData['file_name'],
						'supplier_name' => $this->input->post('new_supplier_name'),
						'service_name' => $this->input->post('new_service_name'),
						'customer_type' => $this->input->post('customer_type'),
						'product_category'=> $this->input->post('product_category'),
						'product_detail'=>$this->input->post('product_detailzz'),
						'currency' => $this->input->post('price_currency'),
						'price_range' => $this->input->post('price_range'),
						'price_detail' => $this->input->post('price_details'),
						'operating_system'=> $this->input->post('operating_system'),
						'specialist_hardware' => $this->input->post('specialist_hardware'),
						'third_party_supplier' => $this->input->post('third_party_software'),
						'ease_of_setup' => $this->input->post('ease_setup'),
						'protection_level' => $this->input->post('protection_level'),
						'product_link' => $this->input->post('product_link'),
						'commission_detail' => $this->input->post('commission_detail'),
						'payment_option' => $this->input->post('payment_option'),
						'govt_voucher' => $this->input->post('government_voucher'),
						'cashback' => $this->input->post('cash_back'),
						'rating' => $this->input->post('rating_ranking'),
						'location' => $implode_locations,
						'regulation'=> $this->input->post('regulation'),
						'refund'=> $this->input->post('refund_possible'),
						'user_instruction' => $this->input->post('instruction_details'),
						'service_provider' => $this->input->post('distributor'),
						'status' => $status
					);
					
				if($this->input->post('distributor') != 'Direct')
				{
				
				$check_service = $this->edit_solution_m->get_check($this->input->post('new_supplier_name'),$this->input->post('new_service_name'),$this->input->post('product_detailzz'));
				if($check_service > 0)
				{
					$get_add_service_details = $this->edit_solution_m->get_check_serv_details($this->input->post('new_supplier_name'),$this->input->post('new_service_name'),$this->input->post('product_detailzz'));
				
					if($get_add_service_details->user_id == $this->session->userdata['logged_in']['user_id'])
					{
						$service_id = $get_add_service_details->supplier_service_id;
						$update_old_service = $this->edit_solution_m->update_service($service_id,$extra_service_data);
						if($update_old_service)
						{
							$this->session->set_flashdata("success", "Thank You , Your budget information inserted successfully!");
							redirect('edit_solution');
						}else{
							$this->session->set_flashdata("failed", "Something went wrong while submitting!");
							redirect('edit_solution');
						}
					}
					else if($get_add_service_details->user_id =='52' || $get_add_service_details->user_id == '54')
					{

						
						$matching_data = array(
							'supplier_service_id'=> $get_add_service_details->supplier_service_id,
							'user_id' => $get_add_service_details->user_id,
							'added_by' => $this->session->userdata['logged_in']['user_id'],
							'logo' => $get_add_service_details->logo,
							'supplier_name' => $get_add_service_details->supplier_name,
							'service_name' => $get_add_service_details->service_name,
							'customer_type' => $get_add_service_details->customer_type,
							'product_category'=> $get_add_service_details->product_category,
							'product_detail'=>$get_add_service_details->product_detail,
							'currency' => $get_add_service_details->currency,
							'price_range' => $get_add_service_details->price_range,
							'price_detail' => $get_add_service_details->price_detail,
							'operating_system'=> $get_add_service_details->operating_system,
							'specialist_hardware' => $get_add_service_details->specialist_hardware,
							'third_party_supplier' => $get_add_service_details->third_party_supplier,
							'ease_of_setup' => $get_add_service_details->ease_of_setup,
							'protection_level' => $get_add_service_details->protection_level,
							'product_link' => $get_add_service_details->product_link,
							'commission_detail' => $get_add_service_details->commission_detail,
							'payment_option' => $get_add_service_details->payment_option,
							'govt_voucher' => $get_add_service_details->govt_voucher,
							'cashback' => $get_add_service_details->cashback,
							'rating' => $get_add_service_details->rating,
							'location' => $get_add_service_details->location,
							'regulation'=> $get_add_service_details->regulation,
							'refund'=> $get_add_service_details->refund,
							'user_instruction' => $get_add_service_details->user_instruction,
							'service_provider' => $get_add_service_details->service_provider,
							'upload_date' => $date,
							'status' => '1'
						);
						
						$insert_matching = $this->edit_solution_m->insert_matching($matching_data);
						if($insert_matching)
						{
							$this->session->set_flashdata("success", "Thank You , Your budget information inserted successfully!");
							redirect('edit_solution');
						}else{
							$this->session->set_flashdata("failed", "Something went wrong while submitting!");
							redirect('edit_solution');
						}
					}
					else
					{
						$insert_supplier_service_budget_data = $this->edit_solution_m->add_supplier_services($extra_service_data);
						if($insert_supplier_service_budget_data)
						{
							$this->session->set_flashdata("success", "Thank You , Your budget information inserted successfully!");
							redirect('edit_solution');
						}else{
							$this->session->set_flashdata("failed", "Something went wrong while submitting!");
							redirect('edit_solution');
						}
					}
				}
				else
				{
					$insert_supplier_service_budget_data = $this->edit_solution_m->add_supplier_services($extra_service_data);
					if($insert_supplier_service_budget_data)
					{
						$this->session->set_flashdata("success", "Thank You , Your budget information inserted successfully!");
						redirect('edit_solution');
					}else{
						$this->session->set_flashdata("failed", "Something went wrong while submitting!");
						redirect('edit_solution');
					}
				}
				}
				else
					{
						$insert_supplier_service_budget_data = $this->edit_solution_m->add_supplier_services($extra_service_data);
					}
			}


	public function down_service()
	{
		$this->load->model('edit_solution_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$get_service_details = $this->edit_solution_m->get_services_details($user_id);
		

		$spreadsheet = new Spreadsheet();
		$spreadsheet->getProperties()
		->setCreator('ProtectBox')
		->setLastModifiedBy('YOUR NAME')
		->setTitle('Current Services')
		->setSubject('List of current services')
		->setDescription('List of current services')
		->setKeywords('List of current services')
		->setCategory('List of current services');
		 
		// NEW WORKSHEET
		$sheet = $spreadsheet->getActiveSheet();
		$sheet->setTitle('List of current services');
		$sheet->setCellValue('A1', 'Logo');
		$sheet->setCellValue('B1', 'supplier_name');
		$sheet->setCellValue('C1', 'service_name');
		$sheet->setCellValue('D1', 'customer_type');
		$sheet->setCellValue('E1', 'product_category');
		$sheet->setCellValue('F1', 'product_detail');
		$sheet->setCellValue('G1', 'currency');
		$sheet->setCellValue('H1', 'price_range');
		$sheet->setCellValue('I1', 'price_detail');
		$sheet->setCellValue('J1', 'operating_system');
		$sheet->setCellValue('K1', 'specialist_hardware');
		$sheet->setCellValue('L1', 'third_party_supplier');
		$sheet->setCellValue('M1', 'ease_of_setup');
		$sheet->setCellValue('N1', 'protection_level');
		$sheet->setCellValue('O1', 'product_link');
		$sheet->setCellValue('P1', 'commission_detail');
		$sheet->setCellValue('Q1', 'payment_option');
		$sheet->setCellValue('R1', 'govt_voucher');
		$sheet->setCellValue('S1', 'location');
		$sheet->setCellValue('T1', 'regulation');
		$sheet->setCellValue('U1', 'refund');
		$sheet->setCellValue('V1', 'user_instruction');
		$sheet->setCellValue('W1', 'service_provider');
		$sheet->setCellValue('X1', 'service_stockcode');
		$sheet->setCellValue('Y1', 'net_price');
		$sheet->setCellValue('Z1', 'prodclass');
		$sheet->setCellValue('AA1', 'easeofinstallation');
		$sheet->setCellValue('AB1', 'virtual');
		$sheet->setCellValue('AC1', 'unit');
		$sheet->setCellValue('AD1', 'td_part');
		$sheet->setCellValue('AE1', 'supplier_category');
		$sheet->setCellValue('AF1', 'status');
	
		$i = 2;
		foreach ($get_service_details As $key)
		{
		$sheet->setCellValue('A'.$i, $key->logo);
		$sheet->setCellValue('B'.$i, $key->supplier_name);
		$sheet->setCellValue('C'.$i, $key->service_name);
		$sheet->setCellValue('D'.$i, $key->customer_type);
		$sheet->setCellValue('E'.$i, $key->product_category);
		$sheet->setCellValue('F'.$i, $key->product_detail);
		$sheet->setCellValue('G'.$i, $key->currency);
		$sheet->setCellValue('H'.$i, $key->price_range);
		$sheet->setCellValue('I'.$i, $key->price_detail);
		$sheet->setCellValue('J'.$i, $key->operating_system);
		$sheet->setCellValue('K'.$i, $key->specialist_hardware);
		$sheet->setCellValue('L'.$i, $key->third_party_supplier);
		$sheet->setCellValue('M'.$i, $key->ease_of_setup);
		$sheet->setCellValue('N'.$i, $key->protection_level);
		$sheet->setCellValue('O'.$i, $key->product_link);
		$sheet->setCellValue('P'.$i, $key->commission_detail);
		$sheet->setCellValue('Q'.$i, $key->payment_option);
		$sheet->setCellValue('R'.$i, $key->govt_voucher);
		$sheet->setCellValue('S'.$i, $key->location);
		$sheet->setCellValue('T'.$i, $key->regulation);
		$sheet->setCellValue('U'.$i, $key->refund);
		$sheet->setCellValue('V'.$i, $key->user_instruction);
		$sheet->setCellValue('W'.$i, $key->service_provider);
		$sheet->setCellValue('X'.$i, $key->service_stockcode);
		$sheet->setCellValue('Y'.$i, $key->net_price);
		$sheet->setCellValue('Z'.$i, $key->prodclass);
		$sheet->setCellValue('AA'.$i, $key->easeofinstallation);
		$sheet->setCellValue('AB'.$i, $key->virtual);
		$sheet->setCellValue('AC'.$i, $key->unit);
		$sheet->setCellValue('AD'.$i, $key->td_part);
		$sheet->setCellValue('AE'.$i, $key->supplier_category);
		$sheet->setCellValue('AF'.$i, $key->status);
		$i++;
		}
		//print_r($spreadsheet);
		//exit;


		// OUTPUT
		$writer = new Xlsx($spreadsheet);

		// THIS WILL SAVE TO A FILE ON THE SERVER
		// $writer->save('test.xlsx');

		// OR FORCE DOWNLOAD
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="Current_services.xlsx"');
		header('Cache-Control: max-age=0');
		header('Expires: Fri, 11 Nov 2011 11:11:11 GMT');
		header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
		header('Cache-Control: cache, must-revalidate');
		header('Pragma: public');
		$writer->save('php://output');
	}
	public function service_import()
	{
		$this->load->model('edit_solution_m');
		$file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

			if(isset($_FILES['mapped']['name']) && in_array($_FILES['mapped']['type'], $file_mimes)) {
			$arr_file = $_FILES['mapped']['name'];
			$extension = end($arr_file);
			if('csv' == $extension){
				$reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
			}
			else{
				$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
			}
			$spreadsheet = $reader->load($_FILES['mapped']['tmp_name']);
			$sheetData = $spreadsheet->getActiveSheet()->toArray();
			
			
			echo "<pre>";
		
			array_splice($sheetData, 0, 1);
			//echo "<br />";
			//print_r ($sheetData);
			//echo "<br />";
			//exit;
			$i = 0;
			$single_data = array();
			foreach($sheetData as $single_array)
			{
				$single_data[$i]['user_id'] = $this->session->userdata['logged_in']['user_id'];
				$single_data[$i]['logo'] = $single_array[0];
				$single_data[$i]['supplier_name'] = $single_array[1];
				$single_data[$i]['service_name'] = $single_array[2];
				$single_data[$i]['customer_type'] = $single_array[3];
				$single_data[$i]['product_category'] = $single_array[4];
				$single_data[$i]['product_detail'] = $single_array[5];
				$single_data[$i]['currency'] = $single_array[6];
				$single_data[$i]['price_range'] = $single_array[7];
				$single_data[$i]['price_detail'] = $single_array[8];
				$single_data[$i]['operating_system'] = $single_array[9];
				$single_data[$i]['specialist_hardware'] = $single_array[10];
				$single_data[$i]['third_party_supplier'] = $single_array[11];
				$single_data[$i]['ease_of_setup'] = $single_array[12];
				$single_data[$i]['protection_level'] = $single_array[13];
				$single_data[$i]['product_link'] = $single_array[14];
				$single_data[$i]['commission_detail'] = $single_array[15];
				$single_data[$i]['payment_option'] = $single_array[16];
				$single_data[$i]['govt_voucher'] = $single_array[17];
				$single_data[$i]['location'] = $single_array[18];
				$single_data[$i]['regulation'] = $single_array[19];
				$single_data[$i]['refund'] = $single_array[20];
				$single_data[$i]['user_instruction'] = $single_array[21];
				$supplier_data[$i]['Terms'] = $single_array[22];
				$single_data[$i]['service_provider'] = $single_array[23];
				$yoo_data[$i]['spread_status'] = $single_array[24];

				if($yoo_data[$i]['spread_status'] == 'Active')
				{
					$single_data[$i]['status'] = 1;
				}
				else
				{
					$single_data[$i]['status'] = 0;
				}


				//print_r($single_data[$i]);
				//echo "<br />";
				//print_r($supplier_data[$i]);
				
				//echo $single_data[$i]['service_provider'];
				//exit;
	
				if($single_data[$i]['service_provider'] != 'Direct')
				{
				$get_check_service = $this->edit_solution_m->get_check($single_data[$i]['supplier_name'],$single_data[$i]['service_name'],$single_data[$i]['product_detail']);
				if($get_check_service > 0)
				{
					$get_check_service_details = $this->edit_solution_m->get_check_serv_details($single_data[$i]['supplier_name'],$single_data[$i]['service_name'],$single_data[$i]['product_detail']);
					
				
					if($get_check_service_details->user_id == $this->session->userdata['logged_in']['user_id'])
					{
						$service_id = $get_check_service_details->supplier_service_id;
						$update_new_service = $this->edit_solution_m->update_service($service_id,$single_data[$i]);
					}
					else if($get_check_service_details->user_id =='52' || $get_check_service_details->user_id == '54')
					{

						 $all_matching_data = array(
						'supplier_service_id'=> $get_check_service_details->supplier_service_id,
						'user_id' => $get_check_service_details->user_id,
						'added_by' => $this->session->userdata['logged_in']['user_id'],
						'logo' => $get_check_service_details->logo,
						'supplier_name' => $get_check_service_details->supplier_name,
						'service_name' => $get_check_service_details->service_name,
						'customer_type' => $get_check_service_details->customer_type,
						'product_category'=> $get_check_service_details->product_category,
						'product_detail'=>$get_check_service_details->product_detail,
						'currency' => $get_check_service_details->currency,
						'price_range' => $get_check_service_details->price_range,
						'price_detail' => $get_check_service_details->price_detail,
						'operating_system'=> $get_check_service_details->operating_system,
						'specialist_hardware' => $get_check_service_details->specialist_hardware,
						'third_party_supplier' => $get_check_service_details->third_party_supplier,
						'ease_of_setup' => $get_check_service_details->ease_of_setup,
						'protection_level' => $get_check_service_details->protection_level,
						'product_link' => $get_check_service_details->product_link,
						'commission_detail' => $get_check_service_details->commission_detail,
						'payment_option' => $get_check_service_details->payment_option,
						'govt_voucher' => $get_check_service_details->govt_voucher,
						'cashback' => $get_check_service_details->cashback,
						'rating' => $get_check_service_details->rating,
						'location' => $get_check_service_details->location,
						'regulation'=> $get_check_service_details->regulation,
						'refund'=> $get_check_service_details->refund,
						'user_instruction' => $get_check_service_details->user_instruction,
						'service_provider' => $get_check_service_details->service_provider,
						'upload_date' => $date,
						'status' => '1'
					);
						//print_r($all_matching_data);
						//echo $i;
						//exit;
					
						$insert_matching_have = $this->edit_solution_m->insert_matching($all_matching_data);
					}
					else
					{
						$insert_service_have = $this->edit_solution_m->insert_service($single_data[$i]);
					}
					
				}
				else
				{
					$insert_service_have = $this->edit_solution_m->insert_service($single_data[$i]);
				}
				}
				else
				{
					$insert_service_have = $this->edit_solution_m->insert_service($single_data[$i]);
				}

				//update_array = array('product_category' => $single_array[3],'commission_detail' => $single_array[5],'payment_option' => $single_array[6]);
				//$update_local = $this->view_all_services_m->update_local($single_array[0],$update_array);
				$i++;
			}
			$this->session->set_flashdata("success", "Mapped data updated into database, thank you.");
			redirect('edit_solution');
		}
	}

	public function update_status(){
		
        $this->load->model('edit_solution_m');
		$matching_supplier_service_id = $this->input->post('matching_supplier_service_id');
        $status = $this->input->post('status');
		
        $get_all_details = $this->edit_solution_m->get_service_data($matching_supplier_service_id);
		//$supplier_service_id = $get_all_details->supplier_service_id;
		//$dlt_distributer_service = $this->edit_solution_m->dlt_service($supplier_service_id);
		//$date = time();

			/*$more_service_data = array(
						
						'user_id' => $get_all_details->added_by,
						'logo' => $get_all_details->logo,
						'supplier_name' => $get_all_details->supplier_name,
						'service_name' => $get_all_details->service_name,
						'customer_type' => $get_all_details->customer_type,
						'product_category'=> $get_all_details->product_category,
						'product_detail'=>$get_all_details->product_detail,
						'currency' => $get_all_details->currency,
						'price_range' => $get_all_details->price_range,
						'price_detail' => $get_all_details->price_detail,
						'operating_system'=> $get_all_details->operating_system,
						'specialist_hardware' => $get_all_details->specialist_hardware,
						'third_party_supplier' => $get_all_details->third_party_supplier,
						'ease_of_setup' => $get_all_details->ease_of_setup,
						'protection_level' => $get_all_details->protection_level,
						'product_link' => $get_all_details->product_link,
						'commission_detail' => $get_all_details->commission_detail,
						'payment_option' => $get_all_details->payment_option,
						'govt_voucher' => $get_all_details->govt_voucher,
						'cashback' => $get_all_details->cashback,
						'rating' => $get_all_details->rating,
						'location' => $get_all_details->location,
						'regulation'=> $get_all_details->regulation,
						'refund'=> $get_all_details->refund,
						'user_instruction' => $get_all_details->user_instruction,
						'service_provider' => 'user',
						'upload_date' => $date,
						'status' => '1'
					);
					
				
				$insert_matching_service = $this->edit_solution_m->insert_match_serv($more_service_data);*/
			
					$dlt_matching_service = $this->edit_solution_m->del_service_it($matching_supplier_service_id);
					if($dlt_matching_service)
						{
							$this->session->set_flashdata("success", "Thank You , Your Service inserted successfully!");
							redirect('edit_solution');
							}else{
							$this->session->set_flashdata("failed", "Something went wrong while submitting!");
							redirect('edit_solution');
						}
				
			}


	
}

?>
