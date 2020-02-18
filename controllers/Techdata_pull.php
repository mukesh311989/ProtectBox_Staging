<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Techdata_pull extends CI_Controller {

	public function index()
	{
		$this->load->model('techdata_pull_m');
	    $data['fetch_uk_scrap_number'] = $this->techdata_pull_m->fetch_uk_scrap();
		echo $data['fetch_uk_scrap_number'];
	}
	
}