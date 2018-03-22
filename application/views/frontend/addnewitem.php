<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	//print_r($quote_list);
?>
<style>
	.quote_detail{
		    width: 20%;
		    float: right;
		    margin-top: 11px;
    }
	.ch-product{
		    color: white;
		    background-color: #004493
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
			<div class="col-sm-12 top-head">
				<h1 id="quoting-heading">
					<?php
						echo (!empty($proposalNum)) ? 'Proposal ID : '.$proposalNum : 'Quote ID : '.$quote_list->quote_id ;
						$quoteNProposalLink	= base64_encode($quote_list->quote_id.'#'.$proposalNum);
					?>
				</h1>
				
				<a href="<?=base_url('viewquote/'.$quoteNProposalLink)?>" class=" create_quote">
				 View All Items</a>
				<a href="#" class="print">
				
				<img src="<?=base_url('assets/front/images/print.png')?>" alt="print" /> Print
				</a>
				<a href="#" class=" create_quote download" data-proposal-no="<?=$proposalNum?>" data-quote-id="<?=$quote_list->quote_id?>">
					<i class="fa fa-file-excel-o" aria-hidden="true"></i> BOM
				</a>
				<a href="<?=base_url().'download/'.$quote_list->quote_id;?>" target="_blank" class=" create_quote">
					<i class="fa fa-download" aria-hidden="true"></i> Proposal
				</a>
				<a class="create_quote add_new_item" id="add_new_item" style="display:none">Add New Item</a>
				<a href="<?=base_url('viewquote/'.$quoteNProposalLink)?>" class="create_quote">
					< Back
				</a>
			</div>

			<div class="col-xs-6 inner-form" id="innerformdetails">
				<div class="form-group">
					<div class="row">
						<?php
							echo form_open('', array('class'=>'form-row ','id'=>'index_form','data-parsley-validate'=>'data-parsley-validate'));
							$accounNumber	= !empty($quote_list->accountnumber) ? $quote_list->accountnumber : '';
							//print_r($quote_list);
						?>
						
							<input type="hidden" name="customer" id="customer" value="<?=$accounNumber?>[<?=$quote_list->division_id.'-'.$quote_list->customer_id?>]">
							
						<input type="hidden" name="old_quoteid" id="old_quoteid" value="<?=$quote_list->quote_id?>" />
						<input type="hidden" id="choose-sales" name="choose-sales" value="<?=$quote_list->salesperson_id?>" />
						<input type="hidden" id="choose-wtclass" name="choose-wtclass" value="<?=$quote_list->wt_class?>" />
						<input type="hidden" name="opportunity" id="opportunity" value="<?=$quote_list->crm_opportunity?>" />
						<input type="hidden" id="contact" name="contact" value="<?=$quote_list->crm_contactid?>" />
						<input type="hidden" id="lead-time" name="lead-time" value="<?=$quote_list->aro_leadtime?>" />
						<input type="hidden" id="proposal_number" name="proposal_number" value="<?=!empty($quote_list->proposal_num)?$quote_list->proposal_num:''?>" />
						<textarea id="edit_quote_description" name="edit_quote_description" style="display:none"></textarea>
						<?=form_close()?>
						<div class="form-row half product-net ch-product">
							<label class="ch-product"><h5 style="color:white;">Choose Product</h5></label>
							<div class="select1">
								<select id="choose-product" name="choose-product" class="changeCustom">
									<?php echo getProductType("$this->user_name",'custom_net');?>
								</select>
							</div>
						</div>
					</div>
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
					<div id="flip" class="panel-heading"> 
						<h5 style="color:white;float:right;"> 
							Items in Quote [ ] 
							<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
						</h5> 
					</div>
					<div id="panel" class="panel-body qlist" ></div>
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
	/* ================= javascript start here ==============*/
	$(document).ready(function(){
		
		$(".select1").find('select').selectBoxIt();		
		
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
				 		
					    $('div.qlist table').append('<tr><td style="font-weight:600;width:34%;text-align:left;"><a href="'+href_link+'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>'+  data[i].product_type +'['+data[i].product+']  &nbsp;&nbsp;&nbsp;x' +  data[i].quantity   
					    										   + '  &nbsp;&nbsp;&nbsp;@$' +  data[i].totalcost.toFixed(2) + '</a></td></tr>');
					    $('div.qlist table').append('<tr class="border_bottom"><td style="text-align:left;padding-left: 13px;border-bottom: 1px solid #cfd1d2;">'+ desc +'</td></tr>')
					}
				 });

		/* customer search JS  */
		$('.changeCustom').change(function (){
			var page	= $(this).val();
			if(page=="rack_guard_(ergu3)"){page="cargo_net";}
			if(page=="custom_net_(ind)"){page="custom_net_ind";}
			showpage(page);
		});
		/*========================================create quete for psn or net ====================*/
	function showpage(page)
	{	$('#page_layout').html('<div  style="float:left;position: relative;left: 0px;top: 0px;width: 100%;min-height: 100px; height:100%;z-index: 9999;background: url(<?=base_url()?>/assets/front/images/loading2.gif) 50% 50% no-repeat rgb(249,249,249);opacity: 8; "></div>');
			$.post('<?=base_url('frontend/home/getViewPage')?>',{'view':page}, function (response){
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
				if(page=='custom_net_ind'){
					$('#inet_form').parsley().isValid();
					if(quote_id==''){
						$('#quoting-heading').text('Custom Net(IND) Quoting');
					}
				}
				if(page=='hardware'){
					$('#hardware_form').parsley().isValid();				
					if(quote_id==''){
					$('#quoting-heading').text('Hardware Quoting');
						}
						addplusminus();
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
				if(page=='rocbloc'){
					$('#roc_bloc_form').parsley().isValid();					
					if(quote_id==''){
					$('#quoting-heading').text('RocBloc Quoting');
						}
				}
				if(page=='webnets'){
					$('#webnets_form').parsley().isValid();
					if(quote_id==''){
					$('#quoting-heading').text('Webnets Quoting');
						}
				}
				if(page=='cargo_net'){
					$('#cargonet_form').parsley().isValid();
					if(quote_id==''){
						$('#quoting-heading').text('Rack Guard Quoting');
					}
				}
				if(page=='cargo_climbing_net'){
					$('#cargoclimb_form').parsley().isValid();
					if(quote_id==''){
						$('#quoting-heading').text('Cargo Climbing Net Quoting');
					}
				}
				if(page=='skynets'){
					$('#display-proposal-number').hide();
					$('#skynets_form').parsley().isValid();
					if(quote_id==''){
						$('#quoting-heading').text('Skynets Quoting');
					}	
				}
				if(page=='template'){
					$('#template_form').parsley().isValid();					
					if(quote_id==''){
						$('#quoting-heading').text('Template Quoting');
					}
				}
				if(page=='netform'){
					$('#netform_form').parsley().isValid();
					if(quote_id==''){
						$('#quoting-heading').text('Netform Quoting');
					}
				}
				if(page=='write_in'){
					$('#writein_form').parsley().isValid();					
					if(quote_id==''){
						$('#quoting-heading').text('Write In Quoting');
					}
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
				
				$(".download").hide();
				$(".select1").find('select').selectBoxIt();
				
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
  $(".right-bar").on("click",".download",function() {
		var quote	= '<?=$quote_list->quote_id?>';
		var proposal= '<?=$proposalNum?>';
		
		var url			= '<?=base_url('frontend/excel/viewExport/')?>';
		var finalUrl	= quote+'#'+proposal;
			finalUrl	= window.btoa(finalUrl);
			finalUrl	= url+'/'+finalUrl;
		window.location.href	= finalUrl;
  });
  /* download quote details js */ 
   });
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
	/* Product Quantity Minus (17-07-2017)  */
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

$('.right-bar').on('click','#saveCalculatehardware', function (){
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
						$(".order-section").show();
						$("#old_quoteid").val(data.html);
						$("#quoting-heading").html('Proposal ID : '+data.proposalNumber);
						$("#proposal_number").val(data.proposalNumber);
						$("#index_form").hide();
						$(".download").show();
						alert('Your Final Quote Successfully Save');
						quoteDisplay();
					}
				});
			}
	});
