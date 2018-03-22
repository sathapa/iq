<div class="row">
		<?php 
			$markReview		= !empty($quote_list->function_param->f24) ? $quote_list->function_param->f24 : 0;
			$quoteDesciption= !empty($quote_list->function_param->f25) ? $quote_list->function_param->f25 : '';
			$quoteDesciption	= str_replace(';',"\n",$quoteDesciption);
		
			echo form_open('', array('class'=>'form-row ','id'=>'index_form','data-parsley-validate'=>'data-parsley-validate'));
		 
		?>
		
		<input type="hidden" name="customer" id="customer" value="<?=!empty($quote_list->function_param->f4)?$quote_list->function_param->f4:''?>">
		<input type="hidden" name="old_quoteid" id="old_quoteid" value="<?=$quote_id?>" />
		<input type="hidden" name="quote_line" id="quote_line" value="<?=!empty($quote_list->quote_line_no)?$quote_list->quote_line_no:''?>" />
		<input type="hidden" id="choose-sales" name="choose-sales" value="<?=!empty($quote_list->function_param->f18)?$quote_list->function_param->f18:''?>" />
		<input type="hidden" id="choose-wtclass" name="choose-wtclass" value="<?=!empty($quote_list->function_param->f20)?$quote_list->function_param->f20:'IND'?>" />
		<input type="hidden" name="opportunity" id="opportunity" value="<?=!empty($quote_list->function_param->f22)?$quote_list->function_param->f22:''?>" />
		<input type="hidden" id="contact" name="contact" value="<?=!empty($quote_list->function_param->f21)?$quote_list->function_param->f21:''?>" />
		<input type="hidden" id="lead-time" name="lead-time" value="<?=!empty($quote_list->function_param->f23)?$quote_list->function_param->f23:''?>" />
		<input type="hidden" id="proposal_number" name="proposal_number" value="<?=!empty($proposalId)?$proposalId:''?>" />
		<textarea id="edit_quote_description" name="edit_quote_description" style="display:none"></textarea>
		<?=form_close()?>
		</div>
<?php
	echo form_open('', array('id'=>'cargonet_form','data-parsley-validate'=>'data-parsley-validate'));
