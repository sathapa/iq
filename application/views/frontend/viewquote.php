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
			<div class="col-sm-12 top-head">
				<h1>
					<?php
					
						echo (!empty($proposalNum)) ? 'Proposal ID [ '.$proposalNum.' ]' : 'Quote ID [ '.$quote.' ]' ;
						$exportUrl	= base64_encode($quote.'#'.$proposalNum);
					?>
				</h1>
				<div class="search-main">
					<?php
						if(!empty($quoteStatus) && ($quoteStatus!= 'Ordered' && $quoteStatus!='Cancelled')){
					?>
					<a href="<?=base_url('addnewitem').'/'.$quote?>" class="create_quote">
						 Add New Item
					</a>
					<?php
						}
					?>
					<a href="<?=base_url('customnet')?>" class="create_quote">
						 Create New Quote
					</a>
					
					<a href="<?=base_url().'export/'.$exportUrl;?>" class="create_quote download">
						Export
					</a>
				 
					<a href="<?=base_url('frontend/home/download/'.$quote);?>" target="_blank" data-id="<?=$quote?>" data-url="<?=base_url().'download/'.$quote;?>" class="create_quote proposaldownload ">
						Proposal
					</a>
					<a class="create_quote bom_download" data-proposal-no="<?=$proposalNum?>" data-quote-id="<?=$quote?>">
						BOM
					</a>
					<a href="<?=base_url('managequote')?>" class="create_quote">
						 < Back
					</a>
				</div>
			</div>
			<div class="data-table-dash">
				
			<div id="alert-message"></div>
			
			<table class="table  table-bordered table-hover" id="quote-web-table">
				<thead>
					<tr>
						<th>Line #</th>
						<th></th>
						<th>Product</th>
						<th>Tag#</th>
						<th>Description</th>
						<th class="numeric">Quantity</th>
						<th>Special Instruction</th>
						<th class="numeric">Discount</th>
						<th class="numeric">Unit cost</th>
						<th class="numeric">Total cost</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					if(!empty($quote_existing_product)){
						$proposalTotalAmount	= 0;
						$totalFreight			= 0;
						$itemTotal				= 0;
						foreach($quote_existing_product as $val){
							/*print_r($val->product_type);*/

							$desc	= str_replace(';','<br />',$val->quote_description);
							$tag	= !empty($val->tag_number) ? $val->tag_number : 'N/A';
							$totalFreight	= ($totalFreight + $val->freight);
							$totalCost		= !empty($val->totalcost) ? number_format($val->totalcost,2) : '0.00';
							/*For unit item cost*/
							$qt = $val->quantity;
							$tcost = !empty($val->totalcost) ? $val->totalcost : 0;
							$unitcost 		= number_format($tcost/$qt,2);
							$cusReviewFlag	= !empty($val->customer_review_flag) ? '<span><img src="'.base_url('assets/front/images/exclamation.jpg').'"></span>' : '';
							echo '<tr id="selected_row_"'.trim($val->quote_line_no).'>
								<td>'.$val->quote_line_no.'</td>
								<td>'.$cusReviewFlag.'</td>
								<td>'.$val->product.'</td>
								<td>'.$tag.'</td>
								<td class="text-are">'.$desc.'</td>
								<td class="numeric">'.$val->quantity.'</td>
								<td>'.$val->special_instruction.'</td>
								<td class="numeric">'.$val->discount.'</td>
								<td class="numeric">'.$unitcost.'</td>
								<td class="numeric">'.$totalCost.'</td>';
								$editquote	= $quote.'_'.$val->quote_line_no.'_'.$val->product_type.'_'.$proposalNum.'_'.$quoteStatus;
								$editquote	= base64_encode($editquote);
								$proposalTotalAmount	= ($proposalTotalAmount + $val->totalcost);
					?>
         				<td>
							<?php
								if(!empty($groupPermissions) && in_array(2,$groupPermissions)){
									if(!empty($quoteStatus) && ($quoteStatus!= 'Ordered' && $quoteStatus!='Cancelled')){
							?>
							<a class="edit_detail tooltip" href="<?=base_url().'editquote/'.$editquote?>" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
								<span class="tooltiptext">Edit</span>
							</a>
							<?php 		}	} ?>
							<!--<a href="<?php //echo base_url('frontend/excel/excelExport/'.base64_encode($quote.'##'.$proposalNum.'##'.$val->quote_line_no.'##'.$val->product_type));?>" class="tooltip  download_bom" arr-data="<?=trim($val->quote_line_no);?>" arr-type="<?=$val->product_type?>">
								<i class="fa fa-download" aria-hidden="true"></i><span class="tooltiptext">BOM </span>
							</a>-->
							<a href="<?=base_url('frontend/excel/viewExport/'.base64_encode($quote.'#'.$proposalNum.'#'.$val->quote_line_no));?>" class="tooltip  download_bom" arr-data="<?=trim($val->quote_line_no);?>" arr-type="<?=$val->product_type?>" >
								<i class="fa fa-download" aria-hidden="true"></i><span class="tooltiptext">BOM </span>
							</a>
							<?php
								if(!empty($groupPermissions) && in_array(10,$groupPermissions)){
							?>
							<a class="delete_detail tooltip" data-toggle="confirmation" data-placement="left" data-singleton="true"  data-quote-id="<?=$val->quote_id?>" data-quote-line-no="<?=$val->quote_line_no?>"  href="javascript:void(0)"><i class="fa fa-trash" aria-hidden="true"></i>
								<span class="tooltiptext">Delete</span>
							</a>
							<?php } ?>
         				</td>
					</tr>
					<?php
						}
						$grandTotal	= ($proposalTotalAmount + $totalFreight);
						echo '<tr><td colspan="8" align="right"></td><td style="text-align:center;">Total Item Cost :</td>
						<td style="text-align:center;" ><strong> '.number_format($proposalTotalAmount,2).'</strong></td><td></td></tr>
						';	

						/*echo '<tr><td colspan="8" align="right"></td>
						<td colspan="right" class="manage-right"><strong>Total Item Cost : '.number_format($proposalTotalAmount,2).'</strong></td><td></td><td></td></tr>
						<tr><td colspan="8" align="right"></td>
						<td colspan="right" class="manage-right"><strong>Total Shipping : '.number_format($totalFreight,2).'</strong></td><td></td><td></td></tr>
						<tr><td colspan="8" align="right"></td>
						<td colspan="right" class="manage-right"><strong>Grand Total : '.number_format($grandTotal,2).'</strong></td><td></td><td></td></tr>';*/
					}else{
						echo '<tr>
								<td colspan="9" align="center">No Records found!</td>
							</tr>';
					}
					?>
				</tbody>
			</table>
			
			</div>
		</div>
		
		<div class="download_quote_line"></div>
	</div>

