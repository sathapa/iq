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
	<div class="right-bar">
		<div class="dashboard">
		<div class="form-section">
			<div class="col-sm-12 top-head">
				<h1>Inventory WIP List</h1>
				<a class="create_quote download-inventory-wip-csv" id="download-inventory-wip-csv" >Download</a>
			</div>
			<div class="data-table-dash">
				<div>
				<?php
					$message	= $this->session->flashdata('message');
					echo $message;
				?>
				</div>

			<table class="table  table-bordered table-hover" id="quote-web-table">
				<thead style="width: 100%;position: absolute;top: 0px;border: 1px solid lightgrey;">
					<tr>
						<th style="width:5%;">SalesOrderNo</th>
						<th style="width:5%;">Customer</th>
						<th style="width:15%;">Title</th>
						<th style="width:5%;">ParentItem</th>
						<th style="width:7%;">ComponentItem</th>
						<th style="width:8%;">ProductLineDesc</th>
						<th style="width:21%;">ItemDesc</th>
						<th style="width:10%;">SalesPersonName</th>
						<th style="width:4%;">WT Class</th>
						<th style="width:6%;">OrderDate</th>
						<th style="width:3%;">LineKey</th>
						<th style="width:6%;">ShipExpireDate</th>
						<th style="width:4%;">Quantity</th>
						<th style="width:1%;">UOM</th>
					</tr>
				</thead>
				<tbody class="filter-data" id="table-data" style="width:100%;height: 800px;overflow:auto;margin: 44px 26px 38px 0px;">
					<?php
					if(!empty($inventoriesWip) && !empty($inventoriesWip)){
						$i=0;
						foreach($inventoriesWip as $inventoriesWip){
							$i++;
							$salesOrderNo		= !empty($inventoriesWip->salesorderno) ? $inventoriesWip->salesorderno : '';
							$customer			= !empty($inventoriesWip->customer) ? $inventoriesWip->customer : '';
							$title				= !empty($inventoriesWip->title) ? $inventoriesWip->title : '';
							$parentItem			= !empty($inventoriesWip->parentitem) ? $inventoriesWip->parentitem : '';
							$componentItem		= !empty($inventoriesWip->componentitem) ? $inventoriesWip->componentitem : '';
							$productLineDesc	= !empty($inventoriesWip->productlinedesc) ? $inventoriesWip->productlinedesc : '';
							$itemDesc			= !empty($inventoriesWip->itemdesc) ? $inventoriesWip->itemdesc : '';
							$salesPersonName	= !empty($inventoriesWip->salespersonname) ? $inventoriesWip->salespersonname : '';
							$wtClass			= !empty($inventoriesWip->jt158_wtclass) ? $inventoriesWip->jt158_wtclass : '';
							$orderDate			= !empty($inventoriesWip->orderdate) ? $inventoriesWip->orderdate : '';
							$linekey			= !empty($inventoriesWip->linekey) ? $inventoriesWip->linekey : '';
							$shipExpireDate		= !empty($inventoriesWip->shipexpiredate) ? $inventoriesWip->shipexpiredate : '';
							$qty				= !empty($inventoriesWip->qty) ? $inventoriesWip->qty : '';
							$uom				= !empty($inventoriesWip->uom) ? $inventoriesWip->uom : '';
							$itemtype			= !empty($inventoriesWip->itemtype) ? $inventoriesWip->itemtype : '';
							
							echo '<tr id="_'.$i.'">
								<td style="width:5%;">'.$salesOrderNo.'</td>
								<td style="width:5%;">'.$customer.'</td>
								<td style="width:15%;">'.$title.'</td>
								<td style="width:5%;">'.$parentItem.'</td>
								<td style="width:7%;">'.$componentItem.'</td>
								<td style="width:8%;">'.$productLineDesc.'</td>
								<td style="width:21%;">'.$itemDesc.'</td>
								<td style="width:10%;">'.$salesPersonName.'</td>
								<td style="width:4%;">'.$wtClass.'</td>
								<td style="width:6%;">'.$orderDate.'</td>
								<td style="width:3%;">'.$linekey.'</td>
								<td style="width:6%;">'.$shipExpireDate.'</td>
								<td style="width:4%;">'.$qty.'</td>
								<td style="width:1%;">'.$uom.'</td>
							</tr>';
						}
					}else{
						echo '<tr><td class="14">Data not found!</td></tr>';
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
	/* Confirmation box */
	$('[data-toggle=confirmation]').confirmation({
		rootSelector: '[data-toggle=confirmation]',
	});
	
	$('#quote-web-table').DataTable({
		"pageLength": 50,language: {
			searchPlaceholder: "Enter Search Value...",
			paginate: {
				next: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
				previous: '<i class="fa fa-angle-left" aria-hidden="true"></i>'  
			}
		}
	});
});

/* Csv Download the Inventory WIP data */
$(document).on('click','.download-inventory-wip-csv',function (){
	var url			= '<?=base_url('frontend/excel/downloadInventoryWIPList/')?>';
	window.location.href	= url;
});
</script>
