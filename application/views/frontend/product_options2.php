<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	$groupPermissions	= $this->group_permissions;
	$activityCodes	= getActicityCodes();
	$activityCodeOption	= '';
	if(!empty($activityCodes)){
		foreach($activityCodes as $codes){
			$activityCodeOption	.= '<option value="'.$codes->activitycode.'">'.$codes->activitycode.'</option>';
		}
	}
?>
<!-- Right Bar Section -->
	<div class="right-bar">
		<div class="dashboard">
		<div class="form-section">
			<div class="top-head">
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
							<a class="delete_detail tooltip" href="javascript:void(0)" data-row-id="<?=$product.'_'.$itemCode?>" data-toggle="confirmation" data-placement="left" data-singleton="true" >
								<i class="fa fa-trash" aria-hidden="true"></i>
								<span class="tooltiptext">Delete</span>
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
	<div class="md-modal md-effect-1" id="modal-2">
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
						</div>
					</div>
					<div class="row select-area">
						<div class="form-row two">
							<label>Option Type <em >*</em></label>
							<input type="text" name="optiontype" id="optiontype" Placeholder="Option Type " required>
						</div>
					</div>
					
					<div class="row select-area">
						<div class="form-row two ">
							<label>Activity Code<em >*</em> </label>
							<div class="select1" id="edit-product-option-activity-code-html">
								<select name="activity_code" data-parsley-required="true">
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
	
	$(document).on('click','.edit-option-class',function (){
		var allActivityCode	= '<?=$activityCodeOption;?>';
		var product		= $(this).attr('data-product');
		var optionType	= $(this).attr('data-optiontype');
		var itemCode	= $(this).attr('data-itemcode');
		var actCode		= $(this).attr('data-activitycode');
		var quantity	= $(this).attr('data-quantity');
		var activityCodeHtml	= '<select name="activity_code" data-parsley-required="true"><option value="'+actCode+'">'+actCode+'</option>'+allActivityCode+'</select>';
		$('#update_product').val(product);$('#selected_product').text(product);
		$('#edit-product-option-activity-code-html').html(activityCodeHtml);
		$('#optiontype').val(optionType);
		$('#itemcode').val(itemCode);
		$('#activity_code').val(actCode);$('#quantity').val(quantity);
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
</script>
