<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['payment_process/(:num)'] = "payment_process";
$route['service_details/(:num)'] = "service_details";
$route['edit_admin_service_details/(:num)'] = "edit_admin_service_details";
$route['edit_service_details/(:num)/(:num)'] = "edit_service_details";
$route['sme_order/(:num)'] = "sme_order";
$route['sme_pending_order/(:num)'] = "sme_pending_order";
$route['edit_staff/(:num)'] = "edit_staff";
$route['paypal_order/(:num)'] = "paypal_order";
$route['thank_you/(:num)'] = "thank_you";
$route['payment_failed/(:num)'] = "payment_failed";
$route['edit_smb/(:num)'] = "edit_smb";
$route['edit_supplier/(:num)'] = "edit_supplier";
$route['smb_edit_orders/(:num)'] = "smb_edit_orders";
$route['edit_ixcg_service/(:num)'] = "edit_ixcg_service";
$route['view_ixcg_services/(:num)'] = "view_ixcg_services";
$route['stripe_payment/(:num)'] = "stripe_payment";
$route['paypal/(:num)'] = "paypal";
$route['order_process/(:num)'] = "order_process";
$route['manage_delegates/(:num)'] = "manage_delegates";
$route['edit_delegate/(:num)'] = "edit_delegate";
$route['invoice/(:num)'] = "invoice";
$route['my_order/(:num)'] = "my_order";
$route['pending_refund_request/(:num)'] = "pending_refund_request"; 
$route['paypal_payment_success/(:num)'] = "paypal_payment_success";
$route['view_smb_questionnaire/(:num)'] = "view_smb_questionnaire";
$route['order_details/(:num)'] = "order_details";
$route['coupons/del/(:num)'] = "coupons/del/";
$route['sales/sales_details/(:num)'] = "sales/sales_details/";
$route['sup_payment_details/(:num)'] = "sup_payment_details";
$route['register/(:num)'] = "register";
$route['delegate_questionaire/(:num)'] = "delegate_questionaire";
$route['delegate_questionaire/add_info/(:num)'] = "delegate_questionaire/add_info/";
$route['delegate_questionaire_tech_info/(:num)'] = "delegate_questionaire_tech_info";
$route['delegate_questionaire_tech_info/add_data/(:num)'] = "delegate_questionaire_tech_info/add_data/";
$route['delegate_questionaire_nontech_info/(:num)'] = "delegate_questionaire_nontech_info";
$route['delegate_questionaire_nontech_info/add_questioniare_non_tech/(:num)'] = "delegate_questionaire_nontech_info/add_questioniare_non_tech/";
$route['delegate_questionaire_budget/(:num)'] = "delegate_questionaire_budget";
$route['delegate_questionaire_budget/add_questioniare_budget/(:num)'] = "delegate_questionaire_budget/add_questioniare_budget/";
$route['view_all_services/(:num)'] = "view_all_services";
$route['view_sme/(:num)'] = "view_sme";
$route['smb_india/(:num)'] = "smb_india";
$route['admin_dashboard/(:num)'] = "admin_dashboard";
$route['order_techdata/(:num)'] = "order_techdata";

$route['spreadsheet'] = 'PhpspreadsheetController'; 
$route['spreadsheet/import'] = 'PhpspreadsheetController/import';
$route['spreadsheet/export'] = 'PhpspreadsheetController/export';

$route['payment_process_service/(:num)'] = "payment_process_service";

