<?php
	echo form_open('', array('id'=>'webnets_form','data-parsley-validate'=>'data-parsley-validate'));
?>
<script type="text/javascript" src="<?php echo base_url();?>assets/front/js/web-product.js" ></script>

	<div class="form-group">
		<div class="panel panel-default">
		  <div class="panel-heading"> <h5 style="color:white;"> Net Details </h5>	</div>
		  <div class="panel-body">
			<div class="row">
					
					<div class="form-row half" >
						<label>Material <em >*</em>
							<span class="mark_for_review">
								<input type="checkbox" name="mark_for_reviews" value="1"> Mark For Review
							</span>
						</label>
						<div id="zero-select" alt-data="materialoption" alt-name="net_material" class="select1">
							<select id="materialoption" name="net_material" data-parsley-required-message="Select Material Style First" required>
								<option value="">None</option>
							</select>
						</div>
					</div>
					<div class="form-row half">
						<div class="form-row three">
									<label>Number of Nets <em >*</em></label>
									<input type="text" data-parsley-min="1" 
									data-parsley-type="number" id="numberofnet" name="net_number" required onkeypress='return isNumberKey(event)' placeholder="Number of net " value="1" />
						
						</div>	
					
						<div class="form-row three">
							<label>Length (in Ft) <em >* </em> <a class="get-calculation" data-id="netlength"><i class="fa fa-calculator" aria-hidden="true"></i></a></label>
							<input type="text" class="newLength" id="netlength" name="net_length" data-parsley-required="true"
							 data-parsley-required-message="Enter Length First" data-parsley-ge="#netwidth"
							  data-parsley-ge-message="Length value should be greater than or equal to width" data-parsley-min="1"
							data-parsley-type="number" placeholder="Enter length" data-parsley-type-message="Enter Valid Length Value" maxlength="20">
						</div>

						<div class="form-row three">
							<label>Width (in Ft) <em >* </em> <a class="get-calculation" data-id="netwidth"><i class="fa fa-calculator" aria-hidden="true"></i></a></label>
							<input type="text" class="newWidth" id="netwidth" name="net_width" data-parsley-required="true" data-parsley-required-message="Enter Width Value" data-parsley-min="1"
							data-parsley-type="number" placeholder="Enter width"  data-parsley-type-message="Enter Valid Width Value" maxlength="20">
						</div>
					</div>
							
			</div>
			<div class="row">
				<div class="form-row half">
					<label>Webbing Tensile(lbs) & Thickness(in) </label>
					<input class="well" type="text" id="web_detail" name="web_detail" readonly>
				</div>
				
				<div class="form-row half">
					<div class="form-row three">
						<label>Thread </label>
						<input class="well" type="text" id="thread1" name="thread1" />
					</div>
					<div class="form-row three">
						<label>Mesh Size (in)<em >*</em></label>
						<div class="select1" required>
							<select id="mesh_size" name="mesh_size" >
								<option value="2">2in O.C</option>  
								<option value="3">3in O.C.</option>
								<option value="4">4in O.C.</option>   
								<option value="5">5in O.C.</option>
								<option value="6">6in O.C</option>  
								<option value="7">7in O.C.</option>
								<option value="8">8in O.C.</option>   
								<option value="9">9in O.C.</option>
								<option value="10">10in O.C.</option>								
							</select>
						</div>

					</div>
					<div class="form-row three">
						<label>Mesh ID (in)</label>
						<input type="text" id="mesh_id1" name="mesh_id1" placeholder="Mesh ID" />
					</div>
			
			</div>
			</div>
			<div class="row ">
				<div class="form-row three">
					<label>Loops around Perimeter</label>
						<div id="first-select" alt-data="loopsoptions" alt-name="loopsoptions" class="select1" >
						<select id="loopsoptions" name="loopsoptions">
							<option value="">None</option>
							<option value="1">Loops to accomodate 1in</option>  
							<option value="1.5">Loops to accomodate 1.5in</option>
							<option value="2">Loops to accomodate 2in</option>   
							<option value="2.5">Loops to accomodate 2.5in </option>
							<option value="4">Loops to accomodate 4in </option>
						</select>
					</div>
				</div>
				<div class="form-row three">
					<label> Grommets around Perimeter </label>
					<div id="second-select" alt-data="grommet" alt-name="net_grommet" class="select1" >
						<select id="grommet" name="net_grommet" >
							<option value="">None</option>
						</select>
					</div>
				</div>
				
				<div class="form-row three">
					<label>Hardware for corners only </label>
					<div id="third-select" alt-data="hardware" alt-name="net_corner" class="select1">
						<select id="hardware" name="net_corner" >
							<option value="">None</option>
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
		</div>
	</div>
  </div>
		<div class="row">
			<div class="form-row three ">
			<button type="button" class="save" id="calculatewebnetQuote">
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
</script>
