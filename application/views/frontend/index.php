<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	$groupPermissions	= $this->group_permissions;
	if(empty($groupPermissions) || !in_array(1,$groupPermissions)){
		$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
		$this->session->set_flashdata('message',$message);
		redirect('dashboard');
	}
?>

<style>
	.quote_detail{
		    width: 20%;
		    float: right;
		    margin-top: 11px;
    }
	.ch-product{
		    color: white;
		    background-color: #003366;
		    border-color: #ddd;
	}
	label.ch-product{
		padding-left: 14px;
		padding-top: 5px;
	}
	table.qlist{
		border-spacing: 5px 0;
	}
	tr.border_bottom td {
	  border-bottom:1pt solid black;
	  border-collapse:collapse;
	}
	.form-group {
	    margin-bottom: 0px;
	}

</style>

<!-- Right Bar Section -->
	<div class="right-bar">
		<div class="form-section">
			<div class="row">
				<div class="col-sm-12 top-head">
					<h1 id="quoting-heading">Custom Net Quoting</h1>
					<a href="#" class="print">
					<span class="glyphicon glyphicon-print"></span> Print</a>
					<!--<a href="" class=" create_quote download"><i class="fa fa-file-excel-o" aria-hidden="true"></i> BOM</a>-->
					<a class="create_quote download_proposal" id="proposal_new_create" target="_blank" > <i aria-hidden="true" class="fa fa-download"></i> Proposal</a>
					<a class="create_quote add_new_item" id="add_new_item" style="display:none">Add New Item</a>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-6 inner-form" id="innerformdetails">
					<div id="alert-message"></div>
					<div class="form-group form-wrap">
						<?php
							echo form_open('', array('class'=>'form-row ','id'=>'index_form','data-parsley-validate'=>'data-parsley-validate'));
						?>
						<div class="panel panel-default">
						  <div class="panel-heading">  	
						  		<div class="panel-title pull-left">
						            <h5 style="color:white;">Quote Header</h5>
						         </div>
						        <div class="panel-title pull-right">
						        	<!-- <label class="proposal_no" style="color:white;">Proposal Number</label> -->
									<span class="select1" >
										<textarea id="edit_quote_description" name="edit_quote_description" style="display:none"></textarea>
											<input type="text" id="proposal_number" name="proposal_number" placeholder="Proposal Number" maxlength="32" data-parsley-pattern="^[a-zA-Z0-9- ]{12,32}$">
									</span>
						        </div>
						        <div class="clearfix"></div>
						  </div>
						  <div class="panel-body">
							<div class="row">
								<div class="customer form-row three">
									<label>Customer <em >*</em>
										<img src="<?=base_url('assets/front/images/plus.png')?>" class="add-more-customer">
									</label>
									<div class="select1">
										<input type="text" name="customer" id="customer" Placeholder="Customer" required>
									</div>
								</div>
								<div class="customer form-row three">
									<!-- <label>Opportunity </label>
									<div id="opportunity-select"  >
										<input type="text" class="new-opportunity" id="new-opportunity" name="opportunity" placeholder="Select">
										<select id="opportunity" class="custom-select" >
											<option value="">Select</option>
										</select>
									</div> -->
									<label>Contact <em>*</em>
										<img src="<?=base_url('assets/front/images/plus.png')?>" class="add-more-contact">
									</label>
										<div id="contact-select" class="select1" >
											<select id="contact" name="contact" data-parsley-required="true">
												<option value="">Select</option>
											</select>
										</div>
									<input type="hidden" name="old_quoteid" id="old_quoteid" value="" />
								</div>
								
								<div class="customer form-row three">
									<label>Salesperson <em >*</em></label>
										<div class="select1" id="salesperson-select">
											<select id="choose-sales" name="choose-sales" data-parsley-required="true">
												<option value="">Select</option>
											</select>
									</div>
								</div>

							</div>
						
							<div class="row">
								<div class="customer form-row three">
									
										
										<label>Choose Product <em >*</em></label>
										<div class="select1 adjusting-proposal">
											<select id="choose-product" class="changeCustom">
												<?php
													$this->user_name	= $this->session->userdata('frontendUserName');
													echo getProductType("$this->user_name",'custom_net');
												?>
											</select>
										</div>


								</div>
								<div class="form-row three">
										<label>WT Class <em >*</em></label>
										<div class="select1" id="wtclass-select">
											<select id="choose-wtclass" name="choose-wtclass" data-parsley-required="true">
												<option value="">Select</option>
											</select>
										</div>
								</div>
								<div class="form-row three product-net">
										<label>Lead Time </label>
										<div class="select1">
											<input type="text" name="lead-time" id="lead_time" Placeholder="Lead Time" list="option_lead">
											<datalist id="option_lead">
											<option>2-3 business days</option>
											<option>3-5 business days</option>
											<option>5-7 business days</option>
											<option>7-10 business days</option>
											<option>10-15 business days</option>
											<option>TBD</option>
											</datalist>
										</div>
								</div>
							</div>

							<div class="row ship_options_show">
								<p class="option_dis_title">Additional Options (Expand) <span class="glyphicon glyphicon-circle-arrow-down"></span></p>
								<p class="ship_options_display"></p>
							</div>

							<div id="ship_options" style="display:none" class="row well well-sm">	
								<div class="row">
									<div class="form-row half customer product-net">
										<label>Ship to Address/Description</label>
										<div id="contact-select" class="select1" >
											<textarea class="create-quote-ship-address" name="ship_to_address" id="ship_to_address" 
											placeholder="Ship to address"></textarea>
										</div>
									</div>
									<div class="form-row half customer product-net" style="margin-left: 10px;">
										<div class="form-row half">
											<label>Opportunity </label>
											<div id="opportunity-select"  >
												<input type="text" class="new-opportunity" id="new-opportunity" name="opportunity" placeholder="Select">
												<select id="opportunity" class="custom-select" >
													<option value="">Select</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>

						 </div>
						</div>
							<?=form_close()?>
						
					</div>
				
					<div class="" id="page_layout">
					</div>
				</div>

				<div class="col-xs-3 order-section">
					<h2>Final Quote</h2>
					<div class="scroll_div" id="profiding">
					</div>
					<div class="total" id="totalPrice">
					</div>
				</div>

				<div class="col-xs-3 quote_detail">
					<div class="panel panel-default">
						<div id="flip" class="panel-heading"> <h5 style="color:white;float:right;"> Items in Quote [ ] <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></h5> </div>
					  	<div id="panel" class="panel-body qlist" >
					  		<!-- <div class=""></div> -->
					  		<!-- <span id="b_title" style="font-weight:700;padding-bottom:5px;"></span>  
					  		<div class="blist"></div> -->
					  	</div>
					</div>
				</div>
			</div>

		</div>

		<div class="loading" style="float: right;
		    width: 20.7%;
		    background: #eff1f4;
		    height: 100%;
		    min-height: 600px;
		    position: fixed;
		    right: 0;
		    top: 0;
		    overflow: auto;
		    padding-bottom: 230px;display:none"> 
		</div>
	</div>
<div id="download" style="display:none"></div>
<!-- Right Bar Section -->
</section>
	<!-- model pop html code start -->
	<div class="md-modal md-effect-1" id="modal-2">
		<div class="md-content">
			<div class="pop-main-cont">
				<div class="pop-header">
					<h2>Update Item Info :</h2>
					<button class="md-close">
						<i class="fa fa-times" aria-hidden="true"></i>
					</button>
				</div>
                <div class="pop-body cf">
				<?php
				echo form_open('', array('class'=>'form-row ','id'=>'updateItemInfo'));
				?>
					<div class="row select-area">
						<div class="form-row first">
							<label>Item Code :</label>
							<input type="text" name="item_code" id="item_code" Placeholder="Item Code" maxlength="100"/>
						</div>
						<div class="form-row first">
							<label>Activity Code   : </label>
							<input type="text" name="activity_code" id="activity_code"  Placeholder="Activity Code" maxlength="12"/>
						</div>
					</div>

					<div class="row select-area">
						<div class="form-row first">
							<label>Activity UOM : </label>
							<div class="select1 select2" id="uom-select-popup-val">
								<select name="uom" id="uom" >
									<option value="">None</option>
								</select>
							</div>
						</div>
						
						<div class="form-row first">
							<label>Activity Rate : </label>
							<input type="text" name="activity_rate" id="activity_rate" Placeholder="Activity Rate" maxlength="50"/>
						</div>
					</div>

					<div class="row">
						<div class="form-row first update-area">
							<input type="button" value="Update" class="update-quote" id="updateItemCodeDetails" />
						</div>
					</div>
				<?=form_close()?>
                </div>
		</div>
	</div>
</div>	
	
	<div class="md-overlay"></div>
	<!-- model pop html code end -->
	
	<!-- Add new contact details Popup Modal (14-07-2017)-->
	<!-- Add new contact details Popup Modal (14-07-2017)-->
	<div class="md-modal md-effect-1" id="contact-new-modal">
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
							
							<div class="one">
								<div class="half">
									<label>Contact Type<em >*</em> </label>
									<div class="select1">
										<input type="hidden" name="new_contact_customer" id="new-popup-customer" >
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
										<input type="text" name="first_name" value="<?=set_value('first_name')?>" id="first_name" Placeholder="First Name" data-parsley-required="true" data-parsley-pattern="(?:[A-Za-z]+[ -])*[A-Za-z]+$" data-parsley-pattern-message="Enter Valid First Name" class="clear-new-contact" maxlength="100"/>
									</div>
								</div>
							</div>
							
							<div class="half">
								<label>Last Name <em >*</em></label>
								<div class="select1">
									<input type="text" name="last_name" value="<?=set_value('last_name')?>" id="last_name" data-parsley-required="true" data-parsley-pattern="(?:[A-Za-z]+[ -])*[A-Za-z]+$" data-parsley-pattern-message="Enter Valid last Name"  Placeholder="Last Name" class="clear-new-contact" maxlength="50"/>
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
											echo salesmanList();
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
	
	<!-- Add New Customer details Popup Modal (06-09-2017)-->
	<div class="md-modal md-effect-1 " id="customer-new-modal">
		<div class="md-content add-new-customer-create-quote-page">
			<div class="pop-main-cont">
				<div class="pop-header">
					<h2>Add New Customer :</h2>
					<button class="md-close" data-dismiss="modal">
						<i class="fa fa-times" aria-hidden="true"></i>
					</button>
				</div>
				<div class="pop-body cf">
				<?php
					echo form_open('', array('class'=>'form-row ','id'=>'add_more_customer_details','data-parsley-validate'=>'data-parsley-validate'));
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
							<label>Primary Contact </label>
							<div class="select1">
								<input type="text" value="<?=set_value('primary_contact');?>"  name="primary_contact" id="primary_contact" Placeholder="Primary Contact">
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
								<input type="text" value="<?=set_value('customer_phone')?>" name="customer_phone" id="customer_phone" Placeholder="Phone " data-parsley-required="true">
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
								<input type="text" value="<?=set_value('customer_zip_code')?>" name="customer_zip_code" data-parsley-length="[3,20]"  id="customer_zip_code" Placeholder="Zip Code " data-parsley-required="true" >
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
							<label id="tier_heading">Tier <em >*</em></label>
							<div class="select1" id="change-tier-value-basis-on-relationtype">
								<select id="customer_pricing_tier" name="customer_pricing_tier" data-parsley-required="true">
									<option value="">Select Tier</option>
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
							<label>Lead Salesperson <em>*</em></label>
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
				
				
				<div class="row">
					<div class="form-row three ">
						<button type="button" class="save" id="submitCustomerDetails">Submit</button>
					</div>
				</div>
				
				<?=form_close()?>
                </div>
		</div>
	</div>
</div>	
	
	<div class="md-overlay"></div>
	<!-- model pop html code end -->
	
	<!-- Show Sage warning Message model pop html code start -->
	<div class="md-modal md-effect-1 display-calculator" id="display-calculator">
		<div class="md-content ">
			<div class="pop-main-cont">
				<div class="pop-header">
					<h2 class="calculator">Calculate !</h2>
					<button class="md-close"><i class="fa fa-times" aria-hidden="true"></i></button>
				</div>
				<div class="pop-body">
				<?php
					echo form_open('',array('id'=>'calculation_form','class'=>'calculation_form','data-parsley-validate'=>'data-parsley-validate'));
				?>

				<div class="calculate-input">
				<label class="calcu-label" >Feet</label>
					<input type="text" id="feet" name="feet" placeholder="Feet" data-parsley-min="0" data-parsley-maxlength="4" data-parsley-type="digits">
				</div>
				<div class="calculate-input">
				<label class="calcu-label" >Inches</label>
					<input type="text" id="inches" name="inches" placeholder="Inches" data-parsley-maxlength="6" data-parsley-type="number">
					</div>
					<span class="calculate-value">=</span>
				<div class="calculate-input">
				<label class="calcu-label">Decimal Feet</label>
					<input type="text" id="calculate_value"  >
				</div>
					<button class="calculator-btn">Calculate</button>
				<?php
					form_close();
				?>
				</div>
			</div>
		</div>
	</div>

	
<?php
	$this->load->view('frontend/bottom');
