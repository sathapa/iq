<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	$groupPermissions	= $this->group_permissions;
	//dump($specifications);
?>
<style>
#quote-web-table_paginate.dataTables_paginate {
    display: none;
    padding-top: 10px;
}
/*color coding for available value*/
	.avail{
		height: 30px;
	    width: 50px;
	    padding-top: 6px;
	    border-radius: 4px;
	    text-align: center;
	    color: darkslateblue;
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
				<h1>Search Order</h1>
				<!--<a href="javascript:void(0)" onclick="javascrip:alert('Coming Soon')" class=" create_quote">Download PDF</a>-->
				<a href="javascript:void(0)" class="download-orders-csv create_quote">Download </a>
			</div>
			<div class="data-table-dash">
				<div>
				<?php
					$message	= $this->session->flashdata('message');echo $message;
				?>
				</div>
			<table class="orders-filter-table">
				<?=form_open('',array('name'=>'order-filter-form','id'=>'order-filter-form'))?>
				<tr>
						<td width="200">
							<div class="select1 input-design">
								<label>Customer Number</label>
								<input type="text" name="search_customer" id="search_customer" 
								value="<?=!empty($filterData['customer_sage_number']) && $filterData['customer_sage_number']!='all' ? $filterData['customer_sage_number'] :'';?>" 
								placeholder="Customer Number">
							</div>
						</td>

						<td width="200">
							<div class="select1">
								<label>Order Status </label>
								<select id="order_status" name="order_status" class="quote_status">
									<option value="Open" <?=(!empty($filterData['order_status']) && $filterData['order_status']=='Open') ? 'selected' : ''?>>Open</option>
									<option value="Hold" <?=(!empty($filterData['order_status']) && $filterData['order_status']=='Hold') ? 'selected' : ''?>>Hold</option>
									<option value="Close" <?=(!empty($filterData['order_status']) && $filterData['order_status']=='Close') ? 'selected' : ''?> >Close</option>
									<option value="Deleted" <?=(!empty($filterData['order_status']) && $filterData['order_status']=='Deleted') ? 'selected' : ''?> >Deleted</option>
									<option value="All" <?=(!empty($filterData['order_status']) && $filterData['order_status']=='All') ? 'selected' : ''?> >All</option>
								</select>
							</div>
						</td>
						<td width="200">
							<div class="select1 input-design">
								<label>Ship Date From</label>
								<input type="text" class="date" name="ship_date_from" id="ship_date_from" placeholder="Ship Date From" value="<?=!empty($filterData['ship_date_from']) ? $filterData['ship_date_from'] : $currentDate?>">
							</div>
						</td>
						<td width="200">
							<div class="select1 input-design">
								<label>Ship Date To</label>
								<input type="text" class="date" name="ship_date_to" id="ship_date_to" placeholder="Ship Date To" value="<?=!empty($filterData['ship_date_to']) ? $filterData['ship_date_to'] : $currentDate?>">
							</div>
						</td>
						<td width="200">
							<div class="select1">
								<label>Shipping Method</label>
								<select id="shipping_method" name="shipping_method" class="quote_status">
									<option value="All" <?=!empty($filterData['shipp_method']) && $filterData['shipp_method']=='All' ? 'selected' : ''?> >All</option>
									<?=getQuoteHeaderLookUp('shipping_code',$filterData['shipp_method']);?>
								</select>
							</div>
						</td>
						
						<td width="200">
							<div class="select1">
								<label>Shipping Location</label>
								<select name="shipping_location" id="shipping_location" class="quote_status">
									<option value="All" <?=(!empty($filterData['shipp_location']) && $filterData['shipp_location']=='All') ? 'selected' : '' ?>>All</option>
									<option value="000" <?=(!empty($filterData['shipp_location']) && $filterData['shipp_location']=='000') ? 'selected' : '' ?> >000</option>
									<option value="003" <?=(!empty($filterData['shipp_location']) && $filterData['shipp_location']=='003') ? 'selected' : '' ?>>003</option>
									<option value="181" <?=(!empty($filterData['shipp_location']) && $filterData['shipp_location']=='181') ? 'selected' : '' ?>>181</option>
									<option value="430" <?=(!empty($filterData['shipp_location']) && $filterData['shipp_location']=='430') ? 'selected' : '' ?>>430</option>
								</select>
							</div>
						</td>
						
						<td width="200">
							<div class="select1 input-design">
								<label class="order-show-details">Ref# (SO/PO/QW)</label>
								<input type="text" name="tracking_ref" id="tracking_ref" placeholder="Ref# (SO/PO/QW)" value="<?=!empty($filterData['tracking_ref']) ? $filterData['tracking_ref'] : ''?>">
							</div>
						</td>
						<td width="200">
							<div class="select1">
								<input type="submit" value="Filter" class="order-filter-button" id="order-filter">
							</div>
						</td>
					</tr>
				<?=form_close()?>
			</table>
			
			
			<table class="table  table-bordered table-hover" id="quote-web-table">
				<thead>
					<tr class="inventries-tooltip-text">
						<th>##</th>
						<th></th>
						<th>SO #</th>
						<th>WT Class</th>
						<th>Division</th>
						<th>Customer </th>
						<th>Amount </th>
						<th>Freight </th>
						<th>Order Status </th>
						<th>Prod Status </th>
						<th>Location </th>
						<th>Ship Expire </th>
						<th>Ship Via </th>
						<th>Weight </th>
						<th>Tracking Ref </th>
						<th>Action </th>
						
					</tr>
				</thead>
				<tbody class="filter-data">
					<?php
						if(!empty($orders) && !empty($orders)){
							$i=0;
							foreach($orders as $order){
								$i++;
								$salesOrder		= !empty($order->salesorderno) ? $order->salesorderno : '';
								
								$wtClass		= !empty($order->wt_class) ? $order->wt_class : '';
								$arDivisionNo	= !empty($order->ardivisionno) ? $order->ardivisionno : '';
								$customerno		= !empty($order->customerno) ? $order->customerno : '';
								$salespersonName= !empty($order->salespersonname) ? $order->salespersonname : '';
								$customerName	= !empty($order->customername) ? $order->customername : '';
								$shipExpireDate	= !empty($order->shipexpiredate) ? explode('T',$order->shipexpiredate) : '';
								$amount			= !empty($order->amount) ? $order->amount : '00';
								$weight			= !empty($order->weight) ? $order->weight : '00';
								$shipVia		= !empty($order->shipvia) ? $order->shipvia : '';
								$freightAmt		= !empty($order->freightamt) ? $order->freightamt : '00';
								$orderStatus	= !empty($order->orderstatus) ? $order->orderstatus : '';
								$prodStatus		= !empty($order->production_status) ? $order->production_status : '';
								$warehousecode	= !empty($order->warehousecode) ? $order->warehousecode : '';
								$trackingRef	= !empty($order->tracking_ref) ? $order->tracking_ref : '';
								$disclaimerFlag	= !empty($order->disclaimer_flag) ?  '<span><img src="'.base_url('assets/front/images/exclamation.jpg').'"></span>' : '';
								
								$orderStatusDisplay	= '';
								if(!empty($orderStatus) && $orderStatus=='A'){
									$orderStatusDisplay		= 'Open';
								}
								if(!empty($orderStatus) && $orderStatus=='H'){
									$orderStatusDisplay		= 'Hold';
								}
								if(!empty($orderStatus) && $orderStatus=='C'){
									$orderStatusDisplay		= 'Close';
								}
								if(!empty($orderStatus) && $orderStatus=='X'){
									$orderStatusDisplay		= 'Canceled';
								}
								
								$expireShipDate	= !empty($shipExpireDate[0]) ? $shipExpireDate[0] : 'N/A';
								echo '<tr id="'.$i.'">
									<td>'.$i.'</td>
									<td>'.$disclaimerFlag.'</td>
									<td>'.$salesOrder.'</td>
									<td>'.$wtClass.'</td>
									<td>'.$arDivisionNo.'</td>
									<td>'.$customerName.'</td>
									<td>'.$amount.'</td>
									<td>'.$freightAmt.'</td>
									<td width="100"><div class="avail" style="background-color: '.getProperColorOrderStatus($orderStatusDisplay).'">'.$orderStatusDisplay.'</div></td>
									<td>'.$prodStatus.'</td>
									<td>'.$warehousecode.'</td>
									<td width="100">'.$expireShipDate.'</td>
									<td>'.$shipVia.'</td>
									<td>'.$weight.'</td>';
									echo '<td width="100">';
										if(!empty($trackingRef)){
											echo '<a href="'.$trackingRef.'" target="_blank">Link</a>';
										}else{
											echo '<a target="_blank">N/A</a>';
										}
										echo ' </td>
							
										<td width="250">
											<a class="edit_detail create-update-netform-btn tooltip" href="'.base_url('salesorders/'.$salesOrder).'">
											<i class="fa fa-shopping-cart" aria-hidden="true"></i>
											<span class="tooltiptext">Sales Orders </span>
											</a>
											<a href="javascript:void(0)" class="make-clone generate-pdf tooltip" data-id="'.$salesOrder.'" >
												<i class="fa fa-file-pdf-o" aria-hidden="true"></i>
												<span class="tooltiptext">Generate PDF</span>
											</a> ';
											echo '<a href="javascript:void(0)" class="edit_detail additional-info tooltip" data-id="'.$salesOrder.'" >
													<i class="fa fa-info-circle" aria-hidden="true"></i>
													<span class="tooltiptext">Additional Details</span>
												 </a>
												 <a class="make-clone create-update-netform-btn tooltip" href="'.base_url('salesorderdocuments/'.$salesOrder).'">
													<i class="fa fa-file-text" aria-hidden="true"></i>
													<span class="tooltiptext">Sales Order Document </span>
												</a> ';
											if(!empty($trackingRef) && $trackingRef!='N/A'){
												echo '<a href="'.base_url('sendOrder/'.base64_encode($trackingRef)).'" target="_blank" 
													class="view_detail tooltip proposaldownload" >
													<i class="fa fa-envelope" aria-hidden="true"></i>
													<span class="tooltiptext">Tracking  Number </span>
												</a> ';
											}
										echo '</td>
								</tr>';
							}
						}else{
							echo '<tr><td colspan="16">No Records Found</td></tr>';
						}
					?>
				</tbody>
			</table>
			
			</div>
		</div>
		
	</div>

<!-- Right Bar Section -->
</section>

	<div class="md-modal md-effect-1 show-specification" id="show-specification">
		<div class="md-content">
			<div class="pop-main-cont">
				<div class="pop-header">
					<h2 id="item-code"></h2>
					<button class="md-close "><i class="fa fa-times" aria-hidden="true"></i></button>
				</div>
				<div class="pop-body cf" id="item-code-show-specification">
					<div class="item-code-specification-loader">
						<h3>Processing...</h3>
					</div>
				</div>
			</div>
		</div>
	</div>	
	
	<div class="md-overlay"></div>
	<!-- model pop html code end -->
	
	<div class="md-modal md-effect-1 generate-pdf-view" id="generate-pdf-view">
		<div class="md-content">
			<div class="pop-main-cont">
				<div class="pop-header">
					<h2 id="item-code"></h2>
					<button class="md-close"><i class="fa fa-times" aria-hidden="true"></i></button>
				</div>
				<div class="pop-body cf" id="">
					<div class="generate-pdf-view-loader" id="generate-pdf-sales-order">
						<h2>Generate PDF of Sales Order [ --- ]</h2>
					</div>
					<div class="main-parent">
						<?php
							echo form_open('',array('id'=>'generate_pdf_form'));
							echo '<input type="hidden" name="sales_order_no" id="sales_order_no" value="">';
						?>
						<div class="row">
							<div class=" half">
								<div class="custom-check">
									<input type="checkbox" class="pull-left checkbox-custom" 
										checked name="sales_order" id="sales-order" 
										value="<?php echo base_url('frontend/orders/downloadSalesorders/')?>">
								</div>
								<div class="custom-label">
									<label class="checkbox-custom-label" for="sales-order">Sales Order</label>
								</div>
							</div>
							<div class=" half">
								<div class="custom-check">
									<input type="checkbox" class="pull-left checkbox-custom" name="invoice" id="invoice" 
										value="<?php echo base_url('frontend/orders/downloadSalesorderInvoice/')?>">
								</div>
								<div class="custom-label">
									<label class="checkbox-custom-label" for="invoice">Invoice</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class=" half">
								<div class="custom-check">
									<input type="checkbox" class="pull-left checkbox-custom" name="packing_list" id="packing_list"
										value="<?php echo base_url('frontend/orders/downloadPackagingList/')?>">
								</div>
								<div class="custom-label">
									<label class="checkbox-custom-label" for="packing_list">Packing List</label>
								</div>
							</div>
							<div class=" half">
								<div class="custom-check">
									<input type="checkbox" class="pull-left checkbox-custom" name="packing_production_sheet" 
										id="packing_production_sheet" 
											value="<?php echo base_url('frontend/orders/downloadPackingProductionSheet/')?>">
								</div>
								<div class="custom-label">
									<label class="checkbox-custom-label" for="packing_production_sheet">Packaging Production Sheet</label>
								</div>
							</div>
						</div>
						<?php
							echo form_close();
						?>
						<div class="row">
							<div class="half generate-btn-div">
								<input type="button" value="Generate PDF" class="clone_button generate_pdf_btn" id="generate-pdf" />
							</div>
							<div class="loader-processing half" style="display:none;">
								<img src="<?=base_url('assets/front/images/loading2.gif')?>">
							</div>
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
	
	var selectNew = false;
	$( "#search_customer" ).autocomplete({
		source: '<?=base_url('frontend/home/getCustomer')?>',
		open: function(event, ui) { if(selectNew) selectNew=false; },
		select: function (a, b) {
			selectNew=true;
		}
	}).blur(function(){
		var cus	= $("#search_customer").val();
		if(!selectNew || cus=='No Record Found !'){
			$("#search_customer").val('');
		}
	});
	
});
	
	$(".date").datepicker({
		dateFormat: 'yy-mm-dd' 
		/*minDate:new Date()*/
	});
	
	/* Csv Download the order data */
	$(document).on('click','.download-orders-csv',function (){
		var orderStatus		= $('#order_status').val();
		var shipDateFrom	= $('#ship_date_from').val();
		var shipDateTo		= $('#ship_date_to').val();
		var shipMethod		= $('#shipping_method').val();
		var shipLocation	= $('#shipping_location').val();
		var str				= orderStatus+'#'+shipDateFrom+'#'+shipDateTo+'#'+shipMethod+'#'+shipLocation;
			str				= window.btoa(str);
		var url			= '<?=base_url('frontend/excel/downloadOrdersList/')?>';
		var finalUrl	= url+'/'+str;
		window.location.href	= finalUrl;
	});
	
	
	$(document).on('click','.additional-info',function (){
		var salesOrder	= $(this).attr('data-id');
		$.post('<?=base_url('/frontend/orders/getOrderAddistionalInfo')?>',{'sales_order':salesOrder},function (response){
			var data	= JSON.parse(response);
			$('#item-code-show-specification').html(data.html);
		});
		$('#show-specification').modal('show');
	});
	
	$(document).on('click','.md-close',function (){
		$('#show-specification').modal('hide');
		$('#generate-pdf-view').modal('hide');
	});
	
	/* Prem Yadav (TIS) This click event used for generate the sales order pdf */
	$(document).on('click','.generate-pdf',function (){
		var salesOrder = $(this).attr('data-id');
		if(salesOrder!=''){
			$('#generate-pdf-sales-order').html('<h2>Generate PDF of Sales Order [ '+salesOrder+' ]</h2>');
			$('#sales_order_no').val(salesOrder);
		}
		$('#generate-pdf-view').modal('show');
	});
	
	/* Prem Yadav (TIS)  This event used for display the generate pdf view.*/ 
	$(document).on('click','#generate-pdf',function (){
		var salesOrderNumber 	= $('#sales_order_no').val();
		$(this).val('Processing...');
		$('.loader-processing').show();
		
		if($('#sales-order'). prop("checked") == true){
			var url = $('#sales-order').val();
			$.post(url,{'salesOrderNumber':salesOrderNumber},function (response){
				
			});
		}

		if($('#invoice'). prop("checked") == true){
			var url = $('#invoice').val();
			$.post(url,{'salesOrderNumber':salesOrderNumber},function (response){
				
			});
		}
		
		if($('#packing_list'). prop("checked") == true){
			var url = $('#packing_list').val();
			$.post(url,{'salesOrderNumber':salesOrderNumber},function (response){
				
			});
		}
		if($('#packing_production_sheet'). prop("checked") == true){
			var url = $('#packing_production_sheet').val();
			$.post(url,{'salesOrderNumber':salesOrderNumber},function (response){
			});
		}
		var finalUrl = '<?=base_url('salesorderdocuments')?>';
		setTimeout(
		           function(){
		           		$('.loader-processing').hide();
						$('#generate-pdf').val('Generated');
						window.location.href=finalUrl+'/'+salesOrderNumber
					}, 
		           5000
		);
	});
	
</script>