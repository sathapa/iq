<?php
	echo form_open('', array('id'=>'cargoclimb_form','data-parsley-validate'=>'data-parsley-validate'));
?>
<script type="text/javascript" src="<?php echo base_url();?>assets/front/js/web-product.js" ></script>
<style>
	.ccrn_detail {
			    font-size: 1.09vh;
			    /* background-color: darkgrey; */
			    border-radius: 4px;
			    min-height: 3px;
			    padding: 12px 134px;
			    width: 135%;
			    margin-left: -159px;
			    margin-top: -54px;
			    color: grey;
			    text-align: right;
			    display: inline;
			    z-index: 2;
			}
</style>


	<div class="form-group">
		<div class="panel panel-default">
		  <div class="panel-heading"> <h5 style="color:white;"> Net Details </h5>	</div>
		  <div class="panel-body">
			<div class="row">
				
			   	<div class="form-row half">	
					<div class="form-row half">
						<div class="form-row">
							<label>Material <em >*</em> 
								<span class="mark_for_review">
									<input type="checkbox" name="mark_for_reviews" value="1" > Mark For Review
								</span>	
							</label>
							<div id="main-select" alt-data="materialoption" alt-name="net_material">
								<select id="materialoption" name="net_material" data-parsley-required-message="Select Material Style First" class="custom-select" required >
									<option value="">None</option>
								</select>
							</div>
						</div>
					</div>
				    <div class="form-row half">
				    	<div class="form-row half">
				    		<label> Width (ft)<em >*</em><a class="get-calculation" data-id="in_width"><i class="fa fa-calculator" aria-hidden="true"></i></a> </label>
							<input type="text" class="inp" name="net_width" id="in_width" 
							 data-parsley-required-message="Enter width" data-parsley-min="0" data-parsley-required="true"
							 placeholder="Width" data-parsley-type-message="Enter valid width" maxlength="20">


							
						</div>
						<div class="form-row half ">
							<label> Length (ft)<em >*</em> <a class="get-calculation" data-id="in_length"><i class="fa fa-calculator" aria-hidden="true"></i></a></label>
							<input type="text" class="inp" name="net_length" id="in_length" data-parsley-required="true"
								 data-parsley-required-message="Enter length" data-parsley-min="0"
								 placeholder="Length" data-parsley-type-message="Enter valid length" maxlength="20">
							<!-- <div class="form-row half ">
								<label>Thimble <em>*</em></label>
								<label class="switch">
								  <input type="checkbox" id="addons" name="thimble">
								  <span class="slider round" style="width:60px"></span>
								</label>
							</div> -->
						</div>
				    </div>
				</div>
				<div class="form-row half ">
					<div class="form-row half">	
					  	<div class="form-row half">
							<label>No. of nets <em>*</em></label>
								<input type="text" class="inp" name="num_nets" id="num_nets"
											 data-parsley-required-message="Enter number of nets" data-parsley-min="0" data-parsley-required="true"
											data-parsley-type="number" placeholder="No. of nets" data-parsley-type-message="Enter number of nets" maxlength="20">
					  	</div>
					  	<div class="form-row half">
					  		<label>Thimble <em>*</em></label>
								<label class="switch">
									<input type="checkbox" id="addons" name="thimble">
								  	<span class="slider round" style="width:53px"></span>
								</label>
						</div>
					</div>
					<div class="form-row half">
						<div class="ccrn_detail"></div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="form-row half">
					<div class="form-row half">		
						<div class="form-row half">
							<label> # of loops <em >*</em> </label>
							<input type="text" class="inp" name="no_loops" id="no_loops" 
							 data-parsley-required-message="Enter number of loops" data-parsley-min="0" data-parsley-required="true"
							 placeholder="No." data-parsley-type-message="Enter valid number" maxlength="20">
						</div>
						<div class="form-row half">
							<label> Loop size<em >*</em><a class="get-calculation" data-id="loop_size"></a> </label>
							<input type="text" class="inp" name="loop_size" id="loop_size" 
							 data-parsley-required-message="Enter loop size" data-parsley-min="0" data-parsley-required="true"
							 placeholder="Loops size" data-parsley-type-message="Enter valid size" maxlength="20">
						</div>
					</div>
					<div class="form-row half">
						<div class="mesh_1dimensions">
							<label> Mesh dimensions (in)<em >*</em> </label>
							<input type="text" class="inp" name="mesh_size" id="mesh_size" 
							 data-parsley-min="0" 
							 placeholder="Mesh Size" maxlength="20">
						</div>

						<div style="display:none" class="mesh_2dimensions">
							<div class="form-row half">
								<label> Mesh width (in)<em >*</em> </label>
								<input type="text" class="inp" name="mesh_width" id="mesh_width" 
								 data-parsley-min="0" 
								 placeholder="Mesh Width" maxlength="20">
							</div>
							<div class="form-row half">
								<label> Mesh len. (in)<em >*</em> </label>
								<input type="text" class="inp" name="mesh_length" id="mesh_length" 
								 data-parsley-min="0" 
								 placeholder="Mesh Length" maxlength="20">
							</div>
						</div>
					</div>
				</div>
				<div class="form-row half">
					<div class="form-row half">
						<div class="form-row half">
							<label>Equal mesh dim. </label>
							<label class="switch">
							  <input type="checkbox" id="mesh_dimensions" name="mesh_dimensions" checked>
							  <span class="slider round" style="width:53px"></span>
							</label>
						</div>
						<div style="display:none" id="thimble_row_no" class="form-row half" >
							<label># of thimbles</label>
							<input type="text" class="inp" name="thimble_no" id="thimble_no" 
							 data-parsley-min="0" 
							 placeholder="No." maxlength="20">

						</div>
					</div>
					<div style="display:none" id="thimble_row_option" class="form-row half">
						<label>Thimble </label>
						<div id="first-select" alt-data="thimbleoption" alt-name="net_thimble" >
							<select id="thimbleoption" name="net_thimble" class="custom-select">
								<option value="">Select</option>
							</select>
						</div>
					</div>					
				</div>
			</div>			
 
			<hr>
			<div class="row">
  		     <div class="form-row half">	
  			  <div class="form-row half">
				<label>Hardware  </label>
				<div id="second-select" alt-data="hardwareoption" alt-name="net_hardware" >
					<select id="hardwareoption" name="net_hardware" class="custom-select">
						<option value="">None</option>
					</select>
				</div>
			   </div>
			  	 <div class="form-row half">
					<label> Rope Tails (ft) <a class="get-calculation" data-id="rope_tails"><i class="fa fa-calculator" aria-hidden="true"></i></a> </label>
					<input type="text" class="inp" name="rope_tails" id="rope_tails" data-parsley-min="0" placeholder="Rope Tails" maxlength="20">
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
						<label>Unit Price Override</label>
						<input type="text" name="price_override" id="price_override" placeholder="Unit Price Override" 
						data-parsley-type="number" data-parsley-max="50000000" data-parsley-maxlength="11"  value=""   />
					</div>
				</div>
			</div>

			<div class="row">
				<input type="hidden" name="mesh5" value='5'>
					<div style="display:none" >
  						<label> Splice Border </label>
						<input type="text" class="well" name="net_spliceborder" id="in_spliceborder" 
							 placeholder="Spliceborder" readonly>
					</div>
			</div>
		</div>
  	  </div>
    </div>

		<div class="row">
			<div class="form-row three ">
			<button type="button" class="save" id="calculatecclimbQuote">
				Review Quote</button>
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

	$(document).on('click','.calculator-btn',function(){
		var l1 = parseFloat($('#in_length').val());
		var w1 = parseFloat($('#in_width').val());
		var body_dimensions = '(Body Dimensions- '+ l1+'ft x '+w1+'ft)';
		if($("#addons").prop('checked') == true){
				var body_len1 = ((l1*12)-3)/12;
				var body_wid2 = ((w1*12)-3)/12;
				var body_dimensions = '(Body Dimensions- '+ body_len1+'ft x '+body_wid2+'ft)';
			}
		$( "div.ccrn_detail" ).empty();
		$('div.ccrn_detail').append('<span id="add_here">'+body_dimensions+'</span>');

		var res = 2*(l1+w1);
		$('#in_spliceborder').val(res);
	});

	$('#in_length').on('change',function(){
		var l1 = parseFloat($(this).val()); 
		
		$('#in_width').on('change',function(){
			var w2 = parseFloat($(this).val());
			var body_len1 = ((l1*12)-3)/12;
			var body_wid2 = ((w2*12)-3)/12;

			var body_dimensions = '(Body Dimensions- '+ l1+'ft x '+w2+'ft)';
			if($("#addons").prop('checked') == true){
				var body_dimensions = '(Body Dimensions- '+ body_len1+'ft x '+body_wid2+'ft)';
			}

			/*$(".ccrn_detail").val(body_dimensions);*/
			$( "div.ccrn_detail" ).empty();
			$('div.ccrn_detail').append('<span id="add_here">'+body_dimensions+'</span>');

			var res = 2*(l1+w2);
			$('#in_spliceborder').val(res);
		});
	});

	$('#in_width').on('change',function(){
		var w1 = parseFloat($(this).val()); 
		$('#in_length').on('change',function(){
			var l2 = parseFloat($(this).val()); 
			var body_len2 = ((l2*12)-3)/12;
			var body_wid1 = ((w1*12)-3)/12;

			var body_dimensions1 = '(Body Dimensions- '+ l2+'ft x '+w1+'ft)';
			 if($("#addons").prop('checked') == true){
			 	var body_dimensions1 = '(Body Dimensions- '+ body_len2+'ft x '+body_wid1+'ft)';
			 }

			/*console.log(body_dimensions1);*/
			$( "div.ccrn_detail" ).empty();
			$('div.ccrn_detail').append('<span id="add_here">'+body_dimensions1+'</span>');
		/*	$(".ccrn_detail").val(body_dimensions1);*/

			var res = 2*(l2+w1);
			$('#in_spliceborder').val(res);
		});
	});

	$('#mesh_dimensions').on('click',function(){
	  if($(this).prop('checked') == true){
	  	$('#mesh_width').val("");
	  	$('#mesh_length').val("");
	  	/*Equal dimension*/
	  	
	  	$('.mesh_2dimensions').hide();
	  	$('.mesh_1dimensions').show();	  	
	  }
	  else{
	  /*Unequal dimension*/
	    $('#mesh_size').val("");
	  	
	  	$('.mesh_2dimensions').show();
	  	$('.mesh_1dimensions').hide();
	  }
	});

	$('#addons').on('click',function(){
	  var l = parseFloat($('#in_length').val());
	  var w = parseFloat($('#in_width').val());
	  if($(this).prop('checked') == true){
	  	var l = ((l*12)-3)/12;
		var w = ((w*12)-3)/12;
	  	var body_dimensions = '(Body Dimensions- '+ l+'ft x '+w+'ft)';	
	  	$("#thimble_row_no,#thimble_row_option").show();
	  	$( "div.ccrn_detail" ).empty();
		$('div.ccrn_detail').append('<span id="add_here">'+body_dimensions+'</span>');

	  }
	  else{
	  	$("#thimble_row_no,#thimble_row_option").hide();	
	  }
	});
	


</script>
