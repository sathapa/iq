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
		<input type="hidden" name="opportunity" id="opportunity" value="<?=!empty($quote_list->function_param->f21)?$quote_list->function_param->f21:''?>" />
		<input type="hidden" id="contact" name="contact" value="<?=!empty($quote_list->function_param->f22)?$quote_list->function_param->f22:''?>" />
		<input type="hidden" id="lead-time" name="lead-time" value="<?=!empty($quote_list->function_param->f23)?$quote_list->function_param->f23:''?>" />
		<input type="hidden" id="proposal_number" name="proposal_number" value="<?=!empty($proposalId)?$proposalId:''?>" />
		<textarea id="edit_quote_description" name="edit_quote_description" style="display:none"></textarea>
		<?=form_close()?>
		</div>
<?php
	echo form_open('', array('id'=>'skynets_form','data-parsley-validate'=>'data-parsley-validate'));
?>
<div class="form-group">
	<div class="panel panel-default">
	    <div class="panel-heading"> <h5 style="color:white;"> Net Details </h5>	</div>
	    <div class="panel-body">
			<div class="row">
				<div class="form-row half">
					
						<label>Product <em>*</em>
							<span class="mark_for_review">
								<input type="checkbox" name="mark_for_reviews" value="1" > Mark For Review
							</span>
						</label>
						<div class="select1">
							<select name="net_product" data-parsley-required="true" >
								<option value="">Select</option>
										<?php
											echo netProduct('SkyNet',$quote_list->product);
										?>
							</select>
						</div>
					</div>
					<div class="form-row half">
  						<label>Thimble </label>
							<label class="switch">
							  <input type="checkbox" name="angles" value="1"<?=!empty($quote_list->function_param->f9) ? 'checked' : '';?>>
							  <span class="slider round" style="width:60px"></span>
							</label>
					</div>
				
			</div>
			<div class="row">
				<div class="form-row half">
					<div class="form-row half">
						<label> Sq Panel Width (ft)</label>		
						<input type="text" class="" name="net_width"  value="<?=!empty($quote_list->function_param->f6)?$quote_list->function_param->f6:0?>"
							 data-parsley-required-message="Sq Panel width" data-parsley-min="0"
							data-parsley-type="number" placeholder="Sq Panel Width" data-parsley-type-message="Enter Valid Sq panel width" maxlength="20">
					</div>
					<div class="form-row half">
						<label> Sq Panel Length (ft)</label>		
						<input type="text" class="" name="net_length" value="<?=!empty($quote_list->function_param->f7)?$quote_list->function_param->f7:0?>"
							 data-parsley-required-message="Sq Panel length" data-parsley-min="0"
							data-parsley-type="number" placeholder="Sq Panel Length" data-parsley-type-message="Enter Valid Sq panel length" maxlength="20">
					</div>
				</div>
				<div class="form-row half">
					<div class="form-row half">
						<label> Number of nets </label>
						<input type="text" class="" name="num_nets" id="num_nets"
							 data-parsley-required-message="Quantity" data-parsley-min="0"
							data-parsley-type="number" placeholder="Quantity" data-parsley-type-message="Enter Valid Number" maxlength="20" value="<?=!empty($quote_list->function_param->f8)?$quote_list->function_param->f8:0?>">
					</div>
				</div>
			</div>

			
		
			<div class="row">
				<div class="form-row half">
					<div class="form-row half">
						<label>Pricing Tier </label>
						<div class="select1">
							<select id="pricingtier" name="pricing_tier" >
								<option value="Retail Pricing [1]" <?=(!empty($quote_list->function_param->f10)&&($quote_list->function_param->f10=='1'))?'selected':''?>>Retail Pricing</option>
								<option value="Distributor Pricing [2]" <?=(!empty($quote_list->function_param->f10)&&($quote_list->function_param->f10=='2'))?'selected':''?>>Distributor Pricing </option>
								<option value="Over $5K Pricing [3]" <?=(!empty($quote_list->function_param->f10)&&($quote_list->function_param->f10=='3'))?'selected':''?> >Over $5K Pricing </option>   
								<option value="Over $10K Pricing [4]" <?=(!empty($quote_list->function_param->f10)&&($quote_list->function_param->f10=='4'))?'selected':''?>>Over $10K Pricing </option>
							</select>
						</div>
					</div>
					
				
					<div class="form-row half">
							<div class="form-row half">	
								<label>Discount % </label>
								<input type="text" id="discount" name="discount" value="<?=!empty($quote_list->function_param->f11)?$quote_list->function_param->f11:0?>"
								data-parsley-type="number" data-parsley-max="100"  placeholder="Enter Discount" >
							</div>
							<div class="form-row half">
								<label> Tag Number </label>
								<input type="text" name="tag_number"  id="tag_number" placeholder="Enter tag number" value="<?=!empty($quote_list->function_param->f19)?$quote_list->function_param->f19:0?>"/>
							</div>
					</div>
				</div>
			
			
				<div class="form-row half">
					
					
						<label> Additional Instructions (Does not show in proposal)</label>
						<input type="text" name="instrunctions"  id="instrunctions" placeholder="Enter any additional details including special part and instruction here" value="<?=!empty($quote_list->function_param->f12)?$quote_list->function_param->f12:0?>" />
					
				</div>
			</div>

		
	</div>
  </div>

		<div class="row">
			<div class="form-row three ">
			<button type="button" class="save" id="calculateskynetQuote">
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




		
</script>
