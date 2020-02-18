<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emailreader extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

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
		$this->load->library('excel');
     }


	public function index(){
		
		$this->load->model('emailreader_m');
		$res = $this->emailreader_m->is_exist_email_sync();
		
		foreach($res as $data){
			$this->EmailAttachementReader($data['conn_id']);
			
		}
		die;  
		}

		/**********READ EMAIL ATTACHEMENTS*******************/
	public function EmailAttachementReader($conn_id)
	
		{
			ini_set('max_execution_time', 0);  
           ini_set("memory_limit", "5120M");
		   set_time_limit(3000);	
 //log_message('debug', 'log print dddddddddddddddddddddddddddd');die;		   
			 $conn_id = $conn_id;
			 log_message('debug', 'log print dddddddddddddddddddddddddddd');
			// print_r($conn_id);die('yes');
			 $this->load->model('emailreader_m');
			
			$data=$this->emailreader_m->ftpConnection($conn_id,$connection_type ='email_reader');
			$seller_id=$data[0]['seller_id'];
			$supplier_email=$data[0]['supplier_email'];
			$subject=$data[0]['subject'];
			
			//die('no');  
			
		
		/* connect to gmail with your credentials */
		//$hostname = '{imap.gmail.com:993/imap/ssl}INBOX';
		//$username = 'himadrimajumder8@gmail.com';
		//$password = 'H2441139BB!'; 
		//$hostname = '{sg2plcpnl0170.prod.sin2.secureserver.net:993/imap/ssl}INBOX';
		//$username = 'vinod@bailiwickstudioz.com';
		//$password = 'Vinod@12345';
		$username = 'team@protectbox.com';
		$password = '386yr#q&2j';
		$hostname ='{outlook.office365.com:993/imap/ssl}INBOX';

		// * try to connect */
		$inbox = imap_open($hostname, $username, $password) or die('Cannot connect to Gmail: ' . imap_last_error());

		/* grab emails */
		//$supplier_email="keshav.mtl@gmail.com";
		//$subject ="product list update";
		$emails = imap_search($inbox, 'FROM "'.$supplier_email.'" SUBJECT "'.$subject.'"UNSEEN'); 
		//$emails = imap_search($inbox, 'FROM "'.$supplier_email.'" SUBJECT "'.$subject.'"'); 
		 //$emails = imap_search($inbox,'FROM "'.$supplier_email.'"');
		
     		
		// $emails = imap_search($inbox,'FROM "'.$supplier_email.'"');
		 if($emails)
		 {
			$count = count($emails);
		 }else{
			 
			 echo "No Records Found";die;
		 }
		//print_r($emails);die; 
		/* if emails are returned, cycle through each... */

		// $emails = imap_search($inbox,'ALL');
	
		/* useful only if the above search is set to 'ALL' */
		$max_emails = 1;
		/* if any emails found, iterate through each email */
		if ($emails)
			{
			$count = 1;
			/* put the newest emails on top */
			rsort($emails);
			/* for every email... */
			foreach($emails as $email_number)
				{ 
				//$email_number =25;     
				/* get information specific to this email */
				$overview = imap_fetch_overview($inbox, $email_number, FT_UID);
				/* get mail message, not actually used here.
				Refer to http://php.net/manual/en/function.imap-fetchbody.php
				for details on the third parameter.
				*/
				$message = imap_fetchbody($inbox, $email_number, 2);
				/* get mail structure */
				$structure = imap_fetchstructure($inbox, $email_number);
				$attachments = array();
				//print_r($structure);die;
				/* if any attachments found... */
				if (isset($structure->parts) && count($structure->parts))
					{
					for ($i = 0; $i < count($structure->parts); $i++)
						{
						$attachments[$i] = array(
							'is_attachment' => false,
							'filename' => '',
							'name' => '',
							'attachment' => ''
						);
						if ($structure->parts[$i]->ifdparameters)
							{
							foreach($structure->parts[$i]->dparameters as $object)
								{
								if (strtolower($object->attribute) == 'filename')
									{
									$attachments[$i]['is_attachment'] = true;
									$attachments[$i]['filename'] = $object->value;
									}
								}
							}

						if ($structure->parts[$i]->ifparameters)
							{
							foreach($structure->parts[$i]->parameters as $object)
								{
								if (strtolower($object->attribute) == 'name')
									{
									$attachments[$i]['is_attachment'] = true;
									$attachments[$i]['name'] = $object->value;
									}
								}
							}

						if ($attachments[$i]['is_attachment'])
							{
							$attachments[$i]['attachment'] = imap_fetchbody($inbox, $email_number, $i + 1);
							/* 3 = BASE64 encoding */
							if ($structure->parts[$i]->encoding == 3)
								{
								$attachments[$i]['attachment'] = base64_decode($attachments[$i]['attachment']);
								}

							/* 4 = QUOTED-PRINTABLE encoding */
							elseif ($structure->parts[$i]->encoding == 4)
								{
								$attachments[$i]['attachment'] = quoted_printable_decode($attachments[$i]['attachment']);
								}
							}
						}
					}

				/// echo '<pre>';print_r($attachments);die;

				/* iterate through each attachment and save it */
				$i = 0;
				foreach($attachments as $attachment)
					{ //echo $i;
					if ($i != 0)
						{

						// echo 'path=>'.$log="uploads/" . $email_number . "-" . $filename."w+".'<br />';

						if ($attachment['is_attachment'] == 1)
							{
							$filename = $attachment['name'];
							if (empty($filename)) $filename = $attachment['filename'];
							if (empty($filename)) $filename = time() . ".xlsx";
							/* prefix the email number to the filename in case two emails
							* have the attachment with the same file name.
							*/

						   $fname = "bailiwick/protectbox/seller/" . $seller_id . "/" . $filename;
							
							$fp = fopen("./bailiwick/protectbox/seller/" . $seller_id . "/" . $filename, "w+");
						
							$dt = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
		
							fwrite($fp, $attachment['attachment']);
							fclose($fp);
							if($dt == 'zip')
							{
									$file = $fname;
									
									$path = pathinfo(realpath($file), PATHINFO_DIRNAME);
								
									$zip = new ZipArchive;
									$res = $zip->open($file);
									if ($res === TRUE) {
										 
									  
									  for($i = 0; $i < $zip->numFiles; $i++) {
											 $newfname = $zip->getNameIndex($i);
									}
									  // extract it to the path we determined above
									  $zip->extractTo($path);
									  $zip->close();
									 // echo "WOOT! $file extracted to $path";
									
										$newfname = "seller/" . $seller_id . "/" .$newfname;

										$this->texttoexcel($seller_id,$newfname);
									} else {
									  echo "Doh! I couldn't open $file";
									}
								
							}else{
								
							}
						
							}
						}

					$i++;
					}

				if ($count++ >= $max_emails) break;
				}
			}

		/* close the connection */
		imap_close($inbox);


		// echo "Done";

		}

		/**********Text to excel*******************/
		public function texttoexcel($seller_id,$filename){
		ini_set('max_execution_time', 0); 
        ini_set("memory_limit", "5120M"); 
		
		//$seller_id = 52;
		//$filename = "seller/52/Enhanced-GB - Copy.txt";		
		log_message('debug', 'stp 1 ['.date("h:i:sa").']');
		 $this->load->model('emailreader_m');
		
		log_message('debug', 'before count ['.date("h:i:sa").']');						
		$total_rw_count = $this->load_tabbed_file_count($filename);
		log_message('debug', 'After count ['.date("h:i:sa").']');
			//$total_rw_count = count($exceldata); 
			$num = $total_rw_count;
			$div = 10000;
			$rem = $num%$div;
			$num = $num-$rem;
			$count_loop = $num/$div;
			if($rem>0){
			 $count_loop = $count_loop+1;
			}
			//echo "cnt".$count_loop;die;

			$objPHPExcel = new PHPExcel();
			$fileType = 'Excel5';
			for($i=1; $i<=$count_loop;$i++){
				
				$date = date("d_m_Y");
				$date = $date.'email_'.$i;
				$fileName = "seller/".$seller_id."/".$date.".xls"; 
				$is_file = $this->emailreader_m->is_excel_exist($seller_id,$fileName);	
				
				$objPHPExcel = new PHPExcel(); 
				log_message('debug', 'stp 1 ['.date("h:i:sa").']');
				log_message('debug', 'stp 1 ['.$i.']');
				$startlim = ($div*$i)-$div+1;
				$endlim = $div*$i;
				log_message('debug', 'stp 1 mem before load txt ['. memory_get_peak_usage(false).']');
				$reloaded_array = $this->load_tabbed_file($filename,true,$startlim,$endlim);
				
				
				
				log_message('debug', 'stp 1 mem after load txt ['. memory_get_peak_usage(false).']');
				log_message('debug', 'after data load ['.date("h:i:sa").']');
			    $exceldata_batch = array_values($reloaded_array);
				//$exceldata_batch = array_slice($exceldata,0,15000);
				//$exceldata =  array_slice($exceldata,15001);
				log_message('debug', 'stp 1 ['.$endlim.']');
				$new_file = "bailiwick/protectbox/".$fileName;
		 	if (file_exists($new_file))
				{
				
				$objReader = PHPExcel_IOFactory::createReader($fileType);
				//$objPHPExcel = $objReader->load($fileName);
				$worksheetCount = 0;
				//echo $row = $objPHPExcel->getActiveSheet($worksheetCount)->getHighestRow()+1;
				}
			  else 
				{
					$worksheetCount = 0;
				}
			
			//die('yes'); 
			$objPHPExcel->createSheet();
		
			// Add some data to the second sheet, resembling some different data types

			$objPHPExcel->setActiveSheetIndex($worksheetCount);
			//die('Yes');
			// $objPHPExcel->getActiveSheet()->setCellValue('A1', 'More data this thing testing data');
			log_message('debug', 'stp 1 mem before laarray ['. memory_get_peak_usage(false).']');
			log_message('debug', 'before array ['.date("h:i:sa").']');
			$objPHPExcel->getActiveSheet()->fromArray($exceldata_batch, null, 'A1'); 
			log_message('debug', 'stp 1 mem after array txt ['. memory_get_peak_usage(false).']');
			log_message('debug', 'after array ['.date("h:i:sa").']');
			$objPHPExcel->getActiveSheet()->setTitle('Sheet' . $worksheetCount);
			$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
			log_message('debug', 'after createwriter ['.date("h:i:sa").']');
			$objWriter->save($new_file);
 			$objPHPExcel->disconnectWorksheets();
			$objPHPExcel->garbageCollect();
			unset($objPHPExcel); 
			log_message('debug', 'stp 1 mem after save ['. memory_get_peak_usage(false).']');
			log_message('debug', 'after save ['.date("h:i:sa").']');
			if(!$is_file){
				
	 
								$mdata = array(
									'seller_id' =>$seller_id ,
									'file_name' =>$fileName,
									'file_path' =>$fileName,
									'export_type' =>3,
									'status' =>0
								);
							
					
								$this->db->insert('pb_excel_import_history',$mdata);
								}
				$data_rec= array('filename'=>$fileName,'seller_id'=>$seller_id,'imp_method'=>3,'status'=>0);
				$this->db->insert('sync_process_status',$data_rec);	 		
			}
			//$worksheetCount++;	
	}

		public  function load_tabbed_file_count($filepath){
		 ini_set('max_execution_time', 0); 
         ini_set("memory_limit", "2048M");
			$array = array();
				$new_file = "bailiwick/protectbox/".$filepath;
				
				if (!file_exists($new_file)){ return $array; }
				$content = file($new_file);
			    $cnt = count($content);
				
				$content = 0;
				return $cnt;

			}

public  function load_tabbed_file($filepath, $load_keys=false,$start,$endlim){
		 ini_set('max_execution_time', 0); 
         ini_set("memory_limit", "2048M");
		 $new_file = "bailiwick/protectbox/".$filepath;
		
		$array = array();
    if (!file_exists($new_file)){ return $array; }
    $content = file($new_file);
	 if (trim($content[0]) != ''){
            $line = explode("\t", trim($content[0]));
			$line = array_map("utf8_encode", $line);
			$array[0] = $line; 
        }
		$i =1;
    for ($x=$start; $x <= $endlim; $x++){
        if (trim($content[$x]) != ''){
            $line = explode("\t", trim($content[$x]));
			
			$line = array_map("utf8_encode", $line);
			$array[$i] = $line; 
			$i++;
        }
    }
	$content ="";
    return $array; 

}



	}

   

?>