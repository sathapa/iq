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
				<h1>Items List</h1>
				<a class="create_quote download-items-csv" id="download-items" >Download</a>
			</div>
			<div class="data-table-dash">
				<div>
				<?php
					$message	= $this->session->flashdata('message');
					echo $message;
				?>
				</div>

			<table class="orders-filter-table">
				<?=form_open('',array('name'=>'item-filter-form','id'=>'item-filter-form'))?>
				<tr>
						<td width="200">
							<div class="select1 input-design">
								<label>ItemCode </label>
								<input type="text" name="search_itemcode" id="search_itemcode" placeholder="ItemCode" value="">
							</div>
						</td>
						<td width="200">
							<div class="select1 input-design">
								<label>ProductLine </label>
								<select id="search_productline" name="search_productline" class="quote_status">
									<option value="All"  >All</option>
									<?=getQuoteHeaderLookUp('productlinedesc');?>
								</select>
							</div>
						</td>

						<td width="200">
							<div class="select1">
								<label>ProductType </label>
								<select id="search_producttype" name="search_producttype" class="quote_status">
									<option value="All"  >All</option>
									<?=getQuoteHeaderLookUp('producttypedesc');?>
								</select>
							</div>
						</td>

						<td width="200">
							<div class="select1">
								<label>ProcurementType </label>
								<select id="search_procurementtype" name="search_procurementtype" class="quote_status">
									<option value="All"  >All</option>
									<?=getQuoteHeaderLookUp('procurementtypedesc');?>
								</select>
							</div>
						</td>
						
						<td width="200">
							<div class="select1 input-design">
								<label>Vendor</label>
								<input type="text" name="search_vendor" id="search_vendor" placeholder="Vendor" value="">
							</div>
						</td>
						
						<td width="200">
							<div class="select1 input-design">
								<label class="order-show-details">Warehouse</label>
								<select name="search_warehouse" id="search_warehouse" class="quote_status">
										<option value="">All</option>
										<option value="000">000</option>
										<option value="005">005</option>
										<option value="181">181</option>
										<option value="430">430</option>
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
						<th>##</th>
						<th>Item Code</th>
						<th>Item Description</th>
						<th>Product Line</th>
						<th>Product Type</th>
						<th>Procurement Type</th>
						<th>Vendor</th>
						<th>UOM</th>
						<th>Ship Weight</th>
						<th>Buyer Code</th>
						<th>DefaultWH</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody class="filter-data">
					<?php
					if(!empty($items) && !empty($items)){
						$i=0;
						foreach($items as $item){
							$i++;
							$itemCode			= !empty($item->itemcode) ? $item->itemcode : '';
							$itemcodedesc		= !empty($item->itemcodedesc) ? $item->itemcodedesc : '';
							$productline		= !empty($item->productlinedesc) ? $item->productlinedesc : '';
							$producttype		= !empty($item->producttypedesc) ? $item->producttypedesc : '';
							$procurementtype	= !empty($item->procurementtypedesc) ? $item->procurementtypedesc : '';
							$vendor				= !empty($item->primaryvendorno) ? $item->primaryvendorno : '';
							$uom				= !empty($item->standardunitofmeasure) ? $item->standardunitofmeasure : '';
							$shipWeight			= !empty($item->shipweight) ? $item->shipweight : '';
							$buyerCode			= !empty($item->buyercode) ? $item->buyercode : '';
							$warehouse			= !empty($item->defaultwarehousecode) ? $item->defaultwarehousecode : '';
							
							echo '<tr id="_'.$itemCode.'">
							<td>'.$i.'</td>
							<td>'.$itemCode.'</td>
							<td width="300">'.$itemcodedesc.'</td>
							<td>'.$productline.'</td>
							<td>'.$producttype.'</td>
							<td>'.$procurementtype.'</td>
							<td>'.$vendor.'</td>
							<td>'.$uom.'</td>
							<td>'.$shipWeight.'</td>
							<td>'.$buyerCode.'</td>
							<td>'.$warehouse.'</td>
							<td>
								<a class="view_detail tooltip" href="'.base_url('inventories/'.$itemCode).'">
									<i class="fa fa-eye" aria-hidden="true"></i>
									<span class="tooltiptext">View Inventories</span>
								</a>
								<a class="view_detail tooltip" href="'.base_url('edititem/'.base64_encode($itemCode)).'">
									<i class="fa fa-edit" aria-hidden="true"></i>
									<span class="tooltiptext">Edit Item</span>
								</a>
								<a class="view_detail tooltip item-code-specification" data-item-code="'.$itemCode.'" href="javascript:void(0)">
									<i class="fa fa-empire" aria-hidden="true"></i>
									<span class="tooltiptext">View Specification</span>
								</a>
								<a class="view_detail tooltip view-product-image" data-item-code="'.$itemCode.'" href="javascript:void(0)">
									<i class="fa fa-picture-o" aria-hidden="true"></i>
									<span class="tooltiptext">Product Image</span>
								</a>
								<a class="view_detail tooltip " href="'.base_url('itemVendorsInfo/'.base64_encode($itemCode)).'">
									<i class="fa fa-eye" aria-hidden="true"></i>
									<span class="tooltiptext">Item Vendor Info</span>
								</a>
							</td>
							</tr>';
						}
					}else{
						echo '<tr><td class="10">Data not found!</td></tr>';
					}
					?>
				</tbody>
			</table>
			
			</div>
		</div>
		
	</div>

