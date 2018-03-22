<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	$groupPermissions	= $this->group_permissions;
	$searchCustomer		= !empty($searchParam['searchCustomer']) && $searchParam['searchCustomer']!='all'? $searchParam['searchCustomer'] : '';
	$searchContact		= !empty($searchParam['searchContact']) && $searchParam['searchContact']!='all'? $searchParam['searchContact'] : '';
	$searchDivision		= !empty($searchParam['searchDivision']) && $searchParam['searchDivision']!='all'? $searchParam['searchDivision'] : '';
	$searchState		= !empty($searchParam['searchState']) && $searchParam['searchState']!='all'? $searchParam['searchState'] : '';
	$searchCountry		= !empty($searchParam['searchCountry']) && $searchParam['searchCountry']!='all' ? $searchParam['searchCountry'] : '';
	$searchCountry		= !empty($searchParam['searchCountry']) && $searchParam['searchCountry']!='all' ? $searchParam['searchCountry'] : '';
	$searchContactType	= !empty($searchParam['searchContactType']) && $searchParam['searchContactType']!='all' ? $searchParam['searchContactType'] : '';
	$searchLeadSource	= !empty($searchParam['searchLeadSource']) && $searchParam['searchLeadSource']!='all' ? $searchParam['searchLeadSource'] : '';
?>
<style>
#quote-web-table_paginate.dataTables_paginate {
    display: none;
    padding-top: 10px;
}

