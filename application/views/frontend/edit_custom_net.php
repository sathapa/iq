<div class="row">
		<?php
			$markReview			= !empty($quote_list->function_param->f35) ? $quote_list->function_param->f35 : 0;
			$quoteDesciption	= !empty($quote_list->function_param->f36) ? $quote_list->function_param->f36 : '';
			$quoteDesciption	= str_replace(';',"\n",$quoteDesciption);
			echo form_open('', array('class'=>'form-row ','id'=>'index_form','data-parsley-validate'=>'data-parsley-validate'));
		//print_r($quote_list);
		?>
		
		<input type="hidden" name="customer" id="customer" value="<?=!empty($quote_list->function_param->f4)?$quote_list->function_param->f4:''?>">
		<input type="hidden" name="old_quoteid" id="old_quoteid" value="<?=$quote_id?>" />
		<input type="hidden" name="quote_line" id="quote_line" value="<?=!empty($quote_list->quote_line_no)?$quote_list->quote_line_no:''?>" />
		<input type="hidden" id="choose-sales" name="choose-sales" value="<?=!empty($quote_list->function_param->f27)?$quote_list->function_param->f27:''?>" />
		<input type="hidden" id="choose-wtclass" name="choose-wtclass" value="<?=!empty($quote_list->function_param->f28)?$quote_list->function_param->f28:'IND'?>" />
		<input type="hidden" name="opportunity" id="opportunity" value="<?=!empty($quote_list->function_param->f29)?$quote_list->function_param->f29:''?>" />
		<input type="hidden" id="contact" name="contact" value="<?=!empty($quote_list->function_param->f30)?$quote_list->function_param->f30:''?>" />
		<input type="hidden" id="lead-time" name="lead-time" value="<?=!empty($quote_list->function_param->f31)?$quote_list->function_param->f31:''?>" />
		
		<input type="hidden" id="proposal_number" name="proposal_number" value="<?=!empty($proposalId)?$proposalId:''?>" />
		<textarea id="edit_quote_description" name="edit_quote_description" style="display:none"><?=$quoteDesciption;?></textarea>
		<?=form_close()?>
		</div>
