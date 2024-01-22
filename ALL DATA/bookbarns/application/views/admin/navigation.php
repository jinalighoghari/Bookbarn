<div id="sidebar" class="sidebar sidebar-inverse">
			<!-- BEGIN scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- BEGIN nav -->
				<ul class="nav">
					<li class="nav-profile">
						<div class="image">
		<img src="<?php  echo base_url('resources/shared/images/'.$_SESSION['propic'])?>">
						</div>
						<div class="info">
							<h4><?php echo $_SESSION['uname']?></h4>
							<p></p>
						</div>
					</li>
					<li class="nav-divider"></li>
					<li class="nav-header">Navigation</li>
					<li class="active"><a href="<?php echo site_url('admin/AHome')?>"><i class="ti-home"></i><span>Home</span></a></li>
					<li class="active"><a href="<?php echo site_url('admin/User')?>"><i class="ti-home"></i><span>User</span></a></li>
					<li class="active"><a href="<?php echo site_url('admin/Category')?>"><i class="ti-home"></i><span>Category</span></a></li>
					<li class="active"><a href="<?php echo site_url('admin/Book')?>"><i class="ti-home"></i><span>Books</span></a></li>
				    <li class="active"><a href="<?php echo site_url('admin/Inquiry')?>"><i class="ti-home"></i><span>Inquiry</span></a></li>
				    <li class="active"><a href="<?php echo site_url('admin/Orders')?>"><i class="ti-home"></i><span>Orders</span></a></li>
					
				</ul> 
				<!-- END nav -->
			</div>
			<!-- END scrollbar -->
			<!-- BEGIN sidebar-minify-btn -->
			<a href="#" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="ti-arrow-left"></i></a>
			<!-- END sidebar-minify-btn -->
		</div> 