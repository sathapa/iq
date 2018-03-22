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
tbody#table-data {
	height: 50px;
	display: table-caption;
	width: 100%;
	overflow-y:scroll;
}
element.style {
    width: auto;
}
</style>
<!-- Right Bar Section -->

<input type="text" id="page_number" value="0">

	<div class="right-bar">
		<div class="dashboard">
		<div class="form-section">
			<div class="col-sm-12 top-head">
				<h1>Manage Warehouse Transfer</h1>
				<a href="javascript:void(0)" class="download-transfer-warehouses-csv create_quote">Download </a>
				<div class="search-main">
				</div>
			</div>

			<div class="data-table-dash ">
			<div id="alert-message"><?php echo $this->session->flashdata('message');?></div>
			
			<table class="summary-filter-table">
				<?php
					$searchItemCode			= !empty($searchParam['item_code']) && $searchParam['item_code']!= 'All' ? $searchParam['item_code'] : '';
					$searchProcurementType	= !empty($searchParam['procurement_type']) && $searchParam['procurement_type']!= 'All' ? $searchParam['procurement_type'] : '';
					$searchProductLine		= !empty($searchParam['product_line']) && $searchParam['product_line']!= 'All' ? $searchParam['product_line'] : '';
					$searchVendor			= !empty($searchParam['warehouse']) && $searchParam['warehouse']!= 'All' ? $searchParam['warehouse'] : '';
				?>
				<?=form_open('',array('name'=>'warehouse-transfer-filter-form','id'=>'warehouse-transfer-filter-form'))?>
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
								<?=getQuoteHeaderLookUp('producttypedesc',$searchProcurementType);?>
							</select>
						</div>
					</td>
					<td width="200">
						<div class="select1 input-design">
							<label>Product Line</label>
							<select name="search_product_line" id="search_product_line" class="quote_status">
								<option value="">Product Line</option>
								<?=getQuoteHeaderLookUp('productlinedesc',$searchProductLine);?>
							</select>
						</div>
					</td>
					<td width="200">
						<div class="select1 input-design">
							<label class="order-show-details">Warehouse</label>
							<select name="search_ware_house" id="search_ware_house" class="quote_status">
									<option value="">All</option>
									<option value="000">000</option>
									<option value="005">005</option>
									<option value="181">181</option>
									<option value="430">430</option>
							</select>
							
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
				<thead style="width: 1626px;position: absolute;top: 0px;border: 1px solid lightgrey;">
					<tr>
						<th style="width: 299px;">Title</th>
						<th style="width: 158px;">Procurement Type</th>
						<th style="width: 192px;">Product Description</th>
						<th style="width: 149px;">Item Code</th>
						<th style="width: 108px;">Ware House</th>
						<th style="width:  55px;";>UOM</th>
						<th style="width: 115px;">Qty On Hand</th>
						<th style="width: 119px;">Re-Order Qty</th>
						<th style="width: 149px;">Max Qty OnHand</th>
						<th style="width: 124px;">On SO(5 days)</th>
						<th style="width: 156px;">Total Qty OnHand</th>
					</tr>
				</thead>
				<tbody class="filter-data" id="table-data" style="width: 1626px;height: 800px;overflow:auto;margin: 44px 26px 38px 0px;">
					<?php
						if(!empty($transferWarehouses) && is_array($transferWarehouses)){
							$serialNo = 1;
							foreach($transferWarehouses as $val){
								$title			= !empty($val->title) ? $val->title : 'N/A';
								$procurementType= !empty($val->procurementtype) ? $val->procurementtype : '0';
								$productLineDesc= !empty($val->productlinedesc) ? $val->productlinedesc : 'N/A';
								$itemCode		= !empty($val->itemcode) ? $val->itemcode : '';
								$wareHouse		= !empty($val->warehousecode) ? $val->warehousecode : '0';
								$uom			= !empty($val->uom) ? $val->uom : '';
								$qtyOnHand		= !empty($val->quantityonhand) ? round($val->quantityonhand,2) : '';
								$reOrderPointQty= !empty($val->reorderpointqty) ? round($val->reorderpointqty,2) : '0';
								$maxQtyOnHand	= !empty($val->maximumonhandqty) ? round($val->maximumonhandqty,2) : '0';
								$os5DayQty		= !empty($val->so_5days_qty) ? round($val->so_5days_qty,2) : '';
								$totalQtyOnHand	= !empty($val->totalquantityonhand) ? round($val->totalquantityonhand,2) : '';
								$action			= !empty($val->action) ? $val->action : '';
								$actionQty		= !empty($val->actionqty) ? $val->actionqty : 'N/A';
								$alterId		= !empty($val->alertid) ? $val->alertid : 'N/A';
								$altQty			= !empty($val->altqty) ? $val->altqty : 'N/A';
								echo '<tr id="remove-row-'.$serialNo.'">
									<td style="width: 299px;">'.$title.'</td>
									<td style="width: 158px;">'.$procurementType.'</td>
									<td style="width: 192px;">'.$productLineDesc.'</td>
									<td style="width: 149px;">'.$itemCode.'</td>
									<td style="width: 108px;">'.$wareHouse.'</td>
									<td style="width:  55px;">'.$uom.'</td>
									<td style="width: 115px;">'.$qtyOnHand.'</td>
									<td style="width: 119px;">'.$reOrderPointQty.'</td>
									<td style="width: 149px;">'.$maxQtyOnHand.'</td>
									<td style="width: 124px;">'.$os5DayQty.'</td>
									<td style="width: 156px;">'.$totalQtyOnHand.'</td>
								</tr>';
								$serialNo ++;
							}		
						}else{
							echo '<tr><td colspan="11">No Records found</td></tr>';
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
		
	});
	
	/* Csv Download the Ware house data */
	$(document).on('click','.download-transfer-warehouses-csv',function (){
		var itemCode	= $('#search_item_code').val();var procumentType	= $('#search_procurement_type').val();
		var productLine	= $('#search_product_line').val();var wareHouse		= $('#search_ware_house').val();
		var str			= itemCode+'#'+procumentType+'#'+productLine+'#'+wareHouse;
			str			= window.btoa(str);
		var url			= '<?=base_url('frontend/excel/downloadTransferWarehouses/')?>';
		var finalUrl	= url+'/'+str;
		window.location.href	= finalUrl;
	});
	
  </script>
