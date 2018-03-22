<script type="text/javascript" src="<?php echo base_url();?>assets/front/js/web-product.js" ></script>

<?php
	echo form_open('', array('id'=>'hardware_form','data-parsley-validate'=>'data-parsley-validate'));
?>
<style>
	/*a.add-hardware-row {
	    margin-top: 0px;
	    margin-left: -50px;
	}*/
	a.remove-hardware-row {
	    margin-top: 20px;
	    margin-left: -10px;
	}
	label.old-calc {
	    margin-left: -4px;
	}
	label.price-ovrr {
	    margin-left: -12px;
	}
</style>
<div class="form-group">
	<div class="panel panel-default">
	  <div class="panel-heading"> <h5 style="color:white;"> Hardware Details </h5>	</div>
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
			
				<label>Discount % </label>
				
					<input type="text" id="discount" name="discount"
				data-parsley-type="number" data-parsley-max="100"  placeholder="Enter Discount" value="0">
				
			</div>
		</div>

			<div class="form-row half">
				<label> Tag Number </label>
				<input type="text"   name="tag_number" id="tag_number" placeholder="Enter Tag Number" />
			</div>
		</div>
		
		<div class="row">
			<div class="form-row half">
					<label> Additional Instructions (Does not show in proposal)</label>
					<input type="text"   name="spl_instruction"  placeholder="Enter any additional details including special part and instruction here" id="spl_instruction"/>
			</div>
		</div>

		<div class="row">
		<div class="main-add-item hardware-head-ul cf">
    		<div class="form-row half">
				<label>Item Number <em >*</em></label>
			</div>
			<div class="form-row half">
				<div class="form-row three">
					<label>Quantity</label>
				</div>
				<div class="form-row three">
					<label class="old-calc">Old Cal. Price</label>
				</div>
				<div class="form-row three">
					<label class="price-ovrr">Price Override</label>
				</div>
			</div>
		</div>
    	<div class="add-item hardware-product-list">
            <div class="form-row half">
			    <div class="item-number ">
			        <select data-parsley-required="true" id="hw_item" name="hw_item[]" class="custom-select" >
			    		<?=getpopulateHardware();?>
			        </select>
			    </div>
			</div>
			<div class="form-row half">
			    <div class="form-row three">
					<div class="quantity">
					    <input type="number" name="hw_qty[]" min="0"  step="0" value="0" data-parsley-required="true">
					</div>
				</div>
  				<div class="form-row three">
					<input type="text" name="old_calculator[]" id="old_calculator"  
					data-parsley-type="number" data-parsley-max="50000000" data-parsley-maxlength="11"  value=""   />
				</div>
				<div class="form-row three">
				    <input type="text" name="price_override[]" id="price_override"
					data-parsley-type="number" data-parsley-max="50000000" data-parsley-maxlength="11"  value=""   />
				</div>
			</div>
		    <a href="javascript:void(0)" class="add-hardware-row"><img src="<?=base_url('assets/front/images/plus.png')?>" alt="plus"></a>
		    <a href="javascript:void(0)" class="remove-hardware-row"><img src="<?=base_url('assets/front/images/minus.png')?>" alt="minus"></a>
    	</div>
	
		</div></div>
		</div>
<div class="row">
<div class="form-row three button-bottom">
<button type="button" class="save" id="savehardwareQuote">Review Quote</button>
</div>
		</div>
		</div>
		</div>
	</div>

<?=form_close()?>
<script>

$(function() {
	$(".custom-select").customselect();
});
</script>
