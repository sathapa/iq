<?php
   /*Manage Test Results*/
 
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	$groupPermissions	= $this->group_permissions;
?>
<style>

	#quote-web-table_paginate.dataTables_paginate {
	   padding-top: 10px;
	}
	

</style>
<!-- Right Bar Section -->


	<div class="right-bar">
		<div class="dashboard">
		<div class="form-section">
			<div class="col-sm-12 top-head">
				<h1>Manage HR Records</h1>
				<div class="search-main">
					<a href="<?=base_url('sendmailHR')?>" class="create_quote ">Send Mail </a>
					<a href="javascript:void(0)" class="download-hr-csv create_quote">Download </a>
					<a href="<?=base_url('addHR')?>" class="add-user-btn  create_quote" > Create New HR</a>
					<a href="#" class="print">
						<span class="glyphicon glyphicon-print"></span> Print
					</a>
				</div>	
			</div>

			<div class="data-table-dash ">
			<div id="alert-message"><?php echo $this->session->flashdata('messageIndex');?></div>
			
  		    	<table class="summary-filter-table">
				<?php
					$status	= !empty($searchParam['searchHS']) ? $searchParam['searchHS'] : '';
					$startDate		= !empty($searchParam['searchASDate']) ? $searchParam['searchASDate'] : ''; 
					$endDate		= !empty($searchParam['searchAEDate']) ? $searchParam['searchAEDate'] : ''; 
					
				?>
				<?=form_open('',array('name'=>'hr-form','id'=>'hr-form'))?>
				<tr>
					<td width="200">
						<div class="select1 input-design">
							<label>Hired Status</label>
							<select name="search_hired_status" id="search_hired_status" class="search_hired_status" >
								<option value="[all]">all </option>
								<option value="1 [Hired]" <?=(!empty($status) &&($status=='1 [Hired]'))?'selected':''?>>Hired</option>
								<option value="2 [On Consideration]" <?=(!empty($status) && ($status=='2 [On Consideration]'))?'selected':''?>>On Consideration</option>
								<option value="3 [Pending]" <?=(!empty($status) && ($status=='3 [Pending]'))?'selected':''?>>Pending</option>
							</select>
						</div>
					</td>
					<td width="50"></td>
					<td width="200">
						<div class="select1 input-design">
							<label>Admission Start Date</label>
							<input type="text" class="date" name="search_admission_start_date" id="search_admission_start_date" placeholder="Start Admission Date" 
							value="<?=$startDate?>">
						</div>
					</td>
					<td width="200">
						<div class="select1 input-design">
							<label>Admission End Date</label>
							<input type="text" class="date" name="search_admission_end_date" id="search_admission_end_date" placeholder="End Admission Date" 
							value="<?=$endDate?>">
						</div>
					</td>
					
					<td colspan="7" width="200">
						<div class="select1">
							<input type="submit" value="Filter" class="order-filter-button" id="hr-filter">
						</div>
					</td>
				</tr>
				<?=form_close()?>
			</table>
   		  	  
				<table class="table table-fixedheader table-bordered table-hover table-striped" id="quote-web-table" >
					<thead>
						<tr>
							<th style="width:80px">SN</th>
							<th style="width:140px">HR No.</th>
							<th style="width:140px">Name</th>
							<th style="width:150px">Sex</th>
							<th style="width:200px">A-Date</th>
							<th style="width:315px">I-Date</th>
							<th style="width:130px">Hired Status</th>
							<th style="width:201px">Manufacturing Experience</th>
							<th style="width:200px">Department</th>
							<th style="width:315px">Supervisor</th>
							<th style="width:130px">Referred by</th>
							<th style="width:201px">Home No.</th>
							<th style="width:205px">Action</th>
						</tr>
					</thead>
					<tbody class="filter-data" id="table-data">
						<?php
							if(!empty($datahr)){
								$j = 0;
								foreach($datahr as $val){
									$j++;
									$hrno	= !empty($val->hid) ? $val->hid : 'N/A';
									
									$fname= !empty($val->first_name) ? $val->first_name : 'N/A';
									$lname= !empty($val->last_name) ? $val->last_name : 'N/A';
									$name = $fname." ".$lname;

									$sex	= !empty($val->sex) ? $val->sex : '';
									$a_date	= !empty($val->a_date) ? $val->a_date : '';
									$i_date		= !empty($val->i_date) ? $val->i_date : '';
									$hired_status = !empty($val->hired_status) ? $val->hired_status : 'N/A';
									$manuf_exp =  !empty($val->manufac_exp) ? $val->manufac_exp : 'N/A';
									/*Manufacturing yrs & months partition*/
									$y_exp = (int) $manuf_exp;
									$m_exp = round(($manuf_exp - $y_exp)*12,1);
									$exp_y = !empty($y_exp)?$y_exp.' yr': '';
									$exp_m = !empty($m_exp)?$m_exp.' m.': '';
									$exp = $exp_y." ".$exp_m;

									$department = !empty($val->department) ? $val->department : 'N/A';
									$supervisor = !empty($val->supervisor) ? $val->supervisor : 'N/A';
									$referred_by = !empty($val->referred_by) ? $val->referred_by : 'N/A';
									$homeno = !empty($val->home_no) ? $val->home_no : 'N/A';
									$letter = !empty($val->letter) ? $val->letter : 'N/A';
									
									$test_results = !empty($val->test_results) ? $val->test_results : 'N/A';
									$test_data = json_decode($test_results,true);

							  echo '<tr>
										<td style="width:75px">'.$j.'</td>
										<td style="width:130px">'.$hrno.'</td><td style="width:145px">'.$name.'</td>
										<td style="width:145px">'.$sex.'</td><td style="width:185px">'.$a_date.'</td>
										<td style="width:130px">'.$i_date.'</td><td style="width:145px">'.$hired_status.'</td>
										<td style="width:145px">'.$exp.'</td><td style="width:185px">'.$department.'</td>
										<td style="width:315px">'.$supervisor.'</td> <td style="width:155px">'.$referred_by.'</td>
										<td style="width:315px">'.$homeno.'</td>
										<td style="width:235px">
											<a class="edit_detail tooltip" href="'.base_url('hredit/'.$hrno).'" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
												<span class="tooltiptext">Edit</span>
											</a>
											<a href="'.base_url('hr/getletter/'.$letter).'" target="_blank" class="view_detail tooltip proposaldownload" >
												<i class="fa fa-download" aria-hidden="true"></i>
												<span class="tooltiptext">Get Letter</span>
											</a>
										
											<a class="delete_detail tooltip" data-toggle="confirmation" data-placement="left" data-singleton="true"  data-id="'.$hrno.'" data-type="delete" href="javascript:void(0)">
												<i class="fa fa-trash" aria-hidden="true"></i>
												<span class="tooltiptext">Remove HR</span>
											</a>
										</td>
									</tr>
										';

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
	});

	$(".print").click(function () {
		var mode = 'iframe'; 
		var close = mode == "popup";
		var options = { mode : mode, popClose : close};
		$("#quote-web-table_wrapper").printArea( options );
	});


	/* Csv Download the HR data */
	$(document).on('click','.download-hr-csv',function (){
		var hired_status	= $('#search_hired_status').val();var admission_start_date	= $('#search_admission_start_date').val();
		var admission_end_date	= $('#search_admission_end_date').val();
		
		var str			= hired_status+'#'+admission_start_date+'#'+admission_end_date;
			str			= window.btoa(str);
		var url			= '<?=base_url('frontend/excel/downloadHR/')?>';
		var finalUrl	= url+'/'+str;
		window.location.href	= finalUrl;
	});


	$(".date").datepicker({
		dateFormat: 'yy-mm-dd' 
	});

	$('[data-toggle=confirmation]').confirmation({
			onConfirm: function() {
				var hrno	= $(this).attr('data-id');
				
				if(hrno!=''){
					$.post('<?=base_url('frontend/HR/deleteHR')?>',{'hrno':hrno,},function(response){
						alert(response);
						window.location.reload(true);
					});
				}
		}
	});
  </script>