?>
<script>
	
	$(document).ready(function(){
		
		/*$(".select1").find('select').selectBoxIt();*/
		
		/*For quote details div*/
		$("#flip").click(function(){
        	$("#panel").slideToggle("slow");
        	$("#bom_panel").slideUp("slow");
    	});

    	var quote_id=$("#old_quoteid").val();
		$.post('<?=base_url('frontend/home/QuoteSummary')?>',
			{'quoteID':quote_id},
			 function (response){
			 	var data	= JSON.parse(response);
			 	var no_product	= data.length;
			 	$('div#flip').html(' <h5 style="color:white;float:right;"> Items in Quote ['+no_product+'] <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></h5>');
			 	$('div.qlist').html('<table class="qlist"></table>');
			 	for (var i=0; i<data.length; i++) {
				    $('div.qlist table').append('<tr><td style="font-weight:600;width:34%;text-align:right">'+  data[i].product_type +'['+data[i].product+']  &nbsp;&nbsp;&nbsp;x' +  data[i].quantity   
				    										   + '  &nbsp;&nbsp;&nbsp;@$' +  data[i].totalcost + '</td></tr>');
				    $('div.qlist table').append('<tr class="border_bottom"><td style="text-align:left;padding-left: 13px;border-bottom: 1px solid #cfd1d2;">'+  data[i].quote_description +'</td></tr>')
				}
			 });
		$('div.quote_detail').hide();

		/*Quote details ends*/
		$("#bom_flip").click(function(){
        	$("#bom_panel").slideToggle("slow");
        	$("#panel").slideUp("slow");
    	});

		/*HIDDEN FOR NOW - For BOM details div*/
		$.post('<?=base_url('frontend/home/BOMSummary')?>',
			{'quoteID':quote_id},
			 function (response){
			 	var data = JSON.parse(response);
			 	var no_item = data.length;
			 	console.log(no_item);
			 	$('div#bom_flip').html('<h5 style="color:white;"> BOM<br> [Items-'+no_item+']</h5> <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>');
			 	$('div.blist').html('<table class="blist"><thead><th style="text-align:left;">Item #</th><th style="text-align:left;">Qty (UOM)</th></thead></table>');
			 	for (var i=0; i<data.length; i++) {
				    $('div.blist table').append('<tr><td style="font-weight:600;width:34%;text-align:left">'+ data[i].detail_itemcode +'</td><td style="text-align:right;">'+data[i].detail_quantity.toFixed(2)+'['+data[i].detail_uom+ '] </td></tr>');
				}
			 });

    	/*BOM details ends*/

    	/*Shipping options toggle event*/
    	$( ".ship_options_show" ).click(function() {
			$('#ship_options').slideToggle("slow");
		});

		$(document).ready(function(){
		    $('[data-toggle="tooltip"]').tooltip();   
		});


		var select = false;
		$( "#customer" ).autocomplete({
			source: '<?=base_url('frontend/home/getCustomer')?>',
			open: function(event, ui) { if(select) select=false; },
			select: function (a, b) {
				select=true; 
				changeDefaultValue(b.item.value);
			}
		}).blur(function(){
			var cus	= $("#customer").val();
			if(!select || cus=='No Record Found !'){
				$("#customer").val('');
				changeDefaultValue('');
			}
		});
		
		
		
		$('.changeCustom').change(function (){
			var page	= $(this).val();
			console.log(page);
			if(page=="cargo_net_(ergu3)"){page="cargo_net";}
			if(page=="custom_net_(ind)"){page="custom_net_industrial";}
			
			showpage(page);
		});
		/*========================================create quete for psn or net ====================*/
	function showpage(page)
	{	$('#page_layout').html('<div  style="float:left;position: relative;left: 0px;top: 0px;width: 100%;min-height: 100px; height:100%;z-index: 9999;background: url(<?=base_url()?>/assets/front/images/loading2.gif) 50% 50% no-repeat rgb(249,249,249);opacity: 8; "></div>');
			$.post('<?=base_url('frontend/home/getViewPage')?>',{'view':page,'csrf_test_name':'<?php echo $this->security->get_csrf_hash(); ?>'}, function (response){
				$('.right-bar').removeClass('final_quote');
				$('#profiding').html('');
				$('#page_layout').html(response);
				var quote_id=$("#old_quoteid").val();
				$(".order-section").hide();
				if(page=='custom_net'){
					$('#net_form').parsley().isValid();
					if(quote_id==''){
						$('#quoting-heading').text('Custom Net Quoting');
					}
				}
				if(page=='hardware'){
					$('#hardware_form').parsley().isValid();
					if(quote_id==''){
						$('#quoting-heading').text('Hardware Quoting');
					}
					addplusminus();
				}
				/* Saleskit Product */
				if(page=='saleskit'){
					$('#saleskit_form').parsley().isValid();
					if(quote_id==''){
						$('#quoting-heading').text('SalesKit Quoting');
					}
				}
				
				/* Rope Product (11-07-2017)*/
				if(page=='rope'){
					$('#rope_form').parsley().isValid();
					if(quote_id==''){
						$('#quoting-heading').text('Rope Quoting');
					}
				}
				
				/* Rope Product (17-07-2017)*/
				if(page=='sample_ts'){
					$('#samplet_form').parsley().isValid();
					if(quote_id==''){
						$('#quoting-heading').text('Sample TS Quoting');
					}
				}
				
				if(page=='custom_psn'){
					$('#psn_form').parsley().isValid();
					if(quote_id==''){
					$('#quoting-heading').text('Custom PSN Quoting');
						}
				}
				if(page=='lily_pad'){
					$('#lilypad_form').parsley().isValid();
					if(quote_id==''){
						$('#quoting-heading').text('Lily Pad Quoting');
					}
				}
				if(page=='baynets'){
					$('#baynet_form').parsley().isValid();
					if(quote_id==''){
						$('#quoting-heading').text('BayNets Quoting');
					}
				}
				if(page=='template'){
					$('#display-proposal-number').hide();
					$('#template_form').parsley().isValid();
					if(quote_id==''){
						$('#quoting-heading').text('Template Quoting');
					}
				}
				if(page=='netform'){
					$('#display-proposal-number').hide();
					$('#netform_form').parsley().isValid();
					if(quote_id==''){
						$('#quoting-heading').text('Netform Quoting');
					}
				}
				
				if(page=='rocbloc'){
					$('#display-proposal-number').hide();
					$('#roc_bloc_form').parsley().isValid();
					if(quote_id==''){
					$('#quoting-heading').text('RocBloc Quoting');
						}
				}
				if(page=='webnets'){
					$('#display-proposal-number').hide();
					$('#webnets_form').parsley().isValid();
					if(quote_id==''){
					$('#quoting-heading').text('Webnets Quoting');
						}
				}
				if(page=='cargo_net'){
					$('#display-proposal-number').hide();	
					$('#cargonet_form').parsley().isValid();
					if(quote_id==''){
						$('#quoting-heading').text('Cargo Nets Quoting');
					}
				}
				if(page=='skynets'){
					$('#display-proposal-number').hide();
					$('#skynets_form').parsley().isValid();
					if(quote_id==''){
						$('#quoting-heading').text('Skynets Quoting');
					}	
				}
				if(page=='cargo_climbing_net'){
					$('#display-proposal-number').hide();
					$('#cargoclimb_form').parsley().isValid();
					if(quote_id==''){
						$('#quoting-heading').text('Cargo Climbing Net Quoting');
					}
				}
				if(page=='write_in'){
					$('#display-proposal-number').hide();
					$('#writein_form').parsley().isValid();
					if(quote_id==''){
						$('#quoting-heading').text('Write In Quoting');
					}
				}
				
				
				$(".download").hide();
				$(".select1").find('select').selectBoxIt();
				$(".custom-select").customselect();
			});
	}
	showpage('custom_net');
	
		/*======================================== end function ==================================*/	
		/* Scroller JS  */
		(function($){
			$(window).on("load",function(){
				
				$(".order-section").mCustomScrollbar({
					autoHideScrollbar:true,
					theme:"rounded"
				});
				
			});
		})(jQuery);
	/* Scroller JS  */
	/* print page js */
      $(".print").click(function () {
            var mode = 'iframe'; 
            var close = mode == "popup";
            var options = { mode : mode, popClose : close};
            $(".wrepper").printArea( options );
        });
        /* print page js */
/* download quote details js */
	/*$(".right-bar").on("click",".download",function() {
		var n=$("#old_quoteid").val();
		$(".excel_download").table2excel({
			exclude: ".noExl",
			name: "quote details",
			filename: n,
			fileext: ".xls",
			exclude_img: true,
			exclude_links: true,
			exclude_inputs: true
		});
	});*/
  /* download quote details js */
});
function changeDefaultValue(cus){
	if(cus!='No Record Found !' && cus!=''){
		
		$.post('<?=base_url('frontend/home/getCustomerDefaults')?>',{'customer':cus,'csrf_test_name':'<?php echo $this->security->get_csrf_hash(); ?>'}, function (response){
			var data	= JSON.parse(response);
			if(response!=''){		
				$('#contact-select').html(data.contact);
				$('#salesperson-select').html(data.salesman);
				var salesPersonName	= $('#salesperson-select').find('option:selected').text();
				/* New cHanges */
					var salespersonNameArray	= salesPersonName.split(' ');
					var totalLength		= salespersonNameArray.length;
					var firstNameF		= salespersonNameArray[0].charAt(0);
					var lastNameF		= salespersonNameArray[parseInt(totalLength-1)].charAt(0);
					var salepersonF		= firstNameF+lastNameF;
					makeProposalNumber(salepersonF);
				/* */
				$('#opportunity-select').html(data.opportunity);
				$('#wtclass-select').html(data.wtclass);
				var wtclass	= $('#wtclass-select').find('option:selected').text();
				$('#lead_time').val(data.leadTime);
				$('#index_form').parsley().isValid();
				$(".select1").find('select').selectBoxIt();
				$(".custom-select").customselect();
				/*For IND product options*/
				GetProdOptions(wtclass);
			}
		});
	}
}


	/*------------------------add hardware --------------------------*/
	
	function addplusminus(){
		jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
	};
	
	/* Product Quantity Plus (17-07-2017)  */
	$(document).on('click','.quantity-up', function (){
		min = $(this).parent().parent().find('input').attr('min');max = $(this).parent().parent().find('input').attr('max');
		var oldValue	= $(this).parent().parent().find('input').val();
		var oldValue	= parseInt(oldValue);
		if (oldValue >= max) {
			var newVal = oldValue;
		} else {
			var newVal = parseInt(oldValue + 1);
		}
		$(this).parent().parent().find('input').val(newVal);
	});
	/* Product Quantity Minus (17-07-2017) */
	$(document).on('click','.quantity-down', function (){
		min = $(this).parent().parent().find('input').attr('min');max = $(this).parent().parent().find('input').attr('max');
		var oldValue	= $(this).parent().parent().find('input').val();
		var oldValue	= parseInt(oldValue);
		if (oldValue <= min) {
			var newVal = oldValue;
		} else {
			var newVal = parseInt(oldValue - 1);
		}
		$(this).parent().parent().find('input').val(newVal);
	});
	
	
	$('#page_layout').on('click','.add-hardware-row',function() {
		
		/*
		$(this).removeClass('add-hardware-row');
		$(this).addClass('remove-hardware-row');
		$(this).html('<img src="<?=base_url('assets/front/images/minus.png')?>" alt="plus">');
		*/
		
		var html='<div class="add-item hardware-product-list"><div class="form-row half"><div class="item-number "><select data-parsley-required="true" id="hw_item" name="hw_item[]" class="custom-select" ><?=getpopulateHardware();?></select></div>';
		html +='</div><div class="form-row half"><div class="form-row three"><div class="quantity"><input type="number" name="hw_qty[]" min="0"  step="0" value="0" data-parsley-required="true"></div></div><div class="form-row three"><input type="text" name="old_calculator[]" id="old_calculator"  data-parsley-type="number" data-parsley-max="50000000" data-parsley-maxlength="11"  value=""   /></div><div class="form-row three"><input type="text" name="price_override[]" id="price_override" data-parsley-type="number" data-parsley-max="50000000" data-parsley-maxlength="11"  value=""   /></div></div>';
		html +='<a href="javascript:void(0)" class="add-hardware-row"><img src="<?=base_url('assets/front/images/plus.png')?>" alt="plus"></a><a href="javascript:void(0)" class="remove-hardware-row"><img src="<?=base_url('assets/front/images/minus.png')?>" alt="minus"></a></div>';
		$('.add-item:last').after(html);
		
		$('#hardware_form').parsley().isValid();
		$(".custom-select").customselect();
		addplusminus();
	});

	$('#page_layout').on('click','.remove-hardware-row',function() {
		var inputNo	= $('.quantity input').length;
		if(inputNo > 1){
			$(this).parent().remove();
		}else{
			alert("Last item can't be deleted");
		}
	});
	
	$('#lead_time').on('click', function() {
		$(this).val('');
	});

	$('.right-bar').on('click','#saveCalculatehardware', function (){
		$(window).off('beforeunload');
		$('#index_form').parsley().validate();
		$('#hardware_form').parsley().validate();
		var id=$(this);
			if ($('#hardware_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				var total	= 0;
				$.post('<?=base_url('frontend/home/savehardwarequote')?>',
				$('#index_form,#hardware_form').serialize(),
				function (response){
					var data	= JSON.parse(response);
					if(data.error!=''){
						alert(data.error);
					}else{
						id.hide();
						var baseurl	= '<?=base_url('download/')?>'; 
						var downloadurl	= baseurl+'/'+data.html;
						$("#proposal_new_create").attr('href',downloadurl);
						
						$(".order-section").show();
						$("#old_quoteid").val(data.html);
						$("#quoting-heading").html('Proposal ID : '+data.proposalNumber);
						$("#proposal_number").val(data.proposalNumber);
						$("#index_form").hide();
						$(".download").show();
						/* Changes 01-08-2017 */
						$(".download").attr('data-new-quote',data.html);
						$(".download").attr('data-new-proposal',data.proposalNumber);
						/* Changes 01-08-2017 */
						$(".download_proposal").show();
						$("#add_new_item").attr('href','<?=base_url('addnewitem')?>'+'/'+data.html);
						$("#add_new_item").show();
						alert('Quote is successfully saved');
						$('div.quote_detail').show();
							quoteDisplay();
					}
				});
			}
	});
	
	$('#page_layout').on('click','#savehardwareQuote', function (){
		check_beforeLeave();
		$('#index_form').parsley().validate();
		$('#hardware_form').parsley().validate();
		var id=$(this);
			if ($('#hardware_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				var total	= 0;
				$.post('<?=base_url('frontend/home/calculatehardwarequote')?>',
				$('#index_form,#hardware_form').serialize(),
				function (response){
					var data	= JSON.parse(response);
					if(data.error==''){
						if(data.html!=''){
							$(".order-section").show();
							var d=data.html;
							d=d.split('*');
							$('#profiding').html(d[0]);
							$('#totalPrice').html(d[1]);
							$('#download').html(d[2]);
							
							id.text('Review Quote');
							$('.right-bar').addClass('final_quote');
						}else{
							alert("Sorry we are not getting any data");
							}
					}else{
						alert(data.error);
					}
				});
			}
	});
	/*------------------------add hardware --------------------------*/
	/*------------------------Start Samplet --------------------------*/
	$('#page_layout').on('click','.add-samplet-row',function() {
		/*$(this).removeClass('add-samplet-row');
		$(this).addClass('remove-samplet-row');
		$(this).html('<img src="<?=base_url('assets/front/images/minus.png')?>" alt="plus">');
		*/
		var html='<div class="add-item"><div class="item-number "><select data-parsley-required="true"  name="samplet_item[]" class="custom-select"><?=getPopulateSamplet();?></select>';
		html +='</div><div class="quantity"><input type="number" data-parsley-required="true" min="0" step="0" value="0" name="samplet_qty[]"></div><a href="javascript:void(0)" class="add-samplet-row"><img src="<?=base_url('assets/front/images/plus.png')?>" alt="plus"></a><a href="javascript:void(0)" class="remove-samplet-row"><img src="<?=base_url('assets/front/images/minus.png')?>" alt="minus"></a></div>';
		$('.add-item:last').after(html);
		$('#samplet_form').parsley().isValid();
		$(".custom-select").customselect();
		addplusminus();
	});

	$('#page_layout').on('click','.remove-samplet-row',function() {
		var inputNo	= $('.quantity input').length;
		if(inputNo > 1){
			$(this).parent().remove();
		}else{
			alert("Last item can't be deleted");
		}
		
	});

	$('.right-bar').on('click','#saveSampletQuote', function (){
		$(window).off('beforeunload');
		$('#index_form').parsley().validate();
		$('#samplet_form').parsley().validate();
		var id=$(this);
			if ($('#samplet_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				var total	= 0;
				$.post('<?=base_url('frontend/home/saveSampletQuote')?>',
				$('#index_form,#samplet_form').serialize(),
				function (response){
					var data	= JSON.parse(response);
					if(data.error!=''){
						alert(data.error);
					}else{
						id.hide();
						var baseurl	= '<?=base_url('download/')?>'; 
						var downloadurl	= baseurl+'/'+data.html;
						$("#proposal_new_create").attr('href',downloadurl);
						$(".order-section").show();
						$("#old_quoteid").val(data.html);
						$("#quoting-heading").html('Proposal ID : '+data.proposalNumber);
						$("#proposal_number").val(data.proposalNumber);
						$("#index_form").hide();
						$(".download").show();
						/* Changes 01-08-2017 */
						$(".download").attr('data-new-quote',data.html);
						$(".download").attr('data-new-proposal',data.proposalNumber);
						/* Changes 01-08-2017 */
						$(".download_proposal").show();
						$("#add_new_item").attr('href','<?=base_url('addnewitem')?>'+'/'+data.html);
						$("#add_new_item").show();
						alert('Quote is successfully saved');
						$('div.quote_detail').show();
							quoteDisplay();
					}
				});
			}
	});
	
	$('#page_layout').on('click','#calculateSampletQuote', function (){
		check_beforeLeave();
		$('#index_form').parsley().validate();
		$('#samplet_form').parsley().validate();
		var id=$(this);
			if ($('#samplet_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				var total	= 0;
				$.post('<?=base_url('frontend/home/calculateSampletQuote')?>',
				$('#index_form,#samplet_form').serialize(),
				function (response){
					var data	= JSON.parse(response);
					if(data.error==''){
						if(data.html!=''){
							$(".order-section").show();
							var d=data.html;
							d=d.split('*');
							$('#profiding').html(d[0]);
							$('#totalPrice').html(d[1]);
							$('#download').html(d[2]);
							
							id.text('Review Quote');
							$('.right-bar').addClass('final_quote');
						}else{
							alert("Sorry we are not getting any data");
							}
					}else{
						alert(data.error);
					}
				});
			}
	});
	/*------------------------End samplet --------------------------*/
	
	
	
	/*------------------------add saleskit --------------------------*/
	
	/* Geting saleskit product options */
	
	$(document).on('change','#saleskit_product',function (){
		var product	= this.value;
		$.post('<?=base_url('frontend/home/getSaleskitProductOptions')?>',{'product':product,'type':'all','name':'saleskit','var_name':'saleskit'},function (response){
			$('#option-value').html(response);
		});
	});



	$('.right-bar').on('click','#saveCalculateSaleskit', function (){
		$(window).off('beforeunload');
		$('#index_form').parsley().validate();
		$('#saleskit_form').parsley().validate();
		var id=$(this);
			if ($('#saleskit_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				var total	= 0;
				$.post('<?=base_url('frontend/home/saveSaleskitQuote')?>',
				$('#index_form,#saleskit_form').serialize(),
				function (response){
					var data	= JSON.parse(response);
					if(data.error!=''){
						alert(data.error);
					}else{
						id.hide();
						var baseurl	= '<?=base_url('download/')?>'; 
						var downloadurl	= baseurl+'/'+data.html;
						$("#proposal_new_create").attr('href',downloadurl);
						$(".order-section").show();
						$("#old_quoteid").val(data.html);
						$("#quoting-heading").html('Proposal ID : '+data.proposalNumber);
						
						$("#proposal_number").val(data.proposalNumber);
						$("#index_form").hide();
						$(".download").show();
						/* Changes 01-08-2017 */
						$(".download").attr('data-new-quote',data.html);
						$(".download").attr('data-new-proposal',data.proposalNumber);
						/* Changes 01-08-2017 */
						$(".download_proposal").show();
						$("#add_new_item").attr('href','<?=base_url('addnewitem')?>'+'/'+data.html);
						$("#add_new_item").show();
						clearQuoteDescriptionAfterSaving();
						alert('Quote is successfully saved');
						$('div.quote_detail').show();
							quoteDisplay();
					}
				});
			}
	});
	
	$('#page_layout').on('click','#calculateSalesKitQuote', function (){
		check_beforeLeave();
		$('#index_form').parsley().validate();
		$('#saleskit_form').parsley().validate();
		var id=$(this);
			if ($('#saleskit_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				var total	= 0;
				$.post('<?=base_url('frontend/home/calculateSaleskitQuote')?>',
				$('#index_form,#saleskit_form').serialize(),
				function (response){
					var data	= JSON.parse(response);
					if(data.error==''){
						if(data.html!=''){
							$(".order-section").show();
							var d=data.html;
							d=d.split('*');
							$('#profiding').html(d[0]);
							$('#totalPrice').html(d[1]);
							$('#download').html(d[2]);
							id.text('Review Quote');
							$('.right-bar').addClass('final_quote');
						}else{
							alert("Sorry we are not getting any data");
						}
					}else{
						alert(data.error);
					}
				});
			}
	});
	/*------------------------add saleskit --------------------------*/
	
	
	
	/*------------------------add baynets --------------------------*/
	$('.right-bar').on('click','#savebaynetQuote', function (){
		$(window).off('beforeunload');
		$('#index_form').parsley().validate();
		$('#baynet_form').parsley().validate();
		var id=$(this);
			if ($('#baynet_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				var total	= 0;
				$.post('<?=base_url('frontend/home/savebaynetQuote')?>',
				$('#index_form,#baynet_form').serialize(),
				function (response){
					var data	= JSON.parse(response);
					if(data.error==''){
						if(data.html!=''){
							id.hide();
							var baseurl	= '<?=base_url('download/')?>'; 
							var downloadurl	= baseurl+'/'+data.html;
							$("#proposal_new_create").attr('href',downloadurl);
							$(".order-section").show();
							$("#old_quoteid").val(data.html);
							$("#quoting-heading").html('Proposal ID : '+data.proposalNumber);
							$("#proposal_number").val(data.proposalNumber);
							$("#index_form").hide();
							$(".download").show();
							/* Changes 01-08-2017 */
							$(".download").attr('data-new-quote',data.html);
							$(".download").attr('data-new-proposal',data.proposalNumber);
							/* Changes 01-08-2017 */
							$(".download_proposal").show();
							$("#add_new_item").attr('href','<?=base_url('addnewitem')?>'+'/'+data.html);
							$("#add_new_item").show();
							clearQuoteDescriptionAfterSaving();
							alert('Quote is successfully saved');
							$('div.quote_detail').show();
							quoteDisplay();
						}
					}else{
						alert(data.error);
					}
				});
			}
	});

	$('#page_layout').on('click','#calculatebayQuote', function (){
		check_beforeLeave();
		$('#index_form').parsley().validate();
		$('#baynet_form').parsley().validate();
		var id=$(this);
			if ($('#baynet_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				var total	= 0;
				$.post('<?=base_url('frontend/home/baynetQuote')?>',
				$('#index_form,#baynet_form').serialize(),
				function (response){
					var data	= JSON.parse(response);
					if(data.error==''){
						if(data.html!=''){
							$(".order-section").show();
							var d=data.html;
							d=d.split('*');
							$('#profiding').html(d[0]);
							$('#totalPrice').html(d[1]);
							$('#download').html(d[2]);
							id.text('Review Quote');
							$('.right-bar').addClass('final_quote');
						}
					}else{
						alert(data.error);
					}
				});
			}
	});
	
	/*------------------------end baynets --------------------------*/
	/*------------------------add custom net --------------------------*/
		$("#page_layout").on('change','#borderoption',function (){
			var net_border	= $(this).val();
			if(net_border!=''){
				$.post('<?=base_url('frontend/home/populateThreadlist')?>',{'keyword':net_border,'csrf_test_name':'<?php echo $this->security->get_csrf_hash(); ?>'},function (response){
					$('#threaddiv').html(response);
					$('#net_form').parsley().isValid();
					/*$(".select1").find('select').selectBoxIt();*/
					$(".custom-select").customselect();
				});
			}
			
			populate_cuttingstyle();
		});
		
		$('#page_layout').on('change','#nettingtype_customnet',function (){
			wt = $("#choose-wtclass").find('option:selected').text();
			ptype = $("#choose-product").find('option:selected').text();
			populate_productlist(null, ptype, wt);
		});
		
		$('#page_layout').on('select','#nettingtype_customnet',function (){
			wt = $("#choose-wtclass").find('option:selected').text();
			ptype = $("#choose-product").find('option:selected').text();
			populate_productlist(null, ptype, wt);
		});
		
		$('#page_layout').on('change','#borderoption2',function (){
			populate_cuttingstyle();
		});

	
	function populate_productlist(search=null, ptype=null, wt=null){
		var search		= $('#nettingtype_customnet').val();
		var net_type	= 'net';
		populateProductOptions(search,net_type,'first-select', ptype, wt);
		
		
		var border_type1 =  'sewnborder';
		populateProductOptions(search,border_type1,'second-select',ptype,wt);
		
		
		var border_type2 =  'wovenborder';
		populateProductOptions(search,border_type2,'third-select',ptype,wt);
		
		
		
		var border_type3 =  'rolledgoods';
		populateProductOptions(search,border_type3,'fourth-select',ptype,wt);
		
		
		var addon_type =  'addon';
			populateProductOptions(search,addon_type,'addons',ptype,wt);
			populate_cuttingstyle();
	}
	
	function populateProductOptions(product,type,id, ptype=null, wt=null){
		var varibale_id		= $("#"+id).attr('alt-data');
		var varibale_name	= $("#"+id).attr('alt-name');
		if(type=='Rope' && id=='vertical-rope-type'){
			varibale_id		= 'v';
			varibale_name	= 'vertical_rope_type[]';
		}
		if(type=='Rope' && id=='horizontal-rope-type'){
			varibale_id		= 'h';
			varibale_name	= 'horizontal_rope_type[]';
		}
		if(type=='Termination' && id=='terminal-top'){
			varibale_id		= 'vtt';
			varibale_name	= 'termination_top[]';
		}
		if(type=='Termination' && id=='terminal-bottom'){
			varibale_id		= 'vtb';
			varibale_name	= 'termination_bottom[]';
		}
		if(type=='Termination' && id=='horizontal-terminal-top'){
			varibale_id		= 'htt';
			varibale_name	= 'horizontal_termination_top[]';
		}
		if(type=='Termination' && id=='horizontal-terminal-bottom'){
			varibale_id		= 'htb';
			varibale_name	= 'horizontal_termination_bottom[]';
		}
		if(product!='' && type!=''){
			$.post('<?=base_url('frontend/home/populateProductOptions')?>',
			{'product':product,'ptype':ptype, 'type':type, 'wt':wt, 'var_name':varibale_id, 'name':varibale_name,'csrf_test_name':'<?php echo $this->security->get_csrf_hash(); ?>'},
			 function (response){
				if(type=='sewnborder'){
					$('#'+id).html(response);
					populate_threadlist();
					$('#net_form').parsley().isValid();
					/*$(".select1").find('select').selectBoxIt();*/
					$(".custom-select").customselect();
					
				}else if(type=='Rope'){
					$('.'+id).html(response);
					if(id=='horizontal-rope-type'){
					$( "#horizontals_div").find('select').first().attr('data-parsley-required','true');
					}
					if(id=='vertical-rope-type'){
					$( "#verticals_div").find('select').first().attr('data-parsley-required','true');
					}
					$('#netform_form').parsley().isValid();
					/*$(".select1").find('select').selectBoxIt();*/
					$(".custom-select").customselect();
				}else if(type=='Termination'){
					$('.'+id).html(response);
					$( '.'+id).find('select').addClass('custom-select');
					$('#netform_form').parsley().isValid();
					$(".custom-select").customselect();
				}else{
					$('#'+id).html(response);
					$('#net_form').parsley().isValid();
					/*$(".select1").find('select').selectBoxIt();*/
					$(".custom-select").customselect();
				}
			});
		}
	}
	

	
	function populate_threadlist(){
		var net_border	= document.getElementById('borderoption').value;
		if(net_border!=''){
			$.post('<?=base_url('frontend/home/populateThreadlist')?>',{'keyword':net_border,'csrf_test_name':'<?php echo $this->security->get_csrf_hash(); ?>'},function (response){
				$('#threaddiv').html(response);
				$('#net_form').parsley().isValid();
				/*$(".select1").find('select').selectBoxIt();*/
				$(".custom-select").customselect();
			});
		}
	}
	
	function populate_cuttingstyle(){
		var net_product	= $('#nettingtype_customnet').val();
		
		var net_border	= $('#borderoption').val();
		var net_border2	= $('#borderoption2').val();
		var dropdown	= $('#cuttingstyle').val();
		var html	='<select id="cuttingstyle"  name="cut_style" data-parsley-required="true" data-parsley-required-message="Select Cutting Style First">';
		var number	= '';
		if (net_product.indexOf("BD") != -1) {
			number=1;
		} else if (net_border != "None" && net_border != "") {
			number=1;
		} else if (net_border2 != "None"){
			number=2;
		} else {
			number=2;
		}
		
		var populatedCutting	= '';
		$.post('<?=base_url('frontend/home/getCuttingStyleChangesOnProduct')?>',{'number':number,'csrf_test_name':'<?php echo $this->security->get_csrf_hash(); ?>'},function (response){
			populatedCutting	= response;
			$('#cutting-select').html(html+populatedCutting+'</select>');
			$(".select1").find('select').selectBoxIt();
		});
		
		
		
		$('#net_form').parsley().isValid();
		$(".select1").find('select').selectBoxIt();
	}


	function populate_productspec(){
		var search = document.getElementById('coloroption').value;
		if(search!=''){
			$.post('<?=base_url('frontend/home/getProductSpecification')?>',{'keyword':search,'csrf_test_name':'<?php echo $this->security->get_csrf_hash(); ?>'},function (response){
				$('#netprodspec').html(response);
			});
		}
		
	}

	function quoteDisplay(){
			var quote_id=$("#old_quoteid").val();
			$.post('<?=base_url('frontend/home/QuoteSummary')?>',
				{'quoteID':quote_id},
				 function (response){
				 	var data	= JSON.parse(response);

				 	var no_product	= data.length;
				 	$('div#flip').html(' <h5 style="color:white;"> Items in Quote ['+no_product+'] <span style="color:white;float:right;" class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></h5>');
				 	$('div.qlist').html('<table class="qlist"></table>');
				 	for (var i=0; i<data.length; i++) {

				 		var quote_id = data[i].quote_id;
				 		var quoteline = data[i].quote_line_no;
				 		var product_type = data[i].product_type;
				 		var proposal_no = data[i].proposal_num;
				 		var quote_status = data[i].quote_status;
				 		var editquote = quote_id +'_'+quoteline+'_'+product_type+'_'+proposal_no+'_'+quote_status;
				 		editquote = btoa(editquote);
				 		var href_link = '<?=base_url()?>editquote/'+editquote;

				 		var desc = data[i].quote_description;
				 		var desc = desc.split(";").join("<br>");

				 		console.log(desc);
				 		
					    $('div.qlist table').append('<tr><td style="font-weight:600;width:34%;text-align:left;padding-top:10px;"><a href="'+href_link+'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>'+  data[i].product_type +'['+data[i].product+']  &nbsp;&nbsp;&nbsp;x' +  data[i].quantity   
					    										   + '  &nbsp;&nbsp;&nbsp;@$' +  data[i].totalcost.toFixed(2) + '</a></td></tr>');
					    $('div.qlist table').append('<tr class="border_bottom"><td style="text-align:left;padding-left: 13px;padding-top:10px;border-bottom: 1px solid #cfd1d2;">'+ desc +'</td></tr>')
					}
				 });
		}

	$('.right-bar').on('click','#saveQuote', function (){
		$(window).off('beforeunload');
		$('#index_form').parsley().validate();
		$('#net_form').parsley().validate();
		/*For IND wtstatus of a product*/
		/*wtclass = $("#choose-wtclass").find('option:selected').text();
		console.log(wtclass);
		if(wtclass === "IND"){ var ind = 1;}*/

		var id=$(this);
			if ($('#net_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				var total	= 0;
				$.post('<?=base_url('frontend/home/saveQuote')?>',
				$('#index_form,#net_form').serialize(),
   			    function (response){
					var data	= JSON.parse(response);
					if(data.error==''){
						if(data.html!=''){
							id.hide();
							var baseurl	= '<?=base_url('download/')?>'; 
							var downloadurl	= baseurl+'/'+data.html;
							$("#proposal_new_create").attr('href',downloadurl);
							
							$(".order-section").show();
							$("#old_quoteid").val(data.html);
							$("#quoting-heading").html('Proposal ID : '+data.proposalNumber);
							$("#proposal_number").val(data.proposalNumber);
							$("#index_form").hide();
							$(".download").show();
							/* Changes 01-08-2017 */
							$(".download").attr('data-new-quote',data.html);
							$(".download").attr('data-new-proposal',data.proposalNumber);
							/* Changes 01-08-2017 */
							$(".download_proposal").show();
							$("#add_new_item").attr('href','<?=base_url('addnewitem')?>'+'/'+data.html);
							$("#add_new_item").show();
							clearQuoteDescriptionAfterSaving();
							alert('Quote is successfully saved');
							$('div.quote_detail').show();
							quoteDisplay();
						}
					}else{
						alert(data.error);
					}
				});
			}
	});

	$('#page_layout').on('click','#calculateCustomNetQuote', function (){
		check_beforeLeave();
		$('#index_form').parsley().validate();
		$('#net_form').parsley().validate();
		/*For IND wtstatus of a product*/
		/*wtclass = $("#choose-wtclass").find('option:selected').text();
		console.log(wtclass);
		if(wtclass === "IND"){ var ind = 1;}*/

		var id=$(this);
			if ($('#net_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				var total	= 0;
				$.post('<?=base_url('frontend/home/customNetQuote')?>',
				$('#index_form,#net_form').serialize(),
				function (response){
					var data	= JSON.parse(response);
					if(data.error==''){
						if(data.html!=''){
							$(".order-section").show();
							var d=data.html;
							d=d.split('*');
							$('#profiding').html(d[0]);
							$('#totalPrice').html(d[1]);
							$('#download').html(d[2]);
							
							id.text('Review Quote');
							$("#saveQuote").show();
							$('.right-bar').addClass('final_quote');
						}
					}else{
						alert(data.error);
					}
				});
			}
	});
	
	
	/* Add on Functionality */
	
	$('#page_layout').on('change','#addonption',function (){
		var val	= $(this).val();
		if(val==''||val=='None'){
			$('#addon-part-error-id').addClass('addon-part-error');
			$('#numberofaddons').removeAttr('data-parsley-required');
			$('#addonuom').removeAttr('data-parsley-required');
		}else{
			$('#addon-part-error-id').removeClass('addon-part-error');
			$('#numberofaddons').attr('data-parsley-required','true');
			$('#addonuom').attr('data-parsley-required','true');
		}
	});
	
	$('#page_layout').on('blur','#addlpart',function (){
		var val=$(this).val();
		if(val==''){
			$('#additional-part-error-id').addClass('additional-part-error');
			$('#addlcost').removeAttr('data-parsley-required');
			$('#addllabor').removeAttr('data-parsley-required');
		}else{
			$('#additional-part-error-id').removeClass('additional-part-error');
			$('#addlcost').attr('data-parsley-required','true');
			$('#addllabor').attr('data-parsley-required','true');
		}
	});
	/*------------------------add custom net --------------------------*/

	/*------------------------add custom psn --------------------------*/
	$('#page_layout').on('click','#psnQuoteCalucator', function (){
		check_beforeLeave();
		$('#psn_form').parsley().validate();
		$('#index_form').parsley().validate();
		var id=$(this);
		if ($('#psn_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				$.post('<?=base_url('frontend/home/getCustomPsnQuote')?>',
				$('#index_form,#psn_form').serialize(),
				function (response){
					var data	= JSON.parse(response);
					if(data.error!=''){
						alert(data.error);
					}else{
						var d=data.html;
						d=d.split('*');
						$(".order-section").show();
						$('#profiding').html(d[0]);
						$('#totalPrice').html(d[1]);
						$('#download').html(d[2]);
							
						$("#saveCalculatePsn").show();
						id.text('Review Quote');
						$('.right-bar').addClass('final_quote');
					}
				});
			
		}
	});
	
	$('.right-bar').on('click','#saveCalculatePsn', function (){
		$(window).off('beforeunload');
		$('#psn_form').parsley().validate();
		$('#index_form').parsley().validate();
		var id=$(this);
		if ($('#psn_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				$.post('<?=base_url('frontend/home/savePsnQuote')?>',
				$('#index_form,#psn_form').serialize(),
				function (response){
					var data	= JSON.parse(response);
					if(data.error!=''){
						alert(data.error);
					}else{
						id.hide();
						var baseurl	= '<?=base_url('download/')?>'; 
						var downloadurl	= baseurl+'/'+data.html;
						$("#proposal_new_create").attr('href',downloadurl);
						
						$(".order-section").show();
						$("#old_quoteid").val(data.html);
						$("#quoting-heading").html('Proposal ID : '+data.proposalNumber);
						$("#proposal_number").val(data.proposalNumber);
						$("#index_form").hide();
						$(".download").show();
						/* Changes 01-08-2017 */
						$(".download").attr('data-new-quote',data.html);
						$(".download").attr('data-new-proposal',data.proposalNumber);
						/* Changes 01-08-2017 */
						$(".download_proposal").show();
						$("#add_new_item").attr('href','<?=base_url('addnewitem')?>'+'/'+data.html);
						$("#add_new_item").show();
						clearQuoteDescriptionAfterSaving();
						alert('Quote is successfully saved');
						$('div.quote_detail').show();
							quoteDisplay();
					}
				});
			
		}
	});
	/*------------------------add custom psn --------------------------*/
	/*------------------------add lilypad --------------------------*/	
	$('#page_layout').on('change','#nettingtype_lilypad',function (){
		wt = $("#choose-wtclass").find('option:selected').text();
		ptype = $("#choose-product").find('option:selected').text();
		populate_productlistlilypad(null,ptype,wt);
	});
		
	function populate_productlistlilypad(search=null,ptype=null,wt=null){
		var search		= $('#nettingtype_lilypad').val();
		var net_type	= 'Rope';
		populateProductOptionslilypad(search,net_type,'first-select',ptype,wt);
		
		
		var border_type1 =  'CargoRope';
		populateProductOptionslilypad(search,border_type1,'second-select',ptype,wt);
		
		
		var border_type2 =  'Tee';
		populateProductOptionslilypad(search,border_type2,'third-select',ptype,wt);
		
		
		
		var border_type3 =  'Joint';
		populateProductOptionslilypad(search,border_type3,'fourth-select',ptype,wt);
		
		
		var addon_type =  'SpreaderBar';
		populateProductOptionslilypad(search,addon_type,'fifth-select',ptype,wt);

	}
	
	function populateProductOptionslilypad(product,type,id,ptype=null,wt=null){
		var varibale_id		= $("#"+id).attr('alt-data');
		var varibale_name	= $("#"+id).attr('alt-name');
		if(product!='' && type!=''){
			$.post('<?=base_url('frontend/home/populateProductOptions')?>',
			{'product':product,'ptype':ptype,'wt':wt, 'type':type,'var_name':varibale_id, 'name':varibale_name,'csrf_test_name':'<?php echo $this->security->get_csrf_hash(); ?>'},
			 function (response){
				
					$('#'+id).html(response);
					$('#lilypad_form').parsley().isValid();
					/*$(".select1").find('select').selectBoxIt();*/
					$(".custom-select").customselect();
			});
		}
	}
	
    
	
	$('.right-bar').on('click','#savelilypadQuote', function (){
		$(window).off('beforeunload');
		$('#index_form').parsley().validate();
		$('#lilypad_form').parsley().validate();
		var id=$(this);
			if ($('#lilypad_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				var total	= 0;
				$.post('<?=base_url('frontend/home/savelilypadQuote')?>',
				$('#index_form,#lilypad_form').serialize(),
				function (response){
					var data	= JSON.parse(response);
					if(data.error==''){
						if(data.html!=''){
							id.hide();
							var baseurl	= '<?=base_url('download/')?>'; 
							var downloadurl	= baseurl+'/'+data.html;
							$("#proposal_new_create").attr('href',downloadurl);
							
							$(".order-section").show();
							$("#old_quoteid").val(data.html);
							$("#quoting-heading").html('Proposal ID : '+data.proposalNumber);
							$("#proposal_number").val(data.proposalNumber);
							$("#index_form").hide();
							$(".download").show();
							/* Changes 01-08-2017 */
							$(".download").attr('data-new-quote',data.html);
							$(".download").attr('data-new-proposal',data.proposalNumber);
							/* Changes 01-08-2017 */
							$(".download_proposal").show();
							$("#add_new_item").attr('href','<?=base_url('addnewitem')?>'+'/'+data.html);
							$("#add_new_item").show();
							clearQuoteDescriptionAfterSaving();
							alert('Quote is successfully saved');
							$('div.quote_detail').show();
							quoteDisplay();
						}
					}else{
						alert(data.error);
					}
				});
			}
	});

	$('#page_layout').on('click','#calculatelilypadQuote', function (){
		check_beforeLeave();
		$('#index_form').parsley().validate();
		$('#lilypad_form').parsley().validate();
		var id=$(this);
			if ($('#lilypad_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				var total	= 0;
				$.post('<?=base_url('frontend/home/lilypadQuote')?>',
				$('#index_form,#lilypad_form').serialize(),
				function (response){
					var data	= JSON.parse(response);
					if(data.error==''){
						if(data.html!=''){
							$(".order-section").show();
							var d=data.html;
							d=d.split('*');
							$('#profiding').html(d[0]);
							$('#totalPrice').html(d[1]);
							$('#download').html(d[2]);
							/* Chnages (24-07-2017) */
							$('#edit_quote_description').val(d[3]);
							/* Chnages (24-07-2017) */
							id.text('Review Quote');
							$('.right-bar').addClass('final_quote');
						}
					}else{
						alert(data.error);
					}
				});
			}
	});
	/*------------------------add lilypad --------------------------*/

	/*------------------------add cargoclimb --------------------------*/
	function populate_productlistCCRN(){
		populateProductOptionsCCRN('[CCRN]','rope','main-select');
		populateProductOptionsCCRN('[CCRN]','thimble','first-select');
		populateProductOptionsCCRN('[CCRN]','hardware','second-select');
	}

	function populateProductOptionsCCRN(product,type,id){
		var wt = '';
		var varibale_id		= $("#"+id).attr('alt-data');
		var varibale_name	= $("#"+id).attr('alt-name');
		if(id=='main-select'){
			var varibale_id = "materialoption";
			var varibale_name = "net_material";
		}
		if(id=='first-select'){
			var varibale_id = "thimbleoption";
			var varibale_name = "net_thimble";
		}
		if(id=='second-select'){
			var varibale_id = "hardwareoption";
			var varibale_name = "net_hardware";
		}

	
		if(product!='' && type!=''){
			$.post('<?=base_url('frontend/home/populateProductOptions')?>',
			{'product':product, 'wt':wt, 'type':type,'var_name':varibale_id, 'name':varibale_name,
			'csrf_test_name':'<?php echo $this->security->get_csrf_hash(); ?>'},
			 function (response){
			 	  if(type=='rope'){
			 		    $('#main-select').html(response);
 					    $('#cargoclimb_form').parsley().isValid();
			 		    $(".custom-select").customselect();
					}
				  if(type=='thimble'){
			 		    $('#first-select').html(response);
 					    $('#cargoclimb_form').parsley().isValid();
			 		    $(".custom-select").customselect();
					}
				  if(type=='hardware'){
			 		    $('#second-select').html(response);
 					    $('#cargoclimb_form').parsley().isValid();
			 		    $(".custom-select").customselect();
					}
   			});
		}
	}
	
	var m_climb = 1;
	$('#page_layout').on('click','#calculatecclimbQuote', function (){
		check_beforeLeave();
		$('#index_form').parsley().validate();
		$('#cargoclimb_form').parsley().validate();
		var id=$(this);
			if ($('#cargoclimb_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				var total	= 0;
				$(".order-section").hide();
				if(m_climb==1){$(".form-section").css({"padding-right": "20.7%"});}
				m_climb=m_climb+1;
				$('.loading').html('<div  style="float:left;position: relative;left: 0px;top: 0px;width: 100%;min-height: 100px; height:100%;z-index: 9999;background: url(<?=base_url()?>/assets/front/images/loading2.gif) 50% 50% no-repeat rgb(249,249,249);opacity: 8; "></div>').fadeIn();

				$.post('<?=base_url('frontend/home/cclimbQuote')?>',
					$('#index_form,#cargoclimb_form').serialize(),
					function (response){ 
						$(".form-section").css({"padding-right": "0%"});
						$(".loading").fadeOut('fast');
						var data	= JSON.parse(response);
						if(data.error==''){
							if(data.html!=''){
								$(".order-section").show();
								var d=data.html;
								d=d.split('*');
								$('#profiding').html(d[0]);
								$('#totalPrice').html(d[1]);
								$('#download').html(d[2]);
								
								id.text('Review Quote');
														
								$('.right-bar').addClass('final_quote');
							}
						}else{
							alert(data.error);
						}
				});
			}
	});

	$('.right-bar').on('click','#savecclimbQuote', function (){
		$(window).off('beforeunload');
		$('#index_form').parsley().validate();
		$('#cargoclimb_form').parsley().validate();
		var id=$(this);
			if ($('#cargoclimb_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				var total	= 0;
				$.post('<?=base_url('frontend/home/savecclimbQuote')?>',
				$('#index_form,#cargoclimb_form').serialize(),
				function (response){
					var data	= JSON.parse(response);
					if(data.error==''){
						if(data.html!=''){
							id.hide();
							var baseurl	= '<?=base_url('download/')?>'; 
							var downloadurl	= baseurl+'/'+data.html;
							$("#proposal_new_create").attr('href',downloadurl);
							
							$(".order-section").show();
							$("#old_quoteid").val(data.html);
							$("#quoting-heading").html('Proposal ID : '+data.proposalNumber);
							$("#proposal_number").val(data.proposalNumber);
							$("#index_form").hide();
							$(".download").show();
							/* Changes 01-08-2017 */
							$(".download").attr('data-new-quote',data.html);
							$(".download").attr('data-new-proposal',data.proposalNumber);
							/* Changes 01-08-2017 */
							$(".download_proposal").show();
							$("#add_new_item").attr('href','<?=base_url('addnewitem')?>'+'/'+data.html);
							$("#add_new_item").show();
							alert('Quote is successfully saved');
							$('div.quote_detail').show();
							quoteDisplay();
						}
					}else{
						alert(data.error);
					}
				});
			}
	});
	/*------------------------add cargoclimb --------------------------*/


	/*------------------------add webnets --------------------------*/
	$( document ).ready(function() {
		
		$("#choose-product").change(function () {	
		$('#index_form').parsley().validate();		
			var va	= $(this).find('option:selected').text();
			if(va=='WebNets'){
				setTimeout(function(){ populate_productlistwnc(); }, 300);
			}
			if(va=='Cargo Climbing Net'){
				setTimeout(function(){
						setTimeout(function(){ populate_productlistCCRN(); },300);
					});
			}
		});
	});

	function populate_productlistwnc(){
				populateProductOptionswnc('[WNC]','webnet','zero-select');
				populateProductOptionswnc('[WNC]','grommet','second-select');
				populateProductOptionswnc('[WNC]','hardware','third-select');
	}

	function populate_threaddata(material=null){
		var material	= $('#materialoption').find('option:selected').text();
		if(material!='None'){
			var m_arr	= material.split(' ');
			var i_code = m_arr[0];
			
			var int_val = i_code.replace(/[^0-9]/g, '');
			if(int_val == 4500) {var w=1;} else{var w = int_val/100;}

			if(i_code=='WNY200BK' || i_code=='WNYS175BK'){$('#thread1').val('#138 Nylon [THNY138BK]');}
			else{$('#thread1').val('#138 Polyster [THPY138BK]');}		
			populateWebbingDetails(i_code);
		}
	
		$('#mesh_size').on('change', function() {
			    var m_size = $(this).find(":selected").val();
		 		var m_id = m_size - w;
				$('#mesh_id1').val(m_id);
		});

		var m_size = $('#mesh_size').val();
		var m_id = m_size-w;

		if(m_size!=0){	$('#mesh_id1').val(m_id);   }
		else {$('#mesh_id1').val('0');}
	}

	$(document).on('change','#materialoption',function (){
		populate_threaddata();
	});


	function populateWebbingDetails(itemcode){
		if(itemcode!=''){
			if(itemcode == 'WNY200BK'){		$('#web_detail').val('Webtensile 5000lbs & thickness 0.046in');   }
			if(itemcode == 'WNYS175BK'){	$('#web_detail').val('Webtensile 6000lbs & thickness 0.075in');   }
			if(itemcode == 'WPP200BK'){		$('#web_detail').val('Webtensile 1600lbs & thickness 0.06in');   }
			if(itemcode == 'WPP200RD'){		$('#web_detail').val('Webtensile 1600lbs & thickness 0.06in');   }
			if(itemcode == 'WPY100BK'){		$('#web_detail').val('Webtensile 730lbs & thickness 0.045in');   }
			if(itemcode == 'WPY100LB'){		$('#web_detail').val('Webtensile 4500lbs & thickness 0.075in');   }
			if(itemcode == 'WPY100OR'){		$('#web_detail').val('Webtensile 6000lbs & thickness 0.1in');   }
			if(itemcode == 'WPY100OR-WS'){		$('#web_detail').val('Webtensile 6000lbs & thickness 0.1in');   }
			if(itemcode == 'WPY150GN'){		$('#web_detail').val('Webtensile 6000lbs & thickness 0.077in');   }
			if(itemcode == 'WPY200BK'){		$('#web_detail').val('Webtensile 6000lbs & thickness 0.05in');   }
			if(itemcode == 'WPY4500BK'){		$('#web_detail').val('Webtensile 4500lbs & thickness 0.075in');   }
		}
	}	

	function populateProductOptionswnc(product,type,id){	
		var wt = '';
		var varibale_id		= $("#"+id).attr('alt-data');
		var varibale_name	= $("#"+id).attr('alt-name');
		if(id=='zero-select'){
			var varibale_id = "materialoption";
			var varibale_name = "net_material";
		}
		if(id=='second-select'){
			var varibale_id = "grommet";
			var varibale_name = "net_grommet";
		}
		if(id=='third-select'){
			var varibale_id = "hardware";
			var varibale_name = "net_corner";
		}
		if(product!='' && type!=''){
			$.post('<?=base_url('frontend/home/populateProductOptions')?>',
			{'product':product, 'wt':wt, 'type':type,'var_name':varibale_id, 'name':varibale_name,
			'csrf_test_name':'<?php echo $this->security->get_csrf_hash(); ?>'},
			 function (response){
					
			 	  	if(type=='webnet'){
			 		    $('#zero-select').html(response);
 					    $('#webnets_form').parsley().isValid();
			 		    $(".select1").find('select').selectBoxIt();
			 		    var mat = $('#materialoption').val(); 
			 		    populate_threaddata(mat);
					}
					if(type=='grommet'){
					    $('#second-select').html(response);
    				            $('#webnets_form').parsley().isValid();
					    $(".select1").find('select').selectBoxIt();
					}
					if(type=='hardware'){					
				 	    $('#third-select').html(response);
					    $('#webnets_form').parsley().isValid();
				 	    $(".select1").find('select').selectBoxIt();
					}
			});
		}
	}

	var m_wnet = 1;
	$('#page_layout').on('click','#calculatewebnetQuote', function (){
		check_beforeLeave();
		$('#index_form').parsley().validate();
		$('#webnets_form').parsley().validate();
		var id=$(this);
			if ($('#webnets_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				var total	= 0;
				$(".order-section").hide();
				if(m_wnet==1){$(".form-section").css({"padding-right": "20.7%"});}
				m_wnet=m_wnet+1;
				$('.loading').html('<div  style="float:left;position: relative;left: 0px;top: 0px;width: 100%;min-height: 100px; height:100%;z-index: 9999;background: url(<?=base_url()?>/assets/front/images/loading2.gif) 50% 50% no-repeat rgb(249,249,249);opacity: 8; "></div>').fadeIn();
				$.post('<?=base_url('frontend/home/webnetQuote')?>',
					$('#index_form,#webnets_form').serialize(),
					function (response){
						$(".form-section").css({"padding-right": "0%"});
						$(".loading").fadeOut('fast');
						var data	= JSON.parse(response);
						if(data.error==''){
							if(data.html!=''){
								$(".order-section").show();
								var d=data.html;
								d=d.split('*');
								$('#profiding').html(d[0]);
								$('#totalPrice').html(d[1]);
								$('#download').html(d[2]);
								
								id.text('Review Quote');
														
								$('.right-bar').addClass('final_quote');
							}
						}else{
							alert(data.error);
						}		
				});
			}
	});

	$('.right-bar').on('click','#savewebnetQuote', function (){
		$(window).off('beforeunload');
		$('#index_form').parsley().validate();
		$('#webnets_form').parsley().validate();
		var id=$(this);
			if ($('#webnets_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				var total	= 0;
				$.post('<?=base_url('frontend/home/savewebnetQuote')?>',
				$('#index_form,#webnets_form').serialize(),
				function (response){
					var data	= JSON.parse(response);
					if(data.error==''){
						if(data.html!=''){
							id.hide();
							var baseurl	= '<?=base_url('download/')?>'; 
							var downloadurl	= baseurl+'/'+data.html;
							$("#proposal_new_create").attr('href',downloadurl);
							
							$(".order-section").show();
							$("#old_quoteid").val(data.html);
							$("#quoting-heading").html('Proposal ID : '+data.proposalNumber);
							$("#proposal_number").val(data.proposalNumber);
							$("#index_form").hide();
							$(".download").show();
							/* Changes 01-08-2017 */
							$(".download").attr('data-new-quote',data.html);
							$(".download").attr('data-new-proposal',data.proposalNumber);
							/* Changes 01-08-2017 */
							$(".download_proposal").show();
							$("#add_new_item").attr('href','<?=base_url('addnewitem')?>'+'/'+data.html);
							$("#add_new_item").show();
							alert('Quote is successfully saved');
							$('div.quote_detail').show();
							quoteDisplay();
						}
					}else{
						alert(data.error);
					}
				});
			}
	});
    /*------------------------add skynets --------------------------*/
    var m_skynet = 1;
    $('#page_layout').on('click','#calculateskynetQuote', function (){
		check_beforeLeave();
		$('#index_form').parsley().validate();
		$('#skynets_form').parsley().validate();
		var id=$(this);
			if ($('#skynets_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				var total	= 0;
				$(".order-section").hide();
				if(m_skynet==1){$(".form-section").css({"padding-right": "20.7%"});}
				m_skynet=m_skynet+1;
				$('.loading').html('<div  style="float:left;position: relative;left: 0px;top: 0px;width: 100%;min-height: 100px; height:100%;z-index: 9999;background: url(<?=base_url()?>/assets/front/images/loading2.gif) 50% 50% no-repeat rgb(249,249,249);opacity: 8; "></div>').fadeIn();
				$.post('<?=base_url('frontend/home/skynetQuote')?>',
					$('#index_form,#skynets_form').serialize(),
					function (response){
						$(".form-section").css({"padding-right": "0%"});
						$(".loading").fadeOut('fast');
						var data	= JSON.parse(response);
						if(data.error==''){
							if(data.html!=''){
								$(".order-section").show();
								var d=data.html;
								d=d.split('*');
								$('#profiding').html(d[0]);
								$('#totalPrice').html(d[1]);
								$('#download').html(d[2]);
								
								id.text('Review Quote');
														
								$('.right-bar').addClass('final_quote');
							}
						}else{
							alert(data.error);
						}		
				});
			}
	});

	$('.right-bar').on('click','#saveskynetQuote', function (){
		$(window).off('beforeunload');
		$('#index_form').parsley().validate();
		$('#skynets_form').parsley().validate();
		var id=$(this);
			if ($('#skynets_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				var total	= 0;
				$.post('<?=base_url('frontend/home/saveskynetQuote')?>',
				$('#index_form,#skynets_form').serialize(),
				function (response){
					var data	= JSON.parse(response);
					
					if(data.error==''){
						if(data.html!=''){
							id.hide();
							var baseurl	= '<?=base_url('download/')?>'; 
							var downloadurl	= baseurl+'/'+data.html;
							$("#proposal_new_create").attr('href',downloadurl);
							
							$(".order-section").show();
							$("#old_quoteid").val(data.html);
							$("#quoting-heading").html('Proposal ID : '+data.proposalNumber);
							$("#proposal_number").val(data.proposalNumber);
							$("#index_form").hide();
							$(".download").show();
							/* Changes 01-08-2017 */
							$(".download").attr('data-new-quote',data.html);
							$(".download").attr('data-new-proposal',data.proposalNumber);
							/* Changes 01-08-2017 */
							$(".download_proposal").show();
							$("#add_new_item").attr('href','<?=base_url('addnewitem')?>'+'/'+data.html);
							$("#add_new_item").show();
							alert('Quote is successfully saved');
							$('div.quote_detail').show();
							quoteDisplay();
						}
					}else{
						alert(data.error);
					}
				});
			}
	});
	/*------------------------aad cargonet --------------------------*/
	var m_cargo = 1;
	$('#page_layout').on('click','#calculatecargonetQuote', function (){
		check_beforeLeave();
		$('#index_form').parsley().validate();
		$('#cargonet_form').parsley().validate();
		var id=$(this);
			if ($('#cargonet_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				var total	= 0;
				$(".order-section").hide();
				if(m_cargo==1){$(".form-section").css({"padding-right": "20.7%"});}
				m_cargo=m_cargo+1;
				$('.loading').html('<div  style="float:left;position: relative;left: 0px;top: 0px;width: 100%;min-height: 100px; height:100%;z-index: 9999;background: url(<?=base_url()?>/assets/front/images/loading2.gif) 50% 50% no-repeat rgb(249,249,249);opacity: 8; "></div>').fadeIn();

				$.post('<?=base_url('frontend/home/cargonetQuote')?>',
					$('#index_form,#cargonet_form').serialize(),
					function (response){ 
						/*$(".form-section").css({"padding-right": "0%"});*/
						$(".loading").fadeOut('fast');
						var data	= JSON.parse(response);
						if(data.error==''){
							if(data.html!=''){
								$(".order-section").show();
								var d=data.html;
								d=d.split('*');
								$('#profiding').html(d[0]);
								$('#totalPrice').html(d[1]);
								$('#download').html(d[2]);
								
								id.text('Review Quote');
														
								$('.right-bar').addClass('final_quote');
							}
						}else{
							alert(data.error);
						}

				});
			}
	});

	$('.right-bar').on('click','#savecargonetQuote', function (){
		$(window).off('beforeunload');
		$('#index_form').parsley().validate();
		$('#cargonet_form').parsley().validate();
		var id=$(this);
			if ($('#cargonet_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				var total	= 0;
				
				$.post('<?=base_url('frontend/home/savecargonetQuote')?>',
					$('#index_form,#cargonet_form').serialize(),
					function (response){
					var data	= JSON.parse(response);
					
					if(data.error==''){
						if(data.html!=''){
							id.hide();
							var baseurl	= '<?=base_url('download/')?>'; 
							var downloadurl	= baseurl+'/'+data.html;
							$("#proposal_new_create").attr('href',downloadurl);
							
							$(".order-section").show();
							$("#old_quoteid").val(data.html);
							$("#quoting-heading").html('Proposal ID : '+data.proposalNumber);
							$("#proposal_number").val(data.proposalNumber);
							$("#index_form").hide();
							$(".download").show();
							/* Changes 01-08-2017 */
							$(".download").attr('data-new-quote',data.html);
							$(".download").attr('data-new-proposal',data.proposalNumber);
							/* Changes 01-08-2017 */
							$(".download_proposal").show();
							$("#add_new_item").attr('href','<?=base_url('addnewitem')?>'+'/'+data.html);
							$("#add_new_item").show();
							alert('Quote is successfully saved');
							$('div.quote_detail').show();
							quoteDisplay();
						}
					}else{
						alert(data.error);
					}
				});
			}
	});


	/*------------------------aad rocbloc --------------------------*/
	$("#page_layout").on('change','#borderoption1',function (){
			var net_border	= $(this).val();
			if(net_border!=''){
				$.post('<?=base_url('frontend/home/populateThreadlist')?>',{'keyword':net_border,'csrf_test_name':'<?php echo $this->security->get_csrf_hash(); ?>'},function (response){
					$('#threaddiv').html(response);
					$('#roc_bloc_form').parsley().isValid();
					/*$(".select1").find('select').selectBoxIt();*/
					$(".custom-select").customselect();
				});
			}
		});
		
		$('#page_layout').on('change','#nettingtype_rocbloc',function (){
			wt = $("#choose-wtclass").find('option:selected').text();
			ptype = $("#choose-product").find('option:selected').text();
			populate_productlistrocbloc(null,ptype,wt);
		});
		
		
	
	
	
	function populate_productlistrocbloc(search=null, ptype=null, wt=null){
		var search		= $('#nettingtype_rocbloc').val();
		var net_type	= 'net';
		populateProductOptionsrocbloc(search,net_type,'first-select',ptype,wt);
		
		
		var border_type1 =  'liner';
		populateProductOptionsrocbloc(search,border_type1,'second-select',ptype,wt);
		
		
		var border_type2 =  'border';
		populateProductOptionsrocbloc(search,border_type2,'third-select',ptype,wt);
		
		
		
		var border_type3 =  'grommet';
		populateProductOptionsrocbloc(search,border_type3,'fourth-select',ptype,wt);
		
		
	}
	
	function populateProductOptionsrocbloc(product,type,id,ptype=null,wt=null){
		var varibale_id		= $("#"+id).attr('alt-data');
		var varibale_name	= $("#"+id).attr('alt-name');
		if(product!='' && type!=''){
			$.post('<?=base_url('frontend/home/populateProductOptions')?>',
			{'product':product,'ptype':ptype,'wt':wt,'type':type,'var_name':varibale_id, 'name':varibale_name,'csrf_test_name':'<?php echo $this->security->get_csrf_hash(); ?>'},
			 function (response){
				if(type=='sewnborder'){
					$('#'+id).html(response);
					populate_threadlist_rocbloc();
					$('#roc_bloc_form').parsley().isValid();
					/*$(".select1").find('select').selectBoxIt();*/
					$(".custom-select").customselect();
				}else{
					$('#'+id).html(response);
					$('#roc_bloc_form').parsley().isValid();
					/*$(".select1").find('select').selectBoxIt();*/
					$(".custom-select").customselect();
				}
			});
		}
	}
	
	function populate_threadlist_rocbloc(){
		var net_border	= document.getElementById('borderoption1').value;
		if(net_border!=''){
			$.post('<?=base_url('frontend/home/populateThreadlist')?>',{'keyword':net_border,'csrf_test_name':'<?php echo $this->security->get_csrf_hash(); ?>'},function (response){
				$('#threaddiv').html(response);
				$('#roc_bloc_form').parsley().isValid();
				/*$(".select1").find('select').selectBoxIt();*/
				$(".custom-select").customselect();
			});
		}
	}
	
	
	$('.right-bar').on('click','#saverocblocQuote', function (){
		$(window).off('beforeunload');
		$('#index_form').parsley().validate();
		$('#roc_bloc_form').parsley().validate();
		var id=$(this);
			if ($('#roc_bloc_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				var total	= 0;
				$.post('<?=base_url('frontend/home/saverocblocQuote')?>',
				$('#index_form,#roc_bloc_form').serialize(),
				function (response){
					var data	= JSON.parse(response);
					if(data.error==''){
						if(data.html!=''){
							id.hide();
							var baseurl	= '<?=base_url('download/')?>'; 
							var downloadurl	= baseurl+'/'+data.html;
							$("#proposal_new_create").attr('href',downloadurl);
							
							$(".order-section").show();
							$("#old_quoteid").val(data.html);
							$("#quoting-heading").html('Proposal ID : '+data.proposalNumber);
							$("#proposal_number").val(data.proposalNumber);
							$("#index_form").hide();
							$(".download").show();
							/* Changes 01-08-2017 */
							$(".download").attr('data-new-quote',data.html);
							$(".download").attr('data-new-proposal',data.proposalNumber);
							/* Changes 01-08-2017 */
							$(".download_proposal").show();
							$("#add_new_item").attr('href','<?=base_url('addnewitem')?>'+'/'+data.html);
							$("#add_new_item").show();
							clearQuoteDescriptionAfterSaving();
							alert('Quote is successfully saved');
							$('div.quote_detail').show();
							quoteDisplay();
						}
					}else{
						alert(data.error);
					}
				});
			}
	});

	$('#page_layout').on('click','#calculaterocblocQuote', function (){
		check_beforeLeave();
		$('#index_form').parsley().validate();
		$('#roc_bloc_form').parsley().validate();
		var id=$(this);
			if ($('#roc_bloc_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				var total	= 0;
				$.post('<?=base_url('frontend/home/rocblocQuote')?>',
				$('#index_form,#roc_bloc_form').serialize(),
				function (response){
					var data	= JSON.parse(response);
					if(data.error==''){
						if(data.html!=''){
							$(".order-section").show();
							var d=data.html;
							d=d.split('*');
							$('#profiding').html(d[0]);
							$('#totalPrice').html(d[1]);
							$('#download').html(d[2]);
							
							id.text('Review Quote');
													
							$('.right-bar').addClass('final_quote');
						}
					}else{
						alert(data.error);
					}
				});
			}
	});
	
	/*------------------------add rocbloc --------------------------*/
	/*------------------------add write in --------------------------*/
	
	$('#page_layout').on('click','.add-writein-row',function() {
		var html='<div class="form-row four-box"><select data-parsley-required="true"  name="item_code[]"  class="custom-select" ><?=itemList();?></select></div>';
		html +='<div class="form-row four-box description-box"><textarea name="description[]" class="description" placeholder="Enter Quote Description Here" required ="true"/></textarea>';
		html +='</div><div class="form-row four-box quantity-box"><input type="text" name="quantity[]" data-parsley-min="0" data-parsley-type="number" placeholder="Enter Quantity" required ="true"/>';
		html +='</div><div class="form-row four-box price-box"><input type="text" name="price[]"  placeholder="Enter price " required ="true"/>';
		html +='</div>';
		html='<div class="main_add">'+html+'<a href="javascript:void(0)" class="add-writein-row"><img src="<?=base_url('assets/front/images/plus.png')?>" alt="plus"></a><a href="javascript:void(0)" class="remove-writein-row"><img src="<?=base_url('assets/front/images/minus.png')?>" alt="minus"></a></div>';
		$('.add-row:last').append(html);	
		$('#writein_form').parsley().isValid();		
		$(".custom-select").customselect();
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
	});
	
	$('#page_layout').on('click','.remove-writein-row',function() {
		var inputNo	= $('.quantity-box input').length;
		if(inputNo > 1){
			$(this).parent().remove();
		}else{
			alert("Last item can't be deleted");
		}
	});

	$('.right-bar').on('click','#savewriteinQuote', function (){
		$(window).off('beforeunload');
		$('#index_form').parsley().validate();
		$('#writein_form').parsley().validate();
		var id=$(this);
			if ($('#writein_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				var total	= 0;
				$.post('<?=base_url('frontend/home/savewriteinQuote')?>',
				$('#index_form,#writein_form').serialize(),
				function (response){
					var data	= JSON.parse(response);
					if(data.error==''){
						if(data.html!=''){
							id.hide();
							var baseurl	= '<?=base_url('download/')?>'; 
							var downloadurl	= baseurl+'/'+data.html;
							$("#proposal_new_create").attr('href',downloadurl);
							$(".order-section").show();
							$("#old_quoteid").val(data.html);
							$("#quoting-heading").html('Proposal ID : '+data.proposalNumber);
							$("#proposal_number").val(data.proposalNumber);
							$("#index_form").hide();
							$(".download").show();
							/* Changes 01-08-2017 */
							$(".download").attr('data-new-quote',data.html);
							$(".download").attr('data-new-proposal',data.proposalNumber);
							/* Changes 01-08-2017 */
							$(".download_proposal").show();
							$("#add_new_item").attr('href','<?=base_url('addnewitem')?>'+'/'+data.html);
							$("#add_new_item").show();
							alert('Quote is successfully saved');
							$('div.quote_detail').show();
							quoteDisplay();
						}
					}else{
						alert(data.error);
					}
				});
			}
	});

	$('#page_layout').on('click','#calculatewriteinQuote', function (){
		check_beforeLeave();
		$('#index_form').parsley().validate();
		$('#writein_form').parsley().validate();
		var id=$(this);
			if ($('#writein_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				var total	= 0;
				$.post('<?=base_url('frontend/home/writeinQuote')?>',
				$('#index_form,#writein_form').serialize(),
				function (response){
					
					var data	= JSON.parse(response);
					if(data.error==''){
						if(data.html!=''){
							$(".order-section").show();
							var d=data.html;
							d=d.split('*');
							$('#profiding').html(d[0]);
							$('#totalPrice').html(d[1]);
							$('#download').html(d[2]);
							
							id.text('Review Quote');
													
							$('.right-bar').addClass('final_quote');
						}
					}else{
						alert(data.error);
					}
				});
			}
	});
	/*------------------------add write in --------------------------*/
	/*------------------------add template --------------------------*/
	
	$('.right-bar').on('click','#saveCalculateTemplate', function (){
		$(window).off('beforeunload');
		$('#index_form').parsley().validate();
		$('#template_form').parsley().validate();	
		var id=$(this);
			if ($('#template_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				var total	= 0;
				$.post('<?=base_url('frontend/home/saveTemplateQuote')?>',
				$('#index_form,#template_form').serialize(),
				function (response){
					var data	= JSON.parse(response);
					if(data.error!=''){
						alert(data.error);
					}else{
						id.hide();
						var baseurl	= '<?=base_url('download/')?>'; 
						var downloadurl	= baseurl+'/'+data.html;
						$("#proposal_new_create").attr('href',downloadurl);
						$(".order-section").show();
						$("#old_quoteid").val(data.html);
						$("#quoting-heading").html('Proposal ID : '+data.proposalNumber);
						$("#proposal_number").val(data.proposalNumber);
						$("#index_form").hide();
						$(".download").show();
						/* Changes 01-08-2017 */
						$(".download").attr('data-new-quote',data.html);
						$(".download").attr('data-new-proposal',data.proposalNumber);
						/* Changes 01-08-2017 */
						$(".download_proposal").show();
						$("#add_new_item").attr('href','<?=base_url('addnewitem')?>'+'/'+data.html);
						$("#add_new_item").show();
						alert('Quote is successfully saved');
						$('div.quote_detail').show();
							quoteDisplay();
					}
				});
			}
	});
	
	$('#page_layout').on('click','#saveTemplateQuote', function (){
		check_beforeLeave();
		$('#index_form').parsley().validate();
		$('#template_form').parsley().validate();
		var id=$(this);
			if ($('#template_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				var total	= 0;
				$.post('<?=base_url('frontend/home/calculateTemplateQuote')?>',
				$('#index_form,#template_form').serialize(),
				function (response){
					var data	= JSON.parse(response);
					if(data.error==''){
						if(data.html!=''){
							$(".order-section").show();
							var d=data.html;
							d=d.split('*');
							$('#profiding').html(d[0]);
							$('#totalPrice').html(d[1]);
							$('#download').html(d[2]);
							id.text('Review Quote');
							$('.right-bar').addClass('final_quote');
						}else{
							alert("Sorry we are not getting any data");
						}
					}else{
						alert(data.error);
					}
				});
			}
	});
	/*------------------------add template --------------------------*/
	/*------------------------add NetForm Function -------------------*/
	$('.right-bar').on('click','#saveCalculateNetformQuote', function (){
		$(window).off('beforeunload');
		$('#index_form').parsley().validate();
		$('#netform_form').parsley().validate();	
		var id=$(this);
			if ($('#netform_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				var total	= 0;
				$.post('<?=base_url('frontend/home/saveNetformQuote')?>',
				$('#index_form,#netform_form').serialize(),
				function (response){
					var data	= JSON.parse(response);
					if(data.error!=''){
						alert(data.error);
					}else{
						id.hide();
						var baseurl	= '<?=base_url('download/')?>'; 
						var downloadurl	= baseurl+'/'+data.html;
						$("#proposal_new_create").attr('href',downloadurl);
						
						$(".order-section").show();
						$("#old_quoteid").val(data.html);
						$("#proposal_number").val(data.proposalNumber);
						$("#quoting-heading").html('Proposal ID : '+data.proposalNumber);
						$("#index_form").hide();
						$(".download").show();
						/* Changes 01-08-2017 */
						$(".download").attr('data-new-quote',data.html);
						$(".download").attr('data-new-proposal',data.proposalNumber);
						/* Changes 01-08-2017 */
						$(".download_proposal").show();
						$("#add_new_item").attr('href','<?=base_url('addnewitem')?>'+'/'+data.html);
						$("#add_new_item").show();
						clearQuoteDescriptionAfterSaving();
						alert('Quote is successfully saved');
						$('div.quote_detail').show();
							quoteDisplay();
					}
				});
			}
	});
	
	$('#page_layout').on('click','#calculateNetformQuote', function (){
		check_beforeLeave();
		$('#index_form').parsley().validate();
		$('#netform_form').parsley().validate();
		var id=$(this);
			if ($('#netform_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				var total	= 0;
				$.post('<?=base_url('frontend/home/calculateNetformQuote')?>',
				$('#index_form,#netform_form').serialize(),
				function (response){
					var data	= JSON.parse(response);
					if(data.error==''){
						if(data.html!=''){
							$(".order-section").show();
							var d=data.html;
							d=d.split('*');
							$('#profiding').html(d[0]);
							$('#totalPrice').html(d[1]);
							$('#download').html(d[2]);
							id.text('Review Quote');
							$('.right-bar').addClass('final_quote');
						}else{
							alert(data.error);
						}
					}else{
						alert(data.error);
					}
				});
			}
	});
	
	$('#page_layout').on('change','#netformtype',function (){
		var	search	= $(this).val();
		if(search!=''){
			populateOptions(search);		
		}
	});

	function populateOptions(search=null){
			populateProductOptions(search,'Rope','vertical-rope-type');
			populateProductOptions(search,'Rope','horizontal-rope-type');
			populateProductOptions(search,'Termination','terminal-top');
			populateProductOptions(search,'Termination','terminal-bottom');
			populateProductOptions(search,'Termination','horizontal-terminal-top');
			populateProductOptions(search,'Termination','horizontal-terminal-bottom');
	}

	/*For the jquery driven additional dropdown options */
	function populateProductOptionsNlive(product,type,id,counter){
		var wt = '';
		var varibale_id		= $("#"+id).attr('alt-data');
		var varibale_name	= $("#"+id).attr('alt-name');

		var id_strip = id.replace(/\d+/g,'');
		
		if(type=='Rope' && id=='vertical-rope-type'+counter){
			varibale_id		= 'v'+counter;
			varibale_name	= 'vertical_rope_type[]';
		}
		if(type=='Rope' && id=='horizontal-rope-type'+counter){
			varibale_id		= 'h'+counter;
			varibale_name	= 'horizontal_rope_type[]';
		}
		if(type=='Termination' && id=='terminal-top'+counter){
			varibale_id		= 'vtt'+counter;
			varibale_name	= 'termination_top[]';
		}
		if(type=='Termination' && id=='terminal-bottom'+counter){
			varibale_id		= 'vtb'+counter;
			varibale_name	= 'termination_bottom[]';
		}
		if(type=='Termination' && id=='horizontal-terminal-top'+counter){
			varibale_id		= 'htt'+counter;
			varibale_name	= 'horizontal_termination_top[]';
		}
		if(type=='Termination' && id=='horizontal-terminal-bottom'+counter){
			varibale_id		= 'htb'+counter;
			varibale_name	= 'horizontal_termination_bottom[]';
		}
		if(product!='' && type!=''){
			$.post('<?=base_url('frontend/home/populateProductOptions')?>',
			{'product':product, 'wt':wt, 'type':type,'var_name':varibale_id, 'name':varibale_name,'csrf_test_name':'<?php echo $this->security->get_csrf_hash(); ?>'},
			 function (response){
				
				if(type=='Rope'){
					$('.'+id).html(response);
					if(id=='horizontal-rope-type'){
					$( "#horizontals_div").find('select').first().attr('data-parsley-required','true');
					}
					if(id=='vertical-rope-type'){
					$( "#verticals_div").find('select').first().attr('data-parsley-required','true');
					}
					$('#netform_form').parsley().isValid();
					/*$(".select1").find('select').selectBoxIt();*/
					$(".custom-select").customselect();
				}else{
					$('.'+id).html(response);
					$( '.'+id).find('select').addClass('custom-select');
					$('#netform_form').parsley().isValid();
					$(".custom-select").customselect();
				}
			});
		}
	}
	/*------------------------add NetForm Function -------------------*/
	
	/*------------------- Rope Quote Function (11-07-2017) --------------------------*/
	
	
	$('#page_layout').on('click','.add-rope-row',function() {
		/*$(this).removeClass('add-rope-row');
		$(this).addClass('remove-rope-row');*/
		/*$(this).html('<img src="<?=base_url('assets/front/images/minus.png')?>" alt="plus">');*/
		var html	= '<div class="add-item rope-product"><div class="form-row half second_row_rope"><select data-parsley-required="true" name="rope_item[]" class="custom-select" ><?=netProduct('Rope');?></select></div>';
		html 		+= '<div class="half"><div class="form-row half "><div class="form-row three select1 drop_rope"><select data-parsley-required="true" name="rope_uom[]" class="" ><option value="EA">EA</option><option value="FT">FT</option></select></div><div class="form-row three select1 drop_rope"><select data-parsley-required="true" name="rope_tolerance[]" class="" ><option value="1-2">1-2</option><option value="2-5">2-5</option></select></div><div class="form-row three quantity"><input type="number" name="rope_qty[]" min="0"  step="0" value="0" data-parsley-required="true"></div></div><div class="form-row half"><div class="form-row half"><input type="text" name="old_calculator[]" id="price_override" placeholder="Old Calculator Price" data-parsley-type="number" data-parsley-max="50000000" data-parsley-maxlength="11"  value=""   /></div><div class="form-row half"><input type="text" name="price_override[]" id="price_override" placeholder="Unit Price Override" data-parsley-type="number" data-parsley-max="50000000" data-parsley-maxlength="11"  value=""   /></div></div></div><a href="javascript:void(0)" class="add-rope-row"><img src="<?=base_url('assets/front/images/plus.png')?>" alt="plus"></a><a href="javascript:void(0)" class="remove-rope-row"><img src="<?=base_url('assets/front/images/minus.png')?>" alt="minus"></a></div>';
		$('.add-item:last').after(html);
		$('#rope_form').parsley().isValid();
		$(".custom-select").customselect();
		$(".select1").find('select').selectBoxIt();
		addplusminus();
	});
	
	/* Remove the rope quote row */
	$('#page_layout').on('click','.remove-rope-row',function() {
		var inputNo	= $('.quantity input').length;
		if(inputNo > 1){
			$(this).parent().remove();
		}else{
			alert("Last item can't be deleted");
		}
	});

	$('.right-bar').on('click','#saveRopeQuote', function (){
		$(window).off('beforeunload');
		$('#index_form').parsley().validate();
		$('#rope_form').parsley().validate();
		var id=$(this);
			if ($('#rope_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				var total	= 0;
				$.post('<?=base_url('frontend/home/saveRopeQuote')?>',
				$('#index_form,#rope_form').serialize(),
				function (response){
					var data	= JSON.parse(response);
					if(data.error!=''){
						alert(data.error);
					}else{
						id.hide();
						var baseurl	= '<?=base_url('download/')?>'; 
						var downloadurl	= baseurl+'/'+data.html;
						$("#proposal_new_create").attr('href',downloadurl);
						
						$(".order-section").show();
						$("#old_quoteid").val(data.html);
						$("#quoting-heading").html('Proposal ID : '+data.proposalNumber);
						$("#proposal_number").val(data.proposalNumber);
						$("#index_form").hide();
						/* Changes 01-08-2017 */
						$(".download").attr('data-new-quote',data.html);
						$(".download").attr('data-new-proposal',data.proposalNumber);
						/* Changes 01-08-2017 */
						$(".download").show();
						$(".download_proposal").show();
						$("#add_new_item").attr('href','<?=base_url('addnewitem')?>'+'/'+data.html);
						$("#add_new_item").show();
						alert('Quote is successfully saved');
						$('div.quote_detail').show();
							quoteDisplay();
					}
				});
			}
	});
	
	$('#page_layout').on('click','#calculateRopeQuote', function (){
		check_beforeLeave();
		$('#index_form').parsley().validate();
		$('#rope_form').parsley().validate();
		var id=$(this);
			if ($('#rope_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				var total	= 0;
				$.post('<?=base_url('frontend/home/calculateRopeQuote')?>',
				$('#index_form,#rope_form').serialize(),
				function (response){
					var data	= JSON.parse(response);
					if(data.error==''){
						if(data.html!=''){
							$(".order-section").show();
							var d=data.html;
							d=d.split('*');
							$('#profiding').html(d[0]);
							$('#totalPrice').html(d[1]);
							$('#download').html(d[2]);
							id.text('Review Quote');
							$('.right-bar').addClass('final_quote');
						}else{
							alert("Sorry we are not getting any data");
							}
					}else{
						alert(data.error);
					}
				});
			}
	});
	
	
	/*-------------------End Rope Quote Function (11-07-2017) --------------------*/
	
	
	/* ===================== Open Popup click on red stop icon ====== */
	$(document).on('click','.red-stop-icon',function (){
		var itemCode	= $(this).attr('data-itemcode');
		var activityCode= $(this).attr('data-activitycode');
		var uom			= $(this).attr('data-uom');
		var rate		= $(this).attr('data-labor');
		var id			= $(this).attr('id');
		$('#updateItemCodeDetails').attr('data-id',id);
		/* Display UOM Value */
		$.post('<?=base_url('frontend/home/quoteLookupHtml')?>',
			{'uom':uom,'htmlfor':'uom'},function (response){
				var data	= JSON.parse(response);
				if(data.uom!=''){
					$('#uom-select-popup-val').html(data.uom);
				}
				$(".select2").find('select').selectBoxIt();
		});
		/* Display UOM Value */
		$('#updateItemCodeDetails').val('Update');
		
		$('#item_code').val(itemCode);$('#activity_code').val(activityCode);$('#uom').val(uom);$('#activity_rate').val(rate);
		$('#modal-2').modal('show');
	});
	
	$(document).on('click','.md-close',function (){
		$('#modal-2').modal('hide');
	});
	
	$(document).on('click','#updateItemCodeDetails', function (){
		$(this).val('Processing....');
		var parent	= $(this);
		var popupFor= $(this).attr('data-id'); 
		var newRate	= $('#activity_rate').val();var newUom	= $('#uom').val();
		var newCode	= $('#item_code').val();var newActCode	= $('#activity_code').val();
		$.post('<?=base_url('frontend/home/updateItemCodeData')?>',$('#updateItemInfo').serialize(),function (response){
			$('#'+popupFor).attr('data-labor',newRate);
			$('#'+popupFor).attr('data-uom',newUom);
			$('#'+popupFor).attr('data-itemcode',newCode);
			$('#'+popupFor).attr('data-activitycode',newActCode);
			parent.val('Updated');
			alert(response);
			$('#modal-2').modal('hide');
		});
	});
	
	/* ============= 13-06-2017 New Changes Proposal Number ==============*/
	$(document).on('change','#choose-sales',function (){
		var salepersonName	= $(this).find('option:selected').text();
		var salespersonNameArray	= salepersonName.split(' ');
		var totalLength		= salespersonNameArray.length;
		var firstNameF		= salespersonNameArray[0].charAt(0);
		var lastNameF		= salespersonNameArray[parseInt(totalLength-1)].charAt(0);
		var salepersonF		= firstNameF+lastNameF;
		makeProposalNumber(salepersonF);
	});
	
	$(document).on('blur','#proposal_number',function (){
		var proposalNumber	= this.value;
		if(proposalNumber.length < 12 || proposalNumber==''){
			var salepersonName	= $('#choose-sales').find('option:selected').text();
			if(salepersonName!=''){
				var salespersonNameArray	= salepersonName.split(' ');
				var totalLength		= salespersonNameArray.length;
				var firstNameF		= salespersonNameArray[0].charAt(0);
				var lastNameF		= salespersonNameArray[parseInt(totalLength-1)].charAt(0);
				var salepersonF		= firstNameF+lastNameF;
				makeProposalNumber(salepersonF);
			}
		}
	});
	
	/* Add more contact details (14-07-2017) */
	$(document).on('click','.add-more-contact',function (){
		var selectedCustomer	= $('#customer').val();
		if(selectedCustomer!=''){
			$('#new-popup-customer').val(selectedCustomer);
			/* this ajax function used to get customer address,city,state,zipcode and country for new contact */
			$.post('<?=base_url('frontend/home/getCustomerByAccountId')?>',{'account':selectedCustomer},function (response){
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
			$('#contact-new-modal').modal({backdrop: 'static', keyboard: false});
		}else{
			alert('Select Customer First');
		}
		
	});
	/* Submit add new contact form */
	
	$(document).on('click','#addNewContactBtn',function (){
	
		var addBtnText	= $(this);
		$('#contact_form').parsley().validate();
		var cust	= $('#new-popup-customer').val();
		if ($('#contact_form').parsley().isValid() && cust!='') {
			addBtnText.text('Processing....');
			$.post('<?=base_url('frontend/crm/addingNewContact')?>',$('#contact_form').serialize(), function (response){
				var data	= JSON.parse(response);
				if(data.status=='Yes'){
					var newHtml	= '<select id="contact" name="contact" data-parsley-required="true">';
					newHtml		+= data.html;
					newHtml		+= '</select>';
					$('#contact-select').html(newHtml);
					$(".select1").find('select').selectBoxIt();
					$('.clear-new-contact').val('');
					$('#contact-new-modal').modal('hide');
				}else{
					var alterMessage	= '<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>'+data.msg+'</div>';
					$('#new-contact-alert-message').html(alterMessage);
				}
				addBtnText.text('Submit');
			});
		}
	});
	
	function makeProposalNumber(salepersonName){
		var today			= new Date();
		/*today			= today.toString().substr(4,11);*/
		var year			= today.getFullYear().toString().substr(2, 2);
		var month			= today.getMonth().toString();
		
		if(parseInt(month) < 9){
			month	= '0'+(parseInt(month)+1);
		}
		else{
			month	= (parseInt(month)+1);
		}
		var day			= today.getDate().toString();
		if(parseInt(day) < 10){
			day	= '0'+day;
		}
		var hr			= today.getHours();
		if(parseInt(hr) < 10){
			hr	= '0'+hr;
		}
		var minu		= today.getMinutes();
		if(parseInt(minu) < 10){
			minu	= '0'+minu;
		}
		/*var proposalNumber	= month+day+year+salepersonName+hr+minu;*/
		var proposalNumber	= month+''+day+''+year+''+salepersonName+''+hr+''+minu;
		$('#proposal_number').val(proposalNumber);
	}
	/* This function used for get edit quote description on blur evenet (26-07-2017) */ 
	$(document).on('blur','.return_quote_description',function (){
		var textArea	= $(this).val();
		$('#edit_quote_description').val(textArea);
	});
	
	/* BOM Download file */
	$(".right-bar").on("click",".download",function() {
		var quote	= $(this).attr('data-new-quote');
		var proposal= $(this).attr('data-new-proposal');
		var url			= '<?=base_url('frontend/excel/editExport/')?>';
		var finalUrl	= quote+'#'+proposal;
		var finalUrl	= window.btoa(finalUrl);
		var finalUrl	= url+'/'+finalUrl;
		window.location.href	= finalUrl;
	});
	
	
	/* Add more Customer details (06-09-2017) */
	$(document).on('click','.add-more-customer',function (){
		$('#customer-new-modal').modal({backdrop: 'static', keyboard: false});
	});
	
	/* Submit add new Customer form */
	$(document).on('click','#submitCustomerDetails',function (){
		var addBtnText	= $(this);
		$('#add_more_customer_details').parsley().validate();
		if ($('#add_more_customer_details').parsley().isValid()) {
			addBtnText.val('Processing....');
			$.post('<?=base_url('frontend/home/addCustomerInfoFromCreateQuotePage')?>',$('#add_more_customer_details').serialize(), function (response){
				var data	= JSON.parse(response);
				if(data.status=='Yes'){
					var alterMessage	= '<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'+data.msg+'</p></div>';
					$('#alert-message').html(alterMessage);
					$('#customer-new-modal').modal('hide');
				}else{
					alert(data.msg);
				}
				addBtnText.val('Submit');
			});
		}
	});
	
	/* Validation for Add new customer */
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
			$('#tier_heading').html('Tier <em>*</em>');
			$.post('<?=base_url('frontend/crm/getTierValue')?>',{'relationType':relationType},function (response){
				var data	= JSON.parse(response);
				if(data.status=='Yes'){
					$('#change-tier-value-basis-on-relationtype').html(data.html);
				}
				$('#add_more_customer_details').parsley().isValid();
				$(".select1").find('select').selectBoxIt();
			});
		}else{
			$('#tier_heading').html('Tier');
			$('#change-tier-value-basis-on-relationtype').html('<select id="customer_pricing_tier" name="customer_pricing_tier" ><option value="">None</option></select>');
		}
		$(".select1").find('select').selectBoxIt();
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
	
	function clearQuoteDescriptionAfterSaving(){
		$('.return_quote_description').val('');
		$('#edit_quote_description').val('');
	}
	
	$(document).on('click','#new-opportunity',function (){
		$('#opportunity-select .custom-select').addClass('custom-select-open');
		
	});
	
	$(document).on('change','#opportunity',function (){
		$('#new-opportunity').val(this.value);
	});
	
	$(document).on('blur','.custom-select-open input',function (){
		if(this.value){
			$('#new-opportunity').val(this.value);
		}
		$('#opportunity-select .custom-select').removeClass('custom-select-open');
	});
	
	/* This function used for make calculat */
	$(document).on('click','.get-calculation',function(){
		var inputId = $(this).attr('data-id');
		$('.calculator-btn').attr('data-id',inputId);
		$('#feet').val('');$('#inches').val('');$('#calculate_value').val('');
		$('#display-calculator').modal('show');
	});
	$(document).on('click','.md-close',function (){
		$('#display-calculator').modal('hide');
	});
	
	/* This functionality used for calculat the inches to decimal feet */
	$(document).on('click','.calculator-btn',function (){
		var inputId = $(this).attr('data-id');
		$('#calculation_form').parsley().validate();
		if ($('#calculation_form').parsley().isValid()) {
				var feet = $('#feet').val();
				var inches = $('#inches').val();
				if(!(feet > 0)){
					feet= 0;
				}
				if(!(inches > 0)){
					inches= 0;
				}
				var convertedValues = convertDecimalFeet(inches);
				feet = parseInt(feet) + parseInt(convertedValues['feets']);
				inches = convertedValues['inches'];
				var finalVal = (feet+inches);
				$('#calculate_value').val(finalVal);
				$('#'+inputId).val(finalVal);
				$('#'+inputId).focus();
				return false;
		}
	});

	function convertDecimalFeet(inches){
		/*var formula = {1:0.0833,2:0.167,3:0.250,4:0.333,5:0.417,6:0.500,7:0.583,8:0.667,9:0.750,10:0.833,11:0.917};*/
		var formula = {1:0.08,2:0.16,3:0.25,4:0.33,5:0.41,6:0.50,7:0.58,8:0.67,9:0.75,10:0.83,11:0.98};
		var gg = 0;
	  var nn = inches;
	  var newfeet = 0;
	  if(inches > 11){
	  	while(inches >= 12){
				gg++;
				inches = (inches-12);
			}
			var newinches = (nn-(gg*12));
	  	newfeet = (gg);
	  }else{
	  	var newinches = inches;
	  }
	  var check = formula[newinches];
	  if(check==undefined){
	  	newinches = (newinches * .0833);
	  	newinches = newinches+'';
	  	newinches = newinches.substring(1,4);
	  }else{
	  	newinches = formula[newinches];
	  }
	
		return {'inches':newinches,'feets':newfeet}
	}

	function DefaultProdOptions(data){
		var wt = data.wt;
		var ptype = data.ptype;
		if(ptype === "Skynets") {ptype = "SkyNet";}

		$.post('<?=base_url("frontend/home/getProductDefaults")?>',{'ptype':ptype,'wt':wt,'csrf_test_name':'<?php echo $this->security->get_csrf_hash(); ?>'}, function (response){
				
				var res	= JSON.parse(response);
				
				if(ptype == 'Custom Net'){
					$('#net_form').parsley().isValid();
					$("#zero-select-cn").html(res);
					/*$(".select1").find('select').selectBoxIt();*/
					$(".custom-select").customselect();
					var search		= $('#nettingtype_customnet').val();
					populate_productlist(search,ptype,wt);
    			}
    			if(ptype == 'RocBloc'){
    				$('#roc_bloc_form').parsley().isValid();
    				console.log(res);
					$("#zero-select-cn").html(res);
					/*$(".select1").find('select').selectBoxIt();*/
					$(".custom-select").customselect();
					var search		= $('#nettingtype_rocbloc').val();
					console.log(search);
					populate_productlistrocbloc(search,ptype,wt);
    			}
    			if(ptype == 'Lily Pad'){
    				$('#lilypad_form').parsley().isValid();
    				console.log(res);
					$("#zero-select-cn").html(res);
					/*$(".select1").find('select').selectBoxIt();*/
					$(".custom-select").customselect();
					var search		= $('#nettingtype_lilypad').val();
					populate_productlistlilypad(search,ptype,wt);
    			}
    			
    			if(ptype == 'Netform'){
    				$('#netform_form').parsley().isValid();
    				console.log(res);
					$("#zero-select-cn").html(res);
					$(".custom-select").customselect();
					var search		= $('#nettingtype_netform').val();
					populate_productlist(search,ptype,wt);

	   			}


		});
	}

	function check_beforeLeave(){
		$(window).on('beforeunload', function(){
		    return "Any changes will be lost";
		});
	}
</script>
