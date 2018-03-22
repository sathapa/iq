<?php
	echo form_open('', array('id'=>'saleskit_form','data-parsley-validate'=>'data-parsley-validate'));
?>
<script type="text/javascript" src="<?php echo base_url();?>assets/front/js/web-product.js" ></script>
<style>
	.saleskit-label{
	    color: #435158;
	    font: 1.38vh 'MyriadProRegular';
	    padding-bottom: 5px;
	    float: left;
	    width: 100%;
	}
	.item-number{
		width:49%;
		margin-right: 20px;
	}
	.quantity{
		width:15.5%;
	}
</style>
<div class="form-group">
	<div class="panel panel-default">
	  <div class="panel-heading"> <h5 style="color:white;"> SalesKit Details </h5>	</div>
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
				<div class="form-row ">
					<label> Tag Number </label>
					<input type="text" name="tag_number"  id="tag_number" placeholder="Enter tag number" />
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="form-row half">
				<div class="form-row ">
					<label> Additional Instructions (Does not show in proposal)</label>
					<input type="text"   name="spl_instruction"  placeholder="Enter any additional details including special part and instruction here" id="spl_instruction"/>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="form-row item-number">
				<label>SalesKit Product <em >*</em>
						<!-- Changes (29-07-2017) -->
							<span class="mark_for_review">
								<input type="checkbox" name="mark_for_reviews" value="1" > Mark For Review
							</span> 
						<!-- Changes (29-07-2017) -->
					</li>
				</label>
				<select data-parsley-required="true" name="saleskit_product" id="saleskit_product" class="custom-select" >
					<option value="">Select Saleskit</option>
					<?=netProduct('SalesKit');?>
				</select>
			</div>
			<div class="form-row quantity select1">
				<label>Net Number <em >*</em></label>
				<input type="text" name="net_number" placeholder="Net Number" value="1" id="net_number" data-parsley-type="digits" data-parsley-maxlength="7">
			</div>
		</div>
		
		
		<div class="option-value" id="option-value"></div>
		
		</div>
			
		</div>
		</div>
	</div>
		
	<div class="row">
	<div class="form-row three button-bottom">
	<button type="button" class="save" id="calculateSalesKitQuote">Review Quote</button>
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
