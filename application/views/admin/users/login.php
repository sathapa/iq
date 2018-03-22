	<div class="login-container">
		<div class="center">
			<h1>
				<i class="ace-icon fa fa-leaf green"></i>
				<span class="red">Admin</span>
				<span class="white" id="id-text2">Application</span>
			</h1>
			<h4 class="blue" id="id-company-text">&copy; Quote Web</h4>
		</div>

		<div class="space-6"></div>

		<div class="position-relative">
			<div id="login-box" class="login-box visible widget-box no-border">
				<div class="widget-body">
					<div class="widget-main">
						<h4 class="header blue lighter bigger">
							<i class="ace-icon fa fa-coffee green"></i>
							Please Enter Your Information
						</h4>
						<div class="admin-login-error">
							<?=!empty($error) ? $error : ''?>
						</div>
						<?php
							$successFlashMsg= $this->session->flashdata('resetSuccess');
							$errorFlashMsg	= $this->session->flashdata('resetError');
							if(!empty($successFlashMsg) || !empty($errorFlashMsg)){
								$class		= !empty($successFlashMsg) ? 'admin-success-message' : 'admin-error-message';
								$msgShow	= !empty($successFlashMsg) ? $successFlashMsg : $errorFlashMsg;
						?>
						<div class="<?=$class;?>">
							<label><?=$msgShow;?></label>
						</div>
						<?php
							}
						?>
						<div class="space-6"></div>

						<?=form_open(current_url(),array('id'=>'admin-login','data-parsley-validate'=>'data-parsley-validate'))?>
							<fieldset>
								<label class="block clearfix">
									<span class="block input-icon input-icon-right">
										<input type="text" name="email" class="form-control" placeholder="Email" data-parsley-required-message="Please Enter Email Id" data-parsley-required="true" 
										data-parsley-type="email" data-parsley-type-message="Please Enter Valid Email Id" value="<?=set_value('email')?>" />
										<i class="ace-icon fa fa-envelope"></i>
									</span>
								</label>

								<label class="block clearfix">
									<span class="block input-icon input-icon-right">
										<input type="password" name="password" class="form-control" placeholder="Password" />
										<i class="ace-icon fa fa-lock"></i>
									</span>
								</label>

								<div class="space"></div>

								<div class="clearfix">
									<!--
									<label class="inline">
										<input type="checkbox" class="ace" />
										<span class="lbl"> Remember Me</span>
									</label>
									-->

									<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
										<i class="ace-icon fa fa-key"></i>
										<span class="bigger-110">Login</span>
									</button>
								</div>

								<div class="space-4"></div>
							</fieldset>
						<?=form_close()?>

						<div class="space-6"></div>
						
						</div><!-- /.widget-main -->

					<div class="toolbar clearfix">
						<div>
							<a href="#" data-target="#forgot-box" class="forgot-password-link">
								<i class="ace-icon fa fa-arrow-left"></i>
								I forgot my password
							</a>
						</div>

						<div>
							
						</div>
					</div>
				</div><!-- /.widget-body -->
			</div><!-- /.login-box -->

			<div id="forgot-box" class="forgot-box widget-box no-border">
				<div class="widget-body">
					<div class="widget-main">
						<h4 class="header red lighter bigger">
							<i class="ace-icon fa fa-key"></i>
							Retrieve Password
						</h4>

						<div class="space-6"></div>
						<div class="forgot-password-form-div">
						<p>
							Enter your email and to receive instructions
						</p>

						<?=form_open('',array('id'=>'forgot-password-form','data-parsley-validate'=>'data-parsley-validate'))?>
							<fieldset>
								<label class="block clearfix">
									<span class="block input-icon input-icon-right">
										<input type="email" name="email" id="forgot-email" class="form-control" placeholder="Email" data-parsley-required-message="Please Enter Email Id" data-parsley-required="true" 
										data-parsley-type="email" data-parsley-type-message="Please Enter Valid Email Id" value="<?=set_value('email')?>"/>
										<i class="ace-icon fa fa-envelope"></i>
									</span>
								</label>

								<div class="clearfix">
									<button type="button" class="width-35 pull-right btn btn-sm btn-danger send-reset-password">
										<i class="ace-icon fa fa-lightbulb-o"></i>
										<span class="bigger-110">Send Me!</span>
									</button>
									<div class="loader-class ">
										<img src ="<?=base_url('assets/admin/images/common/ajax-loader.gif')?>" alt="loader-img">
									</div>
									
								</div>
							</fieldset>
						<?=form_close()?>
						</div>
					</div><!-- /.widget-main -->

					<div class="toolbar center">
						<a href="#" data-target="#login-box" class="back-to-login-link">
							Back to login
							<i class="ace-icon fa fa-arrow-right"></i>
						</a>
					</div>
				</div><!-- /.widget-body -->
			</div><!-- /.forgot-box -->
			</div><!-- /.position-relative -->
	</div>

