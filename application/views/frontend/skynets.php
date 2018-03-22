<?php
	echo form_open('', array('id'=>'skynets_form','data-parsley-validate'=>'data-parsley-validate'));
?>
<script type="text/javascript" src="<?php echo base_url();?>assets/front/js/web-product.js" ></script>

<style>
	.left {
	    /*background-color: Red;*/
	       float: left;
    width: 50%;
    padding-left: 5px;
    margin-top: -15px;
   
	}

	.right {
	    /*background-color: Aqua;*/
            margin-top: -14px;
		    float: right;
		    padding-left: 5px;
		    width: 461px;
	}
	.txtF1{
		    width: 68px;
   			margin-left: 4px;

	}
	.txtF2{
		    width: 68px;
   			margin-left: 4px;
   			margin-top:-33px;

	}
	.h,.v{
		padding-top:6px;
	}
</style>

	<div class="form-group">
		<div class="panel panel-default">
		  <div class="panel-heading"> <h5 style="color:white;"> SalesKit Details </h5>	</div>
		  <div class="panel-body">
			<div class="row">
				<div class="form-row half">
					<label>Product <em>*</em>
						<span class="mark_for_review">
							<input type="checkbox" name="mark_for_reviews" value="1" > Mark For Review
						</span>
					</label>
				
					<div id="zero-select-cn" class="select1">
						<select id="netprod" name="net_product" data-parsley-required="true" >
							<option value="">Select</option>
								<?php
									echo netProduct('SkyNet');
								?>
						</select>
					</div>
				</div>
				<div class="form-row half">
					<div class="form-row half ">
							<label>Angles </label>
							<label class="switch">
							  <input type="checkbox" name="angle" >
							  <span class="slider round" style="width:53px"></span>
							</label>
						</div>
				</div>
			</div>
			<div class="row">
			
					
				<div class="form-row half">
					<div id="wid" class="form-row half">
						<label> Sq Panel Width (ft)<em >*</em><a class="get-calculation" data-id="netwidth"><i class="fa fa-calculator" aria-hidden="true"></i></a></label>		
						<input type="text" class="" name="net_width" id="netwidth"
							 data-parsley-required-message="Sq Panel width" data-parsley-min="0" data-parsley-required="true"
							data-parsley-type="number" placeholder="Sq Panel Width" data-parsley-type-message="Enter Valid Sq panel width" maxlength="20">
					</div>
					<div class="form-row half">
						<label> Sq Panel Length (ft)<em >*</em><a class="get-calculation" data-id="netlength"><i class="fa fa-calculator" aria-hidden="true"></i></a></label>		
						<input type="text" class="" name="net_length" id="netlength"
							 data-parsley-required-message="Sq Panel length" data-parsley-min="0" data-parsley-required="true"
							data-parsley-type="number" placeholder="Sq Panel Length" data-parsley-type-message="Enter Valid Sq panel length" maxlength="20">
					</div>
				</div>
				<div class="form-row half">
					<div class="form-row half">
						<label> Number of nets <em >*</em></label>
						<input type="text" class="" name="num_nets" id="num_nets"
							 data-parsley-required-message="Quantity" data-parsley-min="0" data-parsley-required="true"
							data-parsley-type="number" placeholder="Quantity" data-parsley-type-message="Enter Valid Number" maxlength="20">
					</div>
				</div>

			</div>

			
		<div class="form-group">
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
								<input type="text" name="tag_number"  id="tag_number" placeholder="Enter tag number" />
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
						<label>Unit Price Override</label>
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
			<button type="button" class="save" id="calculateskynetQuote">
				Review Quote</button>
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
	
	/*If product is WPN-WRAT hide width*/
	$("#netprod").change(function () {	
		var va	= $(this).find('option:selected').text();
			
		if(va.includes("WPN-WRAT")){
			$('#netwidth').removeAttr('data-parsley-required');
			$('#netwidth').removeAttr('data-parsley-min');
			$('#wid').hide();
		}
		else{
			$('#wid').show();
		}	
	});


		
</script>
