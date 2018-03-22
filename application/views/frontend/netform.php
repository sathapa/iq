<?php
	echo form_open('', array('id'=>'netform_form','data-parsley-validate'=>'data-parsley-validate'));
?>
<script type="text/javascript" src="<?php echo base_url();?>assets/front/js/web-product.js" ></script>
<style>
	.remove-rope-rowv,.remove-rope-rowh{
		    display: block;
		  margin-top: 12px;
    }
    .add-itemv,.add-itemh{ padding:10px 0px;  float:left; width:100%;}
</style>
	<div class="form-group">
		<div class="panel panel-default">
	 	<div class="panel-heading"> <h5 style="color:white;"> Net Details </h5>	</div>
	  	<div class="panel-body">
		<div class="row">
			<div class="form-row ">
				<div class="form-row two">
					<div class="form-row ">
						<label>Product Type <em >*</em>
						<!-- Changes (28-07-2017) -->
							<span class="mark_for_review">
								<input type="checkbox" name="mark_for_reviews" value="1"> Mark For Review
							</span> 
						<!-- Changes (28-07-2017) -->
						<!-- Changes (22-11-2017) -->
							<span class="override-flg">
								<label>Override Eggs & Tees </label>
								<div class="select1" id="netform-override-html">
									<input type="checkbox" id="net_form_override_flag" class="net_form_override_flag" name="override_flag" value="1">
								</div>
							</span>
						<!-- Changes (22-11-2017) -->
						</label>
						<div id="zero-select-cn">
							<select id="netformtype" name="net_product" data-parsley-required="true" class="custom-select">
								<option value="">Select</option>
									<?php
										echo netProduct('Netform');
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
								
								<option value="Retail Pricing [1]">Retail Pricing</option>  
								<option value="Distributor Pricing [2]">Distributor Pricing</option>
								<option value="Over $5K Pricing [3]">Over $5K Pricing</option>   
								<option value="Over $10K Pricing [4]">Over $10K Pricing </option>
							</select>
						</div>
					</div>
					
					<div class="form-row three">
						<label>Number of Nets <em >*</em></label>
						<input type="text" id="numberofnet" required data-parsley-min="1" 
						data-parsley-type="number" name="net_number" required onkeypress='return isNumberKey(event)' placeholder="Number of net " value="1" />
					</div>
					<div class="form-row three">
						<label>Discount % </label>
							<input type="text" id="discount" name="discount" value="0"
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
					<input type="text" id="dimenson" name="dimenson" placeholder="Dimension" value="" />
				</div>
				<div class="form-row three">
					<label>Mesh Size (in In)</label>
					<input type="text" id="mesh_size" name="mesh_size" value="" placeholder="Mesh Size" >
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
										echo '<option value="'.$uom.'">'.$uom.'</option>';
									}
								}
							?>
						</select>
					</div>
				</div>
				
				<div class="form-row three">
					<label>Number Of Eggs </label>
					<div class="select1" >
						<input type="text" class="netform-checking-value" id="number_of_eggs" name="number_of_eggs" data-parsley-min="0" value="0"
						data-parsley-type="number" data-parsley-maxlength="100"  placeholder="Number of Eggs" >
					</div>
				</div>
				<div class="form-row three">
					<label>Number Of Tees </label>
					<div class="select1">
						<input type="text" class="netform-checking-value" id="number_of_tees" name="number_of_tees" data-parsley-min="0" value="0"
						data-parsley-type="number" data-parsley-maxlength="100"  placeholder="Number of Tees" >
					</div>
				</div>
			</div>
		</div>
		
		
		<!-- Verticals Div -->
		<div class="verticals row">
			<h2>Verticals</h2>
			<div class="main-add-item rope-section-heading cf">
				<div class="form-row half">
				<div class="form-row half">
					<label>Rope Type <em >*</em></label>
				</div>
				<div class="form-row half">
					<div class="form-row half">
						<label># Of Ropes </label>
					</div>
					<div class="form-row half">
						<label>Size <em >*</em></label>
					</div>
				</div>	
				</div>
				<div class="form-row half">
					<div class="form-row half">
						<label>Termination #1 (Top)</label>
					</div>
					<div class="form-row half">
						<label>Termination #2 (Bottom)</label>
					</div>
				</div>
			</div>
			
			<div class="add-itemv rope-product">
				<div class="form-row half">
					<div class="form-row half">
						<div class="vertical-rope-type">
							<select  name="vertical_rope_type[]" class="custom-select">
								<option value="Default[No Rope]" >No Rope</option>
							</select>
						</div>
					</div>
					
					<div class="form-row half">
						<div class="form-row half">
							<input type="text" class="" name="ropecount[]" data-parsley-required="true" data-parsley-required-message="Rope Quantity" data-parsley-min="0"
								data-parsley-type="number" placeholder="Rope Quantity"  data-parsley-type-message="Enter Valid Rope Quantity" maxlength="20">
						</div>
						<div class="quantityv form-row half">
							<input type="text" class="" name="ropesize[]" data-parsley-required="true"
							 data-parsley-required-message="Rope Size" data-parsley-min="0"
							data-parsley-type="number" placeholder="Rope Size" data-parsley-type-message="Enter Valid Rope Size" maxlength="20">
						</div>
					</div>
				</div>
				
				<div class="form-row half">
					<div class="form-row half">
						<div class=" terminal-top">
							<select  name="termination_top[]" class="custom-select">
								<option value="Default[Cat-0]">No Terminations</option>
							</select>
						</div>
					</div>
					<div class="form-row half">
						<div class=" terminal-bottom">
							<select  name="termination_bottom[]" class="custom-select" >
								<option value="Default[Cat-0]">No Terminations</option>
							</select>
						</div>
						
					</div>
				</div>
				<a href="javascript:void(0)" class="add-rope-rowv"><img src="<?=base_url('assets/front/images/plus.png')?>" alt="plus"></a>
				<a href="javascript:void(0)" class="remove-rope-rowv"><img src="<?=base_url('assets/front/images/minus.png')?>" alt="minus"></a>
			</div>
			
		</div>
		
		<!-- Horizontals Div -->
		<div class="horizontals row">
			<h2>Horizontals</h2>
			<div class="main-add-item rope-section-heading cf">
				<div class="form-row half">
				<div class="form-row half">
					<label>Rope Type </label>
				</div>
				<div class="form-row half">
					<div class="form-row half">
						<label># Of Ropes </label>
					</div>
					<div class="form-row half">
						<label>Size </label>
					</div>
				</div>	
				</div>
				<div class="form-row half">
					<div class="form-row half">
						<label>Termination #1 (Top)</label>
					</div>
					<div class="form-row half">
						<label>Termination #2 (Bottom)</label>
					</div>
				</div>
			</div>
			
			<div class="add-itemh rope-product">
				<div class="form-row half">
					<div class="form-row half">
						<div class="horizontal-rope-type">
							<select  name="horizontal_rope_type[]" class="custom-select">
								<option value="Default[No Rope]" >No Rope</option>
							</select>
						</div>
					</div>
					
					<div class="form-row half">
						<div class="form-row half">
							<input type="text" class="" name="horizontal_ropecount[]" data-parsley-min="0"
								data-parsley-type="number" placeholder="Rope Quantity"  data-parsley-type-message="Enter Valid Rope Quantity" maxlength="20">
						</div>
						<div class="quantityh form-row half">
							<input type="text" class="" name="horizontal_ropesize[]" data-parsley-min="0"
							data-parsley-type="number" placeholder="Rope Size" data-parsley-type-message="Enter Valid Rope Size" maxlength="20">
						</div>
					</div>
				</div>
				
				<div class="form-row half">
					<div class="form-row half">
						<div class=" horizontal-terminal-top">
							<select  name="horizontal-terminal-top[]" class="custom-select">
								<option value="Default[Cat-0]">No Terminations</option>
							</select>
						</div>
					</div>
					<div class="form-row half">
						<div class=" horizontal-terminal-bottom">
							<select  name="horizontal_termination_bottom[]" class="custom-select" >
								<option value="Default[Cat-0]">No Terminations</option>
							</select>
						</div>
						
					</div>
				</div>
				<a href="javascript:void(0)" class="add-rope-rowh"><img src="<?=base_url('assets/front/images/plus.png')?>" alt="plus"></a>
				<a href="javascript:void(0)" class="remove-rope-rowh"><img src="<?=base_url('assets/front/images/minus.png')?>" alt="minus"></a>
			</div>
			
		</div>
			
		<div class="row">
			<div class="form-row ">
				<div class="form-row three">
			<label> Tag Number </label>
				<input type="text" name="tag_number"  id="tag_number" placeholder="Enter tag number" />
			</div>
				<div class="form-row seven">
					<label>Additional Instruction (Does not show in proposal)</label>
					<input type="text" name="spl_instruction" placeholder="Enter any additional details including special part and instruction here">
				</div>
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
		<button type="button" class="save" id="calculateNetformQuote">
			Review Quote</button>
		</div>
	</div>
</div>
<?=form_close()?>
<script>
	var counter = 0;
	function count(){
		counter = counter+1;
		return counter;
	}

	$('#page_layout').on('click','.add-rope-rowv',function() {
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
	
	function populateOptionsNlive(search=null,counter=null){
			populateProductOptionsNlive(search,'Rope','vertical-rope-type'+counter,counter);
			populateProductOptionsNlive(search,'Rope','horizontal-rope-type'+counter,counter);
			populateProductOptionsNlive(search,'Termination','terminal-top'+counter,counter);
			populateProductOptionsNlive(search,'Termination','terminal-bottom'+counter,counter);
			populateProductOptionsNlive(search,'Termination','horizontal-terminal-top'+counter,counter);
			populateProductOptionsNlive(search,'Termination','horizontal-terminal-bottom'+counter,counter);
	}

	/* Remove the rope quote row for horizontals */
	$('#page_layout').on('click','.remove-rope-rowh',function() {
		var inputNo	= $('.quantityh input').length;
		
		if(inputNo > 1){
			$(this).parent().remove();
		}else{
			alert("Last item can't be deleted");
		}
	});

	$(function() {
		$(".custom-select").customselect();
	});
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

	
</script>
