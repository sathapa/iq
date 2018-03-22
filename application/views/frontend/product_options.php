<style>
	.custom-select {
	    position: relative;
	    width: 100%;
	    height: 35px;
	    background: #fff;
	    -webkit-user-select: none;
	    -khtml-user-select: none;
	    -moz-user-select: none;
	    -o-user-select: none;
	    user-select: none;
	    border-radius: 3px;
	    clear: both;
	    margin-bottom: 6px;
	}
	.custom-select a {
	    display: inline-block;
	    width: 100%;
	    height: 35px;
	    padding: 7px 18px 3px 7px;
	    /* margin: 2px; */
	    padding-top: 9px;
	    padding-left: 14px;
	    text-decoration: none;
	    cursor: pointer;
	    font: 1.38vh 'MyriadProRegular';
	    color: #66676b;
	    position: relative;
	    left: 0px;
	    top: 0px;
	    border: 1px solid #bebfc3;
	}
</style>

<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	$groupPermissions	= $this->group_permissions;
	
	if(empty($groupPermissions) || !in_array(31,$groupPermissions)){
		$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>You are not authorized to access this feature !.</p></div>';
		$this->session->set_flashdata('message',$message);
		redirect('dashboard');
	}
	
	/* Making the activity code */
	$activityCodes	= getActicityCodes();
	$activityCodeOption	= '';
	if(!empty($activityCodes)){
		foreach($activityCodes as $codes){
			$activityCodeOption	.= '<option value="'.$codes->activitycode.'">'.$codes->activitycode.'</option>';
		}
	}
	
	/* Making the option type */
	$optionTypes	= getOptionTypes();
	$optionTypesOption	= '';
	if(!empty($optionTypes)){
		foreach($optionTypes as $codes){
			$optionTypesOption	.= '<option value="'.$codes->product_option_type.'">'.$codes->product_option_type.'</option>';
		}
	}
	
	/* Searched Keyword	*/
	$searchItemCode		= !empty($searchParam['itemCode']) && $searchParam['itemCode']!='all' ? $searchParam['itemCode'] : '';
	$searchProductType	= !empty($searchParam['productType']) ? $searchParam['productType'] : '';
	$searchOptionType	= !empty($searchParam['optionType']) ? $searchParam['optionType'] : '';
	
	$productsInfo		= getProductTypeAsArray();
	
?>

