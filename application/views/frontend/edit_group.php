<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	$groupId	= !empty($group->group_id) ? $group->group_id : '';
	$groupName	= !empty($group->group_name) ? $group->group_name : '';
	$remarks	= !empty($group->remarks) ? $group->remarks : '';
	$selPermissions= !empty($group->permission) ? explode(',',$group->permission) : '';
	$status		= !empty($group->status) ? $group->status : '0';
	
?>
<style>
.inner-form {
		width:100%;
		 margin-left: 5%;
	    margin-top: 2%;
	    float: left;
	}
</style>
<!-- Right Bar Section -->
	<div class="right-bar">
		<div class="form-section">
			<div class="col-sm-12 top-head">
				<h1 id="quoting-heading">Group Management [ Edit Group Permissions ]</h1>
			</div>
		<div class="inner-form" id="innerformdetails">

		<div class="form-group">
		
		<?php
			echo form_open('', array('class'=>'form-row ','id'=>'edit-group','enctype'=>'multipart/form-data','data-parsley-validate'=>'data-parsley-validate'));
		?>
		<div class="row">
			<div class="half">
				<label>Group Name <em >*</em></label>
				<div class="select1">
					<input type="text" name="group_name" id="group_name" Placeholder="Group Name" value="<?=$groupName?>" required>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="form- half select1">
				<label>Remarks </label>
				<div class="select1">
					<textarea placeholder="Remarks" name="remarks"><?=$remarks?></textarea>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="form-row half">
				<label>Permission </label>
				<div class="" id="status-select">
					<select id="permissions" name="permissions[]"  data-parsley-required="true" multiple="multiple"  class="multiselect-ui">
						<?php
							$permissions	= $this->config->item('permissions');
							if(!empty($permissions) && is_array($permissions)){
								foreach($permissions as $key=>$permission){
									if(!empty($groupId) && $groupId==6){
										if($key==1){
											$selected	= '';
											if(!empty($selPermissions) && in_array($key,$selPermissions)){
												$selected	= 'selected';
											}
											echo '<option value="'.$key.'" '.$selected.'>'.$permission.'</option>';
										}
									}
									else if(!empty($groupId) && $groupId==5){
										if($key!=1){
											$selected	= '';
											if(!empty($selPermissions) && in_array($key,$selPermissions)){
												$selected	= 'selected';
											}
											echo '<option value="'.$key.'" '.$selected.'>'.$permission.'</option>';
										}
									}else{
										$selected	= '';
										if(!empty($selPermissions) && in_array($key,$selPermissions)){
											$selected	= 'selected';
										}
										echo '<option value="'.$key.'" '.$selected.'>'.$permission.'</option>';
									}
								}
							}
						?>
							
					</select>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="form-row half">
				<label>Status <em >*</em></label>
				<div class="select1" id="status-select">
					<select id="status" name="status" data-parsley-required="true">
						<option value="1" <?=$status==1 ? 'selected' : ''; ?> >Active</option>
						<option value="0" <?=$status!=1 ? 'selected' : ''; ?> >Inactive</option>
					</select>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="form-row three ">
			<button type="submit" class="save" id="submitUserDetails">
				Update</button>
			</div>
		</div>
		
		<?=form_close()?>
		
		</div>
		</div>
	</div>
</div>
</section>

<?php
	$this->load->view('frontend/bottom');
?>
<script type="text/javascript">
$(document).ready(function(){
 $('.multiselect-ui').multiselect({
      includeSelectAllOption: true,
    });

});
</script>
