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
				<h1>PSN Inventory List</h1>
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
						<th>SIZE</th>
						<th><a class="tooltip">With DL<span class="tooltiptext">With DL</span></a></th>
						<th><a class="tooltip">NO DL<span class="tooltiptext">NO DL</span></a></th>
					</tr>
				</thead>
				<tbody class="filter-data">
					<?php
					if(!empty($psnInventories) && !empty($psnInventories)){
						$i=0;
						foreach($psnInventories as $key=>$psnInventory){
							$i++;
							if(!empty($psnInventory)){
								foreach($psnInventory as $k=>$v){
									if($k=='SIZE'){
										$inventorySize		= !empty($v) ? $v : 'N/A';
									}
									if($k=='W/DL'){
										$wdl				= !empty($v )? $v : 'N/A';
									}
									if($k=='NO DL'){
										$nodl				= !empty($v) ? $v : 'N/A';
									}
								}
							}
							
							
							echo '<tr id="_'.$i.'">
							<td>'.$i.'</td>
							<td>'.$inventorySize.'</td>
							<td>'.$wdl.'</td>
							<td>'.$nodl.'</td>
							</tr>';
						}
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
