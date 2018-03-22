
<style>
	.main-add-item.rope-section-heading ul li:first-child {
	    width: 49%;
	}
	.main-add-item.rope-section-heading ul li:nth-child(2) {
	    width: 12%;
	}
	.main-add-item.rope-section-heading ul li {
	    margin-right: 3%;
	    width: 11.7%;
	}
</style>
<div class="row">
		<?php
			echo form_open('', array('class'=>'form-row ','id'=>'index_form','data-parsley-validate'=>'data-parsley-validate'));
		//print_r($quote_list);
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
		
		<?=form_close()?>
		</div>
<?php
	echo form_open('', array('id'=>'rope_form','data-parsley-validate'=>'data-parsley-validate'));
	if(!empty($quote_list)){

			$rp = !empty($quote_list->function_param->f5)?$quote_list->function_param->f5:'';
			$rp = $rp->f2;

			$item = $rp->item;
			$quantity = $rp->quantity;
			$item = $rp->uom;
			$quantity = $rp->tolerance;
			$oldPrice = $rp->oldPrice;
			$priceOverride = $rp->overridePrice;

?>
<div class="form-group">
   <div class="panel panel-default">
	 <div class="panel-heading"> <h5 style="color:white;"> Rope Details </h5>	</div>
	  <div class="panel-body">
		<div class="row">
			
			
		<div class="form-row half">
			<div class="form-row two select1">
				<label>Pricing Tier <em >*</em></label>
				<select id="pricingtier" name="pricingtier" data-parsley-required="true">
					<option value="">Select</option> 
					<option value="Retail Pricing [1]" <?=(!empty($quote_list->function_param->f6)&&$quote_list->function_param->f6=='1')?'Selected':''?>>Retail Pricing </option>  
					<option value="Distributor Pricing [2]" <?=(!empty($quote_list->function_param->f6)&&$quote_list->function_param->f6=='2')?'Selected':''?>>Distributor Pricing</option>
					<option value="Over $5K Pricing [3]" <?=(!empty($quote_list->function_param->f6)&&$quote_list->function_param->f6=='3')?'Selected':''?>>Over $5K Pricing </option>   
					<option value="Over $10K Pricing [4]" <?=(!empty($quote_list->function_param->f6)&&$quote_list->function_param->f6=='4')?'Selected':''?>>Over $10K Pricing </option>
				</select>
			</div>			
			<div class="form-row two">
				
				<label>Discount % </label>
					<input type="text" id="discount" name="discount" value="<?=!empty($quote_list->function_param->f7)?$quote_list->function_param->f7:0?>" 
				data-parsley-type="number" data-parsley-max="100"  placeholder="Enter Discount" value="0">
			</div>
		</div>
			<div class="form-row half">
				<label> Tag Number </label>
				<input type="text" name="tag_number"  id="tag_number" placeholder="Enter tag number" />
			</div>
		</div>

		<div class="row">
			<div class="form-row half">
				<label> Additional Instructions (Does not show in proposal)</label>
				<input type="text"  name="spl_instruction" value="<?=!empty($quote_list->function_param->f8)?$quote_list->function_param->f8:''?>" placeholder="Enter any additional details including special part and instruction here" id="spl_instruction"/>
			</div>
			<div class="form-row half">
				<div class="form-row two">
					<label> Old Calculator Price</label>
					<input type="text" name="old_calculator" id="price_override" placeholder="Old Calculator Price" 
					data-parsley-type="number" data-parsley-max="50000000" data-parsley-maxlength="11"  value="<?=$oldPrice?>" />
				</div>
				<div class="form-row two">
					<label>Unit Price Override</label>
					<input type="text" name="price_override" id="price_override" placeholder="Unit Price Override" 
					data-parsley-type="number" data-parsley-max="50000000" data-parsley-maxlength="11"  value="<?=$priceOverride?>" />
				</div>
			</div>
		</div>
		<div class="row">
			<div class="main-add-item rope-section-heading cf">
			<ul>
				<li>item number <em >*</em>
					<!-- Changes (29-07-2017) -->
						<span class="mark_for_review">
							<input type="checkbox" name="mark_for_reviews" value="1" > Mark For Review
						</span> 
					<!-- Changes (29-07-2017) -->
				</li>
				<li>UOM <em >*</em></li>
				<li>Tolerance <em >*</em></li>
				<li>Quantity <em >*</em></li>
			</ul>
			<?php
				$ropeInfo	= !empty($quote_list->function_param->f5)?$quote_list->function_param->f5:'';
				$rope	= !empty($ropeInfo->f2)?$ropeInfo->f2:'';
				$key	= !empty($ropeInfo->f1)?$ropeInfo->f1:'';
				//print_r($rope);
				if(!empty($rope)){
					$ii	= 0;
				//foreach($rope as $key=>$val){
					
					$ropeUom		= !empty($rope->uom) ? $rope->uom : '';
					$ropeTolerance	= !empty($rope->tolerance) ? $rope->tolerance : '';
					$ropeQuantity	= !empty($rope->quantity) ? $rope->quantity : '';
			?>
			<div class="add-item rope-product">
				<div class="half second_row_rope">
				<div class="form-row ">
					<select data-parsley-required="true" name="rope_item[]" class="custom-select" >
						<?=netProduct('Rope',$key);?>
					</select>
				</div>
				</div>
				<div class="half">
					
				<div class="form-row three select1 drop_rope">
					<select data-parsley-required="true" name="rope_uom[]" class="" >
						<option value="EA" <?=!empty($ropeUom) && $ropeUom=='EA' ? 'selected' : '';?>>EA</option>
						<option value="FT" <?=!empty($ropeUom) && $ropeUom=='FT' ? 'selected' : '';?>>FT</option>
					</select>
				</div>
					
				<div class="form-row three select1 drop_rope">
					<select data-parsley-required="true" name="rope_tolerance[]" class="" >
						<option value="1-2" <?=!empty($ropeTolerance) && $ropeTolerance=='1-2' ? 'selected' : '';?> >1-2</option>
						<option value="2-5" <?=!empty($ropeTolerance) && $ropeTolerance=='2-5' ? 'selected' : '';?> >2-5</option>
					</select>
				</div>
				<div class="quantity form-row three">
					<input type="number" name="rope_qty[]" min="1"  step="0" value="<?=$ropeQuantity?>" data-parsley-required="true">
				</div>
				</div>
				<?php
					//if($ii>0){
				?>
				<!--<a href="javascript:void(0)" class="remove-rope-row"><img src="<?//=base_url('assets/front/images/minus.png')?>" alt="plus"></a>-->
				<?php //} ?>
			</div>
			<?php
				$ii++;
				//}
			}
			?>
		
		</div>
		</div>
	</div>
		<div class="row">
			<div class="form-row three button-bottom">
				<button type="button" class="save" id="calculateRopeQuote">Update Quote</button>
			</div>
		</div>
	</div>
</div>
		
<?php  } echo form_close()?>


<script>
$(function() {
	$(".custom-select").customselect();
});
</script>
