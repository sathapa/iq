<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Reset Password | Incord Quote Web</title>
		<link rel='stylesheet' type='text/css' href="<?=base_url('assets/front/css/common.css')?>" >
		<link rel='stylesheet' type='text/css' href="<?=base_url('assets/front/css/reset.css')?>" >
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
						<?=form_open(current_url(),array('id'=>'reset-password','data-parsley-validate'=>'data-parsley-validate'))?>
							<?php
							$msg	= !empty($msg) ? $msg :'';
							$error	= !empty($error) ? $error :'';
							if(!empty($error)){
							?>
							<div class="reset-error-message">
								<label><?=$error;?></label>
							</div>
							<?php
							}
							?>
							<fieldset>
								<label class="block clearfix">
									<span class="block input-icon input-icon-right">
										<input type="password" name="new_password" id="new_password" class="form-control" placeholder="Password" 
										data-parsley-required-message="Please Enter New Password" data-parsley-required="true" 
										value="" data-set="0" maxlength="20"/>
										<figure><img src="<?=base_url('assets/front/images/lock.png')?>" alt="lock" class="viewPassword"></figure>
									</span>
								</label>
								
								<label class="block clearfix">
									<span class="block input-icon input-icon-right">
										<input type="password" name="con_password" id="con_password" data-parsley-equalto="#new_password" data-parsley-equalto-message="New Password and Confirm Password are not same" class="form-control" placeholder="Confirm Password" />
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

							
						</div>
					</div>
				</div></div><!-- /.widget-body -->
			</div><!-- /.login-box -->
	<script>
		$(document).ready(function (){
			$('.viewPassword').click( function (){
				var set	= $('#new_password').attr('data-set');
				if(set==1){
					$('#new_password').attr('data-set','0');
					$('#new_password').attr('type','text');
				}else{
					$('#new_password').attr('data-set','1');
					$('#new_password').attr('type','password');
				}
				
			});
		});
	</script>
</body>
</html>
