<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	$groupPermissions	= $this->group_permissions;
	
?>
<style>
#quote-web-table_paginate.dataTables_paginate {
    display: none;
    padding-top: 10px;
}
/*color coding for available value*/
.avail{
	height: 30px;
	width: 50px;
	padding-top: 6px;
	border-radius: 4px;
	text-align: center;
	color: darkslateblue;
}

tbody#table-data {
	height: 50px;
	display: table-caption;
	width: 100%;
	overflow-y:scroll;
}
</style>
<!-- Right Bar Section -->

<input type="text" id="page_number" value="0">

	<div class="right-bar">
		<div class="dashboard">
		<div class="form-section">
			<div class="col-sm-12 top-head">
				<h1>Manage Special Purchasing</h1>
				<a href="javascript:void(0)" class="download-special-purchasing-csv create_quote">Download </a>
				<div class="search-main">
				</div>
			</div>

			<div class="data-table-dash ">
			<div id="alert-message"><?php echo $this->session->flashdata('message');?></div>
			
			<table class="summary-filter-table">
				<?php
					$searchItemCode			= !empty($searchParam['item_code']) && $searchParam['item_code']!= 'all' ? $searchParam['item_code'] : '';
					$searchProcurementType	= !empty($searchParam['procurement_type']) && $searchParam['procurement_type']!= 'all' ? $searchParam['procurement_type'] : '';
					$searchProductLine		= !empty($searchParam['product_line']) && $searchParam['product_line']!= 'all' ? $searchParam['product_line'] : '';
					$searchCustomer			= !empty($searchParam['customer']) && $searchParam['customer']!= 'all' ? $searchParam['customer'] : '';
					$searchVendor			= !empty($searchParam['vendor']) && $searchParam['vendor']!= 'all' ? $searchParam['vendor'] : '';
				?>
				<?=form_open('',array('name'=>'special-purchasing-filter-form','id'=>'special-purchasing-filter-form'))?>
				<tr>
					<td width="200">
						<div class="select1 input-design">
							<label>Item code</label>
							<input type="text" name="search_item_code" id="search_item_code" placeholder="Item Code" 
							value="<?=$searchItemCode?>">
						</div>
					</td>
					<td width="200">
						<div class="select1 input-design">
							<label>Procurement Type</label>
							<select name="search_procurement_type" id="search_procurement_type" class="quote_status">
								<option value=" ">Procurement Type</option>
								<?=getQuoteHeaderLookUp('splpurch_procurement',$searchProcurementType);?>
							</select>
						</div>
					</td>
					<td width="200">
						<div class="select1 input-design">
							<label>Product Type</label>
							<select name="search_product_line" id="search_product_line" class="quote_status">
								<option value="">Product Type</option>
								<?=getQuoteHeaderLookUp('producttypedesc',$searchProductLine);?>
							</select>
						</div>
					</td>
					<td width="200">
						<div class="select1 input-design">
							<label>Customer</label>
							<input type="text" name="search_customer" id="search_customer" placeholder="Customer" 
							value="<?=$searchCustomer?>">
						</div>
					</td>
					<td width="200">
						<div class="select1 input-design">
							<label>Vendor</label>
							<input type="text" name="search_vendor" id="search_vendor" placeholder="Vendor" 
							value="<?=$searchVendor?>">
						</div>
					</td>
					
					<td width="200">
						<div class="select1">
							<input type="submit" value="Filter" class="order-filter-button" id="order-filter">
						</div>
					</td>
				</tr>
				<?=form_close()?>
			</table>
			
			
			<table class="table table-bordered table-hover" id="summary-table">
				<thead style="width: 100%;position: absolute;top: 0px;border: 1px solid lightgrey;">
					<tr>
						<th style="width:5%;">Buyer Code</th>
						<th style="width:6%;">Procurement Type</th>
						<th style="width:4%;">Item Code</th>
						<th style="width:5%;">Sales Order</th>
						<th style="width:4%;">SO Qty</th>
						<th style="width:6%;">SO Ship Date</th>
						<th style="width:5%;">Product Type</th>
						<th style="width:4%;">On Hand</th>
						<th style="width:5%;">Available</th>
						<th style="width:19%;">Description</th>
						<th style="width:6%;">SO Date</th>
						<th style="width:20%;">Rel Po</th>
						<th style="width:4%;">Vendor</th>
						<th style="width:7%;">Customer</th>
					</tr>
				</thead>
				<tbody class="filter-data" id="table-data" style="width: 100%;height: 800px;overflow:auto;margin: 44px 26px 38px 0px;">
					<?php
						if(!empty($purchases) && is_array($purchases)){
							$serialNo = 1;
							foreach($purchases as $val){
								$title			= !empty($val->buyercode) ? $val->buyercode : 'N/A';
								$procurementType= !empty($val->procurementtype) ? $val->procurementtype : '';
								$itemCode		= !empty($val->itemcode) ? $val->itemcode : '';
								$salesorderno	= !empty($val->salesorderno) ? $val->salesorderno : '0';
								$soQnt			= !empty($val->so_qty) ? $val->so_qty : '0';
								$soShipDate		= !empty($val->so_ship_date) ? $val->so_ship_date : '';
								if (!empty($soShipDate)){
								$exploded = explode("-", $soShipDate);
								$soShipDate = $exploded[1] . '/' . $exploded[2] . '/' . $exploded[0];
								}
								$productType	= !empty($val->producttype) ? $val->producttype : '';
								$onHand			= !empty($val->on_hand) ? $val->on_hand : '0';
								$avail			= !empty($val->avail) ? $val->avail : '0';
								$descr			= !empty($val->descr) ? $val->descr : '';
								$orderDate		= !empty($val->orderdate) ? $val->orderdate : '';
								if (!empty($orderDate)){
								$exploded = explode("-", $orderDate);
								$orderDate = $exploded[1] . '/' . $exploded[2] . '/' . $exploded[0];
								}
								$relatedPo		= !empty($val->related_po) ? $val->related_po : '';
								$vendor			= !empty($val->vendor) ? $val->vendor : 'N/A';
								$productLineDesc= !empty($val->productlinedesc) ? $val->productlinedesc : 'N/A';
								$customerNo		= !empty($val->customerno) ? $val->customerno : 'N/A';
								$alertId		= !empty($val->alertid) ? $val->alertid : 'N/A';
								echo '<tr id="remove-row-'.$serialNo.'">
									<td style="width:5%;">'.$title.'</td>
									<td style="width:6%;">'.$procurementType.'</td>
									<td style="width:4%;">'.$itemCode.'</td>
									<td style="width:5%;">'.$salesorderno.'</td>
									<td style="width:4%;">'.$soQnt.'</td>
									<td style="width:6%;">'.$soShipDate.'</td>
									<td style="width:5%;">'.$productType.'</td>
									<td style="width:4%;">'.round($onHand, 0).'</td>
									<td style="width:5%;"><div class="avail" style="background-color: '.getProperColor($avail).'">'.$avail.'</div></td>
									<td style="width:19%;">'.$descr.'</td>
									<td style="width:6%;">'.$orderDate.'</td>
									<td style="width:20%;">'.$relatedPo.'</td>
									<td style="width:4%;">'.$vendor.'</td>
									<td style="width:6%;">'.$customerNo.'</td>
								</tr>';
								$serialNo ++;
							}
						}else{
							echo '<tr><td colspan="13">No Records found</td></tr>';
						}
					?>
				</tbody>
			</table>
			</div>
		</div>
	</div>

