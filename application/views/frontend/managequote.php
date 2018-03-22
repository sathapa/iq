<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	$groupPermissions	= $this->group_permissions;
	$searchQuoteId		= !empty($searchParam['searchQuoteId']) ? $searchParam['searchQuoteId'] : 'all';
	$searchCustomer		= !empty($searchParam['searchCustomer']) ? $searchParam['searchCustomer'] : 'all';
	$searchDivision		= !empty($searchParam['searchDivision']) ? $searchParam['searchDivision'] : 'all';
	$searchStatus		= !empty($searchParam['searchStatus']) ? $searchParam['searchStatus'] : 'all';
?>
<!-- Right Bar Section -->
	<div class="right-bar">
		<div class="dashboard">
		<div class="form-section">
			<div class="col-sm-12 top-head">
				<h1>Manage Quote</h1>
				<div class="search-main">
					<a href="#" class="print">
						<span class="glyphicon glyphicon-print"></span> Print
					</a>
					<a href="<?=base_url('customnet')?>" class="create_quote">
						Create New Quote
					</a>
			</div>
			
			</div>
			<div class="data-table-dash">
			<div id="alert-message"><?php echo $this->session->flashdata('message');?></div>
			
			<table class="quotes-filter-table">
				<?=form_open('',array('name'=>'quote-search-form','id'=>'quote-search-form'))?>
				<tr>
						<td width="200">
							<div class="select1 input-design">
								<label>Quote ID</label>
								<input type="text" name="search_quoteid" id="search_quoteid" value="<?=!empty($searchQuoteId) && $searchQuoteId!='all' ? $searchQuoteId :'';?>" placeholder="Quote ID ">
							</div>
						</td>
						
						<td width="200">
							<div class="select1 input-design">
								<label>Customer</label>
								<input type="text" name="search_customer" id="search_customer" value="<?=!empty($searchCustomer) && $searchCustomer!='all' ? $searchCustomer :'';?>" placeholder="Customer">
							</div>
						</td>
						
						<td width="200">
							<div class="select1 input-design">
								<label>Contact</label>
								<input type="text" name="search_contact" id="search_contact" placeholder="Search Contact">
							</div>
						</td>
						
						<td width="200">
							<div class="select1 input-design">
								<label>Division</label>
								<select name="search_division" id="search_division" class="quote_status">
									<option value="">All</option>
									<?php
										echo getQuoteHeaderLookUp('division_to_wtclass',$searchDivision);
									?>
								</select>
							</div>
						</td>
						
						<td width="200">
							<div class="select1">
								<label>Status</label>
								<select id="search_quote_status" name="search_quote_status" class="quote_status">
									<option value="all" <?=!empty($searchStatus) && $searchStatus=='all' ? 'selected' :'' ?>>All</option>
									<option value="Draft" <?=!empty($searchStatus) && $searchStatus=='Draft' ? 'selected' :'' ?>>Draft</option>
									<option value="Ordered" <?=!empty($searchStatus) && $searchStatus=='Ordered' ? 'selected' :'' ?>>Ordered</option>
									<option value="Cancelled" <?=!empty($searchStatus) && $searchStatus=='Cancelled' ? 'selected' :'' ?>>Cancelled</option>
								</select>
							</div>
						</td>
						
						<td width="200">
							<div class="select1">
								<input type="button" value="Search" class="quote-filter-button" id="quote-filter">
							</div>
						</td>
					</tr>
				<?=form_close()?>
			</table>
			
			<table class="table  table-bordered table-hover" id="quote-web-table">
				<thead>
					<tr>
						<th></th>
						<th></th>
						<th>Proposal ID #</th>
						<th>Tag #</th>
						<th>Sage #</th>
						<th>Customer</th>
						<th>City (State)</th>
						<th>Created On</th>
						<th class="numeric">Order Amount</th>
						<th class="numeric">Freight</th>
						<th class="numeric">Weight</th>
						<th>Dimension</th>
						<th class="numeric">Items</th>
						<th>Salesperson</th>
						<th>Quote Status</th>
						<th width="230">Action</th>
					</tr>
				</thead>
				<tbody class="filter-data">
					<?php if(!empty($quote_list)){
						$i=0;
						foreach($quote_list as $val){

							/*Cleaning TagNumbers*/
							$tagNumber = $val->tag_numbers;
							$remSpaces = preg_replace('/\s+/', '', $tagNumber);
							$remRepeat = preg_replace('/,+/', ',', $remSpaces);
							$remFrontLast = trim($remRepeat, ",");
							$addcommaAfter = str_replace(',',', ',$remFrontLast);
							$cleanTags = $addcommaAfter;

							$i++;
							$customer		= $val->customername;
							$product		= $val->number_of_items;
							$tagNumber		= !empty($cleanTags) ? $cleanTags : 'N/A';
							$cusReviewFlag	= !empty($val->customer_review_flag) ? '<span><img src="'.base_url('assets/front/images/exclamation.jpg').'"></span>' : '';
							$proposalNum	= !empty($val->proposal_num) ? $val->proposal_num : $val->quote_id ;
							$manageQState	= !empty($val->contact_state) ? $val->contact_state : 'N/A' ;
							$manageQCity	= !empty($val->contact_city) ? $val->contact_city : '' ;
							$manageQZipcode	= !empty($val->contact_zip) ? $val->contact_zip : '' ;
							$manageQCountry	= !empty($val->contact_country) ? $val->contact_country : '' ;
							$manageQAddess	= !empty($val->contact_address) ? $val->contact_address : '' ;
							$manageQCompany	= !empty($val->contact_companyname) ? $val->contact_companyname : '' ;
							$manageQAccount	= !empty($val->accountnumber) ? $val->accountnumber : '' ;
							$manageQSageNum	= !empty($val->sagecustomernumber) ? $val->sagecustomernumber : '' ;
							$lastFourSageNum	= !empty($manageQSageNum) ? substr($manageQSageNum, -4) : '';
							$contactEmail		= !empty($val->contact_email) ? $val->contact_email : '';
							$salespersonEmail	= !empty($val->salesperson_email) ? $val->salesperson_email : '';
							$salesassistantContact	= !empty($val->salesassistant_contact) ? $val->salesassistant_contact : '' ;
							$shipToAddress 	= !empty($val->shipto_address) ? $val->shipto_address : '';
							$proposalSentUrl= base64_encode($val->quote_id.'##'.$proposalNum.'##'.$contactEmail.'##'.$salespersonEmail.'##'.$salesassistantContact);
							$weight			= !empty($val->weight) ? $val->weight : 0 ;
							$dim			= !empty($val->dim) ? $val->dim : 'N/A' ;
							//$lastFourSageNum	= 'XXXX';
						echo '<tr>
							<td>'.$i.'</td>
							<td>'.$cusReviewFlag.'</td>
							<td>'.$proposalNum.'</td>
							<td width="7%">'.$tagNumber.'</td>
							<td width="5%">'.$manageQSageNum.'</td>
							<td width="15%">'.$customer.'</td>
							<td>'.$manageQCity.' ('.$manageQState.')</td>
							<td width="10%">'.date_format(date_create($val->created_on),'m-d-Y').'</td>
							<td class="numeric">'.number_format($val->order_value,2).'</td>
							<td class="numeric">'.number_format($val->freight,2).'</td>
							<td class="numeric">'.number_format($weight,2).'</td>
							<td>'.$dim.'</td>
							<td class="numeric">'.$product.'</td>
							<td>'.$val->salespersonname.'</td><td>'.$val->quote_status.'</td>';
							$quoteUrl	= base64_encode($val->quote_id.'#'.$proposalNum.'#'.$val->quote_status);
						?>

         				<td width="20%">
							<a class="view_detail tooltip" href="<?=base_url('viewquote/'.$quoteUrl)?>" >
								<i class="fa fa-eye" aria-hidden="true"></i>
								<span class="tooltiptext">View Quote Details</span>
							</a>
							<?php
								if(!empty($groupPermissions) && in_array(4,$groupPermissions)){
									
							?>
							<span class="quote-update-header">
								<?php
									if(!empty($val->quote_status) && ($val->quote_status=='Ordered' || $val->quote_status=='Cancelled')){
										echo '<label class="make-disable-sage-btn" data-message="Quote Cancelled or All ready Ordred so you can not update it again."></label>';
									}
								?>

								<a class="view_detail update-quote-header md-trigger tooltip" 
									data-modal="modal-2" data-customer="<?=$manageQAccount?> [<?=$customer?>]" data-city="<?=$manageQCity;?>" data-state="<?=$manageQState;?>" data-zip="<?=$manageQZipcode;?>" data-country="<?=$manageQCountry;?>" data-address="<?=$manageQAddess;?>" data-company="<?=$manageQCompany;?>" data-id="<?=$val->quote_id?>" data-contact="<?=$val->contact_name?>" data-phone="<?=$val->contact_phone?>" 
									data-email="<?=$val->contact_email?>" data-fax="<?=$val->contact_fax?>" data-arolead="<?=$val->aro_leadtime?>" data-term="<?=$val->term_code?>" 
									data-ship-method="<?=$val->ship_method;?>" data-ship-address="<?=$shipToAddress?>" data-freight="<?=$val->freight?>" data-order-value="<?=$val->order_value?>" data-proposal-number="<?=$proposalNum?>" 
									data-type="update-quote-header" href="javascript:void(0)">
									<i class="fa fa-pencil-square" aria-hidden="true"></i>
									<span class="tooltiptext">Update Quote Header</span>
								</a>
							</span>
							<?php
									
								}
								if(!empty($groupPermissions) && in_array(5,$groupPermissions)){
							?>
							<!--<a class="view_detail tooltip <?//=($val->crm_sent_status=='Draft')?'sage_crm':'';?>" data-toggle="confirmation" data-placement="left" data-singleton="true"data-id="<?//=$val->quote_id?>" data-type="CRM" href="javascript:void(0)">
								<i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i>
								<span class="tooltiptext">Send Quote to CRM</span>
							</a>-->
							<?php
								}
								if(!empty($groupPermissions) && in_array(6,$groupPermissions)){
							?>
							<span class="quote-send-sage">
								<?php
									if(!empty($val->quote_status) && ($val->quote_status=='Ordered' || $val->quote_status=='Cancelled')){
										echo '<label class="make-disable-sage-btn" data-message="Quote is Cancelled or Already Ordered; you can not send it again."></label>';
									}
									if(empty($manageQSageNum)){
								?>
									<label class="make-disable-sage-btn" data-message="Quote cannot be sent to Sage without a Sage number"></label>
								<?php
									}
									if($lastFourSageNum=='XXXX'){
										echo '<label class="make-not-clickable-sage-btn"></label>';
									}

								?>
									<a class="view_detail tooltip  <?=($val->sage_sent_status=='Draft')?'sage_crm':'';?>" data-toggle="confirmation1" data-placement="top" data-singleton="true" data-id="<?=$val->quote_id?>" data-type="Sage" href="javascript:void(0)" >
										<i class="fa fa-empire" aria-hidden="true"></i>
										<span class="tooltiptext">Send Order to Sage</span>
									</a>
							</span>
							<?php
									}
								if(!empty($groupPermissions) && in_array(7,$groupPermissions)){
							?>
							<a class="view_detail quote_clone md-trigger tooltip" data-modal="modal-1" data-id="<?=$val->quote_id?>" data-proposal-number="<?=$proposalNum?>" data-type="quote_clone" href="javascript:void(0)">
								<i class="fa fa-clone" aria-hidden="true"></i>
								<span class="tooltiptext">Clone Quote</span>
							</a>
							<?php
								}
							?>
							<a href="<?=base_url('frontend/home/download/'.$val->quote_id);?>" target="_blank" class="view_detail tooltip proposaldownload"  data-id="<?=$val->quote_id?>" >
								<i class="fa fa-download" aria-hidden="true"></i>
								<span class="tooltiptext">Generate Proposal </span>
							</a>
							
							<a href="<?=base_url('sendproposal/'.$proposalSentUrl);?>" target="_blank" class="view_detail tooltip proposaldownload"  data-id="<?=$val->quote_id?>" >
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<span class="tooltiptext">Send to </span>
							</a>
							
							<?php
								if(!empty($groupPermissions) && in_array(8,$groupPermissions)){
							?>
							<a class="delete_detail tooltip" data-toggle="confirmation" data-placement="left" data-singleton="true"  data-id="<?=$val->quote_id?>" data-proposal-num="<?=$proposalNum?>" data-type="delete" href="javascript:void(0)">
								<i class="fa fa-trash" aria-hidden="true"></i>
								<span class="tooltiptext">Deactivate Quote</span>
							</a>
							<?php
								}
							?>
						</td>
					</tr>
				   <?php }
				    } ?>
				</tbody>
			</table>
			
			</div>
		</div>
		
		
	</div>

