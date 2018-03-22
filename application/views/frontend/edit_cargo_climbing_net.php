	<div class="row">
		<?php  
			$markReview		= !empty($quote_list->function_param->f24) ? $quote_list->function_param->f24 : 0;
			$quoteDesciption= !empty($quote_list->function_param->f29) ? $quote_list->function_param->f29 : '';
			$quoteDesciption	= str_replace(';',"\n",$quoteDesciption);
			
			echo form_open('', array('class'=>'form-row ','id'=>'index_form','data-parsley-validate'=>'data-parsley-validate'));
	    ?>
		
		<input type="hidden" name="customer" id="customer" value="<?=!empty($quote_list->function_param->f4)?$quote_list->function_param->f4:''?>">
		<input type="hidden" name="old_quoteid" id="old_quoteid" value="<?=$quote_id?>" />
		<input type="hidden" name="quote_line" id="quote_line" value="<?=!empty($quote_list->quote_line_no)?$quote_list->quote_line_no:''?>" />
		<input type="hidden" id="choose-sales" name="choose-sales" value="<?=!empty($quote_list->function_param->f17)?$quote_list->function_param->f17:''?>" />
		<input type="hidden" id="choose-wtclass" name="choose-wtclass" value="<?=!empty($quote_list->function_param->f26)?$quote_list->function_param->f26:'IND'?>" />
		<input type="hidden" name="opportunity" id="opportunity" value="<?=!empty($quote_list->function_param->f3)?$quote_list->function_param->f3:''?>" />
		<input type="hidden" id="contact" name="contact" value="<?=!empty($quote_list->function_param->f28)?$quote_list->function_param->f28:''?>" />
		<input type="hidden" id="lead-time" name="lead-time" value="<?=!empty($quote_list->function_param->f29)?$quote_list->function_param->f29:''?>" />
		<input type="hidden" id="proposal_number" name="proposal_number" value="<?=!empty($proposalId)?$proposalId:''?>" />
		<textarea id="edit_quote_description" name="edit_quote_description" style="display:none"></textarea>
		<?=form_close()?>
	</div>
	
<style>
	.ccrn_detail{
		            font-size: 11px;
				    /* background-color: darkgrey; */
				    border-radius: 4px;
				    min-height: 40px;
				    padding: 25px 173px;
				    width: 135%;
				    margin-left: -183px;
				    margin-top: -34px;
				    color: grey;
				    display: inline;
	}
</style>

<?php
	echo form_open('', array('id'=>'cargoclimb_form','data-parsley-validate'=>'data-parsley-validate'));
