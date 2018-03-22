<?php
	echo form_open('', array('id'=>'cargonet_form','data-parsley-validate'=>'data-parsley-validate'));
?>
<script type="text/javascript" src="<?php echo base_url();?>assets/front/js/web-product.js" ></script>

	<div class="form-group">
		<div class="panel panel-default">
	    <div class="panel-heading"> <h5 style="color:white;"> Net Details </h5>	</div>
		<div class="panel-body">
			<div class="row">
					<span class="mark_for_review">
						<input type="checkbox" name="mark_for_reviews" value="1" > <label>Mark For Review</label>
					</span>
			</div>

			<div class="row">
				<div class="form-row half">
					<div class="form-row half">
						<label> Center to Center (ft) <em >*</em><a class="get-calculation" data-id="in_ctoc"><i class="fa fa-calculator" aria-hidden="true"></i></a></label>
						<input type="text" class="" name="in_ctoc" id="in_ctoc"
							 data-parsley-required-message="Center to Center" data-parsley-min="0" data-parsley-required="true"
							data-parsley-type="number" placeholder="Center to Center" data-parsley-type-message="Enter valid Center to Center" maxlength="20">
					</div>
					<div class="form-row half">
  						<label> OAD Height (ft) <em >*</em> <a class="get-calculation" data-id="in_oad_height"><i class="fa fa-calculator" aria-hidden="true"></i></a> </label>
						<input type="text" class="" name="in_oad_height" id="in_oad_height" data-parsley-required="true"
							 data-parsley-required-message="Sq Panel width" data-parsley-min="0"
							data-parsley-type="number" placeholder="Sq Panel Width" data-parsley-type-message="Enter valid OAD height" maxlength="20">
					</div>
				</div>
   				
				<div class="form-row half">
				 	<div class="form-row half">
						<label> # of Bays <em >*</em></label>		
						<input type="text" class="" name="net_bays" data-parsley-required="true" onkeypress='return isNumberKey(event)'
							 data-parsley-required-message="No. of Net Bays" data-parsley-min="0"
							data-parsley-type="number" placeholder="No. of Net Bays" data-parsley-type-message="Enter valid no. of Net Bays" maxlength="20">
					</div>
					<div class="form-row half">
						<label> # of Runs <em >*</em></label>		
						<input type="text" class="" name="net_runs" data-parsley-required="true" onkeypress='return isNumberKey(event)'
							 data-parsley-required-message="No. of Net Runs" data-parsley-min="0"
							data-parsley-type="number" placeholder="No. of Net Runs" data-parsley-type-message="Enter valid no. of Net Runs" maxlength="20">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="form-row half">
					<div class="form-row half">
						<label> Net Width (in)<em >*</em></label>		
						<input type="text" class="well" name="net_width" id="net_width" placeholder="Net Width" readonly>
					</div>
					<div class="form-row half">
						<label> Net Height (in)<em >*</em></label>		
						<input type="text" class="well" name="net_height" id="net_height" placeholder="Net Height" readonly>
					</div>
				</div>

				<div class="form-row half">
					<div class="form-row half">
						<label> Height from the floor (in) <em >*</em></label>		
							<input type="text" class="" name="in_height_floor" data-parsley-required="true"
								 data-parsley-required-message="Height from the floor" data-parsley-min="0"
								data-parsley-type="number" placeholder="Height from the floor" data-parsley-type-message="Enter valid height from the floor" maxlength="20">
					</div>
					<div class="form-row half">
						<label> Offset Length (min. 4.25in) <em >*</em></label>		
							<input type="text" class="" name="offset_length" data-parsley-required="true"
								 data-parsley-required-message="Offset length" data-parsley-min="0" maxlength="5"  
								data-parsley-type="number" placeholder="Offset length" data-parsley-type-message="Enter valid offset length" maxlength="20">
								<div id="div1" style="color:red;font-size:10.5px"></div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="form-row half">
					<div class="form-row half">
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
					
				
					<div class="form-row half">
							<div class="form-row half">	
								<label>Discount % </label>
								<input type="text" id="discount" name="discount" value="0"
								data-parsley-type="number" data-parsley-max="100"  placeholder="Enter Discount" >
							</div>
							<div class="form-row half">
								<label> Tag Number </label>
								<input type="text" name="tag_number"  id="tag_number" placeholder="Tag number" />
							</div>
					</div>
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
						<label> Unit Price Override</label>
						<input type="text" name="price_override" id="price_override" placeholder="Unit Price Override" 
						data-parsley-type="number" data-parsley-max="50000000" data-parsley-maxlength="11"  value=""   />
					</div>
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
		$(document).on('click','.calculator-btn',function(){
			var cc  = parseFloat($('#in_ctoc').val());
			var oah = parseFloat($('#in_oad_height').val());
			var res1 = ((cc*12)-6).toFixed(2);
			var res2 = ((oah*12)-9).toFixed(2);
			$('#net_width').val(res1);
			$('#net_height').val(res2);
		});

		$('#in_oad_height').on('change', function() {
			var in_oad_height = $(this).val();
			var oad_height = in_oad_height*12;
			oad_height = oad_height - 9;
			oad_height= oad_height.toFixed(2);
			$('#net_height').val(oad_height);
		});
		$('#in_ctoc').on('change', function() {
			var in_ctoc		= $(this).val();
			var ctoc = in_ctoc*12;
			ctoc = ctoc-6;
			ctoc = ctoc.toFixed(2);
			$('#net_width').val(ctoc);
		});

	});

	$('[name="offset_length"]').focusout(function(){
	    var len = $(this).val().length;
	    if(parseFloat($(this).val()) < (4.25))
		{
		   	$('#div1').html('This value cannot be lower then 4.25');
		    $(this).val('');
		}
		else
	    {$('#div1').html('');}
	});
		
</script>
