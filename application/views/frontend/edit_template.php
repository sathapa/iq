<div class="row">
		<?php
			echo form_open('', array('class'=>'form-row ','id'=>'index_form','data-parsley-validate'=>'data-parsley-validate'));
		//print_r($quote_list);
		?>
		
		<input type="hidden" name="customer" id="customer" value="<?=!empty($quote_list->function_param->f4)?$quote_list->function_param->f4:''?>">
		<input type="hidden" name="old_quoteid" id="old_quoteid" value="<?=$quote_id?>" />
		<input type="hidden" name="quote_line" id="quote_line" value="<?=!empty($quote_list->quote_line_no)?$quote_list->quote_line_no:''?>" />
		<input type="hidden" id="choose-sales" name="choose-sales" value="<?=!empty($quote_list->function_param->f11)?$quote_list->function_param->f11:''?>" />
		<input type="hidden" id="choose-wtclass" name="choose-wtclass" value="<?=!empty($quote_list->function_param->f12)?$quote_list->function_param->f12:'IND'?>" />
		<input type="hidden" name="opportunity" id="opportunity" value="<?=!empty($quote_list->function_param->f13)?$quote_list->function_param->f13:''?>" />
		<input type="hidden" id="contact" name="contact" value="<?=!empty($quote_list->function_param->f14)?$quote_list->function_param->f14:''?>" />
		<input type="hidden" id="lead-time" name="lead-time" value="<?=!empty($quote_list->function_param->f15)?$quote_list->function_param->f15:''?>" />
		<input type="hidden" id="proposal_number" name="proposal_number" value="<?=!empty($proposalId)?$proposalId:''?>" />
		<?=form_close()?>
		</div>
<?php
	echo form_open('', array('id'=>'template_form','data-parsley-validate'=>'data-parsley-validate'));
	if(!empty($quote_list)){
		
?><div class="form-group">
	<div class="panel panel-default">
	  	<div class="panel-heading"> <h5 style="color:white;"> Template Details </h5>	</div>
	  		<div class="panel-body">
				<div class="row">
					<div class="form-row half">
						<div class="form-row two select1">
							<label>Pricing Tier <em >*</em></label>
							<select id="pricingtier" name="pricingtier" data-parsley-required="true">
								<option value="">Select</option> 
								<option value="Retail Pricing [1]" <?=(!empty($quote_list->function_param->f7)&&$quote_list->function_param->f7=='1')?'Selected':''?>>Retail Pricing </option>  
								<option value="Distributor Pricing [2]" <?=(!empty($quote_list->function_param->f7)&&$quote_list->function_param->f7=='2')?'Selected':''?>>Distributor Pricing</option>
								<option value="Over $5K Pricing [3]" <?=(!empty($quote_list->function_param->f7)&&$quote_list->function_param->f7=='3')?'Selected':''?>>Over $5K Pricing </option>   
								<option value="Over $10K Pricing [4]" <?=(!empty($quote_list->function_param->f7)&&$quote_list->function_param->f7=='4')?'Selected':''?>>Over $10K Pricing </option>
							</select>
						</div>			
						<div class="form-row two">
							<div class="form-row half">
								<label>Discount % </label>
								
									<input type="text" id="discount" name="discount" value="<?=!empty($quote_list->function_param->f8)?$quote_list->function_param->f8:0?>"
								data-parsley-type="number" data-parsley-max="100"  placeholder="Enter Discount" value="0">
								
							</div>
							<div class="form-row half">
								<label> Tag Number </label>
								<input type="text" value="<?=!empty($quote_list->function_param->f16)?$quote_list->function_param->f16:''?>" name="tag_number"  id="tag_number" placeholder="Enter tag number" />
							</div>
						</div>
					</div>
					<div class="form-row half">
						<label> Additional Instructions (Does not show in proposal)</label>
						<input type="text"   name="spl_instruction" value="<?=!empty($quote_list->function_param->f9)?$quote_list->function_param->f9:''?>" placeholder="Enter any additional details including special part and instruction here" id="spl_instruction"/>
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
					<div class="main-add-item cf">
				    	<ul>
				        	<li>item number <em >*</em>
								<!-- Changes (29-07-2017) -->
									<span class="mark_for_review">
										<input type="checkbox" name="mark_for_reviews" value="1" > Mark For Review
									</span> 
								<!-- Changes (29-07-2017) -->
				        	</li>
				            <li>Quantity <em >*</em></li>
				        </ul>
						
				    	<div class="add-item">
							<div class="item-number ">
								<select data-parsley-required="true" id="template_item" name="template_item" class="custom-select">
									<?php $product=!empty($quote_list->function_param->f5)?$quote_list->function_param->f5:'';
									echo netProduct('Template',$product);
									?>
								</select>
							</div>
				            <div class="quantity">
				            	<input type="number" name="template_qty" min="1"  step="0" value="<?=!empty($quote_list->function_param->f6)?$quote_list->function_param->f6:0?>" data-parsley-required="true">
				            </div>
				             
				            </div>
				          
				    
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="form-row three button-bottom">
				<button type="button" class="save" id="saveTemplateQuote">update Quote</button>
			</div>
		</div>
	</div>
		
<?php  } echo form_close(); ?>


<script>
	$(function() {
        $(".custom-select").customselect();
      });
      
</script>
