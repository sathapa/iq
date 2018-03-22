<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	$groupPermissions	= !empty($this->group_permissions) ? $this->group_permissions : array();
	
	$companyName		= !empty($customerInfo->companyname) ? $customerInfo->companyname : '';
	$primaryContact		= !empty($customerInfo->primarycontact) ? $customerInfo->primarycontact : '';
	$accountNumber		= !empty($customerInfo->accountnumber) ? $customerInfo->accountnumber : '';
	$email				= !empty($customerInfo->email) ? $customerInfo->email : '';
	$mainPhone			= !empty($customerInfo->mainphone) ? $customerInfo->mainphone : '';
	$otherPhone			= !empty($customerInfo->otherphone) ? $customerInfo->otherphone : '';
	$fax				= !empty($customerInfo->fax) ? $customerInfo->fax : '';
	$website			= !empty($customerInfo->website) ? $customerInfo->website : '';
	$address			= !empty($customerInfo->address1_name) ? $customerInfo->address1_name : '';
	$addressStreet1		= !empty($customerInfo->address1_street1) ? $customerInfo->address1_street1 : '';
	$addressStreet2		= !empty($customerInfo->address1_street2) ? $customerInfo->address1_street2 : '';
	$city				= !empty($customerInfo->address1_city) ? $customerInfo->address1_city : '';
	$state				= !empty($customerInfo->address1_stateprovince) ? $customerInfo->address1_stateprovince : '';
	$zipcode			= !empty($customerInfo->address1_zippostalcode) ? $customerInfo->address1_zippostalcode : '';
	$country			= !empty($customerInfo->address1_countryregion) ? $customerInfo->address1_countryregion : '';
	$pricingTier		= !empty($customerInfo->pricing_tier) ? $customerInfo->pricing_tier : '';
	$termsCode			= !empty($customerInfo->address1_freightterms) ? $customerInfo->address1_freightterms : '';
	$shippingMethod		= !empty($customerInfo->address1_shippingmethod) ? $customerInfo->address1_shippingmethod : '';
	$sageCustomerNumber	= !empty($customerInfo->sagecustomernumber) ? $customerInfo->sagecustomernumber : '';
	$relationshipType	= !empty($customerInfo->relationshiptype) ? $customerInfo->relationshiptype : '';
	$preferMethodeCon	= !empty($customerInfo->preferredmethodofcontact) ? $customerInfo->preferredmethodofcontact : '';
	$donotAlloweMails	= !empty($customerInfo->donotallowemails) ? $customerInfo->donotallowemails : 0;
	$donotAllowPhone	= !empty($customerInfo->donotallowphonecalls) ? $customerInfo->donotallowphonecalls : 0;
	$donotAllowFaxes	= !empty($customerInfo->donotallowfaxes) ? $customerInfo->donotallowfaxes : 0;
	$sendMarketingMaterials	= !empty($customerInfo->sendmarketingmaterials) ? $customerInfo->sendmarketingmaterials : 0;
	$creditLimit		= !empty($customerInfo->creditlimit) ? $customerInfo->creditlimit : 0;
	$annualRevenue		= !empty($customerInfo->annualrevenue) ? $customerInfo->annualrevenue : 0;
	$parentAccount		= !empty($customerInfo->parentaccount) ? $customerInfo->parentaccount : '';
	$originatingLead	= !empty($customerInfo->salesperson) ? $customerInfo->salesperson : '';
	$crmGuid			= !empty($customerInfo->crm_guid) ? $customerInfo->crm_guid : '';
	
	$territory			= !empty($customerInfo->territory) ? $customerInfo->territory : '';
	$division			= !empty($customerInfo->division) ? $customerInfo->division : '';
	
?>

