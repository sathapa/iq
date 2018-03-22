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
			<div class="top-head">
				<h1>Item Vendor Information [ <?php echo $itemCode; ?> ]</h1>
				<a class="create_quote download-items-vendor" data-item-code="<?php echo $itemCode; ?>" id="download-items-vendor" >Download</a>
				<a class="create_quote" href="<?php echo base_url('viewitems')?>" >Back</a>
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
						<th>Item Code</th>
						<th>Vendor No</th>
						<th>Last Receipt Date</th>
						<th>Last Receipt No</th>
						<th>Last Return Date</th>
						<th>Last Return No</th>
						<th>Last Receit Quantity</th>
						<th>Last Unit Cost </th>
						<th>Standered Lead Time</th>
						<th>Last Lead Time</th>
						<th>Vendor Alias Item No</th>
					</tr>
				</thead>
				<tbody class="filter-data">
				<?php
					if(!empty($vendorDetails)){
						foreach ($vendorDetails as $key => $results) {
							$itemCode			= !empty($results->itemcode) ? $results->itemcode : 'N/A';
							$apdivisionNo		= !empty($results->apdivisionno) ? $results->apdivisionno : 'N/A';
							$vendorNo			= !empty($results->vendorno) ? $results->vendorno : 'N/A';
							$lastReceiptDate	= !empty($results->lastreceiptdate) ? $results->lastreceiptdate : 'N/A';
							$lastReceiptNo		= !empty($results->lastreceiptno) ? $results->lastreceiptno : 'N/A';
							$lastReturnDate		= !empty($results->lastreturndate) ? $results->lastreturndate : 'N/A';
							$lastReturnNo		= !empty($results->lastreturnno) ? $results->lastreturnno : 'N/A';
							$vendorWarrantyCode	= !empty($results->vendorwarrantycode) ? $results->vendorwarrantycode : 'N/A';
							$lastReceiptQuantity= !empty($results->lastreceiptquantity) ? $results->lastreceiptquantity : 'N/A';
							$lastUnitCost		= !empty($results->lastunitcost) ? $results->lastunitcost : 'N/A';
							$standardLeadTime	= !empty($results->standardleadtime) ? $results->standardleadtime : 'N/A';
							$lastLeadTime		= !empty($results->lastleadtime) ? $results->lastleadtime : 'N/A';
							$vendorAliasItemNo	= !empty($results->vendoraliasitemno) ? $results->vendoraliasitemno : 'N/A';
								echo '<tr id="_'.$itemCode.'">
							<td>'.$itemCode.'</td>
							<td>'.$vendorNo.'</td>
							<td>'.$lastReceiptDate.'</td>
							<td>'.$lastReceiptNo.'</td>
							<td>'.$lastReturnDate.'</td>
							<td>'.$lastReturnNo.'</td>
							<td>'.$lastReceiptQuantity.'</td>
							<td>'.$lastUnitCost.'</td>
							<td>'.$standardLeadTime.'</td>
							<td>'.$lastLeadTime.'</td>
							<td>'.$vendorAliasItemNo.'</td>
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

	$('#quote-web-table').DataTable({
		"pageLength": 50,language: {
			searchPlaceholder: "Enter Search Value...",
			paginate: {
				next: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
				previous: '<i class="fa fa-angle-left" aria-hidden="true"></i>'  
			}
		}
	});

	/* Csv Download the item vendor data */
	$(document).on('click','#download-items-vendor',function (){
		var itemcode		= $(this).attr('data-item-code');
		var str				= window.btoa(itemcode);
		var url			= '<?=base_url('frontend/excel/downloadItemVendorInfo/')?>';
		var finalUrl	= url+'/'+str;
		window.location.href	= finalUrl;
	});

</script>
