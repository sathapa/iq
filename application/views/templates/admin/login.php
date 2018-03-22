<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login Page - Ace Admin</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?=base_url('assets/admin')?>/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?=base_url('assets/admin')?>/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="<?=base_url('assets/admin')?>/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?=base_url('assets/admin')?>/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="<?=base_url('assets/admin')?>/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="<?=base_url('assets/admin')?>/css/login.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		
		
	</head>

	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						
						<?=$body;?>
						
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="<?=base_url('assets/admin')?>/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<?php 
			if(!empty($js)){
				foreach($js as $jval){
					echo "<script type='text/javascript' src='".base_url('assets/admin/')."/js/$jval.js' ></script>";
				}
			}
		?>
		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				 $(document).on('click', '.toolbar a[data-target]', function(e) {
					e.preventDefault();
					var target = $(this).data('target');
					$('.widget-box.visible').removeClass('visible');/* hide others */
					$(target).addClass('visible');/* show target */
				 });
				/* Forgot Password */
				$('.login-container').on('click','.send-reset-password', function (){
					$('#forgot-password-form').parsley().validate();
						if ($('#forgot-password-form').parsley().isValid()) {
							$('.loader-class ').addClass('display-loder');
							$.post('<?=base_url('admin/login/forgotPassword')?>',$('#forgot-password-form').serialize(), function (response){
								var data	= JSON.parse(response);
								if(data.status=='Success'){
									$('.forgot-password-form-div').html('<p>'+data.message+'</p>');
								}else{
									
								}
								$('.loader-class ').removeClass('display-loder');
							});
							$('.loader-class ').removeClass('display-loder');
						}
				});
			});
			

			/* you don't need this, just used for changing background */
			jQuery(function($) {
			 $('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');
				
				e.preventDefault();
			 });
			 
			});
		</script>
	</body>
</html>