<!-- Right Bar Section -->
	<div class="right-bar">
	<div class="dashboard">
		<div class="form-section">
			<div class="col-sm-12 top-head">
				<h1>Manage Product Options</h1>
				<?php
					if(!empty($groupPermissions) && in_array(11,$groupPermissions)){
				?>
				<a href="<?=base_url('addoption')?>" id="add_new_option" class="add-user-btn create_quote" > Add </a>
				<?php } ?>
			</div>
			<div class="data-table-dash">
				<div>
				<?php
					$message	= $this->session->flashdata('message');
					echo $message;
				?>
				</div>
			
			<table class="pruduct-option-filter-table">
				<?=form_open('',array('name'=>'product-option-search-form','id'=>'product-option-search-form'))?>
				<tr>
						<td width="200">
							<div class="">
								<label>Product </label>
								<select id="search_product_type" name="search_product_type" class="quote_status custom-select">
									<option value="" >All</option>
									<?php
										$this->user_name	= $this->session->userdata('frontendUserName');
										if(!empty($productsInfo)){
											foreach($productsInfo as $info){
												$selected	= !empty($searchProductType) && ($searchProductType==$info->product) ? 'selected' : '';
												echo '<option value="'.$info->product.'" '.$selected.'>'.ucfirst($info->product).'</option>';
											}
										}
									?>
								</select>
							</div>
						</td>
						
						<td width="200">
							<div class="select1">
								<label>Option Type</label>
								<select name="search_option_type" id="search_option_type" class="quote_status">
									<option value="">All</option>
									<?php
									if(!empty($optionTypes)){
										foreach($optionTypes as $codes){
											$selected		= !empty($searchOptionType) && $searchOptionType== $codes->product_option_type ? 'selected' : '';
											echo '<option value="'.$codes->product_option_type.'" '.$selected.'>'.$codes->product_option_type.'</option>';
										}
									}
										//echo $optionTypesOption;
									?>
								</select>
							</div>
						</td>
						
						<td width="200">
							<div class="select1 input-design">
								<label>Item Code</label>
								<input type="text" name="search_item_code" id="search_item_code" value="<?=!empty($searchItemCode) ? $searchItemCode : ''?>" placeholder="Item Code">
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
					<tr>
						<th>##</th>
						<th>Product</th>
						<th>Option Type</th>
						<th>Item Code</th>
						<th>Activity Code</th>
						<th>Item Code Desciption</th>
						<th>Quantity</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody class="filter-data">
					<?php
					if(!empty($productOptions) && !empty($productOptions)){
						$i=0;
						foreach($productOptions as $prod){
							$i++;
							$product	= !empty($prod->product) ? $prod->product : '';
							$optionType	= !empty($prod->optiontype) ? $prod->optiontype : '';
							$itemCode	= !empty($prod->itemcode) ? $prod->itemcode : '';
							$activityCode	= !empty($prod->wt_activitycode) ? $prod->wt_activitycode : '';
							$prodDesc	= !empty($prod->itemdesc) ? $prod->itemdesc : '';
							$produList	= !empty($prod->productlist) ? $prod->productlist : '';
							$quantity	= !empty($prod->default_qty) ? $prod->default_qty : 0;
							echo '<tr id="'.$product.'_'.$itemCode.'">
							<td>'.$i.'</td>
							<td>'.$product.'</td>
							<td>'.$optionType.'</td>
							<td >'.$itemCode.'</td>
							<td width="150">'.$activityCode.'</td>
							<td>'.$prodDesc.'</td>
							<td>'.$quantity.'</td>';
						?>
						<td width="235">
							<?php
								if(!empty($groupPermissions) && in_array(12,$groupPermissions)){
							?>
							<a class="view_detail edit-option-class tooltip md-trigger tooltip" 
								data-modal="modal-2" data-product="<?=$product?>" data-optiontype="<?=$optionType?>" 
								data-activitycode="<?=$activityCode?>" data-itemcode="<?=$itemCode?>" data-quantity="<?=$quantity?>" href="javascript:void(0)" >
								<i class="fa fa-pencil" aria-hidden="true"></i>
								<span class="tooltiptext">Edit</span>
							</a>
							<?php
								}
								if(!empty($groupPermissions) && in_array(13,$groupPermissions)){
							?>
							<a class="delete_detail tooltip" href="javascript:void(0)" data-row-id="<?=$product.'_'.$itemCode?>" 
							data-toggle="confirmation" data-placement="left" data-singleton="true" >
								<i class="fa fa-trash" aria-hidden="true"></i>
								<span class="tooltiptext">Delete</span>
							</a>
							<?php
								}
								if(!empty($groupPermissions) && in_array(32,$groupPermissions)){
							?>
							<a class="make-clone edit-option-class md-trigger tooltip" 
								data-modal="modal-3" data-product="<?=$product?>" data-optiontype="<?=$optionType?>" 
								data-activitycode="<?=$activityCode?>" data-itemcode="<?=$itemCode?>" data-quantity="<?=$quantity?>" href="javascript:void(0)" >
								<i class="fa fa-clone" aria-hidden="true"></i>
								<span class="tooltiptext">Clone</span>
							</a>
							<?php
								}
							?>
						</td>
					</tr>
				   <?php }
				    } ?>
				</tbody>
			</table>
			
			</div>
	</div>
		
	</div>

