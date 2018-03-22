<style>
	.custom-select input {
	    display: none;
	}
</style>

<div class="row">
		<?php
			$markReview		= !empty($quote_list->function_param->f25) ? $quote_list->function_param->f25 : 0;
			$quoteDesciption= !empty($quote_list->function_param->f26) ? $quote_list->function_param->f26 : '';
			$quoteDesciption	= str_replace(';',"\n",$quoteDesciption);
			echo form_open('', array('class'=>'form-row ','id'=>'index_form','data-parsley-validate'=>'data-parsley-validate'));
		?>
		<input type="hidden" name="customer" id="customer" value="<?=!empty($quote_list->function_param->f4)?$quote_list->function_param->f4:''?>">
		<input type="hidden" name="old_quoteid" id="old_quoteid" value="<?=$quote_id?>" />
		<input type="hidden" name="quote_line" id="quote_line" value="<?=!empty($quote_list->quote_line_no)?$quote_list->quote_line_no:''?>" />
		<input type="hidden" id="choose-sales" name="choose-sales" value="<?=!empty($quote_list->function_param->f17)?$quote_list->function_param->f17:''?>" />
		<input type="hidden" id="choose-wtclass" name="choose-wtclass" value="<?=!empty($quote_list->function_param->f18)?$quote_list->function_param->f18:'IND'?>" />
		<input type="hidden" name="opportunity" id="opportunity" value="<?=!empty($quote_list->function_param->f19)?$quote_list->function_param->f19:''?>" />
		<input type="hidden" id="contact" name="contact" value="<?=!empty($quote_list->function_param->f21)?$quote_list->function_param->f21:''?>" />
		<input type="hidden" id="lead-time" name="lead-time" value="<?=!empty($quote_list->function_param->f22)?$quote_list->function_param->f22:''?>" />
		<input type="hidden" id="proposal_number" name="proposal_number" value="<?=!empty($proposalId)?$proposalId:''?>" />
		<textarea id="edit_quote_description" name="edit_quote_description" style="display:none"><?=$quoteDesciption;?></textarea>
		<?=form_close()?>
		</div>
<?php
	echo form_open('', array('id'=>'lilypad_form','data-parsley-validate'=>'data-parsley-validate'));
