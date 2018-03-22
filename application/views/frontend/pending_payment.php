<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	$groupPermissions	= $this->group_permissions;
?>
<!-- Right Bar Section -->
	<div class="right-bar">
		<div class="dashboard">
		<div class="form-section">
			<div class="col-sm-12 top-head">
				<h1>Pending Payment List</h1>
				<a class="create_quote download-pending-payment-csv" id="download-pending-payment-csv" >Download</a>
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
					<tr>
						<th>Customer</th>
						<th>SO#</th>
						<th>Status</th>
						<th>Reason</th>
						<th>Sales Person</th>
						<th>Entered By</th>
						<th>Order Date</th>
						<th>Ship Date </th>
						<th>CC Auth Date</th>
						<th>Terms </th>
						<th>Total Amt</th>
						<th>Balance</th>
						<th>Dep Reqd</th>
						<th>Dep Recd</th>
					</tr>
				</thead>
				<tbody class="filter-data">
					<?php
					if(!empty($pendingPayments) && !empty($pendingPayments)){
						$i=0;
						foreach($pendingPayments as $key=>$payments){
							$payments = (array) $payments;
							$i++;
							$customer 	= !empty($payments['Customer']) ? $payments['Customer'] : '--------';
							$so 		= !empty($payments['SO#']) ? $payments['SO#'] : '--------';
							$status 	= !empty($payments['Status']) ? $payments['Status'] : '--------';
							$reason 	= !empty($payments['Reason']) ? $payments['Reason'] : '--------';
							$salesperson= !empty($payments['Salesperson']) ? $payments['Salesperson'] : '';
							$enterBy 	= !empty($payments['Entered By']) ? $payments['Entered By'] : '--------';
							$orderDate 	= !empty($payments['Order Date']) ? $payments['Order Date'] : '--------';
							if (!empty($orderDate) && $orderDate !== '--------')
							{
							$exploded = explode("-", $orderDate);
							$orderDate = $exploded[1] . '/' . $exploded[2] . '/' . $exploded[0];	
							}
							$shipDate 	= !empty($payments['Ship Date']) ? $payments['Ship Date'] : '--------';
							if (!empty($shipDate) && $shipDate !== '--------')
							{
							$exploded = explode("-", $shipDate);
							$shipDate = $exploded[1] . '/' . $exploded[2] . '/' . $exploded[0];	
							}
							$ccAuthDate	= !empty($payments['CC Auth Date']) ? $payments['CC Auth Date'] : '--------';
							$terms 		= !empty($payments['Terms']) ? $payments['Terms'] : '--------';
							$totalAmt 	= !empty($payments['Total Amt']) ? $payments['Total Amt'] : '--------';
							$balance 	= !empty($payments['Balance']) ? $payments['Balance'] : '--------';
							$depReqd 	= !empty($payments['Dep Reqd']) ? $payments['Dep Reqd'] : '--------';
							$depRecd 	= !empty($payments['Dep Recd']) ? $payments['Dep Recd'] : '--------';
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
								<td width="100">'.$customer.'</td>
								<td>'.$so.'</td>
								<td>'.$orderStatusDisplay.'</td>
								<td>'.$reason.'</td>
								<td>'.$salesperson.'</td>
								<td width="80">'.$enterBy.'</td>
								<td>'.$orderDate.'</td>
								<td>'.$shipDate.'</td>
								<td>'.$ccAuthDate.'</td>
								<td>'.$terms.'</td>
								<td>'.$totalAmt.'</td>
								<td>'.$balance.'</td>
								<td>'.$depReqd.'</td>
								<td>'.$depRecd.'</td>
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

/* Csv Download the Pending Payments data */
$(document).on('click','.download-pending-payment-csv',function (){
	var url			= '<?=base_url('frontend/excel/downloadPendingPaymentList/')?>';
	window.location.href	= url;
});
</script>
