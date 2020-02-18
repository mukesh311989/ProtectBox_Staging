<?php defined('BASEPATH') OR exit('No direct script access allowed');
class email_details {
	$config = array(
			'protocol' => 'off', // 'mail', 'sendmail', or 'smtp'
			'smtp_host' => 'smtp.gmail.com',
			'smtp_port' => 587,
			'crlf' => "\r\n",
			'newline' => "\r\n",
			'smtp_user' => 'noreply@protectbox.com',
			'smtp_pass' => 'Samadder5#',
			'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
			'mailtype' => 'html', //plaintext 'text' mails or 'html'
			'smtp_timeout' => '4', //in seconds
			'charset' => 'UTF-8',
			'newline' => "\r\n",
			'wordwrap' => TRUE
		);
	}
?>