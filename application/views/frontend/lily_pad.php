<script type="text/javascript" src="<?php echo base_url();?>assets/front/js/web-product.js" ></script>

<?php
	echo form_open('', array('id'=>'lilypad_form','data-parsley-validate'=>'data-parsley-validate'));
?>
		<div class="form-group">
		<div class="panel panel-default">
	 	<div class="panel-heading"> <h5 style="color:white;"> Net Details </h5>	</div>
	  	<div class="panel-body">
		<div class="row">
		
			<div class="form-row seven">
				<label>Product Type <em >*</em></label>
				<div id="zero-select-cn" class="form-row">
					<select id="nettingtype_lilypad" name="net_product" data-parsley-required="true" class="custom-select">
						<option value="">Select</option>
							<?php
								echo netProduct('Lily Pad');
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
		<label>Width (in Ft) 
			<a class="get-calculation" data-id="netwidth"><i class="fa fa-calculator" aria-hidden="true"></i></a>
		</label>
			<input type="text" class="newWidth" id="netwidth" name="net_width" data-parsley-required-message="Enter Width Value" data-parsley-min="1"
				data-parsley-type="number"placeholder="Enter width"  data-parsley-type-message="Enter Valid Width Value" maxlength="20">
		</div>

			<div class="form-row half">
			<label>Length (in Ft) <em >*</em>
				<a class="get-calculation" data-id="netlength"><i class="fa fa-calculator" aria-hidden="true"></i></a>
			</label>
			<input type="text" class="newLength" id="netlength" name="net_length" data-parsley-required="true"
			 data-parsley-required-message="Enter Length First" data-parsley-min="1"
			data-parsley-type="number" placeholder="Enter length" data-parsley-type-message="Enter Valid Length Value" maxlength="20">
					
			</div>
			
			
		</div>
	
			<div class="form-row three">
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
		
		<div class="row">
			<div class="form-row three">
				<label>Body/Cargo Length </label>
					<input type="text" id="bodylength" name="bodylength" data-parsley-type="number" placeholder="Enter length" 
						  data-parsley-type-message="Enter Valid Length Value" maxlength="20">
			</div>
			<div class="form-row three">
				<label> NetForm Rope Color <em >*</em>
				<!-- Changes (25-07-2017) -->
						<span class="mark_for_review">
							<input type="checkbox" name="mark_for_reviews" value="1"> Mark For Review
						</span> 
					<!-- Changes (25-07-2017) -->
				</label>
				<div id="first-select" alt-data="borderoption1" alt-name="net_border" >
					<select class="custom-select" id="seamstyle1" name="net_border" data-parsley-required="true" data-parsley-required-message="Select the rope color" >
						<option value="">None</option>
					</select>
				</div>
			</div>
			
		<div class="form-row three">
			<label>Cargo Rope Color </label>
				<div id="second-select" alt-data="borderoption2" alt-name="net_border2">
					<select class="custom-select" id="borderoption" name="net_border2" >
						<option value="">None</option>
					</select>
				</div>
			</div>
			</div>
		
		<div class="row">
			
			<div class="form-row three">
			<label>T-Joint Color </label>
				<div id="third-select" alt-data="borderoption3" alt-name="net_border3">
					<select id="threadoption" name="net_border3" class="custom-select" >
						<option value="">None</option>
					</select>
				</div>
			</div>
			<div class="form-row three">
				<label>Cross Joint Color </label>
				<div id="fourth-select" alt-data="borderoption4" alt-name="net_border4" >
					<select id="borderoption2" name="net_border4" class="custom-select" >
						<option value="">None</option>
					</select>
				</div>
			</div>
		<div class="form-row three">
				<label>Spreader Bar Color </label>
				<div id="fifth-select" alt-data="borderoption5" alt-name="net_border5">
					<select id="netborder3" name="net_border5" class="custom-select" >
						<option value="">None</option>
					</select>
				</div>
			</div>
		
		
		
		</div>
		
		<div class="row">
			<div class="form-row three">
				<label> Tag Number </label>
				<input type="text" name="tag_number"  id="tag_number" placeholder="Enter tag number" />
			</div>
			<div class="form-row seven">
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
</div></div>
		<div class="row">
			<div class="form-row three ">
			<button type="button" class="save" id="calculatelilypadQuote">Review Quote</button>
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
