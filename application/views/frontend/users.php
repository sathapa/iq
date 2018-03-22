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
				<h1>Manage Users</h1>
				<a href="<?=base_url('adduser')?>" class="add-user-btn  create_quote" > Add User</a>
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
						<th>User</th>
						<th>Full Name</th>
						<th>Email</th>
						<th>Group</th>
						<th>Created at</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody class="filter-data">
					<?php
					//dump($users);die;
					if(!empty($users) && !empty($users)){
						$i=0;
						foreach($users as $user){
							$i++;
							$userName	= !empty($user->username) ? ucfirst($user->username) : '';
							$fullName	= !empty($user->first_name) ? ucfirst($user->first_name).' '.(!empty($user->last_name) ? $user->last_name : '') : '';
							$userEmail	= !empty($user->email) ? $user->email : '';
							$userGroup	= !empty($user->group_name) ? $user->group_name : '';
							$created	= !empty($user->created_at) ? $user->created_at : '';
							echo '<tr>
							<td>'.$i.'</td>
							<td>'.$userName.'</td>
							<td>'.$fullName.'</td>
							<td>'.$userEmail.'</td>
							<td>'.$userGroup.'</td>
							<td>'.$created.'</td>';
						?>
						<td width="235">
							<a class="view_detail tooltip" href="<?=base_url('edituser/'.$user->id)?>" >
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