<!-- Right Bar Section -->
</section>
	
	<!-- Show Sage warning Message model pop html code start -->
	<div class="md-modal md-effect-1 display-sage-error" id="sage-number-error-popup">
		<div class="md-content ">
			<div class="pop-main-cont">
				<div class="pop-header">
					<h2 class="sage-warning">Warning !</h2>
					<button class="md-close"><i class="fa fa-times" aria-hidden="true"></i></button>
				</div>
				<div class="pop-body">
					<p class="sage-warning-message">Quote cannot be sent to Sage without a Sage number</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- model pop html code start -->
	<div class="md-modal md-effect-1" id="modal-1">
		<div class="md-content create-clone-create-quote-page">
			<div class="pop-main-cont">
                <div class="pop-header">
				<h2 id="clone-quote-id" >Quote Id : </h2>
                    <span id="selected_quote">12345768900</span>
                    <button class="md-close"><i class="fa fa-times" aria-hidden="true"></i></button>
                </div>
                <div class="pop-body">
				<?php
				echo form_open('', array('class'=>'form-row ','id'=>'create_clone','data-parsley-validate'=>'data-parsley-validate'));
				?>
				<input type="hidden" id="clone_quote_id" name="clone_quote_id"/>
                
				<div class="select1">
					<label>Customer :<em >*</em> </label>
					<input type="text" name="customer" id="customer" data-parsley-required-message="Please select customer" Placeholder="Select Customer" data-parsley-required="true" />
					
				</div>
                <div class="row">
                    <input type="button" value="Create Clone" class="clone_button" id="clone_button" />
                    </div>
				<?=form_close()?>
                </div>
			</div>
		</div>
	</div>
	
	<!-- model pop html code start -->
	<div class="md-modal md-effect-1" id="modal-2">
		<div class="md-content update-quote-header-create-quote-page">
			<div class="pop-main-cont">
                <div class="pop-header">
				<h2 id="proposalnum-quoteid">Quote Id :</h2>
                <span id="selected_quote2">12345768900</span>
				<button class="md-close"><i class="fa fa-times" aria-hidden="true"></i>
                </button>
                    </div>
                <div class="pop-body cf">
					<div class="update-quote-header-loader-parent cf">
						<div class="update-quote-header-loader" id="loader-on-customer-change">
							<img src="<?=base_url('assets/front/images/loading2.gif')?>" class="update-quote-loader-image">
						</div>
						<?php
						echo form_open(base_url('frontend/home/updateQuoteHeader'), array('class'=>'form-row ','id'=>'update-quoteHeader','data-parsley-validate'=>'data-parsley-validate'));
						?>
							<input type="hidden" id="update_quote_id" name="update_quote_id"/>
							<input type="hidden" id="update_proposal_id" name="update_proposal_id"/>
						
							<div class="row select-area">
								<div class="form-row three">
									<label>Contact :</label>
									<input type="text" name="contact" id="contact" Placeholder="Contact" maxlength="100"/>
								</div>
								<div class="form-row three">
									<label>Phone : </label>
									<input type="text" name="phone" id="phone"  Placeholder="Phone Number" maxlength="12"/>
								</div>
								<div class="form-row three">
									  <label>Email : </label>
									<input type="email" name="email" id="email" Placeholder="Email" maxlength="50"/>
								</div>
							</div>
							
							<div class="row select-area">
								
								<div class="form-row three">
									<label>Fax : </label>
									<input type="text" name="fax" id="fax" Placeholder="Fax Number" maxlength="50"/>
								</div>
								<div class="form-row three">
									<label>Aro Lead : <em>*</em> </label>
									<input type="text" name="arolead" id="arolead" Placeholder="Aro Lead" maxlength="50" data-parsley-required="true" list="option_lead"/>
									<datalist id="option_lead">
										<option>2-3 business days</option>
										<option>3-5 business days</option>
										<option>5-7 business days</option>
										<option>7-10 business days</option>
										<option>10-15 business days</option>
										<option>TBD</option>
									</datalist>
								</div>	
								<div class="form-row three">
									<label>Proposal ID :</label>
									<input type="text" name="update_proposal_num" id="update_proposal_num"  Placeholder="Proposal ID" data-parsley-required="true" data-parsley-pattern="^[a-zA-Z0-9- ]{12,32}$" />
								</div>
							</div>
							
							<div class="row select-area">
								<div class="form-row three select1">
									<label>Term Code : </label>
									<div class="select1" id="popup-term_code">
										<select name="term_code" id="term_code" >
											<option value="">None</option>
										</select>
									</div>
								</div>
								
								<div class="form-row three select1">
								 <label>Shipping Method : </label>
									<div class="select1" id="popup-shipping-methode">
										<select name="shipping_method" id="shipping_method" >
											<option value="">None</option>
											
										</select>
								  </div>
								</div>
								
								<div class="form-row three">
									<label>Freight : </label>
									<input type="text" name="freight" id="freight" Placeholder="Freight" maxlength="10" data-parsley-pattern="[0-9]*(\.?[0-9]{1}$)" />
								</div>
								
							</div>
							
							<div class="row select-area">
								<div class="form-row three">
									<label>Total : </label>
									<input type="text" name="total" id="total" Placeholder="Total" maxlength="10" data-parsley-pattern="[0-9]*(\.?[0-9]{1}$)" />
								</div>
								
								<div class="form-row three">
									<label>Customer:<em>*</em> </label>
									<input type="hidden" id="header-customer-display-only" value="">
									<input type="text" name="update_quote_customer" id="update_quote_customer" value="<?=set_value('update_quote_company_name');?>" Placeholder="Customer" data-parsley-required="true">
								</div>
								
								<div class="form-row three">
									<label>Company Display Name: </label>
									<input type="text" name="update_quote_company_display_name" id="update_quote_company_display_name" value="<?=set_value('update_quote_company_display_name');?>" Placeholder="Company Name" data-parsley-required="true">
								</div>
								
								
							</div>
							
							<div class="row select-area">
								
								<div class="form-row three">
									<label>Street Address :<em>*</em> </label>
									<input type="text" name="update_quote_address" value="<?=set_value('update_quote_address')?>" id="update_quote_address" data-parsley-required="true"  Placeholder="Street Address" maxlength="100" class="clear-new-contact"/>
								</div>
								
								<div class="form-row three">
									<label>City :<em>*</em> </label>
									<input type="text" name="update_quote_city" value="<?=set_value('update_quote_city')?>" id="update_quote_city" data-parsley-required="true" Placeholder="City" maxlength="100" class="clear-new-contact"/>
								</div>
								<div class="form-row three">
									<label>State :<em>*</em> </label>
									<input type="text" name="update_quote_state" value="<?=set_value('update_quote_state')?>" id="update_quote_state" data-parsley-required="true"  Placeholder="State" maxlength="50" class="clear-new-contact"/>
								</div>
								
							</div>
							
							<div class="row select-area">
								
								<div class="form-row three">
									<label>Zip Code :<em>*</em> </label>
									<input type="text" name="update_quote_zipcode" value="<?=set_value('update_quote_zipcode')?>" id="update_quote_zipcode" data-parsley-length="[3,20]" Placeholder="Zip Code" data-parsley-required="true" class="clear-new-contact"/>
								</div>
								
								<div class="form-row three ">
									<label>Country : </label>
									<div class="select1" id="update-quote-country-html">
										<select id="update_quote_country" name="update_quote_country">
											<option value="">Select Country</option>
											<?php
												$countries	= getAllCountry();
												if(!empty($countries)){
													foreach($countries as $val){
														echo '<option value="'.$val->iso_country_code.'">'.$val->country_name.'</option>';
													}
												}
											?>
										</select>
									</div>
								</div>
								
								<div class="form-row three ">
									<label>Ship To Address : </label>
									<textarea name="ship_to_address" id="ship_to_address" class="" placeholder="Ship To Address"></textarea>
								</div>

							</div>
							<div class="row select-area">
								<div class="form-row three update-area" style="margin-left: -72px;">
									<input type="submit" value="Update" class="update-quote" id="updateQuoteHeader" />
								</div>
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
	
});