</style>
<input type="text" id="page_number" value="0">
<!-- Right Bar Section -->
	<div class="right-bar">
	<div class="dashboard">
		<div class="form-section">
			<div class="col-sm-12 top-head">
				<h1 >
					<?php 
					if(!empty($customerContacts)){
						echo $customerContacts;
					}else{
						echo "Manage Contacts";
					}
					?>
				</h1>
				<div class="search-main">
					<?php
						if(!empty($groupPermissions) && in_array(20,$groupPermissions)){
					?>
						<a href="<?=base_url('addContact')?>" class="create_quote">
							Add New Contact
						</a>
					<?php
						}
					?>
					<?php
						$downloadAllClass	= 'style="display:none"';
						if(!empty($numRows)){
							$downloadAllClass	= 'style="display:block"';
						}
					?>
					<a href="javascript:void(0)" <?=$downloadAllClass;?> class="create_quote download-all-contact-list">
						<i class="fa fa-file-excel-o" aria-hidden="true"></i> Download All
					</a>
				</div>
			</div>
				
			<div class="data-table-dash all-contact-list-page">
			<div id="alert-message"><?php echo $this->session->flashdata('message');?></div>
			
			<table class="contacts-filter-table">
				<?=form_open('',array('name'=>'contacts-search-form','id'=>'contacts-search-form'))?>
				<tr>
					<?php
						if(empty($customerContacts)){
					?>
					<td width="200">
						<div class="select1 input-design">
							<label>Customer </label>
							<input type="text" name="search_customer" id="search_customer" value="<?=$searchCustomer;?>" placeholder="Customer">
						</div>
					</td>
					<?php }else{ ?>
						<input type="hidden" id="search_customer" value="<?=!empty($customerAccount) ? $customerAccount : 'all';?>" >
					<?php
						}
					?>
					<td width="200">
						<div class="select1 input-design">
							<label>Contact </label>
							<input type="text" name="search_contact" id="search_contact" value="<?=$searchContact?>" placeholder="Search Contact">
						</div>
					</td>
					
					<td width="200">
						<div class="select1 input-design">
							<label>Division</label>
							<select name="search_division" id="search_division" class="quote_status">
								<option value="">Select Division</option>
								<?php
									echo getQuoteHeaderLookUp('division_to_wtclass',$searchDivision);
								?>
							</select>
						</div>
					</td>
					
					
					<td width="200">
						<div class="select1 input-design">
							<label>State</label>
							<input type="text" name="search_state" id="search_state" value="<?=$searchState?>" placeholder="State">
						</div>
					</td>
					
					<td width="200">
						<div class="select1">
							<label>Country</label>
							<select name="search_country" id="search_country" class="quote_status">
								<option value="">Select Country</option>
								<?php
									if(!empty($countries)){
										foreach($countries as $val){
											$selected	= !empty($searchCountry) && $searchCountry==$val->iso_country_code ? 'selected' : '';
											echo '<option value="'.$val->iso_country_code.'" '.$selected.'>'.$val->country_name.'</option>';
										}
									}
								?>
							</select>
						</div>
					</td>
					<td width="200">
						<div class="select1 input-design">
							<label>Contact Type</label>
							<select name="search_contact_type" id="search_contact_type" class="quote_status">
								<option value="">Select</option>
								<?php
									echo getQuoteHeaderLookUp('contact_type',$searchContactType);
								?>
							</select>
						</div>
					</td>
					<td width="200">
						<div class="select1 input-design">
							<label>Lead Source</label>
							<select name="search_lead_source" id="search_lead_source" class="quote_status">
								<option value="">Select </option>
								<?php
									echo getQuoteHeaderLookUp('lead_source',$searchLeadSource);
								?>
							</select>
						</div>
					</td>
					
					<td width="200">
						<div class="select1">
							<input type="submit" value="Filter" class="order-filter-button" id="order-filter">
						</div>
					</td>
				</tr>
				<?=form_close()?>
			</table>
			
			<table class="table  table-bordered table-hover" id="quote-web-table">
				<thead>
					<tr>
						<td colspan="8" class="search-area">
							<div class="auto-serch">
							
								<!-- Loader Section -->
								<div class="customer-loader">
									<img src="<?=base_url('assets/front/images/loading2.gif')?>" class="customer-loader-image">
								</div>
								<!-- Loader Section -->
							</div>
							<?php
								$headPagination	= '';
								if(!empty($pagination) && $pagination=='No'){
									$headPagination	= 'style="display:none"';
								}
							?>
							<a class="pagi-table-data" <?=$headPagination;?> id="previous-table-data" data-type="Previous" data-position-type="Top" >Previous</a>
							<a class="pagi-table-data" <?=$headPagination;?> id="next-table-data" data-position-type="Top" data-type="Next">Next</a>
						</td>
					</tr>
					
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Division</th>
						<th>Phone Number</th>
						<th>Company Name</th>
						<th>Account Number </th>
						<th>City (State)</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody class="filter-data" id="table-data">
				<?php
					if(!empty($contactsList)){
						$i=0;
						foreach($contactsList as $val){
							$contactCardHtml	= '';
							$firstname		= !empty($val->firstname) ? $val->firstname : '';
							$lastname		= !empty($val->lastname) ? $val->lastname : '';
							$name			= !empty($firstname) ? $firstname.' '.$lastname : '';
							$email			= !empty($val->email) ? $val->email : '';
							$division		= !empty($val->division) ? $val->division : 'N/A';
							$companyName	= !empty($val->companyname) ? $val->companyname : '';
							$accountNumber	= !empty($val->accountnumber) ? $val->accountnumber : '';
							$busPhone		= !empty($val->businessphone) ? $val->businessphone : '-----';
							$mobilePhone	= !empty($val->mobilephone) ? $val->mobilephone : '-----';
							$city			= !empty($val->address1_city) ? $val->address1_city : '';
							$state			= !empty($val->address1_stateprovince) ? ' ( '.$val->address1_stateprovince.' )': '';
							$contactId		= !empty($val->crm_contactid) ? $val->crm_contactid : '';
							$crmAccountId	= !empty($val->crm_accountid) ? $val->crm_accountid : '';
							$activityId		= '';
							$address1Street1	= !empty($val->address1_street1) ? $val->address1_street1 : '';
							$address1Zipcode	= !empty($val->address1_zip) ? $val->address1_zip : '';
							$linkedinUrl		= !empty($val->linkedin_url) ? $val->linkedin_url : '';
							$notes				= !empty($val->notes) ? $val->notes : '-----';
							$contactImg			= !empty($val->image) ? $val->image : '';
							$htmlAddress		= $address1Street1.' '.$city.(!empty($val->address1_stateprovince) ? ', '.$val->address1_stateprovince : '').' '.$address1Zipcode;
							$htmlAddress		= !empty(trim($htmlAddress)) ? $htmlAddress : 'N/A';
							$imgSrc		= base_url('uploads/contacts/'.$contactImg);
							$imgPath	= FCPATH.'/uploads/contacts/'.$contactImg;
							if(!empty($contactImg) && file_exists($imgPath)){
								$imgSrc	= base_url('uploads/contacts/'.$contactImg);
							}else{
								$imgSrc	= base_url('assets/front/images/contact-card.jpg'); 
							}
							
							$contactCardHtml	.= '<div class="img-section">
										<img src="'.$imgSrc.'">
									</div>
									<div class="content-section	">
										<h5>'.$name.'</h5><label>'.$companyName.'</label>
									<div class="select-area">
										<ul>
											<li><figure><img src="'.base_url('assets/front/images/phone-icon-size-20.png').'"></figure><p><a href="tel:'.$busPhone.'">'.$busPhone.'</p><span>Business Phone</span></li>
											<li><figure><img src="'.base_url('assets/front/images/phone-icon-size-20.png').'"></figure><p><a href="tel:'.$mobilePhone.'">'.$mobilePhone.'</p><span>Mobile Phone</span></li>';
											if(!empty($email)){
												$contactCardHtml	.= '<li><figure><img src="'.base_url('assets/front/images/email-icon-size-20.png').'"></figure><p><a href="mailto:'.$email.'" >'.$email.'</a></p></li>';
											}
											if(!empty($linkedinUrl)){
												$contactCardHtml	.= '<li><figure><img src="'.base_url('assets/front/images/in-icon-size-20.png').'"></figure><p><a href="'.$linkedinUrl.'">'.$linkedinUrl.'</a></p></li>';
											}
										
										$contactCardHtml	.= '</ul>
									</div>
									</div>
									
									<div class="row select-area">
										<h5>Address:</h5>
										<label><figure>
										<img src="'.base_url('assets/front/images/address-icon-size-20.png').'"></figure>
										'.$htmlAddress.'</label>
									</div>
									
									<div class="row select-area">
										<h5>Notes:</h5>
										<label>'.$notes.'</label>
									</div>
									';
							
							echo '<tr id="remove-row-'.$contactId.'">
							<td>'.$name.'</td>
							<td>'.$email.'</td>
							<td>'.$division.'</td><td>'.$busPhone.'</td>
							<td>'.$companyName.'</td><td>'.$accountNumber.'</td>
							<td>'.$city.$state.'</td>
							<td width="200">';
							if(!empty($groupPermissions) && in_array(23,$groupPermissions)){
								echo '<a class="add_activity tooltip" data-activityid="'.$activityId.'" data-accountid="'.$crmAccountId.'" href="javascript:void(0)" >
									<i class="fa fa-male" aria-hidden="true"></i>
									<span class="tooltiptext">Add Activity</span>
								</a>';
							}	
								
								echo "<a class='contact-card tooltip' data-contact-card-html='".base64_encode($contactCardHtml)."'  href='javascript:void(0)' >
									<i class='fa fa-id-card-o' aria-hidden='true'></i>
									<span class='tooltiptext'>Contact Card</span></a>";
									
							if(!empty($groupPermissions) && in_array(20,$groupPermissions)){
								echo '<a class="edit_detail tooltip" href="'.base_url('editContact/'.$contactId).'" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
									<span class="tooltiptext">Edit</span>
								</a>';
							}
							echo '<a class="make-clone tooltip" href="'.base_url('cloneContact/'.$contactId).'" >
									<i class="fa fa-clone" aria-hidden="true"></i>
									<span class="tooltiptext">Clone</span>
								</a>';
								
							if(!empty($groupPermissions) && in_array(22,$groupPermissions)){
								echo '<a class="delete_detail tooltip" data-toggle="confirmation" data-placement="left" data-singleton="true"  data-id="'.$contactId.'" data-account-number="'.$accountNumber.'" data-type="delete" href="javascript:void(0)">
										<i class="fa fa-trash" aria-hidden="true"></i>
										<span class="tooltiptext">Remove Contact</span>
										</a>';
							}
								echo '</td></tr>';
						}
					}else{
						echo '<tr><td colspan="8" align="center">Contact not found!</td></tr>';
					}
				?>
				</tbody>
			</table>
			
			<!-- Pagination Section -->
			<table class="customer-pagination-tabel">
				<tr>
					<td>
						<!-- Loader Section -->
							<div class="bottom-loader">
								<img src="<?=base_url('assets/front/images/loading2.gif')?>" class="buttom-loader-image">
							</div>
						<!-- Loader Section -->
						<?php
							$bottomPagination	= '';
							if(!empty($pagination) && $pagination=='No'){
								$bottomPagination	= 'style="display:none"';
							}
						?>
						<a class="pagi-table-data" <?=$bottomPagination;?> id="previous-table-data" data-position-type="Bottom" data-type="Previous" >Previous</a>
						<a class="pagi-table-data" <?=$bottomPagination;?> id="next-bottom-table-data" data-position-type="Bottom" data-type="Next">Next</a>
					</td>
				</tr>
			</table>
			<!-- Pagination Section -->
			</div>
		</div>
	</div>

