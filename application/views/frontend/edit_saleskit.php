<style>
	.item-number{
		width: 49%;
		margin-right: 2%;
	}
	.quantity {
 	   width: 16%;
	}
	.saleskit-label{
	    color: #435158;
	    font: 1.38vh 'MyriadProRegular';
	    padding-bottom: 5px;
	    float: left;
	    width: 100%;
	}
</style>

<div class="row">
		<?php
			$quoteDesciption	= !empty($quote_list->function_param->f18) ? $quote_list->function_param->f18: '';
			$quoteDesciption	= str_replace(';',"\n",$quoteDesciption);
			echo form_open('', array('class'=>'form-row ','id'=>'index_form','data-parsley-validate'=>'data-parsley-validate'));
		?>
		
		<input type="hidden" name="customer" id="customer" value="<?=!empty($quote_list->function_param->f4)?$quote_list->function_param->f4:''?>">
		<input type="hidden" name="old_quoteid" id="old_quoteid" value="<?=$quote_id?>" />
		<input type="hidden" name="quote_line" id="quote_line" value="<?=!empty($quote_list->quote_line_no)?$quote_list->quote_line_no:''?>" />
		<input type="hidden" id="choose-sales" name="choose-sales" value="<?=!empty($quote_list->function_param->f10)?$quote_list->function_param->f10:''?>" />
		<input type="hidden" id="choose-wtclass" name="choose-wtclass" value="<?=!empty($quote_list->function_param->f11)?$quote_list->function_param->f11:'IND'?>" />
		<input type="hidden" name="opportunity" id="opportunity" value="<?=!empty($quote_list->function_param->f12)?$quote_list->function_param->f12:''?>" />
		<input type="hidden" id="contact" name="contact" value="<?=!empty($quote_list->function_param->f13)?$quote_list->function_param->f13:''?>" />
		<input type="hidden" id="lead-time" name="lead-time" value="<?=!empty($quote_list->function_param->f14)?$quote_list->function_param->f14:''?>" />
		<input type="hidden" id="proposal_number" name="proposal_number" value="<?=!empty($proposalId)?$proposalId:''?>" />
		
		<textarea id="edit_quote_description" name="edit_quote_description" style="display:none"><?=$quoteDesciption;?></textarea>
		
		<?=form_close()?>
		</div>
<?php
	echo form_open('', array('id'=>'saleskit_form','data-parsley-validate'=>'data-parsley-validate'));
	if(!empty($quote_list)){
		$pricingTier	= !empty($quote_list->function_param->f8) ? $quote_list->function_param->f8 : '';
		$discount		= !empty($quote_list->function_param->f9) ? $quote_list->function_param->f9 : 0;
		$netNumber		= !empty($quote_list->function_param->f6) ? $quote_list->function_param->f6 : 0;
		$productCode	= !empty($quote_list->function_param->f5) ? $quote_list->function_param->f5 : '';
		$additionalInfo	= !empty($quote_list->function_param->f10) ? $quote_list->function_param->f10 : '';
		$productOptionTypes	= !empty($quote_list->function_param->f7) ? $quote_list->function_param->f7 : array();
		//dump($quote_list);
		
?>
	<div class="form-group">
		<div class="panel panel-default">
		  	<div class="panel-heading"> <h5 style="color:white;"> Saleskit Details </h5>	</div>
			<div class="panel-body">
					<div class="row">
						<div class="form-row half">
							
							<div class="form-row two select1">
								<label>Pricing Tier <em >*</em></label>
								<select id="pricingtier" name="pricingtier" data-parsley-required="true">
									<option value="Retail Pricing [1]" <?=!empty($pricingTier) && $pricingTier==1 ? "selected" : ""?> >Retail Pricing </option>  
									<option value="Distributor Pricing [2]" <?=!empty($pricingTier) && $pricingTier==2 ? "selected" : ""?>>Distributor Pricing</option>
									<option value="Over $5K Pricing [3]" <?=!empty($pricingTier) && $pricingTier==3 ? "selected" : ""?>>Over $5K Pricing </option>   
									<option value="Over $10K Pricing [4]" <?=!empty($pricingTier) && $pricingTier==4 ? "selected" : ""?>>Over $10K Pricing </option>
								</select>
							</div>
							<div class="form-row two">
								<label>Discount % </label>
								<input type="text" id="discount" name="discount" 
								data-parsley-type="number" data-parsley-max="100"  placeholder="Enter Discount" value="<?=$discount;?>">
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
								<input type="text"   name="spl_instruction"  placeholder="Enter any additional details including special part and instruction here" id="spl_instruction" value="<?=$additionalInfo?>" />
							</div>
						</div>
						<div class="form-row half">
							<?php
								$oldPrice 		= !empty($quote_list->function_param->f20) ?  $quote_list->function_param->f20 : 0;
								$priceOverride  = !empty($quote_list->function_param->f21) ?  $quote_list->function_param->f21 : 0; 
							?>
							<div class="form-row two">
								<label> Old Calculator Price</label>
								<input type="text" name="old_calculator" id="price_override" placeholder="Old Calculator Price" 
								data-parsley-type="number" data-parsley-max="50000000" data-parsley-maxlength="11"  value="<?=$oldPrice?>" />
							</div>
							<div class="form-row two">
								<label>Unit Price Override</label>
								<input type="text" name="price_override" id="price_override" placeholder="Unit Price Override" 
								data-parsley-type="number" data-parsley-max="50000000" data-parsley-maxlength="11" value="<?=$priceOverride?>" />
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
								
							</label>
							<select data-parsley-required="true" name="saleskit_product" id="saleskit_product" class="custom-select" >
								<option value="">Select Saleskit</option>
								<?=netProduct('SalesKit',$productCode);?>
							</select>
						</div>
						<div class="form-row quantity select1">
							<label>Net Number <em >*</em></label>
								<input type="text" name="net_number" placeholder="Net Number" id="net_number" data-parsley-type="digits" data-parsley-maxlength="3" value="<?=$netNumber?>">
						</div>
						
					</div>
				
					<div class="option-value" id="option-value">
						<?php
							$optionsTypes	= editSaleskitProductOptions($productCode,'all',$productOptionTypes);
							echo $optionsTypes;
						?>
					</div>
			</div>
		</div>
	</div>
		
	<div class="row">
		<div class="form-row three button-bottom">
			<button type="button" class="save" id="calculateSalesKitQuote">Update Quote</button>
		</div>
	</div>


<?php
	}
	echo form_close();
?>

<script>
	$(function() {
		$(".custom-select").customselect();
	});
</script>
