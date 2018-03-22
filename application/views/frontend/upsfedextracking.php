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
				<h1>UPS FedEx Tracking</h1>
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
						<th>PO#</th>
						<th>Invoice#</th>
						<th>Customer</th>
						<th>Carrier</th>
						<th>Tracking</th>
						<th>Link</th>
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
									if($k=='PO #'){
										$po					= !empty($v )? $v : 'N/A';
									}
									if($k=='Inv #'){
										$inv				= !empty($v) ? $v : 'N/A';
									}
									if($k=='Customer'){
										$customer			= !empty($v) ? $v : 'N/A';
									}
									if($k=='Carrier'){
										$carrier			= !empty($v) ? $v : 'N/A';
									}
									if($k=='Tracking #'){
										$tracking			= !empty($v) ? $v : 'N/A';
									}
									if($k=='Link'){
										$link				= !empty($v) ? $v : '';
									}
								}
							}
							
							
							echo '<tr id="_'.$i.'">
							<td width="20">'.$i.'</td>
							<td width="80">'.$so.'</td>
							<td width="50">'.$po.'</td>
							<td width="100">'.$inv.'</td>
							<td width="80">'.$customer.'</td>
							<td width="50">'.$carrier.'</td>
							<td width="150">'.$tracking.'</td>
							<td width="1500">';
							if(!empty($link)){
								echo '<a href="'.$link.'" target="_blank">'.$link.'</a>';
							}else{
								echo '<a target="_blank">N/A</a>';
							}
							echo ' </td>
							</tr>';
						}
					}else{
						echo '<tr><td colspan="8">No records found!</td></tr>';
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
