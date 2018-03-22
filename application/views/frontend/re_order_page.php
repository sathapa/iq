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
.form-control {
    display: block;
    width: 50%;
    height: 19px;
    margin-bottom: 5px;
    margin-left: 5px;
    padding: 5px 5px;
    font: 1.78vh 'MyriadProRegular';
}
.wareh,.qty{    display: -webkit-box; }
.row {
   /* text-align: -webkit-right;*/
   margin:0px 0px 0px 0px !important;
}
/*#reorder-table tr { line-height: 14px; }*/
</style>
<!-- Right Bar Section -->

<input type="text" id="page_number" value="0">

	<div class="right-bar">
		<div class="dashboard">
		<div class="form-section">
			<div class="col-sm-12 top-head">
				<h1>Manage ReOrders</h1>
				<div class="search-main">
				</div>
			</div>

			<div class="data-table-dash ">
			<div id="alert-message"><?php echo $this->session->flashdata('message');?></div>
			<table class="table table-bordered table-hover" id="reorder-table">
				<thead>
					<tr>
						<!--<th>Title</th>-->
						<th>Mark</th>
						<th>Item</th>
						<th>Description</th>
						<th>Vendor</th>
						<!-- <th>Lead Time</th>
						<th>Product Line</th>
						<th>Procurement Type </th>
						<th>Product Type</th>
						<th>Buyer Code</th>
						<th>UOM</th>
						<th>Avail Qty</th>
						<th>Action Qty</th>
						<th>RO Point</th> -->
						<th>On Hand</th>
						<th>SO Qty </th>
						<th>PO Qty</th>
						<th>Master Qty</th>
						
						<th>Tot Min </th>
						<th>Tot Max </th>
						<th id="toSageH">To Sage <button type="button" class="btn btn-primary">Send</button></th>
					</tr>
				</thead>
				<tbody class="filter-data" id="table-data">
					<?php
						if(!empty($reorders) && is_array($reorders)){
							$serialNo = 1;
							foreach($reorders as $val){
								$itemCode		= !empty($val->itemcode) ? $val->itemcode : '';
								$itemCodeDesc	= !empty($val->itemcodedesc) ? $val->itemcodedesc : '';
								$vendorno 		= !empty($val->vendorno) ? $val->vendorno : '';
							/*	$leadTime		= !empty($val->leadtime) ? $val->leadtime : 'N/A';
								$prodLineDesc	= !empty($val->productlinedesc) ? $val->productlinedesc : 'N/A';
								$itemDesc		= !empty($val->itemcodedesc) ? $val->itemcodedesc : 'N/A';
								$procurementtype= !empty($val->procurementtype) ? $val->procurementtype : 'N/A';
								$productType	= !empty($val->producttype) ? $val->producttype : 'N/A';
								$buyerCode		= !empty($val->buyercode) ? $val->buyercode : 'N/A';
								$uom			= !empty($val->uom) ? $val->uom : 'N/A';
								$availQnt		= !empty($val->tot_avail) ? $val->tot_avail : 'N/A';
								$totRo			= !empty($val->tot_ro) ? $val->tot_ro : 'N/A';
								$roQnt			= !empty($val->ro_qty) ? $val->ro_qty : 'N/A';*/
								$onHand			= !empty($val->on_hand) ? $val->on_hand : 'N/A';
								$soQnt			= !empty($val->so_qty) ? $val->so_qty : 'N/A';
								$poQnt			= !empty($val->po_qty) ? $val->po_qty : 'N/A';
								$masterQnt		= !empty($val->master_qty) ? $val->master_qty : 'N/A';
								$totMin			= !empty($val->tot_min) ? $val->tot_min : 'N/A';
								$totMax			= !empty($val->tot_max) ? $val->tot_max : 'N/A';
								
								echo '

									<tr id="remove-row-'.$serialNo.'">
									<td width="20">
										
											<input type="checkbox" class="form-check-input" onclick="myFunction('.$serialNo.', $(this))" id="check_'.$serialNo.'">
										
									</td>
									<td width="100">'.$itemCode.'</td>
									<td width="100">'.$itemCodeDesc.'</td>
									<td width="100">'.$vendorno.'</td>
									
	
									<td width="100">'.$onHand.'</td>
									<td width="100">'.$soQnt.'</td>
									<td width="100">'.$poQnt.'</td>
									<td width="100">'.$masterQnt.'</td>
									<td width="100">'.$totMin.'</td>
									<td width="100">'.$totMax.'</td>
									<td width="170" id="toSage" class="order_data_'.$serialNo.'" >
										
											<div class="qty"><label style="margin-right: 36px;">Qty.</label><input type="text" name="qty[]" class="form-control" id="qty" placeholder="Quantity"> </div>
											<div class="wareh"><label>Warehouse</label><input type="text" name="warehouse[]" class="form-control" id="warehouse" placeholder="Warehouse"></div>
										
									</td>
								</tr>';
								$serialNo ++;
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
		$("td#toSage, th#toSageH").hide();
		$('#isoncr-table').DataTable({
			"pageLength": 50,language: {
				searchPlaceholder: "Enter Search Value...",
				paginate: {
					next: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
					previous: '<i class="fa fa-angle-left" aria-hidden="true"></i>'  
				}
			}
		});
	});

	function myFunction(uniqueID=null, t){
		$("td.order_data_"+uniqueID).hide('slide', {direction: 'right'}, 300);
		$("th#toSageH").hide();	
		if (t.is(':checked')) {
			$("td.order_data_"+uniqueID).show('slide', {direction: 'right'}, 300);
			/* $(this).show('slide', {direction: 'right'}, 1000);*/

			$("th#toSageH").show();
		}
	}


	
  </script>