<!-- Right Bar Section -->
</section>
<?php
	$this->load->view('frontend/bottom');
?>
<script>
$(document).ready(function() {
	$('#quote-web-table').DataTable({"pageLength": 50,language: {
		searchPlaceholder: "Enter Search Value...",
		paginate: {
			next: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
			previous: '<i class="fa fa-angle-left" aria-hidden="true"></i>'    
		}
	}
	});
});
	$(".print").click(function () {
		var mode = 'iframe'; 
		var close = mode == "popup";
		var options = { mode : mode, popClose : close};
		$("#quote-web-table_wrapper").printArea( options );
	});

$('[data-toggle=confirmation]').confirmation({
	onConfirm: function() {
		var quoteId	= $(this).attr('data-quote-id');
		var quoteLineNo	= $(this).attr('data-quote-line-no');	
		if(quoteId!=''){
			$.post('<?=base_url('frontend/home/deletedQuoteLine')?>',
			{'quote_id':quoteId,'quote_line_no':quoteLineNo},function(response){
				if(response=='Yes'){
					$("#selected_row_"+quoteLineNo).hide();
						alert('Your quote line successfully deleted.');
						window.location.reload(true);
					}else{
						alert('Please try again some thing miss.');
						window.location.reload(true);
					}
			});
		}
	}
});
	$(".download").click(function() {
		$("#quote-web-table").table2excel({
			exclude: ".noExl",
			name: "quote details",
			filename:"<?=!empty($proposalNum) ? $proposalNum : $quote?>",
			fileext: ".xls"
		});
	});
	
	/* This function used for save generate pdf in a folder */
	/*$(document).on('click','.proposaldownload',function (){
		$(this).text('Downloading..');
		var parent	= $(this);
		var quote	= $(this).attr('data-id');
		
		$.post('<?=base_url('frontend/home/download')?>',{'quote':quote},function (response){
			if(response=='Yes'){
				var baseUrl	= '<?=base_url('frontend/home/downloadProposal')?>';
				window.location.href=baseUrl+'/'+quote;
				var alterMessage	= '<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Proposal Successfully Downloaded. </p></div>';
				$('#alert-message').html(alterMessage);
				parent.text('Proposal');
			}
		});

	});*/
	/* New BOM Download */
	$(document).on("click",".bom_download",function() {
		var quote	= $(this).attr('data-quote-id');
		var proposal= $(this).attr('data-proposal-no');
		
		var url			= '<?=base_url('frontend/excel/viewExport/')?>';
		var finalUrl	= quote+'#'+proposal;
			finalUrl	= window.btoa(finalUrl);
			finalUrl	= url+'/'+finalUrl;
		window.location.href	= finalUrl;
	});
</script>
