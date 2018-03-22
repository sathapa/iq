	<div class="login-container">
		<div class="space-6"></div>

		<div class="position-relative">
			<div id="login-box" class="login-box visible widget-box no-border">
				<div class="widget-body">
					<div class="widget-main">
						<h4 class="header blue lighter bigger">
							<i class="ace-icon fa fa-coffee green"></i>
							Reset New Password
						</h4>
						<div class="admin-login-error">
							<?=!empty($error) ? $error : ''?>
						</div>
						<div class="space-6"></div>

						<?=form_open(current_url(),array('id'=>'admin-reset','data-parsley-validate'=>'data-parsley-validate'))?>
							<fieldset>
								<label class="block clearfix">
									<span class="block input-icon input-icon-right">
										<input type="password" name="new_password" id="new_password" class="form-control" placeholder="Password" 
										data-parsley-required-message="Please Enter New Password" data-parsley-required="true" 
										value="" />
										<i class="ace-icon fa fa-lock"></i>
									</span>
								</label>

								<label class="block clearfix">
									<span class="block input-icon input-icon-right">
										<input type="password" name="con_password" id="con_password" data-parsley-equalto="#new_password" data-parsley-equalto-message="New Password and Confirm Password are not same" class="form-control" placeholder="Confirm Password" />
										<i class="ace-icon fa fa-lock"></i>
									</span>
								</label>

								<div class="space"></div>

								<div class="clearfix">

									<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
										<i class="ace-icon fa fa-key"></i>
										<span class="bigger-110">Reset</span>
									</button>
								</div>

								<div class="space-4"></div>
							</fieldset>
						<?=form_close()?>

						<div class="space-6"></div>
						
						</div><!-- /.widget-main -->

				</div><!-- /.widget-body -->
			</div><!-- /.login-box -->

			</div><!-- /.position-relative -->
	</div>