<!-- Right Bar Section -->
</section>

	<!-- Add new contact details Popup Modal (22-08-2017)-->
	<div class="md-modal md-effect-1 add-an-activity" id="add-new-activity">
		<div class="md-content">
			<div class="pop-main-cont">
				<div class="pop-header">
					<h2>Interaction Details :</h2>
					<button class="md-close" data-dismiss="modal">
						<i class="fa fa-times" aria-hidden="true"></i>
					</button>
				</div>
                <div class="pop-body cf">
				<?php
				echo form_open('', array('class'=>'form-row ','id'=>'add_contact_activity'));
				?>
					<div class="row select-area">
						<div class="form-row first select1">
							<input type="hidden" name="crm_activity_id" id="crm_activity_id" value="">
							<input type="hidden" name="crm_account_id" id="crm_account_id" value="">
							<label>Category :<em >*</em></label>
							<select id="activity_category" name="activity_category" class="input-fields" data-parsley-required="true">
								<option value="">Select</option>
								<?=getQuoteHeaderLookUp('interaction_type')?>
							</select>
							
						</div>
						<div class="form-row first">
							<label>Time :</label>
							<div class="">
								<input type="text" name="activity_time" id="activity_time" class=" time input-fields" placeholder="HH:MM"/>
								
							</div>
							
					</div>
					
					<div class="row select-area">
						<div class="form-row first">
							
							<label>Date :</label>
							<input type="text" name="activity_date" id="activity_date" class="date input-fields" placeholder="YY-MM-DD">
							
						</div>
						
						<div class="form-row first">
							<label>Subject :</label>
							<input type="text" name="activity_subject" id="activity_subject" class="input-fields" placeholder="Subject">
						</div>
					</div>
					
					<div class="row select-area">
						<div class="form-row one">
							
							<label>Details :</label>
							<textarea name="activity_notes" class="input-fields" placeholder="Activity Notes"></textarea>
							
						</div>
					</div>
					
					<div class="row select-area">
						<div class="form-row3 ">
							<input type="checkbox" name="activity_followup" id="activity_followup" value="1" class="followup-checkbox input-fields">
							<label>Followup :</label>
							
						</div>
						
						<div class="form-row4 ">
							<label>Due Date :</label>
							<input type="text" name="activity_due_date" id="activity_due_date" class=" date input-fields" placeholder="YY-MM-DD" value="">
						</div>
						
						<div class="form-row3  update-area">
							<input type="button" value="Submit" class="add-more-contact-btn" id="addActivity" />
						</div>
					</div>
					
					<?=form_close()?>
					</div>
				</div>
			</div>
		</div>	
	</div>
	<div class="md-overlay"></div>
	<!-- model pop html code end -->
	
	<!-- Add new contact details Popup Modal (22-08-2017)-->
	<div class="md-modal md-effect-1 display-contact-card" id="display-contact-card">
		<div class="md-content">
			<div class="pop-main-cont">
				<div class="pop-header">
					
					
				</div>
                <div class="pop-body cf">
					
						<div class="row select-area">
							<button class="md-close" data-dismiss="modal">
								<i class="fa fa-times" aria-hidden="true"></i>
							</button>
						<div id="contact-card-html">
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	
	<div class="md-overlay"></div>
	<!-- model pop html code end -->

