<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Forgot Password | Incord Quote Web</title>
		<link rel='stylesheet' type='text/css' href="<?=base_url('assets/front/css/common.css')?>" >
		<link rel='stylesheet' type='text/css' href="<?=base_url('assets/front/css/forgot-password.css')?>" >
		<script src="<?=base_url('assets/front/js/jquery-min.js')?>"></script>
		<script src="<?=base_url('assets/front/js/parsley.min.js')?>"></script>
	</head>
	<body>
	<div class="login-container">
	<div class="login-form">
		
		<div class="form">
			<div id="login-box" class="login-box visible widget-box no-border">
				<div class="widget-body">
					<div class="widget-main">
						
						<div class="space-6"></div>
						
						<?=form_open(current_url(),array('id'=>'forgot-pass','data-parsley-validate'=>'data-parsley-validate'))?>
						
						<?php
							$msg	= $this->session->flashdata('message');
							$status	= !empty($status) ? $status : '';
							if(!empty($msg) || !empty($msg)){
								if($status=='Failed'){
								$msgShow	= !empty($msg) ? $msg : '';
						?>
						<div class="forgot-error-message">
							<label><?=$msgShow;?></label>
						</div>
						<?php
								}
							}
						?>
							<fieldset>
								<?php
									if(!empty($status) && $status=='Success'){
								?>
										<div class="success-forgot-pasword">
											<label><?=$msg;?></label>
										</div>
								<?php
									}else{
								?>
								<label class="block clearfix">
									<span class="block input-icon input-icon-right">
										<input type="text" name="email" class="form-control" placeholder="Email" data-parsley-required-message="Please Enter Email Id" data-parsley-required="true" 
										data-parsley-type="email" data-parsley-type-message="Please Enter Valid Email Id" value="<?=set_value('email')?>" />
										<i class="ace-icon fa fa-envelope"></i>
									</span>
								</label>
								
								<div class="space"></div>
								<div class="clearfix">
									<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
										<i class="ace-icon fa fa-key"></i>
										<span class="bigger-110">Submit</span>
									</button>
									<div class="forget-sec">
									<a href="<?=base_url('login')?>">Back To Login</a>
									</div>
								</div>
								
								<div class="space-4"></div>
								<?php
									}
								?>
							</fieldset>
							
						<?=form_close()?>
						<div class="space-6"></div>
						
						</div><!-- /.widget-main -->

							
						</div>
					</div>
				</div></div><!-- /.widget-body -->
			</div><!-- /.login-box -->
</body>
</html>
