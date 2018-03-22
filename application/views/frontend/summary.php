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
</style>
<!-- Right Bar Section -->

<input type="text" id="page_number" value="0">

	<div class="right-bar">
		<div class="dashboard">
		<div class="form-section">
			<div class="col-sm-12 top-head">
				<h1>Inventory Summary</h1>
				<a href="javascript:void(0)" class="download-inventory-summary-csv create_quote">Download </a>
				<div class="search-main">
				</div>
			</div>

			<div class="data-table-dash ">
			<div id="alert-message"><?php echo $this->session->flashdata('message');?></div>
			
			<table class="summary-filter-table">
				<?php
					$searchProduct	= !empty($searchParam['searchProduct']) && $searchParam['searchProduct']!= 'all' ? $searchParam['searchProduct'] : '';
					$searchItemcode	= !empty($searchParam['searchItemcode']) && $searchParam['searchItemcode']!= 'all' ? $searchParam['searchItemcode'] : '';
				?>
				<?=form_open('',array('name'=>'summary-filter-form','id'=>'summary-filter-form'))?>
				<tr>
					<td width="200">
						<div class="select1 input-design">
							<label>Item Code</label>
							<input type="text" name="search_item_code" id="search_item_code" placeholder="Item Code" 
							value="<?=$searchItemcode?>">
						</div>
					</td>
					<td width="200">
						<div class="select1 input-design">
							<label>Product</label>
							<input type="text" name="search_product" id="search_product" placeholder="Product" 
							value="<?=$searchProduct?>">
						</div>
					</td>
					<td colspan="7" width="200">
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
						<th style="width: 146px;">Product</th>
						<th style="width: 140px;">Item Code</th>
						<th style="width: 140px;">Color</th>
						<th style="width: 86px;">ONHand</th>
						<th style="width: 86px;">SOQty </th>
						<th style="width: 78px;">POQty</th>
						<th style="width: 145px;">Unallocated Quantity</th>
						<th style="width: 402px;">Rel Po</th>
						<th style="width: 403px;">Item Code Desc </th>
					</tr>
				</thead>
				<tbody class="filter-data" id="table-data" style="width: 1626px;height: 800px;overflow:auto;margin: 44px 26px 38px 0px;">
					<?php
						if(!empty($summaries) && is_array($summaries)){
							$serialNo = 1;
							foreach($summaries as $val){
								$product			= !empty($val->product) ? $val->product : 'N/A';
								$itemCode			= !empty($val->itemcode) ? $val->itemcode : '';
								$color 				= !empty($val->color) ? $val->color : '';
								$totalQntHand		= !empty($val->totalquantityonhand) ? round($val->totalquantityonhand,2) : '0';
								$itemDesc			= !empty($val->itemcodedesc) ? $val->itemcodedesc : 'N/A';
								$soQnt				= !empty($val->so_qty) ? round($val->so_qty,2) : '0';
								$poQnt				= !empty($val->po_qty) ? round($val->po_qty,2) : '0';
								$unlocatedQuantity	= !empty($val->unallocated_qty) ? $val->unallocated_qty : '0';
								$relPo				= !empty($val->rel_po) ? $val->rel_po : 'N/A';
								echo '<tr id="remove-row-'.$serialNo.'">
									<td style="width: 146px;">'.$product.'</td>
									<td style="width: 140px;">'.$itemCode.'</td>
									<td style="width: 140px;">'.$color.'</td>
									<td style="width:  86px;">'.$totalQntHand.'</td>
									<td style="width:  86px;">'.$soQnt.'</td>
									<td style="width:  78px;">'.$poQnt.'</td>
									<td style="width: 145px;">'.$unlocatedQuantity.'</td>
									<td style="width: 402px;">'.$relPo.'</td>
									<td style="width: 403px;">'.$itemDesc.'</td>
								</tr>';
								$serialNo ++;
							}
							
						}else{
							echo '<tr><td colspan="9">No Records found</td></tr>';
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
	
	/* Csv Download the Inventory summary data */
	$(document).on('click','.download-inventory-summary-csv',function (){
		var product		= $('#search_product').val();
		var itemcode	= $('#search_item_code').val();
		var str			= product+'#'+itemcode;
			str			= window.btoa(str);
		var url			= '<?=base_url('frontend/excel/downloadInventorySummary/')?>';
		var finalUrl	= url+'/'+str;
		window.location.href	= finalUrl;
	});
  </script>
