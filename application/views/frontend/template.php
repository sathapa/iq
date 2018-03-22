<?php
	echo form_open('', array('id'=>'template_form','data-parsley-validate'=>'data-parsley-validate'));
?>
<script type="text/javascript" src="<?php echo base_url();?>assets/front/js/web-product.js" ></script>

<div class="form-group">
		<div class="panel panel-default">
	  	<div class="panel-heading"> <h5 style="color:white;"> Template Details </h5>	</div>
	  	<div class="panel-body">
		<div class="row">
			<div class="form-row half">
				<div class="form-row two select1">
					<label>Pricing Tier <em >*</em></label>
					<select id="pricingtier" name="pricingtier" data-parsley-required="true">
						<option value="Retail Pricing [1]">Retail Pricing </option>  
						<option value="Distributor Pricing [2]">Distributor Pricing</option>
						<option value="Over $5K Pricing [3]">Over $5K Pricing </option>   
						<option value="Over $10K Pricing [4]">Over $10K Pricing </option>
					</select>
				</div>			
				<div class="form-row two">
					<div class="form-row half">
					<label>Discount % </label>
						<input type="text" id="discount" name="discount" 
					data-parsley-type="number" data-parsley-max="100"  placeholder="Enter Discount" value="0">
					</div>
					<div class="form-row half">
						<label> Tag Number </label>
						<input type="text" name="tag_number"  id="tag_number" placeholder="Enter tag number" />
					</div>
				</div>
			</div>

			<div class="form-row half">
				<label> Additional Instructions (Does not show in proposal)</label>
				<input type="text" name="spl_instruction"  placeholder="Enter any additional details including special part and instruction here" id="spl_instruction"/>
			</div>
		</div>
		<div class="row">
				<div class="form-row half">
				<div class="form-row two">
					<label> Old Calculator Price</label>
					<input type="text" name="old_calculator" id="price_override" placeholder="Old Calculator Price" 
					data-parsley-type="number" data-parsley-max="50000000" data-parsley-maxlength="11"  value=""   />
				</div>
				<div class="form-row two">
					<label> Price Override</label>
					<input type="text" name="price_override" id="price_override" placeholder="Price Override" 
					data-parsley-type="number" data-parsley-max="50000000" data-parsley-maxlength="11"  value=""   />
				</div>
			</div>
		</div>
		<div class="row">
		<div class="main-add-item cf newadd-template">
    	<ul>
        	<li>item number <em >*</em>
				<!-- Changes (29-07-2017) -->
					<span class="mark_for_review">
						<input type="checkbox" name="mark_for_reviews" value="1" <?=!empty($markReview) ? 'checked' : '';?> > Mark For Review
					</span> 
				<!-- Changes (29-07-2017) -->
        	</li>
            <li>Quantity <em >*</em></li>
        </ul>
    	<div class="add-item">
				<div class="item-number form-row">
					<select data-parsley-required="true" id="template_item" name="template_item"  class="custom-select" >
						<?=netProduct('Template');?>
					</select>
				</div>
				<div class="quantity">
					<input type="number" name="template_qty" min="1"  step="0" value="0" data-parsley-required="true">
				</div>
			</div>
		</div>
	</div>
</div>
		</div>
<div class="row">
<div class="form-row three button-bottom">
<button type="button" class="save" id="saveTemplateQuote">Review Quote</button>
</div>
		</div>
		</div>
<?=form_close()?>
<script>
	$(function() {
		$(".custom-select").customselect();
	});
</script>
