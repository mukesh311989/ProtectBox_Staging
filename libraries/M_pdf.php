<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

//require_once __DIR__ . '/vendor/tecnickcom/tcpdf/vendor/autoload.php';
class m_pdf {

	function index()
    {
        $CI = & get_instance();
        log_message('Debug', 'mPDF class is loaded.');
    }
 
    function load($param=NULL)
    {
        include_once APPPATH.'/vendor/tecnickcom/tcpdf/vendor/autoload.php';
         
        if ($param == NULL)
        {
            $param = '"en-GB-x","A4","","",10,10,10,10,6,3';          		
        }
         
        //return new mPDF($param);
        return new \Mpdf\Mpdf();
    }
}