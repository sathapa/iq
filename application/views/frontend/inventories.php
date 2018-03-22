<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	$groupPermissions	= $this->group_permissions;
	$color			= !empty($specifications[3]->measure) ? $specifications[3]->measure : 'N/A';
	$construction	= !empty($specifications[4]->measure) ? $specifications[4]->measure : 'N/A';
	$cordDiameter	= !empty($specifications[5]->measure) ? $specifications[5]->measure : 'N/A';
	$finish			= !empty($specifications[7]->measure) ? $specifications[7]->measure : 'N/A';
	$fr				= !empty($specifications[8]->measure) ? $specifications[8]->measure : 'N/A';
	$orientation	= !empty($specifications[13]->measure) ? $specifications[13]->measure : 'N/A';
	$style			= !empty($specifications[16]->measure) ? $specifications[16]->measure : 'N/A';
	$weight			= !empty($specifications[17]->measure) ? $specifications[17]->measure : 'N/A';
	$yarn			= !empty($specifications[18]->measure) ? $specifications[18]->measure : 'N/A';
	//dump($specifications);
?>
<!-- Right Bar Section -->
	<div class="right-bar">
		<div class="dashboard">
		<div class="form-section">
			<div class="top-head">
				<h1>Inventory List</h1>
				<a class="create_quote" id="item-code-specification">Specification</a>
				<a class="create_quote" href="<?=base_url('viewitems');?>"> < Back</a>
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
						<th>Warehouse</th>
						<th><a class="tooltip">QtyOnHand<span class="tooltiptext">Quantity On Hand</span></a></th>
						<th><a class="tooltip">QtyOnPO<span class="tooltiptext">Quantity On Purchase Order</span></a></th>
						<th><a class="tooltip">QtyOnSO<span class="tooltiptext">Quantity On Sale Orders</span></a></th>
						<th><a class="tooltip">ReorderPointQty<span class="tooltiptext">Reorder Point Quantity</span></a></th>
						<th><a class="tooltip">MinOrderQty<span class="tooltiptext">Minimum Order Quantity</span></a></th>
						<th><a class="tooltip">MaxOnHandQty<span class="tooltiptext">Maximum Quantity On Hand</span></a></th>
					</tr>
				</thead>
				<tbody class="filter-data">
					<?php
					if(!empty($inventories) && !empty($inventories)){
						$i=0;
						foreach($inventories as $inventory){
							$i++;
							$itemCode			= !empty($inventory->itemcode) ? $inventory->itemcode : 'N/A';
							$warehousecode		= !empty($inventory->warehousecode) ? $inventory->warehousecode : '0';
							$quantityonhand		= !empty($inventory->quantityonhand) ? $inventory->quantityonhand : '0';
							$quantityonPO		= !empty($inventory->quantityonpurchaseorder) ? $inventory->quantityonpurchaseorder : '0';
							$quantityonSO		= !empty($inventory->quantityonsalesorder) ? $inventory->quantityonsalesorder : '0';
							$reorderpointqty	= !empty($inventory->reorderpointqty) ? $inventory->reorderpointqty : '0';
							$minimumorderqty	= !empty($inventory->minimumorderqty) ? $inventory->minimumorderqty : '0';
							$maximumonhandqty	= !empty($inventory->maximumonhandqty) ? $inventory->maximumonhandqty : '0';
							echo '<tr id="_'.$itemCode.'">
							<td>'.$i.'</td>
							<td>'.$warehousecode.'</td>
							<td>'.$quantityonhand.'</td>
							<td>'.$quantityonPO.'</td>
							<td>'.$quantityonSO.'</td>
							<td>'.$reorderpointqty.'</td>
							<td>'.$minimumorderqty.'</td>
							<td>'.$maximumonhandqty.'</td>
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
<!-- model pop html code start -->
	<div class="md-modal md-effect-1 show-specification" id="show-specification">
		<div class="md-content">
			<div class="pop-main-cont">
                <div class="pop-header">
					<h2 id="product"><?=$itemCode?></h2>
					<button class="md-close "><i class="fa fa-times" aria-hidden="true"></i></button>
                </div>
				<div class="pop-body cf" >
					
					<div class="row select-area">
						<div class="form-row two">
							<label>Style:</label>
							<span><?=$style;?></span>
						</div>
					</div>
					<div class="row select-area">
						<div class="form-row two">
							<label>Yarn:</label>
							<span><?=$yarn?></span>
							
						</div>
					</div>
					
					<div class="row select-area">
						<div class="form-row two">
							<label>Construction:</label>
							<span><?=$construction?></span>
							 
						</div>
					</div>
					<div class="row select-area">
						<div class="form-row two">
							<label>Orientation:</label>
							<span><?=$orientation?></span>
							 
						</div>
					</div>
					<div class="row select-area">
						<div class="form-row two">
							<label>Color:</label>
							<span><?=$color?></span>
							 
						</div>
					</div>
					<div class="row select-area">
						<div class="form-row two">
							<label>Finish:</label>
							<span><?=$finish?></span>
							 
						</div>
					</div>
					<div class="row select-area">
						<div class="form-row two">
							<label>FR:</label>
							<span><?=$fr?></span>
							 
						</div>
					</div>
					<div class="row select-area">
						<div class="form-row two">
							<label>Weight:</label>
							<span><?=$weight?></span>
							 
						</div>
					</div>
					<div class="row select-area">
						<div class="form-row two">
							<label>Cord Diameter:</label>
							<span><?=$cordDiameter?></span>
							 
						</div>
					</div>
					
				</div>
		</div>
	</div>
</div>	
	
	<div class="md-overlay"></div>
	<!-- model pop html code end -->

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
	
	$(document).on('click','#item-code-specification',function (){
		$('#show-specification').modal('show');
	});
	$(document).on('click','.md-close',function (){
		$('#show-specification').modal('hide');
	});
	
});

</script>
