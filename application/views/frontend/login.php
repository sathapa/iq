<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Login | Incord Quote Web</title>
		<link rel='stylesheet' type='text/css' href="<?=base_url('assets/front/css/common.css')?>" >
		<link rel='stylesheet' type='text/css' href="<?=base_url('assets/front/css/login.css')?>" >
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
						<?=form_open(current_url(),array('id'=>'user-login','data-parsley-validate'=>'data-parsley-validate'))?>
						<div class="user-login-error">
							<?=!empty($error) ? $error : ''?>
						</div>
						<?php
							$errorFlashMsg		= $this->session->flashdata('resetError');
							$successFlashMsg	= $this->session->flashdata('resetSuccess');
							if(!empty($successFlashMsg) || !empty($errorFlashMsg)){
								$class		= !empty($successFlashMsg) ? 'user-success-message' : 'user-error-message';
								$msgShow	= !empty($successFlashMsg) ? $successFlashMsg : $errorFlashMsg;
						?>
						<div class="<?=$class;?>">
							<label><?=$msgShow;?></label>
						</div>
						<?php
							}
						?>
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
										<input type="password" id="password" name="password" class="form-control" placeholder="Password"  data-parsley-required="true" maxlength="20"/>
										<figure><img src="<?=base_url('assets/front/images/lock.png')?>" alt="lock" data-set="0" class="viewPassword"></figure>
									</span>
								</label>

								<div class="space"></div>

								<div class="clearfix">
									<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
										<i class="ace-icon fa fa-key"></i>
										<span class="bigger-110">Login</span>
									</button>
									<div class="forget-sec">
									<a href="<?=base_url('forgotpass')?>">Forget Password</a>
									</div>
								</div>
								<div class="space-4"></div>
							</fieldset>
						<?=form_close()?>

						<div class="space-6"></div>
						
						</div><!-- /.widget-main -->

							
						</div>
					</div>
				</div></div><!-- /.widget-body -->
			</div><!-- /.login-box -->
	<script>
		$(document).ready(function (){
			$('.viewPassword').click( function (){
				var set	= $('#password').attr('data-set');
				if(set==1){
					$('#password').attr('data-set','0');
					$('#password').attr('type','text');
				}else{
					$('#password').attr('data-set','1');
					$('#password').attr('type','password');
				}
				
			});
		});
	</script>
</body>
</html>
