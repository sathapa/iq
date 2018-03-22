<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	$pp	= getQuoteHeaderLookUp('shipping_code');
?>

<!-- Right Bar Section -->
	<div class="right-bar">
		<div class="form-section">
			<div class="top-head">
				<h1 id="quoting-heading">Account Management [ Add Account ]</h1>
				<a href="<?=base_url('customers')?>" class="back-btn  create_quote" > < Back</a>
				
			</div>
		<div class="inner-form" id="innerformdetails">
		<div><?php $message	= $this->session->flashdata('message'); echo $message;?></div>
		<div class="form-group">
		
		<?php
			echo form_open('', array('class'=>'form-row ','id'=>'customer_form','data-parsley-validate'=>'data-parsley-validate'));
		?>
		<div class="row">
			
			<div class=" half">
				<div class=" half">
					<label>Company Name <em >*</em></label>
					<div class="select1">
						<input type="text" value="<?=set_value('company_name');?>" name="company_name" id="company_name" Placeholder="Company Name" data-parsley-pattern="^[a-zA-Z0-9-/&,.' ]{2,100}$" data-parsley-required="true">
					</div>
				</div>
				<div class=" half">
					<label>Primary Contact</label>
					<div class="select1">
						<input type="text" value="<?=set_value('primary_contact');?>"  name="primary_contact" id="primary_contact" Placeholder="Primary Contact" >
					</div>
				</div>
			</div>
			<div class="half">
				
				<div class="half">
					<label>Email <em >*</em></label>
					<div class="select1">
						<input type="email" value="<?=set_value('customer_email')?>" name="customer_email" id="customer_email" Placeholder="Email " data-parsley-required="true">
					</div>
				</div>
				<div class="half">
					<label>Website </label>
					<div class="select1">
						<input type="text" value="<?=set_value('website')?>" name="website" id="website" Placeholder="Website " >
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="customer half">
				<div class="half">
					<label>Main Phone <em >*</em></label>
					<div class="select1">
						<input type="text" value="<?=set_value('customer_phone')?>" name="customer_phone" id="customer_phone" Placeholder="Main Phone " data-parsley-required="true">
					</div>
				</div>
				<div class="half">
					<label>Alternate Phone </label>
					<div class="select1">
						<input type="text" value="<?=set_value('customer_alt_phone')?>" name="customer_alt_phone" id="customer_alt_phone" Placeholder="Alternate Phone " >
					</div>
				</div>
			</div>
			
			<div class="customer half">
				<div class="half">
					<label>Fax </label>
					<div class="select1">
						<input type="text" value="<?=set_value('fax')?>" name="fax" id="fax" Placeholder="Fax " >
					</div>
				</div>
				<div class="half">
					<label>Addressee </label>
					<div class="select1">
						<input type="text" value="<?=set_value('address')?>" name="address" id="address" Placeholder="Addressee " >
					</div>
				</div>
			</div>
			
		</div>
		
		<div class="row">
			<div class="form-row ">
				
				<div class="three">
					<label>Address Street 1 <em >*</em></label>
					<div class="select1">
						<input type="text" value="<?=set_value('cutomer_address_street1')?>" name="cutomer_address_street1" id="cutomer_address_street1" Placeholder="Address Street 1 " data-parsley-required="true" >
					</div>
				</div>
				
				<div class="three">
					<label>Address Street 2 </label>
					<div class="select1">
						<input type="text" value="<?=set_value('cutomer_address_street2')?>" name="cutomer_address_street2" id="cutomer_address_street2" Placeholder="Address Street 2 " >
					</div>
				</div>
				<div class="three">
					<label>Zip Code <em >*</em></label>
					<div class="select1">
						<input type="text" value="<?=set_value('customer_zip_code')?>" name="customer_zip_code" id="customer_zip_code" Placeholder="Zip Code " data-parsley-required="true" >
					</div>
				</div>
				
				
			</div>
		</div>
		
		<div class="row">
			<div class="form-row half">
				<div class="half">
					<label>City <em >*</em></label>
					<div class="select1">
						<input type="text" value="<?=set_value('customer_city')?>" name="customer_city" id="customer_city" Placeholder="City" data-parsley-required="true">
					</div>
					
				</div>
				<div class="half">
					<label>State/Province <em >*</em></label>
					<div class="select1">
						<input type="text" value="<?=set_value('customer_state')?>" name="customer_state" id="customer_state" Placeholder="State " data-parsley-required="true" >
					</div>
				</div>
			</div>
			<div class="form-row half">
				<div class="half">
					<label>Country <em >*</em></label>
					<div class="select1" id="customer-country-list-html">
						<select id="customer_country" name="customer_country" data-parsley-required="true">
							<option value="">Select Country</option>
							<?php
								if(!empty($countries)){
									foreach($countries as $val){
										$selected	= !empty($val->iso_country_code) && $val->iso_country_code=='USA' ? 'selected' : '';
										echo '<option value="'.$val->iso_country_code.'" '.$selected.'>'.$val->country_name.'</option>';
									}
								}
							?>
						</select>
					</div>
				</div>
				<div class="half">
					<label>Shipping Method <em >*</em></label>
					<div class="select1">
						<select id="ship_method" name="ship_method" data-parsley-required="true">
							<option value="">Select Shipping Method</option>
							<?=getQuoteHeaderLookUp('shipping_code');?>
						</select>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="form-row half">
				<div class="half">
					<label>Terms Code <em >*</em></label>
					<div class="select1">
						<select id="terms_code" name="terms_code" data-parsley-required="true">
							<option value="">Select Term Code</option>
							<?=getQuoteHeaderLookUp('term_code');?>
						</select>
					</div>
				</div>
				<div class="half">
					<label>Relationship Type <em >*</em></label>
					<div class="select1" id="status-select">
						<select id="relationship_type" name="relationship_type" data-parsley-required="true" >
							<option value="">Select Relationship Type</option>
							<?=getQuoteHeaderLookUp('relationship_type');?>
						</select>
					</div>
				</div>
			</div>
			<div class="form-row half">
				<div class="half">
					<label id="tier_heading">Type <em >*</em></label>
					<div class="select1" id="change-tier-value-basis-on-relationtype">
						<select id="customer_pricing_tier" name="customer_pricing_tier" data-parsley-required="true">
							<option value="">Select Type</option>
						</select>
					</div>
				</div>
				
				<div class="half">
					<label id="sage-number-heading">Sage Number </label>
					<div class="select1 sage_number_validation">
						<input type="text" value="<?=set_value('sage_number')?>" name="sage_number" id="sage_number" Placeholder="Sage Number " >
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="row">
			<div class="form-row half">
				<div class="half">
					<label>Preferred Method Contact</label>
					<div class="select1">
						<input type="text" value="<?=set_value('pre_method_contact')?>" name="pre_method_contact" id="pre_method_contact" Placeholder="Preferred Method Contact " >
					</div>
				</div>
				<div class="half">
					<div class="half">
						<label>Do Not Allow Emails</label>
						<div class="select1">
							<input type="checkbox" value="1" name="do_not_allow_email" id="do_not_allow_email" Placeholder="Do Not Allow Emails" >
						</div>
					</div>
					
				</div>
			</div>
			<div class="form-row half">
				<div class="one">
					<div class="three">
						<label>Do Not Allow Phone</label>
						<div class="select1">
							<input type="checkbox" value="1" name="do_not_allow_phone" id="do_not_allow_phone" Placeholder="Do Not Allow Phone" >
						</div>
					</div>
					
					<div class="three">
						<label>Do Not Allow Fax</label>
						<div class="select1">
							<input type="checkbox" value="1" name="do_not_allow_fax" id="do_not_allow_fax" Placeholder="Do Not Allow Fax" >
						</div>
					</div>
					<div class="three">
						<label>Send Marketting Materials</label>
						<div class="select1">
							<input type="checkbox" value="1" name="send_marketing_material" id="send_marketing_material" Placeholder="Send Marketting Materials" >
						</div>
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="row">
			<div class="form-row half">
				<div class="half">
					<label>Credit Limit</label>
					<div class="select1">
						<input type="text" value="<?=set_value('credit_limit')?>" name="credit_limit" id="credit_limit" Placeholder="Credit Limit " >
					</div>
				</div>
				<div class="half">
					
					<label>Annual Revenue</label>
					<div class="select1">
						<input type="text" value="<?=set_value('annual_revenue')?>" name="annual_revenue" id="annual_revenue" Placeholder="Annual Revenue" >
					</div>
				</div>
			</div>
			<div class="form-row half">
				<div class="half">
					<label>Parent Account Number</label>
					<div class="select1">
						<input type="text" value="<?=set_value('parent_account_number')?>" name="parent_account_number" id="parent_account_number" Placeholder="Parent Account Number " >
					</div>
				</div>
				<div class="half">
					<label>Lead Salesperson<em>*</em></label>
					<div class="select1">
						<select id="lead_salescontact" name="lead_salescontact" data-parsley-required="true">
							<option value="">Select Salesperson</option>
							<?php
								echo salespersonList();
							?>
						</select>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="form-row half">
				<div class="half">
					<label>Division<em>*</em></label>
					<div class="select1">
						<select id="division" name="division" data-parsley-required="true">
							<option value="">Select Division</option>
							<?php
								echo getQuoteHeaderLookUp('division_to_wtclass');
							?>
						</select>
					</div>
				</div>
				<div class="half">
					
					<label>Territories</label>
					<div class="select1">
						<select id="territory" name="territory">
							<option value="">Select Territory</option>
							<?php
								echo getQuoteHeaderLookUp('territory');
							?>
						</select>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="form-row three ">
			<button type="submit" class="save" id="submitUserDetails">
				Submit</button>
			</div>
		</div>
		
		<?=form_close()?>
		
		</div>
		</div>
	</div>