?>
		<div class="form-group">
			<div class="panel panel-default">
			  	<div class="panel-heading"> <h5 style="color:white;"> Lilypad Net Details </h5>	</div>
			  	<div class="panel-body">
					<div class="row">
						<div class="form-row seven ">
							<label>Product Type <em >*</em></label>
							<div class="form-row">
								<select id="nettingtype2" name="net_product" class="custom-select" data-parsley-required="true" >
									<option value="">Select</option>
										<?php
											echo netProduct('Lily Pad',$quote_list->product);
										?>
								</select>
							</div>
						</div>
						<div class="form-row three">
							<div class="form-row half"> 
								<label>Number of Nets <em >*</em></label>
								<input type="text" data-parsley-min="1" 
								data-parsley-type="number" id="numberofnet" name="net_number" required onkeypress='return isNumberKey(event)' placeholder="Number of net " value="<?=!empty($quote_list->function_param->f13)?$quote_list->function_param->f13:''?>" />
							</div>
							<div class="form-row half">
							<label>Discount % </label>
								<input type="text" id="discount" name="discount" value="<?=!empty($quote_list->function_param->f15)?$quote_list->function_param->f15:0?>"
							data-parsley-type="number" data-parsley-max="100"  placeholder="Enter Discount" >
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-row three">
							<label>Pricing Tier </label>
							<div class="form-row">
								<select id="pricingtier" name="pricing_tier" class="custom-select">
									<option value="Retail Pricing [1]" <?=(!empty($quote_list->function_param->f14)&&($quote_list->function_param->f14=='1'))?'selected':''?>>Retail Pricing</option>
										<option value="Distributor Pricing [2]" <?=(!empty($quote_list->function_param->f13)&&($quote_list->function_param->f13=='2'))?'selected':''?>>Distributor Pricing </option>
										<option value="Over $5K Pricing [3]" <?=(!empty($quote_list->function_param->f13)&&($quote_list->function_param->f13=='3'))?'selected':''?> >Over $5K Pricing </option>   
										<option value="Over $10K Pricing [4]" <?=(!empty($quote_list->function_param->f13)&&($quote_list->function_param->f13=='4'))?'selected':''?>>Over $10K Pricing </option>
								</select>
							</div>
						</div>
						
					
						<div class="form-row three">
										<div class="form-row half">
								<label>Width (in Ft) 
									<a class="get-calculation" data-id="netwidth"><i class="fa fa-calculator" aria-hidden="true"></i></a>
								</label>
									<input type="text" class="newWith" id="netwidth" name="net_width" data-parsley-required-message="Enter Width Value" data-parsley-min="1"
										value="<?=!empty($quote_list->function_param->f7)?$quote_list->function_param->f7:''?>" data-parsley-type="number"placeholder="Enter width"  data-parsley-type-message="Enter Valid Width Value" maxlength="20">
								</div>

									<div class="form-row half">
									<label>Length (in Ft) <em >*</em>
										<a class="get-calculation" data-id="netlength"><i class="fa fa-calculator" aria-hidden="true"></i></a>
									</label>
									<input type="text" class="newLength" id="netlength" name="net_length" data-parsley-required="true" value="<?=!empty($quote_list->function_param->f6)?$quote_list->function_param->f6:''?>"
									 data-parsley-required-message="Enter Length First" 
									  data-parsley-ge-message="Length value should be greater than or equal to width" data-parsley-min="1"
									data-parsley-type="number" placeholder="Enter length" data-parsley-type-message="Enter Valid Length Value" maxlength="20">
											
									</div>
						
						</div>
					
						
							<?php
								$lengthNew	= !empty($quote_list->function_param->f6) ? $quote_list->function_param->f6 : 0;
								$widthNew	= !empty($quote_list->function_param->f7) ? $quote_list->function_param->f7 : 0;
								$lft		= (2 * $lengthNew) + (2 * $widthNew);
								$sft		= ($lengthNew * $widthNew);
							?>
						<div class="form-row three">
								<div class="form-row half">
									<label>Linear Feet</label>
										<input type="text" id="newLft" value="<?=number_format($lft,2)?>" placeholder="2 x (Length + Width)" readonly>
								</div>
								<div class="form-row half">
									<label>Square Feet</label>
										<input type="text" id="newSft" value="<?=number_format($sft,2)?>" placeholder="Length x Width" readonly>
								</div>
						</div>
					</div>
					
					<div class="row">	
					
						<div class="form-row three">
							<label>Body/Cargo Length </label>
								<input type="text" id="bodylength" name="bodylength" 
						data-parsley-type="number" value="<?=!empty($quote_list->function_param->f8)?$quote_list->function_param->f8:''?>" placeholder="Enter length" data-parsley-type-message="Enter Valid Length Value" maxlength="20">
						
						</div>
						<div class="form-row three">
							<label> NetForm Rope Color
								<!-- Changes (25-07-2017) -->
									<span class="mark_for_review">
										<input type="checkbox" name="mark_for_reviews" value="1" <?=!empty($markReview) ? 'checked' : ''?>> Mark For Review
									</span> 
								<!-- Changes (25-07-2017) -->
							</label>
							<div id="first-select" alt-data="borderoption1" alt-name="net_border" >
								<select id="seamstyle1" name="net_border" class="custom-select">
									<option value="None">None</option>
									<?php  echo editpopulateProductOptions($quote_list->product,'Rope',$quote_list->function_param->f9);
										?>
								</select>
							</div>
						</div>
						
					
						<div class="form-row three">
							<label>Cargo Rope Color </label>
								<div id="second-select" alt-data="borderoption2" alt-name="net_border2" >
									<select id="borderoption" name="net_border2" class="custom-select">
										<option value="">None</option>
										<?php echo editpopulateProductOptions($quote_list->product,'CargoRope','');
											?>
									</select>
								</div>
						</div>
					</div>
					<div class="row">	
						<div class="form-row three">
						<label>T-Joint Color </label>
							<div id="third-select" alt-data="borderoption3" alt-name="net_border3" >
								<select id="threadoption" name="net_border3" class="custom-select">
									<option value="">None</option>
									<?php echo editpopulateProductOptions($quote_list->product,'Tee',$quote_list->function_param->f12);
										?>
								</select>
							</div>
						</div>
						
						<div class="form-row three">
							<label>Cross Joint Color </label>
							<div id="fourth-select" alt-data="borderoption4" alt-name="net_border4" >
								<select id="borderoption2" name="net_border4" class="custom-select" >
									<option value="">None</option>
									<?php  echo editpopulateProductOptions($quote_list->product,'Joint',$quote_list->function_param->f11);
										?>
								</select>
							</div>
						</div>
						<div class="form-row three">
							<label>Spreader Bar Color </label>
							<div id="fifth-select" alt-data="borderoption5" alt-name="net_border5" >
								<select id="netborder3" name="net_border5" class="custom-select">
									<option value="">None</option>
									<?php
										$spreaderBar	= !empty($quote_list->function_param->f27) ? $quote_list->function_param->f27 : '';
										echo editpopulateProductOptions($quote_list->product,'SpreaderBar',$spreaderBar);
									?>
								</select>
							</div>
						</div>
					
					
					
					</div>
					
					<div class="row">
						<div class="form-row three">
							<label> Tag Number </label>
							<input type="text" value="<?=!empty($quote_list->function_param->f23)?$quote_list->function_param->f23:''?>" name="tag_number"  id="tag_number" placeholder="Enter tag number" />
						</div>
						<div class="form-row seven">
							<label> Additional Instructions (Does not show in proposal)</label>
							<input type="text" name="instrunctions" value="<?=!empty($quote_list->function_param->f16)?$quote_list->function_param->f16:''?>"  id="instrunctions" placeholder="Enter any additional details including special part and instruction here" />
						</div>
					</div>
					
					<div class="row">
						<div class="form-row half">
							<?php
								$oldPrice 		= !empty($quote_list->function_param->f29) ?  $quote_list->function_param->f29 : 0;
								$priceOverride  = !empty($quote_list->function_param->f30) ?  $quote_list->function_param->f30 : 0; 
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
				</div>
			</div>
			<div class="row">
				<div class="form-row three ">
					<button type="button" class="save" id="calculatelilypadQuote">Update Quote</button>
				</div>
			</div>
		</div>
<?=form_close()?>



<script>
		
	/* ====== making lft and sft value ========*/
	$('#page_layout').on('blur','.newWidth',function (){
		var	w	= $(this).val();
		var l	= $('#netlength').val();
		if(!w){w=0;}if(!l){l=0;}
		setLftSft(w,l);
	});
	$('#page_layout').on('blur','.newLength',function (){
		var	l	= $(this).val();
		var w	= $('#netwidth').val();
		if(!w){w=0;}if(!l){l=0;}
		setLftSft(w,l);
	});
	
	function setLftSft(w,l){
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
		
	function isNumberKey(evt){
		var charCode = (evt.which) ? evt.which : evt.keyCode;
		if (charCode > 31 && (charCode < 48 || charCode > 57)){
			return false;
		}else{
			return true;
		}
	}	
	
	/* Add on Functionality */
</script>
