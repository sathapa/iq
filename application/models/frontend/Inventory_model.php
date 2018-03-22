<?php
Class Inventory_model extends MY_Model {
	public $table      = 'users';
	public $primary_key = "id";
	public $soft_deletes = TRUE;
	public $limit = 10;
	public function __construct(){
		parent::__construct();
	}
	
	/**
	 * This function get inventories list.
	 * 
	 * @Function	getInvemtories()
	 * @Param		itemCode()
	 * @Created		19-09-2017
	 * 
	 * */
	function getInventories($itemCode='209-045-02'){
		
		try{
			if(!empty($itemCode)){
				$sql	="select * from qw.get_item_inventory('$itemCode')";
				$results	= $this->db->query($sql);
				$results	= $results->row();
				if(!empty($results)){
					$results= !empty($results->get_item_inventory) ? json_decode($results->get_item_inventory) : '';
					if(!empty($results)){
						return $results;
					}return false;
				}
				return false;
			}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get inventory');
		}
	}
	
	/**
	 * This function get inventories list.
	 * 
	 * @Function	getInvemtories()
	 * @Param		itemCode()
	 * @Created		19-09-2017
	 * 
	 * */
	function getSpecifications($itemCode='209-045-02'){
		try{
			if(!empty($itemCode)){
				$sql	= "select * from qw.get_item_specification('$itemCode')";
				$results	= $this->db->query($sql);
				$results	= $results->row();
				if(!empty($results)){
					$results= !empty($results->get_item_specification) ? json_decode($results->get_item_specification) : '';
					if(!empty($results)){
						return $results;
					}return false;
				}
				return false;
			}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get specification');
		}
	}
	
	/**
	 * This function used for get all items.
	 * 
	 * @Function	getAllItemCodes()
	 * @Param		  filterParam array()
	 * @Created		20-09-2017
	 * @Modified  14-11-2017
	 * */
	function getAllItemCodes($itemCode=null,$productLine=null,$productType=null,$precurementType=null,$vendor=null,$wareHouse=null){
		try{
			$serachItemCode 		= !empty($itemCode) ? $itemCode : 'All';
			$serachProductLine		= !empty($productLine) ? $productLine : 'All';
			$serachProductType		= !empty($productType) ? $productType : 'All';
			$serachProcurementType	= !empty($precurementType) ? $precurementType : 'All';
			$serachVendor			= !empty($vendor) ? $vendor : 'All';
			$serachWarehouse 		= !empty($wareHouse) ? $wareHouse: 'All';

			$sql	= "select * from qw.get_item_details('$serachItemCode','$serachProductLine','$serachProductType','$serachProcurementType','$serachVendor','$serachWarehouse')";
			$results	= $this->db->query($sql);
			$results	= $results->row();
			if(!empty($results)){
				$results= !empty($results->get_item_details) ? json_decode($results->get_item_details) : '';
				if(!empty($results)){
					return $results;
				}return false;
			}
			return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get specification');
		}
	}
	
		function createUpdateInv($postdata, $status)
	{
		$CI	= & get_instance();
		$userId		= $CI->session->userdata('frontendUserName');
		try{
				if(!empty($postdata)){
					
					$part_number = !empty($postdata['part_number']) ? $postdata['part_number'] : '';
					$sales_code  = !empty($postdata['sales_code']) ? $postdata['sales_code'] : '';
					$style = !empty($postdata['style']) ? $postdata['style'] : '0';
					$twine_color = !empty($postdata['twine_color']) ? $postdata['twine_color'] : '';
					$twine_diameter = !empty($postdata['twine_diameter']) ? $postdata['twine_diameter'] : '0';
					$twine_size =  !empty($postdata['twine_size']) ? $postdata['twine_size'] : '';
					$denier =!empty($postdata['denier']) ? $postdata['denier'] : '';
					$yarn_type = !empty($postdata['yarn_type']) ? $postdata['yarn_type'] : '0';
					$twine_style  = !empty($postdata['twine_style']) ? $postdata['twine_style'] : '';
					$twine_finish =!empty($postdata['twine_finish']) ? $postdata['twine_finish'] : '';
					$mesh_size = !empty($postdata['mesh_size']) ? $postdata['mesh_size'] : '0';
					$mesh_orientation = !empty($postdata['mesh_orientation']) ? $postdata['mesh_orientation'] : '';
					$diamond_stretch = !empty($postdata['diamond_stretch']) ? $postdata['diamond_stretch'] : '0';
					$description =!empty($postdata['description']) ? $postdata['description'] : '';
					
					$sql		= "select * from qw.create_update_itemlist('$part_number', '$sales_code', '$style', '$twine_diameter', '$twine_style',
								  '$twine_size', '$denier', '$yarn_type', '$twine_color', '$twine_finish', '$mesh_size', '$mesh_orientation',
								   '$diamond_stretch', '$description', $status) ";
					
					$records	= $CI->db->query($sql);
					$result		= $records->row();
					return $result;	
			  	 }
			  	 return false;
				
			}catch(Exception	$ex){
				log_message('error','Unable to add user details basis on user id '.$ex->getMessage());
			}
	}

	function gettheItem($itemcode=null){
		
		try{
			if(!empty($itemcode)){
				$sql	="select * from qw.get_item_inventory_list('$itemcode')";

				$results	= $this->db->query($sql);
				$results	= $results->row();

				if(!empty($results)){
					$results= !empty($results->get_item_inventory_list) ? json_decode($results->get_item_inventory_list) : '';
					
					if(!empty($results)){
						return $results;
					}return false;
				}
				return false;
			}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get inventory');
		}
	}
	
	/**
	 * [getItemVendor description] - This function used for get item vendor info
	 * @author	Prem Yadav <prem@tisindiasupport.com>
	 * @param  string $itemCode [description]
	 * @return [type]           [description]
	 */
	function getItemVendor($itemCode=''){
		try{
			if(!empty($itemCode)){
				$sql	= "select * from qw.get_item_vendor('$itemCode')";
				$item	= $this->db->query($sql);
				$item	= $item->row();
				if(!empty($item)){
					$vendors 	= !empty($item->get_item_vendor) ? json_decode($item->get_item_vendor) : '';
					if(!empty($vendors)){
						return $vendors;
					}return false;
				}
				return false;
			}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get item vendor ');
		}
	}
	/**
	 * [makeFormatOfItemVendorInfo description] - This function used for make the format of vendor information
	 * @author	Prem Yadav <prem@tisindiasupport.com>
	 * @param  array  $itemsData [description]
	 * @return [type]            [description]
	 */
	function makeFormatOfItemVendorInfo($itemsData=array()){
		if(!empty($itemsData)){
			$newArray	= '';$i=0;
			foreach($itemsData as $item){
				$itemCode			= !empty($item->itemcode) ? $item->itemcode : 'N/A';
				$apdivisionNo		= !empty($item->apdivisionno) ? $item->apdivisionno : 'N/A';
				$vendorNo			= !empty($item->vendorno) ? $item->vendorno : 'N/A';
				$lastReceiptDate	= !empty($item->lastreceiptdate) ? $item->lastreceiptdate : 'N/A';
				$lastReceiptNo		= !empty($item->lastreceiptno) ? $item->lastreceiptno : 'N/A';
				$lastReturnDate		= !empty($item->lastreturndate) ? $item->lastreturndate : 'N/A';
				$lastReturnNo		= !empty($item->lastreturnno) ? $item->lastreturnno : 'N/A';
				$vendorWarrantyCode	= !empty($item->vendorwarrantycode) ? $item->vendorwarrantycode : 'N/A';
				$lastReceiptQuantity= !empty($item->lastreceiptquantity) ? $item->lastreceiptquantity : 'N/A';
				$lastUnitCost		= !empty($item->lastunitcost) ? $item->lastunitcost : 'N/A';

				$standardLeadTime	= !empty($item->standardleadtime) ? $item->standardleadtime : 'N/A';
				$lastLeadTime		= !empty($item->lastleadtime) ? $item->lastleadtime : 'N/A';
				$vendorAliasItemNo	= !empty($item->vendoraliasitemno) ? $item->vendoraliasitemno : 'N/A';
				$lastReceipTheaderSeqNo		= !empty($item->lastreceiptheaderseqno) ? $item->lastreceiptheaderseqno : 'N/A';
				$lastReturnPurchaseOrderNo	= !empty($item->lastreturnpurchaseorderno) ? $item->lastreturnpurchaseorderno : 'N/A';

				$lastReturnType				= !empty($item->lastreturntype) ? $item->lastreturntype : 'N/A';
				$lastReceiptPurchaseOrderNo	= !empty($item->lastreceiptpurchaseorderno) ? $item->lastreceiptpurchaseorderno : 'N/A';
				$lastReceiptType			= !empty($item->lastreceipttype) ? $item->lastreceipttype : 'N/A';

				$lastReturnHeaderSeqNo		= !empty($item->lastreturnheaderseqno) ? $item->lastreturnheaderseqno : 'N/A';
				$lastAllocatedUnitCost		= !empty($item->lastallocatedunitcost) ? $item->lastallocatedunitcost : 'N/A';
				$dateCreated			= !empty($item->datecreated) ? $item->datecreated : 'N/A';
				$timeCreated			= !empty($item->timecreated) ? $item->timecreated : 'N/A';
				$userCreatedKey			= !empty($item->usercreatedkey) ? $item->usercreatedkey : 'N/A';
				$orientation			= !empty($item->dateupdated) ? $item->dateupdated : 'N/A';

				$timeupDated			= !empty($item->timeupdated) ? $item->timeupdated : 'N/A';
				$userUpdatedKey			= !empty($item->userupdatedkey) ? $item->userupdatedkey : 'N/A';
				$udfPurchDescript		= !empty($item->udf_purch_descript) ? $item->udf_purch_descript : 'N/A';
				$insertTimestamp		= !empty($item->insert_timestamp) ? $item->insert_timestamp : 'N/A';

				/* Making Return array */
				$newArray[$i]['Item Code']		= $itemCode;$newArray[$i]['Apdivision No']		= $apdivisionNo;
				$newArray[$i]['Vendor No']		= $vendorNo;$newArray[$i]['LastReceiptDate']	= $lastReceiptDate;
				$newArray[$i]['LastReceiptNo']	= $lastReceiptNo;$newArray[$i]['LastReturnDate']	= $lastReturnDate;
				$newArray[$i]['LastReturnNo']	= $lastReturnNo;$newArray[$i]['VendorWarrantyCode']	= $vendorWarrantyCode;
				$newArray[$i]['LastReceiptQuantity']		= $lastReceiptQuantity;$newArray[$i]['LastUnitCost']		= $lastUnitCost;

				$newArray[$i]['StandardLeadTime']		= $standardLeadTime;$newArray[$i]['LastLeadTime']		= $lastLeadTime;
				$newArray[$i]['VendorAliasItemNo']		= $vendorAliasItemNo;$newArray[$i]['LastReceipTheaderSeqNo']		= $lastReceipTheaderSeqNo;
				$newArray[$i]['LastReturnPurchaseOrderNo']		= $lastReturnPurchaseOrderNo;$newArray[$i]['LastReturnType']		= $lastReturnType;
				$newArray[$i]['LastReceiptPurchaseOrderNo']		= $lastReceiptPurchaseOrderNo;
				$newArray[$i]['LastReceiptType']		= $lastReceiptType;

				$newArray[$i]['LastReturnHeaderSeqNo']			= $lastReturnHeaderSeqNo;$newArray[$i]['LastAllocatedUnitCost']		= $lastAllocatedUnitCost;
				$newArray[$i]['DateCreated']		= $dateCreated;$newArray[$i]['TimeCreated']		= $timeCreated;
				$newArray[$i]['UserCreatedKey']		= $userCreatedKey;$newArray[$i]['Orientation']	= $orientation;
				$newArray[$i]['TimeupDated']		= $timeupDated;$newArray[$i]['UserUpdatedKey']	= $userUpdatedKey;
				$newArray[$i]['UdfPurchDescript']	= $udfPurchDescript;
				$i++;
			}
			return $newArray;
		}
	}
	
}

?>