<!-- Right Bar Section -->
</section>
<!-- model pop html code start -->
	<div class="md-modal md-effect-1 " id="modal-2">
		<div class="md-content edit-product-option-popup">
			<div class="pop-main-cont">
                <div class="pop-header">
				<h2 id="product">Product :</h2>
                <span id="selected_product">12345768900</span>
				<button class="md-close"><i class="fa fa-times" aria-hidden="true"></i>
                </button>
                    </div>
                <div class="pop-body cf">
				<?php
				echo form_open(base_url('frontend/products/updateProductOption'), array('class'=>'form-row ','id'=>'update-quoteHeader','data-parsley-validate'=>'data-parsley-validate'));
				?>
				<input type="hidden" id="update_product" name="update_product"/>
					
					<div class="row select-area">
						<div class="form-row two">
							<label>Item Code<em >*</em> </label>
							<input type="text" name="itemcode" id="itemcode" Placeholder="Item Code " required>
							<input type="hidden" id="oldItemCode">
						</div>
					</div>
					<div class="row select-area">
						<div class="form-row two">
							<label>Option Type <em >*</em></label>
							<div class="select1" id="edit-product-option-option-type-html">
								<select name="optiontype" id="optiontype" data-parsley-required="true">
									<?php
										echo $optionTypesOption;
									?>
								</select>
							</div>
						</div>
					</div>
					
					<div class="row select-area">
						<div class="form-row two">
							<label>Activity Code<em >*</em> </label>
							<div class="select1" id="edit-product-option-activity-code-html">
								<select name="activity_code" id="activity_code" data-parsley-required="true">
									<option value="">None</option>
									<?php
										if(!empty($activityCodes)){
											foreach($activityCodes as $codes){
												
												$activityCodeOption	.= '<option value="'.$codes->activitycode.'">'.$codes->activitycode.'</option>';
											}
										}
									?>
								</select>
							</div>
						</div>
					</div>
					<div class="row select-area">
						<div class="form-row two">
							<label>Quantity <em >*</em></label>
							<input type="text" name="quantity" id="quantity" Placeholder="Quantity " data-parsley-type="digits" required>
						</div>
					</div>
					
					<div class="row">
						<div class="form-row first update-area">
							<input type="submit" value="Update" class="update-quote" id="updateQuoteHeader" />
						</div>
					</div>
				<?=form_close()?>
                </div>
		</div>
	</div>
	</div>	
	
	<div class="md-overlay"></div>
	<!-- model pop html code end -->
	
	<!-- model pop html code start -->
	<div class="md-modal md-effect-1" id="modal-3">
		<div class="md-content clone-product-option-popup">
			<div class="pop-main-cont">
                <div class="pop-header">
				<h2 id="clone">Product :</h2>
                <span id="clone_selected_product">12345768900</span>
				<button class="md-close"><i class="fa fa-times" aria-hidden="true"></i> </button>
                    </div>
                <div class="pop-body cf">
				<?php
				echo form_open(base_url('frontend/products/updateProductOption'), array('class'=>'form-row ','id'=>'update-quoteHeader','data-parsley-validate'=>'data-parsley-validate'));
				?>
				<input type="hidden" id="clone_product" name="clone_product"/>
					
					<div class="row select-area">
						<div class="form-row two">
							<label>Item Code<em >*</em> </label>
							<input type="text" name="clone_itemcode" id="clone_itemcode" Placeholder="Item Code " required>
							<input type="hidden" id="old_clone_itemcode" >
						</div>
					</div>
					<div class="row select-area">
						<div class="form-row two">
							<label>Option Type <em >*</em></label>
							<div class="select1" id="clone-product-option-option-type-html">
								<select name="clone_optiontype" id="clone_optiontype" data-parsley-required="true">
									<?php
										echo $activityCodeOption;
									?>
								</select>
							</div>
						</div>
					</div>
					
					<div class="row select-area">
						<div class="form-row two ">
							<label>Activity Code<em >*</em> </label>
							<div class="select1" id="clone-product-option-activity-code-html">
								<select name="clone_activity_code" data-parsley-required="true">
									<?php
										echo $activityCodeOption;
									?>
								</select>
							</div>
						</div>
					</div>
					<div class="row select-area">
						<div class="form-row two">
							<label>Quantity <em >*</em></label>
							<input type="text" name="clone_quantity" id="clone_quantity" Placeholder="Quantity " data-parsley-type="digits" required>
						</div>
					</div>
					
					<div class="row">
						<div class="form-row first update-area">
							<input type="submit" value="Clone" class="update-quote" id="makeCloneBtn" />
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
	/* Auto Complete Search Item Code for Search Section */
	$( "#search_item_code" ).autocomplete({
		source: '<?=base_url('frontend/products/autoCompleteItemCodeSearch')?>',
		open: function(event, ui) { if(select) select=false; },
		select: function (a, b) {
			select=true; 
		}
	}).blur(function(){
		var itemCode	= $("#search_item_code").val();
		if(!select || itemCode=='No Record Found !'){
			$("#search_item_code").val('');
		}
	});
	
	/* Auto Complete Search Item Code for Edit Item Code */
	$( "#itemcode" ).autocomplete({
		source: '<?=base_url('frontend/products/autoCompleteItemCodeSearch')?>',
		open: function(event, ui) { if(select) select=false; },
		select: function (a, b) {
			select=true; 
		}
	}).blur(function(){
		var oldItemCode	= $('#oldItemCode').val();
		var itemCode	= $("#itemcode").val();
		if(!select || itemCode=='No Record Found !'){
			$("#itemcode").val(oldItemCode);
		}
	});
	
	/* Auto Complete Search Item Code for Clone Item Code */
	$( "#clone_itemcode" ).autocomplete({
		source: '<?=base_url('frontend/products/autoCompleteItemCodeSearch')?>',
		open: function(event, ui) { if(select) select=false; },
		select: function (a, b) {
			select=true; 
		}
	}).blur(function(){
		var oldItemCode	= $('#old_clone_itemcode').val();
		var itemCode	= $("#clone_itemcode").val();
		if(!select || itemCode=='No Record Found !'){
			$("#clone_itemcode").val(oldItemCode);
		}
	});
	
});

	$(document).on('click','.edit-option-class',function (){
		var allActivityCode	= '<?=$activityCodeOption;?>';
		var alloptionTypes	= '<?=$optionTypesOption;?>';
		var product		= $(this).attr('data-product');
		var optionType	= $(this).attr('data-optiontype');
		var itemCode	= $(this).attr('data-itemcode');
		var actCode		= $(this).attr('data-activitycode');
		var quantity	= $(this).attr('data-quantity');
		var activityCodeHtml	= '<select name="activity_code" id="activity_code" data-parsley-required="true"><option value="'+actCode+'">'+actCode+'</option>'+allActivityCode+'</select>';
		var optionTypeHtml		= '<select name="optiontype" id="optiontype" data-parsley-required="true"><option value="'+optionType+'">'+optionType+'</option>'+alloptionTypes+'</select>';
		$('#update_product').val(product);$('#selected_product').text(product);
		$('#edit-product-option-activity-code-html').html(activityCodeHtml);
		$('#edit-product-option-option-type-html').html(optionTypeHtml);
		$('#itemcode').val(itemCode);
		$('#oldItemCode').val(itemCode);
		/*$('#optiontype').val(optionType);*/
		$('#activity_code').val(actCode);$('#quantity').val(quantity);
		$(".select1").find('select').selectBoxIt();
	});
	
	/* Make Poduct option Clone */ 
	$(document).on('click','.make-clone',function (){
		var allActivityCode	= '<?=$activityCodeOption;?>';
		var alloptionTypes	= '<?=$optionTypesOption;?>';
		var product		= $(this).attr('data-product');
		var optionType	= $(this).attr('data-optiontype');
		var itemCode	= $(this).attr('data-itemcode');
		var actCode		= $(this).attr('data-activitycode');
		var quantity	= $(this).attr('data-quantity');
		var activityCodeHtml	= '<select name="activity_code" id="clone_activity_code" data-parsley-required="true"><option value="'+actCode+'">'+actCode+'</option>'+allActivityCode+'</select>';
		var optionTypeHtml		= '<select name="clone_optiontype" id="clone_optiontype" data-parsley-required="true"><option value="'+optionType+'">'+optionType+'</option>'+alloptionTypes+'</select>';
		$('#clone_product').val(product);$('#clone_selected_product').text(product);
		$('#clone-product-option-activity-code-html').html(activityCodeHtml);
		$('#clone-product-option-option-type-html').html(optionTypeHtml);
		$('#clone_itemcode').val(itemCode);
		$('#old_clone_itemcode').val(itemCode);
		/*$('#clone_optiontype').val(optionType);*/
		$('#clone_activity_code').val(actCode);$('#quantity').val(quantity);
		$(".select1").find('select').selectBoxIt();
	});
	
	$('[data-toggle=confirmation]').confirmation({
		onConfirm: function() {
			var item_code	= 'A';
			var rowId		= $(this).attr('data-row-id');
			if(item_code!=''){
				$.post('<?=base_url('frontend/products/deleteProductOption')?>',{'item_code':item_code},function(response){
					alert(response);
				});
			}
		}
	});
	
	$(function() {
		$(".custom-select").customselect();
	});
</script>