?>
<div class="form-group">
	<div class="panel panel-default">
	  <div class="panel-heading"> <h5 style="color:white;"> Net Details </h5>	</div>
	  <div class="panel-body">
			<div class="row">
					<span class="mark_for_review">
						<input type="checkbox" name="mark_for_reviews" value="1" > Mark For Review
					</span>


			</div>

			<div class="row">
				<div class="form-row half">
					<div class="form-row half">
						<label> Center to Center (ft) </label>
						<input type="text" class="" name="in_ctoc" id="in_ctoc" value="<?=!empty($quote_list->function_param->f12)?$quote_list->function_param->f12:0?>" data-parsley-required-message="Center to Center" data-parsley-min="0" data-parsley-required="true"
							data-parsley-type="number" placeholder="Center to Center" data-parsley-type-message="Enter Center to Center" maxlength="20">
					</div>
					<div class="form-row half">
  						<label> OAD Height (ft) </label>
						<input type="text" class="" name="in_oad_height" id="in_oad_height" data-parsley-required="true" value="<?=!empty($quote_list->function_param->f13)?$quote_list->function_param->f13:0?>" data-parsley-required-message="Sq Panel width" data-parsley-min="0"
							data-parsley-type="number" placeholder="Sq Panel Width" data-parsley-type-message="Enter Valid Sq panel width" maxlength="20">
					</div>
				</div>
   				
				<div class="form-row half">
				 	<div class="form-row half">
						<label> # of Bays </label>		
						<input type="text" class="" name="net_bays" data-parsley-required="true" value="<?=!empty($quote_list->function_param->f8)?$quote_list->function_param->f8:0?>" data-parsley-required-message="No. of Net Bays" data-parsley-min="0"
							data-parsley-type="number" placeholder="No. of Net Bays" data-parsley-type-message="Enter Valid no. of Net Bays" maxlength="20">
					</div>
					<div class="form-row half">
						<label> # of Runs </label>		
						<input type="text" class="" name="net_runs" data-parsley-required="true" value="<?=!empty($quote_list->function_param->f9)?$quote_list->function_param->f9:0?>" data-parsley-required-message="No. of Net Runs" data-parsley-min="0"
							data-parsley-type="number" placeholder="No. of Net Runs" data-parsley-type-message="Enter Valid no. of Net Runs" maxlength="20">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="form-row half">
					<div class="form-row half">
						<label> Net Width (in)</label>		
						<input type="text" class="well" name="net_width" id="net_width" value="<?=!empty($quote_list->function_param->f7)?$quote_list->function_param->f7:0?>" data-parsley-required-message="Net width" data-parsley-min="0"
							data-parsley-type="number" placeholder="Net Width" data-parsley-type-message="Enter Valid Net Width" maxlength="20" readonly>
					</div>
					<div class="form-row half">
						<label> Net Height (in)</label>		
						<input type="text" class="well" name="net_height" id="net_height" value="<?=!empty($quote_list->function_param->f6)?$quote_list->function_param->f6:0?>" data-parsley-required-message="Net height" data-parsley-min="0"
							data-parsley-type="number" placeholder="Net Height" data-parsley-type-message="Enter Valid Net Height" maxlength="20" readonly>
					</div>
				</div>

				<div class="form-row half">
					<div class="form-row half">
						<label> Height from the floor (in) </label>		
							<input type="text" class="" name="in_height_floor" data-parsley-required="true" value="<?=!empty($quote_list->function_param->f10)?$quote_list->function_param->f10:0?>" data-parsley-required-message="Height from the floor" data-parsley-min="0"
								data-parsley-type="number" placeholder="Height from the floor" data-parsley-type-message="Enter the height from the floor" maxlength="20">
					</div>
					<div class="form-row half">
						<label> Offset Length </label>		
							<input type="text" class="" name="offset_length" data-parsley-required="true" value="<?=!empty($quote_list->function_param->f11)?$quote_list->function_param->f11:0?>" data-parsley-required-message="Offset length" data-parsley-min="0"
								data-parsley-type="number" placeholder="Offset length" data-parsley-type-message="Enter the offset length" maxlength="20">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="form-row half">
					<div class="form-row half">
						<label>Pricing Tier </label>
						<div class="select1">
							<select id="pricingtier" name="pricing_tier" >
								<option value="Retail Pricing [1]" <?=(!empty($quote_list->function_param->f14)&&($quote_list->function_param->f14=='1'))?'selected':''?>>Retail Pricing</option>
								<option value="Distributor Pricing [2]" <?=(!empty($quote_list->function_param->f14)&&($quote_list->function_param->f14=='2'))?'selected':''?>>Distributor Pricing </option>
								<option value="Over $5K Pricing [3]" <?=(!empty($quote_list->function_param->f14)&&($quote_list->function_param->f14=='3'))?'selected':''?> >Over $5K Pricing </option>   
								<option value="Over $10K Pricing [4]" <?=(!empty($quote_list->function_param->f14)&&($quote_list->function_param->f14=='4'))?'selected':''?>>Over $10K Pricing </option>
							</select>
						</div>
					</div>
					<div class="form-row half">
							<div class="form-row half">	
								<label>Discount % </label>
								<input type="text" id="discount" name="discount" value="<?=!empty($quote_list->function_param->f15)?$quote_list->function_param->f15:0?>" data-parsley-type="number" data-parsley-max="100"  placeholder="Enter Discount" >
							</div>
							<div class="form-row half">
								<label> Tag Number </label>
								<input type="text" name="tag_number"  id="tag_number" placeholder="Enter tag number" value="<?=!empty($quote_list->function_param->f23)?$quote_list->function_param->f23:0?>" />
							</div>
					</div>
				</div>
				<div class="form-row half">
					<label> Additional Instructions (Does not show in proposal)</label>
					<input type="text" name="instrunctions"  id="instrunctions" placeholder="Enter any additional details including special part and instruction here" value="<?=!empty($quote_list->function_param->f16)?$quote_list->function_param->f16:0?>"/>
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
					<label>Unit Price Override</label>
					<input type="text" name="price_override" id="price_override" placeholder="Unit Price Override" 
					data-parsley-type="number" data-parsley-max="50000000" data-parsley-maxlength="11"  value=""   />
				</div>
			</div>
		</div>
	</div>
  </div>

		<div class="row">
			<div class="form-row three ">
			<button type="button" class="save" id="calculatecargonetQuote">
				Review Quote</button>
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

	$( document ).ready(function() {
		$('#in_oad_height').on('change', function() {
			var in_oad_height = $(this).val();
			var oad_height = in_oad_height*12;
			$('#net_height').val(oad_height - 9);
		});
		$('#in_ctoc').on('change', function() {
			var in_ctoc		= $(this).val();
			var ctoc = in_ctoc*12;
			$('#net_width').val(ctoc - 6);
		});

	});


		
</script>
