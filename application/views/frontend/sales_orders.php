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
				<h1>Sales Orders - <?=$salesOrderNum?></h1>
				<a class="create_quote bom_download" data-sales-order="<?=$salesOrderNum?>">
				Download
				</a>
				<a href="<?=base_url('orders')?>" class=" create_quote">
				< Back
				</a>
			</div>
			<div class="data-table-dash">
				<div>
				<?php
					$message	= $this->session->flashdata('message');echo $message;
				?>
					<div class="form-row one" style="float:right;">
					<input id="box1" type="checkbox" class="checkbox" value="0" style="margin-left:30px;">
					<label>Pack Items</label>
					</div>
				</div>
			
			<table class="table  table-bordered table-hover" id="quote-web-table">
				<thead>
					<tr class="inventries-tooltip-text">
						<th>##</th>
						<th>LinesKey/WTStep</th>
						<th>WHCode</th>
						<th>ItemCode</th>
						<th>ItemDesc</th>
						<th style="width: 80px;">Job Status</th>
						<th>Qty</th>
						<th>QtyUsed</th>
						<th style="display:none;">Time Taken</th>
						<th>UOM</th>
						<th>ActivityCode</th>
						<th>ActivityDesc</th>
						<!--<th>Comments</th>-->
						<th>Action</th>
					</tr>
				</thead>
				<tbody class="filter-data">
					<?php
						if(!empty($salesOrders) && !empty($salesOrders)){
							$i=0; $j=0;
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
								$jobstatus		= !empty($order->jobstatus) ? $order->jobstatus : 'Not Started';
								$timeTaken		= !empty($order->timetaken) ? $order->timetaken : '';
								$timeTakenEst	= !empty($order->timetakenest) ? $order->timetakenest : '';
								$quantityused	= !empty($order->quantityused) ? $order->quantityused : '0';
								$unitOfMeasure  = !empty($order->uom) ? $order->uom : '--';
								$parentDescription= !empty($order->parent_desc) ? $order->parent_desc : 'N/A';
								$parentItemCode = !empty($order->parent_itemcode) ? $order->parent_itemcode : 'N/A';
								$lotBatchNumber = !empty($order->lotbatchno) ? $order->lotbatchno : '';
								
								$parentcolor = '';
								if ($wtStep == '000' || $wtStep === 'N/A')
									$parentcolor = '#EAECEE';
								
								echo '<tr id="'.$i.'" style="background-color:'.$parentcolor.'">
									<td>'.$i.'</td>
									<td>'.$lineKey.' / '.$wtStep.'</td>
									<td>'.$wareHouseCode.'</td>
									<td>'.$itemCode.'</td>
									<td style="white-space:pre-wrap ; word-wrap:break-word;">'.$itemCodeDesc.'</td>
									<td>'.$jobstatus.'</td>
									<td>'.$quantityOrderedOriginal.'</td>
									<td>'.$quantityused.'</td> 
									<td style="display:none;">'.$timeTaken.'</td> 
									<td>'.$unitOfMeasure.'</td> 
									<td>'.$udfActivityCode.'</td>
									<td>'.$udfActivityDescription.'</td>';
									if ($wtStep == "899" || $udfActivityCode === 'N/A' || $udfActivityCode === 'PACK') {
										if ( $j == 0){
											$j=1;
										echo '<td>
												<a class="edit_detail update-hardware-packing-btn tooltip " data-sales-order-num="'.$salesOrder.'" data-linekey="'.$lineKey.'" data-wtstep="'.$wtStep.'" data-index="'.$i.'">
												<i class="fa fa-dropbox" aria-hidden="true"></i>
												<span class="tooltiptext">Packing </span>
												</a>
											</td>';		
										}
										else 
											echo '<td> </td>';										
									} else {
										$j=0;
										echo '<td>
												<a class="edit_detail update-sales-order-btn tooltip " data-sales-order-num="'.$salesOrder.'" data-linekey="'.$lineKey.'" data-wtstep="'.$wtStep.'" 
												data-timetake="'.$timeTaken.'" data-orderquantity="'.$quantityOrderedOriginal.'" data-comments="'.$comments.'" data-itemcode="'.$itemCode.'"
												data-itemcodedesc="'.$itemCodeDesc.'" data-activitycode="'.$udfActivityCode.'" data-activitydesc="'.$udfActivityDescription.'" data-warehouse="'.$wareHouseCode.'"
												data-jobstatus="'.$jobstatus.'" data-quantityused="'.$quantityused.'" data-timetakeest="'.$timeTakenEst.'" data-unitOfMeasure="'.$unitOfMeasure.'" data-parentDescription="'.$parentDescription.'" data-parentItemCode="'.$parentItemCode.'" data-lotBatchNumber="'.$lotBatchNumber.'" data-index="'.$i.'">
												<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
												<span class="tooltiptext">Edit </span>
												</a>
											 </td>';
										
									}
								echo '</tr>';
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
		<div class="md-content">
				
			<div class="pop-main-cont">
                <div class="pop-header">
					<h2 id="heading_sales_order_details"> Work Ticket Details </h2>
					<button class="md-close "><i class="fa fa-times" aria-hidden="true"></i></button>
				</div>
				<?=form_open('', array('class'=>'form-row ','id'=>'update-sales-order-form','data-parsley-validate'=>'data-parsley-validate','enctype'=>'multipart/form-data'));?>
				<div class="pop-body cf" >
				
					<div class="row select-area">
						<div class="form-row one">
						<label id="heading_item_step" style=" width:40%;">Item Description :</label>
						<label_p id="heading_item_activity" style=" width:60%;">Activity :</label_p>
						<label_p id="heading_parent_desc" style="white-space:pre-wrap ; word-wrap:break-word;"> Parent Description</label_p>
						</div>
					</div>
										
					<div class="row select-area">
						<div class="form-row one">
							<label id="heading_item_code"  style=" width:40%;">Item Code :</label>
							<label id="heading_item_warehouse" style=" width:60%;">WareHouse:</label> 
							<input type="hidden" name="update_itemcode" id="update_itemcode" />
							<label_p id="heading_itemdecription" style="white-space:pre-wrap ; word-wrap:break-word;">Item Description </label_p>
							<input type="hidden" name="update_sales_order_num" id="update_sales_order_num" />  
							<input type="hidden" name="update_linekey" id="update_linekey" />
							<input type="hidden" name="update_wtstep" id="update_wtstep" />
							<input type="hidden" name="update_parentitemcode" id="update_parentitemcode" />
						</div>
					</div>
																									
					<div class="row select-area">
						<div class="form-row two">
							<label id="heading_order_quantity">Actual Order Quantity :</label> 
							<input type="text" name="update_quantity" id="update_quantity" Placeholder="Actual Order Quantity" data-parsley-min="0"  data-parsley-type="number" data-parsley-required="true" maxlength="100"/>
						</div>
						
						<div class="form-row two">
							<label id="heading_order_estimated">Estimated Quantity :</label>
							<input type="text" name="update_estimatedquantity" id="update_estimatedquantity" Placeholder="Estimated Quantity" data-parsley-required="true" maxlength="100" readonly />
						</div>
					</div>

					<div class="row select-area" id="timer_row">
						<div class="form-row single">
						<div class='button1' style="margin-left: -10px; margin-top: 40px;"> </div>
						<div class='button2' style="display: none; margin-left: -10px; margin-top: 40px;"> </div>
						</div>
					
						<div class="form-row singlel" style="padding-right: 15px; width: 170px;">
							<label>Actual Time :</label> 
							<input type="text" name="update_timetaken" id="update_timetaken" Placeholder="Actual Time Taken" data-parsley-min="0" data-parsley-type="number" data-parsley-required="true" maxlength="100"/>
							<input type="hidden" name="update_timemin" id="update_timemin" />
						</div>
						
						<div class="form-row singlel" style="width: 85px;">
							<label>Worker(s) :</label> 
							<input type="text" name="update_users" id="update_users" Placeholder="1" value="1" data-parsley-min="0" data-parsley-type="number" data-parsley-required="true" maxlength="100"/>
						</div>
						
						<div class="form-row singler">
							<label>Estimated Time :</label>
							<input type="text" name="update_estimatedtimetaken" id="update_estimatedtimetaken" Placeholder="Estimated Time" data-parsley-required="false" maxlength="100" readonly />
						</div>
					</div>

					<div class="row select-area">
						<div class="form-row two">
							<label>Job Status :</label>
							<div class="select1">
								<select id="update_jobstatus" name="update_jobstatus" >
									<option value="Not Started">Not Started</option> 
									<option value="In Progress">In Progress</option> 
									<option value="Completed">Completed</option>
									<option value="On Hold">On Hold</option>
									<option value="Cancel">Cancel</option>
								</select>
							</div>
						</div>
						
						<div class="form-row two">
							<label>Lot/Batch Number :</label>
							<input type="text" name="update_lotbatchnumber" id="update_lotbatchnumber" Placeholder="Lot/Batch Number" data-parsley-required="false" maxlength="100"/>
						</div>
					</div>
										
					<div class="row select-area">
						<div class="form-row one">
							<label>Comments :</label>
							<textarea name="update_comments" id="update_comments" cols="6" placeholder="Comments" data-parsley-required="false" ></textarea>
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

<div class="md-modal md-effect-1 update-sales-order-info" id="update-sales-order-hardware-packing">
	<div class="md-content" style="width:1000px;">
		<div class="pop-main-cont">
			<div class="pop-header" style="padding-bottom: 50px;">
				<h2 id="heading_hardware_packing"> Hardware Packing  </h2>
				<button class="md-closepck"><i class="fa fa-times" aria-hidden="true"></i></button>
			</div>
			<?=form_open('', array('class'=>'form-row ','id'=>'update-sales-hardware-packing-form','data-parsley-validate'=>'data-parsley-validate','enctype'=>'multipart/form-data'));?>	
			<div class="pop-body cf" >
				<input type="hidden" name="hardware_sales_order_num" id="hardware_sales_order_num" />  
				<input type="hidden" name="hardware_linekey" id="hardware_linekey" />
				<input type="hidden" name="hardware_wtstep" id="hardware_wtstep" />
							
				<table class="table  table-bordered table-hover" id="quote-web-hardware-table">
					<thead>
						<tr class="inventries-tooltip-text">
						<th style="width: 60px; font-weight: 700; font-size: 0.80em; font-family:MyriadProRegular;">Qty</th>
						<th style="width: 80px; font-weight: 700; font-size: 0.80em; font-family:MyriadProRegular;">Est. Qty</th>
						<th style="width: 60px; font-weight: 700; font-size: 0.80em; font-family:MyriadProRegular;">Time</th>
						<th style="width: 60px; font-weight: 700; font-size: 0.80em; font-family:MyriadProRegular;">WHS</th>
						<th style="width: 100px; font-weight: 700; font-size: 0.80em; font-family:MyriadProRegular;">Material</th>
						<th style="width: 100px; display:none; font-size: 0.80em; font-family:MyriadProRegular;">Item Code</th>
						<th style="font-weight: 700; font-size: 0.80em; font-family:MyriadProRegular;">Description</th>
						</tr>
					</thead>
					<tbody class="filter-data">

					</tbody>
				</table>
														
				<div class="form-row three update-area">
					<input type="button" value="Update" class="update-quote" id="submit-update-hardware-packing" />
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

	var timer = null, 
    interval = 1000,
    value = 0;
	
	$('.button1').click(function() {
	  $('.button2').show();
	  $('.button1').hide();
	  $('#update_jobstatus').val('In Progress').change();
	 
	  var inputDig	= document.getElementById('update_timetaken').value;
	  
	  console.log('Input: ' + inputDig);
	  
	  if ( !isNaN(inputDig) && inputDig != "")
		  value = inputDig*60;
			
	  console.log('Input Convert: ' + value);
		
      if (timer !== null) return;
      timer = setInterval(function () {
		  ++value;
		  var hours = Math.floor(value/3600);
		  var minutes = Math.floor((value/60) % 60);
		  var seconds = Math.floor(value % 60);
		 $("#update_timemin").val( (hours*60) + minutes + (seconds/100));
		  
		  if (hours   < 10) {hours   = "0"+hours;}
		  if (minutes < 10) {minutes = "0"+minutes;}
          if (seconds < 10) {seconds = "0"+seconds;}
          $("#update_timetaken").val(hours + ':' + minutes + ':' + seconds);
      }, interval); 
    });
	
	$('.button2').click(function() {
	  $('.button1').show();
	  $('.button2').hide();
	  $('#update_jobstatus').val('On Hold').change();
	  clearInterval(timer);
      timer = null;
    });
	
	$(document).on('click','.update-sales-order-btn',function (){
		var index			= $(this).attr('data-index');
		var linekey			= $(this).attr('data-linekey');
		var wtstep			= $(this).attr('data-wtstep');
		var itemcode		= $(this).attr('data-itemcode');
		var warehouse		= $(this).attr('data-warehouse');
		var itemcodedesc	= $(this).attr('data-itemcodedesc');
		var activitycode	= $(this).attr('data-activitycode');
		var activitydesc	= $(this).attr('data-activitydesc');
		var orderquantity	= $(this).attr('data-orderquantity');
		var comments		= $(this).attr('data-comments');
		var salesOrderNum	= $(this).attr('data-sales-order-num');
		var jobstatus		= $(this).attr('data-jobstatus');
		var timetake		= $(this).attr('data-timetake');
		var timetakeest		= $(this).attr('data-timetakeest');
		var quantityused	= $(this).attr('data-quantityused');
		var unitofmeasure	= $(this).attr('data-unitOfMeasure');
		var parentdesc 		= $(this).attr('data-parentDescription');
		var parentitemcode  = $(this).attr('data-parentItemCode'); 
		var lotbatchnumber	= $(this).attr('data-lotBatchNumber');
		if(comments=='N/A'){
			comments		= '';
		}
		
		if (wtstep == '000' && lotbatchnumber == ""){
			lotbatchnumber = createBatchNO(salesOrderNum, linekey);
		}
		
		document.getElementById('heading_item_step').innerHTML = 'Step: ' + wtstep + '&nbsp; &nbsp; &nbsp; Activity: ' + activitycode; 
		document.getElementById('heading_item_activity').innerHTML = '[' + activitydesc + ' ]'; 
		document.getElementById('heading_parent_desc').innerHTML = parentdesc;  
		document.getElementById('heading_item_code').innerHTML = 'Item Code: ' + itemcode; 
		$('#update_itemcode').val(itemcode);
		document.getElementById('heading_item_warehouse').innerHTML = 'Warehouse: ' + warehouse; 
		$('#update_sales_order_num').val(salesOrderNum); 
		$('#update_linekey').val(linekey); 
		$('#update_wtstep').val(wtstep); 
		$('#update_parentitemcode').val(parentitemcode); 
		document.getElementById('heading_itemdecription').innerHTML = itemcodedesc;		
		document.getElementById('heading_order_quantity').innerHTML = 'Actual Order Quantity: ' + '( '+unitofmeasure + ' )';
		$('#update_quantity').val(quantityused);
		document.getElementById('heading_order_estimated').innerHTML = 'Estimated Quantity: ' + '( '+unitofmeasure + ' )'; 
		$('#update_estimatedquantity').val(orderquantity);
		$('#update_timetaken').val(timetake);
		$('#update_estimatedtimetaken').val(timetakeest);
		$('#update_jobstatus').val(jobstatus).change();
		$('#update_lotbatchnumber').val(lotbatchnumber);
		$('#update_comments').val(comments);
		document.getElementById('heading_sales_order_details').innerHTML = 'Work Ticket Details: ' + salesOrderNum + '-' + linekey;
		$('#update-sales-order-info').modal('show');
		/* Check if current job can be started */
		checkPrevWTSpep(index);
	});
	
	$(document).on('click','.update-hardware-packing-btn',function (){
		var salesOrderNum	= $(this).attr('data-sales-order-num');
		var linekey			= $(this).attr('data-linekey');
		var wtstep			= $(this).attr('data-wtstep');
		var index			= $(this).attr('data-index');
		$('#hardware_sales_order_num').val(salesOrderNum); 
		$('#hardware_linekey').val(linekey); 
		$('#hardware_wtstep').val(wtstep); 
		
		document.getElementById('heading_hardware_packing').innerHTML = 'Hardware Packing: ' + salesOrderNum + '-' + linekey; 		
		$('#update-sales-order-hardware-packing').modal('show');
		display(index, linekey, wtstep);
	});
	
	$(document).on('click','.md-close',function (){
		$('#update_timetaken').val('');
		$('#update_estimatedtimetaken').val('');
		$('#update_quantity').val('');   
		$('#update_jobstatus').val('Not Started').change();
		$('#update_lotbatchnumber').val('');
		$('.button1').show();
		$('.button2').hide();
		clearInterval(timer);
		timer = null; 
		value = 0;
		$('#update-sales-order-info').modal('hide');
	});
	
	$(document).on('click','.md-closepck',function (){
		$("#quote-web-hardware-table tr:gt(0)").remove();
		$('#update-sales-order-hardware-packing').modal('hide');
	});
	
	$(document).on('click','#submit-update-sales-order',function (){
		var inputDig	= document.getElementById('update_timemin').value;
		var numOfUsers  = document.getElementById('update_users').value; 
		if (inputDig != "")
			   $("#update_timetaken").val(inputDig*numOfUsers);
		   
		$('#update-sales-order-form').parsley().validate();
		if($('#update-sales-order-form').parsley().isValid()){
			$.post('<?=base_url('frontend/orders/updateSalesOrderDetails')?>',$('#update-sales-order-form').serialize(),function (response){
				location.reload();
			/*	var data	= JSON.parse(response);
				if(data.status=='Yes'){
					alert(data.msg);
					$('#update-sales-order-info').modal('hide');
					location.reload();
				}else{
					alert(data.msg);
				} **/
			});
		}
	});
	
	$(document).on('click','#submit-update-hardware-packing',function (){
		if($('#update-sales-hardware-packing-form').parsley().isValid()){
			$.post('<?=base_url('frontend/orders/updateHardWareOrderDetails')?>',$('#update-sales-hardware-packing-form').serialize(),function (response){
				location.reload();
			});
		}
	});
	
	$(".checkbox").on("change", function() {
		var state = $('#box1').prop('checked') ? 1: 0;
		var table = document.getElementById("quote-web-table");
		var tr = table.getElementsByTagName("tr");

		/* Show only PACK Items**/
		if (state == 1)
		{
			for (i = 1; i < tr.length; i++) {
				var td = tr[i].getElementsByTagName("td")[10];
				if (td.innerHTML.toUpperCase().indexOf("PACK") > -1 || td.innerHTML.toUpperCase().indexOf("N/A") > -1 ) {
					tr[i].style.display = "";
				} else {
					tr[i].style.display =  "none";
				} 
			}	
		}
		/* Unhide When Pack Items are not selected**/
		else
		{
			for (i = 1; i < tr.length; i++)
			{
				tr[i].style.display = "";
			}
		}
    });
	
	function checkPrevWTSpep(index){	
		var table = document.getElementById("quote-web-table");
		var tr = table.getElementsByTagName("tr");
	
		if (index > 2){ 					
			if ( (tr[index-1].getElementsByTagName("td")[5]).innerHTML.toUpperCase().indexOf("NOT STARTED") > -1 ) {
				/*console.log("NOT COMPLETED: Display Warning!");*/
				alert("Warning: Previous Step Has Not Been Completed");
			} else {
				/*console.log("Complete: Avoid Warning");*/
			} 
		}
	}
	
	/* New BOM Download */
	$(document).on("click",".bom_download",function() {
		var salesorder	= $(this).attr('data-sales-order');	 		
		var str			= window.btoa(salesorder);
		var url			= '<?=base_url('frontend/excel/viewExportWrkTicket/')?>';
		var finalUrl	= url+'/'+str;
		window.location.href	= finalUrl;
	});
	
	/* Create a Suggested Bath Number*/
	function createBatchNO(salesOrderNum, linekey){
		var d = new Date();
		var month = d.getMonth()+1;
		var day = d.getDate();
		var output =  (month<10 ? '0' : '') + month + '' + (day<10 ? '0' : '') + day + '' +d.getFullYear() ;
		
		return salesOrderNum + '-' + linekey + '-' + output;
	}
	
	function display(index, linekey, wtstep){
		var table = document.getElementById("quote-web-table");
		var tr = table.getElementsByTagName("tr");
		var lineK_step = linekey + ' / '+ wtstep;

		while (tr[index].getElementsByTagName("td")[10].innerHTML.toUpperCase().indexOf("N/A") > -1 || tr[index].getElementsByTagName("td")[10].innerHTML.toUpperCase().indexOf("PACK") > -1)
		{		
			var html  ='<tr id=' +index + '>';  
			var quantityVal = tr[index].getElementsByTagName("td")[7].innerHTML == '0' ? '' : tr[index].getElementsByTagName("td")[7].innerHTML;
			html     +='<td style="width: 60px;"><input style="width: 60px; height: 25px; type="text" name="update_qty[]" id="update_qty" value="' + quantityVal + '" Placeholder="0" data-parsley-required="false" /></td>';
			html     +='<td style="padding-top: 12px; font-size: 0.75em; font-family:MyriadProRegular;">' + tr[index].getElementsByTagName("td")[6].innerHTML + '</td>';
			html     +='<td style="width: 60px;"><input style="width: 60px; height: 25px; type="text" name="update_tmn[]" id="update_tmn" value="' + tr[index].getElementsByTagName("td")[8].innerHTML + '" Placeholder="0" data-parsley-required="false" /></td>';
			html     +='<td style="padding-top: 12px; font-size: 0.75em; font-family:MyriadProRegular;">' + tr[index].getElementsByTagName("td")[2].innerHTML + '</td>';
			html     +='<td style="padding-top: 12px; font-size: 0.75em; font-family:MyriadProRegular;">' + tr[index].getElementsByTagName("td")[3].innerHTML + '</td>';
			html     +='<td style="width: 60px; display:none;"><input style="width: 60px; height: 30px; type="text" name="update_itm[]" id="update_itm" value="' +  tr[index].getElementsByTagName("td")[3].innerHTML + '" Placeholder="0" data-parsley-required="false" /></td>';
			html     +='<td style="padding-top: 12px; font-size: 0.75em; font-family:MyriadProRegular;">' + tr[index].getElementsByTagName("td")[4].innerHTML + '</td>';
			html     +='</tr>';
			$('#quote-web-hardware-table tr:last').after(html);
		
			index++;
		}
	}
	
</script>
