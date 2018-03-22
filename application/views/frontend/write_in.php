
<?php
	echo form_open('', array('id'=>'writein_form','data-parsley-validate'=>'data-parsley-validate'));
?>
		<div class="form-group">
		<div class="panel panel-default">
			<div class="panel-heading"> <h5 style="color:white;"> WriteIn Quote Details </h5>	</div>
			<div class="panel-body">
				<div class="row">	
					<div class="form-row half">
						<div class="form-row two">
							<label>Discount % </label>
								<input type="text" id="discount" name="discount" value="0"
							data-parsley-type="number" data-parsley-max="100"  placeholder="Enter Discount" >	
							<input type="hidden" name="pricing_tier" id="pricingtier" value="Retail Pricing [1]"/>
						</div>
						<div class="form-row two">
							<label>Tag Number </label>
							<input type="text" name="tag_number" id="tag_number" placeholder="Enter tag number" >	
						</div>
					</div>
					<div class="form-row half">
					<label> Additional Instructions (Does not show in proposal)</label>
						<input type="text" name="instrunctions"  id="instrunctions" placeholder="Enter any additional details including special part and instruction here" />
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
<div>
	<div id="append_writein">
		<div class="form-row four-box">
			<select data-parsley-required="true"  name="item_code[]"  class="custom-select" >                    
				<?=itemList();?>
			</select>
		</div>
		<div class="form-row four-box description-box" >
			<textarea name="description[]" class="description" placeholder="Enter Quote Description Here" required ="true"/></textarea>
		</div>
		<div class="form-row four-box quantity-box">
			<input type="text" name="quantity[]"  data-parsley-min="0" data-parsley-type="number" placeholder="Enter Quantity " required ="true"/>
		</div>
		<div class="form-row four-box price-box">
			<input type="text" name="price[]"  placeholder="Enter price " required ="true"/>
		</div>
	</div>
	<a href="javascript:void(0)" class="add-writein-row">
		<img src="<?=base_url('assets/front/images/plus.png')?>" alt="plus">
	</a>
	<a href="javascript:void(0)" class="remove-writein-row">
		<img src="<?=base_url('assets/front/images/minus.png')?>" alt="minus">
	</a>
</div>
</div>

</div>
</div>
</div>
<div class="row">
<div class="form-row three ">
<button type="button" class="save" id="calculatewriteinQuote">
	Review Quote</button>
</div>
</div>
<!--
<div class="form-row three button-bottom">
	<button type="button" class="exist">Add to existing Quote</button>
</div>
-->

		</div>
<?=form_close()?>
<script>
	$(function() {
		$(".custom-select").customselect();
	});
	
	$(".custom-select").change(function(){
		var v=$(this).val();
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
			$(this).parent().parent().parent().find('.description').val(newText);
		} 
	});
</script>
