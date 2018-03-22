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
			<div class="top-head">
				<h1>Sales Orders</h1>
			</div>
			<div class="data-table-dash">
				<div>
				<?php
					$message	= $this->session->flashdata('message');echo $message;
				?>
				</div>
			
			<table class="table  table-bordered table-hover" id="quote-web-table">
				<thead>
					<tr class="inventries-tooltip-text">
						<th>##</th>
						<th>LinesKey/WTStep</th>
						<th>WHCode</th>
						<th>ItemCode</th>
						<th>ItemDesc</th>
						<th>Quantity</th>
						<th>ActivityCode</th>
						<th>ActivityDesc</th>
						<!--<th>TimeTaken</th>
						<th>QuanityUsed</th>-->
						<th>Comments</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody class="filter-data">
					<?php
						if(!empty($salesOrders) && !empty($salesOrders)){
							$i=0;
							foreach($salesOrders as $order){
								$i++;
								$salesOrder		= !empty($order->salesorderno) ? $order->salesorderno : '';
								$itemCode		= !empty($order->itemcode) ? $order->itemcode : '';
								$itemCodeDesc	= !empty($order->itemcodedesc) ? $order->itemcodedesc : '';
								$quantityOrderedOriginal	= !empty($order->quantityorderedoriginal) ? $order->quantityorderedoriginal : '0';
								$wareHouseCode	= !empty($order->warehousecode) ? $order->warehousecode : '0';
								$udfActivityCode= !empty($order->udf_activity_code) ? $order->udf_activity_code : 'N/A';
								$udfActivityDescription= !empty($order->udf_activity_description) ? $order->udf_activity_description : 'N/A';
								$comments		= !empty($order->comments) ? $order->comments : 'N/A';
								$lineKey		= !empty($order->jt158_wtparentlinekey) ? $order->jt158_wtparentlinekey : 'N/A';
								$wtStep			= !empty($order->jt158_wtstep) ? $order->jt158_wtstep : 'N/A';
								$timeTaken		= '';
								echo '<tr id="'.$i.'">
									<td>'.$i.'</td>
									<td>'.$lineKey.' / '.$wtStep.'</td>
									<td>'.$wareHouseCode.'</td>
									<td>'.$itemCode.'</td>
									<td>'.$itemCodeDesc.'</td>
									<td>'.$quantityOrderedOriginal.'</td>
									<td>'.$udfActivityCode.'</td>
									<td>'.$udfActivityDescription.'</td>
									<td>'.$comments.'</td>
									<td>
										<a class="edit_detail update-sales-order-btn tooltip " data-sales-order-num="'.$salesOrder.'" data-linekey="'.$lineKey.'" data-wtstep="'.$wtStep.'" 
											data-timetake="'.$timeTaken.'" data-orderquantity="'.$quantityOrderedOriginal.'" data-comments="'.$comments.'">
											<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
											<span class="tooltiptext">Edit </span>
										</a>
									</td>
								</tr>';
							}
						}else{
							echo '<tr><td colspan="8">No Records Found</td></tr>';
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
	<div class="md-modal md-effect-1 update-sales-order-info" id="update-sales-order-info">
		<div class="md-content ">
			<div class="pop-main-cont">
                <div class="pop-header">
					<h2 id="heading-netform-allowance">Update Sales Order Details </h2>
					<button class="md-close "><i class="fa fa-times" aria-hidden="true"></i></button>
				</div>
				<?=form_open('', array('class'=>'form-row ','id'=>'update-sales-order-form','data-parsley-validate'=>'data-parsley-validate','enctype'=>'multipart/form-data'));?>
				<div class="pop-body cf" >
					<div class="row select-area">
						<div class="form-row two">
							<label>Line Key :</label>
							<input type="text" name="update_linekey" id="update_linekey" Placeholder="Line Key" data-parsley-required="true" maxlength="100"/>
							<input type="hidden" name="update_sales_order_num" id="update_sales_order_num" />
						</div>
						
						<div class="form-row two">
							<label>WT Step :</label>
							<input type="text" name="update_wtstep" id="update_wtstep" Placeholder="WT Step" data-parsley-required="true" maxlength="100"/>
						</div>
					</div>
					<div class="row select-area">
						<div class="form-row two">
							<label>Time Taken :</label>
							<input type="text" name="update_timetaken" id="update_timetaken" Placeholder="Time Taken" data-parsley-min="0" data-parsley-type="number" data-parsley-required="true" maxlength="100"/>
						</div>
						
						<div class="form-row two">
							<label>Order Quantity :</label>
							<input type="text" name="update_quantity" id="update_quantity" Placeholder="Order Quantity" data-parsley-min="0"  data-parsley-type="number" data-parsley-required="true" maxlength="100"/>
						</div>
					</div>
					
					
					<div class="row select-area">
						<div class="form-row one">
							<label>Comments :</label>
							<textarea name="update_comments" id="update_comments" cols="5" placeholder="Comments" data-parsley-required="true" ></textarea>
						</div>
					</div>
					
					<div class="form-row three update-area">
						<input type="button" value="Update" class="update-quote" id="submit-update-sales-order" />
					</div>
					<?=form_close()?>
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
	
	$(document).on('click','.update-sales-order-btn',function (){
		var linekey			= $(this).attr('data-linekey');
		var wtstep			= $(this).attr('data-wtstep');
		var timetaken		= $(this).attr('data-timetaken');
		var orderquantity	= $(this).attr('data-orderquantity');
		var comments		= $(this).attr('data-comments');
		var salesOrderNum	= $(this).attr('data-sales-order-num');
		if(comments=='N/A'){
			comments		= '';
		}
		$('#update_linekey').val(linekey); $('#update_wtstep').val(wtstep);
		$('#update_quantity').val(orderquantity); $('#update_quantity').val(timetaken);
		$('#update_comments').val(comments);$('#update_sales_order_num').val(salesOrderNum);
		$('#update-sales-order-info').modal('show');
	});
	
	$(document).on('click','.md-close',function (){
		$('#update-sales-order-info').modal('hide');
	});
	
	$(document).on('click','#submit-update-sales-order',function (){
		$('#update-sales-order-form').parsley().validate();
		if($('#update-sales-order-form').parsley().isValid()){
			$.post('<?=base_url('frontend/orders/updateSalesOrderDetails')?>',$('#update-sales-order-form').serialize(),function (response){
				var data	= JSON.parse(response);
				if(data.status=='Yes'){
					alert(data.msg);
					$('#update-sales-order-info').modal('hide');
					location.reload();
				}else{
					alert(data.msg);
				}
			});
		}
	});
	

</script>
