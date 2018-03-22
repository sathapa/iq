<body>
	<div class="loader" style="position: fixed;left: 0px;top: 0px;width: 100%;height: 100%;z-index: 9999;background: url('<?=base_url("assets/front/")?>/images/loading2.gif') 50% 50% no-repeat rgb(249,249,249);opacity: 8; "></div>
<section id="wrapper " class="wrepper">
	
<div class="sidebar">
	<div class="logo">
		<a href="#">
			<img src="<?=base_url('assets/front/images/logo.png')?>" alt="logo" />
		</a>
	</div>
	
	<nav id="navside">
		<?php
			$section	= !empty($this->Management) ? $this->Management : '';
		?>
		
		<ul class="cd-navigation ">
				<li >
					<a href="<?=base_url('dashboard')?>" class="<?=(!empty($title) && $title=='dashboard') ? 'active' : '';?>">
						<img src="<?=base_url('assets/front/images/dashboard.png')?>" alt="Dashboard">Dashboard
					</a>
				</li>
			
				<li class="item-has-children">
					<a class="<?=!empty($section) && $section=='Home' ? 'submenu-open' : '' ?>">
					<img src="<?=base_url('assets/front/images/quotes.png')?>" alt="net">Quote</a>
					<ul class="sub-menu" style="<?=!empty($section) && $section=='Home' ? 'display:block' : 'display:none' ?>">
						<li class="">
							<a href="<?=base_url('customnet')?>" class="<?=(!empty($title) && $title=='customnet') ? 'active' : '';?>">
								Create
							</a>
						</li>
						<li class="">
							<a href="<?=base_url('managequote')?>" class="<?=(!empty($title) && $title=='managequote') ? 'active' : '';?>">
								Manage
							</a>
						</li>
					</ul>
			  </li>
			  
			  <li class="item-has-children">
					<a class="<?=!empty($section) && $section=='CRM' ? 'submenu-open' : '' ?>">
					<img src="<?=base_url('assets/front/images/crm.png')?>" alt="net">CRM</a>
					<ul class="sub-menu" style="<?=!empty($section) && $section=='CRM' ? 'display:block' : 'display:none' ?>">
						
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
			
			<li class="item-has-children">
				<a class="<?=(!empty($section) && $section=='Orders') ? 'submenu-open' : '';?>">
					<img src="<?=base_url('assets/front/images/oder.png')?>" alt="Inventory">Orders  
				</a>
					<ul class="sub-menu" style="<?=!empty($section) && $section=='Orders' ? 'display:block' : 'display:none' ?>">
						<li class="">
							<a href="<?=base_url('orders')?>" class="<?=(!empty($title) && ($title=='View Orders')) ? 'active' : '';?>">
								Search
							</a>
						</li>
					</ul>
			</li>
			
			<li class="item-has-children">
				<a class="<?=(!empty($section) && $section=='Purchase Orders') ? 'submenu-open' : '';?>">
					<img src="<?=base_url('assets/front/images/oder.png')?>" alt="Inventory">Purchase Order  
				</a>
					<ul class="sub-menu" style="<?=!empty($section) && $section=='Purchase Orders' ? 'display:block' : 'display:none' ?>">
						
						<li class="">
							<a href="<?=base_url('purchaseOrder')?>" class="<?=(!empty($title) && ($title=='Create')) ? 'active' : '';?>">
								Create
							</a>
						</li>
					</ul>
			</li>
			
			<li class="item-has-children">
				<a class="<?=(!empty($section) && $section=='Shipment') ? 'submenu-open' : '';?>">
					<img src="<?=base_url('assets/front/images/shipment.png')?>" alt="Inventory">Shipment  
				</a>
				<ul class="sub-menu" style="<?=!empty($section) && $section=='Shipment' ? 'display:block' : 'display:none' ?>">
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
			
			<li class="item-has-children">
				<a class="<?=(!empty($title) && $title=='Invoice') ? 'active' : '';?>">
					<img src="<?=base_url('assets/front/images/invoice.png')?>" alt="Invoice"> Invoice
				</a>
					<ul class="sub-menu" style="<?=!empty($section) && $section=='Invoice' ? 'display:block' : 'display:none' ?>">
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

			<li class="item-has-children">
				<a class="<?=(!empty($section) && $section=='Reports') ? 'submenu-open'  : '';?>">
					<img src="<?=base_url('assets/front/images/report.png')?>" alt="Reports"> Report
				</a>
					<ul class="sub-menu" style="<?=!empty($section) && $section=='Reports' ? 'display:block' : 'display:none' ?>">
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
			
			
			<li class="item-has-children">
				<a class="<?=(!empty($section) && $section=='Inventory') ? 'submenu-open' : '';?>">
					<img src="<?=base_url('assets/front/images/inventery.png')?>" alt="Inventory">Inventory  
				</a>
					<ul class="sub-menu" style="<?=!empty($section) && $section=='Inventory' ? 'display:block' : 'display:none' ?>">
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

			<li class="item-has-children">
				<a class="<?=(!empty($section) && $section=='HR') ? 'submenu-open' : '';?>">
					<span class="fa-stack fa-lg">
					  <i class="fa fa-users fa-stack-1x "></i>
					</span>
					HR
				</a>
					<ul class="sub-menu" style="<?=!empty($section) && $section=='HR' ? 'display:block' : 'display:none' ?>">
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

			<li class="item-has-children">
				<a class="<?=(!empty($section) && $section=='ISO') ? 'submenu-open' : '';?>">
					<img src="<?=base_url('assets/front/images/iso.png')?>" alt="Inventory">ISO  
				</a>
					<ul class="sub-menu" style="<?=!empty($section) && $section=='ISO' ? 'display:block' : 'display:none' ?>">
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
			
			<li class="item-has-children">
				<a class="<?=(!empty($section) && $section=='Survey') ? 'submenu-open' : '';?>">
					<img src="<?=base_url('assets/front/images/survey.png')?>" alt="Survey">Survey  
				</a>
					<ul class="sub-menu" style="<?=!empty($section) && $section=='Survey' ? 'display:block' : 'display:none' ?>">
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
			
			<li class="item-has-children">
				<a class="<?=(!empty($section) && $section=='Test Report') ? 'submenu-open' : '';?>">
					<img src="<?=base_url('assets/front/images/report.png')?>" alt="Test Report">Test Report  
				</a>
					<ul class="sub-menu" style="<?=!empty($section) && $section=='Test Report' ? 'display:block' : 'display:none' ?>">
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

			<li class="item-has-children">
				<a class="<?=!empty($section) && $section=='Configuration' ? 'submenu-open' : 'display:none' ?>">
					<img src="<?=base_url('assets/front/images/confi.png')?>" alt="Configuration Setting">Configuration
				</a>
				
				<ul class="sub-menu" style="<?=!empty($section) && $section=='Configuration' ? 'display:block' : 'display:none' ?>">
				
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
					<img src="<?=base_url('assets/front/images/logout.png')?>" alt="Logout">Logout
				</a>
			</li>
		</ul>
	</nav>

</div>

