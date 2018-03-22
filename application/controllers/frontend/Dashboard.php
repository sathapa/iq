<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Quote Web  Login Controller
 *
 * @package		Quote Web 
 * @subpackage	Controller
 * @category	Controller
 * @author		(Team TIS)
 * @Created on	08-03-2017
 * */
class Dashboard extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('frontend/Login_model');
		$this->load->model('frontend/Main_model');
		$this->load->library('form_validation');
		$loggedIn		= $this->Login_model->loggedInUser();
		if(empty($loggedIn)){
			redirect('login');
		}
		$this->userInfo	= $loggedIn;
		$this->email	= $this->session->userdata('frontendUserEmail');
		$this->user_id	= $this->session->userdata('frontendUserEmail');
		$this->logged_id	= $this->session->userdata('frontendUserId');
		$this->user_group	= $this->session->userdata('frontendUserGroup');
		$groupDetails		= getUserGroupDetils($this->user_group);
		$this->group_permissions		= !empty($groupDetails->permission) ? $groupDetails->permission : '';
		$this->Management = 'Dashboard';
	}
	/**
	 * @Function	-: index()
	 * @Description	-: This function used for load the dashboard page
	 * @Param		-: No Parameter
	 * @created		-: 03-05-2017
	 * @return		-: json
	 * */
	function indexOld(){
		$data['js']		= array('jquery-min','jquery-ui','jquery.mCustomScrollbar','jquery.dataTables.min','jquery.selectBoxIt','highcharts','exporting','bootstrap'); 
		$data['css']	= array('common','dashboard','jquery-ui','jquery.mCustomScrollbar','highchart','font-awesome.min','bootstrap');
		$data['title']	= 'dashboard';
		$pppt	= getRevenueByMonth();
	
		$amount = array();$febAmount = array();$marAmount = array();$aprAmount = array();
		$mayAmount = array();$junAmount = array();$julAmount = array();$augAmount = array();
		$sepAmount = array();$octAmount = array();$novAmount = array();$decAmount = array();
		foreach($pppt as $ppp) {
			if($ppp->month=='Jan'){$index = bank_exists($ppp->division, $amount);if ($index < 0) {$amount[] = $ppp;}else {$amount[$index]->revenue +=  $ppp->revenue;}$divisions[]	= $ppp->division;}
			if($ppp->month=='Feb'){ $index = bank_exists($ppp->division, $febAmount);if ($index < 0) {$febAmount[] = $ppp;}else {$febAmount[$index]->revenue +=  $ppp->revenue;}}
			if($ppp->month=='Mar'){ $index = bank_exists($ppp->division, $marAmount);if ($index < 0) { $marAmount[] = $ppp; } else { $marAmount[$index]->revenue +=  $ppp->revenue;}}
			if($ppp->month=='Apr'){ $index = bank_exists($ppp->division, $aprAmount);if ($index < 0) { $aprAmount[] = $ppp;}else {$aprAmount[$index]->revenue +=  $ppp->revenue;}}
			if($ppp->month=='May'){ $index = bank_exists($ppp->division, $mayAmount);if ($index < 0) { $mayAmount[] = $ppp;}else {$mayAmount[$index]->revenue +=  $ppp->revenue;}}
			if($ppp->month=='Jun'){ $index = bank_exists($ppp->division, $junAmount);if ($index < 0) { $junAmount[] = $ppp;}else {$junAmount[$index]->revenue +=  $ppp->revenue;}}
			if($ppp->month=='Jul'){ $index = bank_exists($ppp->division, $julAmount);if ($index < 0) { $julAmount[] = $ppp;}else {$julAmount[$index]->revenue +=  $ppp->revenue;}}
			if($ppp->month=='Aug'){ $index = bank_exists($ppp->division, $augAmount);if ($index < 0) { $augAmount[] = $ppp;}else {$augAmount[$index]->revenue +=  $ppp->revenue;}}
			if($ppp->month=='Sep'){ $index = bank_exists($ppp->division, $sepAmount);if ($index < 0) { $sepAmount[] = $ppp;}else {$sepAmount[$index]->revenue +=  $ppp->revenue;}}
			if($ppp->month=='Oct'){ $index = bank_exists($ppp->division, $octAmount);if ($index < 0) { $octAmount[] = $ppp;}else {$octAmount[$index]->revenue +=  $ppp->revenue;}}
			if($ppp->month=='Nov'){ $index = bank_exists($ppp->division, $novAmount);if ($index < 0) { $novAmount[] = $ppp;}else {$novAmount[$index]->revenue +=  $ppp->revenue;}}
			if($ppp->month=='Dec'){ $index = bank_exists($ppp->division, $decAmount);if ($index < 0) { $decAmount[] = $ppp;}else {$decAmount[$index]->revenue +=  $ppp->revenue;}}
			
			$months[]	= $ppp->month;
		}
		$divisions	= array_unique($divisions);
		$months		= array_unique($months);
		$newMonths	= '';
		foreach($months as $month) {
			$m = date_parse($month);
			$newMonths[$m['month']] = $month;
		}
		ksort($newMonths);
		$janRevenue	= array_column($amount,'revenue');$febRevenue		= array_column($febAmount,'revenue');
		$marRevenue	= array_column($marAmount,'revenue');$aprRevenue	= array_column($aprAmount,'revenue');
		$mayRevenue	= array_column($mayAmount,'revenue');$junRevenue	= array_column($junAmount,'revenue');
		$julRevenue	= array_column($julAmount,'revenue');$augRevenue	= array_column($augAmount,'revenue');
		$sepRevenue	= array_column($sepAmount,'revenue');$octRevenue	= array_column($octAmount,'revenue');
		$novRevenue	= array_column($novAmount,'revenue');$decRevenue	= array_column($decAmount,'revenue');
		$pcl	= '';;
		if(!empty($divisions)){
			$iii=0; $zero = 0;
			foreach($divisions as $division){
				$bb		= '';
				if(!empty($janRevenue) && !empty($janRevenue[$iii])){
					$bb	.= $janRevenue[$iii].',';
				}
				if(!empty($febRevenue) && !empty($febRevenue[$iii])){
					$bb	.= $febRevenue[$iii].',';
				}
				if(!empty($marRevenue) && !empty($marRevenue[$iii])){
					$bb	.= $marRevenue[$iii].',';
				}
				if(!empty($aprRevenue) && !empty($aprRevenue[$iii])){
					$bb	.= $aprRevenue[$iii].',';
				}
				if(!empty($mayRevenue) && !empty($mayRevenue[$iii])){
					$bb	.= $mayRevenue[$iii].',';
				}
				if(!empty($junRevenue) && !empty($junRevenue[$iii])){
					$bb	.= $junRevenue[$iii].',';
				}
				if(!empty($julRevenue) && !empty($julRevenue[$iii])){
					$bb	.= $julRevenue[$iii].',';
				}
				if(!empty($augRevenue) && !empty($augRevenue[$iii])){
					$bb	.= $augRevenue[$iii].',';
				}
				if(!empty($sepRevenue) && !empty($sepRevenue[$iii])){
					$bb	.= $sepRevenue[$iii].',';
				}
				if(!empty($octRevenue) && !empty($octRevenue[$iii])){
					$bb	.= $octRevenue[$iii].',';
				}
				if(!empty($novRevenue) && !empty($novRevenue[$iii])){
					$bb	.= $novRevenue[$iii].',';
				}
				if(!empty($decRevenue) && !empty($decRevenue[$iii])){
					$bb	.= $decRevenue[$iii].',';
				}
				$pcl[]	= "{name: '".$division."',
							data: [$bb],
							tack: 'male'
							}";
				$iii++;
			}
		}
		$pr	= implode(",",$pcl);
		$data['pr']	= $pr;
		//dump($pr);die;
		$months		= !empty($newMonths) ? implode("','",$newMonths) : '';
		$data['months']	= "'".$months."'";
		//dump($data['months']);die;
		$data['divisions']	= $divisions;
		$salespersonIds	= salespersonList('','salespersonid');
		if(array_key_exists($this->logged_id,$salespersonIds)){
			$dashboard		= dashboardData($this->logged_id);
			$quoteDetailsOf	= $this->logged_id;
		}else{
			$dashboard		= dashboardData('1351');
			$quoteDetailsOf	= '1351';
		}
		$data['quoteInfo']	= $dashboard;
		$data['quoteDetailsOf']	= $quoteDetailsOf;
		//$databoard		= array_column($dashboard,'quote_status');
		//dump($dashboard);die;
		$this->load->view('frontend/dashboard', $data);
	}
	
	function index(){
		$data['js']		= array('jquery-min','jquery-ui','jquery.mCustomScrollbar','jquery.dataTables.min','jquery.selectBoxIt','highcharts','exporting','bootstrap'); 
		$data['css']	= array('common','dashboard','jquery-ui','jquery.mCustomScrollbar','highchart','font-awesome.min','bootstrap');
		$data['title']	= 'dashboard';
		$pppt	= getRevenueByMonth();
		
		$allMonthAmount['Jan'] = array();$allMonthAmount['Feb'] = array();$allMonthAmount['Mar'] = array();$allMonthAmount['Apr'] = array();
		$allMonthAmount['May'] = array();$allMonthAmount['Jun'] = array();$allMonthAmount['Jul'] = array();$allMonthAmount['Aug'] = array();
		$allMonthAmount['Sep'] = array();$allMonthAmount['Oct'] = array();$allMonthAmount['Nov'] = array();$allMonthAmount['Dec'] = array();
		
		$allMonthDivision['Jan'] = array();$allMonthDivision['Feb'] = array();$allMonthDivision['Mar'] = array();$allMonthDivision['Apr'] = array();
		$allMonthDivision['May'] = array();$allMonthDivision['Jun'] = array();$allMonthDivision['Jul'] = array();$allMonthDivision['Aug'] = array();
		$allMonthDivision['Sep'] = array();$allMonthDivision['Oct'] = array();$allMonthDivision['Nov'] = array();$allMonthDivision['Dec'] = array();
		if(!empty($pppt)){
			foreach($pppt as $ppp) {
				if($ppp->month=='Jan'){$index = division($ppp->division, $allMonthAmount['Jan']);if ($index < 0) {$allMonthAmount['Jan'][] = $ppp;}else {$allMonthAmount['Jan'][$index]->revenue +=  $ppp->revenue;}$divisions[]	= $ppp->division;}
				if($ppp->month=='Feb'){ $index = division($ppp->division, $allMonthAmount['Feb']);if ($index < 0) {$allMonthAmount['Feb'][] = $ppp;}else {$allMonthAmount['Feb'][$index]->revenue +=  $ppp->revenue;}}
				if($ppp->month=='Mar'){ $index = division($ppp->division, $allMonthAmount['Mar']);if ($index < 0) { $allMonthAmount['Mar'][] = $ppp; } else {$allMonthAmount['Mar'][$index]->revenue +=  $ppp->revenue;}}
				if($ppp->month=='Apr'){ $index = division($ppp->division, $allMonthAmount['Apr']);if ($index < 0) { $allMonthAmount['Apr'][] = $ppp;}else {$allMonthAmount['Apr'][$index]->revenue +=  $ppp->revenue;}}
				if($ppp->month=='May'){ $index = division($ppp->division, $allMonthAmount['May']);if ($index < 0) { $allMonthAmount['May'][] = $ppp;}else {$allMonthAmount['May'][$index]->revenue +=  $ppp->revenue;}}
				if($ppp->month=='Jun'){ $index = division($ppp->division, $allMonthAmount['Jun']);if ($index < 0) { $allMonthAmount['Jun'][] = $ppp;}else {$allMonthAmount['Jun'][$index]->revenue +=  $ppp->revenue;}}
				if($ppp->month=='Jul'){ $index = division($ppp->division, $allMonthAmount['Jul']);if ($index < 0) { $allMonthAmount['Jul'][] = $ppp;}else {$allMonthAmount['Jul'][$index]->revenue +=  $ppp->revenue;}}
				if($ppp->month=='Aug'){ $index = division($ppp->division, $allMonthAmount['Aug']);if ($index < 0) { $allMonthAmount['Aug'][] = $ppp;}else {$allMonthAmount['Aug'][$index]->revenue +=  $ppp->revenue;}}
				if($ppp->month=='Sep'){ $index = division($ppp->division, $allMonthAmount['Sep']);if ($index < 0) { $allMonthAmount['Sep'][] = $ppp;}else {$allMonthAmount['Sep'][$index]->revenue +=  $ppp->revenue;}}
				if($ppp->month=='Oct'){ $index = division($ppp->division, $allMonthAmount['Oct']);if ($index < 0) { $allMonthAmount['Oct'][] = $ppp;}else {$allMonthAmount['Oct'][$index]->revenue +=  $ppp->revenue;}}
				if($ppp->month=='Nov'){ $index = division($ppp->division, $allMonthAmount['Nov']);if ($index < 0) { $allMonthAmount['Nov'][] = $ppp;}else {$allMonthAmount['Nov'][$index]->revenue +=  $ppp->revenue;}}
				if($ppp->month=='Dec'){ $index = division($ppp->division, $allMonthAmount['Dec']);if ($index < 0) { $allMonthAmount['Dec'][] = $ppp;}else {$allMonthAmount['Dec'][$index]->revenue +=  $ppp->revenue;}}
				
				$months[]	= $ppp->month;
			}
		}
		
		$divisions	= !empty($divisions) ? array_unique($divisions) : array();
		$months		= !empty($months) ? array_unique($months) : array();
		$newMonths	= array();
		
		foreach($months as $month) {
			$m = date_parse($month);
			$newMonths[$m['month']] = $month;
		}
		if(!empty($newMonths)){
			ksort($newMonths);
		}
		
		
		$allRevenue['Jan']	= array_column($allMonthAmount['Jan'],'revenue');$allRevenue['Feb']	= array_column($allMonthAmount['Feb'],'revenue');
		$allRevenue['Mar']	= array_column($allMonthAmount['Mar'],'revenue');$allRevenue['Apr']	= array_column($allMonthAmount['Apr'],'revenue');
		$allRevenue['May']	= array_column($allMonthAmount['May'],'revenue');$allRevenue['Jun']	= array_column($allMonthAmount['Jun'],'revenue');
		$allRevenue['Jul']	= array_column($allMonthAmount['Jul'],'revenue');$allRevenue['Aug']	= array_column($allMonthAmount['Aug'],'revenue');
		$allRevenue['Sep']	= array_column($allMonthAmount['Sep'],'revenue');$allRevenue['Oct']	= array_column($allMonthAmount['Oct'],'revenue');
		$allRevenue['Nov']	= array_column($allMonthAmount['Nov'],'revenue');$allRevenue['Dec']	= array_column($allMonthAmount['Dec'],'revenue');
		
		$allMonthDivision['Jan']	= array_column($allMonthAmount['Jan'],'division');$allMonthDivision['Feb']	= array_column($allMonthAmount['Feb'],'division');
		$allMonthDivision['Mar']	= array_column($allMonthAmount['Mar'],'division');$allMonthDivision['Apr']	= array_column($allMonthAmount['Apr'],'division');
		$allMonthDivision['May']	= array_column($allMonthAmount['May'],'division');$allMonthDivision['Jun']	= array_column($allMonthAmount['Jun'],'division');
		$allMonthDivision['Jul']	= array_column($allMonthAmount['Jul'],'division');$allMonthDivision['Aug']	= array_column($allMonthAmount['Aug'],'division');
		$allMonthDivision['Sep']	= array_column($allMonthAmount['Sep'],'division');$allMonthDivision['Oct']	= array_column($allMonthAmount['Oct'],'division');
		$allMonthDivision['Nov']	= array_column($allMonthAmount['Nov'],'division');$allMonthDivision['Dec']	= array_column($allMonthAmount['Dec'],'division');
		
		$pcl	= '';;
		
		$janDivi	= array();$febDivi	= array();$marDivi	= array();$aprDivi	= array();$mayDivi	= array();$junDivi	= array();
		$julDivi	= array();$augDivi	= array();$sepDivi	= array();$octDivi	= array();$novDivi	= array();$decDivi	= array();
		$j1	= 0;$j2	= 0;$j3	= 0;$j4	= 0;$j5	= 0;$j6	= 0;$j7	= 0;$j8	= 0;$j9	= 0;$j10= 0;$j11	= 0;$j12	= 0;
		if(!empty($divisions)){
			foreach($divisions as $division){
				if(in_array($division,$allMonthDivision['Jan'])){ $janDivi[]	= $allRevenue['Jan'][$j1]; $j1++;}else{$janDivi[]	= 0;}
				if(in_array($division,$allMonthDivision['Feb'])){ $febDivi[]	= $allRevenue['Feb'][$j2]; $j2++;}else{$febDivi[]	= 0;}
				if(in_array($division,$allMonthDivision['Mar'])){ $marDivi[]	= $allRevenue['Mar'][$j3]; $j3++;}else{$marDivi[]	= 0;}
				if(in_array($division,$allMonthDivision['Apr'])){ $aprDivi[]	= $allRevenue['Apr'][$j4]; $j4++;}else{$aprDivi[]	= 0;}
				if(in_array($division,$allMonthDivision['May'])){ $mayDivi[]	= $allRevenue['May'][$j5]; $j5++;}else{$mayDivi[]	= 0;}
				if(in_array($division,$allMonthDivision['Jun'])){ $junDivi[]	= $allRevenue['Jun'][$j6]; $j6++;}else{$junDivi[]	= 0;}
				if(in_array($division,$allMonthDivision['Jul'])){ $julDivi[]	= $allRevenue['Jul'][$j7]; $j7++;}else{$julDivi[]	= 0;}
				if(in_array($division,$allMonthDivision['Aug'])){ $augDivi[]	= $allRevenue['Aug'][$j8]; $j8++;}else{$augDivi[]	= 0;}
				if(in_array($division,$allMonthDivision['Sep'])){ $sepDivi[]	= $allRevenue['Sep'][$j9]; $j9++;}else{$sepDivi[]	= 0;}
				if(in_array($division,$allMonthDivision['Oct'])){ $octDivi[]	= $allRevenue['Oct'][$j10]; $j10++;}else{$octDivi[]	= 0;}
				if(in_array($division,$allMonthDivision['Nov'])){ $novDivi[]	= $allRevenue['Nov'][$j11]; $j11++;}else{$novDivi[]	= 0;}
				if(in_array($division,$allMonthDivision['Dec'])){ $decDivi[]	= $allRevenue['Dec'][$j12]; $j12++;}else{$decDivi[]	= 0;}
				
			}
		}
		$allRevenue['Jan']	= $janDivi;$allRevenue['Feb']	= $febDivi;$allRevenue['Apr']	= $aprDivi;$allRevenue['Mar']	= $marDivi;
		$allRevenue['May']	= $mayDivi;$allRevenue['Jun']	= $junDivi;$allRevenue['Jul']	= $julDivi;$allRevenue['Aug']	= $augDivi;
		$allRevenue['Sep']	= $sepDivi;$allRevenue['Oct']	= $octDivi;$allRevenue['Nov']	= $novDivi;$allRevenue['Dec']	= $decDivi;
		
		if(!empty($divisions)){
			$iii=0; $zero = 0;
			foreach($divisions as $division){
				$bb		= '';
				foreach($newMonths as $k=>$v){
					$validMonth	= !empty($allRevenue[$v]) ? $allRevenue[$v] : '';
					if(!empty($validMonth) && !empty($validMonth[$iii])){
						$bb	.= $validMonth[$iii].',';
					}
				}
				
				$pcl[]	= "{name: '".$division."',
							data: [$bb],
							tack: 'male'
							}";
				$iii++;
			}
		}
		$pr	= !empty($pcl) ? implode(",",$pcl) : '';
		$data['pr']	= $pr;
		/*$monthArray	= array(1=>'Jan',2=>'Feb',3=>'Mar',4=>'Apr',5=>'May',6=>'Jun',7=>'Jul',8=>'Aug',9=>'Sep',10=>'Oct',11=>'Nov',12=>'Dec');
		$salMonth	= array();
		for($monthStart=1;$monthStart<=12;$monthStart++){
			if(!empty($newMonths[$monthStart])){
				if($monthStart==1){
					$salMonth[]	= 'Dec-'.$newMonths[$monthStart];
				}else{
					$salMonth[]	= $monthArray[$monthStart-1].'-'.$newMonths[$monthStart];
				}
			}
		}*/
		
		$months		= !empty($newMonths) ? implode("','",$newMonths) : '';
		$data['months']	= "'".$months."'";
		//dump($data['months']);die;
		$data['divisions']	= $divisions;
		$salespersonIds	= salespersonList('','salespersonid');
		if(array_key_exists($this->logged_id,$salespersonIds)){
			$dashboard		= dashboardData($this->logged_id);
			$quoteDetailsOf	= $this->logged_id;
		}else{
			$dashboard		= dashboardData('1351');
			$quoteDetailsOf	= '1351';
		}
		$data['quoteInfo']	= $dashboard;
		$data['quoteDetailsOf']	= $quoteDetailsOf;
		//$databoard		= array_column($dashboard,'quote_status');
		//dump($data);die;
		$this->load->view('frontend/dashboard', $data);
	}
	
	
	function index3(){
		$data['js']		= array('jquery-min','jquery-ui','jquery.mCustomScrollbar','jquery.dataTables.min','jquery.selectBoxIt','highcharts','exporting','bootstrap'); 
		$data['css']	= array('common','dashboard','jquery-ui','jquery.mCustomScrollbar','highchart','font-awesome.min','bootstrap');
		$data['title']	= 'dashboard';
		$pppt	= getRevenueByMonth();
		/*$amount = array();$febAmount = array();$marAmount = array();$aprAmount = array();
		$mayAmount = array();$junAmount = array();$julAmount = array();$augAmount = array();
		$sepAmount = array();$octAmount = array();$novAmount = array();$decAmount = array();/
		*/
		$allMonthAmount['Jan'] = array();$allMonthAmount['Feb'] = array();$allMonthAmount['Mar'] = array();$allMonthAmount['Apr'] = array();
		$allMonthAmount['May'] = array();$allMonthAmount['Jun'] = array();$allMonthAmount['Jul'] = array();$allMonthAmount['Aug'] = array();
		$allMonthAmount['Sep'] = array();$allMonthAmount['Oct'] = array();$allMonthAmount['Nov'] = array();$allMonthAmount['Dec'] = array();
		
		$allMonthDivision['Jan'] = array();$allMonthDivision['Feb'] = array();$allMonthDivision['Mar'] = array();$allMonthDivision['Apr'] = array();
		$allMonthDivision['May'] = array();$allMonthDivision['Jun'] = array();$allMonthDivision['Jul'] = array();$allMonthDivision['Aug'] = array();
		$allMonthDivision['Sep'] = array();$allMonthDivision['Oct'] = array();$allMonthDivision['Nov'] = array();$allMonthDivision['Dec'] = array();
		
		foreach($pppt as $ppp) {
			if($ppp->month=='Jan'){$index = division($ppp->division, $allMonthAmount['Jan']);if ($index < 0) {$allMonthAmount['Jan'][] = $ppp;}else {$allMonthAmount['Jan'][$index]->revenue +=  $ppp->revenue;}$divisions[]	= $ppp->division;}
			if($ppp->month=='Feb'){ $index = division($ppp->division, $allMonthAmount['Feb']);if ($index < 0) {$allMonthAmount['Feb'][] = $ppp;}else {$allMonthAmount['Feb'][$index]->revenue +=  $ppp->revenue;}}
			if($ppp->month=='Mar'){ $index = division($ppp->division, $allMonthAmount['Mar']);if ($index < 0) { $allMonthAmount['Mar'][] = $ppp; } else {$allMonthAmount['Mar'][$index]->revenue +=  $ppp->revenue;}}
			if($ppp->month=='Apr'){ $index = division($ppp->division, $allMonthAmount['Apr']);if ($index < 0) { $allMonthAmount['Apr'][] = $ppp;}else {$allMonthAmount['Apr'][$index]->revenue +=  $ppp->revenue;}}
			if($ppp->month=='May'){ $index = division($ppp->division, $allMonthAmount['May']);if ($index < 0) { $allMonthAmount['May'][] = $ppp;}else {$allMonthAmount['May'][$index]->revenue +=  $ppp->revenue;}}
			if($ppp->month=='Jun'){ $index = division($ppp->division, $allMonthAmount['Jun']);if ($index < 0) { $allMonthAmount['Jun'][] = $ppp;}else {$allMonthAmount['Jun'][$index]->revenue +=  $ppp->revenue;}}
			if($ppp->month=='Jul'){ $index = division($ppp->division, $allMonthAmount['Jul']);if ($index < 0) { $allMonthAmount['Jul'][] = $ppp;}else {$allMonthAmount['Jul'][$index]->revenue +=  $ppp->revenue;}}
			if($ppp->month=='Aug'){ $index = division($ppp->division, $allMonthAmount['Aug']);if ($index < 0) { $allMonthAmount['Aug'][] = $ppp;}else {$allMonthAmount['Aug'][$index]->revenue +=  $ppp->revenue;}}
			if($ppp->month=='Sep'){ $index = division($ppp->division, $allMonthAmount['Sep']);if ($index < 0) { $allMonthAmount['Sep'][] = $ppp;}else {$allMonthAmount['Sep'][$index]->revenue +=  $ppp->revenue;}}
			if($ppp->month=='Oct'){ $index = division($ppp->division, $allMonthAmount['Oct']);if ($index < 0) { $allMonthAmount['Oct'][] = $ppp;}else {$allMonthAmount['Oct'][$index]->revenue +=  $ppp->revenue;}}
			if($ppp->month=='Nov'){ $index = division($ppp->division, $allMonthAmount['Nov']);if ($index < 0) { $allMonthAmount['Nov'][] = $ppp;}else {$allMonthAmount['Nov'][$index]->revenue +=  $ppp->revenue;}}
			if($ppp->month=='Dec'){ $index = division($ppp->division, $allMonthAmount['Dec']);if ($index < 0) { $allMonthAmount['Dec'][] = $ppp;}else {$allMonthAmount['Dec'][$index]->revenue +=  $ppp->revenue;}}
			
			$months[]	= $ppp->month;
		}
		$divisions	= !empty($divisions) ? array_unique($divisions) : array();
		$months		= !empty($months) ? array_unique($months) : array();
		//dump($months);die;
		$newMonths	= array();
		
		//dump($allMonthAmount);die;
		/*foreach($months as $month) {
			$m = date_parse($month);
			$newMonths[$m['month']] = $month;
		}
		if(!empty($newMonths)){
			//ksort($newMonths);
		}*/
		/**
		
		$janRevenue	= array_column($amount,'revenue');$febRevenue		= array_column($febAmount,'revenue');
		$marRevenue	= array_column($marAmount,'revenue');$aprRevenue	= array_column($aprAmount,'revenue');
		$mayRevenue	= array_column($mayAmount,'revenue');$junRevenue	= array_column($junAmount,'revenue');
		$julRevenue	= array_column($julAmount,'revenue');$augRevenue	= array_column($augAmount,'revenue');
		$sepRevenue	= array_column($sepAmount,'revenue');$octRevenue	= array_column($octAmount,'revenue');
		$novRevenue	= array_column($novAmount,'revenue');$decRevenue	= array_column($decAmount,'revenue');
		* 
		* */
		$allRevenue['Jan']	= array_column($allMonthAmount['Jan'],'revenue');$allRevenue['Feb']	= array_column($allMonthAmount['Feb'],'revenue');
		$allRevenue['Mar']	= array_column($allMonthAmount['Mar'],'revenue');$allRevenue['Apr']	= array_column($allMonthAmount['Apr'],'revenue');
		$allRevenue['May']	= array_column($allMonthAmount['May'],'revenue');$allRevenue['Jun']	= array_column($allMonthAmount['Jun'],'revenue');
		$allRevenue['Jul']	= array_column($allMonthAmount['Jul'],'revenue');$allRevenue['Aug']	= array_column($allMonthAmount['Aug'],'revenue');
		$allRevenue['Sep']	= array_column($allMonthAmount['Sep'],'revenue');$allRevenue['Oct']	= array_column($allMonthAmount['Oct'],'revenue');
		$allRevenue['Nov']	= array_column($allMonthAmount['Nov'],'revenue');$allRevenue['Dec']	= array_column($allMonthAmount['Dec'],'revenue');
		
		$allMonthDivision['Jan']	= array_column($allMonthAmount['Jan'],'division');$allMonthDivision['Feb']	= array_column($allMonthAmount['Feb'],'division');
		$allMonthDivision['Mar']	= array_column($allMonthAmount['Mar'],'division');$allMonthDivision['Apr']	= array_column($allMonthAmount['Apr'],'division');
		$allMonthDivision['May']	= array_column($allMonthAmount['May'],'division');$allMonthDivision['Jun']	= array_column($allMonthAmount['Jun'],'division');
		$allMonthDivision['Jul']	= array_column($allMonthAmount['Jul'],'division');$allMonthDivision['Aug']	= array_column($allMonthAmount['Aug'],'division');
		$allMonthDivision['Sep']	= array_column($allMonthAmount['Sep'],'division');$allMonthDivision['Oct']	= array_column($allMonthAmount['Oct'],'division');
		$allMonthDivision['Nov']	= array_column($allMonthAmount['Nov'],'division');$allMonthDivision['Dec']	= array_column($allMonthAmount['Dec'],'division');
		
		$monthArray	= array(1=>'Jan',2=>'Feb',3=>'Mar',4=>'Apr',5=>'May',6=>'Jun',7=>'Jul',8=>'Aug',9=>'Sep',10=>'Oct',11=>'Nov',12=>'Dec');
		$arr	= array();$ar2	= array();
		$currentMonth	= date('m');
		for($i=12;$i>0;$i--){
			$i	= ($i<10) ? '0'.$i:$i;
			if($i>$currentMonth){
				array_unshift($ar2,$i);
			}else{
				array_unshift($arr,$i);
			}
			
		}
		//rsort($ar2);
		$ar2	= array_values($ar2);
		$arr	= array_values($arr);
		$arr	= array_merge($ar2,$arr);
		//dump($arr);
		foreach($arr as $k=>$v){
			$v	= ($v < 10) ? ltrim($v, '0') : $v;
			if(in_array($monthArray[$v],$months)){
				$newMonths[$k]=$monthArray[$v];
			}
		}
		//dump(array_column($allMonthAmount['Sep'],'division'));die;
		
		
		
		$pcl	= '';
		
		$janDivi	= array();$febDivi	= array();$marDivi	= array();$aprDivi	= array();$mayDivi	= array();$junDivi	= array();
		$julDivi	= array();$augDivi	= array();$sepDivi	= array();$octDivi	= array();$novDivi	= array();$decDivi	= array();
		$j1	= 0;$j2	= 0;$j3	= 0;$j4	= 0;$j5	= 0;$j6	= 0;$j7	= 0;$j8	= 0;$j9	= 0;$j10= 0;$j11	= 0;$j12	= 0;
		if(!empty($divisions)){
			foreach($divisions as $division){
				if(in_array($division,$allMonthDivision['Jan'])){ $janDivi[]	= $allRevenue['Jan'][$j1]; $j1++;}else{$janDivi[]	= 0;}
				if(in_array($division,$allMonthDivision['Feb'])){ $febDivi[]	= $allRevenue['Feb'][$j2]; $j2++;}else{$febDivi[]	= 0;}
				if(in_array($division,$allMonthDivision['Mar'])){ $marDivi[]	= $allRevenue['Mar'][$j3]; $j3++;}else{$marDivi[]	= 0;}
				if(in_array($division,$allMonthDivision['Apr'])){ $aprDivi[]	= $allRevenue['Apr'][$j4]; $j4++;}else{$aprDivi[]	= 0;}
				if(in_array($division,$allMonthDivision['May'])){ $mayDivi[]	= $allRevenue['May'][$j5]; $j5++;}else{$mayDivi[]	= 0;}
				if(in_array($division,$allMonthDivision['Jun'])){ $junDivi[]	= $allRevenue['Jun'][$j6]; $j6++;}else{$junDivi[]	= 0;}
				if(in_array($division,$allMonthDivision['Jul'])){ $julDivi[]	= $allRevenue['Jul'][$j7]; $j7++;}else{$julDivi[]	= 0;}
				if(in_array($division,$allMonthDivision['Aug'])){ $augDivi[]	= $allRevenue['Aug'][$j8]; $j8++;}else{$augDivi[]	= 0;}
				if(in_array($division,$allMonthDivision['Sep'])){ $sepDivi[]	= $allRevenue['Sep'][$j9]; $j9++;}else{$sepDivi[]	= 0;}
				if(in_array($division,$allMonthDivision['Oct'])){ $octDivi[]	= $allRevenue['Oct'][$j10]; $j10++;}else{$octDivi[]	= 0;}
				if(in_array($division,$allMonthDivision['Nov'])){ $novDivi[]	= $allRevenue['Nov'][$j11]; $j11++;}else{$novDivi[]	= 0;}
				if(in_array($division,$allMonthDivision['Dec'])){ $decDivi[]	= $allRevenue['Dec'][$j12]; $j12++;}else{$decDivi[]	= 0;}
				
			}
		}
		$allRevenue['Jan']	= $janDivi;$allRevenue['Feb']	= $febDivi;$allRevenue['Apr']	= $aprDivi;$allRevenue['Mar']	= $marDivi;
		$allRevenue['May']	= $mayDivi;$allRevenue['Jun']	= $junDivi;$allRevenue['Jul']	= $julDivi;$allRevenue['Aug']	= $augDivi;
		$allRevenue['Sep']	= $sepDivi;$allRevenue['Oct']	= $octDivi;$allRevenue['Nov']	= $novDivi;$allRevenue['Dec']	= $decDivi;
		//dump($newMonths);
		if(!empty($divisions)){
			$iii=0; $zero = 0;
			foreach($divisions as $division){
				$bb		= '';
				foreach($newMonths as $k=>$v){
					$validMonth	= !empty($allRevenue[$v]) ? $allRevenue[$v] : '';
					$hh		= !empty($validMonth[$iii]) ? $validMonth[$iii] : 0;
					$bb		.= $hh.',';
				}
				
				$pcl[]	= "{name: '".$division."',
							data: [$bb],
							tack: 'male'
							}";
				$iii++;
			}
		}
		$pr	= !empty($pcl) ? implode(",",$pcl) : '';
		$data['pr']	= $pr;
		
		//$monthArray	= array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
		
		/*
		 * $salMonth	= array();
		for($monthStart=1;$monthStart<=12;$monthStart++){
			if(!empty($newMonths[$monthStart])){
				if($monthStart==1){
					$salMonth[]	= 'Dec-'.$newMonths[$monthStart];
				}else{
					$salMonth[]	= $monthArray[$monthStart-1].'-'.$newMonths[$monthStart];
				}
			}
		}*/
		
		
		$months		= !empty($newMonths) ? implode("','",$newMonths) : '';
		$data['months']	= "'".$months."'";
		
		$data['divisions']	= $divisions;
		$salespersonIds	= salespersonList('','salespersonid');
		if(array_key_exists($this->logged_id,$salespersonIds)){
			$dashboard		= dashboardData($this->logged_id);
			$quoteDetailsOf	= $this->logged_id;
		}else{
			$dashboard		= dashboardData('1351');
			$quoteDetailsOf	= '1351';
		}
		$data['quoteInfo']	= $dashboard;
		$data['quoteDetailsOf']	= $quoteDetailsOf;
		//$databoard		= array_column($dashboard,'quote_status');
		//dump($data);die;
		$this->load->view('frontend/dashboard_test', $data);
	}
	
	
	
	



