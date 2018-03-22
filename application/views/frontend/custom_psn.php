<?php
	echo form_open('', array('id'=>'psn_form','data-parsley-validate'=>'data-parsley-validate'));
?>


<div class="form-group">
	<div class="panel panel-default">
	 	<div class="panel-heading"> <h5 style="color:white;"> Custom PSN information </h5>	</div>
	  	<div class="panel-body">
			<div class="row">
				
				<div class="form-row ">
					<label>Product Type<em >*</em>
					<!-- Changes (27-07-2017) -->
						<span class="mark_for_review">
							<input type="checkbox" name="mark_for_reviews" value="1" > Mark For Review
						</span> 
					<!-- Changes (27-07-2017) -->
					</label>
					<div class="select1" id="nettingstyle_psn_html">
						<select id="nettingstyle_psn" name="net_style" data-parsley-required="true" data-parsley-required-message="Select product first">
							<option value="">None<selected="selected"></option>
							<?php
								echo netProduct('Custom PSN');
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
						
						<option value="Retail Pricing [1]">Retail Pricing</option>
						<option value="Distributor Pricing [2]">Distributor Pricing </option>
						<option value="Over $5K Pricing [3]">Over $5K Pricing </option>   
						<option value="Over $10K Pricing [4]">Over $10K Pricing </option>
					</select>
					</div>
				</div>
				<div class="form-row half">
					<div class="form-row two">
						<label for="netlength">Discount % </label>
						<input type="text" placeholder="Discount %" id="discount_psn" name="discount" value="0" data-parsley-type="number" data-parsley-type-message="Enter Discount value in numeric value (Min 1)">
					</div>
					<div class="form-row two">
						<label for="netlength">Number of nets <em >*</em></label>
						<input type="text" placeholder="Number of Nets" id="netnumber_psn" name="net_number" value="1" data-parsley-required="true" data-parsley-required-message="Enter Net Number"
						data-parsley-min="1" data-parsley-type="digits" data-parsley-type-message="Enter Net Number in numeric value (Min 1)">
					</div>
				</div>
			</div>
		
			
			<div class="row">
				<div class="form-row two">
				<div class="form-row half">
					<label>Width (in FT) <em >*</em>
						<a class="get-calculation" data-id="netwidth_psn"><i class="fa fa-calculator" aria-hidden="true"></i></a>
					</label>
					<input type="text" class="newWidth" id="netwidth_psn" name="net_width" placeholder="Net width" value="0"
					data-parsley-required="true" data-parsley-required-message="Enter Width Value" data-parsley-min="0"
					data-parsley-type="number" data-parsley-type-message="Enter Valid Width Value" maxlength="20">
				</div>
				<div class="form-row half">
					<label>Length (in FT) <em >*</em>
						<a class="get-calculation" data-id="netlength_psn"><i class="fa fa-calculator" aria-hidden="true"></i></a>
					</label>
					<input type="text" class="newLength" id="netlength_psn" name="net_length" placeholder="Net length"  value="0" 
					data-parsley-required="true" data-parsley-required-message="Enter Length Value" data-parsley-min="0"
					data-parsley-type="number" data-parsley-type-message="Enter Valid Length Value" maxlength="20">
				</div>
			</div>
		
				<div class="form-row two">
					<div class="form-row half">
						<label>Linear Feet</label>
							<input type="text" id="newLft" value="" placeholder=" 2 x (Length + Width)" readonly>
					</div>
					<div class="form-row half">
						<label>Square Feet</label>
							<input type="text" id="newSft" value="" placeholder="Length x Width" readonly>
					</div>
				</div>
			</div>
			
		<div class="row">
			<div class="form-row half">
				<label> Tag Number </label>
				<input type="text" name="tag_number"  id="tag_number" placeholder="Enter tag number" />
			</div>
			<div class="form-row half">
				<label> Additional Instructions (Does not show in proposal) </label>
				<input type="text" name="instrunctions"  id="instrunctions" placeholder="Enter any additional details including special part and instruction here" />
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
					<label> Unit Price Override</label>
					<input type="text" name="price_override" id="price_override" placeholder="Unit Price Override" 
					data-parsley-type="number" data-parsley-max="50000000" data-parsley-maxlength="11"  value=""   />
				</div>
			</div>
		</div>

</div>
</div>

<div class="form-group">
<div class="row">
<div class="form-row three " >
<button type="button" class="save" id="psnQuoteCalucator">Review Quote</button>
</div>



</div>
</div>
</div>
<?=form_close()?>



<script>/* Psn Functionality start */
/* ====== making lft and sft value ========*/
	
jQuery("select#pricingtier_psn option[value='Distributor Pricing [2]']").attr("selected", "selected"); 
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
