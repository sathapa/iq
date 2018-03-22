<?php
	echo form_open('', array('id'=>'roc_bloc_form','data-parsley-validate'=>'data-parsley-validate'));
?>
<script type="text/javascript" src="<?php echo base_url();?>assets/front/js/web-product.js" ></script>


		<div class="form-group">
		<div class="panel panel-default">
	 	<div class="panel-heading"> <h5 style="color:white;"> Net Details </h5>	</div>
	  	<div class="panel-body">
		<div class="row">
			<div class="form-row seven">
				<label>Product Type <em >*</em>
				<!-- Changes (28-07-2017) -->
					<span class="mark_for_review">
						<input type="checkbox" name="mark_for_reviews" value="1"> Mark For Review
					</span> 
				<!-- Changes (28-07-2017) -->
				</label>
				<div id="zero-select-cn">
					<select id="nettingtype_rocbloc" name="net_product" data-parsley-required="true" class="custom-select">
						<option value="">Select</option>
						<?php
							echo netProduct('RocBloc');
						?>
						</select>
				</div>
			</div>
			
			<div class="form-row three">
				<div class="form-row half">
					<label>Number of Nets <em >*</em></label>
					<input type="text" data-parsley-min="1" 
					data-parsley-type="number" id="numberofnet" name="net_number" required onkeypress='return isNumberKey(event)' placeholder="Number of net " value="1" />
				</div>
				<div class="form-row half">
					<label>Discount % </label>
					<input type="text" id="discount" name="discount" value="0"
					data-parsley-type="number" data-parsley-max="100"  placeholder="Enter Discount" >
				</div>
			</div>
		</div>
		<div class="row">
			<div class="form-row three">
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
			
		
			<div class="form-row three">
				<div class="form-row half">
				<label>Width (in Ft) <em >*</em>
					<a class="get-calculation" data-id="netwidth"><i class="fa fa-calculator" aria-hidden="true"></i></a>
				</label>
				<input type="text" class="newWidth" id="netwidth" name="net_width" data-parsley-required="true" data-parsley-required-message="Enter Width Value" data-parsley-min="1"
				data-parsley-type="number"placeholder="Enter width"  data-parsley-type-message="Enter Valid Width Value" maxlength="20">
			</div>

			<div class="form-row half">
				<label>Length (in Ft) <em >*</em>
					<a class="get-calculation" data-id="netlength"><i class="fa fa-calculator" aria-hidden="true"></i></a>
				</label>
				<input type="text" class="newLength" id="netlength" name="net_length" data-parsley-required="true"
				 data-parsley-required-message="Enter Length First" data-parsley-ge="#netwidth"
				  data-parsley-ge-message="Length value should be greater than or equal to width" data-parsley-min="1"
				data-parsley-type="number" placeholder="Enter length" data-parsley-type-message="Enter Valid Length Value" maxlength="20">
			</div>
		</div>
		
		
			<div class="form-two three">
				<div class="form-row half">
					<label>Linear Feet</label>
						<input type="text" id="newLft" value="" placeholder="2 x (Length + Width)" readonly>
				</div>
				<div class="form-row half">
					<label>Square Feet</label>
						<input type="text" id="newSft" value="" placeholder="Length x Width" readonly>
				</div>
			</div>
		</div>

		<div class="row ">
			<div class="form-row three">
				<label>Net Style/Color <em >*</em></label>
					<div id="first-select" alt-data="coloroption" alt-name="net_style" >
						<select class="custom-select" id="coloroption" name="net_style" data-parsley-required="true" data-parsley-required-message="Select Net Style Color First">
							<option value="">Select</option>
						</select>
					</div>
			</div>
			<div class="form-row three">
				<label> Liner </label>
				<div id="second-select" alt-data="borderoptions" alt-name="net_border"  >
					<select class="custom-select" id="borderoptions" name="net_border" >
						<option value="">None</option>
					</select>
				</div>
			</div>
			
			<div class="form-row three">
				<label>Border </label>
				<div id="third-select" alt-data="borderoption1" alt-name="net_border1">
					<select class="custom-select" id="borderoption1" name="net_border1" >
						<option value="">None</option>
					</select>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="form-row three">
			<label>Thread Color </label>
				<div id="threaddiv" alt-data="threadoption" alt-name="net_thread" class="select1">
					<select id="threadoption" name="net_thread">
						<option value="">None</option>
					</select>
				</div>
			</div>
			
			<div class="form-row three">
				<label>Grommets </label>
				<div id="fourth-select" alt-data="borderoptions2" alt-name="net_border2" >
					<select class="custom-select" id="borderoptions2" name="net_border2"  >
						<option value="">None</option>
					</select>
				</div>
			</div>
			
			<div class="form-row three">
				<label>FT O.C. and Offset on Corners </label>
				<div  class="select1">
					<select id="netborder3" name="net_border3" >
								<option>1.0</option>  
								<option>1.5</option>  
								<option>1.75</option>  
								<option>2.0</option>  
					</select>
				</div>
			</div>
		</div>
		
	<div class="row">
		<div class="form-row half">
			<label> Tag Number </label>
				<input type="text" name="tag_number"  id="tag_number" placeholder="Enter tag number" />
			</div>
		<div class="form-row half">
			<label> Additional Instructions (Does not show in proposal)</label>
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
		<button type="button" class="save" id="calculaterocblocQuote">
			Review Quote</button>
		</div>
	</div>
</div>
<?=form_close()?>
<script>
	/* searchable dropsown */
	$(function() {
		$(".custom-select").customselect();
	});

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
