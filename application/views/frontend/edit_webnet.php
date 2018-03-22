<div class="row">
		<?php  
			$markReview		= !empty($quote_list->function_param->f24) ? $quote_list->function_param->f24 : 0;
			$quoteDesciption= !empty($quote_list->function_param->f25) ? $quote_list->function_param->f25 : '';
			$quoteDesciption	= str_replace(';',"\n",$quoteDesciption);
		
			echo form_open('', array('class'=>'form-row ','id'=>'index_form','data-parsley-validate'=>'data-parsley-validate'));
		//print_r($quote_list);
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
	echo form_open('', array('id'=>'webnets_form','data-parsley-validate'=>'data-parsley-validate'));
?>
		<div class="form-group">
			<div class="panel panel-default">
	  			<div class="panel-heading"> <h5 style="color:white;"> Net Details </h5>	</div>
	  			<div class="panel-body">
						<div class="row">
								
								<div class="form-row half" >
									<label>Material <em >*</em>
										<span class="mark_for_review">
											<input type="checkbox" name="mark_for_reviews" value="1"<?=!empty($markReview) ? 'checked' : '';?>> Mark For Review
										</span>
									</label>
									<!-- <input type="text" id="choose-product" value="<?= $quote_list->function_param->f5 ?>" style="display:none">
									<input type="text" id="choose-material" value="<?= '['.$quote_list->detail_itemcode.'] '.$quote_list->detail_description ?>" > -->
									<div id="zero-select" alt-data="materialoption" alt-name="net_material" class="select1">
										<select id="materialoption" name="net_material" >
											<option value="">None</option>
											<?php if(!empty($quote_list->function_param->f6)){ echo editpopulateProductOptions('WNC','webnet',$quote_list->function_param->f12);
											}	?>
										</select>
									</div>
								</div>
								<div class="form-row half">
									<div class="form-row three">
												<label>Number of Nets <em >*</em></label>
												<input type="text" data-parsley-min="1" 
												data-parsley-type="number" id="numberofnet" name="net_number" required onkeypress='return isNumberKey(event)' placeholder="Number of net " value="<?=!empty($quote_list->function_param->f16)?$quote_list->function_param->f16:0?>"   />
									
									</div>	
								
									<div class="form-row three">
										<label>Length (in Ft) <em >*</em></label>
										<input type="text" class="newLength" id="netlength" name="net_length" data-parsley-required="true"
										 data-parsley-required-message="Enter Length First" data-parsley-ge="#netwidth"
										  data-parsley-ge-message="Length value should be greater than or equal to width" data-parsley-min="1"
										  value="<?=!empty($quote_list->function_param->f7)?$quote_list->function_param->f7:0?>"
										data-parsley-type="number" placeholder="Enter length" data-parsley-type-message="Enter Valid Length Value" maxlength="20">
									</div>

									<div class="form-row three">
										<label>Width (in Ft) <em >*</em></label>
										<input type="text" class="newWidth" id="netwidth" name="net_width" data-parsley-required="true" data-parsley-required-message="Enter Width Value" data-parsley-min="1" value="<?=!empty($quote_list->function_param->f8)?$quote_list->function_param->f8:0?>"
										data-parsley-type="number" placeholder="Enter width"  data-parsley-type-message="Enter Valid Width Value" maxlength="20">
									</div>
								</div>
										
						</div>
						<div class="row">
							<div class="form-row half">
								<label>Webbing Tensile(lbs) & Thickness(in) </label>
								<input type="text" id="web_detail" name="web_detail" readonly>
							</div>
							
							<div class="form-row half">
								<div class="form-row three">
									<label>Thread </label>
									<input type="text" id="thread1" name="thread1" value="[<?=!empty($quote_list->function_param->f16)?$quote_list->function_param->f11:0?>]"/>
								</div>
								<div class="form-row three">
									<label>Mesh Size (in)<em >*</em></label>
									<div class="select1">
										<select id="mesh_size" name="mesh_size" >
											<option value="2" <?=(!empty($quote_list->function_param->f9)&&($quote_list->function_param->f9=='2'))?'selected':''?>>2in O.C</option>  
											<option value="3" <?=(!empty($quote_list->function_param->f9)&&($quote_list->function_param->f9=='3'))?'selected':''?>>3in O.C.</option>
											<option value="4" <?=(!empty($quote_list->function_param->f9)&&($quote_list->function_param->f9=='4'))?'selected':''?>>4in O.C.</option>   
											<option value="5" <?=(!empty($quote_list->function_param->f9)&&($quote_list->function_param->f9=='5'))?'selected':''?>>5in O.C.</option>
											<option value="6" <?=(!empty($quote_list->function_param->f9)&&($quote_list->function_param->f9=='6'))?'selected':''?>>6in O.C</option>  
											<option value="7" <?=(!empty($quote_list->function_param->f9)&&($quote_list->function_param->f9=='7'))?'selected':''?>>7in O.C.</option>
											<option value="8" <?=(!empty($quote_list->function_param->f9)&&($quote_list->function_param->f9=='8'))?'selected':''?>>8in O.C.</option>   
											<option value="9" <?=(!empty($quote_list->function_param->f9)&&($quote_list->function_param->f9=='9'))?'selected':''?>>9in O.C.</option>
											<option value="10" <?=(!empty($quote_list->function_param->f9)&&($quote_list->function_param->f9=='10'))?'selected':''?>>10in O.C.</option>								
										</select>
									</div>


								</div>
								<div class="form-row three">
									<label>Mesh ID (in)</label>
									<input type="text" id="mesh_id1" name="mesh_id1" />
								</div>
						
						</div>
						</div>
						<div class="row ">
							<div class="form-row three">
								<label>Loops around Perimeter</label>
									<div id="first-select" alt-data="loopsoptions" alt-name="loopsoptions" class="select1" >
									<select id="loopsoptions" name="loopsoptions" >
										<option value="" <?=(!empty($quote_list->function_param->f15)&&($quote_list->function_param->f15==''))?'selected':''?>>None</option>
										<option value="1" <?=(!empty($quote_list->function_param->f15)&&($quote_list->function_param->f15=='1'))?'selected':''?>>Loops to accomodate 1in</option>  
										<option value="1.5" <?=(!empty($quote_list->function_param->f15)&&($quote_list->function_param->f15=='1.5'))?'selected':''?>>Loops to accomodate 1.5in</option>
										<option value="2" <?=(!empty($quote_list->function_param->f15)&&($quote_list->function_param->f15=='2'))?'selected':''?>>Loops to accomodate 2in</option>   
										<option value="2.5" <?=(!empty($quote_list->function_param->f15)&&($quote_list->function_param->f15=='2.5'))?'selected':''?>>Loops to accomodate 2.5in </option>
										<option value="4" <?=(!empty($quote_list->function_param->f15)&&($quote_list->function_param->f15=='4'))?'selected':''?>>Loops to accomodate 4in </option>
									</select>
								</div>
							</div>
							<div class="form-row three">
								<label> Grommets around Perimeter </label>
								<div id="second-select" alt-data="grommet" alt-name="net_grommet" class="select1" >
									<select id="grommet" name="net_grommet" >
										<option value="">None</option>
										<?php if(!empty($quote_list->function_param->f6)){ echo editpopulateProductOptions('WNC','grommet',$quote_list->function_param->f13);
											}	?>
									</select>
								</div>
							</div>
							
							<div class="form-row three">
								<label>Hardware for corners only </label>
								<div id="third-select" alt-data="hardware" alt-name="net_corner" class="select1">
									<select id="hardware" name="net_corner" >
										<option value="">None</option>
										<?php if(!empty($quote_list->function_param->f6)){ echo editpopulateProductOptions('WNC','hardware',$quote_list->function_param->f14);
											}	?>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-row half">
								<div class="form-row half">
									<label>Pricing Tier </label>
									<div class="select1">
										<select id="pricingtier" name="pricing_tier" >
											<option value="Retail Pricing [1]" <?=(!empty($quote_list->function_param->f17)&&($quote_list->function_param->f17=='1'))?'selected':''?>>Retail Pricing</option>
											<option value="Distributor Pricing [2]" <?=(!empty($quote_list->function_param->f17)&&($quote_list->function_param->f17=='2'))?'selected':''?>>Distributor Pricing </option>
											<option value="Over $5K Pricing [3]" <?=(!empty($quote_list->function_param->f17)&&($quote_list->function_param->f17=='3'))?'selected':''?> >Over $5K Pricing </option>   
											<option value="Over $10K Pricing [4]" <?=(!empty($quote_list->function_param->f17)&&($quote_list->function_param->f17=='4'))?'selected':''?>>Over $10K Pricing </option>
										</select>
									</div>
								</div>
								
							
								<div class="form-row half">
										<div class="form-row half">	
											<label>Discount % </label>
											<input type="text" id="discount" name="discount" value="<?=!empty($quote_list->function_param->f18)?$quote_list->function_param->f18:0?>"
											data-parsley-type="number" data-parsley-max="100"  placeholder="Enter Discount" >
										</div>
										<div class="form-row half">
											<label> Tag Number </label>
											<input type="text" name="tag_number"  id="tag_number" placeholder="Enter tag number" value="<?=!empty($quote_list->function_param->f26)?$quote_list->function_param->f26:''?>"/>
										</div>
								</div>
							</div>
							<div class="form-row half">
								<label> Additional Instructions (Does not show in proposal)</label>
								<input type="text" name="instrunctions"  id="instrunctions" placeholder="Enter any additional details including special part and instruction here" value="<?=!empty($quote_list->function_param->f19)?$quote_list->function_param->f19:''?>"/>
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
				<button type="button" class="save" id="calculatewebnetQuote">
					Review Quote</button>
				</div>
			</div>
		</div>
<?=form_close()?>


<script>
	
	$( document ).ready(function() {
			var material	= $('#materialoption').find('option:selected').text();
			console.log(material);
			if(material!='None'){
				var m_arr	= material.split(' ');
				var i_code = m_arr[0]; console.log(i_code);
				var width = m_arr[1].substr(1);
				var w = width.slice(0,-2);

				populateWebbingDetails(i_code);
				
				var m_size = $('#mesh_size').val();
		 		var m_id = m_size - w;
				$('#mesh_id1').val(m_id);
			}
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
