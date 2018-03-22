<style>
	.info{
		font-family: Verdena;
		font-size : 15px;
		margin-bottom:13px;
		font-color: grey;
	}
</style>

<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	
	

?>
<!-- Right Bar Section -->
	<div class="right-bar">
		<div class="dashboard">
		<div class="form-section">
			<div class="col-sm-12 top-head">
				<h1>Survey ID [<?=$survId;?>]</h1>
				
				<a href="<?=base_url('surveyAdd/'.base64_encode($survId))?>" class="add-user-btn  create_quote" > Add New Item</a>
				<a href="<?=base_url('survey')?>" class="add-user-btn  create_quote" > Create New Survey</a>
				<a href="<?=base_url('surveyIndex')?>" class="back-btn  create_quote" > < Back</a>
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
						<th>##</th>
						<th>Item Name</th>
						<th>Quantity</th>
						<th>Net Material</th>
						<th>Lash Material</th>
						<th>Rope Material</th>
						<th>Border Material</th>
						<th>Condition</th>
						<th>Shape</th>						
						<th>Created at</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody class="filter-data">
				<?php  

			 		$survId = base64_encode($survId);
					if(!empty($itemDetails)){
						$i=0;
						echo '<div class="info">Company: '.$itemDetails[0]->companyname.'<br>
								  Salesperson: '.$itemDetails[0]->salesperson.'<br></div>';
						
						foreach($itemDetails as $val){
						
							$i++;
							$item_id	= !empty($val->item_id) ? $val->item_id : '';
							$item_id 	= base64_encode($item_id);
							
							$item_name	= !empty($val->item_name) ? ucfirst($val->item_name) : '';
							$quantity	= !empty($val->quantity) ? ucfirst($val->quantity) : '';
							$net_material	= !empty($val->net_material) ? $val->net_material : '';
							$lash_material	    = !empty($val->lash_material) ? $val->lash_material : '';
							$rope_material	    = !empty($val->rope_material) ? $val->rope_material : '';
							$border_material	    = !empty($val->border_material) ? $val->border_material : '';
							$condition	= !empty($val->condition) ? $val->condition : '';
							
							  if($condition === 1){$condition = "Excellent";}
		                      if($condition === 2){$condition = "Good";}
		                      if($condition === 3){$condition = "Fair";}
		                      if($condition === 4){$condition = "Poor";}

							$shape	= !empty($val->shape) ? $val->shape : '';
							 if($shape == 1){$shape = "R";}
		                      if($shape == 2){$shape = "T";}
		                      if($shape == 3){$shape = "C";}
		                      if($shape == 4){$shape = "O";}
							$created	= !empty($val->created_at) ? $val->created_at : '';
							echo '<tr>
							<td>'.$i.'</td>
							<td>'.$item_name.'</td>
							<td>'.$quantity.'</td>
							<td>'.$net_material.'</td>
							<td>'.$lash_material.'</td>
							<td>'.$rope_material.'</td>
							<td>'.$border_material.'</td>
							<td>'.$condition.'</td>
							<td>'.$shape.'</td>
							<td>'.$created.'</td>';
						?>
						<td width="235">
							<a class="edit_detail tooltip" href="<?=base_url('surveyEdit/'.$item_id.'/'.$survId)?>" >
								<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
								<span class="tooltiptext">Edit</span>
							</a>
							<a class="delete_detail tooltip" data-toggle="confirmation" data-placement="left" data-singleton="true"  data-id="<?=$survId?>" data-item-id="<?=$item_id?>" data-type="delete" href="javascript:void(0)">
								<i class="fa fa-trash" aria-hidden="true"></i>
								<span class="tooltiptext">Remove Item</span>
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

	$('[data-toggle=confirmation]').confirmation({
			onConfirm: function() {
				var survey_id		= $(this).attr('data-id');
				var item_id			= $(this).attr('data-item-id');
				
				if((survey_id!='') && (item_id!='')){
					$.post('<?=base_url('frontend/survey/SurveyItemDelete')?>',{'survey_id':survey_id,'item_id':item_id},function(response){
						alert(response);
						window.location.reload(true);
					});
				}
		}
	});
</script>