</div>
</section>

<?php
	$this->load->view('frontend/bottom');
?>
<script type="text/javascript">
	/* Set Validation rule for sage number */
	$(document).on('change','#relationship_type',function (){
		var relationType	= $(this).val();
		if(relationType==2){
			$('#sage-number-heading').html('Sage Number <em >*</em>');
			$('#sage_number').attr('data-parsley-required','true');
			$('.sage_number_validation').find('.parsley-errors-list').show();
		}else{
			$('.sage_number_validation').find('.parsley-errors-list').hide();
			$('#sage-number-heading').html('Sage Number ');
			$('#sage_number').removeAttr('data-parsley-required');
		}
		if(relationType!='' && relationType!=1){
			$('#tier_heading').html('Type <em>*</em>');
			$.post('<?=base_url('frontend/crm/getTierValue')?>',{'relationType':relationType},function (response){
				var data	= JSON.parse(response);
				if(data.status=='Yes'){
					$('#change-tier-value-basis-on-relationtype').html(data.html);
				}
				$('#customer_form').parsley().isValid();
				$(".select1").find('select').selectBoxIt();
			});
		}else{
			$('#tier_heading').html('Type');
			$('#change-tier-value-basis-on-relationtype').html('<select id="customer_pricing_tier" name="customer_pricing_tier" ><option value="">None</option></select>');
		}
		$(".select1").find('select').selectBoxIt();
	});
	
	/* Getting the city,state and state based on zipcode */
	$(document).on('blur','#customer_zip_code',function (){
		var zipcode	= this.value;
		if(zipcode!=''){
			$.post('<?=base_url('frontend/crm/getFullAddressBasedOnZipcode')?>',{'zipcode':zipcode},function (response){
				var data= JSON.parse(response);
				if(data.city!=''){
					$('#customer_city').val(data.city);
				}
				if(data.state!=''){
					$('#customer_state').val(data.state);
				}
				var countryhtml	= '<select id="customer_country" name="customer_country" data-parsley-required="true"><option value="">Select Country</option>';
					countryhtml	+= data.country;
					countryhtml	+= '</select>';
				$('#customer-country-list-html').html(countryhtml);
				$(".select1").find('select').selectBoxIt();
			});
		}
	});
</script>
