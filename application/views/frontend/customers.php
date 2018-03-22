<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	$groupPermissions	= $this->group_permissions;
	$searchCustomer		= !empty($searchParam['searchCustomer']) && $searchParam['searchCustomer']!='all' ? $searchParam['searchCustomer'] : '';
	$searchDivision		= !empty($searchParam['searchDivision']) && $searchParam['searchDivision']!='all' ? $searchParam['searchDivision'] : '';
	$searchState		= !empty($searchParam['searchState']) && $searchParam['searchState']!='all' ? $searchParam['searchState'] : '';
	$searchCountry		= !empty($searchParam['searchCountry']) && $searchParam['searchCountry']!='all' ? $searchParam['searchCountry'] : '';
	$searchRelationshipType = !empty($searchParam['searchRelationshipType']) && $searchParam['searchRelationshipType']!='all' ? $searchParam['searchRelationshipType'] : '';
?>
<style>
#quote-web-table_paginate.dataTables_paginate {
    display: none;
    padding-top: 10px;
}
</style>
<!-- Right Bar Section -->

<input type="text" id="page_number" value="0">
	<div class="right-bar">
	<div class="dashboard">
		<div class="form-section">
			<div class="col-sm-12 top-head">
				<h1>Manage Accounts</h1>
				<div class="search-main">
					<a href="#" class="print">
						<span class="glyphicon glyphicon-print"></span> Print
					</a>
					<?php
						if(!empty($groupPermissions) && in_array(15,$groupPermissions)){
					?>
					<a href="<?=base_url('addCustomer')?>" class="create_quote">
						Add New Account
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
					<a href="javascript:void(0)" <?=$downloadAllClass;?> class="create_quote download-all-customer-list">
						<i class="fa fa-file-excel-o" aria-hidden="true"></i> Download All
					</a>
				</div>
			</div>

			<div class="data-table-dash all-customer-list-page">
			<div id="alert-message"><?php echo $this->session->flashdata('message');?></div>
			
			<table class="customer-filter-table">
				<?=form_open('',array('name'=>'accounts-search-form','id'=>'accounts-search-form'))?>
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
								<label>Relationship Type</label>
								<select name="search_relationship" id="search_relationship" class="quote_status">
									<option value="all">Select Relationship Type</option>
									<?php
										echo getQuoteHeaderLookUp('relationship_type',$searchRelationshipType);
									?>
								</select>
							</div>
						</td>
						
						<td width="200">
							<div class="select1 input-design">
								<label>Division</label>
								<select name="search_division" id="search_division" class="quote_status">
									<option value="all">Select Division</option>
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
									<option value="all">Select Country</option>
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
						<td colspan="10" class="search-area">
						<label>Search Accounts </label>
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
						<th>Company Name</th>
						<th>Account Number</th>
						<th>Relationship Type</th>
						<th>Primary Contact</th>
						<th>Main Phone</th>
						<th>City (State)</th>
						<th>Sage Number</th>
						<th>Owner</th>
						<th>Division</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody class="filter-data" id="table-data">
					<?php
						if(!empty($customers) && is_array($customers)){
							foreach($customers as $val){
								$companyName		= !empty($val->companyname) ? $val->companyname : '';
								$accountNumber		= !empty($val->accountnumber) ? $val->accountnumber : '';
								$relationshipType	= !empty($val->relationshiptype) ? $val->relationshiptype : 'N/A';
								$primaryContact		= !empty($val->primarycontact) ? $val->primarycontact : 'N/A';
								$mainPhone			= !empty($val->mainphone) ? $val->mainphone : 'N/A';
								$city				= !empty($val->address1_city) ? $val->address1_city : '';
								$state				= !empty($val->address1_stateprovince) ? ' ( '.$val->address1_stateprovince.' )': '';
								$sageNumber			= !empty($val->sagecustomernumber) ? $val->sagecustomernumber : '';
								$crmGuid			= !empty($val->crm_guid) ? $val->crm_guid : '';
								$owner				= !empty($val->owner) ? $val->owner : 'N/A';
								$division			= !empty($val->division) ? $val->division : 'N/A';
								$customerContacts	= base64_encode($accountNumber.' ['.$companyName.']');
								$relation			= getLookupValue('relationship_type',$relationshipType);
								$activityId			= '';

								echo '<tr id="remove-row-'.$sageNumber.'">
								<td>'.$companyName.'</td><td>'.$accountNumber.'</td>
								<td>'.$relation.'</td><td>'.$primaryContact.'</td>
								<td>'.$mainPhone.'</td><td>'.$city.$state.'</td>
								<td>'.$sageNumber.'</td>
								<td>'.$owner.'</td>
								<td>'.$division.'</td>
								<td width="270">';
								
								if(!empty($groupPermissions) && in_array(18,$groupPermissions)){
									echo	'<a class="view_detail tooltip" data-activityid="'.$activityId.'" data-accountid="'.$accountNumber.'" href="javascript:void(0)" >
											<i class="fa fa-male" aria-hidden="true"></i>
											<span class="tooltiptext">Add Activity</span>
										</a> ';
								}
									
								echo '<a class="view_detail tooltip" data-activityid="'.$activityId.'" data-accountid="'.$accountNumber.'" href="'.base_url('interactions/'.$accountNumber).'" >
									<i class="fa fa-cogs" aria-hidden="true"></i>
									<span class="tooltiptext">Manage Interactions</span>
								</a> ';
										
								if(!empty($groupPermissions) && in_array(16,$groupPermissions)){
									echo '<a class="view_detail tooltip" href="'.base_url('editCustomer/'.$accountNumber).'" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
									<span class="tooltiptext">Edit</span>
									</a> ';
								}
									
								echo '<a class="view_detail tooltip" data-activityid="'.$activityId.'" data-accountid="'.$accountNumber.'" href="'.base_url('contacts/'.$customerContacts).'" >
									<i class="fa fa-users" aria-hidden="true"></i>
									<span class="tooltiptext">All Contact</span>
								</a> ';
									
								echo '<a class="view_detail tooltip" href="'.base_url('orders/'.$accountNumber).'" ><i class="fa fa-shopping-cart" aria-hidden="true"></i>
									<span class="tooltiptext">Orders</span>
									</a> ';
																	
								echo '<a class="view_detail tooltip" href="'.base_url('managequote/'.$accountNumber).'" ><i class="fa fa-credit-card" aria-hidden="true"></i>
									<span class="tooltiptext">Quotes</span>
									</a> ';
										
								echo '<a class="view_detail tooltip" href="'.base_url('dashboard/').'" ><i class="fa fa-line-chart" aria-hidden="true"></i>
									<span class="tooltiptext">Revenue</span>
									</a> ';
									
								if(!empty($groupPermissions) && in_array(17,$groupPermissions)){
									echo '<a class="delete_detail tooltip" data-toggle="confirmation" data-placement="left" data-singleton="true"  data-id="'.$crmGuid.'" data-sage-number="'.$sageNumber.'" data-type="delete" href="javascript:void(0)">
									<i class="fa fa-trash" aria-hidden="true"></i>
									<span class="tooltiptext">Remove Account</span>
									</a>';
								}							
								echo '</td>
								</tr>';
							}
						} 
					?>
				</tbody>
			</table>
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
				<input type="hidden" name="crm_activity_id" id="crm_activity_id" value="">
				<input type="hidden" name="crm_account_id" id="crm_account_id" value="">
				
				<div class="form-row first select1">
					<label>Category :<em >*</em></label>
					<select id="activity_category" name="activity_category" class="input-fields" data-parsley-required="true">
						<?=getQuoteHeaderLookUp('interaction_type')?>
					</select>
				</div>
				
				<div class="form-row first">
					<label>Time :</label>
					<div class="">
						<input type="text" name="activity_time" id="activity_time" class=" time input-fields" placeholder="HH:MM" />
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
	
	<div class="md-overlay"></div>
	<!-- model pop html code end -->
<?php
	$this->load->view('frontend/bottom');
?>
<script>
	
$(document).ready(function() {
	$('#quote-web-table').DataTable({
		"pageLength": 50,language: {
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
			var crmGuid		= $(this).attr('data-id');
			var sageNumber	= $(this).attr('data-sage-number');
			if(crmGuid!=''){
				$.post('<?=base_url('frontend/crm/deleteCustomer')?>',{'crm_guid':crmGuid},function(response){
					var data	= JSON.parse(response);
					if(data.status=='Yes'){
						$('#remove-row-'+sageNumber).remove();
						var alertMessage	= '<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Account successfully deleted.</p></div>';
						$('#alert-message').html(alertMessage);
					}
				});
			}
		}
	});

	$(document).on('click','.pagi-table-data',function (){
		var pageNum	= $('#page_number').val();
		var type	= $(this).attr('data-type');
		var searchCustomer	= $('#search_customer').val();
		var searchDivision	= $('#search_division').val();
		var searchState		= $('#search_state').val();
		var searchCountry	= $('#search_country').val();
		var positionType	= $(this).attr('data-position-type');
		if((type=='Previous' && pageNum > 0) || type=='Next'){
			if(positionType=='Bottom'){
				$('.bottom-loader').show();
			}else{
				$('.customer-loader').show();
			}
			$.post('<?=base_url('frontend/crm/paginationCustomerTableData')?>',{'page':pageNum,'search_customer':searchCustomer,
				'search_division':searchDivision,'search_state':searchState,'search_country':searchCountry,'type':type},function (response){
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
	$(document).on('click','#search_customer_list',function (){
		var searchKeyword	= $('#customer_search').val();
		$('.customer-loader').show();
		$('#search_form').submit();
	});
	
	/* DownloaD All Customer function */
	$(document).on('click','.download-all-customer-list', function (){
		
		var searchCustomer	= $('#search_customer').val();
		var searchDivision	= $('#search_division').val();
		var searchState		= $('#search_state').val();
		var searchCountry	= $('#search_country').val();
		
		
		var searchKeyword		= btoa(searchCustomer+'##'+searchDivision+'##'+searchState+'##'+searchCountry);
		var url	= '<?=base_url('frontend/excel/downloadCustomersList/')?>';
		url		= url+'/'+searchKeyword;
		window.location.href=url;
	});
	
	
	$(document).on('keypress','#customer_search',function (){
		$('.download-all-customer-list').hide();
	});
	
	
	$(".date").datepicker({
		dateFormat: 'yy-mm-dd' 
		/*minDate:new Date()*/
	});
	
	$(".time").timepicki();
	
	/* Add more contact details (22-08-2017) */
	$(document).on('click','.add_activity',function (){
		var acountId		= $(this).attr('data-accountid');
		var activityId		= $(this).attr('data-activityid');
		if(acountId!=''){
			$('#crm_account_id').val(acountId);
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