function index2(){
		$data['js']		= array('jquery-min','jquery-ui','jquery.mCustomScrollbar','jquery.dataTables.min','jquery.selectBoxIt','highcharts','exporting','bootstrap'); 
		$data['css']	= array('common','dashboard','jquery-ui','jquery.mCustomScrollbar','highchart','font-awesome.min','bootstrap');
		$data['title']	= 'dashboard';
		$pppt	= getRevenueByMonth();
		$uniqueSalesperson	= array_column($pppt,"salespersonname");
		$uniqueSalesperson	= array_unique($uniqueSalesperson);
		//dump($uniqueSalesperson);die;
		$amount		= array();$febAmount = array();$marAmount = array();$aprAmount = array();
		$mayAmount	= array();$junAmount = array();$julAmount = array();$augAmount = array();
		$sepAmount	= array();$octAmount = array();$novAmount = array();$decAmount = array();
		$newArt		= array();$newOr	= array();
		foreach($pppt as $ppp) {
			
			if($ppp->month=='Jan'){
				$index = division($ppp->division, $amount);
				if ($index < 0) {$amount[] = $ppp;}else {$amount[$index]->revenue +=  $ppp->revenue;}
				$divisions[]	= !empty($ppp->division) ? $ppp->division : '';
				$person[$ppp->salespersonname][]		= ($ppp->revenue);
				$net	= 0;
				/*if(!empty($uniqueSalesperson)){
					
					foreach($uniqueSalesperson as $sales){
						$sales	= str_replace("'","-",$sales);
						$person	= str_replace("'","-",$ppp->salespersonname);
						if($sales==$person){
							$newOr[$person][]	= ($ppp->revenue);
						}
						
					}
					//$newArt2[$ppp->division][]	= $ppp->salespersonname.'++'.$newOr;
				}*/
				
				$newArt[$ppp->division][]	= $ppp->salespersonname;
			}
			if($ppp->month=='Feb'){ $index = division($ppp->division, $febAmount);if ($index < 0) {$febAmount[] = $ppp;}else {$febAmount[$index]->revenue +=  $ppp->revenue;}}
			if($ppp->month=='Mar'){ $index = division($ppp->division, $marAmount);if ($index < 0) { $marAmount[] = $ppp; } else { $marAmount[$index]->revenue +=  $ppp->revenue;}}
			if($ppp->month=='Apr'){ $index = division($ppp->division, $aprAmount);if ($index < 0) { $aprAmount[] = $ppp;}else {$aprAmount[$index]->revenue +=  $ppp->revenue;}}
			if($ppp->month=='May'){ $index = division($ppp->division, $mayAmount);if ($index < 0) { $mayAmount[] = $ppp;}else {$mayAmount[$index]->revenue +=  $ppp->revenue;}}
			if($ppp->month=='Jun'){ $index = division($ppp->division, $junAmount);if ($index < 0) { $junAmount[] = $ppp;}else {$junAmount[$index]->revenue +=  $ppp->revenue;}}
			if($ppp->month=='Jul'){ $index = division($ppp->division, $julAmount);if ($index < 0) { $julAmount[] = $ppp;}else {$julAmount[$index]->revenue +=  $ppp->revenue;}}
			if($ppp->month=='Aug'){ $index = division($ppp->division, $augAmount);if ($index < 0) { $augAmount[] = $ppp;}else {$augAmount[$index]->revenue +=  $ppp->revenue;}}
			if($ppp->month=='Sep'){ $index = division($ppp->division, $sepAmount);if ($index < 0) { $sepAmount[] = $ppp;}else {$sepAmount[$index]->revenue +=  $ppp->revenue;}}
			if($ppp->month=='Oct'){ $index = division($ppp->division, $octAmount);if ($index < 0) { $octAmount[] = $ppp;}else {$octAmount[$index]->revenue +=  $ppp->revenue;}}
			if($ppp->month=='Nov'){ $index = division($ppp->division, $novAmount);if ($index < 0) { $novAmount[] = $ppp;}else {$novAmount[$index]->revenue +=  $ppp->revenue;}}
			if($ppp->month=='Dec'){ $index = division($ppp->division, $decAmount);if ($index < 0) { $decAmount[] = $ppp;}else {$decAmount[$index]->revenue +=  $ppp->revenue;}}
			
			$months[]	= $ppp->month;
		}
		//$person		= !empty($person) ? array_unique($person) : array();
		$hh				= getArraySumValue($person);
		//dump($hh);die;
		$divisions	= !empty($divisions) ? array_unique($divisions) : array();
		$months		= !empty($months) ? array_unique($months) : array();
		$newMonths	= array();
		foreach($months as $month) {
			$m = date_parse($month);
			$newMonths[$m['month']] = $month;
		}
		if(!empty($newMonths)){
			ksort($newMonths);
		}
		$janRevenue	= array_column($amount,'revenue');$febRevenue		= array_column($febAmount,'revenue');
		$marRevenue	= array_column($marAmount,'revenue');$aprRevenue	= array_column($aprAmount,'revenue');
		$mayRevenue	= array_column($mayAmount,'revenue');$junRevenue	= array_column($junAmount,'revenue');
		$julRevenue	= array_column($julAmount,'revenue');$augRevenue	= array_column($augAmount,'revenue');
		$sepRevenue	= array_column($sepAmount,'revenue');$octRevenue	= array_column($octAmount,'revenue');
		$novRevenue	= array_column($novAmount,'revenue');$decRevenue	= array_column($decAmount,'revenue');
		$pcl	= '';$np='';
		if(!empty($divisions)){
			$iii=0; $zero = 0;
			foreach($divisions as $division){
				$bb		= '';$tt="";
				if(!empty($janRevenue) && !empty($janRevenue[$iii])){
					$ttttttt	= !empty($newArt[$division])  ? array_unique($newArt[$division]) : array();
					$htc		= '';
					if(!empty($ttttttt)){
						foreach($ttttttt as $tlc){
							$tlc	= str_replace("'","-",$tlc);
							$tlcVal	= $hh[$tlc];
							$htc	.= "[ '$tlc', $tlcVal ],";
							//$code	= base64_encode($tlc);
							
						}
						
					}
					$bb	.= $janRevenue[$iii].',';
					$tt	.= "{ y: $janRevenue[$iii], drilldown: 'Jan-$division' },";
					$np	.= "{
							name: '".$division."',
							id: 'Jan-$division',
							data: [$htc]
							},";
					//$ttttttt[]	= !empty($newArt[$division])  ? array_unique($newArt[$division]) : array();
				}
				if(!empty($febRevenue) && !empty($febRevenue[$iii])){
					$bb	.= $febRevenue[$iii].',';
					$tt	.= "{ y: $febRevenue[$iii], drilldown: 'Feb-$division' },";
					$np	.= "{
							name: '".$division."',
							id: 'Feb-$division',
							data: [
								[ 'data A', 24.13 ],
								[ 'data B', 17.2 ],
							]
							},";
				}
				
				if(!empty($marRevenue) && !empty($marRevenue[$iii])){
					$bb	.= $marRevenue[$iii].',';
					$tt	.= "{ y: $marRevenue[$iii], drilldown: 'Mar-$division' },";
					$np	.= "{
							name: '".$division."',
							id: 'Mar-$division',
							data: [
								[ 'data A', 24.13 ],
								[ 'data B', 17.2 ],
							]
							},";
				}
				if(!empty($aprRevenue) && !empty($aprRevenue[$iii])){
					$bb	.= $aprRevenue[$iii].',';
					$tt	.= "{ y: $aprRevenue[$iii], drilldown: 'Apr-$division' },";
					$np	.= "{
							name: '".$division."',
							id: 'Apr-$division',
							data: [
								[ 'data A', 24.13 ],
								[ 'data B', 17.2 ],
							]
							},";
				}
				if(!empty($mayRevenue) && !empty($mayRevenue[$iii])){
					$bb	.= $mayRevenue[$iii].',';
					$tt	.= "{ y: $mayRevenue[$iii], drilldown: 'May-$division' },";
					$np	.= "{
							name: '".$division."',
							id: 'May-$division',
							data: [
								[ 'data A', 24.13 ],
								[ 'data B', 17.2 ],
							]
							},";
				}
				if(!empty($junRevenue) && !empty($junRevenue[$iii])){
					$bb	.= $junRevenue[$iii].',';
					$tt	.= "{ y: $junRevenue[$iii], drilldown: 'Jun-$division' },";
					$np	.= "{
							name: '".$division."',
							id: 'Jun-$division',
							data: [
								[ 'data A', 24.13 ],
								[ 'data B', 17.2 ],
							]
							},";
				}
				if(!empty($julRevenue) && !empty($julRevenue[$iii])){
					$bb	.= $julRevenue[$iii].',';
					$tt	.= "{ y: $julRevenue[$iii], drilldown: 'Jul-$division' },";
					$np	.= "{
							name: '".$division."',
							id: 'Jul-$division',
							data: [
								[ 'data A', 24.13 ],
								[ 'data B', 17.2 ],
							]
							},";
				}
				if(!empty($augRevenue) && !empty($augRevenue[$iii])){
					$bb	.= $augRevenue[$iii].',';
					$tt	.= "{ y: $augRevenue[$iii], drilldown: 'Aug-$division' },";
					$np	.= "{
							name: '".$division."',
							id: 'Aug-$division',
							data: [
								[ 'data A', 24.13 ],
								[ 'data B', 17.2 ],
							]
							},";
					
				}
				if(!empty($sepRevenue) && !empty($sepRevenue[$iii])){
					$bb	.= $sepRevenue[$iii].',';
					$tt	.= "{ y: $sepRevenue[$iii], drilldown: 'Sep-$division' },";
					$np	.= "{
							name: '".$division."',
							id: 'Sep-$division',
							data: [
								[ 'data A', 24.13 ],
								[ 'data B', 17.2 ],
							]
							},";
				}
				if(!empty($octRevenue) && !empty($octRevenue[$iii])){
					$bb	.= $octRevenue[$iii].',';
					$tt	.= "{ y: $octRevenue[$iii], drilldown: 'Oct-$division' },";
					$np	.= "{
							name: '".$division."',
							id: 'Oct-$division',
							data: [
								[ 'data A', 24.13 ],
								[ 'data B', 17.2 ],
							]
							},";
					
				}
				if(!empty($novRevenue) && !empty($novRevenue[$iii])){
					$bb	.= $novRevenue[$iii].',';
					$tt	.= "{ y: $novRevenue[$iii], drilldown: 'Nov-$division' },";
					$np	.= "{
							name: '".$division."',
							id: 'Nov-$division',
							data: [
								[ 'data A', 24.13 ],
								[ 'data B', 17.2 ],
							]
							},";
					
				}
				if(!empty($decRevenue) && !empty($decRevenue[$iii])){
					$bb	.= $decRevenue[$iii].',';
					$tt	.= "{ y: $decRevenue[$iii], drilldown: 'Dec-$division' },";
					
					$np	.= "{
							name: '".$division."',
							id: 'Dec-$division',
							data: [
								[ 'data A', 24.13 ],
								[ 'data B', 17.2 ],
							]
							},";
				}
				
				//dump($tt);
				
				$pcl[]	= "{name: '".$division."',
							data: [$tt],
							drilldown: '".$division."'
							}";
							
					
				$iii++;
			}
		}
		//$tt	= explode(',',$tt);
		//dump($tt);die;
		//dump($ttttttt);die;
		$pr	= !empty($pcl) ? implode(",",$pcl) : '';
		$data['pr']	= $pr;
		
		//dump($pr);die;
		$data['np']	= $np;
		//dump($newMonths);die;
		$salMonth	= array();
		for($monthStart=1;$monthStart<=12;$monthStart++){
			if(!empty($newMonths[$monthStart])){
				if($monthStart==1){
					$salMonth[]	= 'Dec-'.$newMonths[$monthStart];
				}else{
					if(!empty($newMonths[($monthStart-1)])){
						
						$salMonth[]	= $newMonths[($monthStart-1)].'-'.$newMonths[$monthStart];
					}
				}
			}
		}
		//dump($salMonth);die;
		$months		= !empty($newMonths) ? implode("','",$newMonths) : '';
		
		$data['months']	= "'".$months."'";
		//dump($data['months']);die;
		$data['divisions']	= $divisions;
		$salespersonIds	= salespersonList('','salespersonid');
		if(array_key_exists($this->logged_id,$salespersonIds)){
			$dashboard		= dashboardData($this->logged_id);
			$quoteDetailsOf	= $this->logged_id;
		}else{
			$dashboard		= dashboardData('1351');
			$quoteDetailsOf	= '1351';
		}
		$data['quoteInfo']	= $dashboard;
		$data['quoteDetailsOf']	= $quoteDetailsOf;
		//$databoard		= array_column($dashboard,'quote_status');
		//dump($dashboard);die;
		$this->load->view('frontend/dashboard2', $data);
	}
	
	
	/**
	 * This function used for load the pie chart based on salesperson.
	 *  
	 * @Function	-: getSalespersonQuoteInformation()
	 * @Param		-: No Parameter
	 * @created		-: 08-09-2017
	 * @return		-: json
	 * */
	function getSalespersonQuoteInformation(){
		$salesPerson	= $this->input->post('salesPerson');
		if(!empty($salesPerson) && is_numeric($salesPerson)){
			$quoteInfo		= dashboardData($salesPerson);
		}else{
			$quoteInfo		= dashboardData('1351');
		}
		$c=0;$cd=0;$cw=0;$cm=0;$cy=0;$d=0;$dd=0;$dw=0;$dm=0;$dy=0;$p=0;$pd=0;$pw=0;$pm=0;$py=0;
		if(!empty($quoteInfo) && is_array($quoteInfo)){
			foreach($quoteInfo as $val){
				if($val->quote_status=='Cancelled'){
					$cd	= !empty($val->daily_avg) ? $val->daily_avg : 0;
					$cw	= !empty($val->weekly_avg) ? $val->weekly_avg : 0;
					$cm	= !empty($val->monhtly_avg) ? $val->monhtly_avg : 0;
					$cy	= !empty($val->yearly_avg) ? $val->yearly_avg : 0;
				}
				if($val->quote_status=='Draft'){
					$dd	= !empty($val->daily_avg) ? $val->daily_avg : 0;
					$dw	= !empty($val->weekly_avg) ? $val->weekly_avg : 0;
					$dm	= !empty($val->monhtly_avg) ? $val->monhtly_avg : 0;
					$dy	= !empty($val->yearly_avg) ? $val->yearly_avg : 0;
				}
				if($val->quote_status=='Ordered'){
					$pd	= !empty($val->daily_avg) ? $val->daily_avg : null;
					$pw	= !empty($val->weekly_avg) ? $val->weekly_avg : null;
					$pm	= !empty($val->monhtly_avg) ? $val->monhtly_avg : null;
					$py	= !empty($val->yearly_avg) ? $val->yearly_avg : null;
				}
			}
			
		}
			if(empty($dd) && empty($dw) && empty($dm) && empty($dy)){
				$d	= 1;
			}
			if(empty($pd) && empty($pw) && empty($pm) && empty($py)){
				$p	= 1;
			}
			if(empty($cd) && empty($cw) && empty($cm) && empty($cy)){
				$c	= 1;
			}
		echo json_encode(array('c'=>$c,'cd'=>$cd,'cw'=>$cw,'cm'=>$cm,'cy'=>$cy,
								'd'=>$d,'dd'=>$dd,'dw'=>$dw,'dm'=>$dm,'dy'=>$dy,
								'p'=>$p,'pd'=>$pd,'pw'=>$pw,'pm'=>$pm,'py'=>$py)
							);die;
	}
	

}
