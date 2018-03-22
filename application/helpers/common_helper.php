<?php
/**
 * Quoteweb  common Helper
 *
 * @package		Quoteweb 
 * @subpackage	Helpers
 * @category	Helpers
 * @author		Team TIS (TIS india Pvt. ltd.)
 * @Created on	-: 28-02-2017
 */
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	/**
	 * This function used for set a flash mes
	 * 
	 * In this function we are checking message and type after than set a flash mes
	 * 
	 * @Function	setMessage()
	 * @Created		01-03-2017
	 * @Param		message(string),type(string)
	 * @Return		nothing
	 * 
	 * */
	function setMessage($message = '', $type = 'info'){
		$CI = & get_instance();
		if (! empty($message)) {
			$flashdata= array(
				'message_type' => $type,
				'message' => $message
			);
			$CI->session->set_flashdata($flashdata);
		}
	}
	/**
	 * @Function	-: dump()
	 * @Description	-: This function used for print the any data like array or string with data type
	 * @Param		-: No Parameter
	 * @created		-: 10-04-2017
	 * 
	 * */
	function dump($array = array()){
		echo '<pre>';
		print_r($array);
		echo '</pre>';
	}
	
	
	/**
	 * This function used for get user info based on user id .
	 * 
	 * This function used for get user info based on user id .
	 * 
	 * @Function	-: getUserInfoById()
	 * @Created on	-: 02-12-2016
	 * @Param		-: userId(int)
	 * @Return		-: array()
	 * 
	 *  */
	function getUserInfoById($userId=0){
		$CI	= & get_instance();
		try{
			if(!empty($userId) && is_numeric($userId)){
				$result		= $CI->db->where('qw_users.id',$userId)->select('qw_users.*')
						->get('qw.qw_users')->row();
				if($result){
					return $result;
				}return false;
			}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get user info based on user id '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for get user group details.
	 * 
	 * In this function we are getting records from qw_user_group_permission table
	 * 
	 * @Function	getUserGroupDetils()
	 * @Param		groupId(int)
	 * @Created		15-06-2017
	 * @Return		array()
	 * 
	 * */
	function getUserGroupDetils($groupId=0){
		try{
			$CI	= & get_instance();
			if(!empty($groupId) && is_numeric($groupId)){
				$groupDetails = $CI->db->where('group_id',$groupId)
						->get('qw.qw_user_group_permission')->row();
				//print $CI->db->last_query();
				if(!empty($groupDetails)){
					return $groupDetails;
				}return false;
			}return false;
		}catch(Exception $ex){
			log_message('error','Unable to get group details basis on group id '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for get Net Product list.
	 * 
	 * This function used for get net product list .
	 * 
	 * @Function	-: netProduct()
	 * @Created on	-: 10-03-2016
	 * @Param		-: void(0)
	 * @Return		-: array()
	 * 
	 *  */
	function netProduct($type=null,$code=null){
		$CI	= & get_instance();
		try{
				$sql	= "select * from qw.get_web_products('".$type."')";
				$records		= $CI->db->query($sql);
				$records		= $records->row();
				$results		= json_decode($records->get_web_products);
				//dump($results);die;
				if(!empty($results)){
					foreach($results as $result){
						if(!empty($result->product_name)){
							$product		= !empty($result->product) ? $result->product : '';
							$productName	= !empty($result->product_shortname) ? $result->product_shortname : '';
							$select	= ($product==$code)?'selected':'';
							$view	= $product .' ['.$productName.']';
							$val	= $productName .' ['.$product.']';
							echo '<option value="'.$val.'" '.$select.'>'.$view.'</option>';
						}
					}
				}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get net product list '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for get  Product type list.
	 * 
	 * This function used for get  product type list .
	 * 
	 * @Function	-: getProductType()
	 * @Created on	-: 05-05-2017
	 * @Param		-: void(0)
	 * @Return		-: array()
	 * 
	 * */
	function getProductType($type=null,$code=null){
		$CI	= & get_instance();
		try{
			$sql	= "select * from qw.get_products('".$type."')";
				$records		= $CI->db->query($sql);
				$records		= $records->row();
				$results		= json_decode($records->get_products);
				if(!empty($results)){
					echo '<option value="">Select</option>';
					foreach($results as $result){
						if(!empty($result->product_type)){
							$n_style=$result->product_type;
							if($n_style=="Cargo Net"){$n_style= "Cargo Net (ERGU3)";}
							$n_code	= strtolower(str_replace(' ','_',$n_style));
							$select	=($n_code==$code)?'selected':'';
							echo '<option value="'.$n_code.'" '.$select.'>'.$n_style.'</option>';
						}
					}
				}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get net product list '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for get Product type list.
	 * 
	 * This function used for get product type list .
	 * 
	 * @Function	-: getProductTypeAsArray()
	 * @Created on	-: 07-10-2017
	 * @Param		-: type
	 * @Return		-: array()
	 * 
	 * */
	function getProductTypeAsArray($type=null){
		$CI	= & get_instance();
		try{
			$sql	= "select * from qw.get_product_type()";
			$records		= $CI->db->query($sql);
			$records		= $records->row();
			$results		= !empty($records->get_product_type) ? json_decode($records->get_product_type) : array();
			if(!empty($results)){
				return $results;
			}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get net product list '.$ex->getMessage());
		}
	}
	
	
	
	/**
	 * This function used for get all Salesman list.
	 * 
	 * 
	 * @Function	-: salesmanList()
	 * @Created on	-: 19-04-2017
	 * @Param		-: void(0)
	 * @Return		-: array()
	 * 
	 *  */
	function salesmanList($name=null,$another=null){
		$CI	= & get_instance();
		try{
			$sql ="select * from qw.get_all_salesperson()";
				$records		= $CI->db->query($sql);
				$records		= $records->row();
				$results		= !empty($records->get_all_salesperson) ? json_decode($records->get_all_salesperson) : '';
				$user_name		= $CI->session->userdata('frontendUserName');
				$returnHtml		= '';
				if(!empty($results)){
					if(!empty($another)){
						foreach($results as $result){
							if(!empty($result->salesperson_name)){
								$salespersonEmail	= !empty($result->salesperson_email) ? $result->salesperson_email : '';
								$select=(!empty($name) && $name==$result->salesperson_name) ? 'selected':'';
								$returnHtml	.= '<option value="'.$result->salesperson_id.'##'.$salespersonEmail.'" '.$select.'>'.$result->salesperson_name.'</option>';
								//$returnHtml	.= '<option value="'.$result->salesperson_id.'" '.$select.'>'.$result->salesperson_name.'</option>';
							}
						}
						return $returnHtml;
					}else{
						foreach($results as $result){
							if(!empty($result->salesperson_name)){
								if(!empty($name)){
									$select=($name==$result->salesperson_id)?'selected':'AA';
								}else{
									$select=($user_name==$result->salesperson_name)?'selected':'B';
								}
								echo '<option value="'.$result->salesperson_id.'" '.$select.'>'.$result->salesperson_name.'</option>';
							}
						}
					}
				}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get net product list '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for get salesperson list.
	 * 
	 * @Function	salespersonList()
	 * @Param		name,usedFor
	 * @Created		20-09-2017
	 * 
	 * */
	
	function salespersonList($name=null,$usedFor=null){
		$CI	= & get_instance();
		try{
			$sql ="select * from qw.get_all_salesperson()";
			$records		= $CI->db->query($sql);
			$records		= $records->row();
			$results		= !empty($records->get_all_salesperson) ? json_decode($records->get_all_salesperson) : '';
			$user_name		= $CI->session->userdata('frontendUserName');
			$returnHtml		= '';
			if(empty($usedFor)){
				if(!empty($results)){
					foreach($results as $result){
						if(!empty($result->salesperson_name)){
							$select				= (!empty($name) && $name==$result->salesperson_name) ? 'selected':'';
							$returnHtml			.= '<option value="'.$result->salesperson_name.'" '.$select.'>'.$result->salesperson_name.'</option>';
						}
					}
					return $returnHtml;
				}return false;
			}else{
				if(!empty($results)){
					$returnArray	= array();
					foreach($results as $result){
						if(!empty($result->salesperson_name)){
							$returnArray[$result->salesperson_id]	= $result->salesperson_id;
						}
					}
					return $returnArray;
				}return false;
			}
		}catch(Exception	$ex){
			log_message('error','Unable to get net product list '.$ex->getMessage());
		}
	}


	/**
	 * This function used for get all WT class List.
	 * 
	 * 
	 * @Function	-: wtClassList()
	 * @Created on	-: 19-04-2017
	 * @Param		-: void(0)
	 * @Return		-: array()
	 * 
	 *  */
	function wtClassList($class=null,$another=null){
		$CI	= & get_instance();
		try{
			$sql ="select * from qw.get_all_wtclass()";
				$records		= $CI->db->query($sql);
				$records		= $records->row();
				$results		= json_decode($records->get_all_wtclass);
				$returnHtml		= '';
				if(!empty($results)){
					if(!empty($another)){
						foreach($results as $result){
							if(!empty($result->lookup_description)){
								$select=(!empty($class) && $class==$result->lookup_description)?'selected':'';
								$returnHtml	.= '<option value="'.$result->lookup_description.'" '.$select.'>'.$result->lookup_description.'</option>';
							}
						}
						return $returnHtml;
					}else{
						foreach($results as $result){
							if(!empty($result->lookup_description)){
								echo '<option value="'.$result->lookup_description.'">'.$result->lookup_description.'</option>';
							}
						}
					}
				}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get net product list '.$ex->getMessage());
		}
	}

	/**
	 * This function used for get user info based  .
	 * 
	 * This function used for get user info based on user email id .
	 * 
	 * @Function	-: getUserInfoByEmail()
	 * @Created on	-: 01-03-2017
	 * @Param		-: email(string)
	 * @Return		-: array()
	 * 
	 *  */
	function getUserInfoByEmail($email=null){
		$CI	= & get_instance();
		try{
			if(!empty($email)){
				$result		= $CI->db->where('qw_users.email',$email)->select('qw_users.*')
						->get('qw.qw_users')->row();
				if($result){
					return $result;
				}return false;
			}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get user info based on user email '.$ex->getMessage());
		}
	}
	

	function getSLashOptions($input=array()){
		$CI	= & get_instance();
		$userId		= $CI->session->userdata('frontendUserName');
		try{
			$html	= '';
			if(!empty($input['product']) && !empty($input['type'])){
				$type		= !empty($input['type']) ? $input['type'] : ''; 
				if($type=='lash'){
					$type='Rope';
					$sql ="select * from qw.get_web_products('$type')";
					
					$results	= $CI->db->query($sql);
					$results	= $results->result();
					$results	= !empty($results[0]->get_web_products) ? json_decode($results[0]->get_web_products) : array();
					$classNew	= 'custom-select';

					if( !empty($input['var_name']) && $input['var_name'] =='addonption'){
						$html	= '<select id="'.$input['var_name'].'" name="'.$input['name'].'"  ><option value="">Select</option>';
					}else{
						$html	= '<select id="'.$input['var_name'].'" name="'.$input['name'].'" class="'.$classNew.'"  ><option value="None">None</option>';
					}

					if($results){
						foreach($results as $record){
							
							$p=explode('[',$record->product_name);
							$val=preg_replace('/\"/', '', $record->product_name);
							$val = str_replace(array('\'', '"'), '', $val);
							/*
							if(!empty($input['var_name']) && $input['var_name'] == 'saleskit'){
								$defaultQuanity	= !empty($record->default_qty) ? $record->default_qty : 1;
								$val = $val.'##'.$defaultQuanity;
							}*/
							$html	.='<option value="'.$val.'" >'.trim($p[1],']').' ['.$p[0].']'.'</option>';
						}
					}

				}
			}return $html;
		}
		catch(Exception	$ex){
			log_message('error','Unable to get populte product options basis on product and type '.$ex->getMessage());
		}

	}

	/*For populating products default IND*/
	function getProductDefaultsData($ptype=null,$wt=null){
		
		$CI	= & get_instance();
		try{
			$html	= '';
			if(!empty($ptype) || !empty($wt)){
				$ptypeID = strtolower(preg_replace('/\s+/', '', $ptype));
				$sql	= "select * from qw.get_web_products_default('".$ptype."','".$wt."')";

				$results	= $CI->db->query($sql);
				$results	= $results->result();
				$results	= !empty($results[0]->get_web_products_default) ? json_decode($results[0]->get_web_products_default) : array();
				$html	=  '<select id="nettingtype_'.$ptypeID.'" name="net_product" class="custom-select">';
				$html	.= '<option value="None">Select </option>';

				if($results){
					foreach($results as $record){
						$product		= !empty($record->product) ? $record->product : '';
						$productName	= !empty($record->product_shortname) ? $record->product_shortname : '';

						$default_status = !empty($record->default_status)?$record->default_status:0;
						/*$select	= ($default_status == 1)?'selected':'';*/
						$select = '';
						
						$view	= $product .' ['.$productName.']';
						$val	= $productName .' ['.$product.']';
							
						$html	.='<option value="'.$val.'" '.$select.'>'.$view.'</option>';

					}
				}
				$html	.= '</select>';
				
			}return $html;
		}catch(Exception	$ex){
			log_message('error','Unable to get customer default data '.$ex->getMessage());
		}
	}

	/**
	 * This function used for get populte product options.
	 * 
	 * In this function we are getting the populte product options basis on product and type.
	 * 
	 * @Function	getpopulateProductOptions()
	 * @Created		09-03-2017
	 * @Param		product(string),optiontype(string)
	 * @Return		string
	 * 
	 * */
	 
	function getpopulateProductOptions($input=array()){
		$CI	= & get_instance();
		$userId		= $CI->session->userdata('frontendUserName');
		try{
			$html	= '';
			if(!empty($input['product']) && !empty($input['type'])){
				$productCode = !empty($input['product']) ? $input['product'] : ''; 
				$productCode_filter= substr($input['product'], strpos($input['product'], "[") + 1, (strpos($input['product'], "]") - strpos($input['product'], "[") -1));
				if($productCode_filter=='u'){$productCode_filter='all';}
				$type		= !empty($input['type']) ? $input['type'] : ''; 
				$ptype		= !empty($input['ptype']) ? $input['ptype'] : ''; 
				$wt		= !empty($input['wt']) ? $input['wt'] : ''; 
				
					$sql="select * from qw.get_product_options_default('$productCode_filter','$type','$userId','$wt','$ptype')"; 
					
					$value	= '';
					$results	= $CI->db->query($sql);
					$results	= $results->result();
					
					$results	= !empty($results[0]->get_product_options_default) ? json_decode($results[0]->get_product_options_default) : array();			
				$classNew	= 'custom-select';
				if(!empty($input['var_name']) && $input['var_name'] == 'coloroption'){
					$html	= '<select id="'.$input['var_name'].'" name="'.$input['name'].'" class="'.$classNew.'" data-parsley-required="true" ><option value="">Select</option>';
				}elseif(!empty($input['type']) && $input['type'] == 'Rope'){
					$html	= '<select id="'.$input['var_name'].'" name="'.$input['name'].'" class="'.$classNew.'"><option value="Default[No Rope]">No Rope</option>';
				}elseif(!empty($input['type']) && $input['type'] == 'Termination'){
					$html	= '<select id="'.$input['var_name'].'" name="'.$input['name'].'"  class="'.$classNew.'"><option value="Default[Cat-0]">No Terminations</option>';
				}else{
					if( !empty($input['var_name']) && $input['var_name'] =='addonption'){
						$html	= '<select id="'.$input['var_name'].'" name="'.$input['name'].'"  class="'.$classNew.'"><option value="">Select</option>';
					}else{
						$html	= '<select id="'.$input['var_name'].'" name="'.$input['name'].'" class="'.$classNew.'"  ><option value="None">None</option>';
					}
				}
				if($results){
					
					if(count($results)===1){ 
							$p=explode('[',$results[0]->productlist);
							$val=preg_replace('/\"/', '', $results[0]->productlist);
							$val = str_replace(array('\'', '"'), '', $val);
							$html	.='<option value="'.$val.'" selected>'.trim($p[1],']').' ['.$p[0].']'.'</option>';

					}
					else{					
						foreach($results as $record){
							$p=explode('[',$record->productlist);
							$val=preg_replace('/\"/', '', $record->productlist);
							$val = str_replace(array('\'', '"'), '', $val);
							$default_status = !empty($record->default_status)?$record->default_status:0;
							$select	= ($default_status==1)?'selected':'';
							$html	.='<option value="'.$val.'" '.$select.' >'.trim($p[1],']').' ['.$p[0].']'.'</option>';
						}
					}
				}
				$html	.= '</select>';
			}return $html;
		}catch(Exception	$ex){
			log_message('error','Unable to get populte product options basis on product and type '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for get saleskit product options.
	 * 
	 * In this function we are getting the saleskit product options basis on product and type.
	 * 
	 * @Function	getSaleskitProductOptions()
	 * @Created		16-06-2017
	 * @Param		product(string),optiontype(string)
	 * @Return		string
	 * 
	 * */
	 
	function getSaleskitProductOptions($input=array()){
		$CI	= & get_instance();
		$userId		= $CI->session->userdata('frontendUserName');
		try{
			$html	= '';
			if(!empty($input['product']) && !empty($input['type'])){
				$productCode= substr($input['product'], strpos($input['product'], "[") + 1, (strpos($input['product'], "]") - strpos($input['product'], "[") -1));
				$type		= !empty($input['type']) ? $input['type'] : ''; 
				
				$sql="select * from qw.get_product_options('$productCode','$type','$userId')";
				$value	= '';
				$results	= $CI->db->query($sql);
				$results	= $results->result();
				$results	= !empty($results[0]->get_product_options) ? json_decode($results[0]->get_product_options) : array();
				$html		= '<div class="row saleskit-label">
									<div class="form-row half">
										Item Number <em>*</em>
									</div>
									<div class="form-row half">
										<div class="form-row three">
											Quantity Of Kit <em>*</em>
										</div>
										<div class="form-row three">
											Old Calculator Price
										</div>
										<div class="form-row three">
											Unit Price Override
										</div>
									</div>
								</div>';
				if($results){
					foreach($results as $record){
						$p=explode('[',$record->productlist);
						$val=preg_replace('/\"/', '', $record->productlist);
						$val = str_replace(array('\'', '"'), '', $val);
						$html	.= '<div class="row">
										<div class=" form-row ">
											<div class="form-row half ">
												<input type="text" readonly name="saleskit_item[]"  placeholder="Select Saleskit Option" value="'.$val.'" >
											</div>
											<div class="form-row half">
												<div class="form-row three">
													<input type="number" name="saleskit_qty[]" value="'.$record->default_qty.'" placeholder="SalesKit Quantity" class="saleskit-quantity" data-parsley-min="0"  data-parsley-required="true" data-parsley-type="digits" data-parsley-maxlength="7">
												</div>
												<div class="form-row three">
													<input type="text" name="old_calculator[]" id="price_override" placeholder="Old Calculator Price" 
													data-parsley-type="number" data-parsley-max="50000000" data-parsley-maxlength="11"  value=""   />
												</div>											
												<div class="form-row three">
													<input type="text" name="price_override[]" id="price_override" placeholder="Unit Price Override" 
													data-parsley-type="number" data-parsley-max="50000000" data-parsley-maxlength="11"  value=""   />
												</div>											
											</div>
										</div>
									</div>';
					}
				}
				
			}return $html;
		}catch(Exception	$ex){
			log_message('error','Unable to get populte product options basis on product and type '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for get populte product options.
	 * 
	 * In this function we are getting the populte product options basis on product and type.
	 * 
	 * @Function	editSaleskitProductOptions()
	 * @Created		17-06-2017
	 * @Param		product(string),optiontype(string)
	 * @Return		string
	 * 
	 * */
	 
	function editSaleskitProductOptions($product=null,$type=null,$optionsTypesInfo=null){
		$CI	= & get_instance();
		$userId		= $CI->session->userdata('frontendUserName');
		try{
			$html	= '';
			if(!empty($product) && !empty($type)){
				$sql="select * from qw.get_product_options('$product','$type','$userId')";
				$value	= '';
				$results	= $CI->db->query($sql);
				$results	= $results->result();
				$results	= !empty($results[0]->get_product_options) ? json_decode($results[0]->get_product_options) : array();
				$html		= '<div class="row saleskit-label">
									<div class="form-row half">
										Item Number <em>*</em>
									</div>
									<div class="form-row half">
										<div class="form-row three">
											Quantity Of Kit <em>*</em>
										</div>
										<div class="form-row three">
											Old Calculator Price
										</div>
										<div class="form-row three">
											Unit Price Override
										</div>
									</div>
								</div>';
				if($results){
					//Creating arrays for each same key value pairs
					$optionTypes_arr = (array) $optionsTypesInfo;
					$items = array(); $quantity = array(); $oldPrice = array(); $overridePrice = array();
					foreach ($optionTypes_arr as $val){
						$arr_item[] = $val->item;
						$arr_quantity[] = $val->quantity;
						$arr_oldPrice[] = $val->oldPrice;
						$arr_overridePrice[] = $val->overridePrice;
					}

					//Synchronize two arrays
					$k	= 0;
					foreach($results as $record){
						$p=explode('[',$record->productlist);
						$val=preg_replace('/\"/', '', $record->productlist);
						$val = str_replace(array('\'', '"'), '', $val);
						if(!empty($arr_quantity)){ $quantity	= !empty($arr_quantity[$k]) ? $arr_quantity[$k] : $record->default_qty; }
						if(!empty($arr_oldPrice)){ $oldPrice	= !empty($arr_oldPrice[$k]) ? $arr_oldPrice[$k] : 0.0; }
						if(!empty($arr_overridePrice)){ $overridePrice	= !empty($arr_overridePrice[$k]) ? $arr_overridePrice[$k] : 0.0; }			
						$html	.= '<div class="row">
										<div class=" form-row half" id="saleskit-item-details">
												<input type="text" readonly name="saleskit_item[]"  placeholder="Select Saleskit Option" value="'.$val.'" >
										</div>
										<div class="form-row half">
											<div class="form-row three">
												<input type="number" name="saleskit_qty[]" value="'.$quantity.'" placeholder="SalesKit Quantity" class="saleskit-quantity" min="0"  data-parsley-required="true" data-parsley-type="digits" data-parsley-maxlength="7">
											</div>
											<div class="form-row three">
												<input type="text" name="old_calculator[]" value="'.$oldPrice.'" placeholder="Old Calculator price" class="saleskit-quantity" min="0"  data-parsley-type="number" data-parsley-maxlength="7">
											</div>

											<div class="form-row three">
												<input type="text" name="price_override[]" value="'.$overridePrice.'" placeholder="Unit Override Price" class="saleskit-quantity" min="0"  data-parsley-type="number" data-parsley-maxlength="7">
											</div>
										</div>
									</div>';
						$k++;
					}
				}
			}return $html;
		}catch(Exception	$ex){
			log_message('error','Unable to get populte product options basis on product and type '.$ex->getMessage());
		}
	}
	
	
	
	/**
	 * This function used for get customer list for auto complete.
	 * 
	 * In this function we are searching customere basis on filter keyword;
	 * 
	 * @Function	customerList()
	 * @Created		08-03-2017
	 * @Param		keyword(string)
	 * @Retrun		string
	 * 
	 * */
	function customerList($keyword=null){
		try{
			$CI	= & get_instance();
			if(!empty($keyword)){
				$sql="select * from qw.get_all_customer('$keyword')";
				$value	= '';
				$results	= $CI->db->query($sql);
				$results	= $results->result();
				if(!empty($results)){
					$results=json_decode($results[0]->get_all_customer);
					
					if(!empty($results)){
						foreach($results as $result){
							if(!empty($result->customername)){
								//$value[]	= ucfirst($result->ardivisionno.'-'.$result->customerno.' ['.$result->customername.']');
								$value[]	= ucfirst($result->accountnumber.' ['.$result->customername.']');
							}
						}
					}else{
						$value[]	= 'No Record Found !';
					}
				}
				return $value;
			}
		}catch(Exception	$ex){
			log_message('error','Unable to get customer result basis on searching keyword');
		}
	}
	
	/**
	 * This function used for get item list for auto complete.
	 * 
	 * In this function we are searching customere basis on filter keyword;
	 * 
	 * @Function	itemList()
	 * @Created		11-05-2017
	 * @Param		keyword(string)
	 * @Retrun		string
	 * 
	 * */
	function itemList($search=null){
		try{
			$CI	= & get_instance();
			
				$sql="select * from qw.get_writein_products('all')";
				$value	= '';
			$results	= $CI->db->query($sql);
			$results	= $results->result();	
				$html='<option value="">Select Item Code</option>';
					if(!empty($results)){
						$results=!empty($results[0]->get_writein_products)?json_decode($results[0]->get_writein_products):'';
						//dump($results);die;
						if(!empty($results)){
							foreach($results as $result){
								if(!empty($result->itemcode)){
									$value	= $result->proudct_description.'['.$result->itemcode.']';
									$sel='';
									if(!empty($search)&&strtolower($search)==strtolower($result->itemcode)){
										$sel="selected";
									}
									$val=preg_replace('/\"/', '', $value);
									$val = str_replace(array('\'', '"'), '', $val); 
									$val1 = nl2br($result->proudct_description);
									/*$breaks = array("<br />","<br>","<br/>");  
									$val1 = str_ireplace($breaks, "\r\n", $val1);*/  
									$val1 = $val1.'['.$result->itemcode.']'; 
									$html .= '<option value="'.$val1.'" '.$sel.' >'.$result->itemcode.'</option>';	
								}
							}
						}
					}
				return $html;
			
		}catch(Exception	$ex){
			log_message('error','Unable to get customer result basis on searching keyword');
		}
	}
	/**
	 * This function used for get opportunity list for auto complete.
	 * 
	 * In this function we are searching opportunity basis on filter keyword;
	 * 
	 * @Function	opportunityList()
	 * @Created		10-05-2017
	 * @Param		keyword(string)
	 * @Retrun		string
	 * 
	 * */
	function opportunityList($keyword=null){
		try{
			$CI	= & get_instance();
			if(!empty($keyword)){
				
			$sql="select * from qw.get_all_crmopportunity('$keyword')";
				$value	= '';
			$results	= $CI->db->query($sql);
			$results	= $results->result();	
				
					if(!empty($results)){
						$results=json_decode($results[0]->get_all_crmopportunity);
						
					}
				
				return $results;
			}
		}catch(Exception	$ex){
			log_message('error','Unable to get customer result basis on searching keyword');
		}
	}
	
	/**
	 * This function used for get opportunity list for auto complete.
	 * 
	 * In this function we are searching contact basis on filter keyword;
	 * 
	 * @Function	contactList()
	 * @Created		10-05-2017
	 * @Param		keyword(string)
	 * @Retrun		string
	 * 
	 * */
	function contactList($keyword=null){
		try{
			$CI	= & get_instance();
			if(!empty($keyword)){

				$sql="select * from qw.get_all_crmcontact('$keyword','')";
				$value	= '';
				$results	= $CI->db->query($sql);
				$results	= $results->result();
				if(!empty($results)){

					$results=json_decode($results[0]->get_all_crmcontact);
				}
				//dump($results);

				return $results;
			}else{
				return false;}
		}catch(Exception	$ex){
			log_message('error','Unable to get all contact result ');
		}
	}
	
	/**
	 * @Function	-: getProductSpecification()
	 * @Description	-: This function used for product  specification
	 * @Param		-: No Parameter
	 * @created		-: 10-04-2017
	 * 
	 * */
	function getProductSpecification($keyword=null){
		try{
			$CI	= & get_instance();
			if(!empty($keyword)){
				$records	= $CI->db->select('feature, measure,IF(uom="", " ", uom) as uom',false)
								->where('itemcode',$keyword)
								->get('qw.dwstatic_itemspecification')->result();
				if(!empty($records)){
					foreach($records as $record){
						echo $row->feature; 
						echo $row->measure; 
						echo $row->uom;
					}
				}echo "";
			}echo "";
		}catch(Exception	$ex){
			log_message('error','Unable to get product specification result basis on keyword');
		}
	}
	/**
	 * @Function	-: getPopulateThreadlist()
	 * @Description	-: This function used for populate the tread list by the border 
	 * @Param		-: No Parameter
	 * @created		-: 21-03-2017
	 * 
	 * */
	function getPopulateThreadlist($keyword=null){
		try{
			$CI	= & get_instance();
			$html	= '';
			if(!empty($keyword)){
				$lastThreeChar	= substr($keyword,-3);
				$keyword	= substr($keyword, strpos($keyword, "[") + 1, (strpos($keyword, "]") - strpos($keyword, "[") -1));
				$sql		= "select * from qw.get_thread_color('".$keyword."')";
				$results	= $CI->db->query($sql);
				$results	= $results->result();
				$records	= !empty($results[0]->get_thread_color) ? json_decode($results[0]->get_thread_color) : '';
				$html	= '<select id="threadoption" name="net_thread" class="custom-select">';
				$html	.= '<option value="None">None</option>';
					
				if(!empty($records)){
					foreach($records as $record){
						$lastThreeChar2	= substr($record->productlist,-3);
						$select			= (!empty($lastThreeChar2) && $lastThreeChar2==$lastThreeChar) ?  'selected' : '';
						$p				= explode('[',$record->productlist);
						$html	.= '<option value="'.$record->productlist.'" '.$select.'>'.trim($p[1],']').' ['.$p[0].']</option>';
					}
				}
				$html	.= '</select>';
			}return $html;
		}catch(Exception	$ex){
			log_message('error','Unable to get populate thread list basis on keyword');
		}
	}
	/**
	 * @Function	-: customNetQuote()
	 * @Description	-: This function used for calcualte and save the custom net cost and details
	 * @Param		-: array()
	 * @created		-: 12-03-2017
	 * @return 		-:json
	 * */
	function customNetQuote($postData=array(),$type=0){
		$CI	= & get_instance();
		$login_user=$CI->session->userdata('frontendUserName');
		if(!empty($login_user)){
		$n_customer		= str_replace('&', 'and', (!empty($postData['customer']) ? $postData['customer'] : '')); 
		$n_product		= str_replace('&', ' ', (!empty($postData['net_product']) ? $postData['net_product'] : ''));
		$n_style		= str_replace('&', ' ', (!empty($postData['net_style']) ? $postData['net_style'] : '')); 
		$n_addon		= str_replace('&', ' ', (!empty($postData['net_addon']) ? $postData['net_addon'] : ''));
		$n_border		= str_replace('&', ' ', (!empty($postData['net_border']) ? $postData['net_border'] : ''));
		$n_border2		= str_replace('&', ' ', (!empty($postData['net_border2']) ? $postData['net_border2'] : ''));
		$n_border3		= str_replace('&', ' ', (!empty($postData['net_border3']) ? $postData['net_border3'] : ''));
		$n_thread		= str_replace('&#', ' ', (!empty($postData['net_thread']) ? $postData['net_thread'] : ''));
		$n_number		= !empty($postData['net_number']) ? $postData['net_number'] : '';
		$n_length		= !empty($postData['net_length']) ? $postData['net_length'] : '0';
		$n_width		= !empty($postData['net_width']) ? $postData['net_width'] : '0';
		$tag_number		= !empty($postData['tag_number']) ? $postData['tag_number'] : '';
		/* Modify at the 22-11-2017 */
		$shipToAddress	= !empty($postData['ship_to_address']) ? $postData['ship_to_address'] : '';
		$shipToAddress = str_replace("'", "''", $shipToAddress);
		$oldPrice		= !empty($postData['old_calculator']) ? $postData['old_calculator'] : '0';
		$priceOverride	= !empty($postData['price_override']) ? $postData['price_override'] : '0';
		/* Modify at the 22-11-2017 */
		/* */
			$lft		= (2 * $n_length) + (2 * $n_width);
			$sft		= ($n_length * $n_width);
		/* */
		$addon_num		= !empty($postData['number_addon']) ? $postData['number_addon'] : '0';
		$addon_uom		= !empty($postData['addon_uom']) ? $postData['addon_uom'] : '0';
		$n_discount		= !empty($postData['discount']) ? $postData['discount'] : '0';
		$addlpart		= !empty($postData['addlpart']) ? $postData['addlpart'] : '';
		$instrunctions		= !empty($postData['instrunctions']) ? $postData['instrunctions'] : '';
		$instrunctions = str_replace("'", "''", $instrunctions);

		$salesPerson	= !empty($postData['choose-sales']) ? trim($postData['choose-sales']) : '';
		/* Checking for Salesperson email id */
		$salesPersonMailId	= '';
		if(!empty($salesPerson)){
			$salesPerson	= explode('##',$salesPerson);
			if(!empty($salesPerson)){
				$salesPerson	= !empty($salesPerson[0]) ? $salesPerson[0] : '';
				$salesPersonMailId	= !empty($salesPerson[1]) ? $salesPerson[1] : '';
			}
		}
		/* Checking for Salesperson email id */
		$wtClass		= !empty($postData['choose-wtclass']) ? $postData['choose-wtclass'] : '';

		$seam_style		= !empty($postData['seam_style']) ? $postData['seam_style'] : '0';
		$lash_position	= !empty($postData['lash_position']) ? $postData['lash_position'] : '0';
		$cut_style		= !empty($postData['cut_style']) ? $postData['cut_style'] : '0';
		$pricing_tier	= !empty($postData['pricing_tier']) ? $postData['pricing_tier'] : '0';
		$old_quoteid	= !empty($postData['old_quoteid']) ? $postData['old_quoteid'] : '';
		$quote_line	= !empty($postData['quote_line']) ? $postData['quote_line'] : 0;	
		$opportunity		= !empty($postData['opportunity']) ? $postData['opportunity'] : '';
		$customOpportunity	= !empty($postData['custom-opportunity']) ? trim($postData['custom-opportunity']) : '';
		if(!empty($customOpportunity)){
			$opportunity	= $customOpportunity;
		}
		
		$contact		= !empty($postData['contact']) ? $postData['contact'] : '0';
		$contact = str_replace("'", "''", $contact);
		if(empty($contact)){
			$html		= '';
			$message	= "Select a Contact First!";
			$stat		= 'No';
			return array('html'=>$html,'error'=>$message);
		}
		
		
		$lead_time		= !empty($postData['lead-time']) ? $postData['lead-time'] : '0';
		$proposalNumber		= !empty($postData['proposal_number']) ? $postData['proposal_number'] : '';
		$overrideProposalDesc	= !empty($postData['override_proposal_desc']) ? $postData['override_proposal_desc'] : '';
		/* 28-07-2017 Mark for review and quote description */
			$editQuoteDescription		= !empty($postData['edit_quote_description']) ? $postData['edit_quote_description'] : '';
			$editQuoteDescription 		= str_replace("'", "''", $editQuoteDescription);
			$editQuoteDescription		= str_replace("\n",';',$editQuoteDescription);
			$markForReview	= !empty($postData['mark_for_reviews']) ? $postData['mark_for_reviews'] : 0;
		/* 28-07-2017 Mark for review and quote description */
		
		if ($old_quoteid == 'No') {
			$orig_quote_id = '';
		} else {
			$orig_quote_id = $old_quoteid;
		}
		$stat='No';$message=''; $html		= '';
		if ($n_customer == '') {
			$n_cust = 'None';
			$message	= "Select a Customer First!";
			$stat	= 'No';
			return array('html'=>$html,'error'=>$message);
			
		} else {
			$n_cust=explode('[',$n_customer);
			$n_cust = trim($n_cust[0]);
			
		}
		if ($postData['net_product'] == "None") {
			$product	= "NONE";
			$message	= "Please Select a Product First!";
			$stat	= 'No';
			return array('html'=>$html,'error'=>$message);
		} else {
			$product = substr($n_product, strpos($n_product, "[") + 1, (strpos($n_product, "]") - strpos($n_product, "[") -1));
		}
		if ($postData['net_style'] == "None") {
			$netcolor	= "NONE";
			$message	= "Please Select a Net First!";
			$stat	= 'No';
			return array('html'=>$html,'error'=>$message);
			
		} else {
			$netcolor = substr($n_style, strpos($n_style, "[") + 1, (strpos($n_style, "]") - strpos($n_style, "[") -1));
		}

		if ($postData['net_border'] == "None") {
			$borderoption = "NONE";
		} else {
			$borderoption = substr($n_border, strpos($n_border, "[") + 1, (strpos($n_border, "]") - strpos($n_border, "[") -1));
		}

		if ($postData['net_border2'] == "None") {
			$borderoption2 = "NONE";
		} else {
			$borderoption2 = substr($n_border2, strpos($n_border2, "[") + 1, (strpos($n_border2, "]") - strpos($n_border2, "[") -1));
		}

		if (!empty($postData['net_border3'])&&$postData['net_border3'] == "None") {
			$borderoption3 = "NONE";
		} else {
			$borderoption3 = substr($n_border3, strpos($n_border3, "[") + 1, (strpos($n_border3, "]") - strpos($n_border3, "[") -1));
		}

		if (!empty($postData['net_thread']) && $postData['net_thread']  == "None") {
			 $threadoption = "NONE";
		} else {
			 $n_thread;
			 $threadoption = substr($n_thread, strpos($n_thread, "[") + 1, (strpos($n_thread, "]") - strpos($n_thread, "[") -1));
		}
		$addon = "NONE";
		$addlcost	= !empty($postData['addlcost']) ? $postData['addlcost'] : '0.0';
		$addllabor	= !empty($postData['addllabor']) ? $postData['addllabor'] : '0.0';
		
		if (!empty($postData['net_addon']) && $postData['net_addon'] == "None") {
			$addon = "NONE";
		} else {
			$addon = substr($n_addon, strpos($n_addon, "[") + 1, (strpos($n_addon, "]") - strpos($n_addon, "[") -1));
		}
		if(!empty($postData['addlpart'])){
			if (empty($postData['addlcost']) ||  empty($postData['addllabor'])) {
				$message	= "Enter Additional Part Details (Additional Material Price / Additional Labor (Hour))";
				$stat		= 'No';
				return array('html'=>$html,'error'=>$message);
			} else {
				$addlcost	= !empty($postData['addlcost']) ? $postData['addlcost'] : '0.0';
				$addllabor	= !empty($postData['addllabor']) ? $postData['addllabor'] : '0.0';
			}
		}
		$seamstyle		= substr($seam_style, strpos($seam_style, "[") + 1, (strpos($seam_style, "]") - strpos($seam_style, "[") -1));
		$seamstyle		= !empty($seamstyle) ? $seamstyle : 0;
		$lashposition	= substr($lash_position, strpos($lash_position, "[") + 1, (strpos($lash_position, "]") - strpos($lash_position, "[") -1));
		$lashposition	= !empty($lashposition) ? $lashposition : 0;
		$cutstyle		= substr($cut_style, strpos($cut_style, "[") + 1, (strpos($cut_style, "]") - strpos($cut_style, "[") -1));
		$cutstyle		= !empty($cutstyle) ? $cutstyle : 0;
		$pricingtier	= substr($pricing_tier, strpos($pricing_tier, "[") + 1, (strpos($pricing_tier, "]") - strpos($pricing_tier, "[") -1));
		$pricingtier	= !empty($pricingtier) ? $pricingtier : 0;
		$bd_pos= strpos($netcolor, "BD");
		if ($cutstyle == "2" and $bd_pos > 1) {
				$message	= "You cannot HEAT cut a Bonded Net!!!";
				$stat		= 'No';
		}
		
		if($message==''){
			$save_flag	= $type;
				
			$res		= "SELECT * from qw.customnet_quote($save_flag, '$orig_quote_id', $quote_line,'$n_cust', '$product', 
			'$netcolor', $n_length, $n_width, '$borderoption', '$borderoption2', '$borderoption3', '$threadoption', '$addon',
			  $addon_num, '$addon_uom', $n_number, '$addlpart', $addlcost, $addllabor, $seamstyle, $lashposition, $cutstyle,
			   $pricingtier, $n_discount,'$instrunctions','$login_user','$salesPerson','$wtClass','$opportunity','$contact',
			   '$lead_time','$tag_number','$proposalNumber','$overrideProposalDesc',$markForReview,'$editQuoteDescription',
			   '$shipToAddress',$oldPrice,$priceOverride)";
			//echo $res; die;
				
			/* Log Query Test (07-08-2017)*/
				$functionFor	= !empty($save_flag) ? ' Save ' : ' Calulate ';
				queryLog('Custom Net'.$functionFor.'Quote Function',$res );
			/* Log Query Test */
			$results	= $CI->db->query($res);
			$results	= $results->result();
			$costpernet = 0.0;
			$subtotal	= 0;
			//dump($results);die;
			if(!empty($results)){
				$editableQuoteDescription	= !empty($results[0]->quote_description) ? $results[0]->quote_description : '';
				$editableQuoteDescription	= str_replace(';',"\n",$editableQuoteDescription);
				
				$checker	= 0;
				$n_customer=explode('[',$n_customer);
				$cus=!empty($n_customer[1])?trim($n_customer[1],']'):$n_customer[0];
				$cus='<div class="net-calcultor-save"><p class="next"><strong>Customer : </strong>'.$cus.' </p>
									<p class="next1"><strong>Product : </strong> Custom Net Quote </p>';
									/* Quote Description for editable update (24-07-2017)*/
									$cus	.='<p><strong>Description : </strong></p>
									<p class="editable-quote-description">
									<textarea name="editable_quote_description" class="return_quote_description">'.$editableQuoteDescription.'</textarea></p>';
									/* Quote Description for editable update (24-07-2017)*/
									$cus	.='<p><strong> Quantity : </strong>'.$n_number.'</p></div>';
					$table='<table class="excel_download"><tr><td>Product:</td><td>'.$n_product.'</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
					<tr><td> Quantity :</td><td>'.$n_number.'</td><td> </td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
					$table .='<tr><td></td><td></td><td>Item#</td><td>QuantityPerNet</td><td>TotalQantity</td><td>UOM</td><td>Activity Code</td><td>Step</td></tr>';
				$counting	= 0;
				foreach($results as $row){
					//print_r($results);
					if(!empty($save_flag)){
						$quote_id=$row->quoteid;
						$proposalNumber=$row->proposalnum;
						/* Send mail to Sales Person */
							$quant	= !empty($n_number) ? $n_number : 0;
							$salespersonMailData	= array('quoteId'=>$quote_id,'proposalId'=>$proposalNumber,
							'lineNo'=>$quote_line,'type'=>'Custom Psn','quantity'=>$quant,'salespersonEmail'=>$salesPersonMailId);
							$finalUrl	= 1;//sendMailToSalesMenForBOM($salespersonMailData);
							return array('html'=>$quote_id,'error'=>$message,'proposalNumber'=>$proposalNumber);
						/* Send mail to Sales Person */
						break;
					}
						$itemcode			= !empty($row->itemcode) ? $row->itemcode : '';
						$uom				= !empty($row->uom) ? $row->uom : '';
						$laboractivityrate	= !empty($row->laboractivityrate) ? $row->laboractivityrate : '';
						$activitycode		= !empty($row->activitycode) ? $row->activitycode : '';
						$attributeArray		= array('itemCode'=>$itemcode,'uom'=>$uom,'laboractivityrate'=>$laboractivityrate,'activitycode'=>$activitycode);
						
						$costpernet = $costpernet + $row->totalcost;
						$subtotal	= $subtotal + $row->totalcost;
						$html	.='<div class="order-list">
									<div class="item-quantity">'.$cus;
										if($counting==0){
											$html	.='<p><strong>Item # </strong> <strong class="margin-right">Qty (UOM) </strong>';
										}
										/* Here We are getting the available quantity based on Item Code */
										$availableQuantity			= getAvailableQuantityOfItemCode($row->itemcode);
										/*$displayAvailDes			= !empty($availableQuantity['description']) ? 'Item Desc : '.$availableQuantity['description'].'<br />' :'';
										$displayAvailQnt			= !empty($availableQuantity['quantity']) ? 'Avail Qty : '.$availableQuantity['quantity'] :'';
										$displayAvailableQntHtml1	= (empty($displayAvailDes) && empty($displayAvailQnt)) ? 'Quantity Not Available' : $displayAvailDes.$displayAvailQnt;
										*/
										$displayAvailableQntHtml	= '<span class="tooltiptext">'.$availableQuantity['current'].'<br>'.$availableQuantity['alternate'].'</span>';
										/* End Here */
										$html	.='<p><a class="tooltip">'.$row->itemcode.displayRedStopIcon($attributeArray).$displayAvailableQntHtml.'</a> <span>'.round($row->quantity, 2).' ('.$row->uom.') </span>';
									$html	.='</div></div>';
							$cus='';	
					$table .='<tr><td></td><td></td><td>'.$row->itemcode.'</td><td>'.round($row->quantity, 2).'</td><td> '.round(($row->quantity*$n_number), 2).'</td><td>'.$row->uom.'</td><td>'.$row->activitycode.'</td><td>'.$row->wt_step.'</td></tr>';
					$counting++;
				}
				$pricePerSft	= $priceOverride === '0' ? ($subtotal / $sft): ($priceOverride / $sft);
				$table .='</table>';
				$html	.='*<div class="sub-total">';
				if($priceOverride === '0'){
					$html	.='<p> Price per net <span ><strong>'.number_format($subtotal,2).'</strong></span></p>
							   <p> Price per SFT <span ><strong>'.number_format($pricePerSft,2).'</strong></span></p>
							   </div><p>Sub Total Price</p>
							   <h3 id="total_of_subtotal">'.number_format(($subtotal*$n_number),0).'</h3>';
				}
				else {
					$html	.='<p> Original Price per net <span ><strong>'.number_format($subtotal,2).'</strong></span></p>
							   <p></p>
							   <p> Override Price per net <span ><strong>'.number_format($priceOverride,2).'</strong></span></p>
							   <p> Price per SFT <span ><strong>'.number_format($pricePerSft,2).'</strong></span></p>
							   </div><p>Sub Total Price</p>
							   <h3 id="total_of_subtotal">'.number_format(($priceOverride*$n_number),0).'</h3>';
				}
					
				if(empty($type)){
					$html .='<a href="javascript:void(0)" id="saveQuote">Save Quote</a><a href="#" class="download">
							<i class="fa fa-file-excel-o" aria-hidden="true"></i> BOM</a>';
				}
				$html .='*'.$table;
				$stat	= 'Yes';
				
			}else{
				$html	= '';
				$stat	= 'No';
			}
		}
		return array('html'=>$html,'error'=>$message);
	}
	return array('html'=>'','error'=>'Please login your session expired');
	}
	

	

	/**
	 * This function used for update user info
	 * 
	 * In this function we are fetching records from  qw_users table basis on email
	 * 
	 * @Function	-: updateUserInfo()
	 * @Created on	-: 01-03-2017
	 * @Param		-: userId(int),data(array())
	 * @Return		-: array()
	 * 
	 *  */
	function updateUserInfo($userId=null,$data=array()){
		$CI	= & get_instance();
		try{
			if(!empty($userId)){
				$result		= $CI->db->where('qw_users.id',$userId)
						->update('qw.qw_users',$data);
				if($result){
					return true;
				}return false;
			}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to uypdate user info based on user email '.$ex->getMessage());
		}
	}
	
	
	/**
	 * @Function	-: getCustomPsnQuote()
	 * @Description	-: This function used for calculate and save the custom psn quote cost and details
	 * @Param		-: array
	 * @created		-: 14-03-2017
	 * @return		-:json
	 * */
	function getCustomPsnQuote($postData=array(),$type=0){
		$CI	= & get_instance();
		
		$login_user=$CI->session->userdata('frontendUserName');
		if(!empty($login_user)){
		if(empty($postData)){
			return false;
		}else{
			$html	= ''; $total	= 0; $error= '';$message='';
			$n_style		= str_replace('&', 'and', $postData['net_style']); 
			$n_customer		= str_replace('&', 'and', $postData['customer']); 
			$n_pricingtier	= !empty($postData['pricing_tier']) ? $postData['pricing_tier'] :'';
			$old_quoteid	= !empty($postData['old_quoteid']) ? $postData['old_quoteid'] : '';
			$spl_instruction	= !empty($postData['instrunctions']) ? $postData['instrunctions'] : '';
			$spl_instruction = str_replace("'", "''", $spl_instruction);	
			$opportunity		= !empty($postData['opportunity']) ? $postData['opportunity'] : '';
			$customOpportunity	= !empty($postData['custom-opportunity']) ? trim($postData['custom-opportunity']) : '';
			if(!empty($customOpportunity)){
				$opportunity	= $customOpportunity;
			}
			$contact		= !empty($postData['contact']) ? $postData['contact'] : '0';
			$contact = str_replace("'", "''", $contact);
			if(empty($contact)){
				$html		= '';
				$message	= "Select a Contact First!";
				$stat		= 'No';
				return array('html'=>$html,'error'=>$message);
			}
			
			$lead_time		= !empty($postData['lead-time']) ? $postData['lead-time'] : '0';
			$quote_line		= !empty($postData['quote_line']) ? $postData['quote_line'] : 0;
			$tag_number		= !empty($postData['tag_number']) ? $postData['tag_number'] : '';
			$proposalNumber	= !empty($postData['proposal_number']) ? $postData['proposal_number'] : '';
			/* Modify at the 29-11-2017 */
			$shipToAddress	= !empty($postData['ship_to_address']) ? $postData['ship_to_address'] : '';
			$shipToAddress = str_replace("'", "''", $shipToAddress);
			$oldPrice		= !empty($postData['old_calculator']) ? $postData['old_calculator'] : '0';
			$priceOverride	= !empty($postData['price_override']) ? $postData['price_override'] : '0';
			/* Modify at the 29-11-2017 */
			/* Changes 27-07-2017 */
				$editQuoteDescription	= !empty($postData['edit_quote_description']) ? $postData['edit_quote_description'] : '';
				$editQuoteDescription 	= str_replace("'", "''", $editQuoteDescription);
				$editQuoteDescription	= str_replace("\n",';',$editQuoteDescription);
				$markForReview			= !empty($postData['mark_for_reviews']) ? $postData['mark_for_reviews'] : 0;
			/* 27-07-2017 */
			if ($old_quoteid == 'No') {
				$orig_quote_id = '';
			} else {
				$orig_quote_id = $old_quoteid;
			}

			$n_length	= !empty($postData['net_length']) ? $postData['net_length'] : 0;
			$n_width	= !empty($postData['net_width']) ? $postData['net_width'] : 0;
			/* */
			$lft		= (2 * $n_length) + (2 * $n_width);
			$sft		= ($n_length * $n_width);
			/* */
			$salesPerson		= !empty($postData['choose-sales']) ? trim($postData['choose-sales']) : '';
			/* Checking for Salesperson email id */
			$salesPersonMailId	= '';
			if(!empty($salesPerson)){
				$salesPerson	= explode('##',$salesPerson);
				if(!empty($salesPerson)){
					$salesPerson	= !empty($salesPerson[0]) ? $salesPerson[0] : '';
					$salesPersonMailId	= !empty($salesPerson[1]) ? $salesPerson[1] : '';
				}
			}
			/* Checking for Salesperson email id */
			$wtClass		= !empty($postData['choose-wtclass']) ? $postData['choose-wtclass'] : '';

			if ($n_length < $n_width) {
				$error	= "Length must be greater than Width";
			}
			$n_number	= !empty($postData['net_number']) ? $postData['net_number'] : 0;
			if ($n_number < 1) {
				$error	= "Number of Net must be greater than 0.";
			}
			$n_discount	= !empty($postData['discount']) ? $postData['discount'] : 0;
			if ($postData['net_style'] == 'None') {
				$n_code = 'None';
				$error	= "Select a Product First!";
			} else {
				$n_code = substr($n_style, strpos($n_style, "[") + 1, (strpos($n_style, "]") - strpos($n_style, "[") -1));
			}
			if ($n_customer == '') {
				$n_cust = 'None';
				$error	= "Select a Customer First!";
			} else {
				$n_cust=explode('[',$n_customer);
			$n_cust = trim($n_cust[0]);
			}
			$pricingtier	= substr($n_pricingtier, strpos($n_pricingtier, "[") + 1, (strpos($n_pricingtier, "]") - strpos($n_pricingtier, "[") -1));
			$save_flag		= $type;
			
			if(empty($error)){
				$res = "SELECT * from qw.custompsn_quote($save_flag, '$orig_quote_id',$quote_line ,'$n_cust', '$n_code', $n_length,
				 $n_width, $n_number, $pricingtier, $n_discount, '$spl_instruction','$login_user','$salesPerson','$wtClass',
				 '$opportunity','$contact','$lead_time','$tag_number','$proposalNumber',$markForReview,'$editQuoteDescription',
				 '$shipToAddress',$oldPrice,$priceOverride)";
				/* Log Query Test (07-08-2017)*/
					$functionFor	= !empty($save_flag) ? ' Save ' : ' Calulate ';
					queryLog('Custom PSN'.$functionFor.'Quote Function',$res );
				/* Log Query Test */
				$results	= $CI->db->query($res);
				$results	= $results->result();
				
					$costpernet	= 0.0;
					$subtotal	= 0;
					//dump($results);
					if(!empty($results)){
						$editableQuoteDescription	= !empty($results[0]->quote_description) ? $results[0]->quote_description : '';
						$editableQuoteDescription	= !empty($markForReview) ? $editableQuoteDescription.'; Pending Review' : $editableQuoteDescription;
						$editableQuoteDescription	= str_replace(';',"\n",$editableQuoteDescription);
						//dump($results);
						$n_customer=explode('[',$n_customer);
						$cus	= !empty($n_customer[1])?trim($n_customer[1],']'):$n_customer[0];
						$cus	= '<div class="psn-calcultor-save"><p class="next"><strong>Customer : </strong>'.$cus.' </p>
								<p class="next1"><strong>Custom PSN Quote</strong> </p>';
								/* Quote Description for editable update (28-07-2017)*/
								$cus	.='<p><strong>Description : </strong></p>
								<p class="editable-quote-description">
								<textarea name="editable_quote_description" class="return_quote_description">'.$editableQuoteDescription.'</textarea></p>';
								/* Quote Description for editable update (28-07-2017)*/
								//<p><strong> Type : </strong>'.$postData['net_style'].'</p>
								$cus .='<p><strong> Quantity : </strong>'.$n_number.'</p></div>';
						$table='<table class="excel_download"><tr><td>Product:</td><td>'.$postData['net_style'].'</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
						<tr><td> Quantity :</td><td>'.$n_number.'</td><td> </td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
						$table .='<tr><td></td><td></td><td>Item#</td><td>QuantityPerNet</td><td>TotalQantity</td><td>UOM</td><td>Activity Code</td><td>Step</td></tr>';
						$counting	= 0;
						foreach($results as $row){
							if(!empty($save_flag)){
								$quote_id=$row->quoteid;
								$proposalNumber=$row->proposalnum;
								/* Send mail to Sales Person */
									$quant	= !empty($n_number) ? $n_number : 0;
									$salespersonMailData	= array('quoteId'=>$quote_id,'proposalId'=>$proposalNumber,
									'lineNo'=>$quote_line,'type'=>'Custom Psn','quantity'=>$quant,'salespersonEmail'=>$salesPersonMailId);
									$finalUrl	= 1;//sendMailToSalesMenForBOM($salespersonMailData);
									return array('html'=>$quote_id,'error'=>$message,'proposalNumber'=>$proposalNumber);
								/* Send mail to Sales Person */
								break;
							}
							$itemcode			= !empty($row->itemcode) ? $row->itemcode : '';
							$uom				= !empty($row->uom) ? $row->uom : '';
							$laboractivityrate	= !empty($row->laboractivityrate) ? $row->laboractivityrate : '';
							$activitycode		= !empty($row->activitycode) ? $row->activitycode : '';
							$attributeArray		= array('itemCode'=>$itemcode,'uom'=>$uom,'laboractivityrate'=>$laboractivityrate,'activitycode'=>$activitycode);
							
							$costpernet	= $costpernet + $row->totalcost;
							$subtotal	= $subtotal+$row->totalcost;
							
							$html	.='<div class="order-list">
										<div class="item-quantity">
										'.$cus;
										if($counting==0){
											$html	.='<p><strong>Item # </strong> <strong class="margin-right">Qty (UOM) </strong>';
										}
										/* Here We are getting the available quantity based on Item Code */
										$availableQuantity			= getAvailableQuantityOfItemCode($row->itemcode);
										/*$displayAvailDes			= !empty($availableQuantity['description']) ? 'Item Desc : '.$availableQuantity['description'].'<br />' :'';
										$displayAvailQnt			= !empty($availableQuantity['quantity']) ? 'Avail Qty : '.$availableQuantity['quantity'] :'';
										$displayAvailableQntHtml1	= (empty($displayAvailDes) && empty($displayAvailQnt)) ? 'Quantity Not Available' : $displayAvailDes.$displayAvailQnt;
										*/
										$displayAvailableQntHtml	= '<span class="tooltiptext">'.$availableQuantity['current'].'<br>'.$availableQuantity['alternate'].'</span>';
										/* End Here */
										$html	.='<p><a class="tooltip">'.$row->itemcode.displayRedStopIcon($attributeArray).$displayAvailableQntHtml.'</a> <span>'.round($row->quantity, 2).' ('.$row->uom.') </span>';
										$html	.='</div></div>';
										$cus='';
						$table .='<tr><td></td><td></td><td>'.$row->itemcode.'</td><td>'.round($row->quantity, 2).'</td><td>'.round(($row->quantity*$n_number), 2).'</td><td>'.$row->uom.'</td><td>'.$row->activitycode.'</td><td>'.$row->wt_step.'</td></tr>';
						$counting ++;
						}
						$pricePerSft	= $priceOverride === '0' ? ($subtotal / $sft): ($priceOverride / $sft);
						$table .='</table>';
						$html	.='*<div class="sub-total">';
						if($priceOverride === '0'){
							$html	.='<p> Price per net <span ><strong>'.number_format($subtotal,2).'</strong></span></p>
									   <p> Price per SFT <span ><strong>'.number_format($pricePerSft,2).'</strong></span></p>
									   </div><p>Sub Total Price</p>
									   <h3 id="total_of_subtotal">'.number_format(($subtotal*$n_number),0).'</h3>';
						}
						else {
							$html	.='<p> Original Price per net <span ><strong>'.number_format($subtotal,2).'</strong></span></p>
									   <p></p>
									   <p> Override Price per net <span ><strong>'.number_format($priceOverride,2).'</strong></span></p>
									   <p> Price per SFT <span ><strong>'.number_format($pricePerSft,2).'</strong></span></p>
									   </div><p>Sub Total Price</p>
									   <h3 id="total_of_subtotal">'.number_format(($priceOverride*$n_number),0).'</h3>';
						}
							
						if(empty($type)){
							$html .='<a href="javascript:void(0)" id="saveCalculatePsn">Save Quote</a><a href="#" class="download">
									<i class="fa fa-file-excel-o" aria-hidden="true"></i> BOM</a>';
						}
						$html .='*'.$table;
						$stat	= 'Yes';
					}else{
						$html		= '';
						$subtotal	= 0;
					}
			}
			return array('html'=>$html,'total'=>$total,'error'=>$error);
		}
	}
	return array('html'=>'','error'=>'Please login your session expired');
	}
	
	/* this function use for populated the Hardware list 
	 * We have use this function get the all Hardware list .
	 * pass the search parameter
	 * */
	 /**
	 * @Function	-: getProductSpecification()
	 * @Description	-: This function used for product  specification
	 * @Param		-: No Parameter
	 * @created		-: 10-04-2017
	 * 
	 * */
	function getpopulateHardware($search=null){
		$CI			= & get_instance();
		$sel_run="select * from qw.get_hardware('all')";
		$results	= $CI->db->query($sel_run);
		$results	= $results->result();
			$html='';		
			if(!empty($results)){
				$i=0;
				$results=json_decode($results[0]->get_hardware);
				//print_r($results);
				if(!empty($results)){
					foreach($results as $row){
						
						$string = trim(preg_replace('/\s+/', ' ', $row->itemcodedesc));
						
						$string = str_replace(array('\'', '"'), '', $string); 
						$sel='';
						$string=$string.' ['.$row->itemcode.']';
						$view=$row->itemcode.' ['.$string.']';
						if(!empty($search)&&strtolower($search)==strtolower($row->itemcode)){
							$sel="selected";
							}
						$html .= '<option value="'.$string.'" '.$sel.'  >'.$view.'</option>';	
						
						$i++;
					}
				}
		}
		return $html;
	}
	
	
	/* this function use for create quote of hardware and also calculate the hardware quote value
	 * we have pass the vaule of quote_id if exist other wise flage value is zero for calcualtion
	 * @param in_save_flag integer,
     * @param in_orig_quote_id character varying,
     * @param in_customer character varying,
     * @param in_items json,
     * @param in_pricingtier integer,
     * @param in_discount double precision,
     * @param in_spl_instruction character varying,
     * @param in_userid text
     * return a array()
     * */
     function getHardwareQuote($postData=array(),$save_flag=0){
		$CI	= & get_instance();
		$login_user=$CI->session->userdata('frontendUserName');
		if(!empty($login_user)){
		if(empty($postData)){
			return false;
		}else{
			$html	= ''; $total	= 0; $error= '';$message='';
			$salesPerson		= !empty($postData['choose-sales']) ? trim($postData['choose-sales']) : '';
			
			/* Checking for Salesperson email id */
			$salesPersonMailId	= '';
			if(!empty($salesPerson)){
				$salesPerson	= explode('##',$salesPerson);
				if(!empty($salesPerson)){
					$salesPerson	= !empty($salesPerson[0]) ? $salesPerson[0] : '';
					$salesPersonMailId	= !empty($salesPerson[1]) ? $salesPerson[1] : '';
				}
			}
			/* Checking for Salesperson email id */
			
			$wtClass		= !empty($postData['choose-wtclass']) ? $postData['choose-wtclass'] : '';
			$quote_line		= !empty($postData['quote_line']) ? $postData['quote_line'] : 0;	
			$n_customer		= str_replace('&', 'and', $postData['customer']); 
			$n_pricingtier	= !empty($postData['pricingtier']) ? $postData['pricingtier'] :'';
			$old_quoteid	= !empty($postData['old_quoteid']) ? $postData['old_quoteid'] : '';	
			$spl_instruction= !empty($postData['spl_instruction']) ? $postData['spl_instruction'] : '';	
			$n_discount		= !empty($postData['discount']) ? $postData['discount'] : 0;
			$hw_item		= !empty($postData['hw_item']) ? $postData['hw_item'] : 0;
			$hw_qty			= !empty($postData['hw_qty']) ? $postData['hw_qty'] : 0;
			$opportunity	= !empty($postData['opportunity']) ? $postData['opportunity'] : '';
			$customOpportunity	= !empty($postData['custom-opportunity']) ? trim($postData['custom-opportunity']) : '';
			if(!empty($customOpportunity)){
				$opportunity	= $customOpportunity;
			}
			$contact		= !empty($postData['contact']) ? $postData['contact'] : '0';
			$contact = str_replace("'", "''", $contact);
			if(empty($contact)){
				$html		= '';
				$message	= "Select a Contact First!";
				$stat		= 'No';
				return array('html'=>$html,'error'=>$message);
			}
			$lead_time		= !empty($postData['lead-time']) ? $postData['lead-time'] : '0';
			$proposal_number= !empty($postData['proposal_number']) ? $postData['proposal_number'] : '';
			$tag_number		= !empty($postData['tag_number']) ? $postData['tag_number'] : '';
			/* Modify at the 29-11-2017 */
			$shipToAddress	= !empty($postData['ship_to_address']) ? $postData['ship_to_address'] : '';
			$shipToAddress = str_replace("'", "''", $shipToAddress);
			$oldPrice		= !empty($postData['old_calculator']) ? $postData['old_calculator'] : array();
			$priceOverride	= !empty($postData['price_override']) ? $postData['price_override'] : array();
			/* Modify at the 29-11-2017 */
			
			/* 28-07-2017 Mark for review and quote description */
			$editQuoteDescription		= !empty($postData['edit_quote_description']) ? $postData['edit_quote_description'] : '';
			$editQuoteDescription 		= str_replace("'", "''", $editQuoteDescription);
			$editQuoteDescription		= str_replace("\n",';',$editQuoteDescription);
			$markForReview	= !empty($postData['mark_for_reviews']) ? $postData['mark_for_reviews'] : 0;
			/* 28-07-2017 Mark for review and quote description */
			
			if(!empty($hw_item)){
				for($i=0;$i<count($hw_item);$i++){
					$hw_qty[$i]	= !empty($hw_qty[$i]) ? $hw_qty[$i] : '';
					$hw_oldP[$i] = !empty($oldPrice[$i]) ? $oldPrice[$i] : 0.0;
					$hw_overrideP[$i] = !empty($priceOverride[$i]) ? $priceOverride[$i] : 0.0;
					$hw_item[$i]  = substr($hw_item[$i], strpos($hw_item[$i], "[") + 1, (strpos($hw_item[$i], "]") - strpos($hw_item[$i], "[") -1));
					$ppl	= array('item'=>$hw_item[$i],'quantity'=>$hw_qty[$i],'oldPrice'=>$hw_oldP[$i],'overridePrice'=>$hw_overrideP[$i]);
					$hw_data[$i]	= (object)$ppl;
				}
			}
			$hw_data	= (object)$hw_data;
			$item_data	= json_encode($hw_data);

			if ($old_quoteid == 'No') {
				$orig_quote_id = '';
			} else {
				$orig_quote_id = $old_quoteid;
			}
			if ($n_customer == '') {
				$n_cust = 'None';
				$error	= "Select a Customer First!";
			} else {
				$n_cust=explode('[',$n_customer);
			$n_cust = trim($n_cust[0]);
			}			
			$pricingtier	= substr($n_pricingtier, strpos($n_pricingtier, "[") + 1, (strpos($n_pricingtier, "]") - strpos($n_pricingtier, "[") -1));
			$save_flag		= $save_flag;
			if(empty($error)){
			    $res		= "SELECT * from qw.hardware_quote($save_flag,  '$orig_quote_id',$quote_line, '$n_cust','$item_data',
			      $pricingtier, $n_discount, '$spl_instruction','$login_user','$salesPerson','$wtClass','$opportunity','$contact',
			      '$lead_time','$proposal_number','$tag_number','$shipToAddress')";
			    /* Log Query Test (07-08-2017)*/
					$functionFor	= !empty($save_flag) ? ' Save ' : ' Calulate ';
					queryLog('Hardware'.$functionFor.'Quote Function',$res );
				/* Log Query Test */
				$results	= $CI->db->query($res);
				$results	= $results->result();
				$subtotal	= 0;
				if(!empty($results)){
						$editableQuoteDescription	= !empty($results[0]->quote_description) ? $results[0]->quote_description : '';
						$editableQuoteDescription	= str_replace(';',"\n",$editableQuoteDescription);
						
						$n_customer=explode('[',$n_customer);
						$cus=!empty($n_customer[1])?trim($n_customer[1],']'):$n_customer[0];
						$cus='<div class="psn-calcultor-save"><p class="next"><strong>Customer:</strong>'.$cus.' </p>
									<p class="next1"><strong>Hardware Quoting</strong> </p>';
									/* Quote Description for editable update (24-07-2017)*/
									/*$cus	.='<p><strong>Description : </strong></p>
									<p class="editable-quote-description">
									<textarea name="editable_quote_description" class="return_quote_description">'.$editableQuoteDescription.'</textarea></p>';*/
									/* Quote Description for editable update (24-07-2017)*/
									$cus	.=/*<p><strong> Quantity : </strong>'.$n_number.'</p>*/'</div>';
									
						$table='<table class="excel_download"><tr><td>Product:</td><td>Hardware Quoting</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
						$table .='<tr><td></td><td></td><td>Item#</td><td>QuantityPerNet</td><td>TotalQantity</td><td>UOM</td><td>Activity Code</td><td>Step</td></tr>';
						//dump($results);die;
						$counting = 0;
						foreach($results as $row){
							if(!empty($save_flag)){
								$quote_id=$row->quoteid;
								$proposal_number=$row->proposalnum;
								/* Send mail to Sales Person */
									$quant	=  0;
									$salespersonMailData	= array('quoteId'=>$quote_id,'proposalId'=>$proposal_number,
									'lineNo'=>$quote_line,'type'=>'Hardware','quantity'=>$quant,'salespersonEmail'=>$salesPersonMailId);
									$finalUrl	= 1;//sendMailToSalesMenForBOM($salespersonMailData);
									return array('html'=>$quote_id,'error'=>$message,'proposalNumber'=>$proposal_number);
								/* Send mail to Sales Person */
								break;
							}
							$itemcode			= !empty($row->itemcode) ? $row->itemcode : '';
							$uom				= !empty($row->uom) ? $row->uom : '';
							$laboractivityrate	= !empty($row->laboractivityrate) ? $row->laboractivityrate : '';
							$activitycode		= !empty($row->activitycode) ? $row->activitycode : '';
							$attributeArray		= array('itemCode'=>$itemcode,'uom'=>$uom,'laboractivityrate'=>$laboractivityrate,'activitycode'=>$activitycode);
							
							$subtotal	= $subtotal+$row->totalcost;
							$html	.='<div class="order-list">
										<div class="item-quantity">
										'.$cus.'
											<p><strong>Item #</strong> '.$row->itemcode.displayRedStopIcon($attributeArray).'</p>
											<p><strong>Quantity Per Net: </strong>'.round($row->quantity, 2);
											if($row->uom){$html	.='<span><strong>UOM:</strong> '.$row->uom.'</span></p>';}
												
										$html	.='<p><strong>Activity Code :</strong> '.$row->activitycode.'
											<span><strong>Step:</strong> '.$row->wt_step.'</span></p>
										</div>
										</div>';
										$cus='';
						$table .='<tr><td></td><td></td><td>'.$row->itemcode.'</td><td>'.round($row->quantity, 2).'</td><td>'.round($row->quantity, 2).'</td><td>'.$row->uom.'</td><td>'.$row->activitycode.'</td><td>'.$row->wt_step.'</td></tr>';
						$counting ++;
					}
				$table .='</table>';
						$html	.='*<div class="sub-total">
										<input type="hidden" class="subtotal_price_cacl" value="'.number_format($subtotal,2).'">
										<p>Sub Total <span ><strong>'.number_format($subtotal,2).'</strong></span></p>
										<p></p>
									</div><p>Total Price</p>
									<h3 id="total_of_subtotal">'.number_format($subtotal,2) .'</h3>
									';
									if(empty($type)){
								$html .='<a href="javascript:void(0)" id="saveCalculatehardware">Save Quote</a><a href="#" class="download">
				<i class="fa fa-file-excel-o" aria-hidden="true"></i> BOM</a>';
								}
								$html .='*'.$table;
						$total	= number_format($subtotal,2); 
						/*$table .='</table>';
						$html	.='*<div class="sub-total">';
						if($priceOverride === '0'){
							$html	.='<input type="hidden" class="subtotal_price_cacl" value="'.number_format($subtotal,2).'">
							<p>Price Per Net <span ><strong>'.number_format($subtotal,2).'</strong></span></p>
							<p></p>dsfsdfdsf
							</div><p>Sub Total Price</p>
							<h3 id="total_of_subtotal">'.number_format(($subtotal * $template_qty),2) .'</h3>';
						}
						else {
							$html	.='<input type="hidden" class="subtotal_price_cacl" value="'.number_format($priceOverride,2).'">
							<p>Original Price Per Net <span ><strong>'.number_format($subtotal,2).'</strong></span></p>
							<p>Override Price Per Net <span ><strong>'.number_format($priceOverride,2).'</strong></span></p>
							<p></p>
							</div><p>Sub Total Price</p>
							<h3 id="total_of_subtotal">'.number_format(($priceOverride * $template_qty),2) .'</h3>';
						}
						
						if(empty($type)){
								$html .='<a href="javascript:void(0)" id="saveCalculatehardware">Save Quote</a><a href="#" class="download">
										<i class="fa fa-file-excel-o" aria-hidden="true"></i> BOM</a>';
						}
						$html .='*'.$table;
						$total	= $priceOverride === '0' ? number_format($subtotal,2) : number_format($priceOverride,2); */
					}else{
						$html		= '';
						$subtotal	= 0;
						$error="No data return ";
					}
				}
				return array('html'=>$html,'total'=>$total,'error'=>$error);
			}
		}
	}
	

	/**
	 * This function used for Get samplet products. 
	 * @Function	-: getPopulateSamplet()
	 * @Param		-: search(string)
	 * @Param		-: No Parameter
	 * @Created		-: 17-07-2017
	 * 
	 * */
	function getPopulateSamplet($search=null){
		$CI			= & get_instance();
		$sel_run	= "select * from qw.get_samplets('all')";
		$results	= $CI->db->query($sel_run);
		$results	= $results->result();
			$html='';
			if(!empty($results)){
				$i=0;
				$results=json_decode($results[0]->get_samplets);
				//print_r($results);
				if(!empty($results)){
					foreach($results as $row){
						$string = trim(preg_replace('/\s+/', ' ', $row->itemcodedesc));
						$string = str_replace(array('\'', '"'), '', $string); 
						$sel='';
						$string=$string.' ['.$row->itemcode.']';
						$view=$row->itemcode.' ['.$string.']';
						if(!empty($search)&&strtolower($search)==strtolower($row->itemcode)){
							$sel="selected";
						}
						$html .= '<option value="'.$string.'" '.$sel.'  >'.$view.'</option>';
						$i++;
					}
				}
			}
		return $html;
	}
	
	
	/* This function use for create quote of samplet and also calculate the samplet quote value.
	 * 
	 * @Function	getSampletQuote()
	 * @Param		postData(array()),save_flag(int)
	 * @Created		17-07-2107
	 * @Return		array();json
	 * 
     * */
     function getSampletQuote($postData=array(),$save_flag=0){
		$CI	= & get_instance();
		$login_user=$CI->session->userdata('frontendUserName');
		if(!empty($login_user)){
			if(empty($postData)){
				return false;
			}else{
			$html	= ''; $total	= 0; $error= '';$message='';
			$salesPerson		= !empty($postData['choose-sales']) ? trim($postData['choose-sales']) : '';
			
			/* Checking for Salesperson email id */
			$salesPersonMailId	= '';
			if(!empty($salesPerson)){
				$salesPerson	= explode('##',$salesPerson);
				if(!empty($salesPerson)){
					$salesPerson	= !empty($salesPerson[0]) ? $salesPerson[0] : '';
					$salesPersonMailId	= !empty($salesPerson[1]) ? $salesPerson[1] : '';
				}
			}
			/* Checking for Salesperson email id */
			
			$wtClass		= !empty($postData['choose-wtclass']) ? $postData['choose-wtclass'] : '';
			$quote_line		= !empty($postData['quote_line']) ? $postData['quote_line'] : 0;	
			$n_customer		= str_replace('&', 'and', $postData['customer']); 
			$n_pricingtier	= !empty($postData['pricingtier']) ? $postData['pricingtier'] :'';
			$old_quoteid	= !empty($postData['old_quoteid']) ? $postData['old_quoteid'] : '';	
			$spl_instruction	= !empty($postData['spl_instruction']) ? $postData['spl_instruction'] : '';	
			$n_discount		= !empty($postData['discount']) ? $postData['discount'] : 0;
			$samplet_item	= !empty($postData['samplet_item']) ? $postData['samplet_item'] : 0;
			$samplet_qty	= !empty($postData['samplet_qty']) ? $postData['samplet_qty'] : 0;
			$opportunity		= !empty($postData['opportunity']) ? $postData['opportunity'] : '';
			$customOpportunity	= !empty($postData['custom-opportunity']) ? trim($postData['custom-opportunity']) : '';
			/* Modify at the 29-11-2017 */
				$shipToAddress	= !empty($postData['ship_to_address']) ? $postData['ship_to_address'] : '';
				$shipToAddress = str_replace("'", "''", $shipToAddress);
				$oldPrice		= !empty($postData['old_calculator']) ? $postData['old_calculator'] : '0';
				$priceOverride	= !empty($postData['price_override']) ? $postData['price_override'] : '0';
			/* Modify at the 29-11-2017 */
			if(!empty($customOpportunity)){
				$opportunity	= $customOpportunity;
			}
			$contact		= !empty($postData['contact']) ? $postData['contact'] : '0';
			$contact = str_replace("'", "''", $contact);
			if(empty($contact)){
				$html		= '';
				$message	= "Select a Contact First!";
				$stat		= 'No';
				return array('html'=>$html,'error'=>$message);
			}
			$lead_time		= !empty($postData['lead-time']) ? $postData['lead-time'] : '0';
			$proposal_number		= !empty($postData['proposal_number']) ? $postData['proposal_number'] : '';
			$item_data=array();
			if(!empty($samplet_item)){
				for($i=0;$i<count($samplet_item);$i++){
					$samplet_item[$i]	= substr($samplet_item[$i], strpos($samplet_item[$i], "[") + 1, (strpos($samplet_item[$i], "]") - strpos($samplet_item[$i], "[") -1));
					$item_data[$samplet_item[$i]]=$samplet_qty[$i];
				}
			}
			//dump($item_data);die;
			$item_data=json_encode($item_data);
			if ($old_quoteid == 'No') {
				$orig_quote_id = '';
			} else {
				$orig_quote_id = $old_quoteid;
			}
			if ($n_customer == '') {
				$n_cust = 'None';
				$error	= "Select a Customer First!";
			} else {
				$n_cust=explode('[',$n_customer);
				$n_cust = trim($n_cust[0]);
			}
			$pricingtier	= substr($n_pricingtier, strpos($n_pricingtier, "[") + 1, (strpos($n_pricingtier, "]") - strpos($n_pricingtier, "[") -1));
			$save_flag		= $save_flag;
			if(empty($error)){
				$res		= "SELECT * from qw.samplets_quote($save_flag,  '$orig_quote_id',$quote_line, '$n_cust','$item_data',
				$pricingtier, $n_discount, '$spl_instruction','$login_user','$salesPerson','$wtClass','$opportunity','$contact',
				'$lead_time','$proposal_number','$shipToAddress',$oldPrice,$priceOverride)";
				/* Log Query Test (07-08-2017)*/
					$functionFor	= !empty($save_flag) ? ' Save ' : ' Calulate ';
					queryLog('Sample TS'.$functionFor.'Quote Function',$res );
				/* Log Query Test */
				$results	= $CI->db->query($res);
				$results	= $results->result();
				$subtotal	= 0;
				if(!empty($results)){
					$n_customer=explode('[',$n_customer);
					$cus=!empty($n_customer[1])?trim($n_customer[1],']'):$n_customer[0];
					$cus='<div class="psn-calcultor-save"><p class="next"><strong>Customer:</strong>'.$cus.' </p>
								<p class="next1"><strong>Sample TS Quoting</strong> </p>
								</div>';
					$table='<table class="excel_download"><tr><td>Product:</td><td>Sample TS Quoting</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
					$table .='<tr><td></td><td></td><td>Item#</td><td>QuantityPerNet</td><td>TotalQantity</td><td>UOM</td><td>Activity Code</td><td>Step</td></tr>';
					//dump($results);die;
					foreach($results as $row){
						if(!empty($save_flag)){
							$quote_id=$row->quoteid;
							$proposal_number=$row->proposalnum;
							/* Send mail to Sales Person */
								$quant	=  0;
								$salespersonMailData	= array('quoteId'=>$quote_id,'proposalId'=>$proposal_number,
								'lineNo'=>$quote_line,'type'=>'Sample TS','quantity'=>$quant,'salespersonEmail'=>$salesPersonMailId);
								$finalUrl	= 1;//sendMailToSalesMenForBOM($salespersonMailData);
								return array('html'=>$quote_id,'error'=>$message,'proposalNumber'=>$proposal_number);
							/* Send mail to Sales Person */
							break;
						}
						$itemcode			= !empty($row->itemcode) ? $row->itemcode : '';
						$uom				= !empty($row->uom) ? $row->uom : '';
						$laboractivityrate	= !empty($row->laboractivityrate) ? $row->laboractivityrate : '';
						$activitycode		= !empty($row->activitycode) ? $row->activitycode : '';
						$attributeArray		= array('itemCode'=>$itemcode,'uom'=>$uom,'laboractivityrate'=>$laboractivityrate,'activitycode'=>$activitycode);
						
						$subtotal	= $subtotal+$row->totalcost;
						$html	.='<div class="order-list">
									<div class="item-quantity">
									'.$cus.'
										<p><strong>Item #</strong> '.$row->itemcode.displayRedStopIcon($attributeArray).'</p>
										<p><strong>Quantity Per Net: </strong>'.round($row->quantity, 2);
										if($row->uom){$html	.='<span><strong>UOM:</strong> '.$row->uom.'</span></p>';}
									$html	.='<p><strong>Activity Code :</strong> '.$row->activitycode.'
										<span><strong>Step:</strong> '.$row->wt_step.'</span></p>
									</div>
									</div>';
									$cus='';
						$table .='<tr><td></td><td></td><td>'.$row->itemcode.'</td><td>'.round($row->quantity, 2).'</td><td>'.round($row->quantity, 2).'</td><td>'.$row->uom.'</td><td>'.$row->activitycode.'</td><td>'.$row->wt_step.'</td></tr>';
					}
					$table .='</table>';
					$html	.='*<div class="sub-total">
									<input type="hidden" class="subtotal_price_cacl" value="'.number_format($subtotal,2).'">
									<p>Sub Total <span ><strong>'.number_format($subtotal,2).'</strong></span></p>
									<p></p>
								</div><p>Total Price</p>
								<h3 id="total_of_subtotal">'.number_format($subtotal,2) .'</h3>
								';
					if(empty($type)){
						$html .='<a href="javascript:void(0)" id="saveSampletQuote">Save Quote</a><a href="#" class="download">
						<i class="fa fa-file-excel-o" aria-hidden="true"></i> BOM</a>';
					}
							$html .='*'.$table;
					$total	= number_format($subtotal,2);
				}else{
					$html		= '';
					$subtotal	= 0;
					$error="No data return ";
				}
			}
				return array('html'=>$html,'total'=>$total,'error'=>$error);
			}
		}
	}
	
	
	
	/** 
	 * This function used for calculate and save rope quote.
	 * 
	 * @Function	getRopeQuote()
	 * @Param		postData(array()),save_flag(int)
	 * @Created		11-07-2017
	 * @Return		array()
	 * 
	 * */
	function getRopeQuote($postData=array(),$save_flag=0){
		$CI	= & get_instance();
		$login_user=$CI->session->userdata('frontendUserName');
		if(!empty($login_user)){
		if(empty($postData)){
			return false;
		}else{
			$html	= ''; $total	= 0; $error= '';$message='';
			$salesPerson	= !empty($postData['choose-sales']) ? trim($postData['choose-sales']) : '';
			
			/* Checking for Salesperson email id */
			$salesPersonMailId	= '';
			if(!empty($salesPerson)){
				$salesPerson	= explode('##',$salesPerson);
				if(!empty($salesPerson)){
					$salesPerson	= !empty($salesPerson[0]) ? $salesPerson[0] : '';
					$salesPersonMailId	= !empty($salesPerson[1]) ? $salesPerson[1] : '';
				}
			}
			/* Checking for Salesperson email id */
			$tag_number		= !empty($postData['tag_number']) ? $postData['tag_number'] : '';
			$wtClass		= !empty($postData['choose-wtclass']) ? $postData['choose-wtclass'] : '';
			$quote_line		= !empty($postData['quote_line']) ? $postData['quote_line'] : 0;	
			$n_customer		= str_replace('&', 'and', $postData['customer']); 
			$n_pricingtier	= !empty($postData['pricingtier']) ? $postData['pricingtier'] :'';
			$old_quoteid	= !empty($postData['old_quoteid']) ? $postData['old_quoteid'] : '';	
			$spl_instruction= !empty($postData['spl_instruction']) ? $postData['spl_instruction'] : '';	
			$n_discount		= !empty($postData['discount']) ? $postData['discount'] : 0;
			$rope_item		= !empty($postData['rope_item']) ? $postData['rope_item'] : array();
			
			$ropeUom		= !empty($postData['rope_uom']) ? $postData['rope_uom'] : array();
			$ropeTolerance	= !empty($postData['rope_tolerance']) ? $postData['rope_tolerance'] : array();
			
			$rope_qty		= !empty($postData['rope_qty']) ? $postData['rope_qty'] : array();
			$opportunity	= !empty($postData['opportunity']) ? $postData['opportunity'] : '';
			/* Modify at the 29-11-2017 */
				$shipToAddress	= !empty($postData['ship_to_address']) ? $postData['ship_to_address'] : '';
				$shipToAddress = str_replace("'", "''", $shipToAddress);
				$oldPrice		= !empty($postData['old_calculator']) ? $postData['old_calculator'] : '0';
				$priceOverride	= !empty($postData['price_override']) ? $postData['price_override'] : '0';
			/* Modify at the 29-11-2017 */
			
			$customOpportunity	= !empty($postData['custom-opportunity']) ? trim($postData['custom-opportunity']) : '';
			if(!empty($customOpportunity)){
				$opportunity	= $customOpportunity;
			}
			$contact		= !empty($postData['contact']) ? $postData['contact'] : '0';
			$contact = str_replace("'", "''", $contact);
			if(empty($contact)){
				$html		= '';
				$message	= "Select a Contact First!";
				$stat		= 'No';
				return array('html'=>$html,'error'=>$message);
			}
			
			$lead_time		= !empty($postData['lead-time']) ? $postData['lead-time'] : '0';
			$proposal_number= !empty($postData['proposal_number']) ? $postData['proposal_number'] : '';
			$item_data		= array();
			if(!empty($rope_item)){
				for($i=0;$i<count($rope_item);$i++){
					$perUom	= !empty($ropeUom[$i]) ? $ropeUom[$i] : '';
					$perTol	= !empty($ropeTolerance[$i]) ? $ropeTolerance[$i] : '';
					$oldP[$i] = !empty($oldPrice[$i]) ? $oldPrice[$i] : '0.0';
					$overrideP[$i] = !empty($priceOverride[$i]) ? $priceOverride[$i] : '0.0';
					$rope_item[$i]	= substr($rope_item[$i], strpos($rope_item[$i], "[") + 1, (strpos($rope_item[$i], "]") - strpos($rope_item[$i], "[") -1));
					$ppl	= array('item'=>$rope_item[$i],'quantity'=>$rope_qty[$i],'uom'=>$perUom,'tolerance'=>$perTol,'oldPrice'=>$oldP[$i],
									'overridePrice'=>$overrideP[$i] );
					$item_data[$i]	= (object)$ppl;
					//$item_data1[]	= json_encode(array($rope_item[$i]=>array('quantity'=>$rope_qty[$i],'uom'=>$perUom,'tolerance'=>$perTol)));
				}
			}
			//dump($item_data);
			$item_data	= (object)$item_data;
			$item_data	= json_encode($item_data);
			//dump($item_data);
			//dump($item_data);die;
			if ($old_quoteid == 'No') {
				$orig_quote_id = '';
			} else {
				$orig_quote_id = $old_quoteid;
			}
			if ($n_customer == '') {
				$n_cust = 'None';
				$error	= "Select a Customer First!";
			} else {
				$n_cust=explode('[',$n_customer);
			$n_cust = trim($n_cust[0]);
			}			
			$pricingtier	= substr($n_pricingtier, strpos($n_pricingtier, "[") + 1, (strpos($n_pricingtier, "]") - strpos($n_pricingtier, "[") -1));
			$save_flag		= $save_flag;
			if(empty($error)){
				$res		= "SELECT * from qw.rope_quote($save_flag,'$orig_quote_id',$quote_line, '$n_cust','$item_data',
				$pricingtier, $n_discount, '$spl_instruction','$login_user','$salesPerson','$wtClass','$opportunity',
				'$contact','$lead_time','$proposal_number','$tag_number','$shipToAddress')";
				/* Log Query Test (07-08-2017)*/
					$functionFor	= !empty($save_flag) ? ' Save ' : ' Calulate ';
					queryLog('Rope'.$functionFor.'Quote Function',$res );
				/* Log Query Test */
				$results	= $CI->db->query($res);
				$results	= $results->result();
				//dump($results);
				$subtotal	= 0;
				if(!empty($results)){
					$n_customer=explode('[',$n_customer);
					$cus=!empty($n_customer[1])?trim($n_customer[1],']'):$n_customer[0];
					$cus='<div class="psn-calcultor-save"><p class="next"><strong>Customer:</strong>'.$cus.' </p>
								<p class="next1"><strong>Rope Quoting</strong> </p>
								</div>';
					$table='<table class="excel_download"><tr><td>Product:</td><td>Rope Quoting</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
					$table .='<tr><td></td><td></td><td>Item#</td><td>QuantityPerNet</td><td>TotalQantity</td><td>UOM</td><td>Activity Code</td><td>Step</td></tr>';
					//dump($results);die;
					foreach($results as $row){
						if(!empty($save_flag)){
							$quote_id		= $row->quoteid;
							$proposal_number=$row->proposalnum;
							/* Send mail to Sales Person */
								$quant	= 0;
								$salespersonMailData	= array('quoteId'=>$quote_id,'proposalId'=>$proposal_number,
								'lineNo'=>$quote_line,'type'=>'Rope','quantity'=>$quant,'salespersonEmail'=>$salesPersonMailId);
								$finalUrl	= 1;//sendMailToSalesMenForBOM($salespersonMailData);
							/* Send mail to Sales Person */
							return array('html'=>$quote_id,'error'=>$message,'proposalNumber'=>$proposal_number,'finalUrl'=>$finalUrl);
							break;
						}
							$itemcode			= !empty($row->itemcode) ? $row->itemcode : '';
							$uom				= !empty($row->uom) ? $row->uom : '';
							$laboractivityrate	= !empty($row->laboractivityrate) ? $row->laboractivityrate : '';
							$activitycode		= !empty($row->activitycode) ? $row->activitycode : '';
							$attributeArray		= array('itemCode'=>$itemcode,'uom'=>$uom,'laboractivityrate'=>$laboractivityrate,'activitycode'=>$activitycode);
							
							$subtotal	= $subtotal+$row->totalcost;
							$html	.='<div class="order-list">
										<div class="item-quantity">
										'.$cus.'
											<p><strong>Item #</strong> '.$row->itemcode.displayRedStopIcon($attributeArray).'</p>
											<p><strong>Quantity Per Net: </strong>'.round($row->quantity, 2);
										if($row->uom){$html	.='<span><strong>UOM:</strong> '.$row->uom.'</span></p>';}
										$html	.='<p><strong>Activity Code :</strong> '.$row->activitycode.'
											<span><strong>Step:</strong> '.$row->wt_step.'</span></p>
										</div>
										</div>';
										$cus='';
							$table .='<tr><td></td><td></td><td>'.$row->itemcode.'</td><td>'.round($row->quantity, 2).'</td><td>'.round($row->quantity, 2).'</td><td>'.$row->uom.'</td><td>'.$row->activitycode.'</td><td>'.$row->wt_step.'</td></tr>';
						}
						$table .='</table>';
							$html	.='*<div class="sub-total">
									<input type="hidden" class="subtotal_price_cacl" value="'.number_format($subtotal,2).'">
									<p>Sub Total <span ><strong>'.number_format($subtotal,2).'</strong></span></p>
									<p></p>
								</div><p>Total Price</p>
								<h3 id="total_of_subtotal">'.number_format($subtotal,2) .'</h3>';
								if(empty($type)){
							$html .='<a href="javascript:void(0)" id="saveRopeQuote">Save Quote</a><a href="#" class="download">
									<i class="fa fa-file-excel-o" aria-hidden="true"></i> BOM</a>';
							}
							$html .='*'.$table;
					$total	= number_format($subtotal,2);
				}else{
					$html		= '';
					$subtotal	= 0;
					$error="No data return ";
				}
			}
				return array('html'=>$html,'total'=>$total,'error'=>$error);
			}
		}
	}
	
	
	
	
	/**
	 * This function used for calculate saleskit quote.
	 * 
	 * @Function	getSaleskitQuote()
	 * @Param		postData(array()),save_flag(int)
	 * @Created		16-06-2017
	 * @Return		html
	 * 
	 * */
	
	function getSaleskitQuote($postData=array(),$save_flag=0){
		$CI	= & get_instance();
		$login_user=$CI->session->userdata('frontendUserName');
		if(!empty($login_user)){
		if(empty($postData)){
			return false;
		}else{
			$html	= ''; $total	= 0; $error= '';$message='';
			$salesPerson	= !empty($postData['choose-sales']) ? trim($postData['choose-sales']) : '';
			
			/* Checking for Salesperson email id */
			$salesPersonMailId	= '';
			if(!empty($salesPerson)){
				$salesPerson	= explode('##',$salesPerson);
				if(!empty($salesPerson)){
					$salesPerson	= !empty($salesPerson[0]) ? $salesPerson[0] : '';
					$salesPersonMailId	= !empty($salesPerson[1]) ? $salesPerson[1] : '';
				}
			}
			/* Checking for Salesperson email id */
			$tag_number		= !empty($postData['tag_number']) ? $postData['tag_number'] : '';
			$wtClass		= !empty($postData['choose-wtclass']) ? $postData['choose-wtclass'] : '';
			$quote_line		= !empty($postData['quote_line']) ? $postData['quote_line'] : 0;
			$n_customer		= str_replace('&', 'and', $postData['customer']); 
			$n_pricingtier	= !empty($postData['pricingtier']) ? $postData['pricingtier'] :'';
			$old_quoteid	= !empty($postData['old_quoteid']) ? $postData['old_quoteid'] : '';	
			$spl_instruction= !empty($postData['spl_instruction']) ? $postData['spl_instruction'] : '';	
			$n_discount		= !empty($postData['discount']) ? $postData['discount'] : 0;
			$saleskit_item	= !empty($postData['saleskit_item']) ? $postData['saleskit_item'] : 0;
			$saleskit_qty	= !empty($postData['saleskit_qty']) ? $postData['saleskit_qty'] : 0;
			
			$netNumber		= !empty($postData['net_number']) ? $postData['net_number'] : 0;
			/* Modify at the 29-11-2017 */
				$shipToAddress	= !empty($postData['ship_to_address']) ? $postData['ship_to_address'] : '';
				$shipToAddress = str_replace("'", "''", $shipToAddress);
				$oldPrice		= !empty($postData['old_calculator']) ? $postData['old_calculator'] : '0';
				$priceOverride	= !empty($postData['price_override']) ? $postData['price_override'] : '0';
			/* Modify at the 29-11-2017 */

			$productName	= !empty($postData['saleskit_product']) ? $postData['saleskit_product'] : 0;
			$productName	= substr($productName, strpos($productName, "[") + 1, (strpos($productName, "]") - strpos($productName, "[") -1));
			
			$opportunity	= !empty($postData['opportunity']) ? $postData['opportunity'] : '';
			$customOpportunity	= !empty($postData['custom-opportunity']) ? trim($postData['custom-opportunity']) : '';
			if(!empty($customOpportunity)){
				$opportunity	= $customOpportunity;
			}
			$contact		= !empty($postData['contact']) ? $postData['contact'] : '0';
			$contact = str_replace("'", "''", $contact);
			if(empty($contact)){
				$html		= '';
				$message	= "Select a Contact First!";
				$stat		= 'No';
				return array('html'=>$html,'error'=>$message);
			}
			$lead_time		= !empty($postData['lead-time']) ? $postData['lead-time'] : '0';
			$proposal_number		= !empty($postData['proposal_number']) ? $postData['proposal_number'] : '';
			
			$editQuoteDescription		= !empty($postData['edit_quote_description']) ? $postData['edit_quote_description'] : '';
			$editQuoteDescription 			= str_replace("'", "''", $editQuoteDescription);
			$editQuoteDescription		= str_replace("\n",';',$editQuoteDescription);
			$markForReview	= !empty($postData['mark_for_reviews']) ? $postData['mark_for_reviews'] : 0;
			
			$item_data		= array();
			if(!empty($saleskit_item)){
				for($i=0;$i<count($saleskit_item);$i++){
					$oldP[$i] = !empty($oldPrice[$i]) ? $oldPrice[$i] : '0.0';
					$overrideP[$i] = !empty($priceOverride[$i]) ? $priceOverride[$i] : '0.0';
					$saleskit_item[$i]	= substr($saleskit_item[$i], strpos($saleskit_item[$i], "[") + 1, (strpos($saleskit_item[$i], "]") - strpos($saleskit_item[$i], "[") -1));
					$ppl	= array('item'=>$saleskit_item[$i],'quantity'=>$saleskit_qty[$i],'oldPrice'=>$oldP[$i],'overridePrice'=>$overrideP[$i] );
					$item_data[$i]	= (object)$ppl;
				}
			}
			
			$item_data	= (object)$item_data;
			$item_data	= json_encode($item_data);

			if ($old_quoteid == 'No') {
				$orig_quote_id = '';
			} else {
				$orig_quote_id = $old_quoteid;
			}
			if ($n_customer == '') {
				$n_cust = 'None';
				$error	= "Select a Customer First!";
			} else {
				$n_cust=explode('[',$n_customer);
				$n_cust = trim($n_cust[0]);
			}			
			$pricingtier	= substr($n_pricingtier, strpos($n_pricingtier, "[") + 1, (strpos($n_pricingtier, "]") - strpos($n_pricingtier, "[") -1));
			$save_flag		= $save_flag;
			if(empty($error)){
				$res		= "SELECT * from qw.saleskit_quote($save_flag,'$orig_quote_id',$quote_line, '$n_cust','$productName',
				$netNumber,'$item_data',  $pricingtier, $n_discount, '$spl_instruction','$login_user','$salesPerson',
				'$wtClass','$opportunity','$contact','$lead_time','$proposal_number','$tag_number','$editQuoteDescription',
				'$shipToAddress')";
				/*var_dump($res);die;*/
				/* Log Query Test (07-08-2017)*/
					$functionFor	= !empty($save_flag) ? ' Save ' : ' Calulate ';
					queryLog('SalesKit'.$functionFor.'Quote Function',$res );
				/* Log Query Test */
				$results	= $CI->db->query($res);
				$results	= $results->result();
				
				$subtotal	= 0;
				if(!empty($results)){
						$editableQuoteDescription	= !empty($results[0]->quote_description) ? $results[0]->quote_description : '';
						$editableQuoteDescription	= !empty($markForReview) ? $editableQuoteDescription.'; Pending Review' : $editableQuoteDescription;
						$editableQuoteDescription	= str_replace(';',"\n",$editableQuoteDescription);
					
						$n_customer=explode('[',$n_customer);
						$cus=!empty($n_customer[1])?trim($n_customer[1],']'):$n_customer[0];
						$cus='<div class="psn-calcultor-save"><p class="next"><strong>Customer:</strong>'.$cus.' </p>
									<p class="next1"><strong>SalesKit Quoting</strong></p>';
									/* Quote Description for editable update (28-07-2017)*/
									$cus	.='<p><strong>Description : </strong></p>
									<p class="editable-quote-description">
									<textarea name="editable_quote_description" class="return_quote_description">'.$editableQuoteDescription.'</textarea></p>';
									/* Quote Description for editable update (28-07-2017)*/
									$cus .='<p><strong> Quantity : </strong>'.$netNumber.'</p></div>';
						$table='<table class="excel_download"><tr><td>Product:</td><td>SalesKit Quoting</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
						$table .='<tr><td></td><td></td><td>Item#</td><td>QuantityPerNet</td><td>TotalQantity</td><td>UOM</td><td>Activity Code</td><td>Step</td></tr>';
						$counting = 0;
						foreach($results as $row){
							if(!empty($save_flag)){
								$quote_id=$row->quoteid;
								$proposal_number=$row->proposalnum;
								/* Send mail to Sales Person */
								$quant	= !empty($netNumber) ? $netNumber : 0;
								$salespersonMailData	= array('quoteId'=>$quote_id,'proposalId'=>$proposal_number,
								'lineNo'=>$quote_line,'type'=>'SalesKit','quantity'=>$quant,'salespersonEmail'=>$salesPersonMailId);
								$finalUrl	= 1;//sendMailToSalesMenForBOM($salespersonMailData);
								/* Send mail to Sales Person */
								return array('html'=>$quote_id,'error'=>$message,'proposalNumber'=>$proposal_number,'finalUrl'=>$finalUrl);
								break;
							}
							$itemcode			= !empty($row->itemcode) ? $row->itemcode : '';
							$uom				= !empty($row->uom) ? $row->uom : '';
							$laboractivityrate	= !empty($row->laboractivityrate) ? $row->laboractivityrate : '';
							$activitycode		= !empty($row->activitycode) ? $row->activitycode : '';
							$attributeArray		= array('itemCode'=>$itemcode,'uom'=>$uom,'laboractivityrate'=>$laboractivityrate,'activitycode'=>$activitycode);
							
							$subtotal	= $subtotal+$row->totalcost;
							$html	.='<div class="order-list">
										<div class="item-quantity">
										'.$cus;
										/* changes (02-08-2017) */
										if($counting==0){
											$html	.='<p><strong>Item # </strong> <strong class="margin-right">Qty (UOM) </strong>';
										}
										/* Here We are getting the available quantity based on Item Code */
										$availableQuantity			= getAvailableQuantityOfItemCode($row->itemcode);
										/*$displayAvailDes			= !empty($availableQuantity['description']) ? 'Item Desc : '.$availableQuantity['description'].'<br />' :'';
										$displayAvailQnt			= !empty($availableQuantity['quantity']) ? 'Avail Qty : '.$availableQuantity['quantity'] :'';
										$displayAvailableQntHtml1	= (empty($displayAvailDes) && empty($displayAvailQnt)) ? 'Quantity Not Available' : $displayAvailDes.$displayAvailQnt;
										*/
										$displayAvailableQntHtml	= '<span class="tooltiptext">'.$availableQuantity['current'].'<br>'.$availableQuantity['alternate'].'</span>';
										/* End Here */
										$html	.='<p><a class="tooltip">'.$row->itemcode.displayRedStopIcon($attributeArray).$displayAvailableQntHtml.'</a> <span>'.round($row->quantity, 2).' ('.$row->uom.') </span>';
										$html	.='</div></div>';
										$cus='';
										/* changes (02-08-2017) */
							$table .='<tr><td></td><td></td><td>'.$row->itemcode.'</td><td>'.round($row->quantity, 2).'</td><td>'.round($row->quantity, 2).'</td><td>'.$row->uom.'</td><td>'.$row->activitycode.'</td><td>'.$row->wt_step.'</td></tr>';
							$counting ++;
						}
						$table .='</table>';
						$html	.='*<div class="sub-total">
										<input type="hidden" class="subtotal_price_cacl" value="'.number_format($subtotal,2).'">
										<p>Sub Total <span ><strong>'.number_format($subtotal,2).'</strong></span></p>
										<p></p>
									</div><p>Total Price</p>
									<h3 id="total_of_subtotal">'.(number_format(($subtotal * $netNumber),0)).'</h3>
									';
									if(empty($type)){
								$html .='<a href="javascript:void(0)" id="saveCalculateSaleskit">Save Quote</a><a href="#" class="download">
				<i class="fa fa-file-excel-o" aria-hidden="true"></i> BOM</a>';
								}
								$html .='*'.$table;
						$total	= number_format(($subtotal * $netNumber),0);
					}else{
						$html		= '';
						$subtotal	= 0;
						$error="No data return ";
					}
				}
			
				return array('html'=>$html,'total'=>$total,'error'=>$error);
			}
		}
	}
	
	 
	 /**
	 * @Function	-: getCustomerName()
	 * @Description	-: This function used for find the customer name by customer id
	 * @Param		-: customer_id
	 * @created		-: 1-04-2017
	 * 
	 * */
	function getCustomerName($customer_id){
			try{
			$CI	= & get_instance();
			if(!empty($customer_id)){
				$results=	$CI->db
							->select('QU.customername as customername')
							->where('customerno',$customer_id)
							->get('sage.ar_customer as QU')->row();
					
					if(!empty($results)){
						return $results->customername;
					}else{
						return false;
					}
			}
		}catch(Exception	$ex){
			log_message('error','Unable to get customer result basis on searching keyword');
		}
	}
	
	
	
	
	/**
	 * @Function	-: createdCRM()
	 * @Description	-: This function used for this function use for create crm of quote
	 * @Param		-: quoteid
	 * @created		-: 10-04-2017
	 * 
	 * */
	 
	function createdCRM($quoteId=null){
		$CI	= & get_instance();
		if(!empty($quoteId)){
			$userId		= $CI->session->userdata('frontendUserName');
			$sql		= "select * from qw.copy_quote_to_crm('".$quoteId."','".$userId."')";
			$records	= $CI->db->query($sql);
			$records	= $records->row();
			if(!empty($records)){
				return 'yes';die;
			}else{
				return 'no'; die;
			}
		}
	}
	/**
	 * @Function	-: createdSage()
	 * @Description	-: This function used for create sage of any quote
	 * @Param		-: quoteid
	 * @created		-: 12-04-2017
	 * 
	 * */
	 
	function createdSage($quoteId=null){
		$CI	= & get_instance();
		if(!empty($quoteId)){
			$userId		= $CI->session->userdata('frontendUserName');
			$sql		= "select * from qw.copy_quote_to_sage('".$quoteId."','".$userId."')";
			$records	= $CI->db->query($sql);
			$records	= $records->row();
			if(!empty($records)){
				return 'yes';die;
			}else{
				return 'no';die;
			}
		}
	}
	/**
	 * @Function	-: deleteQuoteLine()
	 * @Description	-: This function used for delete the quote line 
	 * @Param		-: quote id , quote_line
	 * @created		-: 10-04-2017
	 * 
	 * */
	 
	function deleteQuoteLine($quoteId=null,$quoteLineNo=0){
		$CI	= & get_instance();
		if(!empty($quoteId) && !empty($quoteLineNo)){
			$userId		= $CI->session->userdata('frontendUserName');
			$sql		= "select * from qw.delete_quote_detail('".$quoteId."',$quoteLineNo,'".$userId."')";
			$records	= $CI->db->query($sql);
			$records		= $records->row();
			if(!empty($records)){
				return true;
			}else{
				return false;
			}
		}
	}
	
	/**
	 * @Function	-: deleteQuote()
	 * @Description	-: This function used for this function use for delete the quote
	 * @Param		-: quote id
	 * @created		-: 10-04-2017
	 * 
	 * */
	function deleteQuote($quoteId=null){
		$CI	= & get_instance();
		if(!empty($quoteId)){
			$userId		= $CI->session->userdata('frontendUserName');
			$sql		= "select * from qw.delete_quote('".$quoteId."','".$userId."')";
			$response	= $CI->db->query($sql);
			$records	= $response->row();
			if(!empty($records)){
				return true;
			}else{
				return false;
			}
		}
	}

	/**
	 * @Function	-: create_clone_quote()
	 * @Description	-: This function used for create the clone of any quote to selected customer
	 * @Param		-: quoteid,customer_id
	 * @created		-: 20-04-2017
	 * 
	 * */
	function create_clone_quote($quoteId=null,$customer_id){
		$CI	= & get_instance();
		if(!empty($quoteId)&&!empty($customer_id)){
			$customer_id = explode('[',$customer_id);
			$userId		= $CI->session->userdata('frontendUserName');
			$sql		= "select * from qw.clone_quote('".$quoteId."','".trim($customer_id[0])."','".$userId."')";
			$response	= $CI->db->query($sql);
			$records	= $response->row();
			if($records){
			return $records->clone_quote;}else{return false;
				}
				
		}
	}
	
	/**
	 * This function used for get populte product options.
	 * 
	 * In this function we are getting the populte product options basis on product and type.
	 * 
	 * @Function	editpopulateProductOptions()
	 * @Created		09-03-2017
	 * @Param		product(string),optiontype(string)
	 * @Return		string
	 * 
	 * */
	 
	function editpopulateProductOptions($product,$type,$code=null){
		$CI	= & get_instance();
		$userId		= $CI->session->userdata('frontendUserName');
		try{
			$html	= '';
			if(!empty($product) && !empty($type)){
				$sql="select * from qw.get_product_options('$product','$type','$userId')";
				$value	= '';
				$results	= $CI->db->query($sql);
				$results	= $results->result();
				$results	= !empty($results[0]->get_product_options) ? json_decode($results[0]->get_product_options) : array();
				if($results){
					foreach($results as $record){
						$select='';
						if(strtolower(trim($code))==strtolower($record->itemcode)){
						$select="selected";	
							}
						$p=explode('[',$record->productlist);
						$val=preg_replace('/\"/', '', $record->productlist);
						$val = str_replace(array('\'', '"'), '', $val); 
						$html	.='<option value="'.$val.'" '.$select.'>'.trim($p[1],']').' ['.$p[0].']'.'</option>';
					}
				}
				
			}return $html;
		}catch(Exception	$ex){
			log_message('error','Unable to get populte product options basis on product and type '.$ex->getMessage());
		}
	}
	/**
	 * @Function	-: editPopulateThreadlist()
	 * @Description	-: This function used for edit quote page for show the selected data of thread 
	 * @Param		-: No Parameter
	 * @created		-: 03-05-2017
	 * 
	 * */
	function editPopulateThreadlist($keyword=null,$code=null){
		try{
			$CI	= & get_instance();
			$html	= '';
			if(!empty($keyword)){
				
				$records	= $CI->db->select("distinct border, thread, translate(thread_description, '#&', '') || ' [' || thread  || ']' as productlist",false)
								->where('border',$keyword)
								->get('qw.dwstatic_threadoptions')->result();
								//echo $CI->db->last_query();
				
					$html	.= '<option value="None">None</option>';
					//print_r($records);
				if(!empty($records)){
					foreach($records as $record){
						$select='';
						if(strtolower(trim($code))==strtolower($record->thread)){
						$select="selected";	
							}
							$p=explode('[',$record->productlist);
						$html	.= '<option value="'.$record->productlist.'" '.$select.'>'.trim($p[1],']').' ['.$p[0].']</option>';
					
						
					}
				}
				
			}return $html;
		}catch(Exception	$ex){
			log_message('error','Unable to get populate thread list basis on keyword');
		}
	}
	/**
	 * @Function	-: lilyPadQuote()
	 * @Description	-: This function used for save and calculate the lilypad quote details or cost
	 * @Param		-: No Parameter
	 * @created		-: 03-05-2017
	 * 
	 * */
	function lilyPadQuote($postData=array(),$type=0){
		$CI	= & get_instance();
		$login_user=$CI->session->userdata('frontendUserName');
		if(!empty($login_user)){
		$n_customer		= str_replace('&', 'and', (!empty($postData['customer']) ? $postData['customer'] : '')); 
		$n_product		= str_replace('&', ' ', (!empty($postData['net_product']) ? $postData['net_product'] : ''));		
		$n_border		= str_replace('&', ' ', (!empty($postData['net_border']) ? $postData['net_border'] : ''));
		$n_border2		= str_replace('&', ' ', (!empty($postData['net_border2']) ? $postData['net_border2'] : ''));
		$n_border3		= str_replace('&"', ' ', (!empty($postData['net_border3']) ? $postData['net_border3'] : ''));
		$n_border4		= str_replace('&', ' ', (!empty($postData['net_border4']) ? $postData['net_border4'] : ''));
		$n_border5		= str_replace('&', ' ', (!empty($postData['net_border5']) ? $postData['net_border5'] : ''));
		$n_number		= !empty($postData['net_number']) ? $postData['net_number'] : '';
		$bodylength		= !empty($postData['bodylength']) ? $postData['bodylength'] : 0;
		$n_length		= !empty($postData['net_length']) ? $postData['net_length'] : '0';
		$n_width		= !empty($postData['net_width']) ? $postData['net_width'] : '0';
		$tag_number		= !empty($postData['tag_number']) ? $postData['tag_number'] : '';
		$proposal_number		= !empty($postData['proposal_number']) ? $postData['proposal_number'] : '';		
		/* */
		$lft		= (2 * $n_length) + (2 * $n_width);
		if($n_width == 0){$sft = $n_length; } else
		{  $sft		= ($n_length * $n_width);  }
		/* */
		$n_discount		= !empty($postData['discount']) ? $postData['discount'] : '0';
		$instrunctions		= !empty($postData['instrunctions']) ? $postData['instrunctions'] : '';
		$instrunctions = str_replace("'", "''", $instrunctions);
		$salesPerson		= !empty($postData['choose-sales']) ? trim($postData['choose-sales']) : '';
		
		/* Checking for Salesperson email id */
			$salesPersonMailId	= '';
			if(!empty($salesPerson)){
				$salesPerson	= explode('##',$salesPerson);
				if(!empty($salesPerson)){
					$salesPerson	= !empty($salesPerson[0]) ? $salesPerson[0] : '';
					$salesPersonMailId	= !empty($salesPerson[1]) ? $salesPerson[1] : '';
				}
			}
		/* Checking for Salesperson email id */
		
		$wtClass		= !empty($postData['choose-wtclass']) ? $postData['choose-wtclass'] : '';
		$pricing_tier	= !empty($postData['pricing_tier']) ? $postData['pricing_tier'] : '0';
		$old_quoteid	= !empty($postData['old_quoteid']) ? $postData['old_quoteid'] : '';
		$quote_line		= !empty($postData['quote_line']) ? $postData['quote_line'] : 0;
		$opportunity	= !empty($postData['opportunity']) ? $postData['opportunity'] : '';
		/* Modify at the 29-11-2017 */
		$shipToAddress	= !empty($postData['ship_to_address']) ? $postData['ship_to_address'] : '';
		$shipToAddress = str_replace("'", "''", $shipToAddress);
		$oldPrice		= !empty($postData['old_calculator']) ? $postData['old_calculator'] : '0';
		$priceOverride	= !empty($postData['price_override']) ? $postData['price_override'] : '0';
		/* Modify at the 29-11-2017 */
		$customOpportunity	= !empty($postData['custom-opportunity']) ? trim($postData['custom-opportunity']) : '';
		if(!empty($customOpportunity)){
			$opportunity	= $customOpportunity;
		}
		$contact		= !empty($postData['contact']) ? $postData['contact'] : '0';
		$contact = str_replace("'", "''", $contact);
		if(empty($contact)){
			$html		= '';
			$message	= "Select a Contact First!";
			$stat		= 'No';
			return array('html'=>$html,'error'=>$message);
		}
		$lead_time		= !empty($postData['lead-time']) ? $postData['lead-time'] : '0';
		$editQuoteDescription		= !empty($postData['edit_quote_description']) ? $postData['edit_quote_description'] : '';
		$editQuoteDescription 			= str_replace("'", "''", $editQuoteDescription);
		$editQuoteDescription		= str_replace("\n",';',$editQuoteDescription);
		$markForReview	= !empty($postData['mark_for_reviews']) ? $postData['mark_for_reviews'] : 0;
		//dump($postData);die;
		if ($old_quoteid == 'No') {
			$orig_quote_id = '';
		} else {
			$orig_quote_id = $old_quoteid;
		}
		$stat='No';$message=''; $html		= '';
		

		if ($n_customer == '') {
			$n_cust = 'None';
			$message	= "Select a Customer First!";
			$stat	= 'No';
			return array('html'=>$html,'error'=>$message);
			
		} else {
			$n_cust=explode('[',$n_customer);
			$n_cust = trim($n_cust[0]);
		}
		
		if ($postData['net_product'] == "None") {
			$product	= "NONE";
			$message	= "Please Select a Product First!";
			$stat	= 'No';
			return array('html'=>$html,'error'=>$message);
		} else {
			$product = substr($n_product, strpos($n_product, "[") + 1, (strpos($n_product, "]") - strpos($n_product, "[") -1));
		}
		
		/* Added By Prem (01-06-2017)*/
		if ($n_length < $n_width) {
			$message	= "Length must be greater than or equal to Width";
			$stat	= 'No';
			return array('html'=>$html,'error'=>$message);
		}

		if ($n_number < 1) {
			$message	= "Number of Net must be greater than 0.";
			$stat	= 'No';
			return array('html'=>$html,'error'=>$message);
		}
		
		/*
		if ($product == 'LPN' and ($n_length - $bodylength) < 4.0) {
			$message	= "Body Length Must Be at Least 4ft Less than OAL";
			$stat		= 'No';
			return array('html'=>$html,'error'=>$message);
		}

		if ($product == 'LPN' and $n_width > 4.0) {
			$message	= "Width must be less than or equal to 4 FT";
			$stat		= 'No';
			return array('html'=>$html,'error'=>$message);
		}
		*/
		/* Added By Prem End */
		
		
		if ($postData['net_border'] == "None") {
			$borderoption = "NONE";
			$message	= "Please select a NetForm Rope!";
			$stat		= 'No';
			return array('html'=>$html,'error'=>$message);
		} else {
			$borderoption = substr($n_border, strpos($n_border, "[") + 1, (strpos($n_border, "]") - strpos($n_border, "[") -1));
		}

		if ($postData['net_border2'] == "None") {
			$borderoption2 = "NONE";
		} else {
			$borderoption2 = substr($n_border2, strpos($n_border2, "[") + 1, (strpos($n_border2, "]") - strpos($n_border2, "[") -1));
		}

		if (!empty($postData['net_border3'])&&$postData['net_border3'] == "None") {
			$borderoption3 = "NONE";
		} else {
			$borderoption3 = substr($n_border3, strpos($n_border3, "[") + 1, (strpos($n_border3, "]") - strpos($n_border3, "[") -1));
		}
		if (!empty($postData['net_border4'])&&$postData['net_border4'] == "None") {
			$borderoption4 = "NONE";
		} else {
			$borderoption4 = substr($n_border4, strpos($n_border4, "[") + 1, (strpos($n_border4, "]") - strpos($n_border4, "[") -1));
		}
		if (!empty($postData['net_border5'])&&$postData['net_border5'] == "None") {
			$borderoption5 = "NONE";
		} else {
			$borderoption5 = substr($n_border5, strpos($n_border5, "[") + 1, (strpos($n_border5, "]") - strpos($n_border5, "[") -1));
		}
		
		$pricingtier	= substr($pricing_tier, strpos($pricing_tier, "[") + 1, (strpos($pricing_tier, "]") - strpos($pricing_tier, "[") -1));
		$pricingtier	= !empty($pricingtier) ? $pricingtier : 0;
		
		if($message==''){
			$save_flag	= $type;
			$res	= "SELECT * from qw.lilypad_quote($save_flag, '$orig_quote_id', $quote_line,'$n_cust', '$product',$n_length,
			 $n_width,$bodylength, '$borderoption','$borderoption2', '$borderoption4', '$borderoption3', $n_number, $pricingtier,
			  $n_discount,'$instrunctions','$login_user','$salesPerson','$wtClass','$opportunity','$contact','$lead_time',
			  '$tag_number','$proposal_number',$markForReview,'$editQuoteDescription','$borderoption5',
			  '$shipToAddress',$oldPrice,$priceOverride)";
			/* Log Query Test (07-08-2017)*/
				$functionFor	= !empty($save_flag) ? ' Save ' : ' Calculate ';
				queryLog('Lilypad'.$functionFor.'Quote Function',$res );
			/* Log Query Test */
			$results	= $CI->db->query($res);
			$results	= $results->result();
			
			$costpernet = 0.0;
			$subtotal	= 0;
			
			//dump($results);die;
			if(!empty($results)){
				$editableQuoteDescription	= !empty($results[0]->quote_description) ? $results[0]->quote_description : '';
				$editableQuoteDescription   = substr($editableQuoteDescription, 0, strrpos($editableQuoteDescription,";"));
				$editableQuoteDescription	= str_replace(';',"\n",$editableQuoteDescription);
				$checker	= 0;
				$n_customer=explode('[',$n_customer);
				$cus=!empty($n_customer[1])?trim($n_customer[1],']'):$n_customer[0];
				$cus='<div class="net-calcultor-save"><p class="next"><strong>Customer : </strong>'.$cus.' </p>
									<p class="next1"><strong>Product : </strong> lilypad Quote </p>';
									/* Quote Description for editable update (24-07-2017)*/
									$cus	.='<p><strong>Description : </strong></p>
									<p class="editable-quote-description">
									<textarea name="editable_quote_description" class="return_quote_description">'.$editableQuoteDescription.'</textarea></p>';
									/* Quote Description for editable update (24-07-2017)*/
									$cus	.='<p><strong> Quantity : </strong>'.$n_number.'</p></div>';
					$table='<table class="excel_download"><tr><td>Product:</td><td>'.$n_product.'</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
					<tr><td> Quantity :</td><td>'.$n_number.'</td><td> </td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
					$table .='<tr><td></td><td></td><td>Item#</td><td>QuantityPerNet</td><td>TotalQantity</td><td>UOM</td><td>Activity Code</td><td>Step</td></tr>';
				$counting = 0;
				foreach($results as $row){
					if(!empty($save_flag)){
						$quote_id=$row->quoteid;
						$proposal_number=$row->proposalnum;
						/* Send mail to Sales Person */
						$quant	= !empty($n_number) ? $n_number : 0;
						$salespersonMailData	= array('quoteId'=>$quote_id,'proposalId'=>$proposal_number,
						'lineNo'=>$quote_line,'type'=>'LilyPad','quantity'=>$quant,'salespersonEmail'=>$salesPersonMailId);
						$finalUrl	= 1;//sendMailToSalesMenForBOM($salespersonMailData);
						/* Send mail to Sales Person */
						return array('html'=>$quote_id,'error'=>$message,'proposalNumber'=>$proposal_number,'finalUrl'=>$finalUrl);
						break;
					}
					$itemcode			= !empty($row->itemcode) ? $row->itemcode : '';
					$uom				= !empty($row->uom) ? $row->uom : '';
					$laboractivityrate	= !empty($row->laboractivityrate) ? $row->laboractivityrate : '';
					$activitycode		= !empty($row->activitycode) ? $row->activitycode : '';
					$attributeArray		= array('itemCode'=>$itemcode,'uom'=>$uom,'laboractivityrate'=>$laboractivityrate,'activitycode'=>$activitycode);
						
						$costpernet = $costpernet + $row->totalcost;
						$subtotal	= $subtotal + $row->totalcost;
						$html	.='<div class="order-list">
									<div class="item-quantity">'.$cus;
										if($counting==0){
											$html	.='<p><strong>Item # </strong> <strong class="margin-right">Qty (UOM) </strong>';
										}
										/* Here We are getting the available quantity based on Item Code */
										$availableQuantity			= getAvailableQuantityOfItemCode($row->itemcode);
										/*$displayAvailDes			= !empty($availableQuantity['description']) ? 'Item Desc : '.$availableQuantity['description'].'<br />' :'';
										$displayAvailQnt			= !empty($availableQuantity['quantity']) ? 'Avail Qty : '.$availableQuantity['quantity'] :'';
										$displayAvailableQntHtml1	= (empty($displayAvailDes) && empty($displayAvailQnt)) ? 'Quantity Not Available' : $displayAvailDes.$displayAvailQnt;
										*/
										$displayAvailableQntHtml	= '<span class="tooltiptext">'.$availableQuantity['current'].'<br>'.$availableQuantity['alternate'].'</span>';
										/* End Here */
										$html	.='<p><a class="tooltip">'.$row->itemcode.displayRedStopIcon($attributeArray).$displayAvailableQntHtml.'</a> <span>'.round($row->quantity, 2).' ('.$row->uom.') </span>';
										
									$html	.='</div></div>';
							$cus='';	
					$table .='<tr><td></td><td></td><td>'.$row->itemcode.'</td><td>'.round($row->quantity, 2).'</td><td> '.round(($row->quantity*$n_number), 2).'</td><td>'.$row->uom.'</td><td>'.$row->activitycode.'</td><td>'.$row->wt_step.'</td></tr>';
					$counting++;
				}
				$pricePerSft	= $priceOverride === '0' ? ($subtotal / $sft): ($priceOverride / $sft);
				$table .='</table>';
				$html	.='*<div class="sub-total">';
				if($priceOverride === '0'){
					$html	.='<p> Price per net <span ><strong>'.number_format($subtotal,2).'</strong></span></p>
							   <p> Price per SFT <span ><strong>'.number_format($pricePerSft,2).'</strong></span></p>
							   </div><p>Sub Total Price</p>
							   <h3 id="total_of_subtotal">'.number_format(($subtotal*$n_number),0).'</h3>';
				}
				else {
					$html	.='<p> Original Price per net <span ><strong>'.number_format($subtotal,2).'</strong></span></p>
							   <p></p>
							   <p> Override Price per net <span ><strong>'.number_format($priceOverride,2).'</strong></span></p>
							   <p> Price per SFT <span ><strong>'.number_format($pricePerSft,2).'</strong></span></p>
							   </div><p>Sub Total Price</p>
							   <h3 id="total_of_subtotal">'.number_format(($priceOverride*$n_number),0).'</h3>';
				}
					
				if(empty($type)){
					$html .='<a href="javascript:void(0)" id="savelilypadQuote">Save Quote</a><a href="#" class="download">
							<i class="fa fa-file-excel-o" aria-hidden="true"></i> BOM</a>';
				}
				$html .='*'.$table.'*'.$editableQuoteDescription;
				$stat	= 'Yes';
			}else{
				$html	= '';
				$stat	= 'No';
			}
		}
		return array('html'=>$html,'error'=>$message);
	}
	return array('html'=>'','error'=>'Please login your session expired');
	}
	
	/**
	 * @Function	-: baynetQuote()
	 * @Description	-: This function used for this function use for save and calculate the baynet quote cost and details
	 * @Param		-: array()
	 * @created		-: 03-05-2017
	 * @return		-:json
	 * */
	function baynetQuote($postData=array(),$type=0){
		$CI	= & get_instance();
		$login_user=$CI->session->userdata('frontendUserName');
		if(!empty($login_user)){
		$n_customer		= str_replace('&', 'and', (!empty($postData['customer']) ? $postData['customer'] : '')); 
		$n_product		= str_replace('&', ' ', (!empty($postData['net_product']) ? $postData['net_product'] : ''));		
		$n_number		= !empty($postData['net_number']) ? $postData['net_number'] : 0;
		$bodylength		= !empty($postData['bodylength']) ? $postData['bodylength'] : 0;
		$n_length		= !empty($postData['net_length']) ? $postData['net_length'] : 0;
		$n_width		= !empty($postData['net_width']) ? $postData['net_width'] : 0;
		$tag_number		= !empty($postData['tag_number']) ? $postData['tag_number'] : '';
		$proposal_number		= !empty($postData['proposal_number']) ? $postData['proposal_number'] : '';
		/* */
		$lft		= (2 * $n_length) + (2 * $n_width);
		$sft		= ($n_length * $n_width);
		/* */
		$n_discount		= !empty($postData['discount']) ? $postData['discount'] : 0;
		$instrunctions		= !empty($postData['instrunctions']) ? $postData['instrunctions'] : '';
		$instrunctions = str_replace("'", "''", $instrunctions);
		$salesPerson		= !empty($postData['choose-sales']) ? trim($postData['choose-sales']) : '';
		
		/* Checking for Salesperson email id */
			$salesPersonMailId	= '';
			if(!empty($salesPerson)){
				$salesPerson	= explode('##',$salesPerson);
				if(!empty($salesPerson)){
					$salesPerson	= !empty($salesPerson[0]) ? $salesPerson[0] : '';
					$salesPersonMailId	= !empty($salesPerson[1]) ? $salesPerson[1] : '';
				}
			}
		/* Checking for Salesperson email id */
		
		$wtClass		= !empty($postData['choose-wtclass']) ? $postData['choose-wtclass'] : '';
		$pricing_tier	= !empty($postData['pricing_tier']) ? $postData['pricing_tier'] : '0';
		$old_quoteid	= !empty($postData['old_quoteid']) ? $postData['old_quoteid'] : '';
		$quote_line		= !empty($postData['quote_line']) ? $postData['quote_line'] : 0;
		$opportunity	= !empty($postData['opportunity']) ? $postData['opportunity'] : '';
		$customOpportunity	= !empty($postData['custom-opportunity']) ? trim($postData['custom-opportunity']) : '';
		if(!empty($customOpportunity)){
			$opportunity	= $customOpportunity;
		}
		$contact		= !empty($postData['contact']) ? $postData['contact'] : '0';
		$contact = str_replace("'", "''", $contact);
		
		$netperbay		= !empty($postData['netperbay']) ? $postData['netperbay'] : 1;
		$drainPanNumber	= !empty($postData['drain_pan_number']) ? $postData['drain_pan_number'] : 0;
		$numberOfSystem	= !empty($postData['numberofsystem']) ? $postData['numberofsystem'] : 1;
		/* Modify at the 29-11-2017 */
		$shipToAddress	= !empty($postData['ship_to_address']) ? $postData['ship_to_address'] : '';
		$shipToAddress = str_replace("'", "''", $shipToAddress);
		$oldPrice		= !empty($postData['old_calculator']) ? $postData['old_calculator'] : '0';
		$priceOverride	= !empty($postData['price_override']) ? $postData['price_override'] : '0';
		/* Modify at the 29-11-2017 */
		if(empty($contact)){
			$html		= '';
			$message	= "Select a Contact First!";
			$stat		= 'No';
			return array('html'=>$html,'error'=>$message);
		}
		$lead_time		= !empty($postData['lead-time']) ? $postData['lead-time'] : '0';
		/* Changes 28-07-2017 */
		$editQuoteDescription		= !empty($postData['edit_quote_description']) ? $postData['edit_quote_description'] : '';
		$editQuoteDescription 		= str_replace("'", "''", $editQuoteDescription);
		$editQuoteDescription		= str_replace("\n",';',$editQuoteDescription);
		
		$markForReview	= !empty($postData['mark_for_reviews']) ? $postData['mark_for_reviews'] : 0;
		/* Changes 28-07-2017 */
		
		if ($old_quoteid == 'No') {
			$orig_quote_id = '';
		} else {
			$orig_quote_id = $old_quoteid;
		}
		$stat='No';$message=''; $html		= '';
		//echo $orig_quote_id;

		

		if ($n_customer == '') {
			$n_cust = 'None';
			$message	= "Select a Customer First!";
			$stat	= 'No';
			return array('html'=>$html,'error'=>$message);
			
		} else {
			$n_cust=explode('[',$n_customer);
			$n_cust = trim($n_cust[0]);
		}
		if ($postData['net_product'] == "None") {
			$product	= "NONE";
			$message	= "Please Select a Product First!";
			$stat	= 'No';
			return array('html'=>$html,'error'=>$message);
		} else {
			$product = substr($n_product, strpos($n_product, "[") + 1, (strpos($n_product, "]") - strpos($n_product, "[") -1));
		}
		
		$pricingtier	= substr($pricing_tier, strpos($pricing_tier, "[") + 1, (strpos($pricing_tier, "]") - strpos($pricing_tier, "[") -1));
		$pricingtier	= !empty($pricingtier) ? $pricingtier : 0;
		
		if($message==''){
			$save_flag	= $type;
				
			$res		= "SELECT * from qw.baynet_quote($save_flag, '$orig_quote_id', $quote_line,'$n_cust', '$product',$n_length,
			 $n_width,$bodylength, $n_number, $pricingtier, $n_discount,'$instrunctions','$login_user',
			 '$salesPerson','$wtClass','$opportunity','$contact','$lead_time','$tag_number','$proposal_number',
			 $markForReview,'$editQuoteDescription',$netperbay,$drainPanNumber,$numberOfSystem,
			 '$shipToAddress',$oldPrice,$priceOverride)";
				/* Log Query Test (07-08-2017)*/
					$functionFor	= !empty($save_flag) ? ' Save ' : ' Calulate ';
					queryLog('Baynet'.$functionFor.'Quote Function',$res );
				/* Log Query Test */
			$results	= $CI->db->query($res);
			$results	= $results->result();
			
			$costpernet = 0.0;
			$subtotal	= 0;
			
			if(!empty($results)){
				$editableQuoteDescription	= !empty($results[0]->quote_description) ? $results[0]->quote_description : '';
				$editableQuoteDescription	= str_replace(';',"\n",$editableQuoteDescription);
				$checker	= 0;
				$n_customer=explode('[',$n_customer);
				$cus=!empty($n_customer[1])?trim($n_customer[1],']'):$n_customer[0];
				$cus='<div class="net-calcultor-save"><p class="next"><strong>Customer : </strong>'.$cus.' </p>
						<p class="next1"><strong>Product : </strong> Bay Net Quote </p>';
						/* Quote Description for editable update (28-07-2017)*/
						$cus	.='<p><strong>Description : </strong></p>
						<p class="editable-quote-description">
						<textarea name="editable_quote_description" class="return_quote_description">'.$editableQuoteDescription.'</textarea></p>';
						/* Quote Description for editable update (28-07-2017)*/
						$cus	.='<p><strong> Quantity : </strong>'.$n_number.'</p></div>';
					$table='<table class="excel_download"><tr><td>Product:</td><td>'.$n_product.'</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
					<tr><td> Quantity :</td><td>'.$n_number.'</td><td> </td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
					$table .='<tr><td></td><td></td><td>Item#</td><td>QuantityPerNet</td><td>TotalQantity</td><td>UOM</td><td>Activity Code</td><td>Step</td></tr>';
				$counting	= 0;
				foreach($results as $row){
					//print_r($results);
					if(!empty($save_flag)){
						$quote_id=$row->quoteid;
						$proposal_number=$row->proposalnum;
						/* Send mail to Sales Person */
						$quant	= !empty($n_number) ? $n_number : 0;
						$salespersonMailData	= array('quoteId'=>$quote_id,'proposalId'=>$proposal_number,
						'lineNo'=>$quote_line,'type'=>'BayNet','quantity'=>$quant,'salespersonEmail'=>$salesPersonMailId);
						$finalUrl	= 1;//sendMailToSalesMenForBOM($salespersonMailData);
						return array('html'=>$quote_id,'error'=>$message,'proposalNumber'=>$proposal_number,'finalUrl'=>$finalUrl);
						/* Send mail to Sales Person */
						break;
					}
					$itemcode			= !empty($row->itemcode) ? $row->itemcode : '';
					$uom				= !empty($row->uom) ? $row->uom : '';
					$laboractivityrate	= !empty($row->laboractivityrate) ? $row->laboractivityrate : '';
					$activitycode		= !empty($row->activitycode) ? $row->activitycode : '';
					$attributeArray		= array('itemCode'=>$itemcode,'uom'=>$uom,'laboractivityrate'=>$laboractivityrate,'activitycode'=>$activitycode);
						
						$costpernet = $costpernet + $row->totalcost;
						$subtotal	= $subtotal + $row->totalcost;
						$html	.='<div class="order-list">
									<div class="item-quantity">
									'.$cus;
									if($counting==0){
										$html	.='<p><strong>Item # </strong> <strong class="margin-right">Qty (UOM) </strong>';
									}
									/* Here We are getting the available quantity based on Item Code */
									$availableQuantity			= getAvailableQuantityOfItemCode($row->itemcode);
										/*$displayAvailDes			= !empty($availableQuantity['description']) ? 'Item Desc : '.$availableQuantity['description'].'<br />' :'';
										$displayAvailQnt			= !empty($availableQuantity['quantity']) ? 'Avail Qty : '.$availableQuantity['quantity'] :'';
										$displayAvailableQntHtml1	= (empty($displayAvailDes) && empty($displayAvailQnt)) ? 'Quantity Not Available' : $displayAvailDes.$displayAvailQnt;
										*/
										$displayAvailableQntHtml	= '<span class="tooltiptext">'.$availableQuantity['current'].'<br>'.$availableQuantity['alternate'].'</span>';
									/* End Here */
									$html	.='<p><a class="tooltip">'.$row->itemcode.displayRedStopIcon($attributeArray).$displayAvailableQntHtml.'</a> <span>'.round($row->quantity, 2).' ('.$row->uom.') </span>';
									$html	.='</div></div>';
							$cus='';	
					$table .='<tr><td></td><td></td><td>'.$row->itemcode.'</td><td>'.round($row->quantity, 2).'</td><td> '.round(($row->quantity*$n_number), 2).'</td><td>'.$row->uom.'</td><td>'.$row->activitycode.'</td><td>'.$row->wt_step.'</td></tr>';
					$counting++;
				}
				$pricePerSft	= $priceOverride === '0' ? ($subtotal / $sft): ($priceOverride / $sft);
				$table .='</table>';
				$html	.='*<div class="sub-total">';
							if($priceOverride === '0'){
								$html	.='<p> Price per net <span ><strong>'.number_format($subtotal,2).'</strong></span></p>
										   <p> Price per SFT <span ><strong>'.number_format($pricePerSft,2).'</strong></span></p>
										   </div><p>Sub Total Price</p>
										   <h3 id="total_of_subtotal">'.number_format(($subtotal*$n_number),0).'</h3>';
							}
							else {
								$html	.='<p> Original Price per net <span ><strong>'.number_format($subtotal,2).'</strong></span></p>
										   <p></p>
										   <p> Override Price per net <span ><strong>'.number_format($priceOverride,2).'</strong></span></p>
										   <p> Price per SFT <span ><strong>'.number_format($pricePerSft,2).'</strong></span></p>
										   </div><p>Sub Total Price</p>
										   <h3 id="total_of_subtotal">'.number_format(($priceOverride*$n_number),0).'</h3>';
							}
								
							if(empty($type)){
								$html .='<a href="javascript:void(0)" id="savebaynetQuote">Save Quote</a><a href="#" class="download">
										<i class="fa fa-file-excel-o" aria-hidden="true"></i> BOM</a>';
							}
				$html .='*'.$table;
				$stat	= 'Yes';
				
			}else{
				$html	= '';
				$stat	= 'No';
			}
			}
			return array('html'=>$html,'error'=>$message);
		}
		return array('html'=>'','error'=>'Please login your session expired');
	}
	
	/*Cargo Climbing Net Quote*/
	function saveCclimbQuote($postData=array(),$type=0){
		$CI = & get_instance();
		$login_user = $CI->session->userdata('frontendUserName');
		if(!empty($login_user)){
				$n_customer		= str_replace('&', 'and', (!empty($postData['customer']) ? $postData['customer'] : '')); 
				$n_length		= !empty($postData['net_length']) ? $postData['net_length'] : '0';
				$n_width		= !empty($postData['net_width']) ? $postData['net_width'] : '0';
				$n_number 		= !empty($postData['num_nets']) ? $postData['num_nets'] : '0';
				$net_material 	= !empty($postData['net_material']) ? $postData['net_material'] : '0';
				$net_thimble 	= !empty($postData['net_thimble']) ? $postData['net_thimble'] : '0';
				$net_hardware 	= !empty($postData['net_hardware']) ? $postData['net_hardware'] : '0';
				$mesh_width		= !empty($postData['mesh_width']) ? $postData['mesh_width'] : '0';
				$mesh_length		= !empty($postData['mesh_length']) ? $postData['mesh_length'] : '0';
				$mesh_checkbox = !empty($postData['mesh_dimensions']) ? 1 : '0';
				$mesh_size		= !empty($postData['mesh_size']) ? $postData['mesh_size'] : '0';
				$n_loop_no        = !empty($postData['no_loops']) ? $postData['no_loops'] : '0';
				$loop_size        = !empty($postData['loop_size']) ? $postData['loop_size'] : '0';
				$n_thimble_no        = !empty($postData['thimble_no']) ? $postData['thimble_no'] : '0';

				$n_spliceborder = str_replace('&', ' ', (!empty($postData['net_spliceborder']) ? $postData['net_spliceborder'] : ''));
				$tag_number		= !empty($postData['tag_number']) ? $postData['tag_number'] : '';	
				$proposal_number		= !empty($postData['proposal_number']) ? $postData['proposal_number'] : '';	
				
				$shipToAddress	= !empty($postData['ship_to_address']) ? $postData['ship_to_address'] : '';
				$shipToAddress = str_replace("'", "''", $shipToAddress);
				$oldPrice		= !empty($postData['old_calculator']) ? $postData['old_calculator'] : '0';
				$priceOverride	= !empty($postData['price_override']) ? $postData['price_override'] : '0';
				$thimble 		= !empty($postData['thimble']) ? 1 : '0';

				$n_discount		= !empty($postData['discount']) ? $postData['discount'] : '0';		
				$instrunctions		= !empty($postData['instrunctions']) ? $postData['instrunctions'] : '';
				$instrunctions = str_replace("'", "''", $instrunctions);
				$salesPerson		= !empty($postData['choose-sales']) ? trim($postData['choose-sales']) : '';
				
				/* Checking for Salesperson email id */
					$salesPersonMailId	= '';
					if(!empty($salesPerson)){
						$salesPerson	= explode('##',$salesPerson);
						if(!empty($salesPerson)){
							$salesPerson	= !empty($salesPerson[0]) ? $salesPerson[0] : '';
							$salesPersonMailId	= !empty($salesPerson[1]) ? $salesPerson[1] : '';
						}
					}
				/* Checking for Salesperson email id */
				
				$wtClass		= !empty($postData['choose-wtclass']) ? $postData['choose-wtclass'] : '';		
				$pricing_tier	= !empty($postData['pricing_tier']) ? $postData['pricing_tier'] : '0';
				$old_quoteid	= !empty($postData['old_quoteid']) ? $postData['old_quoteid'] : '';
				$quote_line		= !empty($postData['quote_line']) ? $postData['quote_line'] : 0;	
				
				$n_spliceborder		= str_replace('&#', ' ', (!empty($postData['net_spliceborder']) ? $postData['net_spliceborder'] : ''));
				$opportunity		= !empty($postData['opportunity']) ? $postData['opportunity'] : '';
				$contact		= !empty($postData['contact']) ? $postData['contact'] : '0';
				$contact = str_replace("'", "''", $contact);
				if(empty($contact)){
					$html		= '';
					$message	= "Select a Contact First!";
					$stat		= 'No';
					return array('html'=>$html,'error'=>$message);
				}
				$lead_time		= !empty($postData['lead-time']) ? $postData['lead-time'] : '0';
				
				$editQuoteDescription		= !empty($postData['edit_quote_description']) ? $postData['edit_quote_description'] : '';
				$editQuoteDescription 		= str_replace("'", "''", $editQuoteDescription);
				$editQuoteDescription		= str_replace("\n",';',$editQuoteDescription);
				$markForReview	= !empty($postData['mark_for_reviews']) ? $postData['mark_for_reviews'] : 0;
				
				if ($old_quoteid == 'No') {
					$orig_quote_id = '';
				} else {
					$orig_quote_id = $old_quoteid;
				}
				$stat='No';$message=''; $html		= '';

				if ($n_customer == '') {
					$n_cust = 'None';
					$message	= "Select a Customer First!";
					$stat	= 'No';
					return array('html'=>$html,'error'=>$message);
					
				} else {
					$n_cust=explode('[',$n_customer);
					$n_cust = trim($n_cust[0]);
				}

				if ($postData['net_material'] == "None") {
					$n_material = "NONE";
				} else {
					$n_material = substr($net_material, strpos($net_material, "[") + 1, (strpos($net_material, "]") - strpos($net_material, "[") -1));
					$m_arr = explode(" ", $net_material);
					$web_width = substr($m_arr[0],0,-2);
				}

				if ($postData['net_thimble'] == "None") {
					$n_thimble = "NONE";
				} else {
					$n_thimble = substr($net_thimble, strpos($net_thimble, "[") + 1, (strpos($net_thimble, "]") - strpos($net_thimble, "[") -1));
					$m_arr = explode(" ", $net_thimble);
					$web_width = substr($m_arr[0],0,-2);
				}

				if ($postData['net_hardware'] == "None") {
					$n_hardware = "NONE";
				} else {
					$n_hardware = substr($net_hardware, strpos($net_hardware, "[") + 1, (strpos($net_hardware, "]") - strpos($net_hardware, "[") -1));
					$m_arr = explode(" ", $net_hardware);
					$web_width = substr($m_arr[0],0,-2);
				}

				$pricingtier	= substr($pricing_tier, strpos($pricing_tier, "[") + 1, (strpos($pricing_tier, "]") - strpos($pricing_tier, "[") -1));
				$pricingtier	= !empty($pricingtier) ? $pricingtier : 0;
				$n_product = 'CCRN';
				$sft = $n_length*$n_width;
				
				if($message=='')
				{
						$save_flag	= $type;
						$res		= "SELECT * from qw.cclimbnet_quote($save_flag, '$orig_quote_id', $quote_line,'$n_cust', $thimble, '$n_product', '$n_material', $n_number, $n_length, $n_width, $mesh_checkbox, $mesh_size, $mesh_width, $mesh_length, '$n_loop_no', '$loop_size', '$n_thimble_no', $n_spliceborder, '$n_thimble', '$n_hardware', $pricingtier, $n_discount,'$instrunctions','$login_user','$salesPerson','$wtClass','$opportunity','$contact','$lead_time','$tag_number','$proposal_number',$markForReview,'$editQuoteDescription','$shipToAddress',$oldPrice,$priceOverride)";
						/*var_dump($res);die;*/
						/* Log Query Test (07-08-2017)*/
							$functionFor	= !empty($save_flag) ? ' Save ' : ' Calulate ';
							queryLog('Cargo Climbing Net'.$functionFor.'Quote Function',$res );
						/*Log Query Test*/ 
						
						$results	= $CI->db->query($res);
						$results	= $results->result();
						

						$costpernet = 0.0;
						$subtotal	= 0;
					if(!empty($results)){
						
				$editableQuoteDescription	= !empty($results[0]->quote_description) ? $results[0]->quote_description : '';
				$editableQuoteDescription	= str_replace(';',"\n",$editableQuoteDescription);
				$checker	= 0;
				$n_customer=explode('[',$n_customer);
				$cus=!empty($n_customer[1])?trim($n_customer[1],']'):$n_customer[0];
				$cus='<div class="net-calcultor-save"><p class="next"><strong>Customer : </strong>'.$cus.' </p>
									<p class="next1"><strong>Product : </strong> Cargo Climbing Net Quote </p>';
									/* Quote Description for editable update (28-07-2017)*/
									$cus	.='<p><strong>Description : </strong></p>
									<p class="editable-quote-description">
									<textarea name="editable_quote_description" class="return_quote_description">'.$editableQuoteDescription.'</textarea></p>';
									/* Quote Description for editable update (28-07-2017)*/
									$cus	.='<p><strong> Quantity : </strong>'.$n_number.'</p></div>';
					$table='<table class="excel_download"><tr><td>Product:</td><td>'.$n_product.'</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
					<tr><td> Quantity :</td><td>'.$n_number.'</td><td> </td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
					$table .='<tr><td></td><td></td><td>Item#</td><td>QuantityPerNet</td><td>TotalQantity</td><td>UOM</td><td>Activity Code</td><td>Step</td></tr>';
				$counting	= 0;
				foreach($results as $row){
					
					if(!empty($save_flag)){
						$quote_id=$row->quoteid;
						$proposal_number=$row->proposalnum;
						/* Send mail to Sales Person */
						$quant	= !empty($n_number) ? $n_number : 0;
						$salespersonMailData	= array('quoteId'=>$quote_id,'proposalId'=>$proposal_number,
						'lineNo'=>$quote_line,'type'=>'Cargo Climb','quantity'=>$quant,'salespersonEmail'=>$salesPersonMailId);
						$finalUrl	= 1;//sendMailToSalesMenForBOM($salespersonMailData);
						return array('html'=>$quote_id,'error'=>$message,'proposalNumber'=>$proposal_number,'finalUrl'=>$finalUrl);
						/* Send mail to Sales Person */
						break;
					}
					$itemcode			= !empty($row->itemcode) ? $row->itemcode : '';
					$uom				= !empty($row->uom) ? $row->uom : '';
					$laboractivityrate	= !empty($row->laboractivityrate) ? $row->laboractivityrate : '';
					$activitycode		= !empty($row->activitycode) ? $row->activitycode : '';
					$attributeArray		= array('itemCode'=>$itemcode,'uom'=>$uom,'laboractivityrate'=>$laboractivityrate,'activitycode'=>$activitycode);
						
						$costpernet = $costpernet + $row->totalcost;
						$subtotal	= $subtotal + $row->totalcost;
						$html	.='<div class="order-list">
									<div class="item-quantity">
									'.$cus;
									if($counting==0){
										$html	.='<p><strong>Item # </strong> <strong class="margin-right">Qty (UOM) </strong>';
									}
									/* Here We are getting the available quantity based on Item Code */
									$availableQuantity			= getAvailableQuantityOfItemCode($row->itemcode);
										/*$displayAvailDes			= !empty($availableQuantity['description']) ? 'Item Desc : '.$availableQuantity['description'].'<br />' :'';
										$displayAvailQnt			= !empty($availableQuantity['quantity']) ? 'Avail Qty : '.$availableQuantity['quantity'] :'';
										$displayAvailableQntHtml1	= (empty($displayAvailDes) && empty($displayAvailQnt)) ? 'Quantity Not Available' : $displayAvailDes.$displayAvailQnt;*/
									$displayAvailableQntHtml	= '<span class="tooltiptext">'.$availableQuantity['current'].'<br>'.$availableQuantity['alternate'].'</span>';
									/* End Here */
									$html	.='<p><a class="tooltip">'.$row->itemcode.displayRedStopIcon($attributeArray).$displayAvailableQntHtml.'</a> <span>'.round($row->quantity, 2).' ('.$row->uom.') </span>';
									$html	.='</div></div>';
							$cus='';
					$table .='<tr><td></td><td></td><td>'.$row->itemcode.'</td><td>'.round($row->quantity, 2).'</td><td> '.round(($row->quantity*$n_number), 2).'</td><td>'.$row->uom.'</td><td>'.$row->activitycode.'</td><td>'.$row->wt_step.'</td></tr>';
					$counting++;
				}
				$pricePerSft	= $priceOverride === '0' ? ($subtotal / $sft): ($priceOverride / $sft);
				$table .='</table>';
				$html	.='*<div class="sub-total">';
							if($priceOverride === '0'){
								$html	.='<p> Price per net <span ><strong>'.number_format($subtotal,2).'</strong></span></p>
										   <p> Price per SFT <span ><strong>'.number_format($pricePerSft,2).'</strong></span></p>
										   </div><p>Sub Total Price</p>
										   <h3 id="total_of_subtotal">'.number_format(($subtotal*$n_number),0).'</h3>';
							}
							else {
								$html	.='<p> Original Price per net <span ><strong>'.number_format($subtotal,2).'</strong></span></p>
										   <p></p>
										   <p> Override Price per net <span ><strong>'.number_format($priceOverride,2).'</strong></span></p>
										   <p> Price per SFT <span ><strong>'.number_format($pricePerSft,2).'</strong></span></p>
										   </div><p>Sub Total Price</p>
										   <h3 id="total_of_subtotal">'.number_format(($priceOverride*$n_number),0).'</h3>';
							}
								
							if(empty($type)){
								$html .='<a href="javascript:void(0)" id="savecclimbQuote">Save Quote</a><a href="#" class="download">
										<i class="fa fa-file-excel-o" aria-hidden="true"></i> BOM</a>';
							}
				$html .='*'.$table;
				$stat	= 'Yes';
				
			}else{
				$html	= '';
				$stat	= 'No';
			}
			}
			return array('html'=>$html,'error'=>$message);
		}
		else {
			  return array('html'=>'','error'=>'Please login your session expired');
		}
	}
	
	/*Rack Guard quote function*/
	function saveCargonetQuote($postData=array(),$type=0){
		$CI	= & get_instance();
		$login_user=$CI->session->userdata('frontendUserName');
		if(!empty($login_user))
		{
				$n_customer		= str_replace('&', 'and', (!empty($postData['customer']) ? $postData['customer'] : '')); 
				$n_bays		= !empty($postData['net_bays']) ? $postData['net_bays'] : '';		
				$n_height		= !empty($postData['net_height']) ? $postData['net_height'] : '0';
				$n_width		= !empty($postData['net_width']) ? $postData['net_width'] : '0';
				$n_runs 		= str_replace('&', ' ', (!empty($postData['net_runs']) ? $postData['net_runs'] : ''));
				$n_ctoc 		= str_replace('&', ' ', (!empty($postData['in_ctoc']) ? $postData['in_ctoc'] : ''));
				$n_oah          = str_replace('&', ' ', (!empty($postData['in_oad_height']) ? $postData['in_oad_height'] : ''));
				$tag_number		= !empty($postData['tag_number']) ? $postData['tag_number'] : '';	
				$proposal_number		= !empty($postData['proposal_number']) ? $postData['proposal_number'] : '';	
				
				$n_discount		= !empty($postData['discount']) ? $postData['discount'] : '0';		
				$instrunctions		= !empty($postData['instrunctions']) ? $postData['instrunctions'] : '';
				$instrunctions = str_replace("'", "''", $instrunctions);
				$salesPerson		= !empty($postData['choose-sales']) ? trim($postData['choose-sales']) : '';
				
				/* Checking for Salesperson email id */
					$salesPersonMailId	= '';
					if(!empty($salesPerson)){
						$salesPerson	= explode('##',$salesPerson);
						if(!empty($salesPerson)){
							$salesPerson	= !empty($salesPerson[0]) ? $salesPerson[0] : '';
							$salesPersonMailId	= !empty($salesPerson[1]) ? $salesPerson[1] : '';
						}
					}
				/* Checking for Salesperson email id */
				
				$wtClass		= !empty($postData['choose-wtclass']) ? $postData['choose-wtclass'] : '';		
				$pricing_tier	= !empty($postData['pricing_tier']) ? $postData['pricing_tier'] : '0';
				$old_quoteid	= !empty($postData['old_quoteid']) ? $postData['old_quoteid'] : '';
				$quote_line		= !empty($postData['quote_line']) ? $postData['quote_line'] : 0;	
				
				$n_offsetlength		= str_replace('&#', ' ', (!empty($postData['offset_length']) ? $postData['offset_length'] : ''));
				$n_heightfloor		= str_replace('&', ' ', (!empty($postData['in_height_floor']) ? $postData['in_height_floor'] : ''));
				$opportunity		= !empty($postData['opportunity']) ? $postData['opportunity'] : '';
				$contact		= !empty($postData['contact']) ? $postData['contact'] : '0';
				$contact = str_replace("'", "''", $contact);
				/* Modify at the 29-11-2017 */
					$shipToAddress	= !empty($postData['ship_to_address']) ? $postData['ship_to_address'] : '';
					$shipToAddress = str_replace("'", "''", $shipToAddress);
					$oldPrice		= !empty($postData['old_calculator']) ? $postData['old_calculator'] : '0';
					$priceOverride	= !empty($postData['price_override']) ? $postData['price_override'] : '0';
				/* Modify at the 29-11-2017 */
				if(empty($contact)){
					$html		= '';
					$message	= "Select a Contact First!";
					$stat		= 'No';
					return array('html'=>$html,'error'=>$message);
				}
				$lead_time		= !empty($postData['lead-time']) ? $postData['lead-time'] : '0';
				
				$editQuoteDescription		= !empty($postData['edit_quote_description']) ? $postData['edit_quote_description'] : '';
				$editQuoteDescription 		= str_replace("'", "''", $editQuoteDescription);
				$editQuoteDescription		= str_replace("\n",';',$editQuoteDescription);
				$markForReview	= !empty($postData['mark_for_reviews']) ? $postData['mark_for_reviews'] : 0;
				
				if ($old_quoteid == 'No') {
					$orig_quote_id = '';
				} else {
					$orig_quote_id = $old_quoteid;
				}
				$stat='No';$message=''; $html		= '';

				if ($n_customer == '') {
					$n_cust = 'None';
					$message	= "Select a Customer First!";
					$stat	= 'No';
					return array('html'=>$html,'error'=>$message);
					
				} else {
					$n_cust=explode('[',$n_customer);
					$n_cust = trim($n_cust[0]);
				}

				$pricingtier	= substr($pricing_tier, strpos($pricing_tier, "[") + 1, (strpos($pricing_tier, "]") - strpos($pricing_tier, "[") -1));
				$pricingtier	= !empty($pricingtier) ? $pricingtier : 0;
				$n_product = 'CN';
				$sft = $n_height*$n_width;
				$n_number = $n_bays;

				if($message=='')
				{
				
						$save_flag	= $type;
						$res		= "SELECT * from qw.cargonet_quote($save_flag, '$orig_quote_id', $quote_line,'$n_cust',
						 '$n_product', $n_height, $n_width, $n_bays, $n_runs, $n_heightfloor, $n_offsetlength,
						  $n_ctoc, $n_oah, $pricingtier, $n_discount,'$instrunctions','$login_user',
						  '$salesPerson','$wtClass','$opportunity','$contact','$lead_time','$tag_number',
						  '$proposal_number',$markForReview,'$editQuoteDescription',
						  '$shipToAddress',$oldPrice,$priceOverride)";
						
						/* Log Query Test (07-08-2017)*/
							$functionFor	= !empty($save_flag) ? ' Save ' : ' Calulate ';
							queryLog('CargoNet'.$functionFor.'Quote Function',$res );
						/*Log Query Test*/ 
						
						$results	= $CI->db->query($res);
						$results	= $results->result();

						$costpernet = 0.0;
						$subtotal	= 0;
						//Final Quote
						if(!empty($results)){

				$editableQuoteDescription	= !empty($results[0]->quote_description) ? $results[0]->quote_description : '';
				$editableQuoteDescription	= str_replace(';',"\n",$editableQuoteDescription);
				$checker	= 0;
				$n_customer=explode('[',$n_customer);
				$cus=!empty($n_customer[1])?trim($n_customer[1],']'):$n_customer[0];
				$cus='<div class="net-calcultor-save"><p class="next"><strong>Customer : </strong>'.$cus.' </p>
									<p class="next1"><strong>Product : </strong> Rack Guard </p>';
									/* Quote Description for editable update (28-07-2017)*/
									$cus	.='<p><strong>Description : </strong></p>
									<p class="editable-quote-description">
									<textarea name="editable_quote_description" class="return_quote_description">'.$editableQuoteDescription.'</textarea></p>';
									/* Quote Description for editable update (28-07-2017)*/
									$cus	.='<p><strong> Quantity : </strong>'.$n_number.'</p></div>';
					$table='<table class="excel_download"><tr><td>Product:</td><td>'.$n_product.'</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
					<tr><td> Quantity :</td><td>'.$n_number.'</td><td> </td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
					$table .='<tr><td></td><td></td><td>Item#</td><td>QuantityPerNet</td><td>TotalQantity</td><td>UOM</td><td>Activity Code</td><td>Step</td></tr>';
				$counting	= 0;
				foreach($results as $row){
					
					if(!empty($save_flag)){
						$quote_id=$row->quoteid;
						$proposal_number=$row->proposalnum;
						/* Send mail to Sales Person */
						$quant	= !empty($n_number) ? $n_number : 0;
						$salespersonMailData	= array('quoteId'=>$quote_id,'proposalId'=>$proposal_number,
						'lineNo'=>$quote_line,'type'=>'RackGuard','quantity'=>$quant,'salespersonEmail'=>$salesPersonMailId);
						$finalUrl	= 1;//sendMailToSalesMenForBOM($salespersonMailData);
						return array('html'=>$quote_id,'error'=>$message,'proposalNumber'=>$proposal_number,'finalUrl'=>$finalUrl);
						/* Send mail to Sales Person */
						break;
					}
					$itemcode			= !empty($row->itemcode) ? $row->itemcode : '';
					$uom				= !empty($row->uom) ? $row->uom : '';
					$laboractivityrate	= !empty($row->laboractivityrate) ? $row->laboractivityrate : '';
					$activitycode		= !empty($row->activitycode) ? $row->activitycode : '';
					$attributeArray		= array('itemCode'=>$itemcode,'uom'=>$uom,'laboractivityrate'=>$laboractivityrate,'activitycode'=>$activitycode);
						
						$costpernet = $costpernet + $row->totalcost;
						$subtotal	= $subtotal + $row->totalcost;
						$html	.='<div class="order-list">
									<div class="item-quantity">
									'.$cus;
									if($counting==0){
										$html	.='<p><strong>Item # </strong> <strong class="margin-right">Qty (UOM) </strong>';
									}
									/* Here We are getting the available quantity based on Item Code */
									$availableQuantity			= getAvailableQuantityOfItemCode($row->itemcode);
										/*$displayAvailDes			= !empty($availableQuantity['description']) ? 'Item Desc : '.$availableQuantity['description'].'<br />' :'';
										$displayAvailQnt			= !empty($availableQuantity['quantity']) ? 'Avail Qty : '.$availableQuantity['quantity'] :'';
										$displayAvailableQntHtml1	= (empty($displayAvailDes) && empty($displayAvailQnt)) ? 'Quantity Not Available' : $displayAvailDes.$displayAvailQnt;*/
										$displayAvailableQntHtml	= '<span class="tooltiptext">'.$availableQuantity['current'].'<br>'.$availableQuantity['alternate'].'</span>';
									/* End Here */
									$html	.='<p><a class="tooltip">'.$row->itemcode.displayRedStopIcon($attributeArray).$displayAvailableQntHtml.'</a> <span>'.round($row->quantity, 2).' ('.$row->uom.') </span>';
									$html	.='</div></div>';
							$cus='';
					$table .='<tr><td></td><td></td><td>'.$row->itemcode.'</td><td>'.round($row->quantity, 2).'</td><td> '.round(($row->quantity*$n_number), 2).'</td><td>'.$row->uom.'</td><td>'.$row->activitycode.'</td><td>'.$row->wt_step.'</td></tr>';
					$counting++;
				}
				$pricePerSft	= $priceOverride === '0' ? ($subtotal / $sft): ($priceOverride / $sft);
				$table .='</table>';
				$html	.='*<div class="sub-total">';
							if($priceOverride === '0'){
								$html	.='<p> Price per net <span ><strong>'.number_format($subtotal,2).'</strong></span></p>
										   <p> Price per SFT <span ><strong>'.number_format($pricePerSft,2).'</strong></span></p>
										   </div><p>Sub Total Price</p>
										   <h3 id="total_of_subtotal">'.number_format(($subtotal*$n_number),0).'</h3>';
							}
							else {
								$html	.='<p> Original Price per net <span ><strong>'.number_format($subtotal,2).'</strong></span></p>
										   <p></p>
										   <p> Override Price per net <span ><strong>'.number_format($priceOverride,2).'</strong></span></p>
										   <p> Price per SFT <span ><strong>'.number_format($pricePerSft,2).'</strong></span></p>
										   </div><p>Sub Total Price</p>
										   <h3 id="total_of_subtotal">'.number_format(($priceOverride*$n_number),0).'</h3>';
							}
								
							if(empty($type)){
								$html .='<a href="javascript:void(0)" id="savecargonetQuote">Save Quote</a><a href="#" class="download">
										<i class="fa fa-file-excel-o" aria-hidden="true"></i> BOM</a>';
							}
				$html .='*'.$table;
				$stat	= 'Yes';
				
			}else{
				$html	= '';
				$stat	= 'No';
			}
			}
			return array('html'=>$html,'error'=>$message);
		}
		else {
			  return array('html'=>'','error'=>'Please login your session expired');
		}
	}
				
	function saveSkynetQuote($postData=array(),$type=0){
		$CI	= & get_instance();
		$login_user=$CI->session->userdata('frontendUserName');
		if(!empty($login_user)){

				$n_customer		= str_replace('&', 'and', (!empty($postData['customer']) ? $postData['customer'] : '')); 
				$n_number		= !empty($postData['num_nets']) ? $postData['num_nets'] : '';		
				$n_length		= !empty($postData['net_length']) ? $postData['net_length'] : '0';
				$n_width		= !empty($postData['net_width']) ? $postData['net_width'] : '0';
				$n_angle 		= !empty($postData['angle']) ? 1 : '0';
				$tag_number		= !empty($postData['tag_number']) ? $postData['tag_number'] : '';	
				$proposal_number		= !empty($postData['proposal_number']) ? $postData['proposal_number'] : '';
				$n_product		= str_replace('&', ' ', (!empty($postData['net_product']) ? $postData['net_product'] : ''));
				
				$shipToAddress	= !empty($postData['ship_to_address']) ? $postData['ship_to_address'] : '';
				$shipToAddress = str_replace("'", "''", $shipToAddress);
				$oldPrice		= !empty($postData['old_calculator']) ? $postData['old_calculator'] : '0';
				$priceOverride	= !empty($postData['price_override']) ? $postData['price_override'] : '0';

				$n_discount		= !empty($postData['discount']) ? $postData['discount'] : '0';		
				$instrunctions		= !empty($postData['instrunctions']) ? $postData['instrunctions'] : '';
				$instrunctions = str_replace("'", "''", $instrunctions);
				$salesPerson		= !empty($postData['choose-sales']) ? trim($postData['choose-sales']) : '';
				
				/* Checking for Salesperson email id */
					$salesPersonMailId	= '';
					if(!empty($salesPerson)){
						$salesPerson	= explode('##',$salesPerson);
						if(!empty($salesPerson)){
							$salesPerson	= !empty($salesPerson[0]) ? $salesPerson[0] : '';
							$salesPersonMailId	= !empty($salesPerson[1]) ? $salesPerson[1] : '';
						}
					}
				/* Checking for Salesperson email id */
				
				$wtClass		= !empty($postData['choose-wtclass']) ? $postData['choose-wtclass'] : '';		
				$pricing_tier	= !empty($postData['pricing_tier']) ? $postData['pricing_tier'] : '0';
				$old_quoteid	= !empty($postData['old_quoteid']) ? $postData['old_quoteid'] : '';
				$quote_line		= !empty($postData['quote_line']) ? $postData['quote_line'] : 0;	
				$net_material		= str_replace('&"', ' ', (!empty($postData['net_material']) ? $postData['net_material'] : ''));

				$net_thread 	= str_replace('&"', ' ', (!empty($postData['thread1']) ? $postData['thread1'] : ''));
				$loopsoptions	= str_replace('&', ' ', (!empty($postData['loopsoptions']) ? $postData['loopsoptions'] : ''));
				$net_grommet		= str_replace('&#', ' ', (!empty($postData['net_grommet']) ? $postData['net_grommet'] : ''));
				$net_corner		= str_replace('&', ' ', (!empty($postData['net_corner']) ? $postData['net_corner'] : ''));
				$mesh_id1		= str_replace('&#', ' ', (!empty($postData['mesh_id1']) ? $postData['mesh_id1'] : ''));
				$mesh_size		= str_replace('&', ' ', (!empty($postData['mesh_size']) ? $postData['mesh_size'] : ''));
				$opportunity		= !empty($postData['opportunity']) ? $postData['opportunity'] : '';
				$contact		= !empty($postData['contact']) ? $postData['contact'] : '0';
				$contact = str_replace("'", "''", $contact);
				if(empty($contact)){
					$html		= '';
					$message	= "Select a Contact First!";
					$stat		= 'No';
					return array('html'=>$html,'error'=>$message);
				}
				$lead_time		= !empty($postData['lead-time']) ? $postData['lead-time'] : '0';
				
				$editQuoteDescription		= !empty($postData['edit_quote_description']) ? $postData['edit_quote_description'] : '';
				$editQuoteDescription 		= str_replace("'", "''", $editQuoteDescription);
				$editQuoteDescription		= str_replace("\n",';',$editQuoteDescription);
				$markForReview	= !empty($postData['mark_for_reviews']) ? $postData['mark_for_reviews'] : 0;
				
				if ($old_quoteid == 'No') {
					$orig_quote_id = '';
				} else {
					$orig_quote_id = $old_quoteid;
				}
				$stat='No';$message=''; $html		= '';

				if ($n_customer == '') {
					$n_cust = 'None';
					$message	= "Select a Customer First!";
					$stat	= 'No';
					return array('html'=>$html,'error'=>$message);
					
				} else {
					$n_cust=explode('[',$n_customer);
					$n_cust = trim($n_cust[0]);
				}

				if ($postData['net_product'] == "None") {
					$product	= "NONE";
					$message	= "Please Select a Product First!";
					$stat	= 'No';
					return array('html'=>$html,'error'=>$message);
				} else {
					$product = substr($n_product, strpos($n_product, "[") + 1, (strpos($n_product, "]") - strpos($n_product, "[") -1));
				}


				$pricingtier	= substr($pricing_tier, strpos($pricing_tier, "[") + 1, (strpos($pricing_tier, "]") - strpos($pricing_tier, "[") -1));
				$pricingtier	= !empty($pricingtier) ? $pricingtier : 0;
				
				if($n_width == 0){ $sft = $n_length;}
				else { $sft = $n_length*$n_width; }

				if($message=='')
				{
				
						$save_flag	= $type;
						$res		= "SELECT * from qw.skynet_quote($save_flag, '$orig_quote_id', $quote_line,'$n_cust', '$product', $n_length, $n_width, $n_number, $n_angle, $pricingtier, $n_discount,'$instrunctions','$login_user','$salesPerson','$wtClass','$opportunity','$contact','$lead_time','$tag_number','$proposal_number',$markForReview,'$editQuoteDescription','$shipToAddress',$oldPrice,$priceOverride)";
				
							/* Log Query Test (07-08-2017)*/
							$functionFor	= !empty($save_flag) ? ' Save ' : ' Calulate ';
							queryLog('Skynet'.$functionFor.'Quote Function',$res );
							 /*Log Query Test*/ 
						
						$results	= $CI->db->query($res);
						$results	= $results->result();

						$costpernet = 0.0;
						$subtotal	= 0;
						//Final Quote
						if(!empty($results)){
				$editableQuoteDescription	= !empty($results[0]->quote_description) ? $results[0]->quote_description : '';
				$editableQuoteDescription	= str_replace(';',"\n",$editableQuoteDescription);
				$checker	= 0;
				$n_customer=explode('[',$n_customer);
				$cus=!empty($n_customer[1])?trim($n_customer[1],']'):$n_customer[0];
				$cus='<div class="net-calcultor-save"><p class="next"><strong>Customer : </strong>'.$cus.' </p>
									<p class="next1"><strong>Product : </strong> Work Platform Net Quote </p>';
									/* Quote Description for editable update (28-07-2017)*/
									$cus	.='<p><strong>Description : </strong></p>
									<p class="editable-quote-description">
									<textarea name="editable_quote_description" class="return_quote_description">'.$editableQuoteDescription.'</textarea></p>';
									/* Quote Description for editable update (28-07-2017)*/
									$cus	.='<p><strong> Quantity : </strong>'.$n_number.'</p></div>';
					$table='<table class="excel_download"><tr><td>Product:</td><td>'.$n_product.'</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
					<tr><td> Quantity :</td><td>'.$n_number.'</td><td> </td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
					$table .='<tr><td></td><td></td><td>Item#</td><td>QuantityPerNet</td><td>TotalQantity</td><td>UOM</td><td>Activity Code</td><td>Step</td></tr>';
				$counting	= 0;
				foreach($results as $row){
					
					if(!empty($save_flag)){
						$quote_id=$row->quoteid;
						$proposal_number=$row->proposalnum;
						/* Send mail to Sales Person */
						$quant	= !empty($n_number) ? $n_number : 0;
						$salespersonMailData	= array('quoteId'=>$quote_id,'proposalId'=>$proposal_number,
						'lineNo'=>$quote_line,'type'=>'Skynet','quantity'=>$quant,'salespersonEmail'=>$salesPersonMailId);
						$finalUrl	= 1;//sendMailToSalesMenForBOM($salespersonMailData);
						return array('html'=>$quote_id,'error'=>$message,'proposalNumber'=>$proposal_number,'finalUrl'=>$finalUrl);
						/* Send mail to Sales Person */
						break;
					}
					$itemcode			= !empty($row->itemcode) ? $row->itemcode : '';
					$uom				= !empty($row->uom) ? $row->uom : '';
					$laboractivityrate	= !empty($row->laboractivityrate) ? $row->laboractivityrate : '';
					$activitycode		= !empty($row->activitycode) ? $row->activitycode : '';
					$attributeArray		= array('itemCode'=>$itemcode,'uom'=>$uom,'laboractivityrate'=>$laboractivityrate,'activitycode'=>$activitycode);
						
						$costpernet = $costpernet + $row->totalcost;
						$subtotal	= $subtotal + $row->totalcost;
						$html	.='<div class="order-list">
									<div class="item-quantity">
									'.$cus;
									if($counting==0){
										$html	.='<p><strong>Item # </strong> <strong class="margin-right">Qty (UOM) </strong>';
									}
									/* Here We are getting the available quantity based on Item Code */
									$availableQuantity			= getAvailableQuantityOfItemCode($row->itemcode);
										/*$displayAvailDes			= !empty($availableQuantity['description']) ? 'Item Desc : '.$availableQuantity['description'].'<br />' :'';
										$displayAvailQnt			= !empty($availableQuantity['quantity']) ? 'Avail Qty : '.$availableQuantity['quantity'] :'';
										$displayAvailableQntHtml1	= (empty($displayAvailDes) && empty($displayAvailQnt)) ? 'Quantity Not Available' : $displayAvailDes.$displayAvailQnt;*/
										$displayAvailableQntHtml	= '<span class="tooltiptext">'.$availableQuantity['current'].'<br>'.$availableQuantity['alternate'].'</span>';
									/* End Here */
									$html	.='<p><a class="tooltip">'.$row->itemcode.displayRedStopIcon($attributeArray).$displayAvailableQntHtml.'</a> <span>'.round($row->quantity, 2).' ('.$row->uom.') </span>';
									$html	.='</div></div>';
							$cus='';
					$table .='<tr><td></td><td></td><td>'.$row->itemcode.'</td><td>'.round($row->quantity, 2).'</td><td> '.round(($row->quantity*$n_number), 2).'</td><td>'.$row->uom.'</td><td>'.$row->activitycode.'</td><td>'.$row->wt_step.'</td></tr>';
					$counting++;
				}
				$pricePerSft	= $priceOverride === '0' ? ($subtotal / $sft): ($priceOverride / $sft);
				$table .='</table>';
				$html	.='*<div class="sub-total">';
							if($priceOverride === '0'){
								$html	.='<p> Price per net <span ><strong>'.number_format($subtotal,2).'</strong></span></p>
										   <p> Price per SFT <span ><strong>'.number_format($pricePerSft,2).'</strong></span></p>
										   </div><p>Sub Total Price</p>
										   <h3 id="total_of_subtotal">'.number_format(($subtotal*$n_number),0).'</h3>';
							}
							else {
								$html	.='<p> Original Price per net <span ><strong>'.number_format($subtotal,2).'</strong></span></p>
										   <p></p>
										   <p> Override Price per net <span ><strong>'.number_format($priceOverride,2).'</strong></span></p>
										   <p> Price per SFT <span ><strong>'.number_format($pricePerSft,2).'</strong></span></p>
										   </div><p>Sub Total Price</p>
										   <h3 id="total_of_subtotal">'.number_format(($priceOverride*$n_number),0).'</h3>';
							}
								
							if(empty($type)){
								$html .='<a href="javascript:void(0)" id="saveskynetQuote">Save Quote</a><a href="#" class="download">
										<i class="fa fa-file-excel-o" aria-hidden="true"></i> BOM</a>';
							}
				$html .='*'.$table;
				$stat	= 'Yes';
				
			}else{
				$html	= '';
				$stat	= 'No';
			}
			}
			return array('html'=>$html,'error'=>$message);
		}
		else {
			  return array('html'=>'','error'=>'Please login your session expired');
		}
	}
	
	function get_string_between($string, $start, $end)
	{
        	$string = " ".$string; 
       		$ini = strpos($string,$start);
	        if ($ini == 0) return "";
        	$ini += strlen($start);
         	$len = strpos($string,$end,$ini) - $ini;
        	return substr($string,$ini,$len);
	}

	

	function saveWebnetQuote($postData=array(),$type=0){
		$CI	= & get_instance();
		$login_user=$CI->session->userdata('frontendUserName');

		if(!empty($login_user)){
			
			$n_customer		= str_replace('&', 'and', (!empty($postData['customer']) ? $postData['customer'] : '')); 
			$n_number		= !empty($postData['net_number']) ? $postData['net_number'] : '';		
			$n_length		= !empty($postData['net_length']) ? $postData['net_length'] : '0';
			$n_width		= !empty($postData['net_width']) ? $postData['net_width'] : '0';
			$tag_number		= !empty($postData['tag_number']) ? $postData['tag_number'] : '';	
			$proposal_number		= !empty($postData['proposal_number']) ? $postData['proposal_number'] : '';	
			
			$n_discount		= !empty($postData['discount']) ? $postData['discount'] : '0';		
			$instrunctions		= !empty($postData['instrunctions']) ? $postData['instrunctions'] : '';
			$instrunctions = str_replace("'", "''", $instrunctions);
			$salesPerson		= !empty($postData['choose-sales']) ? trim($postData['choose-sales']) : '';
			
			/* Checking for Salesperson email id */
				$salesPersonMailId	= '';
				if(!empty($salesPerson)){
					$salesPerson	= explode('##',$salesPerson);
					if(!empty($salesPerson)){
						$salesPerson	= !empty($salesPerson[0]) ? $salesPerson[0] : '';
						$salesPersonMailId	= !empty($salesPerson[1]) ? $salesPerson[1] : '';
					}
				}
			/* Checking for Salesperson email id */
			
			$wtClass		= !empty($postData['choose-wtclass']) ? $postData['choose-wtclass'] : '';		
			$pricing_tier	= !empty($postData['pricing_tier']) ? $postData['pricing_tier'] : '0';
			$old_quoteid	= !empty($postData['old_quoteid']) ? $postData['old_quoteid'] : '';
			$quote_line		= !empty($postData['quote_line']) ? $postData['quote_line'] : 0;	
			$net_material		= str_replace('&"', ' ', (!empty($postData['net_material']) ? $postData['net_material'] : ''));

			$net_thread 	= str_replace('&"', ' ', (!empty($postData['thread1']) ? $postData['thread1'] : ''));
			$loopsoptions	= str_replace('&', ' ', (!empty($postData['loopsoptions']) ? $postData['loopsoptions'] : ''));
			$net_grommet		= str_replace('&#', ' ', (!empty($postData['net_grommet']) ? $postData['net_grommet'] : ''));
			$net_corner		= str_replace('&', ' ', (!empty($postData['net_corner']) ? $postData['net_corner'] : ''));
			$mesh_id1		= str_replace('&#', ' ', (!empty($postData['mesh_id1']) ? $postData['mesh_id1'] : ''));
			$mesh_size		= str_replace('&', ' ', (!empty($postData['mesh_size']) ? $postData['mesh_size'] : ''));
			
			/* Modify at the 29-11-2017 */
				$shipToAddress	= !empty($postData['ship_to_address']) ? $postData['ship_to_address'] : '';
				$shipToAddress = str_replace("'", "''", $shipToAddress);
				$oldPrice		= !empty($postData['old_calculator']) ? $postData['old_calculator'] : '0';
				$priceOverride	= !empty($postData['price_override']) ? $postData['price_override'] : '0';
			/* Modify at the 29-11-2017 */
			
			$opportunity		= !empty($postData['opportunity']) ? $postData['opportunity'] : '';
			$contact		= !empty($postData['contact']) ? $postData['contact'] : '0';
			$contact = str_replace("'", "''", $contact);
			if(empty($contact)){
				$html		= '';
				$message	= "Select a Contact First!";
				$stat		= 'No';
				return array('html'=>$html,'error'=>$message);
			}
			$lead_time		= !empty($postData['lead-time']) ? $postData['lead-time'] : '0';
			
			$editQuoteDescription		= !empty($postData['edit_quote_description']) ? $postData['edit_quote_description'] : '';
			$editQuoteDescription 		= str_replace("'", "''", $editQuoteDescription);
			$editQuoteDescription		= str_replace("\n",';',$editQuoteDescription);
			$markForReview	= !empty($postData['mark_for_reviews']) ? $postData['mark_for_reviews'] : 0;
			
			if ($old_quoteid == 'No') {
				$orig_quote_id = '';
			} else {
				$orig_quote_id = $old_quoteid;
			}
			$stat='No';$message=''; $html		= '';

			if ($n_customer == '') {
				$n_cust = 'None';
				$message	= "Select a Customer First!";
				$stat	= 'No';
				return array('html'=>$html,'error'=>$message);
				
			} else {
				$n_cust=explode('[',$n_customer);
				$n_cust = trim($n_cust[0]);
			}
			
			if ($postData['net_material'] == "None") {
				$n_material = "NONE";
			} else {
				$n_material = get_string_between($net_material, "[", "]");
				$web_width = preg_replace('/[^0-9]/', '', $n_material)/100;
			}

			if ($postData['thread1'] == "None") {
				$n_thread = "NONE";
			} else {
				$n_thread = substr($net_thread, strpos($net_thread, "[") + 1, (strpos($net_thread, "]") - strpos($net_thread, "[") -1));
			}
			
			$n_loopsoptions	= !empty($loopsoptions) ? $loopsoptions : 0;
			

			if ($postData['net_grommet'] == "None") {
				$n_grommet = "NONE";
			} else {
				$n_grommet = substr($net_grommet, strpos($net_grommet, "[") + 1, (strpos($net_grommet, "]") - strpos($net_grommet, "[") -1));
			}
			

			if ($postData['net_corner'] == "None") {
				$n_corner = "NONE";
			} else {
				$n_corner = substr($net_corner, strpos($net_corner, "[") + 1, (strpos($net_corner, "]") - strpos($net_corner, "[") -1));
			}
			
			$pricingtier	= substr($pricing_tier, strpos($pricing_tier, "[") + 1, (strpos($pricing_tier, "]") - strpos($pricing_tier, "[") -1));
			$pricingtier	= !empty($pricingtier) ? $pricingtier : 0;
			$n_product = 'WNC';
			$n_glue = 'HOTGLUE';
			$sft = $n_length*$n_width;

			if($message=='')
			{
			$save_flag	= $type;
			
			$res		= "SELECT * from qw.webnet_quote($save_flag, '$orig_quote_id', $quote_line,'$n_cust', '$n_product',
			 $web_width, $n_length, $n_width, $mesh_size, '$n_glue', '$n_thread', '$n_material','$n_grommet',
			 '$n_corner' ,'$n_loopsoptions',$n_number, $pricingtier, $n_discount,'$instrunctions','$login_user',
			 '$salesPerson','$wtClass','$opportunity','$contact','$lead_time','$tag_number','$proposal_number',
			 $markForReview,'$editQuoteDescription','$shipToAddress',$oldPrice,$priceOverride)";
			
				/* Log Query Test (07-08-2017)*/
				$functionFor	= !empty($save_flag) ? ' Save ' : ' Calulate ';
				queryLog('Webnet'.$functionFor.'Quote Function',$res );
				 /*Log Query Test*/ 
			
			$results	= $CI->db->query($res);
			$results	= $results->result();
			
			$costpernet = 0.0;
			$subtotal	= 0;
			
			if(!empty($results)){
				$editableQuoteDescription	= !empty($results[0]->quote_description) ? $results[0]->quote_description : '';
				$editableQuoteDescription	= str_replace(';',"\n",$editableQuoteDescription);
				$checker	= 0;
				$n_customer=explode('[',$n_customer);
				$cus=!empty($n_customer[1])?trim($n_customer[1],']'):$n_customer[0];
				$cus='<div class="net-calcultor-save"><p class="next"><strong>Customer : </strong>'.$cus.' </p>
									<p class="next1"><strong>Product : </strong> Webnet Quote </p>';
									/* Quote Description for editable update (28-07-2017)*/
									$cus	.='<p><strong>Description : </strong></p>
									<p class="editable-quote-description">
									<textarea name="editable_quote_description" class="return_quote_description">'.$editableQuoteDescription.'</textarea></p>';
									/* Quote Description for editable update (28-07-2017)*/
									$cus	.='<p><strong> Quantity : </strong>'.$n_number.'</p></div>';
					$table='<table class="excel_download"><tr><td>Product:</td><td>'.$n_product.'</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
					<tr><td> Quantity :</td><td>'.$n_number.'</td><td> </td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
					$table .='<tr><td></td><td></td><td>Item#</td><td>QuantityPerNet</td><td>TotalQantity</td><td>UOM</td><td>Activity Code</td><td>Step</td></tr>';
				$counting	= 0;
				foreach($results as $row){
					
					if(!empty($save_flag)){
						$quote_id=$row->quoteid;
						$proposal_number=$row->proposalnum;
						/* Send mail to Sales Person */
						$quant	= !empty($n_number) ? $n_number : 0;
						$salespersonMailData	= array('quoteId'=>$quote_id,'proposalId'=>$proposal_number,
						'lineNo'=>$quote_line,'type'=>'Webnet','quantity'=>$quant,'salespersonEmail'=>$salesPersonMailId);
						$finalUrl	= 1;//sendMailToSalesMenForBOM($salespersonMailData);
						return array('html'=>$quote_id,'error'=>$message,'proposalNumber'=>$proposal_number,'finalUrl'=>$finalUrl);
						/* Send mail to Sales Person */
						break;
					}
					$itemcode			= !empty($row->itemcode) ? $row->itemcode : '';
					$uom				= !empty($row->uom) ? $row->uom : '';
					$laboractivityrate	= !empty($row->laboractivityrate) ? $row->laboractivityrate : '';
					$activitycode		= !empty($row->activitycode) ? $row->activitycode : '';
					$attributeArray		= array('itemCode'=>$itemcode,'uom'=>$uom,'laboractivityrate'=>$laboractivityrate,'activitycode'=>$activitycode);
						
						$costpernet = $costpernet + $row->totalcost;
						$subtotal	= $subtotal + $row->totalcost;
						$html	.='<div class="order-list">
									<div class="item-quantity">
									'.$cus;
									if($counting==0){
										$html	.='<p><strong>Item # </strong> <strong class="margin-right">Qty (UOM) </strong>';
									}
									/* Here We are getting the available quantity based on Item Code */
									$availableQuantity			= getAvailableQuantityOfItemCode($row->itemcode);
										/*$displayAvailDes			= !empty($availableQuantity['description']) ? 'Item Desc : '.$availableQuantity['description'].'<br />' :'';
										$displayAvailQnt			= !empty($availableQuantity['quantity']) ? 'Avail Qty : '.$availableQuantity['quantity'] :'';
										$displayAvailableQntHtml1	= (empty($displayAvailDes) && empty($displayAvailQnt)) ? 'Quantity Not Available' : $displayAvailDes.$displayAvailQnt;*/
										$displayAvailableQntHtml	= '<span class="tooltiptext">'.$availableQuantity['current'].'<br>'.$availableQuantity['alternate'].'</span>';
									/* End Here */
									$html	.='<p><a class="tooltip">'.$row->itemcode.displayRedStopIcon($attributeArray).$displayAvailableQntHtml.'</a> <span>'.round($row->quantity, 2).' ('.$row->uom.') </span>';
									$html	.='</div></div>';
							$cus='';
					$table .='<tr><td></td><td></td><td>'.$row->itemcode.'</td><td>'.round($row->quantity, 2).'</td><td> '.round(($row->quantity*$n_number), 2).'</td><td>'.$row->uom.'</td><td>'.$row->activitycode.'</td><td>'.$row->wt_step.'</td></tr>';
					$counting++;
				}
				$pricePerSft	= $priceOverride === '0' ? ($subtotal / $sft): ($priceOverride / $sft);
				$table .='</table>';
				$html	.='*<div class="sub-total">';
							if($priceOverride === '0'){
								$html	.='<p> Price per net <span ><strong>'.number_format($subtotal,2).'</strong></span></p>
										   <p> Price per SFT <span ><strong>'.number_format($pricePerSft,2).'</strong></span></p>
										   </div><p>Sub Total Price</p>
										   <h3 id="total_of_subtotal">'.number_format(($subtotal*$n_number),0).'</h3>';
							}
							else {
								$html	.='<p> Original Price per net <span ><strong>'.number_format($subtotal,2).'</strong></span></p>
										   <p></p>
										   <p> Override Price per net <span ><strong>'.number_format($priceOverride,2).'</strong></span></p>
										   <p> Price per SFT <span ><strong>'.number_format($pricePerSft,2).'</strong></span></p>
										   </div><p>Sub Total Price</p>
										   <h3 id="total_of_subtotal">'.number_format(($priceOverride*$n_number),0).'</h3>';
							}
								
							if(empty($type)){
								$html .='<a href="javascript:void(0)" id="savewebnetQuote">Save Quote</a><a href="#" class="download">
										<i class="fa fa-file-excel-o" aria-hidden="true"></i> BOM</a>';
							}
				$html .='*'.$table;
				$stat	= 'Yes';
							
			}else{
				$html	= '';
				$stat	= 'No';
			}
			}
			return array('html'=>$html,'error'=>$message);
		}
		else {
			  return array('html'=>'','error'=>'Please login your session expired');
		}
	}

	/**
	 * @Function	-: saveRocblocQuote()
	 * @Description	-: This function used for this function use for save and calculate the baynet quote cost and details
	 * @Param		-: array()
	 * @created		-: 03-05-2017
	 * @return		-:json
	 * */
	function saveRocblocQuote($postData=array(),$type=0){
		$CI	= & get_instance();
		$login_user=$CI->session->userdata('frontendUserName');
		if(!empty($login_user)){
		$n_customer		= str_replace('&', 'and', (!empty($postData['customer']) ? $postData['customer'] : '')); 
		$n_product		= str_replace('&', ' ', (!empty($postData['net_product']) ? $postData['net_product'] : ''));
		$n_style		= str_replace('&', ' ', (!empty($postData['net_style']) ? $postData['net_style'] : '')); 		
		$n_number		= !empty($postData['net_number']) ? $postData['net_number'] : '';		
		$n_length		= !empty($postData['net_length']) ? $postData['net_length'] : '0';
		$n_width		= !empty($postData['net_width']) ? $postData['net_width'] : '0';
		$tag_number		= !empty($postData['tag_number']) ? $postData['tag_number'] : '';	
		$proposal_number		= !empty($postData['proposal_number']) ? $postData['proposal_number'] : '';	
		/* */
		$lft		= (2 * $n_length) + (2 * $n_width);
		$sft		= ($n_length * $n_width);
		/* */
		$n_discount		= !empty($postData['discount']) ? $postData['discount'] : '0';		
		$instrunctions		= !empty($postData['instrunctions']) ? $postData['instrunctions'] : '';
		$instrunctions = str_replace("'", "''", $instrunctions);
		$salesPerson		= !empty($postData['choose-sales']) ? trim($postData['choose-sales']) : '';
		/* Modify at the 29-11-2017 */
			$shipToAddress	= !empty($postData['ship_to_address']) ? $postData['ship_to_address'] : '';
			$shipToAddress = str_replace("'", "''", $shipToAddress);
			$oldPrice		= !empty($postData['old_calculator']) ? $postData['old_calculator'] : '0';
			$priceOverride	= !empty($postData['price_override']) ? $postData['price_override'] : '0';
		/* Modify at the 29-11-2017 */
		/* Checking for Salesperson email id */
			$salesPersonMailId	= '';
			if(!empty($salesPerson)){
				$salesPerson	= explode('##',$salesPerson);
				if(!empty($salesPerson)){
					$salesPerson	= !empty($salesPerson[0]) ? $salesPerson[0] : '';
					$salesPersonMailId	= !empty($salesPerson[1]) ? $salesPerson[1] : '';
				}
			}
		/* Checking for Salesperson email id */
		
		$wtClass		= !empty($postData['choose-wtclass']) ? $postData['choose-wtclass'] : '';		
		$pricing_tier	= !empty($postData['pricing_tier']) ? $postData['pricing_tier'] : '0';
		$old_quoteid	= !empty($postData['old_quoteid']) ? $postData['old_quoteid'] : '';
		$quote_line		= !empty($postData['quote_line']) ? $postData['quote_line'] : 0;	
		$n_border		= str_replace('&', ' ', (!empty($postData['net_border']) ? $postData['net_border'] : ''));
		$n_border1		= str_replace('&', ' ', (!empty($postData['net_border1']) ? $postData['net_border1'] : ''));
		$n_border2		= str_replace('&"', ' ', (!empty($postData['net_border2']) ? $postData['net_border2'] : ''));
		$n_border3		= str_replace('&', ' ', (!empty($postData['net_border3']) ? $postData['net_border3'] : ''));
		$n_thread		= str_replace('&#', ' ', (!empty($postData['net_thread']) ? $postData['net_thread'] : ''));
		$opportunity		= !empty($postData['opportunity']) ? $postData['opportunity'] : '';
		$customOpportunity	= !empty($postData['custom-opportunity']) ? trim($postData['custom-opportunity']) : '';
		if(!empty($customOpportunity)){
			$opportunity	= $customOpportunity;
		}
		$contact		= !empty($postData['contact']) ? $postData['contact'] : '0';
		$contact = str_replace("'", "''", $contact);
		if(empty($contact)){
			$html		= '';
			$message	= "Select a Contact First!";
			$stat		= 'No';
			return array('html'=>$html,'error'=>$message);
		}
		$lead_time		= !empty($postData['lead-time']) ? $postData['lead-time'] : '0';
		
		$editQuoteDescription		= !empty($postData['edit_quote_description']) ? $postData['edit_quote_description'] : '';
		$editQuoteDescription 		= str_replace("'", "''", $editQuoteDescription);
		$editQuoteDescription		= str_replace("\n",';',$editQuoteDescription);
		$markForReview	= !empty($postData['mark_for_reviews']) ? $postData['mark_for_reviews'] : 0;
		
		if ($old_quoteid == 'No') {
			$orig_quote_id = '';
		} else {
			$orig_quote_id = $old_quoteid;
		}
		$stat='No';$message=''; $html		= '';
		//echo $orig_quote_id;
		if ($n_customer == '') {
			$n_cust = 'None';
			$message	= "Select a Customer First!";
			$stat	= 'No';
			return array('html'=>$html,'error'=>$message);
			
		} else {
			$n_cust=explode('[',$n_customer);
			$n_cust = trim($n_cust[0]);
		}
		if ($postData['net_product'] == "None") {
			$product	= "NONE";
			$message	= "Please Select a Product First!";
			$stat	= 'No';
			return array('html'=>$html,'error'=>$message);
		} else {
			$product = substr($n_product, strpos($n_product, "[") + 1, (strpos($n_product, "]") - strpos($n_product, "[") -1));
		}
		if ($postData['net_style'] == "None"||empty($postData['net_style'])) {
			$netcolor	= "NONE";
			$message	= "Please Select a Net First!";
			$stat	= 'No';
			return array('html'=>$html,'error'=>$message);
			
		} else {
			$netcolor = substr($n_style, strpos($n_style, "[") + 1, (strpos($n_style, "]") - strpos($n_style, "[") -1));
		}

		if ($postData['net_border'] == "None") {
			$borderoption = "NONE";
		} else {
			$borderoption = substr($n_border, strpos($n_border, "[") + 1, (strpos($n_border, "]") - strpos($n_border, "[") -1));
		}
		if ($postData['net_border1'] == "None") {
			$borderoption1 = "NONE";
		} else {
			$borderoption1 = substr($n_border1, strpos($n_border1, "[") + 1, (strpos($n_border1, "]") - strpos($n_border1, "[") -1));
		}
		if ($postData['net_border2'] == "None") {
			$borderoption2 = "NONE";
		} else {
			$borderoption2 = substr($n_border2, strpos($n_border2, "[") + 1, (strpos($n_border2, "]") - strpos($n_border2, "[") -1));
		}
		if (empty($n_border3) ) {
			$borderoption3 = "";
		} else {
			$borderoption3 = $n_border3;
		}
		$pricingtier	= substr($pricing_tier, strpos($pricing_tier, "[") + 1, (strpos($pricing_tier, "]") - strpos($pricing_tier, "[") -1));
		$pricingtier	= !empty($pricingtier) ? $pricingtier : 0;
		if (!empty($postData['net_thread']) && $postData['net_thread']  == "None") {
			 $threadoption = "NONE";
		} else {
			 $n_thread;
			 $threadoption = substr($n_thread, strpos($n_thread, "[") + 1, (strpos($n_thread, "]") - strpos($n_thread, "[") -1));
		}
		if($message==''){
			$save_flag	= $type;
				
			$res		= "SELECT * from qw.rocbloc_quote($save_flag, '$orig_quote_id', $quote_line,'$n_cust', '$product','$netcolor',
			$n_length, $n_width, '$borderoption','$borderoption1','$threadoption','$borderoption2' ,'$borderoption3',$n_number,
			 $pricingtier, $n_discount,'$instrunctions','$login_user','$salesPerson','$wtClass','$opportunity','$contact',
			 '$lead_time','$tag_number','$proposal_number',$markForReview,'$editQuoteDescription','$shipToAddress',$oldPrice,$priceOverride)";
			//echo $res;
				/* Log Query Test (07-08-2017)*/
					$functionFor	= !empty($save_flag) ? ' Save ' : ' Calulate ';
					queryLog('Rocbloc'.$functionFor.'Quote Function',$res );
				/* Log Query Test */
			$results	= $CI->db->query($res);
			$results	= $results->result();
			
			$costpernet = 0.0;
			$subtotal	= 0;
			//dump($results);
			if(!empty($results)){
				$editableQuoteDescription	= !empty($results[0]->quote_description) ? $results[0]->quote_description : '';
				$editableQuoteDescription	= str_replace(';',"\n",$editableQuoteDescription);
				$checker	= 0;
				$n_customer=explode('[',$n_customer);
				$cus=!empty($n_customer[1])?trim($n_customer[1],']'):$n_customer[0];
				$cus='<div class="net-calcultor-save"><p class="next"><strong>Customer : </strong>'.$cus.' </p>
									<p class="next1"><strong>Product : </strong> RocBloc Quote </p>';
									/* Quote Description for editable update (28-07-2017)*/
									$cus	.='<p><strong>Description : </strong></p>
									<p class="editable-quote-description">
									<textarea name="editable_quote_description" class="return_quote_description">'.$editableQuoteDescription.'</textarea></p>';
									/* Quote Description for editable update (28-07-2017)*/
									$cus	.='<p><strong> Quantity : </strong>'.$n_number.'</p></div>';
					$table='<table class="excel_download"><tr><td>Product:</td><td>'.$n_product.'</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
					<tr><td> Quantity :</td><td>'.$n_number.'</td><td> </td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
					$table .='<tr><td></td><td></td><td>Item#</td><td>QuantityPerNet</td><td>TotalQantity</td><td>UOM</td><td>Activity Code</td><td>Step</td></tr>';
				$counting	= 0;
				foreach($results as $row){
					//print_r($results);
					if(!empty($save_flag)){
						$quote_id=$row->quoteid;
						$proposal_number=$row->proposalnum;
						/* Send mail to Sales Person */
						$quant	= !empty($n_number) ? $n_number : 0;
						$salespersonMailData	= array('quoteId'=>$quote_id,'proposalId'=>$proposal_number,
						'lineNo'=>$quote_line,'type'=>'RocBloc','quantity'=>$quant,'salespersonEmail'=>$salesPersonMailId);
						$finalUrl	= 1;//sendMailToSalesMenForBOM($salespersonMailData);
						return array('html'=>$quote_id,'error'=>$message,'proposalNumber'=>$proposal_number,'finalUrl'=>$finalUrl);
						/* Send mail to Sales Person */
						break;
					}
					$itemcode			= !empty($row->itemcode) ? $row->itemcode : '';
					$uom				= !empty($row->uom) ? $row->uom : '';
					$laboractivityrate	= !empty($row->laboractivityrate) ? $row->laboractivityrate : '';
					$activitycode		= !empty($row->activitycode) ? $row->activitycode : '';
					$attributeArray		= array('itemCode'=>$itemcode,'uom'=>$uom,'laboractivityrate'=>$laboractivityrate,'activitycode'=>$activitycode);
						
						$costpernet = $costpernet + $row->totalcost;
						$subtotal	= $subtotal + $row->totalcost;
						$html	.='<div class="order-list">
									<div class="item-quantity">
									'.$cus;
									if($counting==0){
										$html	.='<p><strong>Item # </strong> <strong class="margin-right">Qty (UOM) </strong>';
									}
									/* Here We are getting the available quantity based on Item Code */
									$availableQuantity			= getAvailableQuantityOfItemCode($row->itemcode);
										/*$displayAvailDes			= !empty($availableQuantity['description']) ? 'Item Desc : '.$availableQuantity['description'].'<br />' :'';
										$displayAvailQnt			= !empty($availableQuantity['quantity']) ? 'Avail Qty : '.$availableQuantity['quantity'] :'';
										$displayAvailableQntHtml1	= (empty($displayAvailDes) && empty($displayAvailQnt)) ? 'Quantity Not Available' : $displayAvailDes.$displayAvailQnt;
										*/
										$displayAvailableQntHtml	= '<span class="tooltiptext">'.$availableQuantity['current'].'<br>'.$availableQuantity['alternate'].'</span>';
									/* End Here */
									$html	.='<p><a class="tooltip">'.$row->itemcode.displayRedStopIcon($attributeArray).$displayAvailableQntHtml.'</a> <span>'.round($row->quantity, 2).' ('.$row->uom.') </span>';
									$html	.='</div></div>';
							$cus='';
					$table .='<tr><td></td><td></td><td>'.$row->itemcode.'</td><td>'.round($row->quantity, 2).'</td><td> '.round(($row->quantity*$n_number), 2).'</td><td>'.$row->uom.'</td><td>'.$row->activitycode.'</td><td>'.$row->wt_step.'</td></tr>';
					$counting++;
				}
				$pricePerSft	= $priceOverride === '0' ? ($subtotal / $sft): ($priceOverride / $sft);
				$table .='</table>';
				$html	.='*<div class="sub-total">';
							if($priceOverride === '0'){
								$html	.='<p> Price per net <span ><strong>'.number_format($subtotal,2).'</strong></span></p>
										   <p> Price per SFT <span ><strong>'.number_format($pricePerSft,2).'</strong></span></p>
										   </div><p>Sub Total Price</p>
										   <h3 id="total_of_subtotal">'.number_format(($subtotal*$n_number),0).'</h3>';
							}
							else {
								$html	.='<p> Original Price per net <span ><strong>'.number_format($subtotal,2).'</strong></span></p>
										   <p></p>
										   <p> Override Price per net <span ><strong>'.number_format($priceOverride,2).'</strong></span></p>
										   <p> Price per SFT <span ><strong>'.number_format($pricePerSft,2).'</strong></span></p>
										   </div><p>Sub Total Price</p>
										   <h3 id="total_of_subtotal">'.number_format(($priceOverride*$n_number),0).'</h3>';
							}
								
							if(empty($type)){
								$html .='<a href="javascript:void(0)" id="saverocblocQuote">Save Quote</a><a href="#" class="download">
										<i class="fa fa-file-excel-o" aria-hidden="true"></i> BOM</a>';
							}
				$html .='*'.$table;
				$stat	= 'Yes';
				
			}else{
				$html	= '';
				$stat	= 'No';
			}
			}
			return array('html'=>$html,'error'=>$message);
		}
		return array('html'=>'','error'=>'Please login your session expired');
	}
	
	/**
	 * @Function	-: saveWriteinQuote()
	 * @Description	-: This function used for this function use for save and calculate the Writein quote cost and details
	 * @Param		-: array()
	 * @created		-: 03-05-2017
	 * @return		-:json
	 * */
	function saveWriteinQuote($postData=array(),$type=0){
		
		$CI	= & get_instance();
		$login_user=$CI->session->userdata('frontendUserName');
		if(!empty($login_user)){
		$n_customer		= str_replace('&', 'and', (!empty($postData['customer']) ? $postData['customer'] : '')); 				
		$n_discount		= !empty($postData['discount']) ? $postData['discount'] : '0';		
		$instrunctions		= !empty($postData['instrunctions']) ? $postData['instrunctions'] : '';
		$instrunctions = str_replace("'", "''", $instrunctions);
		$salesPerson		= !empty($postData['choose-sales']) ? trim($postData['choose-sales']) : '';
		
		
		/* Checking for Salesperson email id */
			$salesPersonMailId	= '';
			if(!empty($salesPerson)){
				$salesPerson	= explode('##',$salesPerson);
				if(!empty($salesPerson)){
					$salesPerson	= !empty($salesPerson[0]) ? $salesPerson[0] : '';
					$salesPersonMailId	= !empty($salesPerson[1]) ? $salesPerson[1] : '';
				}
			}
		/* Checking for Salesperson email id */
		
		$wtClass		= !empty($postData['choose-wtclass']) ? $postData['choose-wtclass'] : '';		
		$pricing_tier	= !empty($postData['pricing_tier']) ? $postData['pricing_tier'] : '0';
		$old_quoteid	= !empty($postData['old_quoteid']) ? $postData['old_quoteid'] : '';
		$quote_line	= !empty($postData['quote_line']) ? $postData['quote_line'] : 0;	
		$opportunity		= !empty($postData['opportunity']) ? $postData['opportunity'] : '';
		$customOpportunity	= !empty($postData['custom-opportunity']) ? trim($postData['custom-opportunity']) : '';
		if(!empty($customOpportunity)){
			$opportunity	= $customOpportunity;
		}
		$contact		= !empty($postData['contact']) ? $postData['contact'] : '0';
		$contact = str_replace("'", "''", $contact);
		if(empty($contact)){
			$html		= '';
			$message	= "Select a Contact First!";
			$stat		= 'No';
			return array('html'=>$html,'error'=>$message);
		}
		$lead_time		= !empty($postData['lead-time']) ? $postData['lead-time'] : '0';
		$description		= !empty($postData['description']) ?$postData['description'] : '';
		$item_code		= !empty($postData['item_code']) ?$postData['item_code'] : '';
		$quantity		= !empty($postData['quantity']) ?$postData['quantity'] : '';
		$price		= !empty($postData['price']) ?$postData['price'] : '';
		$tag_number		= !empty($postData['tag_number']) ? $postData['tag_number'] : '';
		$proposal_number		= !empty($postData['proposal_number']) ? $postData['proposal_number'] : '';
		$item=array();
		if(!empty($item_code)){
			$i=0;
			foreach($item_code as $val){
				$item_code = substr($val, strpos($val, "[") + 1, (strpos($val, "]") - strpos($val, "[") -1));
				//$string = str_replace('<br />', '|', nl2br($description[$i]));
				$string = trim(preg_replace('/\s+/', ' ', nl2br($description[$i])));				
				 
				$string = str_replace(array('\'', '"'), '', $string); 
				$item[$item_code]=array('description'=>$string,'quantity'=>$quantity[$i],'price'=>$price[$i]);
				$i++;
				}
			}else{
			$message	= "Please enter the items";
			$stat	= 'No';
			return array('html'=>$html,'error'=>$message);
				}
		
		if ($old_quoteid == 'No') {
			$orig_quote_id = '';
		} else {
			$orig_quote_id = $old_quoteid;
		}
		$stat='No';$message=''; $html		= '';
		
		if ($n_customer == '') {
			$n_cust = 'None';
			$message	= "Select a Customer First!";
			$stat	= 'No';
			return array('html'=>$html,'error'=>$message);
			
		} else {
			$n_cust=explode('[',$n_customer);
			$n_cust = trim($n_cust[0]);
		}
		
		$pricingtier	= substr($pricing_tier, strpos($pricing_tier, "[") + 1, (strpos($pricing_tier, "]") - strpos($pricing_tier, "[") -1));
		$pricingtier	= !empty($pricingtier) ? $pricingtier : 0;
		if(empty($description)){
			$message	= "Please enter the quote description!";
			$stat	= 'No';
			return array('html'=>$html,'error'=>$message);
			}
		if($message==''){
			$save_flag	= $type;
			$description=json_encode($item);
			
			$res		= "SELECT * from qw.writein_quote($save_flag, '$orig_quote_id', $quote_line,'$n_cust', '$description', $pricingtier, $n_discount,'$instrunctions','$login_user','$salesPerson','$wtClass','$opportunity','$contact','$lead_time','$tag_number','$proposal_number')";
				/* Log Query Test (07-08-2017)*/
					$functionFor	= !empty($save_flag) ? ' Save ' : ' Calulate ';
					queryLog('Write IN'.$functionFor.'Quote Function',$res );
				/* Log Query Test */
			$results	= $CI->db->query($res);
			$results	= $results->result();
			
			$costpernet = 0.0;
			$subtotal	= 0;
			
			if(!empty($results)){
				$checker	= 0;
				$n_customer=explode('[',$n_customer);
				$cus=!empty($n_customer[1])?trim($n_customer[1],']'):$n_customer[0];
				$cus='<div class="psn-calcultor-save"><p class="next"><strong>Customer:</strong>'.$cus.' </p>
									<p class="next1"><strong>Custom Quoting</strong> </p>
									</div>';
						$table='<table class="excel_download"><tr><td>Product:</td><td>Custom Quoting</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
						$table .='<tr><td></td><td></td><td>Item#</td><td>QuantityPerNet</td><td>TotalQantity</td><td>UOM</td><td>Activity Code</td><td>Step</td></tr>';
								
				foreach($results as $row){
					//print_r($results);
					if(!empty($save_flag)){
						$quote_id=$row->quoteid;
						$proposal_number=$row->proposalnum;
						/* Send mail to Sales Person */
						$quant	= 0;
						$salespersonMailData	= array('quoteId'=>$quote_id,'proposalId'=>$proposal_number,
						'lineNo'=>$quote_line,'type'=>'WriteIn','quantity'=>$quant,'salespersonEmail'=>$salesPersonMailId);
						$finalUrl	= 1;//sendMailToSalesMenForBOM($salespersonMailData);
						return array('html'=>$quote_id,'error'=>$message,'proposalNumber'=>$proposal_number,'finalUrl'=>$finalUrl);
						/* Send mail to Sales Person */
						break;
						}
						
						$itemcode			= !empty($row->itemcode) ? $row->itemcode : '';
						$uom				= !empty($row->uom) ? $row->uom : '';
						$laboractivityrate	= !empty($row->laboractivityrate) ? $row->laboractivityrate : '';
						$activitycode		= !empty($row->activitycode) ? $row->activitycode : '';
						$attributeArray		= array('itemCode'=>$itemcode,'uom'=>$uom,'laboractivityrate'=>$laboractivityrate,'activitycode'=>$activitycode);
						
						$costpernet = $costpernet + $row->totalcost;
						$subtotal	= $subtotal + $row->totalcost;
						$html	.='<div class="order-list">
									<div class="item-quantity">
									'.$cus.'
										<p><strong>Item #</strong> '.$row->itemcode.displayRedStopIcon($attributeArray).'</p>
										<p><strong>Quantity Per Net: </strong>'.round($row->quantity, 2);
											if($row->uom){$html	.='<span><strong>UOM:</strong> '.$row->uom.'</span></p>';}
												
										$html	.='<p><strong>Activity Code :</strong> '.$row->activitycode.'
										<span><strong>Step:</strong> '.$row->wt_step.'</span></p>
									</div>
									
								</div>';
							$cus='';	
					$table .='<tr><td></td><td></td><td>'.$row->itemcode.'</td><td>'.round($row->quantity, 2).'</td><td> '.round($row->quantity, 2).'</td><td>'.$row->uom.'</td><td>'.$row->activitycode.'</td><td>'.$row->wt_step.'</td></tr>';
				}
				$table .='</table>';
				$html	.='*<div class="sub-total">
										<input type="hidden" class="subtotal_price_cacl" value="'.number_format($subtotal,2).'">
										<p>Sub Total <span ><strong>'.number_format($subtotal,2).'</strong></span></p>
										<p></p>
									</div><p>Total Price</p>
									<h3 id="total_of_subtotal">'.number_format($subtotal,2) .'</h3>';
							if(empty($type)){
								$html .='<a href="javascript:void(0)" id="savewriteinQuote">Save Quote</a><a href="#" class="download">
				<i class="fa fa-file-excel-o" aria-hidden="true"></i> BOM</a>';
								}
								$html .='*'.$table;
				$stat	= 'Yes';
				
			}else{
				$html	= '';
				$stat	= 'No';
			}
			}
			return array('html'=>$html,'error'=>$message);
		}
		return array('html'=>'','error'=>'Please login your session expired');
	}
	
	/**
	 * This funtion used for get customer default data.
	 * 
	 * In this function we are fetching records using multiple function basis on customer id.
	 * 
	 * @Function	getCustomerDefaultsData()
	 * @Param		customer(string)
	 * @Return		string
	 * 
	 * */
	function getCustomerDefaultsData($customer=null){
		$CI	= & get_instance();
		try{
			$record='';$salesmanHtml	= '';$wtClassHtml	='';
			$contactHtml	= '<select id="contact" name="contact" data-parsley-required="true" ><option value="">Select</option></select>';
			if(!empty($customer)){
			$cust	= explode('[',$customer);
			if(!empty($cust)){
				$customer	= !empty($cust[0]) ? $cust[0]  :'';
				$customer	= trim($customer);
			}
			$sql	= "select * from qw.get_customer_defaults('".$customer."')";
			$record		= $CI->db->query($sql);
			$record		= $record->row();
			$record		= json_decode($record->get_customer_defaults);
			//dump($record[0]);
			//echo $record[0]->salespersonname;die;
			$contactHtml	= '<select id="contact" name="contact" data-parsley-required="true" ><option value="">Select</option>';
			$opportunityHtml='<input type="text" class="new-opportunity" id="new-opportunity" name="opportunity" placeholder="Select"><select id="opportunity" class="custom-select">
							<option value="">Select</option>';	
						$opportunity=	opportunityList($customer);
						if(!empty($opportunity)){
						foreach($opportunity as $result){
							if(!empty($result->opportunityname)){
								$value	= ucfirst($result->opportunityname);
								$sel=(!empty($record)&&(strtolower($value)==strtolower($record[0]->opportunity)))?'selected':'';
								$opportunityHtml =$opportunityHtml .'<option value="'.$value.'" '.$sel.'>'.$value.'</option>';
							}
						}
					}
			$opportunityHtml	.= '</select>';	
			$contact	= contactList($customer);
					if(!empty($contact)){
						foreach($contact as $contacts){
							if(!empty($contacts->firstname)){
								$value	= ucfirst($contacts->firstname.' '.$contacts->lastname);
								$sel=(!empty($record)&&(strtolower($record[0]->contact)==strtolower($value)))?'selected':'';
								$f=(count($contact)==1&&$sel=='')?'selected':'';
								$sel=empty($f)?$sel:$f;
								$contactHtml =$contactHtml .'<option value="'.$value.'" '.$sel.'> '.$value.' ['.$contacts->email.']</option>';
							}
						}
					}
			$contactHtml	.= '</select>';		
			if(!empty($record)){
						
				
				$salesmanName	= !empty($record[0]->salespersonname) ? $record[0]->salespersonname : '';
				$salesmanHtml	.= '<select id="choose-sales" name="choose-sales" data-parsley-required="true">
									<option value="">Select</option>';
									$salesmanHtml	.= salesmanList($salesmanName,'return');
								$salesmanHtml	.='</select>';
				
				$wtClass		= !empty($record[0]->wt_class) ? $record[0]->wt_class :'';
				$wtClassHtml	.= '<select id="choose-wtclass" name="choose-wtclass" data-parsley-required="true">
									<option value="">Select</option>';
									$wtClassHtml	.= wtClassList($wtClass,'return');
								$wtClassHtml	.='</select>';
				$wtClassHtml;
				$leadTime		= !empty($record[0]->lead_time) ? $record[0]->lead_time :'';
				
			}
			}
			if(empty($customer)||empty($record)){
				
				$salesmanHtml	.= '<select id="choose-sales" name="choose-sales" data-parsley-required="true">
									<option value="">Select</option>';
									$salesmanHtml	.= salesmanList('','return');
								$salesmanHtml	.='</select>';
				
				$wtClassHtml	.= '<select id="choose-wtclass" name="choose-wtclass" data-parsley-required="true">
									<option value="">Select</option>';
									$wtClassHtml	.= wtClassList('','return');
								$wtClassHtml	.='</select>';
				$leadTime	= '';
			}
			$returnData		= array('opportunity'=>$opportunityHtml,'contact'=>$contactHtml,'salesman'=>$salesmanHtml,'wtclass'=>$wtClassHtml,'leadTime'=>$leadTime,'records'=>$record);
			return $returnData;
		}catch(Exception	$ex){
			log_message('error','Unable to get customer default data '.$ex->getMessage());
		}
	}
	
	 /* this function use for create quote of template and also calculate the template quote value
	 * we have pass the vaule of quote_id if exist other wise flage value is zero for calcualtion
	 * @param in_save_flag integer,
     * @param in_orig_quote_id character varying,
     * @param in_customer character varying,
     * @param in_items json,
     * @param in_pricingtier integer,
     * @param in_discount double precision,
     * @param in_spl_instruction character varying,
     * @param in_userid text
     * return a array()
     * */
	function getTemplateQuote($postData=array(),$save_flag=0){
		 $CI	= & get_instance();
		$login_user=$CI->session->userdata('frontendUserName');
		if(!empty($login_user)){
			if(empty($postData)){
				return false;
			}else{
				$html	= ''; $total	= 0; $error= '';$message='';
				$salesPerson		= !empty($postData['choose-sales']) ? trim($postData['choose-sales']) : '';
				
				/* Checking for Salesperson email id */
				$salesPersonMailId	= '';
				if(!empty($salesPerson)){
					$salesPerson	= explode('##',$salesPerson);
					if(!empty($salesPerson)){
						$salesPerson	= !empty($salesPerson[0]) ? $salesPerson[0] : '';
						$salesPersonMailId	= !empty($salesPerson[1]) ? $salesPerson[1] : '';
					}
				}
				/* Checking for Salesperson email id */
				
				$wtClass		= !empty($postData['choose-wtclass']) ? $postData['choose-wtclass'] : '';
				$quote_line		= !empty($postData['quote_line']) ? $postData['quote_line'] : 0;
				
				$n_customer		= str_replace('&', 'and', $postData['customer']); 
				$n_pricingtier	= !empty($postData['pricingtier']) ? $postData['pricingtier'] :'';
				$old_quoteid	= !empty($postData['old_quoteid']) ? $postData['old_quoteid'] : '';	
				$spl_instruction= !empty($postData['spl_instruction']) ? $postData['spl_instruction'] : '';	
				$n_discount		= !empty($postData['discount']) ? $postData['discount'] : 0;
				$template_item	= !empty($postData['template_item']) ? $postData['template_item'] : 0;
				$template_qty	= !empty($postData['template_qty']) ? $postData['template_qty'] : 0;
				$opportunity	= !empty($postData['opportunity']) ? $postData['opportunity'] : '';
				/* Modify at the 29-11-2017 */
					$shipToAddress	= !empty($postData['ship_to_address']) ? $postData['ship_to_address'] : '';
					$shipToAddress = str_replace("'", "''", $shipToAddress);
					$oldPrice		= !empty($postData['old_calculator']) ? $postData['old_calculator'] : '0';
					$priceOverride	= !empty($postData['price_override']) ? $postData['price_override'] : '0';
				/* Modify at the 29-11-2017 */

				$editQuoteDescription		= !empty($postData['edit_quote_description']) ? $postData['edit_quote_description'] : '';
				$editQuoteDescription 		= str_replace("'", "''", $editQuoteDescription);
				$editQuoteDescription		= str_replace("\n",';',$editQuoteDescription);

				$customOpportunity	= !empty($postData['custom-opportunity']) ? trim($postData['custom-opportunity']) : '';
				if(!empty($customOpportunity)){
					$opportunity	= $customOpportunity;
				}
				$contact		= !empty($postData['contact']) ? $postData['contact'] : '0';
				$contact = str_replace("'", "''", $contact);
				if(empty($contact)){
					$html		= '';
					$message	= "Select a Contact First!";
					$stat		= 'No';
					return array('html'=>$html,'error'=>$message);
				}
				
				$lead_time		= !empty($postData['lead-time']) ? $postData['lead-time'] : '0';
				$tag_number		= !empty($postData['tag_number']) ? $postData['tag_number'] : '';
				$proposal_number		= !empty($postData['proposal_number']) ? $postData['proposal_number'] : '';
				if ($template_item == "None"||empty($template_item)) {
					$product	= "NONE";
					$message	= "Please Select a Product First!";
					$stat	= 'No';
					return array('html'=>$html,'error'=>$message);
				} else {
					$templateView	= !empty($template_item) ? $template_item."\r\n" : '';
					$template_item	= substr($template_item, strpos($template_item, "[") + 1, (strpos($template_item, "]") - strpos($template_item, "[") -1));
				}
				if ($old_quoteid == 'No') {
					$orig_quote_id = '';
				} else {
					$orig_quote_id = $old_quoteid;
				}
				if ($n_customer == '') {
					$n_cust = 'None';
					$error	= "Select a Customer First!";
				} else {
					$n_cust=explode('[',$n_customer);
					$n_cust = trim($n_cust[0]);
				}
				$pricingtier	= substr($n_pricingtier, strpos($n_pricingtier, "[") + 1, (strpos($n_pricingtier, "]") - strpos($n_pricingtier, "[") -1));
				$save_flag		= $save_flag;
				if(empty($error)){
					$res		= "SELECT * from qw.template_quote($save_flag,'$orig_quote_id',$quote_line,'$n_cust','$template_item',
					$template_qty,$pricingtier,$n_discount,'$spl_instruction','$login_user','$salesPerson','$wtClass',
					'$opportunity','$contact','$lead_time','$tag_number','$proposal_number','$editQuoteDescription','$shipToAddress',$oldPrice,$priceOverride)";
					/* Log Query Test (07-08-2017)*/
						$functionFor	= !empty($save_flag) ? ' Save ' : ' Calulate ';
						queryLog('Template'.$functionFor.'Quote Function',$res );
					/* Log Query Test */
					$results	= $CI->db->query($res);
					$results	= $results->result();
					//dump($results);die;
					$subtotal	= 0;
					if(!empty($results)){
						$editableQuoteDescription	= !empty($results[0]->quote_description) ? $results[0]->quote_description : '';
						$editableQuoteDescription	= str_replace(';',"\n",$editableQuoteDescription);
						$n_customer=explode('[',$n_customer);
						$cus=!empty($n_customer[1])?trim($n_customer[1],']'):$n_customer[0];
						$cus='<div class="psn-calcultor-save"><p class="next"><strong>Customer:</strong>'.$cus.' </p>
									<p class="next1"><strong>Product : </strong>Template Quote </p>
									<p><strong>Description : </strong></p>
									<p class="editable-quote-description">
									<textarea name="editable_quote_description" class="return_quote_description" >'.$editableQuoteDescription.'</textarea></p>
									
									<p><strong> Quantity : </strong>'.$template_qty.'</p></div>';

						$table='<table class="excel_download">
								<tr><td>Product:</td><td>Template Quoting</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
						$table .='<tr><td></td><td></td><td>Item#</td><td>QuantityPerNet</td><td>TotalQantity</td><td>UOM</td><td>Activity Code</td><td>Step</td></tr>';

						$counting	= 0;		
						foreach($results as $row){
							if(!empty($save_flag)){
								$quote_id=$row->quoteid;
								$proposal_number=$row->proposalnum;
								/* Send mail to Sales Person */
								$quant	= !empty($template_qty) ? $template_qty : 0;
								$salespersonMailData	= array('quoteId'=>$quote_id,'proposalId'=>$proposal_number,
								'lineNo'=>$quote_line,'type'=>'Template','quantity'=>$quant,'salespersonEmail'=>$salesPersonMailId);
								$finalUrl	= 1;//sendMailToSalesMenForBOM($salespersonMailData);
								return array('html'=>$quote_id,'error'=>$message,'proposalNumber'=>$proposal_number,'finalUrl'=>$finalUrl);
								/* Send mail to Sales Person */
								break;
							}
							$itemcode			= !empty($row->itemcode) ? $row->itemcode : '';
							$uom				= !empty($row->uom) ? $row->uom : '';
							$laboractivityrate	= !empty($row->laboractivityrate) ? $row->laboractivityrate : '';
							$activitycode		= !empty($row->activitycode) ? $row->activitycode : '';
							$attributeArray		= array('itemCode'=>$itemcode,'uom'=>$uom,'laboractivityrate'=>$laboractivityrate,'activitycode'=>$activitycode);
							
				

							$subtotal	= $subtotal+$row->totalcost;
							$html	.='<div class="order-list">
										<div class="item-quantity">
										'.$cus;

						/*	<p><strong>Item #</strong> '.$row->itemcode.displayRedStopIcon($attributeArray).'</p>
							<p><strong>Quantity Per Net: </strong>'.round($row->quantity, 2);
							if($row->uom){$html	.='<span><strong>UOM:</strong> '.$row->uom.'</span></p>';}
									
							$html	.='<p><strong>Activity Code :</strong> '.$row->activitycode.'
								<span><strong>Step:</strong> '.$row->wt_step.'</span></p>
							</div>
							</div>';
							$cus='';
							$table .='<tr><td></td><td></td><td>'.$row->itemcode.'</td><td>'.round($row->quantity, 2).'</td><td>'.round($row->quantity, 2).'</td><td>'.$row->uom.'</td><td>'.$row->activitycode.'</td><td>'.$row->wt_step.'</td></tr>';*/
				
							if($counting==0){
									$html	.='<p><strong>Item # </strong> <strong class="margin-right">Qty (UOM) </strong>';
								}
								/* Here We are getting the available quantity based on Item Code */
								$availableQuantity			= getAvailableQuantityOfItemCode($row->itemcode);
									/*$displayAvailDes			= !empty($availableQuantity['description']) ? 'Item Desc : '.$availableQuantity['description'].'<br />' :'';
									$displayAvailQnt			= !empty($availableQuantity['quantity']) ? 'Avail Qty : '.$availableQuantity['quantity'] :'';
									$displayAvailableQntHtml1	= (empty($displayAvailDes) && empty($displayAvailQnt)) ? 'Quantity Not Available' : $displayAvailDes.$displayAvailQnt;
									*/
									$displayAvailableQntHtml	= '<span class="tooltiptext">'.$availableQuantity['current'].'<br>'.$availableQuantity['alternate'].'</span>';
								/* End Here */
								$html	.='<p><a class="tooltip">'.$row->itemcode.displayRedStopIcon($attributeArray).$displayAvailableQntHtml.'</a> <span>'.round($row->quantity, 2).' ('.$row->uom.') </span>';
								$html	.='</div></div>';
										$cus='';
								$table .='<tr><td></td><td></td><td>'.$row->itemcode.'</td><td>'.round($row->quantity, 2).'</td><td> '.round(($row->quantity), 2).'</td><td>'.$row->uom.'</td><td>'.$row->activitycode.'</td><td>'.$row->wt_step.'</td></tr>';
								$counting++;

						}
						$table .='</table>';
						$html	.='*<div class="sub-total">';
						if($priceOverride === '0'){
									$html	.='<input type="hidden" class="subtotal_price_cacl" value="'.number_format($subtotal,2).'">
									<p>Price Per Net <span ><strong>'.number_format($subtotal,2).'</strong></span></p>
									<p></p>
									</div><p>Sub Total Price</p>
									<h3 id="total_of_subtotal">'.number_format(($subtotal * $template_qty),2) .'</h3>';
						}
						else {
										$html	.='<input type="hidden" class="subtotal_price_cacl" value="'.number_format($priceOverride,2).'">
										<p>Original Price Per Net <span ><strong>'.number_format($subtotal,2).'</strong></span></p>
										<p>Override Price Per Net <span ><strong>'.number_format($priceOverride,2).'</strong></span></p>
										<p></p>
										</div><p>Sub Total Price</p>
										<h3 id="total_of_subtotal">'.number_format(($priceOverride * $template_qty),2) .'</h3>';
						}
						
						if(empty($type)){
							$html .='<a href="javascript:void(0)" id="saveCalculateTemplate">Save Quote</a><a href="#" class="download">
									<i class="fa fa-file-excel-o" aria-hidden="true"></i> BOM</a>';
						}
						$html .='*'.$table;
						$total	= $priceOverride === '0' ? number_format($subtotal,2) : number_format($priceOverride,2);
					}else{
						$html		= '';
						$subtotal	= 0;
						$error="No data data return ";
					}
				}
				return array('html'=>$html,'total'=>$total,'error'=>$error);
			}
		}
	}
	
	/* =========================== end here ============================== */
	/* =========================== NetForm Functionality ================= */
	 /** this function use for create quote of netform and also calculate the netform quote value
	 * we have pass the vaule of quote_id if exist other wise flage value is zero for calcualtion
	 * @param in_save_flag integer,
     * @param in_orig_quote_id character varying,
     * @param in_customer character varying,
     * @param in_items json,
     * @param in_pricingtier integer,
     * @param in_discount double precision,
     * @param in_spl_instruction character varying,
     * @param in_userid text
     * return a array()
     * */
	function getNetFormQuote($postData=array(),$save_flag=0){
		$CI	= & get_instance();
		$login_user=$CI->session->userdata('frontendUserName');
		if(!empty($login_user)){
			if(empty($postData)){
				return false;
			}else{
				$html	= ''; $total	= 0; $error= '';$message='';
				$a='';$b='';
				/* Vertical */
				$verticalRopeType	= !empty($postData['vertical_rope_type']) ? $postData['vertical_rope_type'] :'';
				$verticalRopeCount	= !empty($postData['ropecount']) ? $postData['ropecount'] :'';
				$verticalRopeSize	= !empty($postData['ropesize']) ? $postData['ropesize'] :'';
				$verticalTerminalTop	= !empty($postData['termination_top']) ? $postData['termination_top'] :'';
				$verticalTerminalBottom	= !empty($postData['termination_bottom']) ? $postData['termination_bottom'] :'';
				$proposal_number		= !empty($postData['proposal_number']) ? $postData['proposal_number'] : '';
				/* Modify at the 29-11-2017 */
					$shipToAddress	= !empty($postData['ship_to_address']) ? $postData['ship_to_address'] : '';
					$shipToAddress = str_replace("'", "''", $shipToAddress);
					$oldPrice		= !empty($postData['old_calculator']) ? $postData['old_calculator'] : '0';
					$priceOverride	= !empty($postData['price_override']) ? $postData['price_override'] : '0';
				/* Modify at the 29-11-2017 */
				
				/* Changes at 28-07-2017 */
				$editQuoteDescription	= !empty($postData['edit_quote_description']) ? $postData['edit_quote_description'] : '';
				$editQuoteDescription 			= str_replace("'", "''", $editQuoteDescription);
				$editQuoteDescription	= str_replace("\n",';',$editQuoteDescription);
				$markForReview			= !empty($postData['mark_for_reviews']) ? $postData['mark_for_reviews'] : 0;
				/* Changes at 28-07-2017 */
				$ii	= 1; $ver=0;$her=0;
				if(!empty($verticalRopeType)){
					foreach($verticalRopeType as $key=>$val){
						$ver++;
						$vertiRopeSize	= !empty($verticalRopeSize[$key]) ? $verticalRopeSize[$key] : 0;
						$vertiRopeCount	= !empty($verticalRopeCount[$key]) ? $verticalRopeCount[$key] : 0;
						$val	= substr($val, strpos($val, "[") + 1, (strpos($val, "]") - strpos($val, "[") -1));
						$top	= !empty($verticalTerminalTop[$key]&&$verticalTerminalTop[$key]!='None') ? $verticalTerminalTop[$key] : '[Cat-0]';
						$top	= !empty($top)?substr($top, strpos($top, "[") + 1, (strpos($top, "]") - strpos($top, "[") -1)):'';
						$bottom	= !empty($verticalTerminalBottom[$key]&&$verticalTerminalBottom[$key]!='None') ? $verticalTerminalBottom[$key] : '[Cat-0]';
						$bottom	= !empty($bottom)?substr($bottom, strpos($bottom, "[") + 1, (strpos($bottom, "]") - strpos($bottom, "[") -1)):'';
						$a['line_'.$ii]		= array('verRopeType'=>$val,'verRopeCount'=>$vertiRopeCount,
										'verRopeSize'=>$vertiRopeSize,'verTerminalTop'=>$top,'verTerminalBottom'=>$bottom);
						//$a[]	= str_replace('"',"'",$av);
						$ii++;
					}
				}
				if(empty($ver)){
					$message	= "Please select atleast one vertical line Information!";
					$stat	= 'No';
					return array('html'=>$html,'error'=>$message);
				}
				$verticalDescription	= json_encode($a);
				
				/* Horizontal */
				$horizontalRopeType		= !empty($postData['horizontal_rope_type']) ? $postData['horizontal_rope_type'] :'';
				$horizontalRopeCount	= !empty($postData['horizontal_ropecount']) ? $postData['horizontal_ropecount'] :'';
				$horizontalRopeSize		= !empty($postData['horizontal_ropesize']) ? $postData['horizontal_ropesize'] :'';
				$horizontalTerminalTop	= !empty($postData['horizontal_termination_top']) ? $postData['horizontal_termination_top'] :'';
				$horizontalTerminalBottom	= !empty($postData['horizontal_termination_bottom']) ? $postData['horizontal_termination_bottom'] :'';
				$jj = 1;
				if(!empty($horizontalRopeType)){
					foreach($horizontalRopeType as $key=>$val){
							$her++;
							$horiRopeSize	= !empty($horizontalRopeSize[$key]) ? $horizontalRopeSize[$key] : 0;
							$horiRopeCount	= !empty($horizontalRopeCount[$key]) ? $horizontalRopeCount[$key] : 0;
							
							$val	= substr($val, strpos($val, "[") + 1, (strpos($val, "]") - strpos($val, "[") -1));
							$top	= !empty($horizontalTerminalTop[$key]&&$horizontalTerminalTop[$key]!='None') ? $horizontalTerminalTop[$key] : '[Cat-0]';
							$top	= !empty($top)?substr($top, strpos($top, "[") + 1, (strpos($top, "]") - strpos($top, "[") -1)):'';
							$bottom	= !empty($horizontalTerminalBottom[$key]&&$horizontalTerminalBottom[$key]!='None') ? $horizontalTerminalBottom[$key] : '[Cat-0]';
							$bottom	= !empty($bottom)?substr($bottom, strpos($bottom, "[") + 1, (strpos($bottom, "]") - strpos($bottom, "[") -1)):'';
							$b['line_'.$jj]	= array('horiRopeType'=>$val,'horiRopeCount'=>$horiRopeCount,'horiRopeSize'=>$horiRopeSize,
										'horiTerminalTop'=>$top,'horiTerminalBottom'=>$bottom);
						
						$jj	++;
						//$b[]	= str_replace('"',"'",$bv);
					}
				}
				
				/*if(empty($her)){
					$message	= "Please select atleast one Horizontals line Information!";
					$stat	= 'No';
					return array('html'=>$html,'error'=>$message);
				}*/
				$horizontalDescription	= json_encode($b);
				$salesPerson	= !empty($postData['choose-sales']) ? trim($postData['choose-sales']) : '';
				
				/* Checking for Salesperson email id */
				$salesPersonMailId	= '';
				if(!empty($salesPerson)){
					$salesPerson	= explode('##',$salesPerson);
					if(!empty($salesPerson)){
						$salesPerson	= !empty($salesPerson[0]) ? $salesPerson[0] : '';
						$salesPersonMailId	= !empty($salesPerson[1]) ? $salesPerson[1] : '';
					}
				}
				/* Checking for Salesperson email id */
				
				$wtClass		= !empty($postData['choose-wtclass']) ? $postData['choose-wtclass'] : '';
				$quote_line		= !empty($postData['quote_line']) ? $postData['quote_line'] : 0;
				
				$n_customer		= str_replace('&', 'and', $postData['customer']); 
				$n_pricingtier	= !empty($postData['pricing_tier']) ? $postData['pricing_tier'] :'';
				$old_quoteid	= !empty($postData['old_quoteid']) ? $postData['old_quoteid'] : '';	
				$spl_instruction= !empty($postData['spl_instruction']) ? $postData['spl_instruction'] : '';	
				$n_discount		= !empty($postData['discount']) ? $postData['discount'] : 0;
				$dimenson		= !empty($postData['dimenson']) ? trim($postData['dimenson']) : '';
				$meshSize		= !empty($postData['mesh_size']) ? trim($postData['mesh_size']) : '';
				$netform_item	= !empty($postData['net_product']) ? $postData['net_product'] : 0;
				$netNumber		= !empty($postData['net_number']) ? $postData['net_number'] : 0;
				$opportunity	= !empty($postData['opportunity']) ? $postData['opportunity'] : '';
				$customOpportunity	= !empty($postData['custom-opportunity']) ? trim($postData['custom-opportunity']) : '';
				if(!empty($customOpportunity)){
					$opportunity	= $customOpportunity;
				}
				$contact		= !empty($postData['contact']) ? $postData['contact'] : '0';
				$contact = str_replace("'", "''", $contact);
				if(empty($contact)){
					$html		= '';
					$message	= "Select a Contact First!";
					$stat		= 'No';
					return array('html'=>$html,'error'=>$message);
				}
				
				$lead_time		= !empty($postData['lead-time']) ? $postData['lead-time'] : '0';
				$tag_number		= !empty($postData['tag_number']) ? $postData['tag_number'] : '';
				
				$uomRope		= !empty($postData['uom_rope']) ? $postData['uom_rope'] : 'MM';
				$overrideFlag	= !empty($postData['override_flag']) ? $postData['override_flag'] : 0;
				
				$nuOfEggs		= !empty($postData['number_of_eggs']) ? $postData['number_of_eggs'] : 0;
				$nuOfTees		= !empty($postData['number_of_tees']) ? $postData['number_of_tees'] : 0;
				//$a	= "array['RNF16GN','100','1','NF-CAT-21','NF-CAT-21']";
				if ($postData['net_product'] == "None"||empty($postData['net_product'])) {
					$product	= "NONE";
					$message	= "Please Select a Product First!";
					$stat	= 'No';
					return array('html'=>$html,'error'=>$message);
				} else {
					$netform_item	= !empty($netform_item) ? $netform_item : '';
					$netform_item	= substr($netform_item, strpos($netform_item, "[") + 1, (strpos($netform_item, "]") - strpos($netform_item, "[") -1));
				}
				if ($old_quoteid == 'No') {
					$orig_quote_id = '';
				} else {
					$orig_quote_id = $old_quoteid;
				}
				if ($n_customer == '') {
					$n_cust = 'None';
					$error	= "Select a Customer First!";
				} else {
					$n_cust=explode('[',$n_customer);
					$n_cust = trim($n_cust[0]);
				}
				$pricingtier	= substr($n_pricingtier, strpos($n_pricingtier, "[") + 1, (strpos($n_pricingtier, "]") - strpos($n_pricingtier, "[") -1));
				$save_flag		= $save_flag;
				if(empty($error)){
					$arr	= 'array';
					//$res		= "SELECT * from qw.netform_quote($save_flag,'$orig_quote_id',$quote_line,'$n_cust','$netform_item',$arr$a[0],$arr$a[1],$arr$a[2],$arr$a[3],$arr$a[4],$arr$a[5],$arr$b[0],$arr$b[1],$arr$b[2],$arr$b[3],$arr$b[4],$arr$b[5],$netNumber,$pricingtier,$n_discount,'$spl_instruction','$login_user','$salesPerson','$wtClass','$opportunity','$contact','$lead_time')";
					$res		= "SELECT * from qw.netform_quote($save_flag,'$orig_quote_id',$quote_line,'$n_cust','$netform_item',
					'$verticalDescription','$horizontalDescription',$netNumber,$pricingtier,$n_discount,'$spl_instruction',
					'$login_user','$salesPerson','$wtClass','$opportunity','$contact','$lead_time','$tag_number',
					'$proposal_number','$uomRope',$overrideFlag,$nuOfEggs,$nuOfTees,$markForReview,'$editQuoteDescription',
					'$dimenson','$meshSize','$shipToAddress',$oldPrice,$priceOverride)";
						/* Log Query Test (07-08-2017)*/
							$functionFor	= !empty($save_flag) ? ' Save ' : ' Calulate ';
							queryLog('Netform '.$functionFor.'Quote Function',$res );
						/* Log Query Test */
					$results	= $CI->db->query($res);
					$results	= $results->result();
					$subtotal	= 0;
					//dump($results);
					if(!empty($results)){
						
						$editableQuoteDescription	= !empty($results[0]->quote_description) ? $results[0]->quote_description : '';
						$editableQuoteDescription	= str_replace(';',"\n",$editableQuoteDescription);
						
						$n_customer=explode('[',$n_customer);
						$cus=!empty($n_customer[1])?trim($n_customer[1],']'):$n_customer[0];
						$cus='<div class="psn-calcultor-save"><p class="next"><strong>Customer:</strong>'.$cus.' </p>
									<p class="next1"><strong>Netform Quoting</strong> </p>';
								/* Quote Description for editable update (24-07-2017)*/
									$cus	.='<p><strong>Description : </strong></p>
									<p class="editable-quote-description">
									<textarea name="editable_quote_description" class="return_quote_description">'.$editableQuoteDescription.'</textarea></p>';
									/* Quote Description for editable update (24-07-2017)*/
									$cus	.='<p><strong> Quantity : </strong>'.$netNumber.'</p></div>';
						$table	='<table class="excel_download">
								<tr><td>Product:</td><td>Netform Quoting</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
						$table .='<tr><td></td><td></td><td>Item#</td><td>QuantityPerNet</td><td>TotalQantity</td><td>UOM</td><td>Activity Code</td><td>Step</td></tr>';
						$counting	= 0;
						foreach($results as $row){
							if(!empty($save_flag)){
								$quote_id=$row->quoteid;
								$proposal_number=$row->proposalnum;
								/* Send mail to Sales Person */
									$quant	= !empty($netNumber) ? $netNumber : 0;
									$salespersonMailData	= array('quoteId'=>$quote_id,'proposalId'=>$proposal_number,
									'lineNo'=>$quote_line,'type'=>'NetForm','quantity'=>$quant,'salespersonEmail'=>$salesPersonMailId);
									$finalUrl	= 1;//sendMailToSalesMenForBOM($salespersonMailData);
									return array('html'=>$quote_id,'error'=>$message,'proposalNumber'=>$proposal_number,'finalUrl'=>$finalUrl);
								/* Send mail to Sales Person */
								break;
							}
							
							$itemcode			= !empty($row->itemcode) ? $row->itemcode : '';
							$uom				= !empty($row->uom) ? $row->uom : '';
							$laboractivityrate	= !empty($row->laboractivityrate) ? $row->laboractivityrate : '';
							$activitycode		= !empty($row->activitycode) ? $row->activitycode : '';
							$attributeArray		= array('itemCode'=>$itemcode,'uom'=>$uom,'laboractivityrate'=>$laboractivityrate,'activitycode'=>$activitycode);
							
							$subtotal	= $subtotal+$row->totalcost;
							$html	.='<div class="order-list">
										<div class="item-quantity">
										'.$cus;
										if($counting==0){
											$html	.='<p><strong>Item # </strong> <strong class="margin-right">Qty (UOM) </strong>';
										}
										/* Here We are getting the available quantity based on Item Code */
										$availableQuantity			= getAvailableQuantityOfItemCode($row->itemcode);
										/*$displayAvailDes			= !empty($availableQuantity['description']) ? 'Item Desc : '.$availableQuantity['description'].'<br />' :'';
										$displayAvailQnt			= !empty($availableQuantity['quantity']) ? 'Avail Qty : '.$availableQuantity['quantity'] :'';
										$displayAvailableQntHtml1	= (empty($displayAvailDes) && empty($displayAvailQnt)) ? 'Quantity Not Available' : $displayAvailDes.$displayAvailQnt;
										*/
										$displayAvailableQntHtml	= '<span class="tooltiptext">'.$availableQuantity['current'].'<br>'.$availableQuantity['alternate'].'</span>';
										/* End Here */
										$html	.='<p><a class="tooltip">'.$row->itemcode.displayRedStopIcon($attributeArray).$displayAvailableQntHtml.'</a> <span>'.round($row->quantity, 2).' ('.$row->uom.') </span>';
										
									$html	.='</div></div>';
										$cus='';
							$table .='<tr><td></td><td></td><td>'.$row->itemcode.'</td><td>'.round($row->quantity, 2).'</td><td>'.round($row->quantity, 2).'</td><td>'.$row->uom.'</td><td>'.$row->activitycode.'</td><td>'.$row->wt_step.'</td></tr>';
							$counting++;
						}
						$table .='</table>';
						$html	.='*<div class="sub-total">';
						if($priceOverride === '0'){
							$html	.='<input type="hidden" class="subtotal_price_cacl" value="'.number_format($subtotal,2).'">
							<p>Price Per Net <span ><strong>'.number_format($subtotal,2).'</strong></span></p>
							<p></p>
							</div><p>Sub Total Price</p>
							<h3 id="total_of_subtotal">'.number_format(($subtotal * $netNumber),2) .'</h3>';
						}
						else {
							$html	.='<input type="hidden" class="subtotal_price_cacl" value="'.number_format($priceOverride,2).'">
							<p>Original Price Per Net <span ><strong>'.number_format($subtotal,2).'</strong></span></p>
							<p>Override Price Per Net <span ><strong>'.number_format($priceOverride,2).'</strong></span></p>
							<p></p>
							</div><p>Sub Total Price</p>
							<h3 id="total_of_subtotal">'.number_format(($priceOverride * $netNumber),2) .'</h3>';
						}
						
						if(empty($type)){
							$html .='<a href="javascript:void(0)" id="saveCalculateNetformQuote">Save Quote</a><a href="#" class="download">
									<i class="fa fa-file-excel-o" aria-hidden="true"></i> BOM</a>';
						}
						$html .='*'.$table;
						$total	= $priceOverride === '0' ? number_format($subtotal,2) : number_format($priceOverride,2);
					}else{
						$html		= '';
						$subtotal	= 0;
						$error		= "No data data return ";
					}
				}
				return array('html'=>$html,'total'=>$total,'error'=>$error);
			}
		}
	}
	/* ====================== End NetForm Functionality =================== */
	
	/**
	 * @Function	updateQuoteHeader()
	 * @Param		updateData(array())
	 * @Created		25-05-2017
	 * @Return		true/false
	 * */
	function updateQuoteHeader($updateData=array()){
		try{
			$CI			= & get_instance();
			$login_user	= $CI->session->userdata('frontendUserName');
			if(!empty($login_user) && !empty($updateData)){
				$quoteId		= !empty($updateData['update_quote_id']) ? $updateData['update_quote_id'] : '';
				$contact		= !empty($updateData['contact']) ? $updateData['contact'] : '';
				$contact = str_replace("'", "''", $contact);
				$contactPhone	= !empty($updateData['phone']) ? $updateData['phone'] : '';
				$contactEmail	= !empty($updateData['email']) ? $updateData['email'] : '';
				$contactFax		= !empty($updateData['fax']) ? $updateData['fax'] : '';
				$arolead		= !empty($updateData['arolead']) ? $updateData['arolead'] : '';
				$termcode		= !empty($updateData['term_code']) ? $updateData['term_code'] : '';
				$shippingmethod	= !empty($updateData['shipping_method']) ? $updateData['shipping_method'] : '';
				$freight		= !empty($updateData['freight']) ? $updateData['freight'] : 0.0;
				$total			= !empty($updateData['total']) ? $updateData['total'] : 0.0;
				$proposalNumber	= !empty($updateData['update_proposal_num']) ? $updateData['update_proposal_num'] : '';
				$proposal_id	= !empty($updateData['update_proposal_id']) ? $updateData['update_proposal_id'] : '';
				
				/* Modify At the 06-09-2017 */
				$customer		= !empty($updateData['update_quote_customer']) ? $updateData['update_quote_customer'] : '';
				$companyDisName	= !empty($updateData['update_quote_company_display_name']) ? $updateData['update_quote_company_display_name'] : '';
				$address		= !empty($updateData['update_quote_address']) ? $updateData['update_quote_address'] : '';
				$city			= !empty($updateData['update_quote_city']) ? $updateData['update_quote_city'] : '';
				$state			= !empty($updateData['update_quote_state']) ? $updateData['update_quote_state'] : '';
				$zipCode		= !empty($updateData['update_quote_zipcode']) ? $updateData['update_quote_zipcode'] : '';
				$country		= !empty($updateData['update_quote_country']) ? $updateData['update_quote_country'] : '';
				/* Modify at the 20-11-2017 */
				$shipToAddress	= !empty($updateData['ship_to_address']) ? $updateData['ship_to_address'] : '';
				$shipToAddress = str_replace("'", "''", $shipToAddress);
				/* Modify at the 20-11-2017 */
				// added to pass accountumber on 12 Sept
				$n_cust = explode('[',$customer);
				$n_cust = trim($n_cust[0]);
				$res			= "SELECT * from qw.update_quote_header('$quoteId','$contact','$contactPhone',
									'$contactEmail','$contactFax','$arolead','$termcode',
									'$shippingmethod',$freight,$total,'$login_user','$proposalNumber',
									'$companyDisName','$address','$city','$state','$zipCode','$country','$n_cust','$shipToAddress'
									)";
									
				$results	= $CI->db->query($res);
				$results	= $results->result();
				$finalResult	= !empty($results[0]->update_quote_header) ? $results[0]->update_quote_header : '';
				if(!empty($finalResult)){
					return true;
				}
				return false;
			}
			
		}catch(Exception	$ex){
			log_message('error','Unable to update quote header based on quote id. '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for get quote header few fields.
	 * 
	 * @Function	-: getQuoteHeaderLookUp()
	 * @Created on	-: 26-05-2017
	 * @Param		-: void(0)
	 * @Return		-: array()
	 * 
	 *  */
	function getQuoteHeaderLookUp($type=null,$code=null,$number=null){
		$CI	= & get_instance();
		try{
			$sql	= "select * from qw.get_dwstaic_lookup('".$type."')";
				$records		= $CI->db->query($sql);
				$records		= $records->row();
				
				$results		= json_decode($records->get_dwstaic_lookup);
				//dump($results);die;
				$html	= '';
				if(!empty($results)){
					foreach($results as $result){
						if(!empty($result->lookup_description)){
							if($type=='shipping_code'){
								$select	= !empty($code) && strtolower($code)== strtolower($result->lookup_description) ? 'selected' : '';
							} else if ($type=='term_code'){
								$select	= (!empty($code) && strtolower($code)== strtolower($result->lookup_description)) || strtolower($code)== strtolower($result->lookup_id) ? 'selected' : '';
							} else if($type=='relationship_type'){
								$select	= (!empty($code) && strtolower($code)== strtolower($result->lookup_description)) || strtolower($code)== strtolower($result->lookup_id) ? 'selected' : '';
							}else if($type=='contact_type'){
								$select	= (!empty($code) && strtolower($code)== strtolower($result->lookup_description)) || strtolower($code)== strtolower($result->lookup_id) ? 'selected' : '';
							}else if($type=='lead_source'){
								$select	= (!empty($code) && strtolower($code)== strtolower($result->lookup_description)) || strtolower($code)== strtolower($result->lookup_id) ? 'selected' : '';
							}else if($type=='pricing_tier'){
								$select	= (!empty($code) && strtolower($code)== strtolower($result->lookup_description)) || strtolower($code)== strtolower($result->lookup_id) ? 'selected' : '';
							}else if($type=='vendor_tier'){
								$select	= (!empty($code) && strtolower($code)== strtolower($result->lookup_description)) || strtolower($code)== strtolower($result->lookup_id) ? 'selected' : '';
							}
							else{
								$select	= !empty($code) && strtolower($code)== strtolower($result->lookup_description) ? 'selected' : '';
							}
							/*===== This section for getting dynamic pricing tiers (18-07-2017) =====*/
							if($type=='price_markup'){
								$select	= (!empty($code) && $code== $cutId) ? 'selected' : '';
								$html .='<option value="'.$result->lookup_description.'" '.$select.'>'.$result->lookup_description.'</option>';
							} else if($type=='cutting_style'){
								$cutId	= ($result->lookup_description=='Scissor Cut') ? 1 : 2;
								$select	= (!empty($code) && $code== $cutId) ? 'selected' : '';
								
								if(!empty($number) && $number==1){
									if($result->lookup_description=='Scissor Cut'){
										$html	.= '<option value="'.$result->lookup_description.' ['.$cutId.']'.'" '.$select.'>'.$result->lookup_description.'</option>';
									}
								}else{
									$html	.= '<option value="'.$result->lookup_description.' ['.$cutId.']'.'" '.$select.'>'.$result->lookup_description.'</option>';
								}
							} else if($type=='lashing_position'){
								$select	= (!empty($code) && strtolower($code)== strtolower($result->lookup_id)) ? 'selected' : '';
								$htFirst	= '';
								if($result->lookup_description=='None' || $result->lookup_id==0){
									$htFirst	= '<option value="'.$result->lookup_description.' ['.$result->lookup_id.']'.'" '.$select.'>'.$result->lookup_description.'</option>';
								}else{
									$html	.= '<option value="'.$result->lookup_description.' ['.$result->lookup_id.']'.'" '.$select.'>'.$result->lookup_description.'</option>';
								}
								$html	= $htFirst.$html;
							}else if ($type=='term_code'){
								$html	.= '<option value="'.$result->lookup_id.'" '.$select.'>'.$result->lookup_description.'</option>';
							}else if ($type=='relationship_type'){
								$html	.= '<option value="'.$result->lookup_id.'" '.$select.'>'.$result->lookup_description.'</option>';
							}else if ($type=='contact_type'){
								$html	.= '<option value="'.$result->lookup_id.'" '.$select.'>'.$result->lookup_description.'</option>';
							}else if ($type=='lead_source'){
								$html	.= '<option value="'.$result->lookup_id.'" '.$select.'>'.$result->lookup_description.'</option>';
							}else if ($type=='pricing_tier'){
								$html	.= '<option value="'.$result->lookup_id.'" '.$select.'>'.$result->lookup_description.'</option>';
							}else if ($type=='vendor_tier'){
								$html	.= '<option value="'.$result->lookup_id.'" '.$select.'>'.$result->lookup_description.'</option>';
							}
							else{
								$html	.= '<option value="'.$result->lookup_description.'" '.$select.'>'.$result->lookup_description.'</option>';
							}
							
						}
					}
					if(!empty($number)){echo $html;}else{return $html;}
					//return $html;
				}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get net product list '.$ex->getMessage());
		}
	}
	
	
	/**
	 * This function used for display red stop icon on the calculate quote.
	 * 
	 * @Function	displayRedStopIcon()
	 * @Param		laboractivityrate(int) 
	 * @Created		31-05-2017
	 * @Return		string
	 * 
	 * */
	function displayRedStopIcon($attributeArray=array()){
		$CI			= & get_instance();
		$html		= '';
		$laboractivityrate	= !empty($attributeArray['laboractivityrate']) ? number_format($attributeArray['laboractivityrate']): 0;
		$rand	= rand();
		if(empty($laboractivityrate) || $laboractivityrate <= 0){
			$redStopIcon	= '';
			$groupid		= $CI->session->userdata('frontendUserGroup');
			$groupDetails		= getUserGroupDetils($groupid);
			$permissions		= !empty($groupDetails->permission) ? explode(',',$groupDetails->permission) : '';
			if(!empty($permissions) && in_array(10,$permissions)){
				$redStopIcon	= 'red-stop-icon';
			}
			$itemCode	= '';$uom	= '';$laborRate	= '';$activityCode	= '';
			$itemCode		= !empty($attributeArray['itemCode']) ? $attributeArray['itemCode']  :'';
			$uom			= !empty($attributeArray['uom']) ? $attributeArray['uom']  :'';
			$laborRate		= !empty($attributeArray['laboractivityrate']) ? $attributeArray['laboractivityrate']  :'';
			$activityCode	= !empty($attributeArray['activitycode']) ? $attributeArray['activitycode']  :'';
			$html	= '<label class="'.$redStopIcon.'" id="id_'.$rand.'" data-itemcode="'.$itemCode.'" data-uom="'.$uom.'" data-labor="'.$laborRate.'" data-activitycode="'.$activityCode.'">
						<img src="'.base_url('assets/front/images/stop.png').'" alt="Stop Icon">
					</label>';
		}
		return $html;
	}
	
	/**
	 * This function used for get labor activity rate.
	 * 
	 * @Function	getLaborActivityRate()
	 * @Param		searchData-array()
	 * @Created		07-10-2017
	 * @Return		array()
	 * 
	 * */
	function getLaborActivityRate($searchData=array()){
		try{
			$CI			= & get_instance();
			$itemCode		= !empty($searchData['itemCode']) ? $searchData['itemCode'] : 'all';
			$activityCode	= !empty($searchData['activityCode']) ? $searchData['activityCode'] : 'all';
			$login_user	= $CI->session->userdata('frontendUserName');
			if(!empty($login_user)){
				$res		= "select * from qw.get_labor_activityrate('$itemCode','$activityCode')";
				$results	= $CI->db->query($res);
				$results	= $results->row();
				$finalResult	= !empty($results->get_labor_activityrate) ? json_decode($results->get_labor_activityrate) : '';
				if(!empty($finalResult)){
					return $finalResult;
				}return false;
			}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to update quote header based on quote id. '.$ex->getMessage());
		}
	}
	
	/**
	 * @Function	updateItemInfo()
	 * @Param		updateData(array())
	 * @Created		02-06-2017
	 * @Return		true/false
	 * */
	function updateItemInfo($updateData=array()){
		try{
			$CI			= & get_instance();
			$login_user	= $CI->session->userdata('frontendUserName');
			if(!empty($login_user) && !empty($updateData)){
				$itemCode		= !empty($updateData['item_code']) ? $updateData['item_code'] : '';
				$activityCode	= !empty($updateData['activity_code']) ? $updateData['activity_code'] : '';
				$uom			= !empty($updateData['uom']) ? $updateData['uom'] : '';
				$rate			= !empty($updateData['activity_rate']) ? $updateData['activity_rate'] : 0.0;
				$res		= "SELECT * from qw.update_labor_activityrate('$itemCode','$activityCode','$uom','$rate','$login_user')";
				$results	= $CI->db->query($res);
				$results	= $results->result();
				$finalResult	= !empty($results[0]->update_labor_activityrate) ? $results[0]->update_labor_activityrate : '';
				if(!empty($finalResult)){
					echo $finalResult;
				}else{
					echo 'No';
				}
			}
		}catch(Exception	$ex){
			log_message('error','Unable to update quote header based on quote id. '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for get populte product options.
	 * 
	 * In this function we are getting the populte product options basis on product and type.
	 * 
	 * @Function	getAllProductOptions()
	 * @Created		26-06-2017
	 * @Param		input(array())
	 * @Return		array()
	 * 
	 * */
	 
	function getAllProductOptions($input=array()){
		$CI	= & get_instance();
		$userId		= $CI->session->userdata('frontendUserName');
		try{
			$html	= '';
			if(!empty($input['productType']) && !empty($input['optionType']) && !empty($input['itemCode'])){
				$productType	= !empty($input['productType']) ? $input['productType'] : 'all';
				$optionType		= !empty($input['optionType']) ? $input['optionType'] : 'all';
				$itemCode		= !empty($input['itemCode']) ? $input['itemCode'] : 'all';
				$sql		= "select * from qw.get_product_options('$productType','$optionType','$userId')";
				$value		= '';
				$results	= $CI->db->query($sql);
				$results	= $results->row();
				$results	= !empty($results->get_product_options) ? json_decode($results->get_product_options) : array();
				if(!empty($results)){
					return $results;
				}
			}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get product and type '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for get search populte product options.
	 * 
	 * In this function we are getting the populte product options basis on product and type.
	 * 
	 * @Function	getAllSearchProductOptions()
	 * @Created		07-10-2017
	 * @Param		input(array())
	 * @Return		array()
	 * 
	 * */
	 
	function getAllSearchProductOptions($input=array()){
		$CI	= & get_instance();
		$userId		= $CI->session->userdata('frontendUserName');
		try{
			$html	= '';
			if(!empty($input['productType']) && !empty($input['optionType']) && !empty($input['itemCode'])){
				$productType	= !empty($input['productType']) ? $input['productType'] : 'all';
				$optionType		= !empty($input['optionType']) ? $input['optionType'] : 'all';
				$itemCode		= !empty($input['itemCode']) ? $input['itemCode'] : 'all';
				$sql		= "select * from qw.search_product_options('$productType','$optionType','$userId','$itemCode')";
				$value		= '';
				$results	= $CI->db->query($sql);
				$results	= $results->row();
				$results	= !empty($results->search_product_options) ? json_decode($results->search_product_options) : array();
				if(!empty($results)){
					return $results;
				}
			}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get product and type '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for manage product option.
	 * 
	 * In this function we are updating/inserting product options.
	 * 
	 * @Function	manageProductOption()
	 * @Param		optionData(array())
	 * @Created		17-06-2017
	 * @Return		boolean
	 * 
	 * */
	function manageProductOption($optionData=array()){
		$CI	= & get_instance();
		$userId		= $CI->session->userdata('frontendUserName');
		if(!empty($optionData)){
			$product	= !empty($optionData['update_product']) ? $optionData['update_product'] : '';
			$itemCode	= !empty($optionData['itemcode']) ? $optionData['itemcode'] : '';
			$actiCode	= !empty($optionData['activity_code']) ? $optionData['activity_code'] : '';
			$optionType	= !empty($optionData['optiontype']) ? $optionData['optiontype'] : '';
			$quantity	= !empty($optionData['quantity']) ? $optionData['quantity'] : '0';
			$sql		= "select * from qw.update_product_otpions('$product', '$itemCode','$optionType','$actiCode',$quantity, '$userId')";
			$results	= $CI->db->query($sql);
			$results	= $results->result();
			$res		= !empty($results[0]->update_product_otpions) ? $results[0]->update_product_otpions : '';
			if($res){
				return	$res;
			}return false;
		}
	}
	
	/**
	 * This function used for add value basis on matching item.
	 * 
	 * @Function	addQuantityNTotalQuantity()
	 * @Param		quote_data(array()),quantity(int)
	 * @Created		28-06-2017
	 * @Return		array()
	 * 
	 * */
	function addQuantityNTotalQuantity($quote_data=array(),$quantity=1){
		if(!empty($quote_data)){
			$newArray	= '';$i=0;
			foreach($quote_data as $val){
				$totalQuantity	= ($val->detail_quantity * $quantity);
				$newArray[$i]['A']	= '';
				$newArray[$i]['B']	= '';
				$newArray[$i]['item']	= $val->detail_description.'['.$val->product.']';
				$newArray[$i]['ItemCode']	= !empty($val->detail_itemcode) ? $val->detail_itemcode : '';
				$newArray[$i]['QuantityPerNet']	= round($val->detail_quantity, 2);
				$newArray[$i]['TotalQantity']	= round($totalQuantity, 2);
				$newArray[$i]['UOM']		= $val->detail_uom;
				$newArray[$i]['Activity']	= $val->detail_activitycode;
				$newArray[$i]['Step']		= $val->detail_wt_step;
				$i++;
			}
			$sum = array_reduce($newArray, function ($a, $b) {
				if(isset($a[$b['item']]) ){
					$a[$b['item']]['QuantityPerNet'] += $b['QuantityPerNet'];
					$a[$b['item']]['TotalQantity'] += $b['TotalQantity'];
				}else{
					$a[$b['item']] = $b;
				}
				return $a;
			});
			return $sum;
		}
	}
	
	/**
	 * This function used for delete product option basis on provided parameter.
	 * 
	 * @Function	deleteProductOption()
	 * @Param		optionData(array())
	 * @Created		29-06-2017
	 * @Return		boolean
	 * 
	 * */
	
	function deleteProductOption($optionData=array()){
		return true;
	}
	
	/**
	 * This function used for save a new contact details get return the all contact details related this customer including new inserted contact details.
	 * 
	 * @Function	addNewContact()
	 * @Param		contactDetails(array())
	 * @Created		14-07-2017
	 * @Return		Json
	 * 
	 * */
	function addNewContact($contactDetails=array()){
		$CI	= & get_instance();
		$status		= 'No';$message	= 'Something wrong!.';
		$userId		= $CI->session->userdata('frontendUserName');
		if(!empty($contactDetails) && is_array($contactDetails)){
			$customerId	= '';
			$customer	= !empty($contactDetails['new_contact_customer']) ? $contactDetails['new_contact_customer'] : '';
			if(!empty($customer)){
				$customer	= explode('[',$customer);
				$customerId	= !empty($customer[0]) ? trim($customer[0]) : '';
			}
			$firstName	= !empty($contactDetails['first_name']) ? $contactDetails['first_name'] : '';
			$lastName	= !empty($contactDetails['last_name']) ? $contactDetails['last_name'] : '';
			$jobTitle	= !empty($contactDetails['job_title']) ? $contactDetails['job_title'] : '';
			$company	= !empty($contactDetails['company_name']) ? $contactDetails['company_name'] : '';
			$phone		= !empty($contactDetails['business_phone']) ? $contactDetails['business_phone'] : '';
			$email		= !empty($contactDetails['new_contact_email']) ? $contactDetails['new_contact_email'] : '';
			$address	= !empty($contactDetails['new_contact_address']) ? $contactDetails['new_contact_address'] : '';
			$street		= !empty($contactDetails['new_contact_street1']) ? $contactDetails['new_contact_street1'] : '';
			$street2	= !empty($contactDetails['new_contact_street2']) ? $contactDetails['new_contact_street2'] : '';
			$city		= !empty($contactDetails['new_contact_city']) ? $contactDetails['new_contact_city'] : '';
			$state		= !empty($contactDetails['new_contact_state']) ? $contactDetails['new_contact_state'] : '';
			$zip		= !empty($contactDetails['new_contact_zip']) ? $contactDetails['new_contact_zip'] : '';
			$country	= !empty($contactDetails['new_contact_country']) ? $contactDetails['new_contact_country'] : '';
			$sql		= "select * from qw.create_contact('$customerId','','$firstName','$lastName','$jobTitle','$company', '$phone',
							'$email','$address','$street','$street2','$city','$state','$zip','$country') ";
			/*if($sql){
				$status	= "Yes"; $message	= "Contact Successfully Added.";
				$html	= "<option>New Value1</option><option selected>New Value2</option><option>New Value3</option>";
			}*/
			$records	= $CI->db->query($sql);
			$result		= $records->row();
			$result		= !empty($result->create_contact) ? $result->create_contact : '';
			$html	= '';
			if($result){
				$getAllContact	= contactList($customerId);
				if(!empty($getAllContact)){
					foreach($getAllContact as $contact){
						if(!empty($contact->firstname)){
							$value	= ucfirst($contact->firstname.' '.$contact->lastname);
							$sel	= (!empty($firstName) && (strtolower($email)==strtolower($contact->email)))?'selected':'';
							$html .= '<option value="'.$value.'" '.$sel.'> '.$value.' ['.$contact->email.']</option>';
						}
					}
				}
				$status	= "Yes"; $message	= "Contact Successfully Added.";
			}
			echo json_encode(array('status'=>$status,'msg'=>$message,'html'=>$html));
		}
	}
	
	/**
	 * This function used for send a mail to salesperson about created new quote.
	 * 
	 * @Function	sendMailToSalesMenForBOM()
	 * @Param		data(array())
	 * @Created		17-07-2017
	 * @Return		boolean
	 * 
	 * */
	function sendMailToSalesMenForBOM($data=array()){
		if(!empty($data)){
			$CI	= & get_instance();
			$quoteId	= !empty($data['quoteId']) ? $data['quoteId'] : '';
			$proposalId	= !empty($data['proposalId']) ? $data['proposalId'] : '';
			$lineNo		= !empty($data['lineNo']) ? (1+$data['lineNo']) : '1';
			$type		= !empty($data['type']) ? $data['type'] : '';
			$quantity	= !empty($data['quantity']) ? $data['quantity'] : '';
			$salespersonEmail	= !empty($data['salespersonEmail']) ? $data['salespersonEmail'] : '';
			if(!empty($quoteId) && !empty($proposalId) && !empty($type)){
				/*    */
				$CI->load->model('frontend/Main_model');
				$quote_data	= $CI->Main_model->getQuoteDetailsNew($quoteId);
				$quote_data	= json_decode($quote_data[0]->get_quote_bom_details);
				if(!empty($quote_data)){
					$quote_data2	= getBOMExcelFormotData($quote_data);
					
					$CI->load->helper('file');
					$CI->load->helper('download');
					$delimiter	= ",";
					$newline	= "\r\n";
					$filename	= $proposalId.".csv";
					//$headings	= array('Sage Order#','Proposal Number','Tag#','Product','Product Description','# of Nets','Item Description','Item Code','Quantity','UOM','Step','Activity Code','Expected Labor Time','Actual Labor Time','Shipping Location','Product Location','Inventory Location','Expected Shipping Date','LOT','Notes');
					$headings	= array('Sage Order#','Proposal Number','Tag#','Product','Product Description','# of Nets','Item Description','Item Code','QuantityPerNet','TotalQuantity','UOM','Step','Activity Code','Expected Labor Time','Total Expected Labor Time','Actual Labor Time','Shipping Location','Product Location','Inventory Location','Expected Shipping Date','LOT','Notes','Ship Weight','Material Cost','Labor Cost');
					$dataforcsv	= array($headings);
					$projectRec	= $quote_data2;
					foreach($projectRec as $res){
						array_push($dataforcsv,$res);
					}
					generateCsv($dataforcsv,',', '"',$filename,$salespersonEmail);
					/*    */
				}return false;
			
			}return false;
			
		}return false;
	}
	
	/**
	 * 
	 * @Description		used to write the arrays  into file format for converting csv
	 * @Param			$resultObj database results objects
	 * @Return			comaseprated content  for csv
	 * 
	 * */

 	function generateCsv($data, $delimiter = ',', $enclosure = '"',$fileName=null,$emailId=null) {
		$CI	= & get_instance();
 		$contents='';
 		$handle = fopen('php://temp', 'r+');
 		foreach ($data as $line) {
 			fputcsv($handle, $line, $delimiter, $enclosure);
 		}
 		rewind($handle);
 		while (!feof($handle)) {
 			$contents .= fread($handle, 8192);
 		}
 		fclose($handle);
		/* Try to save the file on server location */
		$saveFileOnServer	= file_put_contents(FCPATH."download_bom/" . $fileName, $contents);
		/* Try to save the file on server location */
		$CI->load->helper('mail_helper');
		$mailSendingReport	= sendMailToSalesPerson(array('emailId'=>$emailId,'fileName'=>$fileName));
 	}
	
	/**
	 * This function used for return BOM excel format.
	 * 
	 * @Function	addQuantityNTotalQuantity()
	 * @Param		quoteData(array())
	 * @Created		01-08-2017
	 * @Return		array()
	 * 
	 * */
	function getBOMExcelFormotData($quoteData=array()){
		if(!empty($quoteData)){
			$newArray	= '';$i=0;
			foreach($quoteData as $val){
				
				
				$quantityPerNet		= !empty($val->detail_quantity) ? $val->detail_quantity : 0;
				$numberOfNet		= !empty($val->quantity) ? $val->quantity : 0;
				$totalQuantity		= ($quantityPerNet * $numberOfNet);
				$expectedLaborTime	= !empty($val->labor_unit_min) ? $val->labor_unit_min : 0;
				$totalExpectedLaborTime	= ($expectedLaborTime * $numberOfNet);
				
				$productDescription	= !empty($val->quote_description) ? $val->quote_description : '';
				$productDescription	= str_replace('<br />',' ',$productDescription);
				$description	= !empty($val->detail_description) ? $val->detail_description : '';
				$description	= str_replace('<br />',' ',$description);
				$newArray[$i]['Sage Order#']	= '';
				$newArray[$i]['Proposal Number']= !empty($val->proposal_num) ? $val->proposal_num : '';
				$newArray[$i]['Tag']			= !empty($val->tag_number) ? $val->tag_number : '';
				$newArray[$i]['Product']		= !empty($val->product) ? $val->product : '';
				$newArray[$i]['Product Description']	= $productDescription;
				
				$newArray[$i]['No of Nets']		= $numberOfNet;
				
				$newArray[$i]['Item Description']	= $description;
				
				$newArray[$i]['Item Code']		= !empty($val->detail_itemcode) ? $val->detail_itemcode : '';
				$newArray[$i]['QuantityPerNet']	= $quantityPerNet;
				
				$newArray[$i]['Total Quantity']	= $totalQuantity;
				
				
				$newArray[$i]['UOM']			= !empty($val->detail_uom) ? $val->detail_uom : '';
				$newArray[$i]['Step']			= !empty($val->detail_wt_step) ? $val->detail_wt_step : '';
				$newArray[$i]['Activity Code']	= !empty($val->detail_activitycode) ? $val->detail_activitycode : '';
				
				$newArray[$i]['Expected Labor Time']		= $expectedLaborTime;
				$newArray[$i]['Total Expected Labor Time']	= $totalExpectedLaborTime;
				
				
				$newArray[$i]['Actual Labor Time']		= !empty($val->actual_laborunitmin) ? $val->actual_laborunitmin : '';
				$newArray[$i]['Shipping Location']		= !empty($val->shipping_location) ? $val->shipping_location : '';
				$newArray[$i]['Production Location']	= !empty($val->production_location) ? $val->production_location : '';
				$newArray[$i]['Inventory Location']		= !empty($val->inventory_location) ? $val->inventory_location : '';
				$newArray[$i]['Expected Shipping Date']	= !empty($val->expected_shipping_date) ? $val->expected_shipping_date : '';
				$newArray[$i]['LOT']			= '';
				$newArray[$i]['Notes']			= '';
				$newArray[$i]['Ship Weight']	= !empty($val->ship_weight) ? $val->ship_weight : '';
				$newArray[$i]['Material Cost']	= !empty($val->detail_material_cost) ? $val->detail_material_cost : '';
				$newArray[$i]['Labor Cost']		= !empty($val->detail_labor_cost) ? $val->detail_labor_cost : '';
				$i++;
			}
			return $newArray;
		}
	}
	/**
	 * This function used for create or update the query log file details.
	 * 
	 * @Function	queryLog()
	 * @Param		type,res
	 * @Created		07-08-2017
	 * 
	 * */
	function queryLog($type=null,$res=null){
		/* Log Query Test */
		$CI	= & get_instance();
		$output1	= "\n\n=== ".$type." (".date('Y-m-d h:i A').") ===\n\n";
		$output1	.= $res;
		$CI->load->helper('file');
		if ( ! write_file(APPPATH  . "/logs/quote_query_log.txt", $output1, 'a+')){
			log_message('debug','Unable to write query the file');
		}
		/* Log Query Test */
	}
	
	
	
	/**
	 * This function used for add/update customer info.
	 * 
	 * @Function	addUpdateCustomer()
	 * @Param		customerInfo(array())
	 * @Created		09-08-2017
	 * 
	 * */
	function addUpdateCustomer($customerInfo=array()){
		$CI	= & get_instance();
		try{
			$companyName	= !empty($customerInfo['company_name']) ? addslashes($customerInfo['company_name']) : '';
			$companyName 		= str_replace("'", "''", $companyName);

			$crmGuid		= !empty($customerInfo['crm_guid']) ? $customerInfo['crm_guid'] : 0;
			$primaryContact	= !empty($customerInfo['primary_contact']) ? $customerInfo['primary_contact'] : '';
			$accountNumber	= !empty($customerInfo['account_number']) ? $customerInfo['account_number'] : '';
			$email			= !empty($customerInfo['customer_email']) ? $customerInfo['customer_email'] : '';
			$phone			= !empty($customerInfo['customer_phone']) ? $customerInfo['customer_phone'] : '';
			$altPhone		= !empty($customerInfo['customer_alt_phone']) ? $customerInfo['customer_alt_phone'] : '';
			$fax			= !empty($customerInfo['fax']) ? $customerInfo['fax'] : '';
			$website		= !empty($customerInfo['website']) ? $customerInfo['website'] : '';
			$address		= !empty($customerInfo['address']) ? $customerInfo['address'] : '';
			$addressStreet1	= !empty($customerInfo['cutomer_address_street1']) ? $customerInfo['cutomer_address_street1'] : '';
			$addressStreet2	= !empty($customerInfo['cutomer_address_street2']) ? $customerInfo['cutomer_address_street2'] : '';
			$city			= !empty($customerInfo['customer_city']) ? $customerInfo['customer_city'] : '';
			$state			= !empty($customerInfo['customer_state']) ? $customerInfo['customer_state'] : '';
			$country		= !empty($customerInfo['customer_country']) ? $customerInfo['customer_country'] : '';
			$zipcode		= !empty($customerInfo['customer_zip_code']) ? $customerInfo['customer_zip_code'] : '';
			$priceingTier	= !empty($customerInfo['customer_pricing_tier']) ? $customerInfo['customer_pricing_tier'] : '';
			/*if(!empty($priceingTier)){
				$priceingTier	= substr($priceingTier, strpos($priceingTier, "[") + 1, (strpos($priceingTier, "]") - strpos($priceingTier, "[") -1));
			}*/
			
			$termsCode		= !empty($customerInfo['terms_code']) ? $customerInfo['terms_code'] : '';
			$shippingMethod	= !empty($customerInfo['ship_method']) ? $customerInfo['ship_method'] : '';
			$sageNumber		= !empty($customerInfo['sage_number']) ? $customerInfo['sage_number'] : '';
			$relationshipType	= !empty($customerInfo['relationship_type']) ? $customerInfo['relationship_type'] : '';
			$preMthodContact= !empty($customerInfo['pre_method_contact']) ? $customerInfo['pre_method_contact'] : '';
			$doNotAllowEmail= !empty($customerInfo['do_not_allow_email']) ? $customerInfo['do_not_allow_email'] : 0;
			$doNotAllowPhone= !empty($customerInfo['do_not_allow_phone']) ? $customerInfo['do_not_allow_phone'] : 0;
			$doNotAllowFax	= !empty($customerInfo['do_not_allow_fax']) ? $customerInfo['do_not_allow_fax'] : 0;
			$sendMarketingMaterials	= !empty($customerInfo['send_marketing_material']) ? $customerInfo['send_marketing_material'] : 0;
			$creditLimit	= !empty($customerInfo['credit_limit']) ? $customerInfo['credit_limit'] : 0;
			$annualRevenue	= !empty($customerInfo['annual_revenue']) ? $customerInfo['annual_revenue'] : 0;
			$parentAccount	= !empty($customerInfo['parent_account_number']) ? $customerInfo['parent_account_number'] : '';
			$leadSalesContact	= !empty($customerInfo['lead_salescontact']) ? $customerInfo['lead_salescontact'] : '';
			$leadSalesContact 		= str_replace("'", "''", $leadSalesContact);

			$division	= !empty($customerInfo['division']) ? $customerInfo['division'] : '';
			$territory	= !empty($customerInfo['territory']) ? $customerInfo['territory'] : '';
			
			$sql		= "select * from qw.create_update_customer('$crmGuid','$companyName','$primaryContact','$accountNumber','$email','$phone','$altPhone','$fax','$website',
				'$address','$addressStreet1','$addressStreet2','$city','$state','$zipcode','$country','$priceingTier','$termsCode','$shippingMethod','$sageNumber',
				'$relationshipType','$preMthodContact',$doNotAllowEmail,$doNotAllowPhone,$doNotAllowFax,$sendMarketingMaterials,$creditLimit,$annualRevenue,
				'$parentAccount','$leadSalesContact','$division','$territory')";
			
			$records	= $CI->db->query($sql);
			$result		= $records->row();
			$result		= !empty($result->create_update_customer) ? $result->create_update_customer : '';
			if($result){
				return $result; 
			}return false;
		}catch(Exception $ex){
			log_message('error','Unable to add/update customer info');
		}
	}
	
	/**
	 * This function used for get all customer list.
	 * 
	 * @Function	getAllCustomers()
	 * @Param		customerSageNumber,searchKeyword,offset
	 * @Created		10-08-2017
	 * 
	 * */
	function getAllCustomers($customerSageNumber=null,$searchDivision=null,$searchState=null,$searchCountry=null,$searchRelationshipType=null,$offset=0,$numRows=0){
		try{
			$CI	= & get_instance();
			$start		= !empty($offset) && is_numeric($offset) ? $offset : 0;
			$startRow	= ($start * 50);
			$customerSageNumber	= !empty($customerSageNumber) ? $customerSageNumber : 'all';
			$searchKeyword		= !empty($searchKeyword) ? $searchKeyword : 'all';
			$searchDivision		= (!empty($searchDivision) && $searchDivision!='all') ? strtoupper($searchDivision) : $searchDivision;
			if(!empty($numRows)){
				$numRows	= $numRows;
			}else{
				$numRows	= ($startRow + 50);
			}
			//$sql		= "select * from qw.get_all_crmcustomer('$customerSageNumber','$searchKeyword',$startRow,$numRows)";
			/*$sql		= "select * from qw.get_all_crmcustomer('$customerSageNumber','$searchDivision','$searchState','$searchCountry',$startRow,$numRows)";*/
			/*var_dump($customerSageNumber);
			var_dump($searchDivision);
			var_dump($searchState);
			var_dump($searchCountry);
			var_dump($searchRelationshipType); die; */
			$sql		= "select * from qw.get_all_crmcustomer('$customerSageNumber','$searchDivision','$searchState','$searchCountry',$startRow,$numRows,'$searchRelationshipType')";
			
			$results	= $CI->db->query($sql);
			$results	= $results->result();
			//dump($results);
			if(!empty($results)){
				$results= !empty($results[0]->get_all_crmcustomer) ? json_decode($results[0]->get_all_crmcustomer) : array();
				if(!empty($results)){
					return $results;
				}return false;
			}
		}catch(Exception	$ex){
			log_message('error','Unable to get customer result basis on searching keyword');
		}
	}
	
	/**
	 * This function used for get all customer list.
	 * 
	 * @Function	getAllCustomers()
	 * @Param		customerSageNumber,searchKeyword,offset
	 * @Created		10-08-2017
	 * 
	 * */
	function getAllCustomers_uat_16_10_2017($customerSageNumber=null,$searchKeyword=null,$offset=0,$numRows=0){
		try{
			$CI	= & get_instance();
				$start		= !empty($offset) && is_numeric($offset) ? $offset : 0;
				$startRow	= ($start * 50);
				$customerSageNumber	= !empty($customerSageNumber) ? $customerSageNumber : 'all';
				$searchKeyword	= !empty($searchKeyword) ? $searchKeyword : 'all';
				
				if(!empty($numRows)){
					$numRows	= $numRows;
				}else{
					$numRows	= ($startRow + 50);
				}
				$sql		= "select * from qw.get_all_crmcustomer('$customerSageNumber','$searchKeyword',$startRow,$numRows)";
				$results	= $CI->db->query($sql);
				$results	= $results->result();
				//dump($results);
				if(!empty($results)){
					$results= !empty($results[0]->get_all_crmcustomer) ? json_decode($results[0]->get_all_crmcustomer) : array();
					if(!empty($results)){
						return $results;
					}return false;
				}
				
		}catch(Exception	$ex){
			log_message('error','Unable to get customer result basis on searching keyword');
		}
	}
	
	/**
	 * This function used for remove the customer based on customer id.
	 * 
	 * @Function	removeCustomer()
	 * @Param		customerId(int)
	 * @Created		10-08-2017
	 * @Return 		bollean
	 * */
	function removeCustomer($customer=0){
		$CI	= & get_instance();
		if(!empty($customer)){
			$sql		= "select * from qw.delete_customer('$customer')";
			$results	= $CI->db->query($sql);
			$results	= $results->result();
			if($results){
				return $results;
			}return false;
		}return false;
	}
	
	/**
	 * This function used for get contacts list.
	 * 
	 * @Function	getAllContacts()
	 * @Param		contactId,searchKeyword,offset
	 * @Created		18-08-2017
	 * 
	 * */
	function getAllContacts($searchCustomer='all',$searchContact='all',$searchDivision='all',
	$searchState='all',$searchCountry='all',$offset=0,$numRows=0,
	$searchContactType='all',$searchLeadSource='all'){
		try{
			$CI	= & get_instance();
			$start		= !empty($offset) && is_numeric($offset) ? $offset : 0;
			$startRow	= ($start * 50);
			$contactId	= !empty($contactId) ? $contactId : 'all';
			$searchKeyword	= !empty($searchKeyword) ? $searchKeyword : 'all';
			if(!empty($numRows)){
				$numRows	= $numRows;
			}else{
				$numRows	= ($startRow + 50);
			}
			$sql		= "select * from qw.get_all_crmcontact('$searchCustomer','$searchContact','$searchDivision',
							'$searchState','$searchCountry',$startRow,$numRows,'$searchContactType','$searchLeadSource')";
			$results	= $CI->db->query($sql);
			$results	= $results->result();
			//dump($results);
			if(!empty($results)){
				$results= !empty($results[0]->get_all_crmcontact) ? json_decode($results[0]->get_all_crmcontact) : array();
				if(!empty($results)){
					return $results;
				}return false;
			}
		}catch(Exception	$ex){
			log_message('error','Unable to get contact result basis on searching keyword');
		}
	}
	
	/**
	 * This function used for get contacts list.
	 * 
	 * @Function	getAllContacts()
	 * @Param		contactId,searchKeyword,offset
	 * @Created		18-08-2017
	 * 
	 * */
	function getAllContacts_uat_16_10_2017($contactId=0,$searchKeyword=null,$offset=0,$numRows=0){
		try{
			$CI	= & get_instance();
			$start		= !empty($offset) && is_numeric($offset) ? $offset : 0;
			$startRow	= ($start * 50);
			$contactId	= !empty($contactId) ? $contactId : 'all';
			$searchKeyword	= !empty($searchKeyword) ? $searchKeyword : 'all';
			if(!empty($numRows)){
				$numRows	= $numRows;
			}else{
				$numRows	= ($startRow + 50);
			}
			if(!empty($contactId) && $contactId!='all'){
				$sql		= "select * from qw.get_all_crmcontact('$searchKeyword','$contactId',$startRow,$numRows)";
			}else{
				$sql		= "select * from qw.get_all_crmcontact('$contactId','$searchKeyword',$startRow,$numRows)";
			}
			$results	= $CI->db->query($sql);
			$results	= $results->result();
			//dump($results);
			if(!empty($results)){
				$results= !empty($results[0]->get_all_crmcontact) ? json_decode($results[0]->get_all_crmcontact) : array();
				if(!empty($results)){
					return $results;
				}return false;
			}
		}catch(Exception	$ex){
			log_message('error','Unable to get contact result basis on searching keyword');
		}
	}
	
	
	/**
	 * This function used for create and update contact details.
	 * 
	 * @Function	createUpdateContact()
	 * @Param		contactDetails(array())
	 * @Created		18-08-2017
	 * 
	 * */
	function createUpdateContact($contactDetails=array()){
		$CI	= & get_instance();
		$status		= 'No';$message	= 'Something wrong!.';
		$userId		= $CI->session->userdata('frontendUserName');
		if(!empty($contactDetails) && is_array($contactDetails)){
			$customerId	= '0';
			$customer	= !empty($contactDetails['new_contact_customer']) ? $contactDetails['new_contact_customer'] : '';
			if(!empty($customer)){
				$customer	= explode('[',$customer);
				$customerId	= !empty($customer[0]) ? trim($customer[0]) : '0';
			}
			
			$contactId	= !empty($contactDetails['contactid']) ? $contactDetails['contactid'] : 0;
			$contactType= !empty($contactDetails['contact_type']) ? $contactDetails['contact_type'] : 0;
			$leadSource	= !empty($contactDetails['lead_source']) ? $contactDetails['lead_source'] : 0;
			$title		= !empty($contactDetails['contact_name_tile']) ? $contactDetails['contact_name_tile'] : '';
			$firstName	= !empty($contactDetails['first_name']) ? $contactDetails['first_name'] : '';
			$lastName	= !empty($contactDetails['last_name']) ? $contactDetails['last_name'] : '';
			$firstName = str_replace("'", "''", $firstName);
			$lastName = str_replace("'", "''", $lastName);

			$jobTitle	= !empty($contactDetails['job_title']) ? $contactDetails['job_title'] : '';
			$company	= !empty($contactDetails['company_name']) ? $contactDetails['company_name'] : '';
			$company = str_replace("'", "''", $company);

			$busphone	= !empty($contactDetails['business_phone']) ? $contactDetails['business_phone'] : '';
			$mblphone	= !empty($contactDetails['mobile_phone']) ? $contactDetails['mobile_phone'] : '';
			$email		= !empty($contactDetails['new_contact_email']) ? $contactDetails['new_contact_email'] : '';
			$address	= !empty($contactDetails['new_contact_address']) ? $contactDetails['new_contact_address'] : '';
			$street		= !empty($contactDetails['new_contact_street1']) ? $contactDetails['new_contact_street1'] : '';
			$street2	= !empty($contactDetails['new_contact_street2']) ? $contactDetails['new_contact_street2'] : '';
			$city		= !empty($contactDetails['new_contact_city']) ? $contactDetails['new_contact_city'] : '';
			$state		= !empty($contactDetails['new_contact_state']) ? $contactDetails['new_contact_state'] : '';
			$zip		= !empty($contactDetails['new_contact_zip']) ? $contactDetails['new_contact_zip'] : '';
			$country	= !empty($contactDetails['new_contact_country']) ? $contactDetails['new_contact_country'] : '';
			$image		= !empty($contactDetails['image']) ? $contactDetails['image'] : '';
			$oldImage	= !empty($contactDetails['old_profile_image']) ? $contactDetails['old_profile_image'] : '';
			$profileImg	= !empty($image) ? $image : $oldImage;
			
			$mobilePhone	= !empty($contactDetails['mobile_phone']) ? $contactDetails['mobile_phone'] : '';
			$linkedinUrl= !empty($contactDetails['linkedin_url']) ? $contactDetails['linkedin_url'] : '';
			
			$fax		= !empty($contactDetails['fax']) ? $contactDetails['fax'] : '';
			$notes		= !empty($contactDetails['notes']) ? $contactDetails['notes'] : '';
			




			$division	= !empty($contactDetails['division']) ? $contactDetails['division'] : '';
			$salesperson= !empty($contactDetails['lead_salescontact']) ? $contactDetails['lead_salescontact'] : '';
			$salesperson = str_replace("'", "''", $salesperson);
			
			$compaingnSource	= '';
			$sql		= "select * from qw.create_update_contact('$contactId','$customerId','','$firstName','$lastName','$jobTitle','$company', '$busphone', '$mblphone',
							'$email','$address','$street','$street2','$city','$state','$zip','$country',$contactType,$leadSource,'$compaingnSource','$title','$profileImg',
							'$linkedinUrl','$fax','$notes','$division','$salesperson') ";
			$records	= $CI->db->query($sql);
			$result		= $records->row();
			$result		= !empty($result->create_update_contact) ? $result->create_update_contact : '';
			$html	= '';
			if($result){
				$getAllContact	= contactList($customerId);
				if(!empty($getAllContact)){
					foreach($getAllContact as $contact){
						if(!empty($contact->firstname)){
							$value	= ucfirst($contact->firstname.' '.$contact->lastname);
							$sel	= (!empty($firstName) && (strtolower($email)==strtolower($contact->email)))?'selected':'';
							$html .= '<option value="'.$value.'" '.$sel.'> '.$value.' ['.$contact->email.']</option>';
						}
					}
				}
				$status	= "Yes"; $message	= "Contact Successfully Added.";
			}
			return $status;
		}
	}
	
	/**
	 * This function used for remove the contact based on contact id.
	 * 
	 * @Function	removeContact()
	 * @Param		contactId(int)
	 * @Created		18-08-2017
	 * @Return 		bollean
	 * */
	function removeContact($contactId=null){
		$CI	= & get_instance();
		if(!empty($contactId)){
			$sql		= "select * from qw.delete_contact('$contactId')";
			$results	= $CI->db->query($sql);
			$results	= $results->result();
			if($results){
				return $results;
			}return false;
		}return false;
	}
	
	/** This function used for Get Lookup value based on lokup id.
	 * @Function	getLookupValue()
	 * @Param		type(varchar),lookupId(int)
	 * @Created		21-08-2017
	 * @Return		string
	 * 
	 * */
	function getLookupValue($type=null,$lookupId=0){
		try{
			$CI	= & get_instance();
			if(!empty($type) && !empty($lookupId)){
				$sql		= "select * from qw.get_dwstaic_lookup('".$type."')";
				$records	= $CI->db->query($sql);
				$records	= $records->row();
				$results	= !empty($records->get_dwstaic_lookup) ? json_decode($records->get_dwstaic_lookup) : array();
				$returnValue= '';
				if(!empty($results)){
					foreach($results as $result){
						//echo $result->lookup_description;
						if(!empty($lookupId) && $lookupId==$result->lookup_id){
							$returnValue	= $result->lookup_description;
						}
					}
				}
				return $returnValue;
			}return false;
		}catch(Exception	$ex){
			log_message('Error','Unable to get lookup value based on lookup id '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for make and return excel format for returun.
	 * 
	 * @Function	makeFormatOfCustomersListForDownload()
	 * @Param		customersData(array())
	 * @Created		21-08-2017
	 * 
	 * */
	function makeFormatOfCustomersListForDownload($customersData=array()){
		if(!empty($customersData)){
			$newArray	= '';$i=0;
			foreach($customersData as $val){
				$companyName		= !empty($val->companyname) ? $val->companyname : '';$primaryContact	= !empty($val->primarycontact) ? $val->primarycontact : '';
				$parentAccount		= !empty($val->parentaccount) ? $val->parentaccount : '';$email			= !empty($val->email) ? $val->email : '';
				$relationshipType	= !empty($val->relationshiptype) ? $val->relationshiptype : 'N/A';
				$primaryContact		= !empty($val->primarycontact) ? $val->primarycontact : 'N/A';


				$mainPhone			= !empty($val->mainphone) ? $val->mainphone : '';$otherPhone			= !empty($val->otherphone) ? $val->otherphone : '';
				$fax				= !empty($val->fax) ? $val->fax : '';$website		= !empty($val->website) ? $val->website : '';
				$address1AddressType= !empty($val->address1_addresstype) ? $val->address1_addresstype : '';$address1Name		= !empty($val->address1_name) ? $val->address1_name : '';
				$address1Street1	= !empty($val->address1_street1) ? $val->address1_street1 : '';$address1Street2		= !empty($val->address1_street2) ? $val->address1_street2 : '';
				$address1Street3	= !empty($val->address1_street3) ? $val->address1_street3 : '';$address1City		= !empty($val->address1_city) ? $val->address1_city : '';
				$state				= !empty($val->address1_stateprovince) ? $val->address1_stateprovince : '';$zipcode		= !empty($val->address1_zippostalcode) ? $val->address1_zippostalcode : '';
				$country			= !empty($val->address1_countryregion) ? $val->address1_countryregion : '';$addressPhone= !empty($val->addressphone) ? $val->addressphone : '';
				$shipMethode		= !empty($val->address1_shippingmethod) ? $val->address1_shippingmethod : '';$freightTerms	= !empty($val->address1_freightterms) ? $val->address1_freightterms : '';
				$description		= !empty($val->description) ? $val->description : '';$industry			= !empty($val->industry) ? $val->industry : '';
				$annualRevenue		= !empty($val->annualrevenue) ? $val->annualrevenue : '';$noofEmployees	= !empty($val->noofemployees) ? $val->noofemployees : '';
				$sicCode			= !empty($val->siccode) ? $val->siccode : '';$ownership					= !empty($val->ownership) ? $val->ownership : '';
				$tickersymbol		= !empty($val->tickersymbol) ? $val->tickersymbol : '';$territory		= !empty($val->territory) ? $val->territory : '';
				$relationshipType	= !empty($val->relationshiptype) ? $val->relationshiptype : '';$category= !empty($val->category) ? $val->category : '';
				$currency			= !empty($val->currency) ? $val->currency : '';$creditLimit				= !empty($val->creditlimit) ? $val->creditlimit : '';
				$creditHold			= !empty($val->credithold) ? $val->credithold : '';$paymentTerms		= !empty($val->paymentterms) ? $val->paymentterms : '';
				$priceList			= !empty($val->pricelist) ? $val->pricelist : '';$owner					= !empty($val->owner) ? $val->owner : '';
				$preferRedMethodofContact	= !empty($val->preferredmethodofcontact) ? $val->preferredmethodofcontact : '';$donotAllowEmails		= !empty($val->donotallowemails) ? $val->donotallowemails : '';
				$donotAllowPhoneCalls		= !empty($val->donotallowphonecalls) ? $val->donotallowphonecalls : '';$donotAllowMails		= !empty($val->donotallowmails) ? $val->donotallowmails : '';
				$donotAllowBulkEmails		= !empty($val->donotallowbulkemails) ? $val->donotallowbulkemails : '';$donotAllowFaxes		= !empty($val->donotallowfaxes) ? $val->donotallowfaxes : '';
				$followEmailActivity		= !empty($val->followemailactivity) ? $val->followemailactivity : '';$originatingLead		= !empty($val->originatinglead) ? $val->originatinglead : '';
				$sendMarketIngMaterials		= !empty($val->sendmarketingmaterials) ? $val->sendmarketingmaterials : '';$preferRedDay	= !empty($val->preferredday) ? $val->preferredday : '';
				$preferRedTime		= !empty($val->preferredtime) ? $val->preferredtime : '';$preferRedService		= !empty($val->preferredservice) ? $val->preferredservice : '';
				$preferRedFacilityEquipment	= !empty($val->preferredfacilityequipment) ? $val->preferredfacilityequipment : '';$preferRedUser		= !empty($val->preferreduser) ? $val->preferreduser : '';
				$sageCustomerNumber		= !empty($val->sagecustomernumber) ? $val->sagecustomernumber : '';$baynets		= !empty($val->baynets) ? $val->baynets : '';
				$constructionSafety		= !empty($val->constructionsafety) ? $val->constructionsafety : '';$house		= !empty($val->house) ? $val->house : '';
				
				$incordPlay			= !empty($val->incordplay) ? $val->incordplay : '';$incordPlaySpecialty		= !empty($val->incordplayspecialty) ? $val->incordplayspecialty : '';
				$materialHandling	= !empty($val->materialhandling) ? $val->materialhandling : '';$specialty		= !empty($val->specialty) ? $val->specialty : '';
				$sports				= !empty($val->sports) ? $val->sports : '';$theatre		= !empty($val->theatre) ? $val->theatre : '';
				$distributor		= !empty($val->distributor) ? $val->distributor : '';$endUser			= !empty($val->enduser) ? $val->enduser : '';
				$termsCode			= !empty($val->termscode) ? $val->termscode : '';$nameofBroker		= !empty($val->nameofbroker) ? $val->nameofbroker : '';
				$shippingContact	= !empty($val->shippingcontact) ? $val->shippingcontact : '';$carrierShipvia		= !empty($val->carriershipvia) ? $val->carriershipvia : '';
				$carrierAccountNumber	= !empty($val->carrieraccountnumber) ? $val->carrieraccountnumber : '';$carrierContact		= !empty($val->carriercontact) ? $val->carriercontact : '';
				$crmGuid			= !empty($val->crm_guid) ? $val->crm_guid : '';$crmParentAcctid			= !empty($val->crm_parent_acctid) ? $val->crm_parent_acctid : '';
				$crmParentAcctName	= !empty($val->crm_parent_acctname) ? $val->crm_parent_acctname : '';$pricingTier		= !empty($val->pricing_tier) ? $val->pricing_tier : '';
				$activeFlag			= !empty($val->active_flag) ? $val->active_flag : '';$accountNumber		= !empty($val->accountnumber) ? $val->accountnumber : '';
				$division			= !empty($val->division) ? $val->division : '';$salesperson			= !empty($val->salesperson) ? $val->salesperson : '';
				if(!empty($companyName) && !empty($accountNumber)){
					$newArray[$i]['Company Name#']	= $companyName;$newArray[$i]['Primary Contact']= $primaryContact;$newArray[$i]['Parent Account']= $parentAccount;
					$newArray[$i]['Email']	= $email;$newArray[$i]['Main Phone']= $mainPhone;$newArray[$i]['Other Phone']= $otherPhone;
					$newArray[$i]['Fax']	= $fax;$newArray[$i]['Website']= $website;$newArray[$i]['Address Type']= $address1AddressType;
					$newArray[$i]['Address1 Name']	= $address1Name;$newArray[$i]['Address1 Street1']	= $address1Street1;$newArray[$i]['Address1 Street2']= $address1Street2;$newArray[$i]['Address1 Street3']= $address1Street3;

					$newArray[$i]['Address1 City']	= $address1City;$newArray[$i]['Address1 State']= $state;$newArray[$i]['Address1 Zipcode']= $zipcode;
					$newArray[$i]['Address1 Country']	= $country;$newArray[$i]['Address Phone']= $addressPhone;$newArray[$i]['Address1 Shipping Method']= $shipMethode;
					$newArray[$i]['Address1 Freight Terms']	= $freightTerms;$newArray[$i]['Description']= $description;$newArray[$i]['Industry']= $industry;
					$newArray[$i]['Annual Revenue']	= $annualRevenue;$newArray[$i]['No Of Employees']= $noofEmployees;$newArray[$i]['Siccode']= $sicCode;
					$newArray[$i]['Ownership']	= $ownership;$newArray[$i]['Tickersymbol']= $tickersymbol;$newArray[$i]['Territory']= $territory;
					$newArray[$i]['Relationship Type']	= $relationshipType;$newArray[$i]['Category']= $category;$newArray[$i]['Currency']= $currency;
					$newArray[$i]['Credit Limit']	= $creditLimit;$newArray[$i]['CreditHold']= $creditHold;$newArray[$i]['Payment Terms']= $paymentTerms;
					$newArray[$i]['Price List']	= $priceList;$newArray[$i]['Owner']= $owner;$newArray[$i]['PreferredMethodofContact']= $preferRedMethodofContact;
					$newArray[$i]['DonotAllowEmails']	= $donotAllowEmails;$newArray[$i]['DonotAllowPhoneCalls']= $donotAllowPhoneCalls;$newArray[$i]['DonotAllowMails']= $donotAllowMails;
					$newArray[$i]['DonotAllowBulkEmails']	= $donotAllowBulkEmails;$newArray[$i]['DonotAllowFaxes']= $donotAllowFaxes;$newArray[$i]['FollowEmailActivity']= $followEmailActivity;
					$newArray[$i]['OriginatingLead']	= $originatingLead;$newArray[$i]['SendMarketingMaterials']= $sendMarketIngMaterials;$newArray[$i]['PreferRedday']= $preferRedDay;
					$newArray[$i]['PreferRedTime']	= $preferRedTime;$newArray[$i]['PreferRedService']= $preferRedService;$newArray[$i]['PreferRedFacilityEquipment']= $preferRedFacilityEquipment;
					$newArray[$i]['PreferRedUser']	= $preferRedUser;$newArray[$i]['SageCustomerNumber']= $sageCustomerNumber;$newArray[$i]['Baynets']= $baynets;
					$newArray[$i]['ConstructionSafety']	= $constructionSafety;$newArray[$i]['House']= $house;$newArray[$i]['Incordplay']= $incordPlay;
					
					$newArray[$i]['IncordPlaySpecialty']	= $incordPlaySpecialty;$newArray[$i]['MaterialHandling']= $materialHandling;$newArray[$i]['Specialty']= $specialty;
					$newArray[$i]['Sports']	= $sports;$newArray[$i]['Theatre']= $theatre;$newArray[$i]['Distributor']= $distributor;
					$newArray[$i]['Enduser']	= $endUser;$newArray[$i]['Termscode']= $termsCode;$newArray[$i]['NameofBroker']= $nameofBroker;
					$newArray[$i]['ShippingContact']	= $shippingContact;$newArray[$i]['CarrierShipvia']= $carrierShipvia;$newArray[$i]['CarrierAccountNumber']= $carrierAccountNumber;
					$newArray[$i]['CarrierContact']	= $carrierContact;$newArray[$i]['CRM Guid']= $crmGuid;$newArray[$i]['CRM Parent Account Id']= $crmParentAcctid;
					$newArray[$i]['CRM Parent Account Name']	= $crmParentAcctName;$newArray[$i]['Pricing Tier']= $pricingTier;$newArray[$i]['Active Flag']= $activeFlag;
					$newArray[$i]['AccountNumber']	= $accountNumber;$newArray[$i]['Division']= $division;$newArray[$i]['Salesperson']= $salesperson;
					$i++;
				}else{
					break;
				}
				
			}
			return $newArray;
		}
	}
	
	/**
	 * This function used for make and return excel format for returun.
	 * 
	 * @Function	makeFormatOfWorkTicketForDownload()
	 * @Param		salesorderData(array())
	 * @Created		20-11-2017
	 * 
	 * */
	function makeFormatOfWorkTicketForDownload($salesorder_data=array()){ 
		if(!empty($salesorder_data)){
			$newArray	= '';$i=0;
			foreach($salesorder_data as $val){
				$salesOrder		= !empty($val->salesorderno) ? $val->salesorderno : '';
				$lineKey		= !empty($val->jt158_wtparentlinekey) ? $val->jt158_wtparentlinekey : 'N/A';
				$wtStep			= !empty($val->jt158_wtstep) ? $val->jt158_wtstep : 'N/A';
				$wareHouseCode	= !empty($val->warehousecode) ? $val->warehousecode : '0';
				$itemCode		= !empty($val->itemcode) ? $val->itemcode : 'N/A';
				$itemCodeDesc	= !empty($val->itemcodedesc) ? $val->itemcodedesc : 'N/A';
				$activityCode	= !empty($val->udf_activity_code) ? $val->udf_activity_code : 'N/A'; 
				$activityDesc   = !empty($val->udf_activity_description) ? $val->udf_activity_description : 'N/A'; 
				$jobStatus		= !empty($val->jobstatus) ? $val->jobstatus : 'Not Started';
				$actualQTY 		= !empty($val->quantityused) ? $val->quantityused : '0'; 
				$estimatedQTY 	= !empty($val->quantityorderedoriginal) ? $val->quantityorderedoriginal : '0'; 
				$unitsOfMeasure	= !empty($val->uom) ? $val->uom : 'N/A';
				$actualTime		= !empty($val->timetaken) ? $val->timetaken : 'N/A';
				$estimatedTime  = !empty($val->timetakenest) ? $val->timetakenest : 'N/A';
				$lotbatchNumber	= !empty($val->lotbatchno) ? $val->lotbatchno : 'N/A';
				$comments		= !empty($val->comments) ? $val->comments : 'N/A';
				$updateBy		= !empty($val->updateby) ? $val->updateby : 'N/A';
				$updateOn		= !empty($val->updateon) ? $val->updateon : 'N/A';
				/* Making Return array */	
				$newArray[$i]['SalesOrder#'] 		= $salesOrder;
				$newArray[$i]['LineKey'] 	 		= $lineKey;
				$newArray[$i]['Step'] 	 			= $wtStep;
				$newArray[$i]['WHCode']  	 		= $wareHouseCode;
				$newArray[$i]['ItemCode']  	 		= $itemCode;
				$newArray[$i]['ItemCodeDesc']		= $itemCodeDesc;
				$newArray[$i]['ActivityCode']		= $activityCode;
				$newArray[$i]['ActivityDesc']		= $activityDesc;
				$newArray[$i]['JobStatus']	 		= $jobStatus;
				$newArray[$i]['ActualQuantity']		= $actualQTY;
				$newArray[$i]['EstimatedQuantiy']	= $estimatedQTY;
				$newArray[$i]['UOM']				= $unitsOfMeasure;
				$newArray[$i]['TimeTaken']			= $actualTime;
				$newArray[$i]['EstimatedTime']		= $estimatedTime;
				$newArray[$i]['LotBatchNumber']		= $lotbatchNumber;
				$newArray[$i]['Comments']			= $comments;
				$newArray[$i]['UpdateBy']			= $updateBy;
				$newArray[$i]['UpdateOn']			= $updateOn;
				$i++;
			}
			return $newArray;
		}
	}
	
	/**
	 * This function used for make and return excel format for returun.
	 * 
	 * @Function	makeFormatOfContactsListForDownload()
	 * @Param		contactsData(array())
	 * @Created		21-08-2017
	 * 
	 * */
	function makeFormatOfContactsListForDownload($contactsData=array()){
		if(!empty($contactsData)){
			$newArray	= '';$i=0;
			foreach($contactsData as $val){
				$salutation		= !empty($val->salutation) ? $val->salutation : '';
				$firstname		= !empty($val->firstname) ? $val->firstname : '';
				$middlename		= !empty($val->middlename) ? $val->middlename : '';
				$lastname		= !empty($val->lastname) ? $val->lastname : '';
				$name			= !empty($firstname) ? $firstname.' '.$lastname : '';

				$jobtitle		= !empty($val->jobtitle) ? $val->jobtitle : '';
				$companyName	= !empty($val->companyname) ? $val->companyname : '';


				$businessphone	= !empty($val->businessphone) ? $val->businessphone : '';
				$homephone		= !empty($val->homephone) ? $val->homephone : '';
				$mobilephone	= !empty($val->mobilephone) ? $val->mobilephone : '';
				$fax			= !empty($val->fax) ? $val->fax : '';
				$email			= !empty($val->email) ? $val->email : 'N/A';
				$addressType	= !empty($val->address1_addresstype) ? $val->address1_addresstype : '';
				$address1Name	= !empty($val->address1_name) ? $val->address1_name : '';
				$address1Street1= !empty($val->address1_street1) ? $val->address1_street1 : '';
				$address1Street2= !empty($val->address1_street2) ? $val->address1_street2 : '';
				$address1Street3= !empty($val->address1_street3) ? $val->address1_street3 : '';
				$city			= !empty($val->address1_city) ? $val->address1_city : '';
				$state			= !empty($val->address1_stateprovince) ? $val->address1_stateprovince : '';
				$zip			= !empty($val->address1_zip) ? $val->address1_zip : '';
				$country		= !empty($val->address1_country) ? $val->address1_country : '';
				$addressPhone	= !empty($val->address1_phone) ? $val->address1_phone : '';
				$address1FreightTerms	= !empty($val->address1_freightterms) ? $val->address1_freightterms : '';
				$address1ShippingMethod	= !empty($val->address1_shippingmethod) ? $val->address1_shippingmethod : '';
				$description	= !empty($val->description) ? $val->description : '';
				$department		= !empty($val->department) ? $val->department : '';
				$manager		= !empty($val->manager) ? $val->manager : '';
				$creditLimit	= !empty($val->creditlimit) ? $val->creditlimit : '';
				$paymentTerms	= !empty($val->paymentterms) ? $val->paymentterms : '';
				$crmContactid	= !empty($val->crm_contactid) ? $val->crm_contactid : '';
				$lastUpdatedon	= !empty($val->lastupdatedon) ? $val->lastupdatedon : '';
				$crmAccountid	= !empty($val->crm_accountid) ? $val->crm_accountid : '';
				$activeFlag		= !empty($val->active_flag) ? $val->active_flag : '';
				$contactType	= !empty($val->contact_type) ? $val->contact_type : '';
				$leadSource		= !empty($val->lead_source) ? $val->lead_source : '';
				$campaignSource	= !empty($val->campaign_source) ? $val->campaign_source : '';
				$linkedinUrl	= !empty($val->linkedin_url) ? $val->linkedin_url : '';
				$notes			= !empty($val->notes) ? $val->notes : '';
				$division		= !empty($val->division) ? $val->division : '';
				$salesperson	= !empty($val->salesperson) ? $val->salesperson : '';
				$accountNumber	= !empty($val->accountnumber) ? $val->accountnumber : '';
				$relationShiptype	= !empty($val->relationshiptype) ? $val->relationshiptype : '';
				
				/* Making Return array */
				$newArray[$i]['Salutation']	= $salutation;$newArray[$i]['First Name']	= $firstname;$newArray[$i]['Middle Name']	= $middlename;$newArray[$i]['Last Name']	= $lastname;
				
				$newArray[$i]['Job Title']	= $jobtitle;$newArray[$i]['Company Name']	= $companyName;$newArray[$i]['Business Phone']	= $businessphone;$newArray[$i]['Home Phone']	= $homephone;
				
				$newArray[$i]['Mobile Phone']	= $mobilephone;$newArray[$i]['Fax']	= $fax;$newArray[$i]['Email']	= $email;$newArray[$i]['Address Type']	= $addressType;
				
				$newArray[$i]['Address1 Name']	= $address1Name;$newArray[$i]['Address1Street1']	= $address1Street1;$newArray[$i]['Sddress1Street2']	= $address1Street2;$newArray[$i]['Address1Street3']	= $address1Street3;

				
				$newArray[$i]['City']	= $city;$newArray[$i]['State']	= $state;$newArray[$i]['Zip Code']	= $zip;$newArray[$i]['Country']	= $country;
				
				$newArray[$i]['AddressPhone']	= $addressPhone;$newArray[$i]['Address1FreightTerms']	= $address1FreightTerms;$newArray[$i]['Address1ShippingMethod']	= $address1ShippingMethod;$newArray[$i]['description']	= $description;
				
				$newArray[$i]['Department']	= $department;$newArray[$i]['Manager']	= $manager;$newArray[$i]['CreditLimit']	= $creditLimit;$newArray[$i]['PaymentTerms']	= $paymentTerms;
				
				$newArray[$i]['CRM Contacti Id']	= $crmContactid;$newArray[$i]['Last Updated On']	= $lastUpdatedon;$newArray[$i]['CRM Account Id']	= $name;$newArray[$i]['Active Flag']	= $activeFlag;
				
				$newArray[$i]['Contact Type']	= $contactType;$newArray[$i]['LeadSource']	= $leadSource;$newArray[$i]['Campaign Source']	= $campaignSource;$newArray[$i]['Linkedin Url']	= $linkedinUrl;
				
				$newArray[$i]['Notes']	= $notes;$newArray[$i]['Division']	= $division;$newArray[$i]['SalesPerson']	= $salesperson;$newArray[$i]['Account Number']	= $accountNumber;$newArray[$i]['Relationship Type']	= $relationShiptype;
				
				$i++;
				
			}
			return $newArray;
		}
	}
	
	/**
	 * This function used for get country with country code.
	 * 
	 * @Function	getAllCountry()
	 * @Param		void(0)
	 * @Created		24-08-2017
	 * 
	 * */
	function getAllCountry(){
		try{
			$CI	= & get_instance();
			$sql	= "select * from qw.get_country_codes('all')";
			$results	= $CI->db->query($sql);
			$results	= $results->row();
			$countries	= !empty($results->get_country_codes) ? json_decode($results->get_country_codes) :array();
			if(!empty($countries)){
				return $countries;
			}return false;
		}catch(Exception $ex){
			log_message('Error','Unable to get all country '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for add activity of a contact.
	 * 
	 * @Function	addContactActivity()
	 * @param		activityData. array()
	 * @Created		01-09-2017
	 * 
	 * */
	function addContactActivity($activityData=array()){
		$CI	= & get_instance();
		if(!empty($activityData)){
			$loginUser			= $CI->session->userdata('frontendUserName');
			$activityId			= !empty($activityData['crm_activity_id']) ? $activityData['crm_activity_id'] : 0;
			$crmAccountId		= !empty($activityData['crm_account_id']) ? $activityData['crm_account_id'] : '';
			$category			= !empty($activityData['activity_category']) ? $activityData['activity_category'] : '';
			$subCategory		= '';
			$activityDatetime	= !empty($activityData['activity_date_time']) ? $activityData['activity_date_time'] : '';
			$activitySubject	= !empty($activityData['activity_subject']) ? $activityData['activity_subject'] : '';
			$activityNotes		= !empty($activityData['activity_notes']) ? $activityData['activity_notes'] : '';
			
			$followupFlag		= !empty($activityData['activity_followup']) ? $activityData['activity_followup'] : 0;
			$dueDate			= !empty($activityData['activity_due_date']) ? $activityData['activity_due_date'] : '';
			
			$sql		= "select * from qw.create_update_activity('$activityId','$crmAccountId','$category','$subCategory','$activityDatetime','$activitySubject',
							'$activityNotes',$followupFlag,'$dueDate','$loginUser')";
			$result		= $CI->db->query($sql);
			$result		= $result->row();
			$finalResult	= !empty($result->create_update_activity) ? $result->create_update_activity : '';
			if(!empty($finalResult)){
				return true;
			}return false;
		}return false;
	}

	/**
	 * This function used for get salesperon quote details with status based on salesperson id.
	 * 
	 * @Function	dashboardData()
	 * @Param		salesperson(int)
	 * @Created		12-09-2107
	 * @Return		array()
	 * 
	 * */
	function dashboardData($salesperson=null){
		$CI			= & get_instance();
		if(!empty($salesperson) && is_numeric($salesperson)){
			$sql		= "select * from qw.get_quote_stats('$salesperson')";
			$result		= $CI->db->query($sql);
			$result		= $result->row();
			$finalResult	= !empty($result->get_quote_stats) ? json_decode($result->get_quote_stats) : '';
			if(!empty($finalResult)){
				return $finalResult;
			}return false;
		}
		return false;
	}
	
	
	/**
	 * This function used for get activity (Interaction) based on Account Id,Sage Number, Contact Id.
	 * 
	 * @Function	getInteractions()
	 * @Param		accountId
	 * @Created		14-09-2017
	 * 
	 * */
	function getInteractions($accountId=null){
		try{
			$CI			= & get_instance();
			if(!empty($accountId)){
				$sql		= "select * from qw.get_all_crm_activity('$accountId')";
				$result		= $CI->db->query($sql);
				$result		= $result->row();
				$finalResult	= !empty($result->get_all_crm_activity) ? json_decode($result->get_all_crm_activity) : '';
				if(!empty($finalResult)){
					return $finalResult;
				}return false;
			}
			return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get customer/contact interaction '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for get a particular customer based on account id.
	 * 
	 * @Function	getCustomerBasedOnAccountId()
	 * @Param		accountId(int)
	 * @Created		12-09-2017
	 * @Return		array()
	 * 
	 * */
	function getCustomerBasedOnAccountId($accountId=null){
		try{
			$CI	= & get_instance();
			if(!empty($accountId)){
				$sql="select * from qw.get_all_customer('$accountId')";
				$value	= '';
				$results	= $CI->db->query($sql);
				$results	= $results->row();
				if(!empty($results)){
					$results= !empty($results->get_all_customer) ? json_decode($results->get_all_customer) : '';
					//dump($results);die;
					if(!empty($results)){
						return $results[0];
					}return false;
				}
				return false;
			}
		}catch(Exception	$ex){
			log_message('error','Unable to get customer result basis on account ID');
		}
	}
	
	
	
	/**
	 * This function used for get available quantity of item code based on Item Code.
	 * 
	 * @Function	getAvailableQuantityOfItemCode()
	 * @Param		itemCode
	 * @Created		15-09-2017
	 * @Return		array()
	 * 
	 * */
	function getAvailableQuantityOfItemCode($itemCode=null){
		try{
			$CI	= & get_instance();
			if(!empty($itemCode)){
				$sql	="select * from qw.get_item_stock2('$itemCode')";
				$results	= $CI->db->query($sql);
				$results	= $results->row();
				
				if(!empty($results)){
					$results= !empty($results->get_item_stock2) ? json_decode($results->get_item_stock2) : '';
					if(!empty($results)){
							$current	= !empty($results[0]->itemdesc) ? $results[0]->itemdesc : '';
							$alternate	= !empty($results[1]->itemdesc) ? $results[1]->itemdesc : '';
						
						//$quantity		= !empty($results[0]->available_qty) ? $results[0]->available_qty : 0;
						//$description	= !empty($results[0]->itemdesc) ? $results[0]->itemdesc : '';
						//return array('quantity'=>$quantity,'description'=>$description);
						return array('current'=>$current,'alternate'=>$alternate);
					}return false;
				}
				return false;
			}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get available quantity based on item code');
		}
	}
	
	/**
	 * This function used for get annual revenue.
	 * 
	 * @Function	getRevenueByMonth()
	 * @Param		void(0)
	 * @Created		23-09-2107
	 * 
	 * */
	function getRevenueByMonth(){
		try{
			$CI	= & get_instance();
			$sql		= "select * from qw.get_ytd_revenue('all')";
			$results	= $CI->db->query($sql);
			$results	= $results->row();
			if(!empty($results)){
				$results= !empty($results->get_ytd_revenue) ? json_decode($results->get_ytd_revenue) : '';
				if(!empty($results)){
					return $results;
				}return false;
			}
			return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get YTD revenue');
		}
	}
	
	
	function division($division, $array) {
		$result = -1;
		for($i=0; $i<sizeof($array); $i++) {
			if ($array[$i]->division == $division) {
				$result = $i;
				break;
			}
		}
		return $result;
	}
	
	function getArraySumValue($data=array()){
		$returnArray	= array();
		if(!empty($data)){
			foreach($data as $j=>$k){
				$j	= str_replace("'","-",$j);
				$returnArray[$j] = array_sum($k);
			}
		}
		return $returnArray;
	}
	
	/**
	 * This function used for get full address based on zipcode.
	 * 
	 * @Function	getFullAddressByZipcode()
	 * @Param		zipcode
	 * @Created		28-09-2017
	 * @Return		array();
	 * 
	 * */
	
	function getFullAddressByZipcode($zipcode=null){
		try{
			$CI	= & get_instance();
			if(!empty($zipcode)){
				$sql		= "select * from qw.get_zip_codes('$zipcode')";
				$results	= $CI->db->query($sql);
				$results	= $results->row();
				if(!empty($results)){
					$results= !empty($results->get_zip_codes) ? json_decode($results->get_zip_codes) : '';
					if(!empty($results)){
						return $results[0];
					}return false;
				}
				return false;
			}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get full address based on zip code');
		}
	}
	
	
	/**
	 * This function used for make and return excel format for returun.
	 * 
	 * @Function	makeFormatOfOrdersListForDownload()
	 * @Param		ordersData(array())
	 * @Created		03-10-2017
	 * 
	 * */
	function makeFormatOfOrdersListForDownload($ordersData=array()){
		if(!empty($ordersData)){
			//dump($ordersData);die;
			$newArray	= '';$i=0;
			foreach($ordersData as $order){
				$salesOrder		= !empty($order->salesorderno) ? $order->salesorderno : '';
				$customerName	= !empty($order->customername) ? $order->customername : '';
				$wtClass		= !empty($order->wt_class) ? $order->wt_class : '';
				$arDivisionNo	= !empty($order->ardivisionno) ? $order->ardivisionno : '';
				$customerno		= !empty($order->customerno) ? $order->customerno : '';
				$salespersonName= !empty($order->salespersonname) ? $order->salespersonname : '';
				$customerName	= !empty($order->customername) ? $order->customername : '';
				$shipExpireDate	= !empty($order->shipexpiredate) ? explode('T',$order->shipexpiredate) : '';
				$amount			= !empty($order->amount) ? $order->amount : '00';
				$weight			= !empty($order->weight) ? $order->weight : '00';
				$shipVia		= !empty($order->shipvia) ? $order->shipvia : '';
				$freightAmt		= !empty($order->freightamt) ? $order->freightamt : '00';
				$orderStatus	= !empty($order->orderstatus) ? $order->orderstatus : '';
				$warehousecode	= !empty($order->warehousecode) ? $order->warehousecode : '';
				$expireShipDate	= !empty($shipExpireDate[0]) ? date_format(date_create($shipExpireDate[0]),'d-M-Y') : 'N/A';
				$orderStatusDisplay	= '';
				if(!empty($orderStatus) && $orderStatus=='O'){
					$orderStatusDisplay		= 'Open';
				}
				if(!empty($orderStatus) && $orderStatus=='H'){
					$orderStatusDisplay		= 'Hold';
				}
				if(!empty($orderStatus) && $orderStatus=='C'){
					$orderStatusDisplay		= 'Close';
				}
				/* Making Return array */
				$newArray[$i]['Sales Order#']	= $salesOrder;
				$newArray[$i]['Customer Name']	= $customerName;
				$newArray[$i]['WT Class']		= $wtClass;
				$newArray[$i]['Division']		= $arDivisionNo;
				$newArray[$i]['Amount']			= $amount;
				$newArray[$i]['Freight']		= $freightAmt;
				$newArray[$i]['Order Status']	= $orderStatusDisplay;
				$newArray[$i]['Shipping Location']	= $warehousecode;
				$newArray[$i]['Ship Expire']	= $expireShipDate;
				$newArray[$i]['Ship Via']		= $shipVia;
				$newArray[$i]['Weight']			= $weight;
				$i++;
				
			}
			return $newArray;
		}
	}
	
	/**
	 * This function used for make and return excel format for returun.
	 * 
	 * @Function	makeFormatOfOrdersListForDownload()
	 * @Param		ordersData(array())
	 * @Created		03-10-2017
	 * 
	 * */
	function makeFormatOfItemsListForDownload($itemsData=array()){
		if(!empty($itemsData)){
			//dump($ordersData);die;
			$newArray	= '';$i=0;
			foreach($itemsData as $item){
				$itemCode			= !empty($item->itemcode) ? $item->itemcode : '';
				$itemodedesc		= !empty($item->itemcodedesc) ? $item->itemcodedesc : '';
				$productline		= !empty($item->productline) ? $item->productline : '';
				$productlineDesc	= !empty($item->productlinedesc) ? $item->productlinedesc : '';
				$producttype		= !empty($item->producttype) ? $item->producttype : '';
				$producttypeDesc	= !empty($item->producttypedesc) ? $item->producttypedesc : '';
				$procurementtype	= !empty($item->procurementtype) ? $item->procurementtype : '';
				$procurementtypeDesc= !empty($item->procurementtypedesc) ? $item->procurementtypedesc : '';
				$standardUnitPrice	= !empty($item->standardunitprice) ? $item->standardunitprice : '';
				$standardUnitCost	= !empty($item->standardunitcost) ? $item->standardunitcost : '';
				$uom				= !empty($item->standardunitofmeasure) ? $item->standardunitofmeasure : '';
				$vendor				= !empty($item->primaryvendorno) ? $item->primaryvendorno : '';
				$category1			= !empty($item->category1) ? $item->category1 : '';
				$category2			= !empty($item->category2) ? $item->category2 : '';
				$category3			= !empty($item->category3) ? $item->category3 : '';
				$category4			= !empty($item->category4) ? $item->category4 : '';
				$inventoryCycle		= !empty($item->inventorycycle) ? $item->inventorycycle : '';
				$warehouse			= !empty($item->defaultwarehousecode) ? $item->defaultwarehousecode : 'N/A';
				$itemType			= !empty($item->itemtype) ? $item->itemtype : 'N/A';
				$shipWeight			= !empty($item->shipweight) ? $item->shipweight : '';
				$udfPurchDesc		= !empty($item->udf_purch_descript) ? $item->udf_purch_descript : '';
				$buyerCode			= !empty($item->buyercode) ? $item->buyercode : '';
				$udfPrevItemNum		= !empty($item->udf_prev_item_num) ? $item->udf_prev_item_num : '';
				$imgLocation		= !empty($item->img_location) ? $item->img_location : 'N/A';

				/* Making Return array */
				$newArray[$i]['Item Code']			= $itemCode;
				$newArray[$i]['Item Description']	= $itemodedesc;
				$newArray[$i]['Product Line']		= $productline;
				$newArray[$i]['Product Line Description']		= $productlineDesc;
				$newArray[$i]['Product Type']		= $producttype;
				$newArray[$i]['Product Type Description']		= $producttypeDesc;
				$newArray[$i]['Procurement Type']	= $procurementtype;
				$newArray[$i]['Procurement Type Description']	= $procurementtypeDesc;
				$newArray[$i]['Standard Unit Price']	= $standardUnitPrice;
				$newArray[$i]['Standard Unit Cost']	= $standardUnitCost;
				$newArray[$i]['Standard Unit Of Measure']	= $uom;
				$newArray[$i]['Primary VendorNo']	= $vendor;
				$newArray[$i]['Category1']		= $category1;
				$newArray[$i]['Category2']		= $category2;
				$newArray[$i]['Category3']		= $category3;
				$newArray[$i]['Category4']		= $category4;
				$newArray[$i]['Inventory Cycle']	= $vendor;
				$newArray[$i]['Default Warehouse']	= $warehouse;
				$newArray[$i]['Item Type']			= $itemType;
				$newArray[$i]['ShipWeight']			= $shipWeight;
				$newArray[$i]['UdfPurchDescript']	= $udfPurchDesc;
				$newArray[$i]['BuyerCode']			= $buyerCode;
				$newArray[$i]['UdfPrevItemNum']		= $udfPrevItemNum;
				$newArray[$i]['Imgage Location']	= $imgLocation;
				$i++;
			}
			return $newArray;
		}
	}
	
	/**
	 * This function used for get activity code.
	 * 
	 * @Function	getActicityCodes()
	 * @Param		void(0)
	 * @Created		06-10-2017
	 * @Return		array()
	 * 
	 * */
	function getActicityCodes(){
		try{
			$CI	= & get_instance();
				$sql		= "select * from qw.get_activity_codes()";
				$results	= $CI->db->query($sql);
				$results	= $results->row();
				if(!empty($results)){
					$results= !empty($results->get_activity_codes) ? json_decode($results->get_activity_codes) : '';
					if(!empty($results)){
						return $results;
					}return false;
				}
				return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get activity code '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for get Option types.
	 * 
	 * @Function	getOptionTypes()
	 * @Param		void(0)
	 * @Created		06-10-2017
	 * @Return		array()
	 * 
	 * */
	function getOptionTypes(){
		try{
			$CI	= & get_instance();
				$sql		= "select * from qw.get_product_option_type('all')";
				$results	= $CI->db->query($sql);
				$results	= $results->row();
				if(!empty($results)){
					$results= !empty($results->get_product_option_type) ? json_decode($results->get_product_option_type) : '';
					if(!empty($results)){
						return $results;
					}return false;
				}
				return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get Option types '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for get item code.
	 * 
	 * @Function	getItemCodes()
	 * @Param		void(0)
	 * @Created		10-10-2017
	 * @Return		array()
	 * 
	 * */
	function getItemCodes($keyword='all'){
		try{
			$value	= '';
			if(!empty($keyword)){
				$CI		= & get_instance();
				$sql		= "select * from qw.get_all_items('$keyword')";
				$results	= $CI->db->query($sql);
				$results	= $results->row();
				if(!empty($results)){
					$results	= !empty($results->get_all_items) ? json_decode($results->get_all_items) : array();
					if(!empty($results)){
						foreach($results as $result){
							if(!empty($result->itemcode)){
								$value[]	= $result->itemcode;
							}
						}
					}else{
						$value[]	= 'No Record Found !';
					}
				}
				return $value;
			}
		}catch(Exception	$ex){
			log_message('error','Unable to get Option types '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for get vendor no.
	 * 
	 * @Function	getVendorNo()
	 * @Param		void(0)
	 * @Created		02-08-2018
	 * @Return		array()
	 * 
	 * */
	function getVendorCodeNo($keyword='all'){
		try{
			$value	= '';
			if(!empty($keyword)){
				$CI		= & get_instance();
				$sql		= "select * from qw.get_all_vendors('$keyword')";
				$results	= $CI->db->query($sql);
				$results	= $results->row();
				if(!empty($results)){
					$results	= !empty($results->get_all_vendors) ? json_decode($results->get_all_vendors) : array();
					if(!empty($results)){
						foreach($results as $result){
							if(!empty($result->primaryvendorno)){
								$value[]	= $result->primaryvendorno;
							}
						}
					}else{
						$value[]	= 'No Record Found !';
					}
				}
				return $value;
			}
		}catch(Exception	$ex){
			log_message('error','Unable to get Option types '.$ex->getMessage());
		}
	}
		
	/**
	 * This function used for creating Survey.
	 * 
	 * @Function	createSurvey()
	 * @Param		surveyDetail array
	 * @Created		12-1-2017
	 * @Return		string
	 * 
	 * */
	function createSurvey($surveyDetails=0){
		$CI	= & get_instance();
		$status		= 'No';$message	= 'Something wrong!.';
		$userId		= $CI->session->userdata('frontendUserName');
		if(!empty($surveyDetails) && is_array($surveyDetails)){
			
				$customer		= str_replace('&', 'and', (!empty($surveyDetails['customer']) ? $surveyDetails['customer'] : '')); 
				$summary	= !empty($surveyDetails['summary']) ? $surveyDetails['summary'] : ''; 
				$summary = str_replace("'", "''", $summary); 

				$recommend	= !empty($surveyDetails['recommend']) ? $surveyDetails['recommend'] : '';
				$recommend = str_replace("'", "''", $recommend); 

				$user_id	= !empty($surveyItemDetails['user_id']) ? $surveyItemDetails['user_id'] : $userId;
				$survey_date	= !empty($surveyDetails['survey_date']) ? $surveyDetails['survey_date'] : '';
				$survey_id		= !empty($surveyDetails['survey_id']) ? $surveyDetails['survey_id'] : '0';

				$sql		= "select * from qw.create_survey('$survey_id','$customer','$userId','$survey_date', '$summary', '$recommend') ";
			$records	= $CI->db->query($sql);
			$result		= $records->row();
			return $result;	
		}
	}
	
	/**
	 * This function used to create and update surveyitems.
	 * 
	 * @Function	createUpdateSurveyItem()
	 * @Param		surveyItemDetails array & status var 
	 * @Created		10-10-2017
	 * @Return		string
	 * 
	 * */
	function createUpdateSurveyItem($surveyItemDetails=0, $st=0){
		$CI	= & get_instance();
		$status		= 'No';$message	= 'Something wrong!.';
		$userId		= $CI->session->userdata('frontendUserName');
		if(!empty($surveyItemDetails) && is_array($surveyItemDetails)){
			
				$item_name		= !empty($surveyItemDetails['item_name']) ? $surveyItemDetails['item_name'] : '';		
				$quantity		= !empty($surveyItemDetails['quantity']) ? $surveyItemDetails['quantity'] : '0';
				$no_posts		= !empty($surveyItemDetails['no_posts']) ? $surveyItemDetails['no_posts'] : '0';
				$no_ropes		= !empty($surveyItemDetails['no_ropes']) ? $surveyItemDetails['no_ropes'] : '0';	
				$item_length		= !empty($surveyItemDetails['item_length']) ? $surveyItemDetails['item_length'] : '0';
				$item_height		= !empty($surveyItemDetails['item_height']) ? $surveyItemDetails['item_height'] : '0';	
				$net_material		= str_replace('&', ' ', (!empty($surveyItemDetails['net_material']) ? $surveyItemDetails['net_material'] : 'N/A'));
				$lash_material		= str_replace('&', ' ', (!empty($surveyItemDetails['lash_material']) ? $surveyItemDetails['lash_material'] : 'N/A'));
				$rope_material		= str_replace('&"', ' ', (!empty($surveyItemDetails['rope_material']) ? $surveyItemDetails['rope_material'] : 'N/A'));
				$border_material	= str_replace('&"', ' ', (!empty($surveyItemDetails['border_material']) ? $surveyItemDetails['border_material'] : 'N/A'));
				$shape	= !empty($surveyItemDetails['shape']) ? $surveyItemDetails['shape'] : '0';
				$drawing	= !empty($surveyItemDetails['drawing']) ? $surveyItemDetails['drawing'] : '0';
				$drawing_pg	= !empty($surveyItemDetails['drawing_pg']) ? $surveyItemDetails['drawing_pg'] : '0';
				$notes	= !empty($surveyItemDetails['notes']) ? $surveyItemDetails['notes'] : '';
				$notes = str_replace("'", "''", $notes);

				$user_id	= !empty($surveyItemDetails['user_id']) ? $surveyItemDetails['user_id'] : $userId;
				$profile_img	= !empty($surveyItemDetails['profile_img']) ? $surveyItemDetails['profile_img'] : '';
				$condition	= !empty($surveyItemDetails['condition']) ? $surveyItemDetails['condition'] : '0';
				$item_id		= !empty($surveyItemDetails['item_id']) ? $surveyItemDetails['item_id'] : '0';
				$survey_id		= !empty($surveyItemDetails['survey_id']) ? $surveyItemDetails['survey_id'] : '0';

			$sql		= "select * from qw.create_update_surveyitem('$survey_id','$item_id','$item_name','$quantity','$net_material','$lash_material', '$rope_material', '$border_material',
							'$condition','$item_length','$item_height','$shape','$drawing','$drawing_pg','$notes','$profile_img','$no_posts','$no_ropes',$st) ";
			$records	= $CI->db->query($sql);
			$result		= $records->row();
			return $result;	

		}
	}
	
	/*Delete Survey*/
	function deleteSurvey($survey_id=null){
		$CI	= & get_instance();
		if(!empty($survey_id)){
			$userId		= $CI->session->userdata('frontendUserName');
			$sql		= "select * from qw.delete_survey('".$survey_id."','".$userId."')";
			$records	= $CI->db->query($sql);
			$records		= $records->row();
			if(!empty($records)){
				return true;
			}else{
				return false;
			}
		}
	}

	/*Delete SurveyItem*/
	function deleteSurveyItem($survey_id=null,$item_id){
		$CI	= & get_instance();
		if(!empty($survey_id) && !empty($item_id)) {
			$userId		= $CI->session->userdata('frontendUserName');
			$sql		= "select * from qw.delete_survey_item('".$survey_id."','".$item_id."','".$userId."')";
			$records	= $CI->db->query($sql);
			$records		= $records->row();
			if(!empty($records)){
				return true;
			}else{
				return false;
			}
		}
	}
	
	/*Delete TestResult with TestRecord no $trno */
	function deleteTResult($trno=null){
		$CI	= & get_instance();
		if(!empty($trno)){
			$userId		= $CI->session->userdata('frontendUserName');
			$sql		= "select * from qw.delete_testresult('".$trno."','".$userId."')";
			$records	= $CI->db->query($sql);
			$records		= $records->row();
			if(!empty($records)){
				return true;
			}else{
				return false;
			}
		}
	}

	/**
	 * @Function	-: deleteHR()
	 * @Description	-: used for soft deletion of HR data with no $hrno
	 * @Param		-: hrno - HRdata
	 * @created		-: 12-29-2017
	 * 
	 * */
	function deleteHR($hrno=null){
		$CI	= & get_instance();
		if(!empty($hrno)){
			$userId		= $CI->session->userdata('frontendUserName');
			$sql		= "select * from qw.delete_hr('".$hrno."','".$userId."')";
			$records	= $CI->db->query($sql);
			$records		= $records->row();
			if(!empty($records)){
				return true;
			}else{
				return false;
			}
		}
	}

	/*Color code function used for Reports/Special Purchasing table*/
	function getProperColor($var)
	{

	    if ($var < 0 )
	        return '#ffb2b2';
	    else if ($var == 0)
	        return '#f5d3d3';
	    else if ($var > 0)
	        return '#a8b98a';
	}
	
	/*Color code function used for Sales Order/Order Status table*/
	function getProperColorOrderStatus($var=null)
	{
	    if (!empty($var))
		{
			if ($var == 'Open')
				return '#a8b98a';
			else if ($var == 'Close')
				return '#faffb2';
			else if ($var == 'Canceled')
				return '#b0b0b0';
			else
				return '#8aa0b9';
		} else{
			return '#ffffff';
		}
	}

	function getDoc($path,$filename=null,$mime=null){
		 /* $file = '../../ec2-user/efs/paperless/'.$file;*/
			if(!file_exists($path)){
			    header("{$_SERVER['SERVER_PROTOCOL']} 404 Not Found");
			    header("Status: 404 Not Found");
			    echo 'File not found!';
			    die;
			}

			// Is it readable?
			if(!is_readable($path)){
			    header("{$_SERVER['SERVER_PROTOCOL']} 403 Forbidden");
			    header("Status: 403 Forbidden");
			    echo 'File not accessible!';
			    die;
			}


			header("Content-type:".$mime);
			header("Content-Disposition:attachment;filename='".$filename."'");
			return base64_encode(file_get_contents($path));
			

			exit();

	}
	

/**
	 * This function used for create the thumb of given pdf files.
	 * @Function 	genPdfThumbnail()
	 * @Param		source string,target string
	 * @Craeted		30-01-2018
	 * */
	function genPdfThumbnail($source='', $target='')
	{
		if(!empty($source) && !empty($target)){
			//$source = realpath($source);
			$target	= dirname($source).DIRECTORY_SEPARATOR.$target;
			$im		= new Imagick($source."[0]"); // 0-first page, 1-second page
			$im->setImageColorspace(255); // prevent image colors from inverting
			$im->setimageformat("jpeg");
			$im->thumbnailimage(160, 120); // width and height
			$im->writeimage($target);
			$im->clear();
			$im->destroy();
		}
	}
