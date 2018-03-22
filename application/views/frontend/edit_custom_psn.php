<div class="row">
		<?php
			$markReview			= !empty($quote_list->function_param->f20) ? $quote_list->function_param->f20 : 0;
			$quoteDesciption	= !empty($quote_list->function_param->f21) ? $quote_list->function_param->f21 : '';
			$quoteDesciption	= str_replace(';',"\n",$quoteDesciption);
			echo form_open('', array('class'=>'form-row ','id'=>'index_form','data-parsley-validate'=>'data-parsley-validate'));
		?>
			<input type="hidden" name="customer" id="customer" value="<?=!empty($quote_list->function_param->f4)?$quote_list->function_param->f4:''?>">
			<input type="hidden" name="old_quoteid" id="old_quoteid" value="<?=$quote_id?>" />
			<input type="hidden" name="quote_line" id="quote_line" value="<?=!empty($quote_list->quote_line_no)?$quote_list->quote_line_no:''?>" />
			<input type="hidden" id="choose-sales" name="choose-sales" value="<?=!empty($quote_list->function_param->f13)?$quote_list->function_param->f13:''?>" />
			<input type="hidden" id="choose-wtclass" name="choose-wtclass" value="<?=!empty($quote_list->function_param->f14)?$quote_list->function_param->f14:'IND'?>" />
			<input type="hidden" name="opportunity" id="opportunity" value="<?=!empty($quote_list->function_param->f15)?$quote_list->function_param->f15:''?>" />
			<input type="hidden" id="contact" name="contact" value="<?=!empty($quote_list->function_param->f16)?$quote_list->function_param->f16:''?>" />
			<input type="hidden" id="lead-time" name="lead-time" value="<?=!empty($quote_list->function_param->f17)?$quote_list->function_param->f17:''?>" />
			<input type="hidden" id="proposal_number" name="proposal_number" value="<?=!empty($proposalId)?$proposalId:''?>" />
			<textarea id="edit_quote_description" name="edit_quote_description" style="display:none"><?=$quoteDesciption;?></textarea>
		<?=form_close()?>
		</div>

