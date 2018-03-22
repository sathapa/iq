<div class="row">
		<?php
			$markReview		= !empty($quote_list->function_param->f24) ? $quote_list->function_param->f24 : 0;
			$quoteDesciption= !empty($quote_list->function_param->f25) ? $quote_list->function_param->f25 : '';
			$quoteDesciption	= str_replace(';',"\n",$quoteDesciption);
		
			echo form_open('', array('class'=>'form-row ','id'=>'index_form','data-parsley-validate'=>'data-parsley-validate'));
		//print_r($quote_list);
		?>
		
		<input type="hidden" name="customer" id="customer" value="<?=!empty($quote_list->function_param->f4)?$quote_list->function_param->f4:''?>">
		<input type="hidden" name="old_quoteid" id="old_quoteid" value="<?=$quote_id?>" />
		<input type="hidden" name="quote_line" id="quote_line" value="<?=!empty($quote_list->quote_line_no)?$quote_list->quote_line_no:''?>" />
		<input type="hidden" id="choose-sales" name="choose-sales" value="<?=!empty($quote_list->function_param->f18)?$quote_list->function_param->f18:''?>" />
		<input type="hidden" id="choose-wtclass" name="choose-wtclass" value="<?=!empty($quote_list->function_param->f20)?$quote_list->function_param->f20:'IND'?>" />
		<input type="hidden" name="opportunity" id="opportunity" value="<?=!empty($quote_list->function_param->f21)?$quote_list->function_param->f21:''?>" />
		<input type="hidden" id="contact" name="contact" value="<?=!empty($quote_list->function_param->f22)?$quote_list->function_param->f22:''?>" />
		<input type="hidden" id="lead-time" name="lead-time" value="<?=!empty($quote_list->function_param->f23)?$quote_list->function_param->f23:''?>" />
		<input type="hidden" id="proposal_number" name="proposal_number" value="<?=!empty($proposalId)?$proposalId:''?>" />
		<textarea id="edit_quote_description" name="edit_quote_description" style="display:none"></textarea>
		<?=form_close()?>
		</div>
		<?php
	echo form_open('', array('id'=>'roc_bloc_form','data-parsley-validate'=>'data-parsley-validate'));