<!-- Right Bar Section -->
<div class="right-bar">
	<div class="form-section">
			<div class="col-sm-12 top-head">
				<h1 id="quoting-heading"> Account #: <?=$accountNumber;?></h1>
				<a href="<?=base_url('customers')?>" class="back-btn  create_quote" > < Back</a>
				<?php
					if(!empty($groupPermissions) && in_array(20,$groupPermissions)){
				?>
				<a href="javascript:void(0)" class="create_quote add-more-contact">Add New Contact</a>
				<?php
					}
				?>
			</div>
		<div class="col-sm-8 inner-form" id="innerformdetails">
		<div id="alert-message"><?php $message	= $this->session->flashdata('message'); echo $message;?></div>
		<div class="form-group">
		
		<?php
			echo form_open('', array('class'=>'form-row ','id'=>'customer_form','data-parsley-validate'=>'data-parsley-validate'));
		?>
		<div class="panel panel-default">
			<div class="panel-heading"> <h5 style="color:white;" >Edit Account</h5> </div>
			<div class="panel-body">
				<div class="row">
					<div class=" half">
						<div class=" half">
							<label>Company Name <em >*</em></label>
							<div class="select1">
								<input type="text" value="<?=$companyName;?>" name="company_name" id="company_name" Placeholder="Company Name" data-parsley-pattern="^[a-zA-Z0-9-/&,.' ]{2,100}$" data-parsley-required="true">
								<input type="hidden" value="<?=$crmGuid;?>" name="crm_guid" id="crm_guid">
								
							</div>
						</div>
						<div class=" half">
							<label>Primary Contact Number<em >*</em></label>
							<div class="select1">
								<input type="text" value="<?=$primaryContact;?>"  name="primary_contact" id="primary_contact" Placeholder="Primary Contact Number" data-parsley-required="true">
							</div>
						</div>
					</div>
					<div class="half">
						<!--
						<div class="half">
							<label>Account Number <em >*</em></label>
							<div class="select1">
								<input type="text" value="<?//=$accountNumber;?>" name="account_number" id="account_number" Placeholder="Account Number" data-parsley-required="true">
							</div>
						</div>-->
						<div class="half">
							<label>Email <em >*</em></label>
							<div class="select1">
								<input type="email" value="<?=$email;?>" name="customer_email" id="customer_email" Placeholder="Email " data-parsley-required="true">
							</div>
						</div>
						
						<div class="half">
							<label>Website </label>
							<div class="select1">
								<input type="text" value="<?=$website;?>" name="website" id="website" Placeholder="Website " >
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="customer half">
						<div class="half">
							<label>Main Phone </label>
							<div class="select1">
								<input type="text" value="<?=$mainPhone;?>" name="customer_phone" id="customer_phone" Placeholder="Phone " >
							</div>
						</div>
						<div class="half">
							<label>Alternet Phone </label>
							<div class="select1">
								<input type="text" value="<?=$otherPhone;?>" name="customer_alt_phone" id="customer_alt_phone" Placeholder="Alternet Phone " >
							</div>
						</div>
					</div>
					
					<div class="customer half">
						<div class="half">
							<label>Fax </label>
							<div class="select1">
								<input type="text" value="<?=$fax;?>" name="fax" id="fax" Placeholder="Fax " >
							</div>
						</div>
						
						<div class="half">
							<label>Addressee </label>
							<div class="select1">
								<input type="text" value="<?=$address;?>" name="address" id="address" Placeholder="Addressee " >
							</div>
						</div>
						
					</div>
				</div>
				
				<div class="row">
					<div class="form-row ">
						
						<div class="three">
							<label>Address Street 1 <em >*</em></label>
							<div class="select1">
								<input type="text" value="<?=$addressStreet1;?>" name="cutomer_address_street1" id="cutomer_address_street1" Placeholder="Address Street 1 " data-parsley-required="true" >
							</div>
						</div>
						
						<div class="three">
							<label>Address Street 2 </label>
							<div class="select1">
								<input type="text" value="<?=$addressStreet2;?>" name="cutomer_address_street2" id="cutomer_address_street2" Placeholder="Address Street 2 " >
							</div>
						</div>
						
						<div class="three">
							<label>Zip Code <em >*</em></label>
							<div class="select1">
								<input type="text" value="<?=$zipcode;?>" name="customer_zip_code" id="customer_zip_code" Placeholder="Zip Code " data-parsley-required="true" >
							</div>
						</div>
						
					</div>
				</div>
				
				<div class="row">
					<div class="form-row half">
						<div class="half">
							<label>City <em >*</em></label>
							<div class="select1">
								<input type="text" value="<?=$city;?>" name="customer_city" id="customer_city" Placeholder="City" data-parsley-required="true">
							</div>
							
						</div>
						<div class="half">
							<label>State/Province <em >*</em></label>
							<div class="select1">
								<input type="text" value="<?=$state;?>" name="customer_state" id="customer_state" Placeholder="State " data-parsley-required="true" >
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
												$selected	= !empty($country) && $country==$val->iso_country_code ? 'selected' : '';
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
									<option value="">Select Shipp Method</option>
									<?=getQuoteHeaderLookUp('shipping_code',$shippingMethod);?>
								</select>
							</div>
						</div>
						<!--
						<div class="half">
							<label>Pricing Tier <em >*</em></label>
							<div class="select1">
								<select id="customer_pricing_tier" name="customer_pricing_tier" data-parsley-required="true">
									<option value="">Select Pricing Tier</option>
									<option value="Retail Pricing [1]" <?//=!empty($pricingTier) && $pricingTier==1 ? 'selected' : '';?> >Retail Pricing</option>
									<option value="Distributor Pricing [2]" <?//=!empty($pricingTier) && $pricingTier==2 ? 'selected' : '';?> >Distributor Pricing</option>
									<option value="Over $5K Pricing [3]" <?//=!empty($pricingTier) && $pricingTier==3 ? 'selected' : '';?> >Over $5K Pricing</option>   
									<option value="Over $10K Pricing [4]" <?//=!empty($pricingTier) && $pricingTier==4 ? 'selected' : '';?> >Over $10K Pricing </option>
								</select>
							</div>
						</div>
						--->
					</div>
				</div>
				
				<div class="row">
					<div class="form-row half">
						<div class="half">
							<label>Terms Code <em >*</em></label>
							<div class="select1">
								<select id="terms_code" name="terms_code" data-parsley-required="true">
									<option value="">Select Term Code</option>
									<?=getQuoteHeaderLookUp('term_code',$termsCode);?>
								</select>
							</div>
						</div>
						<div class="half">
							<label>Relationship Type <em >*</em></label>
							<div class="select1" id="status-select">
								<select id="relationship_type" name="relationship_type" data-parsley-required="true"  >
									<option value="">Select Relationship Type</option>
									<?=getQuoteHeaderLookUp('relationship_type',$relationshipType);?>
								</select>
							</div>
						</div>
					</div>
					<div class="form-row half">
						<div class="half">
							<?php
								if(!empty($relationshipType) && $relationshipType!=1){
									$tierHead	= 'Tier <em >*</em>';
									$validation	= 'data-parsley-required="true"';
								}else{
									$validation	= '';
									$tierHead	= 'Tier';
								}
							?>
							<label id="tier_heading"><?=$tierHead;?></label>
							<div class="select1" id="change-tier-value-basis-on-relationtype">
								<select id="customer_pricing_tier" name="customer_pricing_tier" <?=$validation;?>>
									
									<?php
										if(!empty($relationshipType) && $relationshipType!=1){
											echo '<option value="">Select Tier</option>';
											if($relationshipType==2){
												$param	= 'pricing_tier';
											}
											if($relationshipType==3){
												$param	= 'vendor_tier';
											}
											echo getQuoteHeaderLookUp($param,$pricingTier);
										}else{
											echo '<option value="None">None</option>';
										}
									
									?>
								</select>
							</div>
						</div>
						
						<div class="half">
							<?php
								if(!empty($relationshipType) && $relationshipType!=1){
									$sageNumberHead	= 'Sage Number <em >*</em>';
									$validation1	= 'data-parsley-required="true"';
								}else{
									$validation1	= '';
									$sageNumberHead	= 'Sage Number';
								}
							?>
							<label id="sage-number-heading"><?=$sageNumberHead;?> </label>
							<div class="select1 sage_number_validation">
								<input type="text" value="<?=$sageCustomerNumber;?>" name="sage_number" id="sage_number" Placeholder="Sage Number " <?=$validation1?> >
							</div>
						</div>
						
					</div>
				</div>
				
				<div class="row">
					<div class="form-row half">
						<div class="half">
							<label>Preferred Method Contact</label>
							<div class="select1">
								<input type="text" value="<?=$preferMethodeCon?>" name="pre_method_contact" id="pre_method_contact" Placeholder="Preferred Method Contact " >
							</div>
						</div>
						<div class="half">
							<div class="half">
								<label>Do Not Allow Emails</label>
								<div class="select1">
									<input type="checkbox" value="1" name="do_not_allow_email" id="do_not_allow_email" <?=!empty($donotAlloweMails) ? 'checked' : '';?> Placeholder="Do Not Allow Emails" >
								</div>
							</div>
							
						</div>
					</div>
					<div class="form-row half">
						<div class="one">
							<div class="three">
								<label>Do Not Allow Phone</label>
								<div class="select1">
									<input type="checkbox" value="1" name="do_not_allow_phone" id="do_not_allow_phone" <?=!empty($donotAllowPhone) ? 'checked' : '';?> Placeholder="Do Not Allow Phone" >
								</div>
							</div>
							
							<div class="three">
								<label>Do Not Allow Fax</label>
								<div class="select1">
									<input type="checkbox" value="1" name="do_not_allow_fax" id="do_not_allow_fax" <?=!empty($donotAllowFaxes) ? 'checked' : '';?> Placeholder="Do Not Allow Fax" >
								</div>
							</div>
							
							<div class="three">
								<label>Send Marketting Materials</label>
								<div class="select1">
									<input type="checkbox" value="1" name="send_marketing_material" id="send_marketing_material" <?=!empty($sendMarketingMaterials) ? 'checked' : '';?> Placeholder="Send Marketting Materials" >
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
								<input type="text" value="<?=$creditLimit;?>" name="credit_limit" id="credit_limit" Placeholder="Credit Limit " >
							</div>
						</div>
						<div class="half">
							
							<label>Annual Revenue</label>
							<div class="select1">
								<input type="text" value="<?=$annualRevenue;?>" name="annual_revenue" id="annual_revenue" Placeholder="Annual Revenue" >
							</div>
						</div>
					</div>
					<div class="form-row half">
						<div class="half">
							<label>Parent Account Number</label>
							<div class="select1">
								<input type="text" value="<?=$parentAccount;?>" name="parent_account_number" id="parent_account_number" Placeholder="Parent Account Number " >
							</div>
						</div>
						<div class="half">
							<label>Lead Salesperson<em>*</em></label>
							<div class="select1">
								<select id="lead_salescontact" name="lead_salescontact" data-parsley-required="true">
									<option value="">Select Salesperson</option>
									<?php
										echo salespersonList($originatingLead);
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
										echo getQuoteHeaderLookUp('division_to_wtclass',$division);
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
										echo getQuoteHeaderLookUp('territory',$territory);
									?>
								</select>
							</div>
						</div>
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

	<!-- Add new contact details Popup Modal (22-08-2017)-->
	<div class="md-modal md-effect-1" id="contact-new-modal" data-backdrop="static" data-keyboard="false">
		<div class="md-content">
			<div class="pop-main-cont">
				<div class="pop-header">
					<h2>Add New Contact :</h2>
					<button class="md-close" data-dismiss="modal">
						<i class="fa fa-times" aria-hidden="true"></i>
					</button>
				</div>
		<div class="pop-body cf">
		<div id="new-contact-alert-message" class="contact-popup-form-alert-error-msg"></div>
		
		<?php
			echo form_open('', array('class'=>'form-row ','id'=>'contact_form','data-parsley-validate'=>'data-parsley-validate','enctype'=>'multipart/form-data'));
		?>
		<div class="row">
			
			<div class=" half">
				
				<div class="half">
					<div class="half">
						<label>Contact Type<em >*</em> </label>
						<div class="select1">
							<select id="contact_type" name="contact_type" data-parsley-required="true" data-parsley-required-message="Select Contact Type">
								<option value="">Select</option>
								<?=getQuoteHeaderLookUp('contact_type');?>
							</select>
						</div>
					</div>
					<div class="half">
						<label>Lead Source </label>
						<div class="select1">
							<select id="lead_source" name="lead_source" >
								<option value="">Select</option>
								<?=getQuoteHeaderLookUp('lead_source');?>
							</select>
						</div>
					</div>
				</div>
				
				<div class="half ">
					<label id="customer-heading">Customer<em >*</em></label>
					<div class="select1">
						<input type="text" name="new_contact_customer" id="customer" Placeholder="Customer" data-parsley-required="true">
					</div>
				</div>
				
			</div>
			<div class="half">
				
				<div class="half">
					<div class="select1">
						<div class="three">
							<label>Salutation</label>
							<select id="contact_name_tile" name="contact_name_tile" style="width:70px;">
								<option value="Mr.">Mr.</option>
								<option value="Ms.">Ms.</option>
							</select>
						</div>
						<div class="seven">
							<label>First Name<em >*</em> </label>
							<input type="text" name="first_name" value="<?=set_value('first_name')?>" id="first_name" Placeholder="First Name" data-parsley-required="true" data-parsley-pattern="^[a-zA-Z]{1,50}$" data-parsley-pattern-message="Enter Valid First Name" class="clear-new-contact" maxlength="100"/>
						</div>
					</div>
				</div>
				
				<div class="half">
					<label>Last Name <em >*</em></label>
					<div class="select1">
						<input type="text" name="last_name" value="<?=set_value('last_name')?>" id="last_name" data-parsley-required="true" data-parsley-pattern="^[a-zA-Z]{1,50}$" data-parsley-pattern-message="Enter Valid last Name"  Placeholder="Last Name" class="clear-new-contact" maxlength="50"/>
					</div>
				</div>
				
			</div>
		</div>

		<div class="row">
			<div class="customer half">
				
				<div class="half">
					<label>Job Title </label>
					<div class="select1">
						<input type="text" name="job_title" value="<?=set_value('job_title')?>" id="job_title" Placeholder="Job Title" maxlength="100" class="clear-new-contact"/>
					</div>
				</div>
				
				<div class="half">
					<label>Business Phone<em >*</em></label>
					<div class="select1">
						<input type="text" name="business_phone" value="<?=set_value('business_phone')?>" id="business_phone" data-parsley-required="true" data-parsley-length="[10,12]" Placeholder="Business Phone"  maxlength="12" class="clear-new-contact"/>
					</div>
				</div>
				
			</div>
			
			<div class="customer half">
				
				<div class="half">
					<label>Mobile Phone</label>
					<div class="select1">
						<input type="text" name="mobile_phone" value="<?=set_value('mobile_phone')?>" id="mobile_phone" data-parsley-length="[10,12]" Placeholder="Mobile Phone"  maxlength="12" class="clear-new-contact"/>
					</div>
				</div>
				
				<div class="half">
					<label>Email <em >*</em></label>
					<div class="select1">
						<input type="email" name="new_contact_email" value="<?=set_value('new_contact_email')?>" id="new_contact_email" data-parsley-required="true"  Placeholder="Email" maxlength="100" class="clear-new-contact"/>
					</div>
				</div>
				
			</div>
			
		</div>
		
		<div class="row">
			<div class="form-row half">
				
				
				<div class="half">
					<label>Addressee </label>
					<div class="select1">
						<input type="text" name="new_contact_address" value="<?=set_value('new_contact_address')?>" id="new_contact_address" Placeholder="Addressee" maxlength="100" class="clear-new-contact"/>
					</div>
				</div>
				
				<div class="half">
					<label>Street 1 <em >*</em></label>
					<div class="select1">
						<input type="text" name="new_contact_street1" value="<?=set_value('new_contact_street1')?>" id="new_contact_street1" data-parsley-required="true" Placeholder="Street 1" maxlength="100" class="clear-new-contact"/>
					</div>
				</div>
			</div>
			<div class="form-row half">
				
				
				
				<div class="half">
					<label>Street 2 </label>
					<div class="select1">
						<input type="text" name="new_contact_street2" value="<?=set_value('new_contact_street2')?>" id="new_contact_street2" Placeholder="Street 2" maxlength="100" class="clear-new-contact"/>
					</div>
				</div>
				<div class="half">
					<label>Zip Code <em >*</em></label>
					<div class="select1">
						<input type="text" name="new_contact_zip" value="<?=set_value('new_contact_zip')?>" id="new_contact_zip" data-parsley-length="[3,20]" Placeholder="Zip Code" data-parsley-required="true" class="clear-new-contact"/>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="form-row half">
				
				<div class="half">
					<label>City <em >*</em></label>
					<div class="select1">
						<input type="text" name="new_contact_city" value="<?=set_value('new_contact_city')?>" id="new_contact_city" data-parsley-required="true" Placeholder="City" maxlength="100" class="clear-new-contact"/>
					</div>
					
				</div>
				<div class="half">
					<label>State/Province <em >*</em></label>
					<div class="select1">
						<input type="text" name="new_contact_state" value="<?=set_value('new_contact_state')?>" id="new_contact_state" data-parsley-required="true" Placeholder="State" maxlength="50" class="clear-new-contact"/>
					</div>
					
				</div>
				
			</div>
			
			<div class="form-row half">
				
				<div class="half">
					<label>Country </label>
					<div class="select1" id="country-list-html">
						<select id="new_contact_country" name="new_contact_country">
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
					<label>LinkedIn URL</label>
					<div class="select1">
						<input type="text" name="linkedin_url" value="<?=set_value('linkedin_url')?>" id="linkedin_url" Placeholder="LinkedIn URL" class="clear-new-contact"/>
					</div>
				</div>
				
			</div>
		
		</div>
		
		<div class="row">
			<div class="form-row half">
				
				<div class="one">
					<label>Notes</label>
					<div class="select1">
						<textarea name="notes" id="notes" placeholder="Notes"></textarea>
					</div>
				</div>
				
			</div>
			<div class="form-row half">
				<div class="one">
					<label>Fax</label>
					<div class="select1">
						<input type="text" name="fax" value="<?=set_value('fax')?>" id="fax" Placeholder="Fax" class="clear-new-contact"/>
					</div>
				</div>
				
				
			</div>
			
		</div>
		
		<div class="row">
			<div class="form-row half">
				
				<div class="half">
					<label>Division <em >*</em></label>
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
					<label>Salesperson <em>*</em></label>
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
			
			<div class="form-row half">
				<div class="select1 three ">
					<button type="button" class="save popup-new-contact-btn" id="addNewContactBtn">Submit</button>
				</div>
			</div>
		</div>
		
		
		<?=form_close()?>
		
		</div>
		</div>
	</div>