<?php
	echo form_open('', array('id'=>'psn_form','data-parsley-validate'=>'data-parsley-validate'));
	if(!empty($quote_list)){
?>

<div class="form-group">
	<div class="panel panel-default">
	 	<div class="panel-heading"> <h5 style="color:white;"> Custom PSN information </h5>	</div>
	  	<div class="panel-body">
			<div class="row">
				
				<div class="form-row">
					<label>Product Type<em >*</em>
					<!-- Changes (27-07-2017) -->
						<span class="mark_for_review">
							<input type="checkbox" name="mark_for_reviews" value="1" <?=!empty($markReview) ? 'checked' : '';?> > Mark For Review
						</span> 
					<!-- Changes (27-07-2017) -->
					</label>
					<div class="select1" id="nettingstyle_psn_html">
						<select id="nettingstyle_psn" name="net_style" data-parsley-required="true" data-parsley-required-message="Select product first">
							<option value="">None<selected="selected"></option>
							<?php
								echo netProduct('Custom PSN',$quote_list->function_param->f5);
							?>
						</select>
					</div>
				</div>
			</div>
			
				<div class="row">
					<div class="form-row half">
						<label >Pricing Tier <em >*</em></label>
						<div class="select1">
							<select id="pricingtier_psn" name="pricing_tier" data-parsley-required="true" 
							data-parsley-required-message="Select Pricing Tier First">
								<option value="">Select Pricing</option>
								<option value="Retail Pricing [1]" <?=(!empty($quote_list->function_param->f9)&&($quote_list->function_param->f9=='1'))?'selected':''?>>Retail Pricing</option>
								<option value="Distributor Pricing [2]" <?=(!empty($quote_list->function_param->f9)&&($quote_list->function_param->f9=='2'))?'selected':''?>>Distributor Pricing </option>
								<option value="Over $5K Pricing [3]" <?=(!empty($quote_list->function_param->f9)&&($quote_list->function_param->f9=='3'))?'selected':''?> >Over $5K Pricing </option>   
								<option value="Over $10K Pricing [4]" <?=(!empty($quote_list->function_param->f9)&&($quote_list->function_param->f9=='4'))?'selected':''?>>Over $10K Pricing </option>
							</select>
						</div>
					</div>
					<div class="form-row half">
						<div class="form-row two">
							<label for="netlength">Discount %</label>
							<input type="text"  placeholder="Discount %" id="discount_psn" name="discount" value="<?=!empty($quote_list->function_param->f10)?$quote_list->function_param->f10:''?>" data-parsley-type="number" data-parsley-type-message="Enter Discount value in numeric value">
						</div>
						<div class="form-row two">
							<label for="netlength">Number of nets <em >*</em></label>
								<input type="text" value="<?=!empty($quote_list->function_param->f8)?$quote_list->function_param->f8:''?>" placeholder="Number of Nets" id="netnumber_psn" name="net_number" value="1" data-parsley-required="true" data-parsley-required-message="Enter Net Number"
									data-parsley-min="1" 
							data-parsley-type="number" data-parsley-type-message="Enter Net Number in numeric value (Min 1)">
						</div>
					</div>
				</div>
		
			
			<div class="row">
				<div class="form-row two">
					<div class="form-row half">
					<label>Width (in FT) <em >*</em>
						<a class="get-calculation" data-id="netwidth_psn"><i class="fa fa-calculator" aria-hidden="true"></i></a>
					</label>
					<input type="text" class="newWidth" value="<?=!empty($quote_list->function_param->f7)?$quote_list->function_param->f7:''?>" id="netwidth_psn" name="net_width" placeholder="Net width" 
					data-parsley-required="true" data-parsley-required-message="Enter Width Value" data-parsley-min="0"
					data-parsley-type="number" data-parsley-type-message="Enter Valid Width Value" maxlength="20">
				</div>
				<div class="form-row half">
					<label>Length (in FT) <em >*</em>
						<a class="get-calculation" data-id="netlength_psn"><i class="fa fa-calculator" aria-hidden="true"></i></a>
					</label>
					<input type="text" class="newLength" value="<?=!empty($quote_list->function_param->f6)?$quote_list->function_param->f6:''?>" id="netlength_psn" name="net_length" placeholder="Net length"  
					data-parsley-required="true" data-parsley-required-message="Enter Length Value" data-parsley-min="0"
					data-parsley-type="number" data-parsley-type-message="Enter Valid Length Value" maxlength="20">
				</div>
			</div>
			
			
				<?php
					$lengthNew	= !empty($quote_list->function_param->f6) ? $quote_list->function_param->f6 : 0;
					$widthNew	= !empty($quote_list->function_param->f7) ? $quote_list->function_param->f7 : 0;
					$lft		= (2 * $lengthNew) + (2 * $widthNew);
					$sft		= ($lengthNew * $widthNew);
				?>
				<div class="form-row two">
					<div class="form-row half">
						<label>Linear Feet</label>
							<input type="text" id="newLft" value="<?=number_format($lft,2)?>" placeholder=" 2 x (Length + Width)" readonly>
					</div>
					<div class="form-row half">
						<label>Square Feet</label>
							<input type="text" id="newSft" value="<?=number_format($sft,2)?>" placeholder="Length x Width" readonly>
					</div>
				</div>
			</div>
	
		<div class="row">
			<div class="form-row half">
			<label> Tag Number </label>
				<input type="text" name="tag_number" value="<?=!empty($quote_list->function_param->f18)?$quote_list->function_param->f18:''?>" id="tag_number" placeholder="Enter tag number" />
			</div>
			<div class="form-row half">
				<label> Additional Instructions (Does not show in proposal)</label>
				<input type="text" name="instrunctions"  value="<?=!empty($quote_list->function_param->f11)?$quote_list->function_param->f11:''?>" id="instrunctions" placeholder="Enter any additional details including special part and instruction here" />
			</div>
		</div>
		<div class="row">
			<?php
				$oldPrice 		= !empty($quote_list->function_param->f23) ?  $quote_list->function_param->f23 : 0;
				$priceOverride  = !empty($quote_list->function_param->f24) ?  $quote_list->function_param->f24 : 0; 
			?>
			<div class="form-row half">
				<div class="form-row two">
					<label> Old Calculator Price</label>
					<input type="text" name="old_calculator" id="price_override" placeholder="Old Calculator Price" 
					data-parsley-type="number" data-parsley-max="50000000" data-parsley-maxlength="11"  value="<?=$oldPrice?>"   />
				</div>
				<div class="form-row two">
					<label>Unit Price Override</label>
					<input type="text" name="price_override" id="price_override" placeholder="Unit Price Override" 
					data-parsley-type="number" data-parsley-max="50000000" data-parsley-maxlength="11"  value="<?=$priceOverride?>" />
				</div>
			</div>
		</div>
	  </div>
	</div>
	</div>
<?php }

?>		
	<div class="form-group">
		<div class="row">
			<div class="form-row three " >
			<button type="button" class="save" id="psnQuoteCalucator">Update Quote</button>
			</div>
		</div>
	</div>

<?=form_close()?>


<script>
/* Psn Functionality start */
/* ====== making lft and sft value ========*/
	$('#page_layout').on('blur','.newWidth',function (){
		var	w	= $(this).val();
		var l	= $('#netlength_psn').val();
		if(!w){w=0;}if(!l){l=0;}
		setLftSft(w,l);
	});
	$('#page_layout').on('blur','.newLength',function (){
		var	l	= $(this).val();
		var w	= $('#netwidth_psn').val();
		if(!w){w=0;}if(!l){l=0;}
		setLftSft(w,l);
	});
	
	function setLftSft(w,l){
		w	= roundToTwo(w);
		l	= roundToTwo(l);
		var lft	= (2 * w ) + (2 * l);
		var sft	= ( w  * l );
		lft	= roundToTwo(lft);
		sft	= roundToTwo(sft);
		$('#newLft').val(lft);
		$('#newSft').val(sft);
	}
	function roundToTwo(num) {    
		return +(Math.round(num + "e+2")  + "e-2");
	}
	/* ====== making lft and sft value ========*/
</script>
