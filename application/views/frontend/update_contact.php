<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	/** Edit Contact Information **/
	$salutation	= !empty($contactInfo->salutation) ? $contactInfo->salutation : '';
	$image		= !empty($contactInfo->image) ? $contactInfo->image : '';
	$fisrtName	= !empty($contactInfo->firstname) ? $contactInfo->firstname : '';
	$lastName	= !empty($contactInfo->lastname) ? $contactInfo->lastname : '';	
	$jobTitle	= !empty($contactInfo->jobtitle) ? $contactInfo->jobtitle : '';
	$businessPhone	= !empty($contactInfo->businessphone) ? $contactInfo->businessphone : '';
	$email		= !empty($contactInfo->email) ? $contactInfo->email : '';
	$address	= !empty($contactInfo->address1_name) ? $contactInfo->address1_name : '';
	$street1	= !empty($contactInfo->address1_street1) ? $contactInfo->address1_street1 : '';
	$street2	= !empty($contactInfo->address1_street2) ? $contactInfo->address1_street2 : '';
	$city		= !empty($contactInfo->address1_city) ? $contactInfo->address1_city : '';
	$state		= !empty($contactInfo->address1_stateprovince) ? $contactInfo->address1_stateprovince : '';
	$zip		= !empty($contactInfo->address1_zip) ? $contactInfo->address1_zip : '';
	$country	= !empty($contactInfo->address1_country) ? $contactInfo->address1_country : '';
	$contactId	= !empty($contactInfo->crm_contactid) ? $contactInfo->crm_contactid : '';
	$contactType= !empty($contactInfo->contact_type) ? $contactInfo->contact_type : '';
	$leadSource	= !empty($contactInfo->lead_source) ? $contactInfo->lead_source : '';
	$customAccount	= !empty($contactInfo->accountnumber) ? $contactInfo->accountnumber : '';
	$companyName	= !empty($contactInfo->companyname) ? $contactInfo->companyname : '';
	
	$mobilePhone	= !empty($contactInfo->mobilephone) ? $contactInfo->mobilephone : '';
	$linkedinUrl	= !empty($contactInfo->linkedin_url) ? $contactInfo->linkedin_url : '';
	
	$fax			= !empty($contactInfo->fax) ? $contactInfo->fax : '';
	$notes			= !empty($contactInfo->notes) ? $contactInfo->notes : '';
	$division		= !empty($contactInfo->division) ? $contactInfo->division : '';
	$salesperson	= !empty($contactInfo->salesperson) ? $contactInfo->salesperson : '';
	$editText		= 'Edit';
	$editBtnText	= 'Update';
	if(!empty($clone)){
		$fisrtName	= '';$lastName	= '';$contactId	= '';$editText	= 'Clone';$editBtnText='Clone';
	}
?>

