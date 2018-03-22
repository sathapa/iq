<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
?>
<!-- Right Bar Section -->
	<div class="right-bar">
		<div class="form-section">
		<div class="top-head">
		<h1>LilyPad Quoting</h1>

		</div>

		<div class="inner-form">
		
		<div class="form-group">
		
		<div class="form-group form-control-sm">
			<div class="col-xs-12">
				<div class="row">
					<div class="col-xs-2">
						<label ><b>Adding to an Existing Quote?</b></label>
					</div>
					<div class="col-xs-6">
						<select class="form-control form-control-sm" id="oldquoteid" >
							<option>No<selected="selected"</option>
						</select>
					</div>
					<div class="col-xs-4">
						<input class="pull-right form-control form-control-sm" type="text" id="searchbyquote" onkeyup="populate_quotelist();" placeholder="Search by Customer ID, Qutoe Number or Date" >
					</div>
				</div>
			</div>
		</div>
		
		<div class="form-group form-control-sm">
			<div class="col-xs-12">
				<div class="row">
					<div class="col-xs-2">
						<label ><b>Customer</b></label>
					</div>
					<div class="col-xs-6">
						<select class="form-control form-control-sm" id="customer" >
							<option>None<selected="selected"</option>						
						</select>
					</div>
					<div class="col-xs-4">
						<input class="pull-right form-control form-control-sm" type="text" id="searchbycustname" onkeyup="populate_customerlist();" placeholder="Search by Customer Name, Number or Address" >
					</div>
				</div>
			</div>
		</div>
  
		<div class="form-group form-control-sm">
		<div class="col-xs-12">
			<div class="row">
					<div class="col-xs-2">
						<label ><b>Product</b></label>
					</div>
					<div class="col-xs-4">
						<select class="form-control form-control-sm" id="nettingstyle" onchange="populate_productlist();">
							<option>None<selected="selected"</option>
							<option>Netform Lily Pad Net with Asso[LPN]</option>
							<option>Soft Rope Lily Pad Net with Ne[LPN-RNF]</option>
							<option>Netform Lily Pad Net with Spre[LPN-SB]</option>	
							<option>Netform Lily Pad Net with Spre[LPN-SB6]</option>
						</select>
					</div>
			</div>
			
		</div>
	</div>
	
	
	<div class="form-group form-control-sm">
		<div class="col-xs-12">
				<div class="row">
					<div class="col-xs-2">
						<label ><b><i>NetForm Rope</i> Color</b></label>
					</div>
					<div class="col-xs-4">
						<select  class="form-control form-control-sm" id="rope_coloroption">
							<option>None<selected="selected"</option>
						</select>
					</div>
				</div>
		</div>
	</div>
	<div class="form-group form-control-sm">
		<div class="col-xs-12">
			<div class="row">
				<div class="col-xs-2">
					<label ><b><i>Cargo Rope</i> Color</b></label>
				</div>
				<div class="col-xs-4">
					<select  class="form-control form-control-sm" id="crope_coloroption">
						<option>None<selected="selected"</option>
					</select>
				</div>
			</div>
		</div>
	</div>
		<div class="form-group form-control-sm">
			<div class="col-xs-12">
				<div class="row">
					<div class="col-xs-2">
						<label ><b><i>T-Joint</i> Color</b></label>
					</div>
					<div class="col-xs-4">
						<select  class="form-control form-control-sm" id="tjoint_coloroption">
							<option>None<selected="selected"</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group form-control-sm">
			<div class="col-xs-12">
				<div class="row">
					<div class="col-xs-2">
						<label ><b><i>Cross Joint</i> Color</b></label>
					</div>
					<div class="col-xs-4">
						<select  class="form-control form-control-sm" id="xjoint_coloroption">
							<option>None<selected="selected"</option>
						</select>
					</div>
				</div>
			</div>
		</div>

		<div class="form-group form-control-sm">
			<div class="col-xs-12">
				<div class="row">
					<div class="col-xs-2">
						<label ><b><i>Spreader Bar</i> Color</b></label>
					</div>
					<div class="col-xs-4">
						<select  class="form-control form-control-sm" id="sbar_coloroption">
							<option>None<selected="selected"</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		
		<div class="form-group form-control-sm">
			<div class="col-xs-12">
				<div class="row">
					<div  class="col-xs-2">
						<label for="netlength"><b>Overall Length (FT)</b></label>
					</div>
					
					<div  class="col-xs-2">
						<input type="text" class="form-control form-control-sm" id="netlength"  value="16">
					</div>
					
					<div  class="col-xs-2">
						<label for="netwidth"><b>Width (<i>Even</i> FT)</b></label>
					</div>
					
					<div  class="col-xs-2">
						<input type="text" class="form-control form-control-sm" id="netwidth"  value="4">
					</div>
					

					<div  class="col-xs-2">
						<label for="netlength"><b><i>Body/Cargo </i>Length (FT)</b></label>
					</div>
					
					<div  class="col-xs-2">
						<input type="text" class="form-control form-control-sm" id="bodylength"  value="12">
					</div>
				</div>
			</div>
		</div>
		
		<div class="form-group form-control-sm">
			<div class="col-xs-12">
				<div class="row">
					<div  class="col-xs-2">
						<label for="netlength"><b>Number of Nets</b></label>
					</div>
					<div class="col-xs-2">
						<input type="number" class="form-control form-control-sm" id="netnumber" value="1">
					</div>
					<div class="col-xs-2">
						<label ><b>Pricing Tier</b></label>
					</div>
					<div class="col-xs-2">
						<select class="form-control form-control-sm" id="pricingtier" >
							<option>Retail Pricing [1]<selected="selected"</option>  
							<option>Distributor Pricing [2]</option>
							<option>Over $5K Pricing [3]</option>   
							<option>Over $10K Pricing [4]</option>
						</select>
					</div>
					<div  class="col-xs-2">
						<label for="netlength"><b>Discount %</b></label>
					</div>
					
					<div  class="col-xs-2">
						<input type="text" class="form-control form-control-sm" id="discount"  value="10">
					</div>

				</div>
			</div>
		</div>
		
		
  <div class="form-group ">
    <label for="nettingstyle1"></label>
  </div>
			


		<div class="col-sm-12 text-center">
			<button type="button" onclick="get_price();" class="btn btn-primary ">Calculate Net Price</button>
			<button type="button" onclick="save_quote();"  class="btn btn-primary  ">Save as a NEW Quote</button>
			<button type="button" onclick="save_quote();"  class="btn btn-primary  ">Add to an EXISTING Quote</button>
			<button type="reset" onclick="clearForm(this.form);" class="btn btn-primary ">Price Another Net</button>
			<button type="submit" class="btn btn-primary" formaction="../QuoteWeb/">Back to Main Page</button>
		</div>
  
  <div class="form-group ">
    <label for="nettingstyle1"></label>
  </div>
  			
	<div>
		<table class="table table-striped table-sm table-condensed">
		<tbody id="bom" style="font-size:80%;">
		
		</tbody>
		</table>
	</div>
  <div class="form-group ">
    <label for="nettingstyle1"></label>
  </div>
  


		</div>

		</div>
		</div>

		<div class="order-section"></div>
	</div>

<!-- Right Bar Section -->
</section>
<?php
	$this->load->view('frontend/bottom');
?>
