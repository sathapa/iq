<style>
	.remove-rope-rowv,.remove-rope-rowh{
		    display: block;
		  margin-top: 12px;
    }
    .add-itemv,.add-itemh{ padding:10px 0px;  float:left; width:100%;}
</style>
<div class="row">
	<?php
		$markReview		= !empty($quote_list->function_param->f24) ? $quote_list->function_param->f24 : 0;
		$quoteDesciption= !empty($quote_list->function_param->f25) ? $quote_list->function_param->f25 : '';
		$dimension		= !empty($quote_list->function_param->f26) ? $quote_list->function_param->f26 : '';
		$maseSize		= !empty($quote_list->function_param->f27) ? $quote_list->function_param->f27 : '';
		$quoteDesciption	= str_replace(';',"\n",$quoteDesciption);
		
		echo form_open('', array('class'=>'form-row ','id'=>'index_form','data-parsley-validate'=>'data-parsley-validate'));
	//print_r($quote_list);
?>
	<input type="hidden" name="customer" id="customer" value="<?=!empty($quote_list->function_param->f4)?$quote_list->function_param->f4:''?>">
	<input type="hidden" name="old_quoteid" id="old_quoteid" value="<?=$quote_id?>" />
	<input type="hidden" name="quote_line" id="quote_line" value="<?=!empty($quote_list->quote_line_no)?$quote_list->quote_line_no:''?>" />
	<input type="hidden" id="choose-sales" name="choose-sales" value="<?=!empty($quote_list->function_param->f13)?$quote_list->function_param->f13:''?>" />
	<input type="hidden" id="choose-wtclass" name="choose-wtclass" value="<?=!empty($quote_list->function_param->f14)?$quote_list->function_param->f14:'IND'?>" />
	<input type="hidden" name="opportunity" id="opportunity" value="<?=!empty($quote_list->function_param->f15)?$quote_list->function_param->f15:''?>" />
	<input type="hidden" id="contact" name="contact" value="<?=!empty($quote_list->function_param->f16)?$quote_list->function_param->f16:''?>" />
	<input type="hidden" id="lead-time" name="lead-time" value="<?=!empty($quote_list->function_param->f17)?$quote_list->function_param->f17:''?>" />
	<input type="hidden" id="proposal_number" name="proposal_number" value="<?=!empty($proposalId)?$proposalId:''?>" />
	<textarea id="edit_quote_description" name="edit_quote_description" style="display:none"><?=$quoteDesciption;?></textarea>
	<?=form_close()?>
</div>
<?php
	echo form_open('', array('id'=>'netform_form','data-parsley-validate'=>'data-parsley-validate'));
	//dump($quote_list);die;
	$verticalDetails	= !empty($quote_list->function_param->f6)?$quote_list->function_param->f6:'';
	$horizontalDetails	= !empty($quote_list->function_param->f7)?$quote_list->function_param->f7:'';
	$quantity			= !empty($quote_list->function_param->f8) ? $quote_list->function_param->f8 : 1;
	$discount			= !empty($quote_list->function_param->f10) ? $quote_list->function_param->f10 :0;
	$specialInstruction	= !empty($quote_list->function_param->f11) ? $quote_list->function_param->f11 :0;
	$uomSelRopes		= !empty($quote_list->function_param->f20) ? $quote_list->function_param->f20 :'';
	$overrideFlag		= !empty($quote_list->function_param->f21) ? $quote_list->function_param->f21 :'0';
	$eggs				= !empty($quote_list->function_param->f22) ? $quote_list->function_param->f22 :'0';
	$tees				= !empty($quote_list->function_param->f23) ? $quote_list->function_param->f23 :'0';
	
	$verticalData = (array)$verticalDetails;
	$rope_v = array(); $termtop_v = array(); $termbottom_v = array(); $ropeno_v = array(); $ropesize_v = array(); 
	foreach ($verticalData as $val){
						$rope_v[] = $val->verRopeType;
						$termtop_v[] = $val->verTerminalTop;
						$termbottom_v[] = $val->verTerminalBottom;
						$ropesize_v[] = $val->verRopeSize;
						$ropeno_v[] = $val->verRopeCount;
					}
	

	$horizontalData = (array)$horizontalDetails;
	$rope_h = array(); $termtop_h = array(); $termbottom_h = array(); $ropeno_h = array(); $ropesize_h = array(); 
	foreach ($horizontalData as $val){
						$rope_h[] = $val->horiRopeType;
						$termtop_h[] = $val->horiTerminalTop;
						$termbottom_h[] = $val->horiTerminalBottom;
						$ropesize_h[] = $val->horiRopeSize;
						$ropeno_h[] = $val->horiRopeCount;
					}

	$netformProduct	= !empty($quote_list->product)?$quote_list->product:null;
	