<?php
	echo form_open('', array('id'=>'net_form','data-parsley-validate'=>'data-parsley-validate'));
	if(!empty($quote_list)){
		//echo "<pre>";dump($quote_list);
		//print_r($quote_list);
?>
	<div class="form-group">
	<div class="panel panel-default">
	  <div class="panel-heading"> <h5 style="color:white;"> Net Details </h5>	</div>
	  <div class="panel-body">
		<div class="row">
		<div class="form-row ">
			<div class="form-row seven">
				<label>Product Type <em >*</em>
					<!-- Changes (27-07-2017) -->
						<span class="mark_for_review">
							<input type="checkbox" name="mark_for_reviews" value="1" <?=!empty($markReview) ? 'checked' : ''?>> Mark For Review
						</span> 
					<!-- Changes (27-07-2017) -->
				</label>
					<select id="nettingtype" name="net_product" class="custom-select" data-parsley-required="true" >
						<option value="">Select</option>
							<?php
								echo netProduct('Custom Net',$quote_list->product);
							?>
					</select>
			</div>
			<div class="form-row three">
				<div class="form-row half">
					<label>Number of Nets <em >*</em></label>
					<input type="text" id="numberofnet" required data-parsley-min="1" 
					data-parsley-type="number"name="net_number" value="<?=!empty($quote_list->function_param->f16)?$quote_list->function_param->f16:0?>" required onkeypress='return isNumberKey(event)' placeholder="Number of net "  />
				</div>
				
				<div class="form-row half">
					<label>Discount % </label>
						<input type="text" id="discount" name="discount" value="<?=!empty($quote_list->function_param->f24)?$quote_list->function_param->f24:0?>"
					data-parsley-type="number" data-parsley-max="100"  placeholder="Enter Discount" >
				</div>
			</div>
		</div>
		</div>
		<div class="row">
			<div class="form-row three">
				<label>Pricing Tier </label>
				<div class="select1">
					<select id="pricingtier" name="pricing_tier" >
						<option value="Retail Pricing [1]" <?=(!empty($quote_list->function_param->f23)&&($quote_list->function_param->f23=='1'))?'selected':''?>>Retail Pricing</option>
							<option value="Distributor Pricing [2]" <?=(!empty($quote_list->function_param->f23)&&($quote_list->function_param->f23=='2'))?'selected':''?>>Distributor Pricing </option>
							<option value="Over $5K Pricing [3]" <?=(!empty($quote_list->function_param->f23)&&($quote_list->function_param->f23=='3'))?'selected':''?> >Over $5K Pricing </option>   
							<option value="Over $10K Pricing [4]" <?=(!empty($quote_list->function_param->f23)&&($quote_list->function_param->f23=='4'))?'selected':''?>>Over $10K Pricing </option>
					</select>
				</div>
			</div>
			<div class="form-row three">
				<div class="form-row half">
		<label>Width (in Ft) <em >*</em>
			<a class="get-calculation" data-id="netwidth"><i class="fa fa-calculator" aria-hidden="true"></i></a>
		</label>
			<input type="text" class="newWidth" value="<?=!empty($quote_list->function_param->f8)?$quote_list->function_param->f8:0?>" 
			id="netwidth" name="net_width" data-parsley-required="true" data-parsley-required-message="Enter Width Value" data-parsley-min="0"
				data-parsley-type="number"placeholder="Enter width"  data-parsley-type-message="Enter Valid Width Value" maxlength="20">
		</div>
		<div class="form-row half">
			
			<label>Length (in Ft) <em >*</em>
				<a class="get-calculation" data-id="netlength"><i class="fa fa-calculator" aria-hidden="true"></i></a>
			</label>
			<input type="text" class="newLength" value="<?=!empty($quote_list->function_param->f7)?$quote_list->function_param->f7:0?>" 
			id="netlength" name="net_length" data-parsley-required="true"
			 data-parsley-required-message="Enter Length Value" data-parsley-min="0"
			data-parsley-type="number" placeholder="Enter length" data-parsley-type-message="Enter Valid Length Value" maxlength="20">
					
			</div>
			</div>
			
		<div class="form-row three">
				<div class="form-row half">
				<?php
					$lengthNew	= !empty($quote_list->function_param->f7) ? $quote_list->function_param->f7 : 0;
					$widthNew	= !empty($quote_list->function_param->f8) ? $quote_list->function_param->f8 : 0;
					$lft		= (2 * $lengthNew) + (2 * $widthNew);
					$sft		= ($lengthNew * $widthNew);
				?>
				
					<label>Linear Feet</label>
						<input type="text" id="newLft" value="<?=number_format($lft,2)?>" placeholder=" (2 x Length) + (2 x Width)" readonly>
				</div>
				<div class="form-row half">
					<label>Square Feet</label>
						<input type="text" id="newSft" value="<?=number_format($sft,2)?>" placeholder="Length x Width" readonly>
				</div>
			</div>
		</div>
		
		<div class="row">		
			<div class="form-row three">
				<label>Net Style/Color <em >*</em></label>
					<div id="first-select" alt-data="coloroption" alt-name="net_style" >
						<select id="coloroption" name="net_style" class="custom-select" data-parsley-required="true" data-parsley-required-message="Select Net Style Color ">
							<option value="">Select</option>
							<?php  echo editpopulateProductOptions($quote_list->product,'net',$quote_list->function_param->f6);
							?>
						</select>
					</div>
			</div>
			<div class="form-row three">
				<label> Sewn Seam Allowed? </label>
				<div class="select1">
					<select id="seamstyle" name="seam_style" >
						<option value="Buttsewn Seam Allowed [1]" <?=(!empty($quote_list->function_param->f20)&&($quote_list->function_param->f20=='1'))?'selected':''?>>Buttsewn Seam Allowed </option>  
						<option value="NO Buttsewn Seams Allowed [2]" <?=(!empty($quote_list->function_param->f20)&&($quote_list->function_param->f20=='2'))?'selected':''?>>NO Buttsewn Seams Allowed </option> 
					</select>
				</div>
			</div>
			<div class="form-row three">
			<label>Sewn Border </label>
				<div id="second-select" alt-data="borderoption" alt-name="net_border" >
					<select id="borderoption" name="net_border" class="custom-select">
						<option value="">None</option>
						<?php  echo editpopulateProductOptions($quote_list->product,'sewnborder',$quote_list->function_param->f9);
							?>
					</select>
				</div>
			</div>
			
		
		</div>
		
		<div class="row">
		
		
			<div class="form-row three">
			<label>Thread Color </label>
				<div id="threaddiv" alt-data="threadoption" alt-name="net_thread" >
					<select id="threadoption" name="net_thread" class="custom-select">
						<option value="">None</option>
						<?php 
						echo editPopulateThreadlist($quote_list->function_param->f9,$quote_list->function_param->f12);
					
						?>
					</select>
				</div>
			</div>
			<div class="form-row three">
				<label>Woven Border </label>
				<div id="third-select" alt-data="borderoption2" alt-name="net_border2" >
					<select id="borderoption2" name="net_border2" class="custom-select" >
						<option value="">None</option>
						<?php  echo editpopulateProductOptions($quote_list->product,'wovenborder',$quote_list->function_param->f10);
							?>
					</select>
				</div>
			</div>
			
		<div class="form-row three">
				<label>Stacked Net </label>
				<div id="fourth-select" alt-data="netborder3" alt-name="net_border3" >
					<select id="netborder3" name="net_border3"class="custom-select">
						<option value="">None</option>
						<?php  echo editpopulateProductOptions($quote_list->product,'rolledgoods',$quote_list->function_param->f11);
							?>
					</select>
				</div>
			</div>
		
		
		
		</div>

		<div class="row custom_options_show">
			<p class="option_dis_title">Additional Options (Expand) <span class="glyphicon glyphicon-circle-arrow-down"></span></p>
			<p class="options_display"></p>
		</div>

		<div id="custom_options" style="display:none" class="row well well-sm">	
			<div class="row">
				
				<div class="form-row three">
					<label>Cutting Style </label>
						<div id="cutting-select" alt-data="cuttingstyle" alt-name="cut_style" class="select1" >
							<select id="cuttingstyle" name="cut_style" >
								<option value="">None</option>
								<?php
									$editCutting	= !empty($quote_list->function_param->f22) ? $quote_list->function_param->f22 :'';
									$cuttingStyle	= getQuoteHeaderLookUp('cutting_style',$editCutting);
									echo $cuttingStyle;
								?>
							</select>
						</div>
				</div>
				<div class="form-row three">
					<label>Position of Lashing </label>
					<div class="select1">
						<select id="lash_position" name="lash_position" >
							<?php
								$EditLashing	= !empty($quote_list->function_param->f21) ? $quote_list->function_param->f21 : '';
								$lashings		= getQuoteHeaderLookUp('lashing_position',$EditLashing);
								echo $lashings;
							?>
						</select>
					</div>
				</div>
				<div class="form-row three">
					<label>Add-ons</label>
								<div id="addons" alt-data="addonption" alt-name="net_addon" >
									<select id="addonption" name="net_addon" class="custom-select">
										<option value="">Select</option>
										<?php echo editpopulateProductOptions($quote_list->product,'addon',$quote_list->function_param->f13);
										?>
									</select>
								</div>
				</div>
			</div>
			<div class="row">
				<div class="form-row addon-part-error" id="addon-part-error-id">
					<div class="form-row three">
						<label>Add-on Details  </label>
						<div class="select1">
							<input type="text" id="numberofaddons" value="<?=!empty($quote_list->function_param->f14)?$quote_list->function_param->f14:0?>"
							 name="number_addon"  data-parsley-required-message="Enter Add-on Value in number or float" data-parsley-min="0"
							data-parsley-type="number" placeholder="Enter add-on"  data-parsley-type-message="Enter Valid Add-on Value in number or float" maxlength="1000">
						</div>
					</div>
					<div class="form-row three">
						<label>Add-on UOM	</label>
						<div class="select1">
							<select id="addonuom" name="addon_uom" >
								<option value="">Select</option>
								<option value="EA" <?=(!empty($quote_list->function_param->f15)&&($quote_list->function_param->f15=='EA'))?'selected':''?> >EA</option>  
								<option value="FT" <?=(!empty($quote_list->function_param->f15)&&($quote_list->function_param->f15=='FT'))?'selected':''?> >FT</option>
							</select>
						</div>
					</div>
					
					<div class="form-row three">
						<label>Additional Item (Part#)    </label>
						<input type="text" value="<?=!empty($quote_list->function_param->f17)?$quote_list->function_param->f17:0?>" name="addlpart" id="addlpart" placeholder="Enter Additional Item" />
					</div>
				</div>
			</div>
			<div class="row" >
				<div class="form-row additional-part-error " id="additional-part-error-id">
				<div class="form-row three">
				<label> Additional Material Price </label>
				<input type="text" id="addlcost" name="addlcost"  placeholder="Enter Additional Material Cost" data-parsley-min="0"
				value="<?=!empty($quote_list->function_param->f18)?$quote_list->function_param->f18:0?>" data-parsley-type="number" data-parsley-type-message="Enter Valid Material Price Value" data-parsley-min-message="Enter Additional Material Cost at least 0"/>
				</div>

				<div class="form-row three">
				<label>Additional Labor (Hour)</label>
				<input type="text" name="addllabor" id="addllabor"  placeholder="Enter Additional Labor (Hour)" data-parsley-min="0"
				value="<?=!empty($quote_list->function_param->f19)?$quote_list->function_param->f19:0?>" data-parsley-type="number" data-parsley-min-message="Enter Additional Labor (Hour) at least zero" />
				</div><div class="form-row three">
					<label> Tag Number </label>
						<input type="text" value="<?=!empty($quote_list->function_param->f32)?$quote_list->function_param->f32:''?>" name="tag_number"  id="tag_number" placeholder="Enter tag number" />
					</div>
				</div>
			</div>
		</div>

<div class="row">
	
	<div class="form-row half">
		<label> Additional Instructions (Does not show in proposal)</label>
		<input type="text" name="instrunctions" value="<?=!empty($quote_list->function_param->f25)?$quote_list->function_param->f25:''?>"  id="instrunctions" placeholder="Enter any additional details including special part and instruction here" />
	</div>
	<div class="form-row half">
	<?php
		$oldPrice 			= !empty($quote_list->function_param->f38) ?  $quote_list->function_param->f38 : 0;
		$priceOverride  = !empty($quote_list->function_param->f39) ?  $quote_list->function_param->f39 : 0; 
	?>
		<div class="form-row two">
			<label> Old Calculator Price</label>
			<input type="text" name="old_calculator" id="price_override" placeholder="Old Calculator Price" 
			data-parsley-type="number" data-parsley-max="50000000" data-parsley-maxlength="11" value="<?=$oldPrice?>"   />
		</div>
		<div class="form-row two">
			<label>Unit Price Override</label>
			<input type="text" name="price_override" id="price_override" placeholder="Unit Price Override" 
			data-parsley-type="number" data-parsley-max="50000000" data-parsley-maxlength="11"  value="<?=$priceOverride?>"   />
		</div>
	</div>
	<!--<div class="form-row two custom-override-proposal">
		<label> Override Proposal Description </label>
		<textarea placeholder="Override Proposal Description" name="override_proposal_desc"><?//=!empty($quote_list->function_param->f34)?$quote_list->function_param->f34:''?></textarea>
	</div>-->
</div>
</div>
</div>

<?php

 
 }
?>
<div class="row">
<div class="form-row three ">
<button type="button" class="save" id="calculateCustomNetQuote">
	Update Quote</button>
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

	$( ".custom_options_show" ).click(function() {
		$('#custom_options').slideToggle("slow");
	});
</script>
