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
	.txt1{
		margin-left:10px;
    		display: inline-block;
	}

</style>
<!-- Right Bar Section -->


	<div class="right-bar">
		<div class="dashboard">
		<div class="form-section">
			<div class="col-sm-12 top-head">
				<h1>Manage Test Reports</h1>
				<div class="search-main">
					<a href="#" class="print">
						<span class="glyphicon glyphicon-print"></span> Print
					</a>
					<a href="<?=base_url('createTR')?>" class="add-user-btn  create_quote" > Create New Test Report</a>
				</div>	
			</div>

			<div class="data-table-dash ">
			<div id="alert-message"><?php echo $this->session->flashdata('messageIndex');?></div>
			
  		    
   		  	  
				<table class="table table-fixedheader table-bordered table-hover table-striped" id="quote-web-table" >
					<thead>
						<tr>
							<th style="width:80px">SN</th>
							<th style="width:140px">Test Record No.</th>
							<th style="width:140px">Sample Idty</th>
							<th style="width:150px">Test Std</th>
							<th style="width:200px">Test Desc</th>
							<th style="width:315px">Test Results</th>
							<th style="width:130px">Tester</th>
							<th style="width:201px">Created Date</th>
							<th style="width:205px">Action</th>
						</tr>
					</thead>
					<tbody class="filter-data" id="table-data">
						<?php
							if(!empty($testr) && is_array($testr)){
								$j = 0;
								foreach($testr as $val){
									$j++;
									$test_recordno	= !empty($val->test_recordno) ? $val->test_recordno : 'N/A';
									$test_recordnoe = base64_encode($test_recordno);

									$sample_identity= !empty($val->sample_identity) ? $val->sample_identity : 'N/A';
									$test_standard			= !empty($val->test_standard) ? $val->test_standard : '';
									$test_description	= !empty($val->test_description) ? $val->test_description : '';
									$tester		= !empty($val->created_by) ? $val->created_by : 'N/A';
									$created_date = !empty($val->date) ? $val->date : 'N/A';
									
									$test_results = !empty($val->test_results) ? $val->test_results : 'N/A';
									$test_data = json_decode($test_results,true);

							  echo '<tr>
										<td style="width:75px">'.$j.'</td>
										<td style="width:130px">'.$test_recordno.'</td><td style="width:145px">'.$sample_identity.'</td>
										<td style="width:145px">'.$test_standard.'</td><td style="width:185px">'.$test_description.'</td>
										<td style="width:315px">';
										for($i=0;$i<count($test_data);$i++){
															$k = $i+1;
															echo 'TEST '.$k.': <div class="txt1">'. $test_data[$i].'</div><br>';
															}

										echo '</td><td style="width:145px">'.$tester.'</td> <td style="width:155px">'.$created_date.'</td>
										
										<td style="width:235px">
											<a class="edit_detail tooltip" href="'.base_url('treport/'.$test_recordnoe).'" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
												<span class="tooltiptext">Edit</span>
											</a>
											
											<a class="view_detail md-trigger tooltip"  href="'.base_url('replicateTR/'.$test_recordnoe).'">
												<i class="fa fa-clone" aria-hidden="true"></i>
												<span class="tooltiptext">Clone Test Report</span>
											</a>											

											<a href="'.base_url('treport/download/'.$test_recordnoe).'" target="_blank" class="view_detail tooltip proposaldownload"  data-id="'.$test_recordno.'" >
												<i class="fa fa-download" aria-hidden="true"></i>
												<span class="tooltiptext">Generate Report</span>
											</a>
										
											<a class="delete_detail tooltip" data-toggle="confirmation" data-placement="left" data-singleton="true"  data-id="'.$test_recordnoe.'" data-type="delete" href="javascript:void(0)">
												<i class="fa fa-trash" aria-hidden="true"></i>
												<span class="tooltiptext">Remove Survey</span>
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
		 /*var table = $('#quote-web-table').DataTable();
 	   	 new $.fn.dataTable.FixedHeader( table );*/

		$('#quote-web-table').DataTable({
			"pageLength": 50,language: {
				searchPlaceholder: "Enter Search Value...",
				paginate: {
					next: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
					previous: '<i class="fa fa-angle-left" aria-hidden="true"></i>'  
				}
			}
		});

	/*	$('#quote-web-table').DataTable({
		    scrollY: 400,
		    scrollCollapse: true,
		    paging: false,
		    searching: false,
		    ordering: false,
		    info: false
		});*/

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

	$(".date").datepicker({
		dateFormat: 'yy-mm-dd' 
		/*minDate:new Date()*/
	});

	$('[data-toggle=confirmation]').confirmation({
			onConfirm: function() {
				var trno	= $(this).attr('data-id');
				console.log(trno);
				
				if(trno!=''){
					$.post('<?=base_url('frontend/treport/trDelete')?>',{'trno':trno,},function(response){
						alert(response);
						window.location.reload(true);
					});
				}
		}
	});
  </script>
