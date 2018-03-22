<div class="page-content">
	<?php
		$this->load->view('themes/admin/alert');
	?>
	<div class="page-header">
		<h1>
			Admin Profile
			<?php
				$email		= !empty($adminInfo->email) ? $adminInfo->email : '';
				$username	= !empty($adminInfo->username) ? $adminInfo->username : '';
				$contact	= !empty($adminInfo->contact_no) ? $adminInfo->contact_no : '';
				$firstName	= !empty($adminInfo->first_name) ? $adminInfo->first_name : '';
				$lastName	= !empty($adminInfo->last_name) ? $adminInfo->last_name : '';
				$about		= !empty($adminInfo->aboutus) ? $adminInfo->aboutus : '';
				$active		= !empty($adminInfo->active) ? $adminInfo->active : 0;
				$image		= !empty($adminInfo->image) ? $adminInfo->image : '';
				$group		= !empty($adminInfo->user_group) ? $adminInfo->user_group : '';
			?>
		</h1>
	</div><!-- /.page-header -->

	<div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->
			<?=form_open(current_url(),array('id'=>'user-register','enctype'=>'multipart/form-data','class'=>'form-horizontal','data-parsley-validate'=>'data-parsley-validate'))?>
				
				
				<div class="form-group">
					<label for="form-field-1" class="col-sm-3 control-label no-padding-right"> User Mobile </label>
					<div class="col-sm-9">
						<input type="text" name="contact_no" class="col-xs-10 col-sm-5" placeholder="Contact Number" id="contact" data-parsley-required-message="Please Enter contact Number" 
						data-parsley-required="true" data-parsley-type="digits" maxlength="12" data-parsley-rangelength="[10,12]" data-parsley-rangelength-message="Contact Number should be between 10 and 12 characters" 
						data-parsley-type-message="Please Enter Valid Contact Number" value="<?=$contact?>" >
					</div>
				</div>
				
				<div class="form-group">
					<label for="form-field-1" class="col-sm-3 control-label no-padding-right"> First Name </label>
					<div class="col-sm-9">
						<input type="text" name="first_name" data-parsley-required="true"  data-parsley-required-message="Please Enter First Name" 
						data-parsley-pattern="^[a-zA-Z0-9 ]{3,20}$" data-parsley-pattern-message="Enter Valid First Name" data-parsley-minlength="3" 
						class="col-xs-10 col-sm-5" placeholder="First Name" 
						id="first_name" value="<?=$firstName?>">
					</div>
				</div>
				<div class="form-group">
					<label for="form-field-1" class="col-sm-3 control-label no-padding-right"> Last Name </label>
					<div class="col-sm-9">
						<input type="text" name="last_name" class="col-xs-10 col-sm-5" placeholder="Last Name" id="last_name" 
						value="<?=$lastName?>">
					</div>
				</div>
				<div class="form-group">
					<label for="form-field-1" class="col-sm-3 control-label no-padding-right"> About US </label>
					<div class="col-sm-9">
						<textarea name="about_us"  maxlength="50" class="col-xs-10 col-sm-5" placeholder="About us"><?=$about?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> User Image </label>

					<div class="col-sm-9">
						<input type="file" id="logo" name="image" />
						<span class="show_logo">
							<?php
								if(!empty($image)){
									$userimgPath	= FCPATH.'upload-data/users/'.$image;
									$userimgSrc		= base_url('upload-data/users/'.$image);
									if(file_exists($userimgPath)){
										echo '<img src="'.$userimgSrc.'" height="40">';
									}
								}
								
							?>
						</span>
					</div>
				</div>
				<div class="clearfix form-actions">
					<div class="col-md-offset-3 col-md-9">
						<button type="submit" class="btn btn-info">
							<i class="ace-icon fa fa-check bigger-110"></i>
							Update
						</button>
					</div>
				</div>
			<?=form_close()?>

			<div class="hr hr-18 dotted hr-double"></div>

		</div><!-- /.col -->
		
		
	</div><!-- /.row -->
</div>
</div>
</div>
	<?php $this->load->view('themes/admin/footer'); ?>
	<?php $this->load->view('themes/admin/bottom'); ?>
	