<!-- Right Bar Section -->
</section>
	<div class="md-modal md-effect-1 show-specification" id="show-specification">
		<div class="md-content">
			<div class="pop-main-cont">
				<div class="pop-header">
					<h2 id="item-code"></h2>
					<button class="md-close "><i class="fa fa-times" aria-hidden="true"></i></button>
				</div>
				<div class="pop-body cf" id="item-code-show-specification">
					<div class="item-code-specification-loader">
						<h3>Processing...</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="md-overlay"></div>
	<!-- Popup Used for Display the Product Image. -->
	<div class="md-modal md-effect-1 show-product-image" id="show-product-image">
		<div class="md-content">
			<div class="pop-main-cont">
				<div class="pop-header">
					<h2 id="item-code">Product Item Image</h2>
					<button class="md-close "><i class="fa fa-times" aria-hidden="true"></i></button>
				</div>
				<div class="pop-body cf" id="item-product-image">
					<img src="<?=base_url('assets/front/images/BAY.png')?>" >
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
	
/* Confirmation box */
$('[data-toggle=confirmation]').confirmation({
	rootSelector: '[data-toggle=confirmation]',
});

$('#quote-web-table').DataTable({
	"pageLength": 50,language: {
		searchPlaceholder: "Enter Search Value...",
		paginate: {
			next: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
			previous: '<i class="fa fa-angle-left" aria-hidden="true"></i>'  
		}
	}
});
/* Making The Dropdown of customers Auto complete search */
var select = false;
$( "#search_itemcode" ).autocomplete({
	source: '<?=base_url('frontend/products/autoCompleteItemCodeSearch')?>',
	open: function(event, ui) { if(select) select=false; },
	select: function (a, b) {
		select=true;
	}
	}).blur(function(){
		var cus	= $("#search_itemcode").val();
		if(!select || cus=='No Record Found !'){
			$("#search_itemcode").val('');
		}
});	

/* Making The Dropdown of customers Auto complete search */
var select = false;
$( "#search_vendor" ).autocomplete({
	source: '<?=base_url('frontend/products/autoCompleteVendroCodeSearch')?>',
	open: function(event, ui) { if(select) select=false; },
	select: function (a, b) {
		select=true;
	}
	}).blur(function(){
		var cus	= $("#search_vendor").val();
		if(!select || cus=='No Record Found !'){
			$("#search_vendor").val('');
		}
	});	
});

/* Function used for display the open a popup of item specificatiom */
$(document).on('click','.item-code-specification',function (){
	var itemCode	= $(this).attr('data-item-code');
	$('#show-specification').modal('show');
	if(itemCode!=''){
		$('#item-code-show-specification').html('<div class="item-code-specification-loader"><h3>Proccessing...</h3></div>');
		$('#item-code').text(itemCode);
		$.post('<?=base_url('frontend/inventory/showSpecification')?>',{'item_code':itemCode},function (response){
			var data	= JSON.parse(response);
			$('#item-code-show-specification').html(data.html);
		});
	}
});
	
$(document).on('click','.md-close',function (){
	$('#show-specification').modal('hide');
});
	
/* Function used for display the open a popup of item product image */
$(document).on('click','.view-product-image',function (){
	$('#show-product-image').modal('show');
});

$(document).on('click','.md-close',function (){
	$('#show-product-image').modal('hide');
});
	
/* Csv Download the item data */
$(document).on('click','.download-items-csv',function (){
	var itemcode			= $('#search_itemcode').val();
	var productLine		= $('#search_productline').val();
	var productType		= $('#search_producttype').val();
	var procurement		= $('#search_procurementtype').val();
	var vendor 			= $('#search_vendor').val();
	var warehouse		= $('#search_warehouse').val();
	var str				= itemcode+'#'+productLine+'#'+productType+'#'+procurement+'#'+vendor+'#'+warehouse;
		str				= window.btoa(str);
	var url			= '<?=base_url('frontend/excel/downloadItemsList/')?>';
	var finalUrl	= url+'/'+str;
	window.location.href	= finalUrl;
});

</script>
