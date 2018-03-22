<link rel="stylesheet" href="<?= base_url('assets/admin/');?>/css/usersection.css" />
<div class="page-content">
	<?php
		$this->load->view('themes/admin/alert');
	?>
	<div class="page-header">
		<h1>
			All User list
		</h1>
		<div class="page-header-right">
			<a href="<?=base_url('admin/users/add')?>"><button class="btn btn-success">Add User</button></a>
		</div>
	</div><!-- /.page-header -->
	<div class="row">
		<div class="col-xs-12">
			<table class="table  table-bordered table-hover" id="quote-web-users-table">
				<thead>
					<tr>
						<th>User Type</th>
						<th>Username</th>
						<th>Name</th>
						<th>Email</th>
						<th>Contact</th>
						<th class="hidden-480">Status</th>
						<th class="">Active</th>
					</tr>
				</thead>
				<tbody>
					<?php
					//print_r($users);
						if(!empty($users) && is_array($users)){
							foreach($users as $user){
								$userId		= !empty($user->id) ? $user->id : '';
								$userName		= !empty($user->username) ? $user->username : '';
								$userImage		= !empty($user->image) ? $user->image : '';
								$name			= !empty($user->first_name) ? $user->first_name.' '.$user->last_name : '';
								$userEmail		= !empty($user->email) ? $user->email : '';
								$userContact	= !empty($user->contact_no) ? $user->contact_no : '';
								$userStat		= !empty($user->active) ? $user->active : '0';
								$userGroup		= !empty($user->user_group) ? $user->user_group : '1';

					?>
					<tr>
						<td>
							<?php
								$groups	= $this->config->item('user_group');
								if(!empty($groups)){
									echo $groups[$userGroup];
								}
							?>
						</td>
						<td>
							<a href="#"><?=$userName?></a>
						</td>
						<td>
							<?php
								$userDefaultSrc		= base_url('assets/admin/images/avatars/smb://192.168.1.90/quoteweb/assets/admin/images/avatars/avatar.png');
								if(!empty($userImage)){
									$userimgPath	= FCPATH.'upload-data/users/'.$userImage;
									$userimgSrc		= base_url('upload-data/users/'.$userImage);
									if(file_exists($userimgPath)){
										$userimgSrc	= $userimgSrc;
									}else{
										$userimgSrc	= $userDefaultSrc;
									}
								}else{
									$userimgSrc	= $userDefaultSrc;
								}
								echo '<img src="'.$userimgSrc.'" height="40">';
							?>
							<br>
							<?= $name?>
						</td>
						<td class="hidden-480"><?=$userEmail?></td>
						<td><?=$userContact?></td>
						<td class="hidden-480">
							<?php
							$userSt		= 'Inactive';
							$userStatClass	= 'warning';
								if(!empty($userStat) && $userStat==1){
									$userSt	= "Active";
									$userStatClass	= "success";
								}
							?>
							<span class="label label-sm label-<?=$userStatClass?>"><?=$userSt;?></span>
						</td>
						<td>
							<div class="hidden-sm hidden-xs btn-group">
								<a href="<?=base_url('admin/users/edituser/'.base64_encode($userId))?>">
								<button class="btn btn-xs btn-info">
									<i class="ace-icon fa fa-pencil bigger-120"></i>
								</button>
								</a>
								<a href="javascript:void(0)" onclick="askForDelete('<?=base_url('admin/users/deleteuser/'.base64_encode($userId))?>')">
								<button class="btn btn-xs btn-danger">
									<i class="ace-icon fa fa-trash-o bigger-120"></i>
								</button>
								</a>
							</div>
						</td>
					</tr>
					<?php
							}
						}else{
					?>
						<tr>
							<td colspan="6">
								No Records Found
							</td>
						</tr>
					<?php
							
						}
					?>
				</tbody>
			</table>
		</div><!-- /.span -->
		</div>
</div>
</div>
</div>
	<?php $this->load->view('themes/admin/footer'); ?>
	<?php $this->load->view('themes/admin/bottom'); ?>
	<script>
	$(document).ready(function() {
		$('#quote-web-users-table').DataTable();
	});
	function askForDelete(url) {
		var r = confirm("Are you sure to delete this user");
		if (r == true) {
			window.location.href=url;
		}
	}
	</script>