?>
<div class="form-group">
	<div class="panel panel-default">
	  <div class="panel-heading"> <h5 style="color:white;"> Net Details </h5>	</div>
	  <div class="panel-body">
		<div class="row">		
			<div class="form-row seven">
				<label>Product Type <em >*</em>
						<!-- Changes (28-07-2017) -->
							<span class="mark_for_review">
								<input type="checkbox" name="mark_for_reviews" value="1" <?=!empty($markReview) ? 'checked' : '';?>> Mark For Review
							</span> 
						<!-- Changes (28-07-2017) -->
				</label>
				<div class="select1">
					<select id="nettingtype1" name="net_product" data-parsley-required="true" >
						<option value="">Select</option>
							<?php
								echo netProduct('RocBloc',$quote_list->product);
							?>
					</select>
				</div>
			</div>
			<div class="form-row three">
				<div class="form-row half">
					<label>Number of Nets <em >*</em></label>
					<input type="text" id="numberofnet" data-parsley-min="1" 
					data-parsley-type="number" name="net_number" required onkeypress='return isNumberKey(event)' placeholder="Number of net " value="<?=!empty($quote_list->function_param->f14)?$quote_list->function_param->f14:0?>"  />
				</div>
				<div class="form-row half">
					<label>Discount % </label>
				
					<input type="text" id="discount" name="discount"
				data-parsley-type="number" value="<?=!empty($quote_list->function_param->f16)?$quote_list->function_param->f16:0?>"  data-parsley-max="100"  placeholder="Enter Discount" >
				</div>
			</div>
		</div>
		<div class="row ">
				<div class="form-row three">
				<label>Pricing Tier </label>
				<div class="select1">
					<select id="pricingtier" name="pricing_tier" >
						<option value="Retail Pricing [1]" <?=(!empty($quote_list->function_param->f15)&&($quote_list->function_param->f15=='1'))?'selected':''?>>Retail Pricing</option>
							<option value="Distributor Pricing [2]" <?=(!empty($quote_list->function_param->f15)&&($quote_list->function_param->f15=='2'))?'selected':''?>>Distributor Pricing </option>
							<option value="Over $5K Pricing [3]" <?=(!empty($quote_list->function_param->f15)&&($quote_list->function_param->f15=='3'))?'selected':''?> >Over $5K Pricing </option>   
							<option value="Over $10K Pricing [4]" <?=(!empty($quote_list->function_param->f15)&&($quote_list->function_param->f15=='4'))?'selected':''?>>Over $10K Pricing </option>
						
					</select>
				</div>
			</div>
		
			<div class="form-row three">
				<div class="form-row half">
		<label>Width (in Ft) <em >*</em>
			<a class="get-calculation" data-id="netwidth"><i class="fa fa-calculator" aria-hidden="true"></i></a>
		</label>
			<input type="text" class="newWidth" value="<?=!empty($quote_list->function_param->f8)?$quote_list->function_param->f8:0?>" 
			id="netwidth" name="net_width" data-parsley-required="true" data-parsley-required-message="Enter Width Value" data-parsley-min="1"
				data-parsley-type="number"placeholder="Enter width"  data-parsley-type-message="Enter Valid Width Value" maxlength="20">
		</div>

			<div class="form-row half">
				<label>Length (in Ft) <em >*</em>
					<a class="get-calculation" data-id="netlength"><i class="fa fa-calculator" aria-hidden="true"></i></a>
				</label>
				<input type="text" class="newLength" value="<?=!empty($quote_list->function_param->f7)?$quote_list->function_param->f7:0?>" 
				id="netlength" name="net_length" data-parsley-required="true"
					 data-parsley-required-message="Enter Length First" data-parsley-ge="#netwidth"
				  data-parsley-ge-message="Length value should be greater than or equal to width" data-parsley-min="1"
				data-parsley-type="number" placeholder="Enter length" data-parsley-type-message="Enter Valid Length Value" maxlength="20">
			</div>
			
		</div>
		
		
			<?php
				$lengthNew	= !empty($quote_list->function_param->f7) ? $quote_list->function_param->f7 : 0;
				$widthNew	= !empty($quote_list->function_param->f8) ? $quote_list->function_param->f8 : 0;
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

		<div class="row ">
			<div class="form-row three">
				<label>Net Style/Color <em >*</em></label>
					<div id="first-select" alt-data="coloroption" alt-name="net_style" class="select1" >
						<select id="coloroption" name="net_style" data-parsley-required="true" data-parsley-required-message="Select Net Style Color First">
							<option value="">Select</option>
							<?php if(!empty($quote_list->function_param->f6)){ echo editpopulateProductOptions($quote_list->product,'net',$quote_list->function_param->f6);
						}	?>
						</select>
					</div>
			</div>
			
			<div class="form-row three">
				<label> Liner </label>
				<div id="second-select" alt-data="borderoptions" alt-name="net_border" class="select1" >
					<select id="borderoptions" name="net_border" >
						<option value="">None</option>
						<?php if(!empty($quote_list->function_param->f9)){ echo editpopulateProductOptions($quote_list->product,'liner',$quote_list->function_param->f9);
						}	?>
					</select>
				</div>
			</div>
			
		
			<div class="form-row three">
			<label>Border </label>
				<div id="third-select" alt-data="borderoption1" alt-name="net_border1" class="select1">
					<select id="borderoption1" name="net_border1" >
						<option value="">None</option>
						<?php if(!empty($quote_list->function_param->f10)){ echo editpopulateProductOptions($quote_list->product,'border',$quote_list->function_param->f10);
						}	?>
					</select>
				</div>
			</div>
		</div>
		
		<div class="row ">
			<div class="form-row three">
			<label>Thread Color </label>
				<div id="threaddiv" alt-data="threadoption" alt-name="net_thread" class="select1">
					<select id="threadoption" name="net_thread">
						<option value="">None</option>
						<?php echo editPopulateThreadlist($quote_list->function_param->f10,$quote_list->function_param->f11);?>
					</select>
				</div>
			</div>
			
			<div class="form-row three">
				<label>Grommets </label>
				<div id="fourth-select" alt-data="borderoptions2" alt-name="net_border2" class="select1">
					<select id="borderoptions2" name="net_border2"  >
						<option value="">None</option>
						<?php if(!empty($quote_list->function_param->f12)){ echo editpopulateProductOptions($quote_list->product,'grommet',$quote_list->function_param->f12);
						}	?>
					</select>
				</div>
			</div>
			
			<div class="form-row three">
				<label>FT O.C. and Offset on Corners </label>
				<div  class="select1">
					<select id="netborder3" name="net_border3" >
						<option <?=(!empty($quote_list->function_param->f13)&&$quote_list->function_param->f13==1)?'selected':''?>> 1.0</option>  
								<option <?=(!empty($quote_list->function_param->f13)&&$quote_list->function_param->f13==1.5)?'selected':''?>>1.5</option>  
								<option <?=(!empty($quote_list->function_param->f13)&&$quote_list->function_param->f13==1.75)?'selected':''?>>1.75</option>  
								<option <?=(!empty($quote_list->function_param->f13)&&$quote_list->function_param->f13==2)?'selected':''?>>2.0</option>  
					</select>
				</div>
			</div>
		</div>
		
	<div class="row">
		<div class="form-row half">
			<label> Tag Number </label>
				<input type="text" value="<?=!empty($quote_list->function_param->f24)?$quote_list->function_param->f24:''?>" name="tag_number"  id="tag_number" placeholder="Enter tag number" />
			</div>
		<div class="form-row half">
			<label> Additional Instructions (Does not show in proposal)</label>
			<input type="text" name="instrunctions"  value="<?=!empty($quote_list->function_param->f17)?$quote_list->function_param->f17:''?>"  id="instrunctions" placeholder="Enter any additional details including special part and instruction here" />
		</div>
	</div>
	<div class="row">
		<?php
			$oldPrice 		= !empty($quote_list->function_param->f29) ?  $quote_list->function_param->f29 : 0;
			$priceOverride  = !empty($quote_list->function_param->f30) ?  $quote_list->function_param->f30 : 0; 
		?>
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
  </div>
</div>

	<div class="row">
		<div class="form-row three ">
			<button type="button" class="save" id="calculaterocblocQuote">Review Quote</button>
		</div>
	<!--
	<div class="form-row three button-bottom">
		<button type="button" class="exist">Add to existing Quote</button>
	</div>
	-->
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
	function isNumberKey(evt){
		var charCode = (evt.which) ? evt.which : evt.keyCode;
		if (charCode > 31 && (charCode < 48 || charCode > 57)){
			return false;
		}else{
			return true;
		}
	}	
</script>