<!-- Right Bar Section -->
</section>

<?php
	$this->load->view('frontend/bottom');
?>
<script>
	
	$(document).ready(function() {
		$('#summary-table').DataTable({
			"pageLength": 50,language: {
				searchPlaceholder: "Enter Search Value...",
				paginate: {
					next: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
					previous: '<i class="fa fa-angle-left" aria-hidden="true"></i>'  
				}
			}
		});
		
		/* Making The Dropdown of customers Auto complete search */
		var select = false;
		$( "#search_item_code" ).autocomplete({
			source: '<?=base_url('frontend/products/autoCompleteItemCodeSearch')?>',
			open: function(event, ui) { if(select) select=false; },
			select: function (a, b) {
				select=true;
			}
		}).blur(function(){
			var cus	= $("#search_item_code").val();
			if(!select || cus=='No Record Found !'){
				$("#search_item_code").val('');
			}
		});	
		
		/* Making The Dropdown of customers Auto complete search */
		var select = false;
		$( "#search_vendor" ).autocomplete({
			source: '<?=base_url('frontend/products/autoCompleteVendroCodeSearch')?>',
			open: function(event, ui) { if(select) select=false; },
			select: function (a, b) {
				select=true;
			}
		}).blur(function(){
			var cus	= $("#search_vendor").val();
			if(!select || cus=='No Record Found !'){
				$("#search_vendor").val('');
			}
		});	
		
			/* Making The Dropdown of customers Auto complete search */
		var select = false;
		$( "#search_customer" ).autocomplete({
			source: '<?=base_url('frontend/home/getCustomer')?>',
			open: function(event, ui) { if(select) select=false; },
			select: function (a, b) {
				select=true;
			}
		}).blur(function(){
			var cus	= $("#search_customer").val();
			if(!select || cus=='No Record Found !'){
				$("#search_customer").val('');
			}
		});
		
	});
	
	/* Csv Download the special purchasing data */
	$(document).on('click','.download-special-purchasing-csv',function (){
		var itemCode	= $('#search_item_code').val();var procumentType	= $('#search_procurement_type').val();
		var productLine	= $('#search_product_line').val();var customer		= $('#search_customer').val();
		var vendor		= $('#search_vendor').val();
		var str			= itemCode+'#'+procumentType+'#'+productLine+'#'+customer+'#'+vendor;
			str			= window.btoa(str);
		var url			= '<?=base_url('frontend/excel/downloadSpecialPurchasing/')?>';
		var finalUrl	= url+'/'+str;
		window.location.href	= finalUrl;
	});
	
  </script>
