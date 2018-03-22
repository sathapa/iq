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
				<h1>Verify Shipping List</h1>
				<a class="create_quote download-varify-shipping-csv" id="download-varify-shipping-csv" >Download</a>
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
						<th style="width:5%;">Customer</th>
						<th style="width:3%;">SO#</th>
						<th style="width:3%;">Status</th>
						<th style="width:3%;">Reason</th>
						<th style="width:5%;">Sales Person</th>
						<th style="width:3%;">Location</th>
						<th style="width:4%;">Entered By</th>
						<th style="width:5%;">Order Date</th>
						<th style="width:4%;">Ship Date </th>
						<th style="width:4%;">Ship Via</th>
						<th style="width:10%;">Ship To </th>
						<th style="width:50%;">Ship Instruction</th>
					</tr>
				</thead>
				<tbody class="filter-data" id="table-data" style="width:100%;height: 800px;overflow:auto;margin: 44px 26px 38px 0px;">
					<?php
					if(!empty($varifyShipping) && !empty($varifyShipping)){
						$i=0;
						foreach($varifyShipping as $key=>$shipping){
							$shipping = (array) $shipping;
							$i++;
							$customer 	= !empty($shipping['Customer']) ? $shipping['Customer'] : '';
							$so 		= !empty($shipping['SO#']) ? $shipping['SO#'] : '';
							$status 	= !empty($shipping['orderstatus']) ? $shipping['orderstatus'] : '';
							$reason 	= !empty($shipping['Reason']) ? $shipping['Reason'] : '';
							$salesperson= !empty($shipping['Salesperson']) ? $shipping['Salesperson'] : '';
							$shiplocation= !empty($shipping['ShipLocatoin']) ? $shipping['ShipLocatoin'] : '';
							$enterBy 	= !empty($shipping['Entered By']) ? $shipping['Entered By'] : '';
							$orderDate 	= !empty($shipping['Order Date']) ? $shipping['Order Date'] : '';
							if (!empty($orderDate)){
							$exploded = explode("-", $orderDate);
							$orderDate = $exploded[1] . '/' . $exploded[2] . '/' . $exploded[0];
							}
							$shipDate 	= !empty($shipping['Ship Date']) ? $shipping['Ship Date'] : '';
							if (!empty($shipDate)){
							$exploded = explode("-", $shipDate);
							$shipDate = $exploded[1] . '/' . $exploded[2] . '/' . $exploded[0];
							}
							$shipVia 	= !empty($shipping['Ship Via']) ? $shipping['Ship Via'] : '';
							$shipTo 	= !empty($shipping['Ship To']) ? $shipping['Ship To'] : '';
							$shipInstruction 	= !empty($shipping['Ship Instructions']) ? $shipping['Ship Instructions'] : '';
							$orderStatusDisplay	= '';
							if(!empty($status) && $status=='A'){
								$orderStatusDisplay		= 'Open';
							}
							if(!empty($status) && $status=='H'){
								$orderStatusDisplay		= 'Hold';
							}
							if(!empty($status) && $status=='C'){
								$orderStatusDisplay		= 'Close';
							}
							if(!empty($status) && $status=='X'){
								$orderStatusDisplay		= 'Canceled';
							}
							if(!empty($status) && $status=='O'){
								$orderStatusDisplay		= 'Ordered';
							}
							if(empty($orderStatusDisplay)){
								$orderStatusDisplay = $status;
							}
							echo '<tr id="_'.$i.'">
								<td style="width:5%;">'.$customer.'</td>
								<td style="width:3%;">'.$so.'</td>
								<td style="width:3%;">'.$orderStatusDisplay.'</td>
								<td style="width:3%;">'.$reason.'</td>
								<td style="width:5%;">'.$salesperson.'</td>
								<td style="width:3%;">'.$shiplocation.'</td>
								<td style="width:4%;">'.$enterBy.'</td>
								<td style="width:5%;">'.$orderDate.'</td>
								<td style="width:4%;">'.$shipDate.'</td>
								<td style="width:4%;">'.$shipVia.'</td>
								<td style="width:10%;">'.$shipTo.'</td>
								<td style="width:50%;">'.$shipInstruction.'</td>
							</tr>';
						}
					}else{
						echo '<tr><td class="11">Data not found!</td></tr>';
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

/* Csv Download the Varify Shipping data */
$(document).on('click','.download-varify-shipping-csv',function (){
	var url			= '<?=base_url('frontend/excel/downloadVarifyShippingList/')?>';
	window.location.href	= url;
});
</script>
