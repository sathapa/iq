<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	$groupPermissions	= $this->group_permissions;
	if(empty($groupPermissions) || !in_array(28,$groupPermissions)){
		$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>You are not authorized to access this feature !.</p></div>';
		$this->session->set_flashdata('message',$message);
		redirect('dashboard');
	}
	
	//dump($specifications);
	/* Making the activity code */
	$activityCodes	= getActicityCodes();
	$activityCodeOption	= '';
	if(!empty($activityCodes)){
		foreach($activityCodes as $codes){
			$selected	= (!empty($searchDataParam['activityCode']) && $searchDataParam['activityCode']==$codes->activitycode ) ? 'selected' : '';
			$activityCodeOption	.= '<option value="'.$codes->activitycode.'" '.$selected.' >'.$codes->activitycode.'</option>';
		}
	}
?>
<!-- Right Bar Section -->
	<div class="right-bar">
		<div class="dashboard">
		<div class="form-section">
			<div class="col-sm-12 top-head">
				<h1>Manage Labor Activity Rate</h1>
				<?php
					if(!empty($groupPermissions) && in_array(29,$groupPermissions)){
				?>
				<a href="javascript:void(0)" class="create_quote create-update-labor-rate-btn" data-type="create">Add Labor Rate</a>
				<?php
					}
				?>
			</div>
			<div class="data-table-dash">
				<div>
				<?php
					$message	= $this->session->flashdata('message');echo $message;
				?>
				</div>
			<table class="labor-activity-rate-search-table">
				<?=form_open('',array('name'=>'product-option-search-form','id'=>'product-option-search-form'))?>
				<tr>
					<td width="200">
						<div class="select1 input-design">
							<label>Item Code</label>
							<input type="text" name="search_item_code" id="search_item_code"
							 value="<?=!empty($searchDataParam['itemCode'] && $searchDataParam['itemCode']!='all' ) ? $searchDataParam['itemCode'] : ''?>" placeholder="Item Code">
						</div>
					</td>
					
					<td width="200">
						<div class="select1">
							<label>Activity Code </label>
							<select id="search_activity_code" name="search_activity_code" class="quote_status">
								<option value="" >All</option>
								<?php
									echo $activityCodeOption;
								?>
							</select>
						</div>
					</td>
					
					
					<td width="200">
						<div class="select1">
							<input type="submit" value="Search" class="order-filter-button" id="labor-activity-rate-filter">
						</div>
					</td>
				</tr>
				<?=form_close()?>
			</table>
			
			<table class="table  table-bordered table-hover" id="quote-web-table">
				<thead>
					<tr class="inventries-tooltip-text">
						<th>##</th>
						<th>Item Code</th>
						<th>Activity Code</th>
						<th>Labor Rate</th>
						<th>UOM</th>
						<?php
							if(!empty($groupPermissions) && in_array(30,$groupPermissions)){
						?>
						<th>Action</th>
						<?php
							}
						?>
					</tr>
				</thead>
				<tbody class="filter-data">
					<?php
						if(!empty($laborActivityRates) && !empty($laborActivityRates)){
							$i=0;
							foreach($laborActivityRates as $val){
								$i++;
								$itemcode		= !empty($val->itemcode) ? $val->itemcode : '';
								$activityCode	= !empty($val->wt_activitycode) ? $val->wt_activitycode : '';
								$laborRate		= !empty($val->laborrate) ? $val->laborrate : '';
								$uom			= !empty($val->laborrateuom) ? $val->laborrateuom : '';
								echo '<tr id="'.$i.'">
									<td>'.$i.'</td>
									<td>'.$itemcode.'</td>
									<td>'.$activityCode.'</td>
									<td >'.$laborRate.'</td>
									<td>'.$uom.'</td>';
									if(!empty($groupPermissions) && in_array(30,$groupPermissions)){
										echo '<td>
											<a class="edit_detail create-update-labor-rate-btn tooltip " data-type="update" 
											data-item_code="'.$itemcode.'" data-activity_code="'.$activityCode.'" data-labor_rate="'.$laborRate.'" data-uom="'.$uom.'" >
											<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
											<span class="tooltiptext">Edit </span>
											</a>
										</td>';
									}
								echo '</tr>';
							}
						}else{
							echo '<tr><td colspan="5">No Records Found</td></tr>';
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
	<div class="md-modal md-effect-1 add-labor-rate" id="modal-2">
		<div class="md-content ">
			<div class="pop-main-cont">
				<div class="pop-header">
					<h2 id="heading-add-update-labor-rate-popup">Update Item Info :</h2>
					<button class="md-close">
						<i class="fa fa-times" aria-hidden="true"></i>
					</button>
				</div>
                <div class="pop-body cf">
				<?php
				echo form_open('', array('class'=>'form-row ','id'=>'updateItemInfo','data-parsley-validate'=>'data-parsley-validate'));
				?>
					<div class="row select-area">
						<div class="form-row first">
							<label>Item Code :</label>
							<input type="text" name="item_code" id="item_code" Placeholder="Item Code" maxlength="100" data-parsley-required="true"/>
							<input type="hidden" id="oldItemCode" />
						</div>
						<div class="form-row first ">
							<label>Activity Code : </label>
							<div id="activity-code-html" class="select1">
								<select name="activity_code" id="activity_code" data-parsley-required="true">
									<option value="">None</option>
									<?=$activityCodeOption?>
								</select>
							</div>
						</div>
					</div>

					<div class="row select-area">
						<div class="form-row first">
							<label>UOM : </label>
							<div class="select1 select2" id="uom-select-popup-val" >
								<select name="uom" id="uom" data-parsley-required="true" >
									<option value="">None</option>
									<option value="EA">EA</option>
									<option value="FT">FT</option>
								</select>
							</div>
						</div>
						
						<div class="form-row first">
							<label>Activity Rate : </label>
							<input type="text" name="activity_rate" id="activity_rate" Placeholder="Activity Rate" maxlength="50" data-parsley-required="true"/>
						</div>
					</div>
					
					<div class="row">
						<div class="form-row first update-area">
							<input type="button" value="Update" class="update-quote" id="create-update-submit-labor-rate-btn" />
						</div>
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
	
	
	var select = false;
	/* Auto complete item code for searchable Dropdown */ 
	$( "#search_item_code" ).autocomplete({
		source: '<?=base_url('frontend/products/autoCompleteItemCodeSearch')?>',
		open: function(event, ui) { if(select) select=false; },
		select: function (a, b) {
			select=true; 
		}
	}).blur(function(){
		var cus	= $("#search_item_code").val();
		if(!select || cus=='No Record Found !'){
			$("#search_item_code").val('');
			changeDefaultValue('');
		}
	});
	
	/* Auto complete item code for create/update labor activity rate */ 
	$( "#item_code" ).autocomplete({
		source: '<?=base_url('frontend/products/autoCompleteItemCodeSearch')?>',
		open: function(event, ui) { if(select) select=false; },
		select: function (a, b) {
			select=true; 
		}
	}).blur(function(){
		var oldItemCode	= $('#oldItemCode').val();
		var itemCode	= $("#item_code").val();
		if(!select || itemCode=='No Record Found !'){
			$("#item_code").val(oldItemCode);
		}
	});
	
	
});
	
	/* ======= Open a new popup to add new labor rate ====== */
	$(document).on('click','.create-update-labor-rate-btn',function (){
		var type	= $(this).attr('data-type');
		if(type=='create'){
			$('#item_code').val(''); $('#activity_rate').val('');
			var activityHtml	= '<select name="activity_code" id="activity_code" data-parsley-required="true"><option value=" ">None</option>';
			activityHtml	+= '<?=$activityCodeOption?>';
			activityHtml	+= '</select>';
			
			$('#activity-code-html').html(activityHtml);
			var selectedHtml	= '<option value=" " >None</option><option value="EA" >EA</option><option value="FT" >FT</option>';
			var uomHtml			= '<select name="uom" id="uom" data-parsley-required="true" >'+selectedHtml+' '; 
			uomHtml			+= '</select>'; 
			$('#uom-select-popup-val').html(uomHtml);
			$('#create-update-submit-labor-rate-btn').val('Submit');
			$('#heading-add-update-labor-rate-popup').text('Add Labor Activity Rate');
		}
		if(type=='update'){
			var itemCode		= $(this).attr('data-item_code');
			var activityCode	= $(this).attr('data-activity_code');
			var laborRate		= $(this).attr('data-labor_rate');
			var uom				= $(this).attr('data-uom');
			$('#item_code').val(itemCode); $('#activity_rate').val(laborRate);
			var activityHtml	= '<select name="activity_code" id="activity_code" data-parsley-required="true"><option value="'+activityCode+'">'+activityCode+' </option>';
			activityHtml	+= '<?=$activityCodeOption?>';
			activityHtml	+= '</select>';
			$('#activity-code-html').html(activityHtml);
			var selectedHtml	= '';
			if(uom=='EA'){
				selectedHtml	= '<option value="">None</option><option value="EA" selected> EA </option><option value="FT" > FT </option>';
			}if(uom=='FT'){
				selectedHtml	= '<option value="">None</option><option value="EA" > EA </option><option value="FT" selected> FT </option>';
			}
			var uomHtml			= '<select name="uom" id="uom" data-parsley-required="true" >'+selectedHtml+' '; 
			uomHtml			+= '</select>'; 
			$('#uom-select-popup-val').html(uomHtml);
			
			/* Old Item Code Store in hidden Field */
			$('#oldItemCode').val(itemCode);
			
			
			$('#create-update-submit-labor-rate-btn').val('Update');
			$('#heading-add-update-labor-rate-popup').text('Update Labor Activity Rate');
			
		}
		$(".select1").find('select').selectBoxIt();
		$('#modal-2').modal('show');
		
	});
	
	$(document).on('click','#create-update-submit-labor-rate-btn',function (){
		$('#updateItemInfo').parsley().validate();
		if($('#updateItemInfo').parsley().isValid()){
			$.post('<?=base_url('frontend/home/updateItemCodeData')?>',$('#updateItemInfo').serialize(),function (response){
				if(response=='No'){
					alert(response);
				}else{
					$('#modal-2').modal('hide');
					alert(response);
					location.reload(); 
				}
			});
		}
	});
	
	
	$(document).on('click','.md-close',function (){
		$('#modal-2').modal('hide');
	});

</script>
