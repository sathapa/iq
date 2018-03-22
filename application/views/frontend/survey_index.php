<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');


?>
<style>
	.setting{
		background: #0056b8 none repeat scroll 0 0;
	    border-radius: 3px;
	    color: #fff;
	    float: right;
	    font: 13px/30px "MyriadPro-Bold";
	    margin: 10px;
	    padding: 2px 10px;
	    cursor: pointer;
	}
</style>

<!-- Right Bar Section -->
	<div class="right-bar">
		<div class="dashboard">
		<div class="form-section">
			<div class="col-sm-12 top-head">
				<h1>Manage Surveys</h1>
				<div class="search-main">
					<a href="#" class="print">
						<span class="glyphicon glyphicon-print"></span> Print
					</a>
					<a href="<?=base_url('survey')?>" class="add-user-btn  create_quote" > Create New Survey</a>
				</div>	
			</div>
			<div class="data-table-dash">
				<div>
				<?php
					$message	= $this->session->flashdata('message');
					echo $message;
				?>
				</div>
			<table class="table  table-bordered table-hover" id="quote-web-table">
				<thead>
					<tr>
						<th>Mark</th>
						<th>##</th>
						<th>Customer</th>
						<th>Address</th>
						<th>State</th>
						<th>Item</th>
						<th>Salesperson</th>
						<th>Surveyer</th>
						<th>Created at</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody class="filter-data">
				<?php
					if(!empty($survey) && !empty($survey)){
						$i=0;
						foreach($survey as $val){
							$i++;
							$survey_id 	= !empty($val->survey_id) ? ucfirst($val->survey_id) : '';
							$survey_id	= base64_encode($survey_id);
							$items		= !empty($val->items) ? ucfirst($val->items) : '';

							$customer	= !empty($val->companyname) ? ucfirst($val->companyname) : '';
							$accountno  = !empty($val->accountnumber) ? ucfirst($val->accountnumber) : '';
							$address	= !empty($val->address1_street1) ? $val->address1_street1 : '';
							$city	    = !empty($val->address1_city) ? $val->address1_city : '';
							$state	    = !empty($val->address1_stateprovince) ? $val->address1_stateprovince : '';
							
							$salesperson= !empty($val->salesperson) ? $val->salesperson : '';
							$surveyee 	= !empty($val->user_id) ? $val->user_id : '';
							$country	= !empty($val->address1_countryregion) ? $val->address1_countryregion : '';
							/*$profile_img	= !empty($val->profile_img) ? $val->profile_img : '';*/
							$created	= !empty($val->created_at) ? $val->created_at : '';
							echo '<tr>
							<td> <input type="checkbox" class="form-check-input" id="check_'.$i.'">check_'.$i.' </td>
							<td>'.$i.'</td>
							<td>'.$customer.' ['.$accountno.']'.'</td>
							<td>'.$address.'</td>
							<td>'.$state.'</td>
							<td>'.$items.'</td>
							<td>'.$salesperson.'</td>
							<td>'.$surveyee.'</td>
							<td>'.$created.'</td>
							<td><div class="row"> 
									<input type="text" class="form-control" id="qty"> 
									<input type="text" class="form-control" id="warehouse">
								</div> 
							</td>';
						?>
						<td width="235">
							<a class="view_detail tooltip" href="<?=base_url('surveyView/'.$survey_id)?>" >
								<i class="fa fa-eye" aria-hidden="true"></i>
								<span class="tooltiptext">View Survey Details</span>
							</a>
							<a class="view_detail tooltip" href="<?=base_url('surveyAdd/'.$survey_id)?>" >
								<i class="fa fa-plus" aria-hidden="true"></i>
								<span class="tooltiptext">Add Item</span>
							</a>
							<a href="<?=base_url('frontend/survey/generateReport/'.$survey_id);?>" target="_blank" class="view_detail tooltip proposaldownload" data-id="<?=$survey_id?>" >
								<i class="fa fa-check-square-o" aria-hidden="true"></i>
								<span class="tooltiptext">Generate Survey Report</span>
							</a>
							<a href="<?=base_url('frontend/survey/downloadSurvey/'.$survey_id);?>" target="_blank" class="view_detail tooltip proposaldownload"  data-id="<?=$survey_id?>" >
								<i class="fa fa-download" aria-hidden="true"></i>
								<span class="tooltiptext">Generate Survey Proposal</span>
							</a>
							<a class="delete_detail tooltip" data-toggle="confirmation" data-placement="left" data-singleton="true"  data-id="<?=$val->survey_id?>" data-type="delete" href="javascript:void(0)">
								<i class="fa fa-trash" aria-hidden="true"></i>
								<span class="tooltiptext">Remove Survey</span>
							</a>

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

	$('[data-toggle=confirmation]').confirmation({
			onConfirm: function() {
				var survey_id		= $(this).attr('data-id');
				
				if(survey_id!=''){
					$.post('<?=base_url('frontend/survey/SurveyDelete')?>',{'survey_id':survey_id,},function(response){
						alert(response);
						window.location.reload(true);
					});
				}
		}
	});

</script>
