<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
?>
<!-- Right Bar Section -->
	<div class="right-bar">
		<div class="form-section">
		<div class="top-head">
		<h1>Custom psn</h1>

		<a href="#" class="print">
			<img src="<?=base_url('assets/front/images/print.png')?>" alt="print" /> Print</a>
		</div>

<div class="inner-form">
	
<div class="form-group">
		<h2>Choose Product</h2>
		<div class="row"> 
		<!--<div class="form-row half">
		<label>Adding to an  Existing Quote</label>
		<input type="text" />
		</div>-->

		<div class="form-row half">
		<select id="choose-product" name="choose-product" class="changeCustom">
		<option value="">Select</option>
			<option value="net">Custom Nets</option>
			<option value="psn">Custom Psn</option>
		</select>
		</div>
		</div>
		</div>

<div class="form-group">
	<h2>Product Information</h2>
			<div class="row">
			<div class="form-row half">
					<label>Product Line</label>
					<select>
						<option>None<selected="selected"></option>
						<option>Custom Personnel Safety Net</option>
					</select>
				</div>
				<div class="form-row half">
					<label>Product </label>
					<select>
						<option>None<selected="selected"></option>
						<option>Custom Personnel Safety Net</option>
					</select>
				</div>
				
			</div>
			
			<div class="row">
			<div class="form-row half">
					<label>Width (in FT)</label>
					<input type="text">
				</div>
				<div class="form-row half">
					<label>Length (in FT)</label>
					<input type="text">
				</div>				
				
					
				
							
			</div>
	
	</div>
<div class="form-group">
		
				<div class="row">
					<div class="form-row three">
						<label >Pricing Tier</label>
						<select>
							<option>Retail Pricing [1]<selected="selected"</option>  
							<option>Distributor Pricing [2]</option>
							<option>Over $5K Pricing [3]</option>   
							<option>Over $10K Pricing [4]</option>
						</select>
					</div>
								
					<div class="form-row three">
						<label for="netlength">Discount %</label>
						<input type="text">
					</div>
					
						<div class="form-row three">
						<label for="netlength">Number of Nets</label>
						<input type="number">
					</div>
				
				</div>
		
		</div>
<div class="form-group">
<div class="row">
<div class="form-row three button-bottom">
<button type="button" class="save">Save as new Quote</button>
</div>
<div class="form-row three button-bottom">
<button type="button" class="exist">Add to existing Quote</button>
</div>
<div class="form-row three button-bottom">
<button type="button" class="calculate"><img src="<?=base_url('assets/front/images/calculator.png')?>"alt="calculate" />Calculate Net Price </button>
</div>


</div>
</div>

		</div>

		</div>
		</div>

		<div class="order-section">
<h2>Final Quote</h2>
<div class="order-list">
<div class="item-quantity">
<p><span><strong>Item #</strong> 1250</span></p>
<p>LilyPad <span><strong>Qty:</strong> 01</span></p>
</div>

<div class="detail">
<p>HTPP 2in Sq <span><strong>200.00</strong></span></p>
<p><strong>Width:</strong> 10.00 FT</p>
<p><strong>Length:</strong> 10.00 FT</p>
<p><strong>Mesh Color:</strong> Sand</p>
</div>

</div>
<div class="order-list">
<div class="item-quantity">
<p><span><strong>Item #</strong> 1250</span></p>
<p>LilyPad <span><strong>Qty:</strong> 01</span></p>
</div>

<div class="detail">
<p>HTPP 2in Sq <span><strong>200.00</strong></span></p>
<p><strong>Width:</strong> 10.00 FT</p>
<p><strong>Length:</strong> 10.00 FT</p>
<p><strong>Mesh Color:</strong> Sand</p>
</div>

</div>
<div class="order-list">
<div class="item-quantity">
<p><span><strong>Item #</strong> 1250</span></p>
<p>LilyPad <span><strong>Qty:</strong> 01</span></p>
</div>

<div class="detail">
<p>HTPP 2in Sq <span><strong>200.00</strong></span></p>
<p><strong>Width:</strong> 10.00 FT</p>
<p><strong>Length:</strong> 10.00 FT</p>
<p><strong>Mesh Color:</strong> Sand</p>
</div>

</div>

<div class="sub-total">
<p>Subotal <span><strong>600.00</strong></span></p>
<p>Freight <span>32.70</span></p>
<p></p>
</div>

<div class="total">
<p>Total</p>
<h3>700.00</h3>
<a href="#">Save as final quote</a>

</div>

</div>
	</div>

<!-- Right Bar Section -->
</section>
<?php
	$this->load->view('frontend/bottom');
?>
<script>
	$(document).ready(function(){
		$('.changeCustom').change(function (){
			var page	= $(this).val();
			var url		= '<?=base_url('customnet')?>';
			if(page!=''){
				if(page!='net'){
					var url		= '<?=base_url('custompsn')?>';
					window.location.href=url;
				}else{
					window.location.href=url;
				}
			}
		});
	});
</script>
