<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	$groupPermissions	= $this->group_permissions;
	
?>
<style>
#quote-web-table_paginate.dataTables_paginate {
	display: none;
	padding-top: 10px;
}
</style>
<!-- Right Bar Section -->


	<div class="right-bar">
		<div class="dashboard">
		<div class="form-section">
			<div class="col-sm-12 top-head">
				<h1>Manage ISO NCR</h1>
				<div class="search-main">
				</div>
			</div>

			<div class="data-table-dash ">
			<div id="alert-message"><?php echo $this->session->flashdata('message');?></div>
			
			<table class="summary-filter-table">
				<?php
					$searchCustomer	= !empty($searchParam['customer']) ? $searchParam['customer'] : '';
					$ncrCategory	= !empty($searchParam['ncrCategory']) ? $searchParam['ncrCategory'] : '';
					$startDate		= !empty($searchParam['startDate']) ? $searchParam['startDate'] : ''; 
					$endDate		= !empty($searchParam['endDate']) ? $searchParam['endDate'] : ''; 
					
				?>
				<?=form_open('',array('name'=>'iso-filter-form','id'=>'iso-filter-form'))?>
				<tr>
					<td width="200">
						<div class="select1 input-design">
							<label>Customer</label>
							<input type="text" name="search_customer" id="search_customer" placeholder="Customer" 
							value="<?=$searchCustomer?>">
						</div>
					</td>
					<td width="200">
						<div class="select1 input-design">
							<label>Non-Conformance Category</label>
							<select name="search_ncr_category" id="search_ncr_category" class="quote_status" >
								<option value="">Select </option>
								<?php
								$nonConformanceCategories = $this->config->item('nonconformance-categories');
								if(!empty($nonConformanceCategories) && is_array($nonConformanceCategories)){
									foreach($nonConformanceCategories as $val){
										$selected = !empty($ncrCategory) && $ncrCategory==$val ? 'selected' : ''; 
										echo '<option value="'.$val.'" '.$selected.'>'.$val.'</option>';
									}
								}
							?>
							</select>
						</div>
					</td>
					
					<td width="200">
						<div class="select1 input-design">
							<label>Start Date</label>
							<input type="text" class="date" name="search_start_date" id="search_start_date" placeholder="Start Date" 
							value="<?=$startDate?>">
						</div>
					</td>
					<td width="200">
						<div class="select1 input-design">
							<label>End Date</label>
							<input type="text" class="date" name="search_end_date" id="search_end_date" placeholder="End Date" 
							value="<?=$endDate?>">
						</div>
					</td>
					
					<td colspan="7" width="200">
						<div class="select1">
							<input type="submit" value="Filter" class="order-filter-button" id="iso-ncr-filter">
						</div>
					</td>
				</tr>
				<?=form_close()?>
			</table>
			
			
			<table class="table table-bordered table-hover" id="isoncr-table">
				<thead>
					<tr>
						<th>NCR#</th>
						<th>Date</th>
						<th>Customer</th>
						<th>Division</th>
						<th>Type</th>
						<th>Description</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody class="filter-data" id="table-data">
					<?php
						if(!empty($isoncrs) && is_array($isoncrs)){
							$serialNo = 1;
							foreach($isoncrs as $val){
								$ncrId			= !empty($val->ncr_id) ? $val->ncr_id : 'N/A';
								$ncrCategory	= !empty($val->ncr_category) ? $val->ncr_category : 'N/A';
								$date			= !empty($val->entry_date) ? $val->entry_date : '';
								$customerName	= !empty($val->customername) ? $val->customername : '';
								$division		= !empty($val->division) ? $val->division : 'N/A';
								$type			= !empty($val->ncr_category) ? $val->ncr_category : 'N/A';
								$cateType		= !empty($type) ? json_decode($type) : array();
								$cateType		= (!empty($type) && !empty($cateType)) ? implode(',',$cateType) : $type;
								$description	= !empty($val->ncr_description) ? $val->ncr_description : '';
								$editUrl		= base_url('editIso/'.base64_encode($ncrId));
								echo '<tr id="remove-row-'.$serialNo.'">
									<td width="100">'.$ncrId.'</td><td width="150">'.$date.'</td>
									<td width="200">'.$customerName.'</td><td width="200">'.$division.'</td>
									<td width="200">'.$cateType.'</td><td width="300">'.$description.'</td>
									<td><a class="edit_detail tooltip" href="'.$editUrl.'" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
										<span class="tooltiptext">Edit</span>
										</a></td>
								</tr>';
								$serialNo ++;
							}
							
						} 
					?>
				</tbody>
			</table>
			
			
			</div>
		</div>
		
	</div>

<!-- Right Bar Section -->
</section>

<?php
	$this->load->view('frontend/bottom');
?>
<script>
	
	$(document).ready(function() {
		$('#isoncr-table').DataTable({
			"pageLength": 50,language: {
				searchPlaceholder: "Enter Search Value...",
				paginate: {
					next: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
					previous: '<i class="fa fa-angle-left" aria-hidden="true"></i>'  
				}
			}
		});
	});
	
	
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
	
	$(".date").datepicker({
		dateFormat: 'yy-mm-dd' 
		/*minDate:new Date()*/
	});
  </script>
