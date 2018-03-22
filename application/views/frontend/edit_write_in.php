<div class="row">
		<?php
			echo form_open('', array('class'=>'form-row ','id'=>'index_form','data-parsley-validate'=>'data-parsley-validate'));
			//echo "<pre>";print_r($quote_list);
		?>
		
		<input type="hidden" name="customer" id="customer" value="<?=!empty($quote_list->function_param->f4)?$quote_list->function_param->f4:''?>">
		<input type="hidden" name="old_quoteid" id="old_quoteid" value="<?=$quote_id?>" />
		<input type="hidden" name="quote_line" id="quote_line" value="<?=!empty($quote_list->quote_line_no)?$quote_list->quote_line_no:''?>" />
		<input type="hidden" id="choose-sales" name="choose-sales" value="<?=!empty($quote_list->function_param->f10)?$quote_list->function_param->f10:''?>" />
		<input type="hidden" id="choose-wtclass" name="choose-wtclass" value="<?=!empty($quote_list->function_param->f11)?$quote_list->function_param->f11:'IND'?>" />
		<input type="hidden" name="opportunity" id="opportunity" value="<?=!empty($quote_list->function_param->f12)?$quote_list->function_param->f12:''?>" />
		<input type="hidden" id="contact" name="contact" value="<?=!empty($quote_list->function_param->f13)?$quote_list->function_param->f13:''?>" />
		<input type="hidden" id="lead-time" name="lead-time" value="<?=!empty($quote_list->function_param->f14)?$quote_list->function_param->f14:''?>" />
		<input type="hidden" id="proposal_number" name="proposal_number" value="<?=!empty($proposalId)?$proposalId:''?>" />
		<?=form_close()?>
		</div>
	<?php
	echo form_open('', array('id'=>'writein_form','data-parsley-validate'=>'data-parsley-validate'));
?>
		<div class="form-group">
			<div class="panel panel-default">
		  		<div class="panel-heading"> <h5 style="color:white;"> WriteIn Quote Details </h5> </div>
		  		<div class="panel-body">
					<div class="row">	
						<div class="form-row half">
							
							<div class="form-row two">
								<label>Discount % </label>
									<input type="text" id="discount" name="discount" value="<?=!empty($quote_list->function_param->f7)?$quote_list->function_param->f7:0;?>"
									data-parsley-type="number" data-parsley-max="100"  placeholder="Enter Discount" >
									<input type="hidden" name="pricing_tier" id="pricingtier" value="Retail Pricing [1]"/>
							</div>
							<div class="form-row two">
								<label>Tag Number </label>
								<input type="text" name="tag_number" id="tag_number" placeholder="Enter tag number" value="<?=!empty($quote_list->function_param->f15)?$quote_list->function_param->f15:''?>" >
							</div>
							
						</div>
				
						<div class="form-row half">
							<label> Additional Instructions (Does not show in proposal)</label>
							<input type="text" value="<?=!empty($quote_list->function_param->f8)?$quote_list->function_param->f8:''?>" name="instrunctions"  id="instrunctions" placeholder="Enter any additional details including special part and instruction here" />
						</div>
					</div>

					<div class="row main-add-row">

						<div class="form-row four-box">
							<label>Item Code <em >*</em>

								<!-- Changes (29-07-2017) -->
								<span class="mark_for_review">
									<input type="checkbox" name="mark_for_reviews" value="1" > Mark For Review
								</span> 
								<!-- Changes (29-07-2017) -->

							</label>
						</div>
						<div class="form-row four-box description-box">
							<label>Description <em >*</em></label>
						</div>
						<div class="form-row four-box quantity-box">
							<label>Quantity <em >*</em></label>
						</div>
						<div class="form-row four-box price-box">
							<label>Price <em >*</em></label>
						</div>
						<div class="add-row">
							<?php
								//$hard	= !empty($quote_list->function_param->f5)?$quote_list->function_param->f5:'';
								$key		= !empty($quote_list->detail_itemcode) ? $quote_list->detail_itemcode : '';
								$writeinQuantity	= !empty($quote_list->detail_quantity) ? $quote_list->detail_quantity : '1';
								$writeinPrice	= !empty($quote_list->detail_material_cost) ? $quote_list->detail_material_cost : '0';
								$string	 = str_replace(array('<br />', '"'), '&#13;&#10;', $quote_list->detail_description); 
							?>
							<div class="main_add">
								<div class="form-row four-box">
									<select data-parsley-required="true" onChange="showdescription(this)" name="item_code[]"  class="custom-select" >                    
										<?=itemList($key);?>
									</select>
								</div>
								<div class="form-row four-box description-box">
									<!--<input type="text" name="description[]" value="<?//=$val->description?>" class="description" placeholder="Enter Quote Description Here" required ="true"/>-->
									<textarea name="description[]" class="description" style="white-space: pre-line;" wrap="hard" placeholder="Enter Quote Description Here" required ="true"/><?php echo $string;?></textarea>
								</div>
								<div class="form-row four-box quantity-box">
									<input type="text" name="quantity[]" data-parsley-min="1" data-parsley-type="number" value="<?=$writeinQuantity?>" placeholder="Enter Quantity " required ="true"/>
								</div>
								<div class="form-row four-box price-box">
									<input type="text" name="price[]" data-parsley-min="0" data-parsley-type="number" value="<?=$writeinPrice?>" placeholder="Enter price " required ="true"/>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-row three ">
				<button type="button" class="save" id="calculatewriteinQuote">
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
	
	$(function() {
		$(".custom-select").customselect();
	});
	
	function showdescription(str){
		var	v	= $(str).val();
		if(v!=''){
			var f=v.indexOf('[');
			var l=v.indexOf(']');
			var textAreaVal	= v.substr(0,f);
			var textAreaVal	= textAreaVal.replace('</option>','');
			var textAreaVal	= textAreaVal.replace('<br >','<br />');
			var textAreaVal	= textAreaVal.split('<br />');
			var newText	= '';
			for (i = 0; i < textAreaVal.length; i++) {
				newText += textAreaVal[i].trim() + "\n";
			}
			$(str).parent().parent().parent().find('.description').val(newText);
		} 
	};
	
</script>

