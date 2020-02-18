<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ixcg_pending_import extends CI_Controller {
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
	$ch = curl_init();
    $time = time();
	$id = md5($time);
	//Ju8akoaj1isnalhG89UkHTVakwoqjybkY6k
	curl_setopt($ch, CURLOPT_URL, "https://api.ixcg.com/api.php");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"method\": \"getPricing\", \"id\": \"".$id."\", \"jsonrpc\": \"2.0\", \"params\": {\"full\": \"1\"}}");
	curl_setopt($ch, CURLOPT_POST, 1);

	$headers = array();
	$headers[] = "Content-Type: application/json";
	$headers[] = "Authorization: Basic TjhLendjcVZVeEFJMVJvUGk1anlGSlBrUGxrRGw5dkY6";
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	$result = curl_exec($ch);
	if (curl_errno($ch)) {
		echo 'Error:' . curl_error($ch);
	}
	
	curl_close ($ch);
	$count = strlen($result);
	$a = substr($result,20,$count);
	$d = json_decode($a,true);
	
	$this->load->model('ixcg_pending_import_m');
	$complete_data = $d['result'];
	//print_r($complete_data);
	//echo "<br/>";
	//$get_count = count($complete_data);
	//echo $get_count;
	//echo "<br/>";
	
	foreach($complete_data As $key)
	{
		$description =  $key['description'];
		$stock_code = $key['stockcode'];
		$manufacture = $key['manufname'];
		$net_price = $key['nettprice'];
		$gross_price = $key['grossprice'];
		$unit = $key['unit'];
		$product_class= $key['prodclass'];
		$product_type = $key['prodtype'];
		$easeofinstallation = $key['easeofinstallation'];
		$virtual = $key['virtual'];
		$currency = $key['currency'];
		$records = array('description'=>$description,'stockcode'=>$stock_code,'manufname'=>$manufacture,'nettprice'=>$net_price,'grossprice'=>$gross_price,'unit'=>$unit,'prodclass'=>$product_class,'prodtype'=>$product_type,'easeofinstallation'=>$easeofinstallation,'virtual'=>$virtual,'currency'=>$currency);
		$get_exitstence = $this->ixcg_pending_import_m->get_it($records);
		if($get_exitstence == 1)
			{
				
				$all_data[] = $records;
			
			}	
			}
	
	
		$data['all_import_data'] = $all_data;
		$this->load->view('ixcg_pending_import',$data);
	}

	public function get_insert_ixcg()
	{
		$this->load->model('ixcg_pending_import_m');
		$description = $this->input->post('product_description');
		$stock_code = $this->input->post('stock_code');
		$manufracture = $this->input->post('manufacture');
		$net_price = $this->input->post('net_price');
		$gross_price = $this->input->post('gross_price');
		$unit = $this->input->post('unit');
		$product_class = $this->input->post('product_class');
		$product_type = $this->input->post('product_type');
		$virtual = $this->input->post('virtual');
		$currency = $this->input->post('currency');
		$records = array('product_description'=>$description,'stock_code'=>$stock_code,'manufacture'=>$manufracture ,'net_price'=>$net_price , 'gross_price'=>$gross_price,'unit'=>$unit,'product_class'=>$product_class,'product_type'=>$product_type,'virtual'=>$virtual,'currency'=>$currency);

		$insert_ixcg_product = $this->ixcg_pending_import_m->ixcg_import($records);
		if($insert_ixcg_product)
		{
			$this->session->set_flashdata("success", "Product Imported Succesfully");
			redirect('ixcg_pending_import');
		}
		else
		{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('ixcg_pending_import');
		}
	}

}