?>
  <div class="form-group">
	<div class="panel panel-default">
	  <div class="panel-heading"> <h5 style="color:white;"> Net Details </h5>	</div>
	  <div class="panel-body">
			<div class="row">
				
					<span class="mark_for_review">
						<input type="checkbox" name="mark_for_reviews" value="1" <?=!empty($markReview) ? 'checked' : '';?>> Mark For Review
					</span>	
				<div class="form-row half">
					<div class="form-row half">
						<div class="form-row">
							<label>Material <em >*</em></label>
							<div id="main-select" alt-data="materialoption" alt-name="net_material" class="select1">
								<select id="materialoption" name="net_material" data-parsley-required-message="Select Material Style First" required >
									<option value="">None</option>
									<?php if(!empty($quote_list->function_param->f7)){ echo editpopulateProductOptions($quote_list->product,'rope',$quote_list->function_param->f7);
									}	?>
								</select>
							</div>
						</div>
					</div>
					<div class="form-row half">
						<div class="form-row half ">
							<label> Length (ft)<em >*</em> <a class="get-calculation" data-id="in_length"><i class="fa fa-calculator" aria-hidden="true"></i></a></label>
							<input type="text" class="inp" name="net_length" id="in_length" data-parsley-required="true"
								 data-parsley-required-message="Enter length" data-parsley-min="0"
								 placeholder="Length" data-parsley-type-message="Enter valid length" maxlength="20" value="<?=!empty($quote_list->function_param->f9)?$quote_list->function_param->f9:0?>">
						</div>
						<div class="form-row half">
							<label> Width (ft)<em >*</em><a class="get-calculation" data-id="in_width"><i class="fa fa-calculator" aria-hidden="true"></i></a> </label>
							<input type="text" class="inp" name="net_width" id="in_width" 
								 data-parsley-required-message="Enter width" data-parsley-min="0" data-parsley-required="true"
								 placeholder="Width" data-parsley-type-message="Enter valid width" maxlength="20" value="<?=!empty($quote_list->function_param->f10)?$quote_list->function_param->f10:0?>">
					  	</div>
					</div>
				</div>
				<div class="form-row half ">
				  <div class="form-row half">
					<div class="form-row half">
						<label>No. of nets <em>*</em></label>
						<input type="text" class="inp" name="num_nets" id="num_nets" 
									 data-parsley-required-message="Enter number of nets" data-parsley-min="0" data-parsley-required="true"
									data-parsley-type="number" placeholder="No. of nets" data-parsley-type-message="Enter number of nets" maxlength="20" value="<?=!empty($quote_list->function_param->f8)?$quote_list->function_param->f8:0?>">
					</div>
					<div class="form-row half">
				  		<label>Thimble <em>*</em></label>
						<label class="switch">
						  <input type="checkbox" id="addons" name="thimble">
						  <span class="slider round" style="width:60px"></span>
						</label>
					</div>
				  </div>
				  
				  <div class="form-row half">
						<div class="ccrn_detail"></div>
				  </div>

				</div>
			</div>
			<p class="ccrn_detail"></p>
			<div class="row">
				<div class="form-row half">
					<div class="form-row half">		
						<div class="form-row half">
							<label> # of loops <em >*</em> </label>
							<input type="text" class="inp" name="no_loops" id="no_loops" 
							 data-parsley-required-message="Enter number of loops" data-parsley-min="0" data-parsley-required="true"
							 placeholder="No." data-parsley-type-message="Enter valid number" maxlength="20" value="<?=!empty($quote_list->function_param->f15)?$quote_list->function_param->f15:0?>">
						</div>
						<div class="form-row half">
							<label> Loop size<em >*</em><a class="get-calculation" data-id="loop_size"></a> </label>
							<input type="text" class="inp" name="loop_size" id="loop_size" 
							 data-parsley-required-message="Enter loop size" data-parsley-min="0" data-parsley-required="true"
							 placeholder="Loops size" data-parsley-type-message="Enter valid size" maxlength="20" value="<?=!empty($quote_list->function_param->f16)?$quote_list->function_param->f16:0?>">
						</div>
					</div>
					<div class="form-row half">
						<div class="mesh_1dimensions">
							<label> Mesh dimensions (in)<em >*</em> </label>
							<input type="text" class="inp" name="mesh_size" id="mesh_size" 
							 data-parsley-min="0" 
							 placeholder="Mesh Size" maxlength="20" value="<?=!empty($quote_list->function_param->f12)?$quote_list->function_param->f12:0?>">
						</div>

						<div style="display:none" class="mesh_2dimensions">
							<div class="form-row half">
								<label> Mesh width (in)<em >*</em> </label>
								<input type="text" class="inp" name="mesh_width" id="mesh_width" 
								 data-parsley-min="0" 
								 placeholder="Mesh Width" maxlength="20">
							</div>
							<div class="form-row half">
								<label> Mesh length (in)<em >*</em> </label>
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
							  <span class="slider round" style="width:60px"></span>
							</label>
						</div>
						<div style="display:none" id="thimble_row_no" class="form-row half" >
							<label># of thimbles</label>
							<input type="text" class="inp" name="thimble_no" id="thimble_no" 
							 data-parsley-min="0" 
							 placeholder="No." maxlength="20"  value="<?=!empty($quote_list->function_param->f17)?$quote_list->function_param->f17:0?>">

						</div>
					</div>
					<div style="display:none" id="thimble_row_option" class="form-row half">
						<label>Thimble </label>
						<div id="first-select" alt-data="thimbleoption" alt-name="net_thimble" class="select1" >
							<select id="thimbleoption" name="net_thimble">
								<option value="">Select</option>
								<?php if(!empty($quote_list->function_param->f19)){ echo editpopulateProductOptions($quote_list->product,'thimble',$quote_list->function_param->f19);
								}	?>
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
				<div id="second-select" alt-data="hardwareoption" alt-name="net_hardware" class="select1" >
					<select id="hardwareoption" name="net_hardware" >
						<option value="">None</option>
						<?php if(!empty($quote_list->function_param->f20)){ echo editpopulateProductOptions($quote_list->product,'hardware',$quote_list->function_param->f20);
								}	?>
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
								<option value="Retail Pricing [1]" <?=(!empty($quote_list->function_param->f21)&&($quote_list->function_param->f21=='1'))?'selected':''?>>Retail Pricing</option>  
								<option value="Distributor Pricing [2]" <?=(!empty($quote_list->function_param->f21)&&($quote_list->function_param->f21=='2'))?'selected':''?>>Distributor Pricing</option>
								<option value="Over $5K Pricing [3]" <?=(!empty($quote_list->function_param->f21)&&($quote_list->function_param->f21=='3'))?'selected':''?>>Over $5K Pricing</option>   
								<option value="Over $10K Pricing [4]" <?=(!empty($quote_list->function_param->f21)&&($quote_list->function_param->f21=='4'))?'selected':''?>>Over $10K Pricing </option>
							</select>
						</div>
					</div>
					
					<div class="form-row half">
							<div class="form-row half">	
								<label>Discount % </label>
								<input type="text" id="discount" name="discount"
								data-parsley-type="number" data-parsley-max="100"  placeholder="Enter Discount" value="<?=!empty($quote_list->function_param->f22)?$quote_list->function_param->f22:0?>">
							</div>
							<div class="form-row half">
								<label> Tag Number </label>
								<input type="text" name="tag_number"  id="tag_number" placeholder="Tag number" value="<?=!empty($quote_list->function_param->f30)?$quote_list->function_param->f30:''?>"/>
							</div>
					</div>
				</div>
			
			
				<div class="form-row half">
					
					
						<label> Additional Instructions (Does not show in proposal)</label>
						<input type="text" name="instrunctions"  id="instrunctions" placeholder="Enter any additional details including special part and instruction here" value="<?=!empty($quote_list->function_param->f23)?$quote_list->function_param->f23:''?>"/>
					
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
						<input type="text" class="well" name="net_spliceborder" id="in_spliceborder" value="<?=!empty($quote_list->function_param->f15)?$quote_list->function_param->f15:0?>"
							 placeholder="Spliceborder" readonly >
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