<!-- Right Bar Section -->
<div class="right-bar">
	<div class="form-section">
		<div class="col-sm-12 top-head">
			<h1 id="quoting-heading">Contact Management [ <?=$editText?> Contact ]</h1>
			<a href="<?=base_url('contacts')?>" class="back-btn  create_quote" > < Back</a>
		</div>
		<div class="col-sm-8 inner-form" id="innerformdetails">
		<div><?php $message	= $this->session->flashdata('message'); echo $message;?></div>
		<div class="form-group">
		
		<?php
			echo form_open('', array('class'=>'form-row ','id'=>'contact_form','data-parsley-validate'=>'data-parsley-validate','enctype'=>'multipart/form-data'));
		?>
		<div class="panel panel-default">
			<div class="panel-heading"> <h5 style="color:white;" >Edit Contact</h5> </div>
			<div class="panel-body">
				<div class="row">
					<div class="half">
						<div class="half">
							<div class="half">
								<label>Contact Type<em >*</em> </label>
								<div class="select1">
									<select id="contact_type" name="contact_type" data-parsley-required="true">
										<option value="">Select</option>
										<?=getQuoteHeaderLookUp('contact_type',$contactType);?>
									</select>
								</div>
							</div>
							<div class="half">
								<label>Lead Source </label>
								<div class="select1">
									<select id="lead_source" name="lead_source" >
										<option value="">Select</option>
										<?=getQuoteHeaderLookUp('lead_source',$leadSource);?>
									</select>
								</div>
							</div>
						</div>
						
						<div class="half">
							<label id="customer-heading">Customer<em >*</em></label>
							<div class="select1">
								<input type="hidden" id="customer-display-only" value="<?=$customAccount.'['.$companyName.']';?>">
								<input type="text" name="new_contact_customer" id="customer" Placeholder="Customer" data-parsley-required="true" value="<?=$customAccount.'['.$companyName.']';?>">
							</div>
						</div>
					</div>
					
					<div class=" half">
						
						<div class="half">
							<div class="select1">
								<div class="three">
									<label>Salutation</label>
									<select id="contact_name_tile" name="contact_name_tile" style="width:70px;">
										<option value="Mr." <?=!empty($salutation) && $salutation=='Mr.' ? 'selected' : '';?> >Mr.</option>
										<option value="Ms." <?=!empty($salutation) && $salutation=='Ms.' ? 'selected' : '';?> >Ms.</option>
									</select>
								</div>
								<div class="seven">
									<label>First Name<em >*</em> </label>
									<input type="text" name="first_name" value="<?=$fisrtName?>" id="first_name" Placeholder="First Name" data-parsley-required="true" data-parsley-pattern="^[a-zA-Z]{1,50}$" data-parsley-pattern-message="Enter Valid First Name" class="clear-new-contact" maxlength="100"/>
									<input type="hidden" name="contactid" value="<?=$contactId?>"/>
								</div>
							</div>
						</div>
						<div class="half">
							<label>Last Name <em >*</em></label>
							<div class="select1">
								<input type="text" name="last_name" value="<?=$lastName?>" id="last_name" data-parsley-required="true" data-parsley-pattern="^[a-zA-Z]{1,50}$" data-parsley-pattern-message="Enter Valid last Name"  Placeholder="Last Name" class="clear-new-contact" maxlength="50"/>
							</div>
						</div>
					</div>
					
				</div>

				<div class="row">
					<div class="half">
						<div class="half">
							<label>Job Title </label>
							<div class="select1">
								<input type="text" name="job_title" value="<?=$jobTitle?>" id="job_title" Placeholder="Job Title" maxlength="100" class="clear-new-contact"/>
							</div>
						</div>
						<div class="half">
							<label>Business Phone<em >*</em></label>
							<div class="select1">
								<input type="text" name="business_phone" value="<?=$businessPhone?>" id="business_phone" data-parsley-required="true" data-parsley-length="[10,12]" Placeholder="Business Phone"  maxlength="12" class="clear-new-contact"/>
							</div>
						</div>
					</div>
					
					<div class="customer half">
						
						<div class="half">
							<label>Mobile Phone</label>
							<div class="select1">
								<input type="text" name="mobile_phone" value="<?=$mobilePhone;?>" id="mobile_phone" data-parsley-length="[10,12]" Placeholder="Mobile Phone"  maxlength="12" class="clear-new-contact"/>
							</div>
						</div>
						
						<div class="half">
							<label>Email <em >*</em></label>
							<div class="select1">
								<input type="email" name="new_contact_email" value="<?=$email?>" id="new_contact_email" data-parsley-required="true"  Placeholder="Email" maxlength="100" class="clear-new-contact"/>
							</div>
						</div>
						
					</div>
					
				</div>
				
				<div class="row">
					<div class="customer half">
						<div class="half">
							<label>Addressee </label>
							<div class="select1">
								<input type="text" name="new_contact_address" value="<?=$address?>" id="new_contact_address" Placeholder="Addressee" maxlength="100" class="clear-new-contact"/>
							</div>
						</div>
						
						<div class="half">
							<label>Street 1 <em >*</em></label>
							<div class="select1">
								<input type="text" name="new_contact_street1" value="<?=$street1?>" id="new_contact_street1" data-parsley-required="true" Placeholder="Street 1" maxlength="100" class="clear-new-contact"/>
							</div>
						</div>
						
					</div>
					
					
					<div class="form-row half">
						
						<div class="half">
							<label>Street 2 </label>
							<div class="select1">
								<input type="text" name="new_contact_street2" value="<?=$street2?>" id="new_contact_street2" Placeholder="Street 2" maxlength="100" class="clear-new-contact"/>
							</div>
						</div>
						
						<div class="half">
							<label>Zip Code <em >*</em></label>
							<div class="select1">
								<input type="text" name="new_contact_zip" value="<?=$zip?>" id="new_contact_zip" data-parsley-length="[3,20]"  Placeholder="Zip Code" data-parsley-required="true" class="clear-new-contact"/>
							</div>
							
						</div>
						
					</div>
					
				</div>
				<div class="row">
					<div class="form-row half">
						
						<div class="half">
							<label>City <em >*</em></label>
							<div class="select1">
								<input type="text" name="new_contact_city" value="<?=$city?>" id="new_contact_city" data-parsley-required="true" Placeholder="City" maxlength="100" class="clear-new-contact"/>
							</div>
							
						</div>
						
						<div class="half">
							<div class="three">
								<label>State<em >*</em></label>
								<div class="select1">
									<input type="text" name="new_contact_state" value="<?=$state?>" id="new_contact_state" data-parsley-required="true" Placeholder="State" maxlength="50" class="clear-new-contact"/>
								</div>
							</div>
							<div class="seven">
								<label>Country </label>
								<div class="select1" id="country-list-html">
									<select id="new_contact_country" name="new_contact_country">
										<option value="">Select Country</option>
										<?php
											if(!empty($countries)){
												foreach($countries as $val){
													$selected	= (!empty($country) && $country==$val->iso_country_code ) ? 'selected':'';
													$countryName	= !empty($val->iso_country_code) && $val->iso_country_code=='USA' ? 'USA' : $val->country_name;
													echo '<option value="'.$val->iso_country_code.'" '.$selected.'>'.$countryName.'</option>';
												}
											}
										?>
									</select>
								</div>
							</div>
							
						</div>
						
					</div>
					
					<div class="form-row half">
						
						<div class="half">
							<label>LinkedIn URL</label>
							<div class="select1">
								<input type="text" name="linkedin_url" value="<?=$linkedinUrl?>" id="linkedin_url" Placeholder="LinkedIn URL" class="clear-new-contact"/>
							</div>
						</div>
						<div class="half">
							<label>Fax</label>
							<div class="select1">
								<input type="text" name="fax" id="fax" value="<?=$fax?>" Placeholder="Fax" class="clear-new-contact"/>
							</div>
						</div>
						
					</div>
					
				</div>
				
				<div class="row">
					<div class="form-row half">
						
						<div class="one">
							<label>Notes</label>
							<div class="select1">
								<textarea name="notes" id="notes" placeholder="Notes"><?=$notes?></textarea>
							</div>
						</div>
						
					</div>
					
					<div class="form-row half">
						<div class="half">
							<label class="control-label">Profile Image </label>
							<div class="input-group image-preview">
								<input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
								<span class="input-group-btn">
									<!-- image-preview-clear button -->
									<button type="button" class="btn btn-default image-preview-clear" style="display:none;">
										<span class="glyphicon glyphicon-remove"></span> Clear
									</button>
									<!-- image-preview-input -->
									<div class="btn btn-default image-preview-input">
										<span class="glyphicon glyphicon-folder-open"></span>
										<span class="image-preview-input-title">Browse</span>
										<input type="file" accept="image/png, image/jpeg, image/gif" name="profile_img" id="profile_img"/>
									</div>
								</span>
							</div>
						</div>
						<?php
							$imagePath	= FCPATH.'uploads/contacts/'.$image;
							$imageSrc	= base_url('uploads/contacts/'.$image);
							if(!empty($image) && file_exists($imagePath)){
								echo '<input type="hidden" name="old_profile_image" value="'.$image.'">';
						?>
							<div class="half">
								<div role="tooltip" class="popover fade right in" id="popover417276" style="display: block;">
									<h3 class="popover-title"><strong>Profile Image</strong>
									</h3>
									<div class="popover-content">
										<img id="dynamic" style="width: 125px; height: 110px;" src="<?=$imageSrc?>">
									</div>
								</div>
							</div>
						<?php
							}
						?>
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
										echo getQuoteHeaderLookUp('division_to_wtclass',$division);
									?>
								</select>
							</div>
						</div>
						<div class="half">
							<label>Salesperson </label>
							<div class="select1">
								<select id="lead_salescontact" name="lead_salescontact" data-parsley-required="true">
									<option value="">Select Salesperson</option>
									<?php
										echo salespersonList($salesperson);
									?>
								</select>
							</div>
						</div>
						
					</div>
				</div>
				<div class="row"> </div>
			</div>
		</div>
		
		<div class="row">
			<div class="form-row three ">
			<button type="submit" class="save" id="submitUserDetails"><?=$editBtnText?></button>
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
	
	$(document).on('click', '#close-preview', function(){ 
		$('.image-preview').popover('hide');
		$('.image-preview').hover(
			function () {
				$('.image-preview').popover('show');
			}, 
			function () {
				$('.image-preview').popover('hide');
			}
		);
	});

	$(function() {
		var closebtn = $('<button/>', {
			type:"button",
			text: 'x',
			id: 'close-preview',
			style: 'font-size: initial;',
		});
		
		closebtn.attr("class","close pull-right");

		$('.image-preview').popover({
			trigger:'manual',
			html:true,
			title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
			content: "There's no image",
			placement:'left'
		});

		$('.image-preview-clear').click(function(){
			$('.image-preview').attr("data-content","").popover('hide');
			$('.image-preview-filename').val("");
			$('.image-preview-clear').hide();
			$('.image-preview-input input:file').val("");
			$(".image-preview-input-title").text("Browse"); 
		}); 

		$(".image-preview-input input:file").change(function (){
			var val = $(this).val().toLowerCase();
			/* File Type Check */
			/*var regex = new RegExp("(.*?)\.(docx|doc|pdf|xml|bmp|ppt|xls)$");*/
			var regex = new RegExp("(.*?)\.(jpg|png|gif|jpeg)$");
			if(!(regex.test(val))) {
				alert('Please select proper file for Profile Image');
			}else{
				var img = $('<img/>', {
					id: 'dynamic',
					width:250,
					height:200
				});
				var file = this.files[0];
				var reader = new FileReader();
				reader.onload = function (e) {
					$(".image-preview-input-title").text("Change");
					$(".image-preview-clear").show();
					$(".image-preview-filename").val(file.name);            
					img.attr('src', e.target.result);
					$(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
				};
				reader.readAsDataURL(file);
			}
		});
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
	
	/* Getting the city,state and state based on zipcode */
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
	
</script>