?>
<div class="form-group">
	<div class="panel panel-default">
  	  <div class="panel-heading"> <h5 style="color:white;"> Net Details </h5>	</div>
	  <div class="panel-body">
		<div class="row">
			<div class="form-row ">
				<div class="form-row two">
					<div class="form-row ">
						<label>Product Type <em >*</em>
							<!-- Changes (27-07-2017) -->
							<span class="mark_for_review">
								<input type="checkbox" name="mark_for_reviews" value="1" <?=!empty($markReview) ? 'checked' : '';?> > Mark For Review
							</span> 
							<!-- Changes (27-07-2017) -->
							<!-- Changes (22-11-2017) -->
							<span class="override-flg">
								<label>Override Eggs & Tees </label>
								<div class="select1" id="netform-override-html">
									<input type="checkbox" id="net_form_override_flag" class="net_form_override_flag" name="override_flag" value="1" <?=!empty($overrideFlag) ? 'checked' : '' ?>>
								</div>
							</span>
							<!-- Changes (22-11-2017) -->
						</label>
						<div class="select1">
							<select id="netformtype" name="net_product" data-parsley-required="true" >
								<option value="">Select</option>
									<?php
										echo netProduct('Netform',$netformProduct);
									?>
							</select>
						</div>
					</div>
					
				</div>
				<div class="form-row two">
					
					<div class="form-row three">
						<label>Pricing Tier </label>
						<div class="select1">
							<select id="pricingtier" name="pricing_tier" >
								<option value="Retail Pricing [1]" <?=(!empty($quote_list->function_param->f9)&&($quote_list->function_param->f9=='1'))?'selected':''?>>Retail Pricing</option>
								<option value="Distributor Pricing [2]" <?=(!empty($quote_list->function_param->f9)&&($quote_list->function_param->f9=='2'))?'selected':''?>>Distributor Pricing </option>
								<option value="Over $5K Pricing [3]" <?=(!empty($quote_list->function_param->f9)&&($quote_list->function_param->f9=='3'))?'selected':''?> >Over $5K Pricing </option>   
								<option value="Over $10K Pricing [4]" <?=(!empty($quote_list->function_param->f9)&&($quote_list->function_param->f9=='4'))?'selected':''?>>Over $10K Pricing </option>
							
							</select>
						</div>
					</div>
					
					<div class="form-row three">
						<label>Number of Nets <em >*</em></label>
						<input type="text" id="numberofnet" required data-parsley-min="1" 
						data-parsley-type="number" name="net_number" required onkeypress='return isNumberKey(event)' placeholder="Number of net " value="<?=$quantity?>" />
					</div>
					
					<div class="form-row three">
						<label>Discount % </label>
							<input type="text" id="discount" name="discount" value="<?=$discount?>"
						data-parsley-type="number" data-parsley-max="100"  placeholder="Enter Discount" >
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="row">
			
			<!-- Added New two fields (10-07-2017) -->
			<div class="form-row two">
				<div class="form-row seven">
					<label>Dimension </label>
					<input type="text" id="dimenson" name="dimenson" placeholder="Dimension" value="<?=$dimension?>" />
				</div>
				<div class="form-row three">
					<label>Mesh Size (in In)</label>
					<input type="text" id="mesh_size" name="mesh_size" placeholder="Mesh Size"  value="<?=$maseSize?>" >
				</div>
				
			</div>
			
			<!-- Added New two fields (07-07-2017) -->
			<div class="form-row two">
				
				<div class="form-row three">
					<label>UOM for Rope </label>
					<div class="select1">
						<select name="uom_rope">
							<?php
								$uomRopes	= $this->config->item('uom_rope');
								if(!empty($uomRopes) && is_array($uomRopes)){
									foreach($uomRopes as $uom){
										$selected	= (!empty($uomSelRopes) && $uomSelRopes==$uom) ? 'selected' : '';
										echo '<option value="'.$uom.'" '.$selected.'>'.$uom.'</option>';
									}
								}
							?>
						</select>
					</div>
				</div>
				
				<div class="form-row three">
					<label>Number Of Eggs </label>
					<div class="select1">
						<input type="text" class="netform-checking-value" id="number_of_eggs" name="number_of_eggs" data-parsley-min="0" 
						data-parsley-type="number" data-parsley-maxlength="20"  placeholder="Number of Eggs" value="<?=$eggs;?>" >
					</div>
				</div>
				<div class="form-row three">
					<label>Number Of Tees </label>
					<div class="select1">
						<input type="text" class="netform-checking-value" id="number_of_tees" name="number_of_tees" data-parsley-min="0" value="<?=$tees?>"
						data-parsley-type="number" data-parsley-maxlength="20"  placeholder="Number of Tees" >
					</div>
				</div>
			</div>
		</div>
		
		<!-- Verticals Div -->
		<div id="verticals_div">
			<h2>Verticals</h2>
			<div class="row1">
				<div class="form-row half"><div class="form-row half">
					<label>Rope Type <em >*</em></label>
				</div>
				<div class="form-row half">
					<div class="form-row half">
						<label># Of Ropes </label>
					</div>
					<div class="form-row half">
						<label>Size <em >*</em></label>
					</div>
				</div></div>
				<div class="form-row half">
					<div class="form-row half">
						<label>Termination #1 (Top)</label>
					</div>
					<div class="form-row half">
						<label>Termination #2 (Bottom)</label>
					</div>
				</div>
			</div>
			<?php
				for($i=0;$i<count($rope_v);$i++)
				{
			?>
				<div class="add-itemv rope-product">
				<div class="form-row half">
					<div class="form-row half">
						<div class="vertical-rope-type">
							<select name="vertical_rope_type[]" class="custom-select" <?=$required?>>
								<option value="Default[No Rope]">No Rope</option>
								<?php echo editpopulateProductOptions($netformProduct,'Rope',$rope_v[$i]); ?>
							</select>
						</div>
					</div>
					
					<div class="form-row half">
						<div class="form-row half">
							<input type="text" class="" name="ropecount[]" data-parsley-required="true" data-parsley-required-message="Rope Quantity" data-parsley-min="0"
								data-parsley-type="number" placeholder="Rope Quantity"  data-parsley-type-message="Enter Valid Rope Quantity" maxlength="20"
								value="<?=$ropeno_v[$i]?>">
						</div>
						<div class="quantityv form-row half">
							<input type="text" class="" name="ropesize[]" data-parsley-required="true"
							 data-parsley-required-message="Rope Size" data-parsley-min="0"
							data-parsley-type="number" placeholder="Rope Size" data-parsley-type-message="Enter Valid Rope Size" maxlength="20" value="<?=$ropesize_v[$i]?>">
						</div>
					</div>
				</div>
				
				<div class="form-row half">
					<div class="form-row half">
						<div class=" terminal-top">
							<select  name="termination_top[]" class="custom-select">
								<option value="Default[Cat-0]">No Terminations</option>
								<?php echo editpopulateProductOptions($netformProduct,'Termination', $termtop_v[$i]);
								?>
							</select>
						</div>
					</div>
					<div class="form-row half">
						<div class=" terminal-bottom">
							<select  name="termination_bottom[]" class="custom-select" >
								<option value="Default[Cat-0]">No Terminations</option>
								<?php echo editpopulateProductOptions($netformProduct,'Termination', $termbottom_v[$i]);
								?>
							</select>
						</div>
						
					</div>
				</div>
				<a href="javascript:void(0)" class="add-rope-rowv"><img src="<?=base_url('assets/front/images/plus.png')?>" alt="plus"></a>
				<a href="javascript:void(0)" class="remove-rope-rowv"><img src="<?=base_url('assets/front/images/minus.png')?>" alt="minus"></a>
			</div>		
			<?php
				}

			?>
		</div>
		
		<!-- Horizontals Div -->
		<div id="horizontals_div">
			<h2>Horizontals</h2>
			<div class="row1">
				<div class="form-row half"><div class="form-row half">
					<label>Rope Type </label>
				</div>
				<div class="form-row half">
					<div class="form-row half">
						<label># Of Ropes </label>
					</div>
					<div class="form-row half">
						<label>Size </label>
					</div>
				</div></div>
				<div class="form-row half">
					<div class="form-row half">
						<label>Termination #1 (Top)</label>
					</div>
					<div class="form-row half">
						<label>Termination #2 (Bottom)</label>
					</div>
				</div>
			</div>
			<?php
				for($i=0;$i<count($rope_h);$i++)
				{ 
			?>

			<div class="add-itemh rope-product">
				<div class="form-row half">
					<div class="form-row half">
						<div class="horizontal-rope-type">
							<select  name="horizontal_rope_type[]" class="custom-select">
								<option value="Default[No Rope]">No Rope</option>
								<?php  $htype=!empty($rope_h[$i])?$rope_h[$i]:'';
								echo editpopulateProductOptions($netformProduct,'Rope',$rope_h[$i]); ?>
							</select>
						</div>
					</div>
					
					<div class="form-row half">
						<div class="form-row half">
							<input type="text" class="" name="horizontal_ropecount[]" data-parsley-min="0"
								data-parsley-type="number" placeholder="Rope Quantity"  data-parsley-type-message="Enter Valid Rope Quantity" maxlength="20" value="<?=!empty($ropeno_h[$i])?$ropeno_h[$i]:'';?>">
						</div>
						<div class="quantityh form-row half">
							<input type="text" class="" name="horizontal_ropesize[]" data-parsley-min="0"
							data-parsley-type="number" placeholder="Rope Size" data-parsley-type-message="Enter Valid Rope Size" maxlength="20"  value="<?=!empty($ropesize_h[$i])?$ropesize_h[$i]:'';?>">
						</div>
					</div>
				</div>
				
				<div class="form-row half">
					<div class="form-row half">
						<div class=" horizontal-terminal-top">
							<select  name="horizontal_termination_top[]" class="custom-select">
								<option value="Default[Cat-0]">No Terminations</option> 
								<?php  $htop=!empty($termtop_h[$i])?$termtop_h[$i]:'';
								echo editpopulateProductOptions($netformProduct,'Termination',$termtop_h[$i]); ?>
							</select>
						</div>
					</div>
					<div class="form-row half">
						<div class=" horizontal-terminal-bottom">
							<select  name="horizontal_termination_bottom[]" class="custom-select" >
								<option value="Default[Cat-0]">No Terminations</option>
								<?php  $hbot=!empty($termbottom_h[$i])?$termbottom_h[$i]:'';
								echo editpopulateProductOptions($netformProduct,'Termination',$termbottom_h[$i]); ?>
							</select>
						</div>
						
					</div>
				</div>
				<a href="javascript:void(0)" class="add-rope-rowh"><img src="<?=base_url('assets/front/images/plus.png')?>" alt="plus"></a>
				<a href="javascript:void(0)" class="remove-rope-rowh"><img src="<?=base_url('assets/front/images/minus.png')?>" alt="minus"></a>
			</div>
			<?php
				}
			?>
		</div>
			
		<div class="row">
			<div class="form-row ">
				<div class="form-row three">
			<label> Tag Number </label>
				<input type="text" value="<?=!empty($quote_list->function_param->f18)?$quote_list->function_param->f18:''?>" name="tag_number"  id="tag_number" placeholder="Enter tag number" />
			</div>
				<div class="form-row seven">
					<label>Additional Instruction (Does not show in proposal)</label>
					<input type="text" name="spl_instruction" placeholder="Enter any additional details including special part and instruction here" value="<?=$specialInstruction?>">
				</div>
			</div>
		</div>
		<div class="row">
			<?php
				$oldPrice 		= !empty($quote_list->function_param->f29) ?  $quote_list->function_param->f29 : 0;
				$priceOverride 	= !empty($quote_list->function_param->f30) ?  $quote_list->function_param->f30 : 0; 
			?>
			<div class="form-row half">
			<div class="form-row two">
				<label> Old Calculator Price</label>
				<input type="text" name="old_calculator" id="price_override" placeholder="Old Calculator Price" 
				data-parsley-type="number" data-parsley-max="50000000" data-parsley-maxlength="11"  value="<?=$oldPrice?>"   />
			</div>
			<div class="form-row two">
				<label>Unit Price Override</label>
				<input type="text" name="price_override" id="price_override" placeholder="Unit Price Override" 
				data-parsley-type="number" data-parsley-max="50000000" data-parsley-maxlength="11" value="<?=$priceOverride?>" />
			</div>
		</div>
	</div>
	</div>
  </div>

	<div class="row">
		<div class="form-row three ">
		<button type="button" class="save" id="calculateNetformQuote">Update Quote</button>
		</div>
	</div>