$('#page_layout').on('click','#savehardwareQuote', function (){
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
							$("#saveQuote").show();							
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
	
	/*------------------------add Samplet --------------------------*/
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
						$(".download_proposal").show();
						/* adding the new button to add new item in existing quote */
						$("#add_new_item").attr('href','<?=base_url('addnewitem')?>'+'/'+data.html);
						$("#add_new_item").show();
						
						alert('Quote is successfully saved');
						quoteDisplay();
					}
				});
			}
	});
	
	$('#page_layout').on('click','#calculateSampletQuote', function (){
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
	/*------------------------add samplet --------------------------*/
	
	
	
	
	/*------------------------add baynets --------------------------*/
	$('.right-bar').on('click','#savebaynetQuote', function (){
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
							$(".order-section").show();
							$("#old_quoteid").val(data.html);
							$("#quoting-heading").html('Proposal ID : '+data.proposalNumber);
							$("#proposal_number").val(data.proposalNumber);
							$("#index_form").hide();
							$(".download").show();
							
							$(".download_proposal").show();
							/* adding the new button to add new item in existing quote */
							$("#add_new_item").attr('href','<?=base_url('addnewitem')?>'+'/'+data.html);
							$("#add_new_item").show();
							clearQuoteDescriptionAfterSaving();
							alert('Your Final Quote Successfully Save');
							quoteDisplay();
						}
					}else{
						alert(data.error);
					}
				});
			}
	});

	$('#page_layout').on('click','#calculatebayQuote', function (){
		
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
							$("#saveQuote").show();							
							$('.right-bar').addClass('final_quote');
						}
					}else{
						alert(data.error);
					}
				});
			}
	});
	/*------------------------add baynets --------------------------*/
	/*------------------------add custom net --------------------------*/
		$("#page_layout").on('change','#borderoption',function (){
			var net_border	= $(this).val();
			if(net_border!=''){
				$.post('<?=base_url('frontend/home/populateThreadlist')?>',{'keyword':net_border},function (response){
					$('#threaddiv').html(response);
					$('#net_form').parsley().isValid();
					$(".custom-select").customselect();
				});
			}
			
			populate_cuttingstyle();
		});
		
		$('#page_layout').on('change','#nettingtype_customnet',function (){
			populate_productlist();
		});
		
		$('#page_layout').on('select','#nettingtype_customnet',function (){
			populate_productlist();
		});
		
		$('#page_layout').on('change','#borderoption2',function (){
			populate_cuttingstyle();
		});

	
	function populate_productlist(){
		var search		= $('#nettingtype_customnet').val();
		var net_type	= 'net';
		populateProductOptions(search,net_type,'first-select');
		
		
		var border_type1 =  'sewnborder';
		populateProductOptions(search,border_type1,'second-select');
		
		
		var border_type2 =  'wovenborder';
		populateProductOptions(search,border_type2,'third-select');
		
		
		
		var border_type3 =  'rolledgoods';
		populateProductOptions(search,border_type3,'fourth-select');
		
		
		var addon_type =  'addon';
		populateProductOptions(search,addon_type,'addons');
		populate_cuttingstyle();
	}
	
	function populateProductOptions(product,type,id){
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
			{'product':product,'type':type,'var_name':varibale_id, 'name':varibale_name},
			 function (response){
				
				if(type=='sewnborder'){
					$('#'+id).html(response);
					$('#net_form').parsley().isValid();
					/*$(".select1").find('select').selectBoxIt();*/
					$(".custom-select").customselect();
					populate_threadlist();
				}else if(type=='Rope'){
					$('.'+id).html(response);
					if(id=='horizontal-rope-type'){					
					$( "#horizontals_div").find('select').first().attr('data-parsley-required','true');
					}
					if(id=='vertical-rope-type'){
					$( "#verticals_div").find('select').first().attr('data-parsley-required','true');
					}
					$('#netform_form').parsley().isValid();
					$(".custom-select").customselect();
				}else if(type=='Termination'){
					$('.'+id).html(response);
					$( '.'+id).find('select').addClass('custom-select');
					$('#netform_form').parsley().isValid();
					$(".custom-select").customselect();
				}else{
					$('#'+id).html(response);
					$('#net_form').parsley().isValid();
					$(".select1").find('select').selectBoxIt();
					$(".custom-select").customselect();
				}
			});
		}
	}
	

	
	function populate_threadlist(){
		var net_border	= document.getElementById('borderoption').value;
		if(net_border!=''){
			$.post('<?=base_url('frontend/home/populateThreadlist')?>',{'keyword':net_border},function (response){
				$('#threaddiv').html(response);
				$('#net_form').parsley().isValid();
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
		} else if (net_border != "None") {
			number=1;
		} else if (net_border2 != "None"){
			number=2;
		} else {
			number=2;
		}
		var populatedCutting	= '';
		$.post('<?=base_url('frontend/home/getCuttingStyleChangesOnProduct')?>',{'number':number},function (response){
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
			$.post('<?=base_url('frontend/home/getProductSpecification')?>',{'keyword':search},function (response){
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
		$('#index_form').parsley().validate();
		$('#net_form').parsley().validate();
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
							$(".order-section").show();
							$("#old_quoteid").val(data.html);
							$("#quoting-heading").html('Proposal ID : '+data.proposalNumber);
							$("#proposal_number").val(data.proposalNumber);
							$("#index_form").hide();
							$(".download").show();
							
							$(".download_proposal").show();
							/* adding the new button to add new item in existing quote */
							$("#add_new_item").attr('href','<?=base_url('addnewitem')?>'+'/'+data.html);
							$("#add_new_item").show();
							clearQuoteDescriptionAfterSaving();
							alert('Your Final Quote Successfully Save');
							quoteDisplay();
						}
					}else{
						alert(data.error);
					}
				});
			}
	});

	$('#page_layout').on('click','#calculateCustomNetQuote', function (){
		$('#index_form').parsley().validate();
		$('#net_form').parsley().validate();
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
			$('#numberofaddons').removeAttr('data-parsley-required');
			
			$('#addonuom').removeAttr('data-parsley-required');

		}else{
			$('#numberofaddons').attr('data-parsley-required','true');
			
			$('#addonuom').attr('data-parsley-required','true');
			
			
		}
	});
	
	$('#page_layout').on('blur','#addlpart',function (){
		var val=$(this).val();
		if(val==''){
			$('#addlcost').removeAttr('data-parsley-required');
			$('#addllabor').removeAttr('data-parsley-required');
			}else{
			$('#addlcost').attr('data-parsley-required','true');
			$('#addllabor').attr('data-parsley-required','true');
			}
		});
	/*------------------------add custom net --------------------------*/
	/*------------------------add custom psn --------------------------*/
	$('#page_layout').on('click','#psnQuoteCalucator', function (){
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
						$(".order-section").show();
						$("#old_quoteid").val(data.html);
						$("#quoting-heading").html('Proposal ID : '+data.proposalNumber);
						$("#proposal_number").val(data.proposalNumber);
						$("#index_form").hide();
						$(".download").show();
						
						$(".download_proposal").show();
						/* adding the new button to add new item in existing quote */
						$("#add_new_item").attr('href','<?=base_url('addnewitem')?>'+'/'+data.html);
						$("#add_new_item").show();
						clearQuoteDescriptionAfterSaving();
						alert('Your Final Quote Successfully Save');
						quoteDisplay();
					}
				});
			
		}
	});
	/*------------------------add custom psn --------------------------*/
	/*------------------------add lilypad --------------------------*/	
	$('#page_layout').on('change','#nettingtype_lilypad',function (){
			populate_productlistlilypad();
	});
		
	function populate_productlistlilypad(){
		var search		= $('#nettingtype_lilypad').val();
		var net_type	= 'Rope';
		populateProductOptionslilypad(search,net_type,'first-select');
		
		
		var border_type1 =  'CargoRope';
		populateProductOptionslilypad(search,border_type1,'second-select');
		
		
		var border_type2 =  'Tee';
		populateProductOptionslilypad(search,border_type2,'third-select');
		
		
		
		var border_type3 =  'Joint';
		populateProductOptionslilypad(search,border_type3,'fourth-select');
		
		
		var addon_type =  'SpreaderBar';
		populateProductOptionslilypad(search,addon_type,'fifth-select');

	}
	
	function populateProductOptionslilypad(product,type,id){
		var varibale_id		= $("#"+id).attr('alt-data');
		var varibale_name	= $("#"+id).attr('alt-name');
		var wt ='';
		if(product!='' && type!=''){
			$.post('<?=base_url('frontend/home/populateProductOptions')?>',
			{'product':product,'wt':wt,'type':type,'var_name':varibale_id, 'name':varibale_name},
			 function (response){
				
					$('#'+id).html(response);
					$('#lilypad_form').parsley().isValid();
					/*$(".select1").find('select').selectBoxIt();*/
					$(".custom-select").customselect();
				
			});
		}
	}
	
    
	
		$('.right-bar').on('click','#savelilypadQuote', function (){
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
							$(".order-section").show();
							$("#old_quoteid").val(data.html);
							$("#quoting-heading").html('Proposal ID : '+data.proposalNumber);
							$("#proposal_number").val(data.proposalNumber);
							$("#index_form").hide();
							$(".download").show();
							
							$(".download_proposal").show();
							/* adding the new button to add new item in existing quote */
							$("#add_new_item").attr('href','<?=base_url('addnewitem')?>'+'/'+data.html);
							$("#add_new_item").show();
							clearQuoteDescriptionAfterSaving();
							alert('Your Final Quote Successfully Save');
							quoteDisplay();
						}
					}else{
						alert(data.error);
					}
				});
			}
	});

	$('#page_layout').on('click','#calculatelilypadQuote', function (){
		
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
	/*------------------------add lilypad --------------------------*/
	/*------------------------aad rocbloc --------------------------*/
	$("#page_layout").on('change','#borderoption1',function (){
			var net_border	= $(this).val();
			
			if(net_border!=''){
				$.post('<?=base_url('frontend/home/populateThreadlist')?>',{'keyword':net_border},function (response){
					$('#threaddiv').html(response);
					$('#roc_bloc_form').parsley().isValid();
					/*$(".select1").find('select').selectBoxIt();*/
					$(".custom-select").customselect();
				});
			}
			
			
		});
		
		$('#page_layout').on('change','#nettingtype_rocbloc',function (){
			populate_productlistrocbloc();
		});
		
		
	function populateThreadList_rocbloc(){
		var net_border	= document.getElementById('borderoption1').value;
		if(net_border!=''){
			$.post('<?=base_url('frontend/home/populateThreadlist')?>',{'keyword':net_border,'csrf_test_name':'<?php echo $this->security->get_csrf_hash(); ?>'},function (response){
				$('#threaddiv').html(response);
				$('#roc_bloc_form').parsley().isValid();
				$(".select1").find('select').selectBoxIt();
			});
		}
	}
	
	
	function populate_productlistrocbloc(){
		var search		= $('#nettingtype_rocbloc').val();
		var net_type	= 'net';
		populateProductOptionsrocbloc(search,net_type,'first-select');
		
		
		var border_type1 =  'liner';
		populateProductOptionsrocbloc(search,border_type1,'second-select');
		
		
		var border_type2 =  'border';
		populateProductOptionsrocbloc(search,border_type2,'third-select');
		
		
		
		var border_type3 =  'grommet';
		populateProductOptionsrocbloc(search,border_type3,'fourth-select');
		
		
	}
	
	function populateProductOptionsrocbloc(product,type,id){
		var varibale_id		= $("#"+id).attr('alt-data');
		var varibale_name	= $("#"+id).attr('alt-name');
		var wt = '';
		if(product!='' && type!=''){
			$.post('<?=base_url('frontend/home/populateProductOptions')?>',
			{'product':product,'wt':wt,'type':type,'var_name':varibale_id, 'name':varibale_name},
			 function (response){
				if(type=='sewnborder'){
					$('#'+id).html(response);
					populateThreadList_rocbloc();
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
	

	
$('.right-bar').on('click','#saverocblocQuote', function (){
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
							$(".order-section").show();
							$("#old_quoteid").val(data.html);
							$("#quoting-heading").html('Proposal ID : '+data.proposalNumber);
							$("#proposal_number").val(data.proposalNumber);
							$("#index_form").hide();
							$(".download").show();
							
							$(".download_proposal").show();
							/* adding the new button to add new item in existing quote */
							$("#add_new_item").attr('href','<?=base_url('addnewitem')?>'+'/'+data.html);
							$("#add_new_item").show();
							clearQuoteDescriptionAfterSaving();
							alert('Your Final Quote Successfully Save');
							quoteDisplay();
						}
					}else{
						alert(data.error);
					}
				});
			}
	});

	$('#page_layout').on('click','#calculaterocblocQuote', function (){
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
							$("#saveQuote").show();							
							$('.right-bar').addClass('final_quote');
						}
					}else{
						alert(data.error);
					}
				});
			}
	});
	
	/*------------------------add rocbloc --------------------------*/

	/*------------------------add webnets --------------------------*/
	$( document ).ready(function() {
		
		$("#choose-product").change(function () {	
		$('#index_form').parsley().validate();		
			var va	= $(this).find('option:selected').text();
			if(va == 'Web Net'){
				setTimeout(function(){ populate_productlistwnc(); }, 300);
			}

			if(va == 'Cargo Climbing Net'){
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

	$(document).on('change','#materialoption',function (){
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
			{'product':product, 'wt':wt,'type':type,'var_name':varibale_id, 'name':varibale_name,
			'csrf_test_name':'<?php echo $this->security->get_csrf_hash(); ?>'},
			 function (response){
					if(type=='webnet'){
			 		    $('#zero-select').html(response);
 					    $('#webnets_form').parsley().isValid();
			 		    $(".custom-select").customselect();
					}
					if(type=='grommet'){
					    $('#second-select').html(response);
    				    $('#webnets_form').parsley().isValid();
					    $(".custom-select").customselect();
					}
					if(type=='hardware'){					
				 	    $('#third-select').html(response);
					    $('#webnets_form').parsley().isValid();
				 	    $(".custom-select").customselect();
					}
			});
		}
	}

	var m_wnet = 1;
	$('#page_layout').on('click','#calculatewebnetQuote', function (){
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
							
							$(".order-section").show();
							$("#old_quoteid").val(data.html);
							$("#quoting-heading").html('Proposal ID : '+data.proposalNumber);
							$("#proposal_number").val(data.proposalNumber);
							$("#index_form").hide();
							$(".download").show();
							
							$(".download_proposal").show();
							$("#add_new_item").attr('href','<?=base_url('addnewitem')?>'+'/'+data.html);
							$("#add_new_item").show();
							alert('Your Final Quote Successfully Save');
							quoteDisplay();
						}
					}else{
						alert(data.error);
					}
				});
			}
	});
	/*------------------------add webnets --------------------------*/
	
	/*------------------------add skynets --------------------------*/
    
    $('#page_layout').on('click','#calculateskynetQuote', function (){
		$('#index_form').parsley().validate();
		$('#skynets_form').parsley().validate();
		var id=$(this);
			if ($('#skynets_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				var total	= 0;
				$(".order-section").hide();
				
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
		$('#index_form').parsley().validate();
		$('#skynets_form').parsley().validate();
		var id=$(this);
			if ($('#skynets_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				var total	= 0;
				$.post('<?=base_url('frontend/home/saveskynetQuote')?>',
				$('#index_form,#skynets_form').serialize(),
				function (response){
					var data	= JSON.parse(response);
					console.log(data);
					if(data.error==''){
						if(data.html!=''){
							id.hide();
														
							$(".order-section").show();
							$("#old_quoteid").val(data.html);
							$("#quoting-heading").html('Proposal ID : '+data.proposalNumber);
							$("#proposal_number").val(data.proposalNumber);
							$("#index_form").hide();
							$(".download").show();
							
							$(".download_proposal").show();
							$("#add_new_item").attr('href','<?=base_url('addnewitem')?>'+'/'+data.html);
							$("#add_new_item").show();
							alert('Your Final Quote Successfully Save');
							quoteDisplay();
						}
					}else{
						alert(data.error);
					}
				});
			}
	});
	/*------------------------aad cargonet --------------------------*/

	$('#page_layout').on('click','#calculatecargonetQuote', function (){
		$('#index_form').parsley().validate();
		$('#cargonet_form').parsley().validate();
		var id=$(this);
			if ($('#cargonet_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				var total	= 0;
				$(".order-section").hide();

				$.post('<?=base_url('frontend/home/cargonetQuote')?>',
					$('#index_form,#cargonet_form').serialize(),
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

	$('.right-bar').on('click','#savecargonetQuote', function (){
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
							
							$(".order-section").show();
							$("#old_quoteid").val(data.html);
							$("#quoting-heading").html('Proposal ID : '+data.proposalNumber);
							$("#proposal_number").val(data.proposalNumber);
							$("#index_form").hide();
							$(".download").show();
							
							$(".download_proposal").show();
							$("#add_new_item").attr('href','<?=base_url('addnewitem')?>'+'/'+data.html);
							$("#add_new_item").show();
							alert('Your Final Quote Successfully Save');
							quoteDisplay();
						}
					}else{
						alert(data.error);
					}
				});
			}
	});

	/*------------------------aad cargoclimbing net --------------------------*/
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
		$('#index_form').parsley().validate();
		$('#cargoclimb_form').parsley().validate();
		var id=$(this);
			if ($('#cargoclimb_form').parsley().isValid() && $('#index_form').parsley().isValid()) {
				var total	= 0;
				$(".order-section").hide();
				
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
														
							$(".order-section").show();
							$("#old_quoteid").val(data.html);
							$("#quoting-heading").html('Proposal ID : '+data.proposalNumber);
							$("#proposal_number").val(data.proposalNumber);
							$("#index_form").hide();
							$(".download").show();
							
							$(".download_proposal").show();
							$("#add_new_item").attr('href','<?=base_url('addnewitem')?>'+'/'+data.html);
							$("#add_new_item").show();
							alert('Your Final Quote Successfully Save');
							quoteDisplay();
						}
					}else{
						alert(data.error);
					}
				});
			}
	});
	/*------------------------aad cargoclimbing net --------------------------*/

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
							$(".order-section").show();
							$("#old_quoteid").val(data.html);
							$("#quoting-heading").html('Proposal ID : '+data.proposalNumber);
							$("#proposal_number").val(data.proposalNumber);
							$("#index_form").hide();
							$(".download").show();
							
							$(".download_proposal").show();
							/* adding the new button to add new item in existing quote */
							$("#add_new_item").attr('href','<?=base_url('addnewitem')?>'+'/'+data.html);
							$("#add_new_item").show();

							alert('Your Final Quote Successfully Save');
							quoteDisplay();
						}
					}else{
						alert(data.error);
					}
				});
			}
	});

	$('#page_layout').on('click','#calculatewriteinQuote', function (){
		
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
							$("#saveQuote").show();
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
						$(".order-section").show();
						$("#old_quoteid").val(data.html);
						$("#quoting-heading").html('Proposal ID : '+data.proposalNumber);
						$("#proposal_number").val(data.proposalNumber);
						$("#index_form").hide();
						$(".download").show();
						
						$(".download_proposal").show();
						/* adding the new button to add new item in existing quote */
						$("#add_new_item").attr('href','<?=base_url('addnewitem')?>'+'/'+data.html);
						$("#add_new_item").show();

						alert('Your Final Quote Successfully Save');
						quoteDisplay();
					}
				});
			}
	});
	
	$('#page_layout').on('click','#saveTemplateQuote', function (){
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
						$(".order-section").show();
						$("#old_quoteid").val(data.html);
						$("#quoting-heading").html('Proposal ID : '+data.proposalNumber);
						$("#proposal_number").val(data.proposalNumber);
						$("#index_form").hide();
						$(".download").show();
						
						$(".download_proposal").show();
						/* adding the new button to add new item in existing quote */
						$("#add_new_item").attr('href','<?=base_url('addnewitem')?>'+'/'+data.html);
						$("#add_new_item").show();
						clearQuoteDescriptionAfterSaving();
						alert('Quote is successfully saved');
						quoteDisplay();
					}
				});
			}
	});
	
	$('#page_layout').on('click','#calculateNetformQuote', function (){
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
			populateProductOptions(search,'Rope','vertical-rope-type');
			populateProductOptions(search,'Rope','horizontal-rope-type');
			populateProductOptions(search,'Termination','terminal-top');
			populateProductOptions(search,'Termination','terminal-bottom');
			populateProductOptions(search,'Termination','horizontal-terminal-top');
			populateProductOptions(search,'Termination','horizontal-terminal-bottom');
		}
	});

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
			{'product':product,'wt':wt,'type':type,'var_name':varibale_id, 'name':varibale_name,'csrf_test_name':'<?php echo $this->security->get_csrf_hash(); ?>'},
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
					/*change on 07-02-2018*/
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
	
	/*------------------------add saleskit --------------------------*/
	
	/* Geting saleskit product options */
	
	$(document).on('change','#saleskit_product',function (){
		var product	= this.value;
		$.post('<?=base_url('frontend/home/getSaleskitProductOptions')?>',{'product':product,'type':'all','name':'saleskit','var_name':'saleskit'},function (response){
			$('#option-value').html(response);
		});
	});

	$('.right-bar').on('click','#saveCalculateSaleskit', function (){
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
						$(".order-section").show();
						$("#old_quoteid").val(data.html);
						$("#quoting-heading").html('Proposal ID : '+data.proposalNumber);
						$("#proposal_number").val(data.proposalNumber);
						$("#index_form").hide();
						$(".download").show();
						
						$(".download_proposal").show();
						/* adding the new button to add new item in existing quote */
						$("#add_new_item").attr('href','<?=base_url('addnewitem')?>'+'/'+data.html);
						$("#add_new_item").show();
						clearQuoteDescriptionAfterSaving();
						alert('Quote is successfully saved');
						quoteDisplay();
					}
				});
			}
	});
	
	$('#page_layout').on('click','#calculateSalesKitQuote', function (){
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
	
	
	/*------------------- Rope Quote Function (12-07-2017) --------------------------*/
	$('#page_layout').on('click','.add-rope-row',function() {
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
						$(".download").show();
						$(".download_proposal").show();
						
						/* adding the new button to add new item in existing quote */
						$("#add_new_item").attr('href','<?=base_url('addnewitem')?>'+'/'+data.html);
						$("#add_new_item").show();

						
						alert('Quote is successfully saved');
						quoteDisplay();
					}
				});
			}
	});
	
	$('#page_layout').on('click','#calculateRopeQuote', function (){
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
	
	
	/*-------------------End Rope Quote Function (12-07-2017) --------------------*/
	
	/*------------------------add saleskit --------------------------*/
	
	
	/* This function used for get edit quote description on blur evenet (26-07-2017) */ 
	$(document).on('blur','.return_quote_description',function (){
		var textArea	= $(this).val();
		$('#edit_quote_description').val(textArea);
	});
	
	function clearQuoteDescriptionAfterSaving(){
		$('.return_quote_description').val('');
		$('#edit_quote_description').val('');
	}
	
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
	  console.log(newinches);
		return {'inches':newinches,'feets':newfeet}
	}
</script>
