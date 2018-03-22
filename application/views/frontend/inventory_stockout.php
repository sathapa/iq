<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	$groupPermissions	= $this->group_permissions;
	//dump($specifications);
?>
<!-- Right Bar Section -->
	<div class="right-bar">
		<div class="dashboard">
		<div class="form-section">
			<div class="col-sm-12 top-head">
				<h1>Inventory Stockout</h1>
			</div>
			<div class="data-table-dash">
				<div>
				<?php
					$message	= $this->session->flashdata('message');
					echo $message;
				?>
				</div>
			<table class="table  table-bordered table-hover" id="quote-web-table">
				<thead>
					<tr class="inventries-tooltip-text">
						<th>Sales Order#</th>
						<th>Customer</th>
						<th>Product Line</th>
						<th>Item Code</th>
						<th>Item Desc</th>
						<th>Ship Date</th>
						<th>Quantity</th>
						<th>Projected Qty</th>
						<th>Day Till Ship</th>
						<th>Lead Time</th>
					</tr>
				</thead>
				<tbody class="filter-data">
					<?php
					if(!empty($inventoryStockouts) && !empty($inventoryStockouts)){
						$i=0;
						foreach($inventoryStockouts as $val){
							$i++;
							$salesorderno	= !empty($val->salesorderno) ? $val->salesorderno : '';
							$customerno		= !empty($val->customerno) ? $val->customerno : '';
							$productlinedesc= !empty($val->productlinedesc) ? $val->productlinedesc : '';
							$itemcode		= !empty($val->itemcode) ? $val->itemcode : '';
							$itemcodedesc	= !empty($val->itemcodedesc) ? $val->itemcodedesc : '';
							$shipdate		= !empty($val->shipdate) ? $val->shipdate : '';
							$qty			= !empty($val->qty) ? $val->qty : 00;
							$projQty		= !empty($val->proj_qty) ? $val->proj_qty : 00;
							$daysTilShip	= !empty($val->days_til_ship) ? $val->days_til_ship : '';
							$leadtime		= !empty($val->leadtime) ? $val->leadtime : '';
							
							echo '<tr id="_'.$i.'">
								<td>'.$salesorderno.'</td>
								<td>'.$customerno.'</td>
								<td>'.$productlinedesc.'</td>
								<td>'.$itemcode.'</td>
								<td>'.$itemcodedesc.'</td>
								<td>'.$shipdate.'</td>
								<td>'.$qty.'</td>
								<td>'.$projQty.'</td>
								<td>'.$daysTilShip.'</td>
								<td>'.$leadtime.'</td>
							</tr>';
						}
					}else{
						echo '<tr><td colspan="10">No records found!</td></tr>';
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

</script>
