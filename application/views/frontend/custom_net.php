<?php
	echo form_open('', array('id'=>'net_form','data-parsley-validate'=>'data-parsley-validate'));
?>
<script type="text/javascript" src="<?php echo base_url();?>assets/front/js/web-product.js" ></script>
<style>
	#numberofnet{
	        height: 24px;
		    /* width: 140px; */
		    border-radius: 3px;
		    font: 1.38vh 'MyriadProRegular';
		    padding-left: 8px;
	}
</style>

 <div class="form-group">

	<div class="panel panel-default">
	 <div class="panel-heading">  	
						  		<div class="panel-title pull-left">
						            <h5 style="color:white;">Net Details</h5>
						         </div>
						        <div class="panel-title pull-right">
						        	
						        </div>
						        <div class="clearfix"></div>
						  </div>

	  <div class="panel-body">
		<div class="row">
			<div class="form-row three">
			  	<div class="form-row half">
				  		<label> Quantity </label>
						<input type="text" id="numberofnet" required data-parsley-min="1" placeholder="Quantity" 
						data-parsley-type="number" name="net_number" required onkeypress='return isNumberKey(event)' placeholder="Number of net " value="" />
			  	</div>
			</div>
			<div class="form-row seven">
				<label>Product Type <em >*</em>
					<!-- Changes (27-07-2017) -->
						<span class="mark_for_review">
							<input type="checkbox" name="mark_for_reviews" value="1" > Mark For Review
						</span> 
					<!-- Changes (27-07-2017) -->
				</label>
				<div id="zero-select-cn">
					<select id="nettingtype_customnet" name="net_product" class="custom-select" >
						<option value="">Select</option>
						<?php
							echo netProduct('Custom Net');
						?>
					</select>
				</div>
			</div>
		</div>
	  	<div class="row">
	  		<div class="form-row three">
				<label>Net Style/Color <em >*</em></label>
						<div id="first-select" alt-data="coloroption" alt-name="net_style" >
							<select id="coloroption" name="net_style" data-parsley-required="true" class="custom-select">
								<option value="">Select</option>
							</select>
						</div>
			</div>
			<div class="form-row three">
				<label>Sewn Border </label>
					<div id="second-select" alt-data="borderoption" alt-name="net_border">
						<select id="borderoption" name="net_border" class="custom-select">
							<option value="">None</option>
						</select>
					</div>
			</div>
			<div class="form-row three">
				<div class="form-row half">
					<label>
						Width (in Ft) <em >*</em>
					    <a class="get-calculation" data-id="netwidth"><i class="fa fa-calculator" aria-hidden="true"></i></a>
					</label>
					<input type="text" class="newWidth" id="netwidth" name="net_width" data-parsley-required="true" data-parsley-required-message="Enter Width Value" data-parsley-min="0"
					data-parsley-type="number" placeholder="Enter width"  data-parsley-type-message="Enter Valid Width Value" maxlength="20">
				</div>
				<div class="form-row half">
					<label>Length (in Ft) <em >*</em>
				 	    <a class="get-calculation" data-id="netlength"><i class="fa fa-calculator" aria-hidden="true"></i></a>
					</label>
					<input type="text" class="newLength" id="netlength" name="net_length" data-parsley-required="true"
					data-parsley-required-message="Enter Length Value" data-parsley-min="0"
					data-parsley-type="number" placeholder="Enter length" data-parsley-type-message="Enter Valid Length Value" maxlength="20">
				</div>
			</div>
	  	</div>



		
			<input type="hidden" id="newSft" value="" placeholder="Length x Width" readonly>
   		 	<input type="hidden" id="newLft" value="" placeholder="2X(Length x Width)" readonly>
		
		<div class="row">
			<div class="form-row addon-part-error" id="addon-part-error-id">
				<div class="form-row three">
						<label>Add-ons</label>
								<div id="addons" alt-data="addonption" alt-name="net_addon" >
									<select id="addonption" name="net_addon" class="custom-select">
										<option value="">Select</option>
										
									</select>
								</div>
				</div>
				<div class="form-row three">
							<label>Add-on Details  </label>
							<div class="select1">							
								<input type="text" id="numberofaddons" name="number_addon"  data-parsley-required-message="Enter Add-on Value in number or float" data-parsley-min="0"
								data-parsley-type="number" placeholder="Enter add-on"  data-parsley-type-message="Enter Valid Add-on Value in number or float" maxlength="1000">
			
							</div>
				</div>
						
				<div class="form-row three">
							<label>Add-on UOM	</label>
							<div class="select1">
								<select id="addonuom" name="addon_uom" >
									<option value="">Select</option>
									<option value="EA">EA</option>  
									<option value="FT">FT</option>
								</select>
							</div>
				</div>
			</div>
		</div>

	<div class="row custom_options_show">
		<p class="option_dis_title">Additional Options (Expand) <span class="glyphicon glyphicon-circle-arrow-down"></span></p>
		<p class="options_display"></p>
	</div>

		<div id="custom_options" style="display:none" class="row well well-sm">	
			<div class="row">
				<div class="form-row">
					<div class="form-row three">
						<label>Thread Color </label>
						<div id="threaddiv" alt-data="threadoption" alt-name="net_thread" >
							<select id="threadoption" name="net_thread" class="custom-select">
								<option value="">None</option>
							</select>
						</div>
					</div>
					<div class="form-row three">
						<label>Woven Border </label>
						<div id="third-select" alt-data="borderoption2" alt-name="net_border2">
							<select id="borderoption2" name="net_border2" class="custom-select">
								<option value="">None</option>
							</select>
						</div>
					</div>
					<div class="form-row three">
						<label>Stacked Net </label>
						<div id="fourth-select" alt-data="netborder3" alt-name="net_border3">
							<select id="netborder3" name="net_border3" class="custom-select">
								<option value="">None</option>
							</select>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="form-row">
					<div class="form-row three">
							<label> Sewn Seam Allowed? </label>
							<div class="select1">
								<select id="seamstyle" name="seam_style" >
									<option value="Buttsewn Seam Allowed [1]">Buttsewn Seam Allowed </option>  
									<option value="NO Buttsewn Seams Allowed [2]">NO Buttsewn Seams Allowed </option> 
								</select>
							</div>
					</div>
					<div class="form-row three">
						<label>Cutting Style </label>
						<div id="cutting-select" alt-data="cuttingstyle" alt-name="cut_style" class="select1" >
							<select id="cuttingstyle" name="cut_style" >
								<option value="">None</option>
								<?php
									//$cuttingStyle	= getQuoteHeaderLookUp('cutting_style');
									//echo $cuttingStyle;
								?>
							</select>
						</div>
					</div>
					<div class="form-row three">
						<label>Position of Lashing </label>
						<div class="select1">
							
							<select id="lash_position" name="lash_position" >
								<?php
									$lashings	= getQuoteHeaderLookUp('lashing_position');
									echo $lashings;
								?>
							</select>
							
						</div>
					</div>
					
			
			
				</div>
			</div>
			
			<div class="row">
					<div class="form-row additional-part-error " id="additional-part-error-id">
						<div class="form-row three">
							<label>Additional Item (Part#)    </label>
							<input type="text" name="addlpart" id="addlpart" placeholder="Enter Additional Item" />
						</div>
						<div class="form-row three">
							<label> Additional Material Price </label>
							<input type="text" id="addlcost" name="addlcost"  placeholder="Enter Additional Material Cost" data-parsley-min="0" value="0"
							data-parsley-type="number" data-parsley-type-message="Enter Valid Material Price Value"  data-parsley-min-message="Enter Additional Material Cost at least 0"/>
						</div>
						<div class="form-row three">
							<label>Additional Labor (Hour)</label>
							<input type="text" name="addllabor" id="addllabor"  placeholder="Enter Additional Labor (Hour)" data-parsley-min="0"
							data-parsley-type="number"   data-parsley-min-message="Enter Additional Labor (Hour) at least zero" value="0" />
						</div>
					</div>
			</div>
		</div>

	<div class="row">
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

			<div class="form-row seven">
				<div class="form-row three">
					<label>Discount % </label>
					<input type="text" id="discount" name="discount" value="0"
					data-parsley-type="number" data-parsley-max="100"  placeholder="Enter Discount" >
				</div>
				<div class="form-row three">
					<label> Old Calculator Price</label>
					<input type="text" name="old_calculator" id="old_calculator" placeholder="Old Calculator Price" 
					data-parsley-type="number" data-parsley-max="50000000" data-parsley-maxlength="11"  value=""   />
				</div>
				<div class="form-row three">
					<label>Unit Price Override</label>
					<input type="text" name="price_override" id="price_override" placeholder="Unit Price Override" 
					data-parsley-type="number" data-parsley-max="50000000" data-parsley-maxlength="11"  value=""   />
				</div>
			</div>
		<!--<div class="form-row two custom-override-proposal">
			<label> Override Proposal Description </label>
			<textarea placeholder="Override Proposal Description" name="override_proposal_desc"></textarea>
		</div>-->
	  </div>
	  <div class="row">
	  	<div class="form-row seven">
			<label> Additional Instructions (Does not show in proposal)</label>
			<input type="text" name="instrunctions"  id="instrunctions" placeholder="Enter any additional details including special part and instruction here" />
		</div>
		<div class="form-row three">
			<label> Tag Number </label>
			<input type="text" name="tag_number"  id="tag_number" placeholder="Enter tag number" />
		</div>
	  </div>

	</div>
  </div>


	<div class="row">
		<div class="form-row three ">
		<button type="button" class="save" id="calculateCustomNetQuote">
			Review Quote</button>
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