</div>
<?=form_close()?>


<script>
	
	/* ====== making lft and sft value ========*/
	function isNumberKey(evt){
		var charCode = (evt.which) ? evt.which : evt.keyCode;
		if (charCode > 31 && (charCode < 48 || charCode > 57)){
			return false;
		}else{
			return true;
		}
	}
	$(document).on('click','#net_form_override_flag',function (){
		
		if($(this).is(':checked')){
		}else{
			$('#number_of_eggs').val(0);
			$('#number_of_tees').val(0);
		}
	});
	
	$(document).on('blur','.netform-checking-value', function (){
		var value	= $(this).val();
		if(value > 0){
			$('#netform-override-html').html('<input type="checkbox" id="net_form_override_flag" class="net_form_override_flag" name="override_flag" value="1" checked="checked">');
		}else{
			$('#netform-override-html').html('<input type="checkbox" id="net_form_override_flag" class="net_form_override_flag" name="override_flag" value="1">');
		}
	});

	var counter = 0;
	function count(){
		counter = counter+1;
		return counter;
	}

	$('#page_layout').on('click','.add-rope-rowv',function() {
		console.log('V');
		/*$(this).removeClass('add-rope-row');
		$(this).addClass('remove-rope-row');*/
		/*$(this).html('<img src="<?=base_url('assets/front/images/minus.png')?>" alt="plus">');*/
		var counter = count();
		var html	= '<div class="add-itemv rope-product"><div class="form-row half"><div class="form-row half"><div  class="vertical-rope-type'+counter+'"><select name="vertical_rope_type[]" class="custom-select"><option value="Default[No Rope]" >No Rope</option></select></div></div><div class="form-row half"><div class="form-row half"><input type="text" class="" name="ropecount[]" data-parsley-required="true" data-parsley-required-message="Rope Quantity" data-parsley-min="0"				data-parsley-type="number" placeholder="Rope Quantity"  data-parsley-type-message="Enter Valid Rope Quantity" maxlength="20"></div><div class="quantityv form-row half"><input type="text" class="" name="ropesize[]" data-parsley-required="true" data-parsley-required-message="Rope Size" data-parsley-min="0" data-parsley-type="number" placeholder="Rope Size" data-parsley-type-message="Enter Valid Rope Size" maxlength="20"></div></div></div>';


		html 		+= '<div class="form-row half"><div class="form-row half"><div class=" terminal-top'+counter+'"><select name="termination_top[]" class="custom-select"><option value="Default[Cat-0]">No Terminations</option></select></div></div><div class="form-row half"><div class=" terminal-bottom'+counter+'"><select  name="termination_bottom[]" class="custom-select" ><option value="Default[Cat-0]">No Terminations</option></select></div></div></div><a href="javascript:void(0)" class="add-rope-rowv"><img src="<?=base_url('assets/front/images/plus.png')?>" alt="plus"></a><a href="javascript:void(0)" class="remove-rope-rowv"><img src="<?=base_url('assets/front/images/minus.png')?>" alt="minus"></a></div>';
		$('.add-itemv:last').after(html);
		$('#netform_form').parsley().isValid();
		$(".custom-select").customselect();
		$(".select1").find('select').selectBoxIt();
		addplusminus();
		var	search	= $("#netformtype").val();
		if(search!=''){  populateOptionsNlive(search,counter); }
	});
	
	/* Remove the rope quote row for verticals */
	$('#page_layout').on('click','.remove-rope-rowv',function() {
		var inputNo	= $('.quantityv input').length;
		
		if(inputNo > 1){
			$(this).parent().remove();
		}else{
			alert("Last item can't be deleted");
		}
	});

	$('#page_layout').on('click','.add-rope-rowh',function() {
		/*$(this).removeClass('add-rope-row');
		$(this).addClass('remove-rope-row');*/
		/*$(this).html('<img src="<?=base_url('assets/front/images/minus.png')?>" alt="plus">');*/
		var counter = count();
		var html	= '<div class="add-itemh rope-product"><div class="form-row half"><div class="form-row half"><div class="horizontal-rope-type'+counter+'"><select name="horizontal_rope_type[]" class="custom-select"><option value="Default[No Rope]" >No Rope</option></select></div></div><div class="form-row half"><div class="form-row half"><input type="text" class="" name="horizontal_ropecount[]" data-parsley-required="true" data-parsley-required-message="Rope Quantity" data-parsley-min="0"				data-parsley-type="number" placeholder="Rope Quantity"  data-parsley-type-message="Enter Valid Rope Quantity" maxlength="20"></div><div class="quantityh form-row half"><input type="text" class="" name="horizontal_ropesize[]" data-parsley-required="true" data-parsley-required-message="Rope Size" data-parsley-min="0" data-parsley-type="number" placeholder="Rope Size" data-parsley-type-message="Enter Valid Rope Size" maxlength="20"></div></div></div>';


		html 		+= '<div class="form-row half"><div class="form-row half"><div class="horizontal-terminal-top'+counter+'"><select  name="horizontal_termination_top[]" class="custom-select"><option value="Default[Cat-0]">No Terminations</option></select></div></div><div class="form-row half"><div class=" horizontal-terminal-bottom'+counter+'"><select  name="horizontal_termination_bottom[]" class="custom-select" ><option value="Default[Cat-0]">No Terminations</option></select></div></div></div><a href="javascript:void(0)" class="add-rope-rowh"><img src="<?=base_url('assets/front/images/plus.png')?>" alt="plus"></a><a href="javascript:void(0)" class="remove-rope-rowh"><img src="<?=base_url('assets/front/images/minus.png')?>" alt="minus"></a></div>';
		$('.add-itemh:last').after(html);
		$('#netform_form').parsley().isValid();
		$(".custom-select").customselect();
		$(".select1").find('select').selectBoxIt();
		addplusminus();
		var	search	= $("#netformtype").val();
		if(search!=''){  populateOptionsNlive(search,counter); }
	});

	/* Remove the rope quote row for horizontals */
	$('#page_layout').on('click','.remove-rope-rowh',function() {
		var inputNo	= $('.quantityh input').length;
		
		if(inputNo > 1){
			$(this).parent().remove();
		}else{
			alert("Last item can't be deleted");
		}
	});

	function populateOptionsNlive(search=null,counter=null){
		populateProductOptionsNlive(search,'Rope','vertical-rope-type'+counter,counter);
		populateProductOptionsNlive(search,'Rope','horizontal-rope-type'+counter,counter);
		populateProductOptionsNlive(search,'Termination','terminal-top'+counter,counter);
		populateProductOptionsNlive(search,'Termination','terminal-bottom'+counter,counter);
		populateProductOptionsNlive(search,'Termination','horizontal-terminal-top'+counter,counter);
		populateProductOptionsNlive(search,'Termination','horizontal-terminal-bottom'+counter,counter);
	}

</script>
