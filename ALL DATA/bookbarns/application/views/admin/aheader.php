	<div class="navbar-header">
					<a href="index.html" class="navbar-brand">
					    <i class=" text-gradient bg-gradient-blue-purple"></i>
					    <b>Book</b>Barns
					</a>
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="navbar-xs-justified">
					<ul class="nav navbar-nav navbar-right">
						

						<li class="dropdown">
							<a href="javascript:;" data-toggle="dropdown">
								<span class="navbar-user-img online pull-left">
									<img src="<?php  echo base_url('resources/shared/images/'.$_SESSION['propic'])?>" alt="" />
								</span>
								<span class="hidden-xs "><?php echo $_SESSION['uname']?> <b class="caret"></b></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo site_url('admin/ManageProfile/loadadminprofile/')?>">Edit Profile</a></li>
							
								<li class="divider"></li>
								<li><a href="<?php echo site_url('admin/
				AdminLogin/logout');?>">Log Out</a></li>
							</ul>
						</li>
					</ul>
				</div>