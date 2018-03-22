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

$route['default_controller'] = "frontend/login/index";
$route['404_override'] 		 = 'custom_404';
$route['custom_404'] 		 = 'custom_404';


$route['dashboard']			 = "frontend/dashboard/index";
$route['customnet']			 = "frontend/home/customnet";
$route['addnewitem/(:any)']	 = "frontend/home/addNewItem/$1";
$route['editquote/(:any)']	 = "frontend/home/editquoteitem/$1";
$route['managequote']		 = "frontend/home/managequote"; 
$route['managequote/(:any)'] = "frontend/home/FromCRMindex/$1";
$route['viewquote/(:any)']	 = "frontend/home/viewquote/$1";
//$route['lilypad'] = "frontend/home/lilypad";

/* CRM Section (Customer) */
$route['customers']			 	= "frontend/crm/index/";
$route['addCustomer']		 	= "frontend/crm/addCustomerInfo/";
$route['editCustomer/(:any)']	= "frontend/crm/editCustomerInfo/$1";
/* CRM Section (Contact) */
$route['contacts/(:any)']		= "frontend/crm/contacts/$1";
$route['contacts']				= "frontend/crm/contacts/";
$route['addContact']			= "frontend/crm/addContact/";
$route['editContact/(:any)']	= "frontend/crm/editContact/$1";
$route['cloneContact/(:any)']	= "frontend/crm/cloneContact/$1";
/* CRM Section (Interaction) */
$route['interactions/(:any)']	= "frontend/crm/manageInteractions/$1";

/* InventorY Section */
$route['viewitems']			= "frontend/inventory/index";
$route['specifications']	= "frontend/inventory/specifications";
$route['inventories/(:any)']= "frontend/inventory/inventories/$1";
$route['additem']	= "frontend/inventory/additem";
$route['edititem/(:any)']   = "frontend/inventory/edititem/$1";
$route['itemlist'] = "frontend/inventory/itemlist";
$route['itemVendorsInfo/(:any)']= "frontend/inventory/itemVendorsInfo/$1";


/* Shippment Section */
$route['upsfedex']	= "frontend/shipment/index";
$route['others']	= "frontend/shipment/others";

/* Send to section */
$route['sendproposal/(:any)']	= "frontend/send/index/$1";
$route['sendproposalprocess']	= "frontend/send/sendproposal";

/* Order Section */
$route['orders']	= "frontend/orders/index";
$route['orders/(:any)']	= "frontend/orders/FromCRMindex/$1";
$route['sendOrder/(:any)']	= "frontend/orders/sendOrder/$1";
$route['sendTrackingNo']		= "frontend/orders/sendTrackingNo/";
$route['salesorders/(:any)']	= "frontend/orders/salesorders/$1";
$route['reorders']	= "frontend/orders/reorders";
$route['salesorderdocuments/(:any)']	= "frontend/orders/salesorderdocuments/$1";

//$route['reorders']		= "frontend/orders/reorders";
$route['purchaseOrder']	= "frontend/orders/purchase";

/* ISO NCR Section */
$route['iso']	= "frontend/iso/index";
$route['createIso']	= "frontend/iso/createIso";
$route['createIsoNew']	= "frontend/iso/createIsoNew";
$route['editIso/(:any)']	= "frontend/iso/editIso/$1";

/* Reports Section */
$route['reorder']	= "frontend/reports/index";
$route['summary']	= "frontend/reports/summary";
$route['special-purchasing']	= "frontend/reports/specialpurchasing";
$route['transferwarehouses']	= "frontend/reports/transferwarehouses";
$route['psninventories']	= "frontend/reports/psninventories";
$route['inventorystockout']	= "frontend/reports/inventorystockout";
$route['wip_transfer']		= "frontend/reports/wip_transfer";
$route['varifyshipping']	= "frontend/reports/varifyshipping";
$route['pendingpayment']	= "frontend/reports/pendingpayment";

$route['login'] = "frontend/login/index";
$route['forgotpass'] = "frontend/login/forgotPassword";
$route['reset'] = "frontend/reset/index";
$route['logout'] = "frontend/logout/index";
$route['download/(:any)'] = "frontend/home/download/$1";
/*
 * Export Excel Sheet */
$route['export/(:any)'] = "frontend/excel/export/$1";
$route['editExport/(:any)'] = "frontend/excel/editExport/$1";

/* Netform Allowance Section */
$route['netformallowances']	= "frontend/netformallowance/index";
$route['createupdatenetformallowance']	= "frontend/netformallowance/createUpdateNetformAllowance";

/* Labor Activity Rate */
$route['laboractivityrate']	= "frontend/netformallowance/laboractivityrate";

/** User Section **/
$route['users'] = "frontend/users/index";
$route['groups'] = "frontend/users/groups";
$route['editGroup/(:any)']	= "frontend/users/editGroup/$1";
$route['adduser']	= "frontend/users/adduser";
$route['edituser/(:any)']	= "frontend/users/edituser/$1";
/** User Section End **/
$route['comming']	= "frontend/comming/index";
/** Comming Soon Page URL **/
$route['products'] = "frontend/products/index";
$route['addoption'] = "frontend/products/addoption";
$route['editoption/(:any)'] = "frontend/products/editoption/$1";
/** Product Section	**/
$route['translate_uri_dashes'] = FALSE;






/*Survey*/
$route['survey'] = "frontend/survey/survey";
$route['surveyIndex'] = "frontend/survey/surveyIndex";
$route['createSurvey'] = "frontend/survey/createSurvey";
$route['createSurvey/(:any)'] = "frontend/survey/createSurvey/$1";
$route['createSurvey/(:any)/(:any)'] = "frontend/survey/createSurvey/$1/$2";

$route['surveyIUpdate/(:any)'] = "frontend/survey/surveyIUpdate/$1";
$route['surveyIUpdate/(:any)/(:any)'] = "frontend/survey/surveyIUpdate/$1/$2";
$route['surveyEdit/(:any)'] = "frontend/survey/surveyEdit/$1";
$route['surveyEdit/(:any)/(:any)'] = "frontend/survey/surveyEdit/$1/$2";

$route['surveyAdd/(:any)'] = "frontend/survey/surveyAdd/$1";
$route['surveyView/(:any)'] = "frontend/survey/surveyView/$1";

/*Test Report*/

$route['TR']	= "frontend/TReport/index";

$route['createTR']	= "frontend/TReport/createTR";

$route['replicateTR/(:any)']	= "frontend/TReport/replicateTR/$1";
$route['treport/(:any)'] = "frontend/TReport/editTR/$1";
$route['treport/download/(:any)'] = "frontend/TReport/generateReport/$1";

/*HR*/
$route['HR']	= "frontend/HR/index";
$route['addHR']	= "frontend/HR/addHR";
$route['sendmailHR'] = "frontend/HR/sendmailHR";
$route['hredit/(:any)'] = "frontend/HR/editHR/$1";
$route['hr/getletter/(:any)'] = "frontend/HR/getLetter/$1";

