<?php
	echo form_open('', array('id'=>'baynet_form','data-parsley-validate'=>'data-parsley-validate'));
?>

<script type="text/javascript" src="<?php echo base_url();?>assets/front/js/web-product.js" ></script>
		<div class="form-group">
		<div class="panel panel-default">
	 	<div class="panel-heading"> <h5 style="color:white;"> Net Details </h5>	</div>
	  	<div class="panel-body">
		<div class="row">
		
			<div class="form-row half">
				<label>Product Type <em >*</em>
					<!-- Changes (27-07-2017) -->
						<span class="mark_for_review">
							<input type="checkbox" name="mark_for_reviews" value="1" > Mark For Review
						</span> 
					<!-- Changes (27-07-2017) -->
				</label>
				<div class="select1 ">
					<select id="baynet" name="net_product" data-parsley-required="true" >
						<option value="">Select</option>
							<?php
								echo netProduct('BayNets');
							?>
					</select>
				</div>
			</div>
			<div class="form-row half">
				<div class="form-row three">
					<label>Number of Bays <em >*</em></label>
					<input type="text" data-parsley-min="1" data-parsley-type="number" id="numberofnet" name="net_number" required onkeypress='return isNumberKey(event)' placeholder="Number of Bays " value="1" />
				</div>
				
				<div class="form-row three">
					<label>Number of Systems </label>
					<input type="text" data-parsley-min="1" data-parsley-type="number" id="numberofsystem" name="numberofsystem" required onkeypress='return isNumberKey(event)' placeholder="Number of Systems " value="1" />
				</div>
				
				<!-- Added at the ( 11-09-2017 ) -->
				<div class="form-row three">
					<label id="net-per-system-heading">Nets per System <em>*</em></label>
					<input type="text" id="netperbay" name="netperbay" value="1" data-parsley-type="number" data-parsley-max="100" data-parsley-min="1" placeholder="Enter Nets per System" >
				</div>
				<!-- End -->
			</div>
		</div>
		<div class="row">			
			<div class="form-row three">
			<div class="form-row two">
				<label>Pricing Tier </label>
				<div class="select1">
					<select id="pricingtier" name="pricing_tier" >
						
						<option value="Retail Pricing [1]">Retail Pricing</option>  
						<option value="Distributor Pricing [2]">Distributor Pricing</option>
						<option value="Over $5K Pricing [3]">Over $5K Pricing</option>   
						<option value="Over $10K Pricing [4]">Over $10K Pricing </option>
					</select>
				</div>
			</div>
				<div class="form-row two">
					<label>Discount % </label>
					<input type="text" id="discount" name="discount" value="0" data-parsley-type="number" data-parsley-max="100"  placeholder="Enter Discount" >
				</div>
			</div>
			<div class="form-row three">
				<div class="form-row two">
		<label>Pit Width (in Ft) <em >*</em>
			<a class="get-calculation" data-id="netwidth"><i class="fa fa-calculator" aria-hidden="true"></i></a>
		</label>
			<input type="text" class="newWidth" id="netwidth" name="net_width" data-parsley-required="true" data-parsley-required-message="Enter Width Value" data-parsley-min="1"
				data-parsley-type="number"placeholder="Enter width"  data-parsley-type-message="Enter Valid Width Value" maxlength="20">
		</div>

			<div class="form-row two">
			<label>Pit Length (in Ft) <em >*</em>
				<a class="get-calculation" data-id="netlength"><i class="fa fa-calculator" aria-hidden="true"></i></a>
			</label>
			<input type="text" class="newLength" id="netlength" name="net_length" data-parsley-required="true"
			 data-parsley-required-message="Enter Length First" data-parsley-ge="#netwidth"
			  data-parsley-ge-message="Length value should be greater than or equal to width" data-parsley-min="1"
			data-parsley-type="number" placeholder="Enter length" data-parsley-type-message="Enter Valid Length Value" maxlength="20">
					
			</div>
		</div>
		
		
			<div class="form-row three">
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
			<div class="form-row three">
				<div class="form-row half">
				<label>Drain Pan (in Ft)</label>
					<input type="text" id="bodylength" name="bodylength" data-parsley-required="true"
			 data-parsley-required-message="Enter Drain Pan Value"  data-parsley-min="0" value="0"
			data-parsley-type="number" placeholder="Enter Drain Pan Value" data-parsley-type-message="Enter Valid Drain Pan Value" maxlength="20">
			</div>
			
			<div class="form-row half">
				<label id="drain-pan-heading"> #No of Drain Pan </label>
				<input type="text" name="drain_pan_number" id="drain_pan_number" data-parsley-min="0" data-parsley-type="number" value="0" id="drain_pan_number" placeholder="Number of Drain Pan" />
			</div>
			
			
			</div>
			<div class="form-row seven">
				<div class="form-row three">
					<label> Tag Number </label>
					<input type="text" name="tag_number"  id="tag_number" placeholder="Enter tag number" />
				</div>
				<div class="form-row seven">
					<label> Additional Instructions (Does not show in proposal)</label>
					<input type="text" name="instrunctions"  id="instrunctions" placeholder="Enter any additional details including special part and instruction here" />
				</div>
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
<div class="row">
<div class="form-row three ">
<button type="button" class="save" id="calculatebayQuote">
	Review Quote</button>
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
	
	/* New Changes 19-09-2017 */
	
	$(document).on('keyup','#bodylength',function (){
		var val	= $(this).val();
		if(val!='' && !isNaN(val)){
			$('#drain_pan_number').val(1);
		}else{
			$('#drain_pan_number').val(0);
		}
	});
	
	/* New Changes 19-09-2017 */
	
	$(document).on('change','#baynet',function (){
		var bayNetProduct	= $(this).val();
		var all				= bayNetProduct.split("[");
		var checkingProduct	= all[1];
		checkingProduct		= checkingProduct.substring(0, checkingProduct.length - 1);
		$('#net-per-system-heading').html('Nets per System <em>*</em>');
		$('#netperbay').val(1);
		$('#netperbay').attr('data-parsley-min',1);
		$('#netperbay').removeAttr('data-parsley-required','true');
		
		$('#drain-pan-heading').html('#No of Drain Pan ');
		$('#drain_pan_number').attr('data-parsley-min',0);
		$('#drain_pan_number').val(0);
		$('#drain_pan_number').removeAttr('data-parsley-required','true');
		if(checkingProduct=='BNS38DF'){
			$('#drain-pan-heading').html('#No of Drain Pan <em>*</em>');
			$('#drain_pan_number').val(1);
			$('#drain_pan_number').attr('data-parsley-required','true');
			
			$('#net-per-system-heading').html('Nets per System <em>*</em>');
			$('#netperbay').val(2);
			$('#netperbay').attr('data-parsley-required','true');
		}
		
	});
	
</script>
