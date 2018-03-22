<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="<?=base_url('assets/front/sidebar/css/reset.css')?>"> <!-- CSS reset -->
	<link rel="stylesheet" href="<?=base_url('assets/front/sidebar/css/style.css')?>"> <!-- Resource style -->
	<script src="<?=base_url('assets/front/sidebar/js/modernizr.js')?>"></script> <!-- Modernizr -->
  	
	
</head>
<body>
<?php
	$this->output->enable_profiler(TRUE);
	//$userInfo	=  $this->Login_model->loggedInUser();
	$image		= $this->session->userdata('images');
	$first_name	= $this->session->userdata('fname');
	$last_name	= $this->session->userdata('lname');
	$userImg	= !empty($image) ? $image : '';
	$userName	= !empty($first_name) ? $first_name.' '.$last_name : '';
	$userSortName	= !empty($first_name) ? substr($first_name,0,1).' '.(!empty($last_name) ? substr($last_name,0,1) : '') : '';
	$userImgSrc		= base_url('assets/front/images/lw.png');
	$userImgPath	= FCPATH.'upload-data/users/'.$userImg;
	if(!empty($userImg) && file_exists($userImgPath)){
		$userImgSrc		= base_url('upload-data/users/'.$userImg);
	}
	
?>

	<header class="cd-main-header">
		<a href="#0" class="cd-logo">
			<img class="logo-img" src="<?=base_url('assets/front/images/logo.png')?>" alt="Logo">

		</a>
		
		<div class="cd-search is-hidden">
			<form action="#0">
				<input type="search" placeholder="Search...">
			</form>
		</div> <!-- cd-search -->

		<a href="#0" class="cd-nav-trigger">Menu<span></span></a>

		<nav class="cd-nav">
			<ul class="cd-top-nav">
				<li><a href="#0">Tour</a></li>
				<li><a href="#0">Support</a></li>
				<li class="has-children account">
					<a href="#0">
						<img src="<?=$userImgSrc;?>" alt="avatar">
						<?=$userName?>
					</a>

					<ul>

						<!-- <li><a href="#0">My Account</a></li>
						<li><a href="#0">Edit Account</a></li> -->
						<li><a href="<?=base_url('logout')?>">Logout</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header> <!-- .cd-main-header -->

	<div class="loader" style="position: fixed;left: 0px;top: 0px;width: 100%;height: 100%;z-index: 9999;background: url('<?=base_url("assets/front/")?>/images/loading2.gif') 50% 50% no-repeat rgb(249,249,249);opacity: 8; ">
	</div>

	<main class="cd-main-content">
		<nav class="cd-side-nav">
		<?php
			$section	= !empty($this->Management) ? $this->Management : '';
		?>
			<ul>
				<li class="cd-label">Main</li>
				<li>
					
					<a href="<?=base_url('dashboard')?>" class="<?=(!empty($title) && $title=='dashboard') ? 'active' : '';?>">
						<div class="submenu-items">
							<img src="<?=base_url('assets/front/images/dashboard.png')?>" alt="Dashboard">
							<span class="submenu-txt"> Dashboard </span>
						</div>	
					</a>
				</li>
			
				<li class="has-children ">
					<a class="<?=!empty($section) && $section=='Home' ? 'submenu-open' : '' ?>">
						<div class="submenu-items">
							<img src="<?=base_url('assets/front/images/quotes.png')?>" alt="net">
							<span class="submenu-text">Quote</span>
						</div>
					</a>
					<ul>
						<li>
							<a href="<?=base_url('customnet')?>" class="<?=(!empty($title) && $title=='customnet') ? 'active' : '';?>">
								Create
							</a>
						</li>
						<li>
							<a href="<?=base_url('managequote')?>" class="<?=(!empty($title) && $title=='managequote') ? 'active' : '';?>">
								Manage
							</a>
						</li>
					</ul>
			  </li>
			  
			  <li class="has-children">
					<a class="<?=!empty($section) && $section=='CRM' ? 'submenu-open' : '' ?>">
						<div class="submenu-items">
							<img src="<?=base_url('assets/front/images/crm.png')?>" alt="net">
							<span class="submenu-text">CRM</span>
						</div>
					</a>
					<ul>
						<li class="">
							<a href="<?=base_url('customers')?>" class="<?=(!empty($title) && $title=='account') ? 'active' : '';?>">
								Accounts
							</a>
						</li>
						
						<li class="">
							<a href="<?=base_url('contacts')?>" class="<?=(!empty($title) && $title=='contact') ? 'active' : '';?>">
								Contacts
							</a>
						</li>
					</ul>
			  </li>
			
			<li class="has-children">
				<a class="<?=(!empty($section) && $section=='Orders') ? 'submenu-open' : '';?>">
					<div class="submenu-items">
						<img src="<?=base_url('assets/front/images/oder.png')?>" alt="Inventory">
						<span class="submenu-text">Orders </span>
					</div> 
				</a>
					<ul>
						<li class="">
							<a href="<?=base_url('orders')?>" class="<?=(!empty($title) && ($title=='View Orders')) ? 'active' : '';?>">
								Search
							</a>
						</li>
					</ul>
			</li>
			
			<li class="has-children">
				<a class="<?=(!empty($section) && $section=='Purchase Orders') ? 'submenu-open' : '';?>">
					<div class="submenu-items">
						<img src="<?=base_url('assets/front/images/oder.png')?>" alt="Inventory">
						<span class="submenu-text">Purchase Order  </span>
					</div>
				</a>
					<ul >
						
						<li class="">
							<a href="<?=base_url('purchaseOrder')?>" class="<?=(!empty($title) && ($title=='Create')) ? 'active' : '';?>">
								Create
							</a>
						</li>
					</ul>
			</li>
			
			<li class="has-children">
				<a class="<?=(!empty($section) && $section=='Shipment') ? 'submenu-open' : '';?>">
					<div class="submenu-items">
						<img src="<?=base_url('assets/front/images/shipment.png')?>" alt="Inventory">
						<span class="submenu-text">Shipment  </span>
					</div>
				</a>
				<ul >
						<li class="">
							<a href="<?=base_url('upsfedex')?>" class="<?=(!empty($title) && ($title=='UPS Tracking')) ? 'active' : '';?>">
								UPS/FedEx
							</a>
							
						</li>
						<li class="">
							<a href="<?=base_url('others')?>" class="<?=(!empty($title) && $title=='Others') ? 'active' : '';?>">
								Others
							</a>
						</li>
						
					</ul>
			</li>
			
			<li class="has-children">
				<a class="<?=(!empty($title) && $title=='Invoice') ? 'active' : '';?>">
					<div class="submenu-items">
						<img src="<?=base_url('assets/front/images/invoice.png')?>" alt="Invoice"> 
						<span class="submenu-text">Invoice</span>
					</div>
				</a>
					<ul>
						<li class="">
							<a href="<?=base_url('comming')?>" class="<?=(!empty($title) && $title=='customnet') ? 'active' : '';?>">
								Search
							</a>
						</li>
						<li class="">
							<a href="<?=base_url('comming')?>" class="<?=(!empty($title) && $title=='managequote') ? 'active' : '';?>">
								Aging
							</a>
						</li>
					</ul>
			</li>

			<li class="has-children">
				<a class="<?=(!empty($section) && $section=='Reports') ? 'submenu-open'  : '';?>">
					<div class="submenu-items">
						<img src="<?=base_url('assets/front/images/report.png')?>" alt="Reports"> 
						<span class="submenu-text">Report</span>
					</div>
				</a>
					<ul >
						<li class="">
							<a href="<?=base_url('reorder')?>" class="<?=(!empty($title) && $title=='Reorders') ? 'active' : '';?>">
								Reorder
							</a>
						</li>
						<li class="">
							<a href="<?=base_url('summary')?>" class="<?=(!empty($title) && $title=='Summary') ? 'active' : '';?>">
								Inv Summary
							</a>
						</li>
						<li class="">
							<a href="<?=base_url('special-purchasing')?>" class="<?=(!empty($title) && $title=='Special Purchasing') ? 'active' : '';?>">
								Special Purchasing
							</a>
						</li>
						
						<li class="">
							<a href="<?=base_url('transferwarehouses')?>" class="<?=(!empty($title) && $title=='Transfer Ware House') ? 'active' : '';?>">
								Warehouse Transfer
							</a>
						</li>
						<li class="">
							<a href="<?=base_url('psninventories')?>" class="<?=(!empty($title) && $title=='PSN Inventory') ? 'active' : '';?>">
								PSN Inventory
							</a>
						</li>
						
						<li class="">
							<a href="<?=base_url('inventorystockout')?>" class="<?=(!empty($title) && $title=='Inventory Stockout') ? 'active' : '';?>">
								Stock Out
							</a>
						</li>
						
						<li class="">
							<a href="<?=base_url('wip_transfer')?>" class="<?=(!empty($title) && ($title=='WIP Transfer')) ? 'active' : '';?>">
								WIP Transfer
							</a>
						</li>
						<li class="">
							<a href="<?=base_url('varifyshipping')?>" class="<?=(!empty($title) && $title=='Varify Shipping') ? 'active' : '';?>">
								Verify Shipping
							</a>
						</li>
						<li class="">
							<a href="<?=base_url('pendingpayment')?>" class="<?=(!empty($title) && $title=='Pending Payment') ? 'active' : '';?>">
								Pending Payment
							</a>
						</li>
					</ul>
			</li>
			
			
			<li class="has-children">
				<a class="<?=(!empty($section) && $section=='Inventory') ? 'submenu-open' : '';?>">
					<div class="submenu-items">
						<img src="<?=base_url('assets/front/images/inventery.png')?>" alt="Inventory">
						<span class="submenu-text">Inventory  </span>
					</div>
				</a>
					<ul >
						<li class="">
							<a href="<?=base_url('viewitems')?>" class="<?=(!empty($title) && ($title=='View Items' || $title=='Inventory')) ? 'active' : '';?>">
								View Items
							</a>
						</li>
						<li class="">
							<a href="<?=base_url('additem')?>" class="<?=(!empty($title) && ($title=='Add Item' || $title=='Inventory')) ? 'active' : '';?>">
								Create
							</a>
						</li>
					</ul>
			</li>

			<li class="has-children">
				<a class="<?=(!empty($section) && $section=='HR') ? 'submenu-open' : '';?>">
					<div class="submenu-items">
						<span class="fa-stack fa-lg">
						  <i class="fa fa-users fa-stack-1x "></i>
						</span>
						<span class="submenu-text">HR</span>
					</div>
				</a>
					<ul>
						<li class="">
							<a href="<?=base_url('addHR')?>" class="<?=(!empty($title) && ($title=='Add HR' || $title=='HR')) ? 'active' : '';?>">
								Create
							</a>
						</li>
						<li class="">
							<a href="<?=base_url('HR')?>" class="<?=(!empty($title) && ($title=='Manage HR' || $title=='HR')) ? 'active' : '';?>">
								Manage
							</a>	
						</li>
												
					</ul>
			</li>

			<li class="has-children">
				<a class="<?=(!empty($section) && $section=='ISO') ? 'submenu-open' : '';?>">
					<div class="submenu-items">
						<img src="<?=base_url('assets/front/images/iso.png')?>" alt="Inventory">
						<span class="submenu-text">ISO  </span>
					</div>
				</a>
					<ul >
						<li class="">
							<a href="<?=base_url('createIso')?>" class="<?=(!empty($title) && ($title=='New ISO NCR')) ? 'active' : '';?>">
								Create
							</a>
						</li>
						<li class="">
							<a href="<?=base_url('iso')?>" class="<?=(!empty($title) && ($title=='ISO NCR')) ? 'active' : '';?>">
								Manage
							</a>
						</li>
					</ul>
			</li>
			
			<li class="has-children">
				<a class="<?=(!empty($section) && $section=='Survey') ? 'submenu-open' : '';?>">
					<div class="submenu-items">
						<img src="<?=base_url('assets/front/images/survey.png')?>" alt="Survey">
						<span class="submenu-text">Survey  </span>
					</div>
				</a>
					<ul>
						<li class="">
							<a href="<?=base_url('survey')?>" class="<?=(!empty($title) && ($title=='Create Survey' || $title=='Survey')) ? 'active' : '';?>">
								Create
							</a>
						</li>
						<li class="">
							<a href="<?=base_url('surveyIndex')?>" class="<?=(!empty($title) && ($title=='Manage Survey' || $title=='Survey')) ? 'active' : '';?>">
								Manage
							</a>	
						</li>
					</ul>
			</li>
			
			<li class="has-children">
				<a class="<?=(!empty($section) && $section=='Test Report') ? 'submenu-open' : '';?>">
					<div class="submenu-items">
						<img src="<?=base_url('assets/front/images/report.png')?>" alt="Test Report">
						<span class="submenu-text">Test Report  </span>
					</div>
				</a>
					<ul >
						<li class="">
							<a href="<?=base_url('createTR')?>" class="<?=(!empty($title) && ($title=='Create Test Report' || $title=='Test Report')) ? 'active' : '';?>">
								Create
							</a>
						</li>
						<li class="">
							<a href="<?=base_url('TR')?>" class="<?=(!empty($title) && ($title=='Manage Test Report' || $title=='Test Report')) ? 'active' : '';?>">
								Manage
							</a>	
						</li>
												
					</ul>
			</li>

			<li class="has-children">
				<a class="<?=!empty($section) && $section=='Configuration' ? 'submenu-open' : 'display:none' ?>">
					<div class="submenu-items">
						<img src="<?=base_url('assets/front/images/confi.png')?>" alt="Configuration Setting">
						<span class="submenu-text">Config</span>
					</div>
				</a>
				
				<ul >
				
				<?php
					if(!empty($this->user_group) && $this->user_group==3){
				?>	
				
					<li class="">
						<a href="<?=base_url('users')?>" class="<?=(!empty($title) && $title=='users') ? 'active' : '';?>">
							Users
						</a>
					</li>
					<li class="">
						<a href="<?=base_url('groups')?>" class="<?=(!empty($title) && $title=='groups') ? 'active' : '';?>">
							Permissions
						</a>
					</li>
				<?php
					}
				?>
					<li class="">
						<a href="<?=base_url('products')?>" class="<?=(!empty($title) && $title=='product') ? 'active' : '';?>">
							Products
						</a>
					</li>
					<li class="">
						<a href="<?=base_url('netformallowances')?>" class="<?=(!empty($title) && $title=='Netform Allowance') ? 'active' : '';?>">
							Netform Allowance
						</a>
					</li>
					<li class="">
						<a href="<?=base_url('laboractivityrate')?>" class="<?=(!empty($title) && $title=='Labor Activity Rate') ? 'active' : '';?>">
							Labor Activity Rate
						</a>
					</li>
				</ul>
			</li>
			
		<li >
				<a href="<?=base_url('logout')?>" >
					<div class="submenu-items">
						<img src="<?=base_url('assets/front/images/logout.png')?>" alt="Logout">
						<span class="submenu-text">Logout</span>
					</div>
				</a>
			</li>
		</ul>

		</nav>

		<div class="content-wrapper">
			<!-- <h1>Responsive Sidebar Navigation</h1>
		</div>  --><!-- .content-wrapper -->
	 <!-- .cd-main-content -->
	
