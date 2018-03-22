<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	$activityCodes	= getActicityCodes();
	$activityCodeOption	= '';
	if(!empty($activityCodes)){
		foreach($activityCodes as $codes){
			$activityCodeOption	.= '<option value="'.$codes->activitycode.'">'.$codes->activitycode.'</option>';
		}
	}
	
	$optionTypes	= getOptionTypes();
	$optionTypesOption	= '';
	if(!empty($optionTypes)){
		foreach($optionTypes as $codes){
			$optionTypesOption	.= '<option value="'.$codes->product_option_type.'">'.$codes->product_option_type.'</option>';
		}
	}
	
?>

<!-- Right Bar Section -->
	<div class="right-bar">
		<div class="form-section">
			<div class="top-head">
				<h1 id="quoting-heading">Product Options [ Add ]</h1>
				<a href="<?=base_url('products')?>" class="back-btn  create_quote" > < Back</a>
			</div>
		<div class="inner-form" id="innerformdetails">
		<div><?php $message	= $this->session->flashdata('message'); echo $message;?></div>
		<div class="form-group addproductoptionpage" id="add_product_options">
		
		<?php
			echo form_open('', array('class'=>'form-row ','id'=>'product_option_form','data-parsley-validate'=>'data-parsley-validate'));
		?>
		<div class="row">
		<div class="form-row half">
			<div class="form-row three">
				<label>Web Product <em >*</em></label>
				<div class="select1" id="status-select">
					<select id="choose-product" class="changeCustom">
						<?php $this->user_name	= $this->session->userdata('frontendUserName');
						echo getProductType("$this->user_name");?>
					</select>
				</div>
			</div>
			
			<div class="form-row three">
				<label>Product <em >*</em></label>
				<div class="select1 product-select">
					<select id="product" name="product[]" data-parsley-required="true">
						<option value="">None</option>
					</select>
				</div>
			</div>
			
			<div class="form-row three">
				<label>Item Code <em >*</em></label>
				<div class="select1">
					<input type="text" value="" name="itemcode[]" id="itemcode" class="add-product-option-itemcode" Placeholder="Item Code " required>
				</div>
			</div>
			
		</div>
		
		<div class="form-row half">
			<div class="form-row three">
				<label>Option Type <em >*</em></label>
				<div class="select1">
					<select name="optiontype[]" id="optiontype" data-parsley-required="true">
						<option value="">None</option>
						<?php
							echo $optionTypesOption;
						?>
					</select>
				</div>
			</div>
			
			<div class="form-row three">
				<label>Activity Code <em >*</em></label>
				<div class="select1">
					<select name="activity_code[]" data-parsley-required="true">
						<option value="">None</option>
						<?php
							echo $activityCodeOption;
						?>
					</select>
				</div>
			</div>
			
			<div class="form-row three">
				<label>Quanity <em >*</em></label>
				<div class="select1">
					<input type="text" value="" data-parsley-type="digits" name="quantity[]" id="quantity" Placeholder="Quantity " required>
				</div>
				
			</div>
		</div>
		<span class="add-more-option add-product-option"><img src="<?=base_url('assets/front/images/plus.png')?>"></span>
		</div>
	</div>	
		
		<div class="row">
			<div class="form-row three ">
			<button type="submit" class="save" id="submitProductOptionInfo">
				Submit</button>
			</div>
		</div>
		
		<?=form_close()?>
		
		</div>
		</div>
	</div>
</div>
</section>

<?php
	$this->load->view('frontend/bottom');
?>
<script type="text/javascript">
	$(document).on('change','.changeCustom',function (){
		var type	= this.value;
		var plt		= $(this);
		$.post('<?=base_url('frontend/products/getProductList')?>',{'type':type}, function (response){
			plt.parent().parent().parent().find('.product-select').html('<select id="product" name="product[]" data-parsley-required="true">'+response+'</select>');
			$('#product_option_form').parsley().validate();
			$(".select1").find('select').selectBoxIt();
		});
		/* Auto complete Search item code at the Add new product option.*/
		$( ".add-product-option-itemcode" ).autocomplete({
			source: '<?=base_url('frontend/products/autoCompleteItemCodeSearch')?>',
			open: function(event, ui) { if(select) select=false; },
			select: function (a, b) {
				select=true; 
			}
		}).blur(function(){
			var itemCode	= $(this).val();
			if(!select || itemCode=='No Record Found !'){
				$(this).val('');
			}
		});
		
		
	});
	
	
	$(document).on('click','.add-more-option',function (){
		var base_url	= '<?=base_url()?>';
		var activityCodeOption	= '<?=$activityCodeOption?>';
		var optionTypes	= '<?=$optionTypesOption?>';
		var products	= '<?= getProductType($this->session->userdata('frontendUserName'))?>';
		var products	= '<select id="choose-product" class="changeCustom">'+products+'</select>';
		var html	= '<div class="row"><div class="form-row half"><div class="form-row three"><div class="select1" id="status-select">';
			html	+= ''+products+'</div></div>';
			
			html	+= '<div class="form-row three"><div class="select1 product-select" ><select id="product" name="product[]" data-parsley-required="true"><option value="">None</option></select></div></div>';
			
			html	+= '<div class="form-row three"><div class="select1"><input type="text" value="" name="itemcode[]" class="add-product-option-itemcode" Placeholder="Item Code " required></div></div></div>';
		
			html	+= '<div class="form-row half"><div class="form-row three"><div class="select1"><select name="optiontype[]" id="optiontype" data-parsley-required="true"><option value="">None</option>'+optionTypes+'</select></div></div>';
			
			html	+= '<div class="form-row three"><div class="select1"><select name="activity_code[]" data-parsley-required="true"><option value="">None</option>'+activityCodeOption+'</select></div></div>';
			
			html	+= '<div class="form-row three"><div class="select1"><input type="text" value="" data-parsley-type="digits" name="quantity[]" id="quantity" Placeholder="Quantity " required></div></div></div><span class="remove-more-option remove-product-option"><img src="'+base_url+'/assets/front/images/minus.png"></span></div>';
			
			$('#product_option_form').append(html);
			$('#product_option_form').parsley().validate();
			$(".select1").find('select').selectBoxIt();
			
	});
	
	$(document).on('click','.remove-more-option',function (){
		$(this).parent().remove();
	});
	
	$(document).on('click','#submitProductOptionInfo', function (){
		/*$('#product_option_form').parsley().validate();
			if ($('#product_option_form').parsley().isValid() ) {
		}*/
	});
	
</script>