<?php
	$this->load->view('frontend/bottom');
?>
<script>
	
$(document).ready(function() {
	$('#quote-web-table').DataTable({
		"pageLength": 50,
		language: {
			searchPlaceholder: "Enter Search Value...",
			paginate: {
				next: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
				previous: '<i class="fa fa-angle-left" aria-hidden="true"></i>'  
			}
		}
	});

	$('[data-toggle=confirmation]').confirmation({
		rootSelector: '[data-toggle=confirmation]',
	});
	$('[data-toggle=confirmation1]').confirmation({
		rootSelector: '[data-toggle=confirmation1]',
	});
	
	/* Making The Dropdown of customers Auto complete search */
	var select = false;
	$( "#search_customer" ).autocomplete({
		source: '<?=base_url('frontend/home/getCustomer')?>',
		open: function(event, ui) { if(select) select=false; },
		select: function (a, b) {
			select=true;
		}
	}).blur(function(){
		var cus	= $("#search_customer").val();
		if(!select || cus=='No Record Found !'){
			$("#search_customer").val('');
		}
	});
	
});

	$('[data-toggle=confirmation]').confirmation({
		onConfirm: function() {
			var contactId	= $(this).attr('data-id');
			if(contactId!=''){
				$.post('<?=base_url('frontend/crm/deleteContact')?>',{'contactid':contactId},function (response){
					var data	= JSON.parse(response);
					if(data.status=='Yes'){
						$('#remove-row-'+contactId).remove();
						var alterMessage	= '<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'+data.msg+'</p></div>';
						$('#alert-message').html(alterMessage);
					}else{
						var alterMessage	= '<div class="alert alert-block alert-dandger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'+data.msg+'</p></div>';
						$('#alert-message').html(alterMessage);
					}
				});
			}
		}
	});
	

	
	$(".date").datepicker({
		dateFormat: 'yy-mm-dd' 
		/*minDate:new Date()*/
	});
	
	$(".time").timepicki();
	
	/* Pagination Contact Functionality */
	$(document).on('click','.pagi-table-data',function (){
		var pageNum			= $('#page_number').val();
		
		var searchCustomer	= $('#search_customer').val();
		var searchContact	= $('#search_contact').val();
		var searchDivision	= $('#search_division').val();
		var searchState		= $('#search_state').val();
		var searchCountry	= $('#search_country').val();
		
		var type			= $(this).attr('data-type');
		var positionType	= $(this).attr('data-position-type');
		if((type=='Previous' && pageNum > 0) || type=='Next'){
			if(positionType=='Bottom'){
				$('.bottom-loader').show();
			}else{
				$('.customer-loader').show();
			}
			$.post('<?=base_url('frontend/crm/paginationContactTableData')?>',{'page':pageNum,
				'search_customer':searchCustomer,'search_contact':searchContact,'search_division':searchDivision,
				'search_state':searchState,'search_country':searchCountry,
				'type':type},function (response){
				var data	= JSON.parse(response);
				if(data.html!=''){
					$('#table-data').html(data.html);
					$('#page_number').val(data.page);
				}
				if(type=='Next' && data.numRow<50){
					$('#next-table-data').hide();
					$('#next-bottom-table-data').hide();
				}else{
					$('#next-table-data').show();
					$('#next-bottom-table-data').show();
				}
				
				if(positionType=='Bottom'){
					$('.bottom-loader').hide();
				}else{
					$('.customer-loader').hide();
				}
			});
		}
	});
	
	/* Searching Contact Functionality */
	$(document).on('click','#search_contact_list',function (){
		var searchKeyword	= $('#contact_search').val();
		$('.customer-loader').show();
		$('#search_form').submit();
	});
	
	/* DownloaD All Contacts function */
	$(document).on('click','.download-all-contact-list', function (){
		var searchCustomer	= $('#search_customer').val();
		var searchContact	= $('#search_contact').val();
		var searchDivision	= $('#search_division').val();
		var searchState		= $('#search_state').val();
		var searchCountry	= $('#search_country').val();
		var searchContactType	= $('#search_contact_type').val();
		var searchLeadSource= $('#search_lead_source').val();
		var searchKeyword		= btoa(searchCustomer+'##'+searchContact+'##'+searchDivision+'##'+searchState+'##'+searchCountry+'##'+searchContactType+'##'+searchLeadSource);
		var url	= '<?=base_url('frontend/excel/downloadContactsList/')?>';
		url		= url+'/'+searchKeyword;
		window.location.href= url;
	});
	
	
	$(document).on('keypress','#contact_search',function (){
		$('.download-all-contact-list').hide();
	});
	
	/* Display Contact Card (14-09-2017) */
	$(document).on('click','.contact-card',function (){
		var html	= $(this).attr('data-contact-card-html');
		html	= atob(html);
		$('#contact-card-html').html(html);
		$('#display-contact-card').modal('show');
	});
	
	
	/* Add more contact details (22-08-2017) */
	$(document).on('click','.add_activity',function (){
		var contactId		= $(this).attr('data-accountid');
		var activityId		= $(this).attr('data-activityid');
		if(contactId!=''){
			$('#crm_account_id').val(contactId);
			$('#crm_activity_id').val(activityId);
			$('#add-new-activity').modal('show');
		}
		
	});
	
	/* Submit add new contact form */
	$(document).on('click','#addActivity',function (){
		var addBtnText	= $(this);
		$('#add_contact_activity').parsley().validate();
		if ($('#add_contact_activity').parsley().isValid()) {
			addBtnText.val('Processing....');
			$.post('<?=base_url('frontend/crm/addActivity')?>',$('#add_contact_activity').serialize(), function (response){
				var data	= JSON.parse(response);
				if(data.status=='Yes'){
					$('.input-fields').val('');
						var alterMessage	= '<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'+data.msg+'</p></div>';
						$('#alert-message').html(alterMessage);
						$('#add-new-activity').modal('hide');
				}else{
					alert(data.msg);
				}
				addBtnText.val('Submit');
			});
		}
	});
</script>
