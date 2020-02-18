<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Email Template of ProtectBox
 *
 * @author Sujit
 */
 

 
class Invoice_template {
	

	public function get_proper_invoice($antivirus_invoice_data){
		
		$message = '<table style=" border:1px solid black;">
	  <tr >
		<th style=" border:1px solid black;">Order Date</th>
		<th style=" border:1px solid black;">Product Name</th>
		<th style=" border:1px solid black;">Product Price</th>
	  </tr>';
	foreach($antivirus_invoice_data as $key){
	 $message.= '<tr >
		<td style=" border:1px solid black;">'.$key['order_date'].'</td>
		<td style=" border:1px solid black;">'.$key['product'].'</td>
		<td style=" border:1px solid black;">'.$key['price'].'</td>
	  </tr>';
	}
	
	$message.'</table>';
	return $message;
	}

	
}