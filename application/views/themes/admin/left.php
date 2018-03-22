<div id="sidebar" class="sidebar responsive ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<ul class="nav nav-list">
					<li class="">
						<a href="index.html">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>
					<?php
						$management	= $this->Management;
					?>
					<li class="<?=!empty($management) && $management=='User Management' ? 'active open' : '';?>">
						<a href="javascript:void(0)">
							<i class="menu-icon fa fa-users"></i>
							<span class="menu-text"> Users </span>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li class="active">
								<a href="<?=base_url('admin/users/')?>">
									<i class="menu-icon fa fa-caret-right"></i>
									All Users
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>