</div>	
	
	<div class="md-overlay"></div>
	<!-- model pop html code end -->
<?php
	$this->load->view('frontend/bottom');
?>
<script type="text/javascript">
	/* Making The Dropdown of customers Auto complete search */
	var select = false;
	$( "#customer" ).autocomplete({
		source: '<?=base_url('frontend/home/getCustomer')?>',
		open: function(event, ui) { if(select) select=false; },
		select: function (a, b) {
			select=true; 
			var customeInfo	= b.item.value;
			if(customeInfo !='No Record Found !'){
				$('#loader-on-customer-change').show('slow');
				$.post('<?=base_url('frontend/home/getCustomerByAccountId')?>',{'account':customeInfo},function (response){
					var data	= JSON.parse(response);
					$('#country-list-html').html('<select id="new_contact_country" name="new_contact_country"><option value="">None</option>></select>');
					if(data.addressCountry!=''){
						$('#country-list-html').html('<select id="new_contact_country" name="new_contact_country">'+data.addressCountry+'</select>');
					}
					$('#new_contact_street1').val(data.streetAddress);
					$('#new_contact_city').val(data.addressCity);
					$('#new_contact_state').val(data.addressState);
					$('#new_contact_zip').val(data.addressZipcode);
					$(".select1").find('select').selectBoxIt();
				});
				
			}
		}
	}).blur(function(){
		var cus	= $("#customer").val();
		if(!select || cus=='No Record Found !'){
			var oldCustomer 	= $('#customer-display-only').val();
			$("#customer").val(oldCustomer);
		}
	});
	
	
	
	/* Set validation for customer fields based on contact type (02-09-2017) */
	
	$(document).on('change','#contact_type',function (){
		var type	= this.value;
		if(type==1){
			$('#customer-heading').html('Customer ');
			$('#customer').removeAttr('data-parsley-required');
			$('#customer').parent().find('.parsley-errors-list').hide();
		}else{
			$('#customer').parent().find('.parsley-errors-list').show();
			$('#customer-heading').html('Customer <em>*</em>');
			$('#customer').attr('data-parsley-required','true');
		}
	});
	
	
	/* Set Validation rule for sage number */
	$(document).on('change','#relationship_type',function (){
		var relationType	= $(this).val();
		if(relationType!='' && relationType!=1){
			$('#tier_heading').html('Tier <em>*</em>');
			$.post('<?=base_url('frontend/crm/getTierValue')?>',{'relationType':relationType},function (response){
				var data	= JSON.parse(response);
				if(data.status=='Yes'){
					$('#change-tier-value-basis-on-relationtype').html(data.html);
				}
				$('#customer_form').parsley().isValid();
				$(".select1").find('select').selectBoxIt();
			});
		}else{
			$('#tier_heading').html('Tier');
			$('#change-tier-value-basis-on-relationtype').html('<select id="customer_pricing_tier" name="customer_pricing_tier" ><option value="">None</option></select>');
		}
		$(".select1").find('select').selectBoxIt();
	});
	
	/* Add more contact details (22-08-2017) */
	$(document).on('click','.add-more-contact',function (){
		var selectedCustomer	= $('#new_contact_customer').val();
		if(selectedCustomer!=''){
			$('#contact-new-modal').modal('show');
		}
		
	});
	/* Submit add new contact form */
	$(document).on('click','#addNewContactBtn',function (){
		var addBtnText	= $(this);
		$('#contact_form').parsley().validate();
		if ($('#contact_form').parsley().isValid()) {
			addBtnText.text('Processing....');
			$.post('<?=base_url('frontend/crm/addingNewContact')?>',$('#contact_form').serialize(), function (response){
				var data	= JSON.parse(response);
				if(data.status=='Yes'){
					$('.clear-new-contact').val('');
					var alterMessage	= '<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'+data.msg+'</p></div>';
					$('#alert-message').html(alterMessage);
					$('#contact-new-modal').modal('hide');
				}else{
					var alterMessage	= '<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>'+data.msg+'</div>';
					$('#new-contact-alert-message').html(alterMessage);
				}
				addBtnText.text('Submit');
			});
		}
	});
	
	/* Getting the city,state and state based on zipcode [Contact Form] */
	$(document).on('blur','#new_contact_zip',function (){
		var zipcode	= this.value;
		if(zipcode!=''){
			$.post('<?=base_url('frontend/crm/getFullAddressBasedOnZipcode')?>',{'zipcode':zipcode},function (response){
				var data= JSON.parse(response);
				if(data.city!=''){
					$('#new_contact_city').val(data.city);
				}
				if(data.state!=''){
					$('#new_contact_state').val(data.state);
				}
				var countryhtml	= '<select id="new_contact_country" name="new_contact_country"><option value="">Select Country</option>';
					countryhtml	+= data.country;
					countryhtml	+= '</select>';
				$('#country-list-html').html(countryhtml);
				$(".select1").find('select').selectBoxIt();
			});
		}
	});
	
	/* Getting the city,state and state based on zipcode [Customer Form] */
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
