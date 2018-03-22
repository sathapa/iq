<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Admin | Quote Wave</title>
		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?= base_url('assets/admin/');?>/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?= base_url('assets/admin/');?>/font-awesome/4.5.0/css/font-awesome.min.css" />
		<!-- page specific plugin styles -->
		<!-- text fonts -->
		<link rel="stylesheet" href="<?= base_url('assets/admin/');?>/css/fonts.googleapis.com.css" />
		<!-- ace styles -->
		<link rel="stylesheet" href="<?= base_url('assets/admin/');?>/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="<?= base_url('assets/admin/');?>/css/ace-skins.min.css" />
		<link rel="stylesheet" href="<?= base_url('assets/admin/');?>/css/ace-rtl.min.css" />
		
		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->
		
		<script src="<?= base_url('assets/admin/');?>/js/jquery-2.1.4.min.js"></script>
		<!-- ace settings handler -->
		<script src="<?= base_url('assets/admin/');?>/js/ace-extra.min.js"></script>


	</head>

    <body class="no-skin">
<div id="navbar" class="navbar navbar-default ace-save-state" style="height:45px;">
			<div class="navbar-container ace-save-state" id="navbar-container">


				<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							Quote Web Admin
						</small>
					</a>
				</div>
				<?php
					$adminInfo	= $this->admin;
					$adminName	= !empty($adminInfo->first_name) ? $adminInfo->first_name.' '.$adminInfo->last_name : 'Admin';
					$image		= !empty($adminInfo->image) ? $adminInfo->image : '';
					$adminImgPath	= FCPATH.'upload-data/users/'.$image;
					$adminImgSrc	= base_url('upload-data/users/'.$image);
					if(!empty($image) && file_exists($adminImgPath)){
						$adminImgSrc	= base_url('upload-data/users/'.$image);
					}else{
						$adminImgSrc	= base_url('assets/admin/images/avatars/user.jpg');
					}
				?>
				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?=$adminImgSrc?>" alt="Admin Profile Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									<?=$adminName;?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="<?=base_url('admin/users/profile')?>">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?=base_url('admin/logout')?>">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>
	<div class="main-container ace-save-state" id="main-container">
		<script type="text/javascript">
			try{ace.settings.loadState('main-container')}catch(e){}
		</script>
