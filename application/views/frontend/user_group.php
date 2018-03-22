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
			<div class="col-sm-12 top-head">
				<h1>Manage Groups Permissions</h1>
				
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
						<th>Group Name</th>
						<th>Remarks</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody class="filter-data">
					<?php
					//dump($users);die;
					if(!empty($groups) && !empty($groups)){
						$i=0;
						foreach($groups as $group){
							$i++;
							$groupName		= !empty($group->group_name) ? $group->group_name : '';
							$groupRemarks	= !empty($group->remarks) ? $group->remarks : '';
							$groupStatus	= !empty($group->status) ? 'Active' : 'Inactive';
							echo '<tr>
							<td>'.$i.'</td>
							<td>'.$groupName.'</td>
							<td>'.$groupRemarks.'</td>
							<td>'.$groupStatus.'</td>';
						?>
						<td width="235">
							<a class="view_detail tooltip" href="<?=base_url('editGroup/'.$group->group_id)?>" >
								<i class="fa fa-pencil" aria-hidden="true"></i>
								<span class="tooltiptext">Edit</span>
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
	
});
</script>