/* Quote Web Status */
$('#quote_status').change(function (){
	var status	= this.value;
	if(status!=''){
		$('#filterManageQuote').submit();
	}
});

$(".select1").find('select').selectBoxIt();
$( "#customer" ).autocomplete({
	source: '<?=base_url('frontend/home/getCustomer')?>'
});

$(".print").click(function () {
	var mode = 'iframe'; 
	var close = mode == "popup";
	var options = { mode : mode, popClose : close};
	$("#quote-web-table_wrapper").printArea( options );
});

$('[data-toggle=confirmation]').confirmation({
	onConfirm: function() {
		var quoteId		= $(this).attr('data-id');
		var proposalNum	= $(this).attr('data-proposal-num');
		
	if(quoteId!=''){
		$.post('<?=base_url('frontend/home/deleteQuote')?>',{'quote_id':quoteId,'proposalNum':proposalNum},function(response){
			alert(response);
			window.location.reload(true);
		});
	}
}
});

$('[data-toggle=confirmation1]').confirmation({
	onConfirm: function() {	
	var quoteId	= $(this).attr('data-id');
	var type	= $(this).attr('data-type');
	if(quoteId!=''){
		$.post('<?=base_url('frontend/home/createSageAndCRM')?>',{'quote_id':quoteId,'type':type},function(response){
			var data	= JSON.parse(response);
			if(data.response=='yes'){
				if(type=='CRM'){
					alert('You have added CRM successfully in selected quote.');
				}
				if(type=='Sage'){
					alert('You have added Sage successfully in selected quote.');
				}
				window.location.reload(true);
			}else{
				alert('Please try again, something is missing.');
			}
		});
	}
}
});

