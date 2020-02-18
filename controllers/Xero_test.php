<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Xero_test extends CI_Controller {

	public function __construct() { 
		parent::__construct(); 
	
		$this->load->helper('form');
		
    }
     
	public function index()
	{
			define ( 'BASE_PATH', dirname(__FILE__) );
			define ( "XRO_APP_TYPE", "Private" );
			define ( "OAUTH_CALLBACK", "oob" );
			$useragent = "portme_private";

			$signatures = array (
					'consumer_key' => 'QXRV28OE8RYFUVJNEEYGTJNLGSGETY',
					'shared_secret' => 'WE4IYKSYCR0NEWOHXDTP1MXOBPKTV6',
					// API versions
					'core_version' => '2.0',
					'payroll_version' => '1.0',
					'file_version' => '1.0' 
			);

			if (XRO_APP_TYPE == "Private" || XRO_APP_TYPE == "Partner") {
				$signatures ['rsa_private_key'] = BASE_PATH . '/certs/privatekey.pem';
				$signatures ['rsa_public_key'] = BASE_PATH . '/certs/publickey.cer';
			}

			$XeroOAuth = new XeroOAuth ( array_merge ( array (
					'application_type' => XRO_APP_TYPE,
					'oauth_callback' => OAUTH_CALLBACK,
					'user_agent' => $useragent 
			), $signatures ) );

			$initialCheck = $XeroOAuth->diagnostics ();
			$checkErrors = count ( $initialCheck );
			if ($checkErrors > 0) {
				// you could handle any config errors here, or keep on truckin if you like to live dangerously
				foreach ( $initialCheck as $check ) {
					echo 'Error: ' . $check . PHP_EOL;
				}
			} 
			 else {
	$session = persistSession ( array (
			'oauth_token' => $XeroOAuth->config ['consumer_key'],
			'oauth_token_secret' => $XeroOAuth->config ['shared_secret'],
			'oauth_session_handle' => '' 
	) );
	$oauthSession = retrieveSession ();
	
	if (isset ( $oauthSession ['oauth_token'] )) {
		$XeroOAuth->config ['access_token'] = $oauthSession ['oauth_token'];
		$XeroOAuth->config ['access_token_secret'] = $oauthSession ['oauth_token_secret'];

       $XeroOAuth->config['session_handle'] = $oauthSession['oauth_session_handle'];
		
		//require_once(BASE_PATH .'/xero/tests.php');
		
		$dt  = date('Y-m-d');
		$total_price = "100";
		 $xml = "<BankTransactions>
                     <BankTransaction>
                     <Type>SPEND</Type>
                     <Contact>
                       <Name>TechData</Name>
                     </Contact>
                     <Date>".$dt."T00:00:00</Date>
                     <LineItems>
                       <LineItem>
                         <Description>Yearly Bank &amp; Account Fee</Description>
                         <Quantity>1.0000</Quantity>
                         <UnitAmount>".$total_price."</UnitAmount>
                         <AccountCode>620</AccountCode>
                      </LineItem>
                    </LineItems>
                    <BankAccount>
                      <Code>12E976</Code>
                    </BankAccount>
                  </BankTransaction>
                </BankTransactions>";
           $response = $XeroOAuth->request('PUT', $XeroOAuth->url('BankTransactions', 'core'), array(), $xml);
		 print_r($response);
		 exit;
           if ($XeroOAuth->response['code'] == 200) {
               $banktransactions = $XeroOAuth->parseResponse($XeroOAuth->response['response'], $XeroOAuth->response['format']);
               echo "There are " . count($banktransactions->BankTransactions[0]). " successful bank transaction(s) created in this Xero organisation.";
			   //$this->mpayments->insert_xero_transaction($insert_order,$total_service,$supplier_id,$batch_id,$total_price,$val);
               if (count($banktransactions->BankTransactions[0])>0) {
                   echo "The first one is: </br>";
                   //pr($banktransactions->BankTransactions[0]->BankTransaction);
               }
           } else {
               outputError($XeroOAuth);
           }
		   
		

		
	}
	
	//testLinks ();
}
	}


}