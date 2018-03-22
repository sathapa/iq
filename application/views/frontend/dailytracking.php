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
				<h1>Daily Tracking Details</h1>
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
						<th>##</th>
						<th>SO</th>
						<th>Customer</th>
						<th>Invoice #</th>
						<th>Invoice Date</th>
						<th>Cust PO #</th>
						<th>Pkg #</th>
						<th>Shipvia</th>
						<th>Tracking</th>
						<th>Weight</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody class="filter-data">
					<?php
					if(!empty($trackings) && !empty($trackings)){
						$i=0;
						foreach($trackings as $key=>$tracking){
							$i++;
							if(!empty($tracking)){
								foreach($tracking as $k=>$v){
									if($k=='SO #'){
										$so					= !empty($v) ? $v : 'N/A';
									}
									if($k=='Customer'){
										$customer			= !empty($v )? $v : 'N/A';
									}
									if($k=='Inv #'){
										$inv				= !empty($v) ? $v : 'N/A';
									}
									if($k=='Inv Date'){
										$invDate			= !empty($v) ? $v : 'N/A';
									}
									if($k=='Cust PO #'){
										$custoPo			= !empty($v) ? $v : 'N/A';
									}
									if($k=='Pkg #'){
										$pkg				= !empty($v) ? $v : 'N/A';
									}
									if($k=='shipvia'){
										$shipvia			= !empty($v) ? $v : 'N/A';
									}
									if($k=='Tracking'){
										$tracking			= !empty($v) ? $v : 'N/A';
									}
									if($k=='Weight'){
										$weight				= !empty($v) ? $v : 'N/A';
									}
									if($k=='Status'){
										$status				= !empty($v) ? $v : 'N/A';
									}
								}
							}
							
							
							echo '<tr id="_'.$i.'">
							<td>'.$i.'</td>
							<td>'.$so.'</td>
							<td>'.$customer.'</td>
							<td>'.$inv.'</td>
							<td>'.$invDate.'</td>
							<td>'.$custoPo.'</td>
							<td>'.$pkg.'</td>
							<td>'.$shipvia.'</td>
							<td>'.$tracking.'</td>
							<td>'.$weight.'</td>
							<td>'.$status.'</td>
							
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
