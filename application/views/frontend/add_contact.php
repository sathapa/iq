<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
?>

<!-- Right Bar Section -->
	<div class="right-bar">
		<div class="form-section">
			<div class="top-head">
				<h1 id="quoting-heading">Contact Management [ Add Contact ]</h1>
				<a href="<?=base_url('contacts')?>" class="back-btn  create_quote" > < Back</a>
			</div>
		<div class="inner-form" id="innerformdetails">
		<div><?php $message	= $this->session->flashdata('message'); echo $message;?></div>
		<div class="form-group">
		
		<?php
			echo form_open('', array('class'=>'form-row ','id'=>'contact_form','data-parsley-validate'=>'data-parsley-validate','enctype'=>'multipart/form-data'));
		?>
		<div class="row">
			
			<div class=" half">
				
				<div class="half">
					<div class="half">
						<label>Contact Type<em >*</em> </label>
						<div class="select1">
							<select id="contact_type" name="contact_type" data-parsley-required="true">
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
							<input type="text" name="first_name" value="<?=set_value('first_name')?>" id="first_name" Placeholder="First Name" data-parsley-required="true" class="clear-new-contact" maxlength="100"/>
						</div>
					</div>
				</div>
				
				<div class="half">
					<label>Last Name <em >*</em></label>
					<div class="select1">
						<input type="text" name="last_name" value="<?=set_value('last_name')?>" id="last_name" data-parsley-required="true" Placeholder="Last Name" class="clear-new-contact" maxlength="50"/>
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
				<div class="half">
					<label>Fax</label>
					<div class="select1">
						<input type="text" name="fax" value="<?=set_value('fax')?>" id="fax" Placeholder="Fax" class="clear-new-contact"/>
					</div>
				</div>
				
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
					<label>Salesperson </label>
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
			$("#customer").val('');
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
			placement:'bottom'
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
			var regex = new RegExp("(.*?)\.(docx|doc|pdf|xml|bmp|ppt|xls)$");
			
			
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