$(document).on('click','#clone_button', function (){
	$('#create_clone').parsley().validate();
	if ($('#create_clone').parsley().isValid()) {
		
		$.post('<?=base_url('frontend/home/createquoteclone')?>',
		$('#create_clone').serialize(),
		function (response){
			if(response){
				$(".md-close").click();
					alert('You have successfully created new Quote with ID:'+response);
					window.location.reload();
				}else{
					alert('Please try again, something is missing.');	
				}
		});
	}
});

/* Update Quote Header */

/* ==================== End ======================= */
	$(document).ready(function(){
	/*--------------------clone popup -----------------*/	
		$(".quote_clone").click(function(){
			var quote			= $(this).attr("data-id");
			var proposalNumber	= $(this).attr("data-proposal-number");
			if(proposalNumber!=''){
				$("#clone-quote-id").text('Proposal ID ');
				$("#selected_quote").html(proposalNumber);
			}else{
				$("#selected_quote").html(quote);
			}
			$("#clone_quote_id").val(quote);
			$("body").addClass("open-model");
		});
		/*--------------------clone popup -----------------*/	
		$(".md-close").click(function(){
			$("body").removeClass("open-model");
		});
		/*--------------------Quote header update popup -----------------*/	
	});
	/*--------------------Quote header update popup -----------------*/	
		$('#quote-web-table').on('click','.update-quote-header',function(){
			var quote		= $(this).attr("data-id");
			var contact		= $(this).attr("data-contact");		var email		= $(this).attr("data-email");
			var fax			= $(this).attr("data-fax");			var phone		= $(this).attr("data-phone");
			var arolead		= $(this).attr("data-arolead");		var termCode	= $(this).attr("data-term");
			var shipMethod	= $(this).attr("data-ship-method");	var freight		= $(this).attr("data-freight");
			var total		= $(this).attr("data-order-value");	var proposalNum	= $(this).attr("data-proposal-number");
			
			var city		= $(this).attr("data-city");	var state	= $(this).attr("data-state");
			var address		= $(this).attr("data-address");	var company	= $(this).attr("data-company");
			var zip			= $(this).attr("data-zip");		var country	= $(this).attr("data-country");
			var shipAddress		= $(this).attr("data-ship-address");
			var customerInfo	= $(this).attr('data-customer');
			
			$.post('<?=base_url('frontend/home/quoteLookupHtml')?>',
			{'term_code':termCode,'ship_methode':shipMethod,'country':country},function (response){
				var data	= JSON.parse(response);
				if(data.term_code!=''){
					$('#popup-term_code').html(data.term_code);
				}
				if(data.shipMethod!=''){
					$('#popup-shipping-methode').html(data.shipMethod);
				}
				if(data.countryHtml!=''){
					$('#update-quote-country-html').html(data.countryHtml);
				}
				$(".select1").find('select').selectBoxIt();
			});
			
			if(proposalNum!=''){
				$("#proposalnum-quoteid").text("Proposal ID ");
				$("#selected_quote2").text(proposalNum);
			}else{
				$("#selected_quote2").text(quote);
			}
			
			$("#update_quote_id").val(quote);
			$("#update_proposal_id").val(proposalNum);
			$("#update_proposal_num").val(proposalNum);
			$('#contact').val(contact);
			$('#email').val(email);
			$('#phone').val(phone);
			$('#fax').val(fax);
			if(arolead==''){
				$arolead	= '7-10 business days';
			}
			$('#arolead').val(arolead);
			$('#term_code').val(termCode);
			$('#freight').val(freight);
			$('#total').val(total);
			$('#update_quote_address').val(address);	$('#update_quote_city').val(city);
			$('#update_quote_state').val(state);		$('#update_quote_zipcode').val(zip);
			$('#update_quote_company_display_name').val(company);
			$('#update_quote_customer').val(customerInfo);
			$('#header-customer-display-only').val(customerInfo);
			$('#ship_to_address').val(shipAddress);
			$("body").addClass("open-model");
		});
	
	/* Making The Dropdown of customers Auto complete search */
	var select = false;
	$( "#update_quote_customer" ).autocomplete({
		source: '<?=base_url('frontend/home/getCustomer')?>',
		open: function(event, ui) { if(select) select=false; },
		select: function (a, b) {
			select=true; 
			var customeInfo	= b.item.value;
			if(customeInfo !='No Record Found !'){
				$('#loader-on-customer-change').show('slow');
				$.post('<?=base_url('frontend/home/getCustomerByAccountId')?>',{'account':customeInfo},function (response){
					var data	= JSON.parse(response);
					$('#update-quote-country-html').html('<select name="update_quote_country" id="update_quote_country"  ><option value="">None</option></select>');
					if(data.addressCountry!=''){
						$('#update-quote-country-html').html('<select name="update_quote_country" id="update_quote_country"  ><option value="">None</option>'+data.addressCountry+'</select>');
					}
					$('#update_quote_company_display_name').val(data.companyDisplayName);
					$('#update_quote_address').val(data.streetAddress);
					$('#update_quote_city').val(data.addressCity);
					$('#update_quote_state').val(data.addressState);
					$('#update_quote_zipcode').val(data.addressZipcode);
					$(".select1").find('select').selectBoxIt();
					$('#loader-on-customer-change').hide('slow');
				});
				
			}
		}
	}).blur(function(){
		var cus	= $("#update_quote_customer").val();
		if(!select || cus=='No Record Found !'){
			var oldCustomer 	= $('#header-customer-display-only').val();
			$("#update_quote_customer").val(oldCustomer);
		}
	});
	
	/* Displaying the Sage Error Popup Message */
	$(document).on('click','.make-disable-sage-btn',function (){
		var alertMessage	= $(this).attr('data-message');
		$('.sage-warning-message').text(alertMessage);
		$('#sage-number-error-popup').modal('show');
	});
	
	$(document).on('click','.md-close',function (){
		$('#sage-number-error-popup').modal('hide');
	});
	
	/* This function used for save generate pdf in a folder */
	/*$(document).on('click','.proposaldownload',function (){
		var parent	= $(this);
		var quote	= $(this).attr('data-id');
		$.post('<?=base_url('frontend/home/download')?>',{'quote':quote},function (){
			var alterMessage	= '<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Proposal Successfully Downloaded. </p></div>';
			$('#alert-message').html(alterMessage);
		});
	});*/
	
	var selectNew = false;
	$( "#search_customer" ).autocomplete({
		source: '<?=base_url('frontend/home/getCustomer')?>',
		open: function(event, ui) { if(selectNew) selectNew=false; },
		select: function (a, b) {
			selectNew=true;
		}
	}).blur(function(){
		var cus	= $("#search_customer").val();
		if(!selectNew || cus=='No Record Found !'){
			$("#search_customer").val('');
		}
	});
	
	$(document).on('click','#quote-filter',function (){
		var quoteId = $('#search_quoteid').val();var quoteCustomer = $('#search_customer').val();
		var quoteDivision = $('#search_division').val();var quoteStatus = $('#search_quote_status').val();
		setCookie('quote-search-id',quoteId,1*1*1);
		setCookie('quote-search-customer',quoteCustomer,1*1*1);
		setCookie('quote-search-division',quoteDivision,1*1*1);
		setCookie('quote-search-status',quoteStatus,1*1*1);
		$('#quote-search-form').submit();
	});

	$('#arolead').on('click', function() {
	$(this).val('');
	});
	/* ********************** Set cookie for Quote Filter ********************* */
	function setCookie(cookiename, cookievalue, hours) {
		var date = new Date();
		date.setTime(date.getTime() + Number(hours) * 3600 * 1000);
		document.cookie = cookiename + "=" + cookievalue + "; path=/;expires = " + date.toGMTString();;
	}
	
  </script>
