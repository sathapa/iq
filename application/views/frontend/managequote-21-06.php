<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	$groupPermissions	= $this->group_permissions;
?>
<!-- Right Bar Section -->
	<div class="right-bar">
		<div class="dashboard">
		<div class="form-section">
			<div class="top-head">
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
			<div><?php echo $this->session->flashdata('message');?></div>
			<table class="table  table-bordered table-hover" id="quote-web-table">
				<thead>
					<tr>
						<th></th>
						<th>Proposal ID#</th>
						<th>Customer</th>
						<th>City (State)</th>
						<th>Contact</th>
						<th>Created On</th>
						<th class="numeric">Order Amount</th>
						<th class="numeric">Items</th>
						<th>Salesperson</th>
						<th>Quote Status</th>
						<th width="230">
						<?=form_open('',array('name'=>'filterManageQuote','id'=>'filterManageQuote'))?>
						<div class="select1">
							<select id="quote_status" name="status" class="quote_status">
								<option value="all" <?=!empty($filterStatus) && $filterStatus=='all' ? 'selected' :'' ?>>All</option>
								<option value="Draft" <?=!empty($filterStatus) && $filterStatus=='Draft' ? 'selected' :'' ?>>Draft</option>
								<option value="Ordered" <?=!empty($filterStatus) && $filterStatus=='Ordered' ? 'selected' :'' ?>>Ordered</option>
								<option value="In Progress" <?=!empty($filterStatus) && $filterStatus=='In Progress' ? 'selected' :'' ?>>In Progress</option>
							</select>
						</div>
						<?=form_close()?>
						</th>
					</tr>
				</thead>
				<tbody class="filter-data">
					<?php if(!empty($quote_list)){
						$i=0;
						foreach($quote_list as $val){
							$i++;
							$customer=$val->customername;
							$product=$val->number_of_items;
							$proposalNum	= !empty($val->proposal_num) ? $val->proposal_num : $val->quote_id ;
						echo '<tr>
							<td>'.$i.'</td>
							<td>'.$proposalNum.'</td>
							<td>'.$customer.'</td><td>'.$val->contact_city.' ('.$val->contact_state.')</td>
							<td>'.$val->contact_phone.'</td>
							<td>'.date_format(date_create($val->created_on),'m-d-Y').'</td>
							<td class="numeric">'.number_format($val->order_value,2).'</td>
							<td class="numeric">'.$product.'</td>
							<td>'.$val->salespersonname.'</td><td>'.$val->quote_status.'</td>';
							$quoteUrl	= base64_encode($val->quote_id.'#'.$proposalNum);
						?>

         				<td width="235">
							<a class="view_detail tooltip" href="<?=base_url('viewquote/'.$quoteUrl)?>" >
							<i class="fa fa-eye" aria-hidden="true"></i>
							<span class="tooltiptext">View Quote Details</span>
							</a>
							<?php
								if(!empty($groupPermissions) && in_array(4,$groupPermissions)){
							?>
							<a class="view_detail update-quote-header md-trigger tooltip" 
								data-modal="modal-2" data-id="<?=$val->quote_id?>" data-contact="<?=$val->contact_name?>" data-phone="<?=$val->contact_phone?>" 
								data-email="<?=$val->contact_email?>" data-fax="<?=$val->contact_fax?>" data-arolead="<?=$val->aro_leadtime?>" data-term="<?=$val->term_code?>" 
								data-ship-method="<?=$val->ship_method;?>" data-freight="<?=$val->freight?>" data-order-value="<?=$val->order_value?>" data-proposal-number="<?=$proposalNum?>" 
								data-type="update-quote-header" href="javascript:void(0)">
								<i class="fa fa-pencil-square" aria-hidden="true"></i>
								<span class="tooltiptext">Update Quote Header</span>
							</a>
							<?php
								}
								if(!empty($groupPermissions) && in_array(5,$groupPermissions)){
							?>
							<a class="view_detail tooltip <?=($val->crm_sent_status=='Draft')?'sage_crm':'';?>" data-toggle="confirmation1" data-placement="left" data-singleton="true"data-id="<?=$val->quote_id?>" data-type="CRM" href="javascript:void(0)">
								<i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i>
								<span class="tooltiptext">Send Quote to CRM</span>
							</a>
							<?php
								}
								if(!empty($groupPermissions) && in_array(6,$groupPermissions)){
							?>
							<a class="view_detail tooltip  <?=($val->sage_sent_status=='Draft')?'sage_crm':'';?>" data-toggle="confirmation1" data-placement="left" data-singleton="true" data-id="<?=$val->quote_id?>" data-type="Sage" href="javascript:void(0)" >
								<i class="fa fa-empire" aria-hidden="true"></i>
								<span class="tooltiptext">Send Order to Sage</span>
							</a>
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
							<a class="view_detail tooltip"  href="<?=base_url().'download/'.$val->quote_id;?>" target="_blank">
								<i class="fa fa-download" aria-hidden="true"></i>
								<span class="tooltiptext">Generate Proposal </span>
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
	<!-- model pop html code start -->
	<div class="md-modal md-effect-1" id="modal-1">
		<div class="md-content">
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
		<div class="md-content">
			<div class="pop-main-cont">
                <div class="pop-header">
				<h2 id="proposalnum-quoteid">Quote Id :</h2>
                <span id="selected_quote2">12345768900</span>
				<button class="md-close"><i class="fa fa-times" aria-hidden="true"></i>
                </button>
                    </div>
                <div class="pop-body cf">
				<?php
				echo form_open(base_url('frontend/home/updateQuoteHeader'), array('class'=>'form-row ','id'=>'update-quoteHeader','data-parsley-validate'=>'data-parsley-validate'));
				?>
				<input type="hidden" id="update_quote_id" name="update_quote_id"/>
				<input type="hidden" id="update_proposal_id" name="update_proposal_id"/>
					
					
					<div class="row select-area">
						<div class="form-row first">
							<label>Contact :</label>
							<input type="text" name="contact" id="contact" Placeholder="Contact" maxlength="100"/>
						</div>
						<div class="form-row first">
							<label>Phone : </label>
							<input type="text" name="phone" id="phone"  Placeholder="Phone Number" maxlength="12"/>
						</div>
					</div>
					
					<div class="row select-area">
						<div class="form-row first">
						      <label>Email : </label>
                            <input type="email" name="email" id="email" Placeholder="Email" maxlength="50"/>
						</div>
						<div class="form-row first">
                            <label>Fax : </label>
                            <input type="text" name="fax" id="fax" Placeholder="Fax Number" maxlength="50"/>
						</div>
					</div>
					<div class="row select-area">
						<div class="form-row first">
							<label>Aro Lead : </label>
                            <input type="text" name="arolead" id="arolead" Placeholder="Aro Lead" maxlength="50"/>
						</div>
						<div class="form-row first">
							<label>Proposal ID :</label>
							<input type="text" name="update_proposal_num" id="update_proposal_num"  Placeholder="Proposal ID" data-parsley-required="true" data-parsley-pattern="^[a-zA-Z0-9- ]{12,32}$" />
						</div>
                    </div>
                    <div class="row select-area">
                        <div class="form-row first">
                            <label>Term Code : </label>
                            <div class="select1" id="popup-term_code">
								<select name="term_code" id="term_code" >
									<option value="">None</option>
								</select>
						</div>
					</div>
                     <div class="form-row first">
                         <label>Shipping Methode : </label>
                            <div class="select1" id="popup-shipping-methode">
								<select name="shipping_method" id="shipping_method" >
									<option value="">None</option>
									
								</select>
						  </div>
                        </div>   
                </div>
					<div class="row select-area">
                        <div class="form-row first">
                            <label>Freight : </label>
                            <input type="text" name="freight" id="freight" Placeholder="Freight" maxlength="10" />
						</div>
                        <div class="form-row first">
                            <label>Total : </label>
                            <input type="text" name="total" id="total" Placeholder="Total" maxlength="10" />
						</div>
					</div>
                    <div class="row">
                        <div class="form-row first update-area">
                            <input type="submit" value="Update" class="update-quote" id="updateQuoteHeader" />
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
			if(response=='yes'){
				if(type=='CRM'){
					alert('You have added CRM successfully in selected quote.');
				}
				if(type=='Sage'){
					alert('You have added Sage successfully in selected quote.');
				}
				window.location.reload(true);
			}else{
				alert('please try again some thing miss.');
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
					alert('please try again some thing miss.');	
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
			
			$.post('<?=base_url('frontend/home/quoteLookupHtml')?>',
			{'term_code':termCode,'ship_methode':shipMethod},function (response){
				var data	= JSON.parse(response);
				if(data.term_code!=''){
					$('#popup-term_code').html(data.term_code);
				}
				if(data.shipMethod!=''){
					$('#popup-shipping-methode').html(data.shipMethod);
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
			$('#arolead').val(arolead);
			$('#term_code').val(termCode);
			$('#freight').val(freight);
			$('#total').val(total);
			$("body").addClass("open-model");
			
		});
  </script>
