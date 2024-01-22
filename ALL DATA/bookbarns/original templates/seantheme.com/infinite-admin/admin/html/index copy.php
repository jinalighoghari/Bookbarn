<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/infinite-admin/admin/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 May 2020 07:34:42 GMT -->
<head>
	<meta charset="utf-8" />
	<title>Infinite Admin | Dashboard</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="../assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="../assets/plugins/bootstrap/bootstrap4/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/icon/themify-icons/themify-icons.css" rel="stylesheet" />
	<link href="../assets/css/animate.min.css" rel="stylesheet" />
	<link href="../assets/css/style.min.css" rel="stylesheet" />
	<link href="../assets/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/plugins/loader/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
	<!-- BEGIN #page-container -->
	<div id="page-container" class="page-header-fixed page-sidebar-fixed fade">
		<!-- BEGIN #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- BEGIN container-fluid -->
			<div class="container-fluid">
				<!-- BEGIN mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					<a href="index.html" class="navbar-brand">
					    <i class="ti-infinite navbar-logo text-gradient bg-gradient-blue-purple"></i>
					    <b>Infinite</b> Admin
					</a>
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- END mobile sidebar expand / collapse button -->
				<!-- BEGIN header navigation right -->
				<div class="navbar-xs-justified">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="javascript:;" data-toggle="search-bar" class="navbar-icon">
								<i class="ti-search"></i>
							</a>
						</li>
						<li class="dropdown">
							<a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle navbar-icon with-label">
								<i class="ti-bell"></i>
							</a>
							<ul class="dropdown-menu dropdown-lg no-padding">
								<li class="dropdown-header"><a href="#" class="dropdown-close">&times;</a>Today</li>
								<li class="notification">
									<a href="#">
										<div class="notification-icon bg-primary">
											<i class="ti-apple"></i>
										</div>
										<div class="notification-info">
											<h4 class="notification-title">App Store <span class="notification-time">Just now</span></h4>
											<p class="notification-desc">
												Your iOS application has been approved
											</p>
										</div>
									</a>
								</li>
								<li class="notification">
									<a href="#">
										<div class="notification-icon bg-success">
											<i class="ti-android"></i>
										</div>
										<div class="notification-info">
											<h4 class="notification-title">Google Play <span class="notification-time">5 min ago</span></h4>
											<p class="notification-desc">
												Your android application has been approved
											</p>
										</div>
									</a>
								</li>
								<li class="notification">
									<a href="#">
										<div class="notification-icon bg-muted">
											<i class="ti-github"></i>
										</div>
										<div class="notification-info">
											<h4 class="notification-title">Github  <span class="notification-time">12 min ago</span></h4>
											<p class="notification-desc">
												Error with notifications from Private Repos
											</p>
										</div>
									</a>
								</li>
								<li class="dropdown-header"><a href="#" class="dropdown-close">&times;</a>Yesterday</li>
								<li class="notification">
									<a href="#">
										<div class="notification-icon bg-purple">
											<i class="ti-email"></i>
										</div>
										<div class="notification-info">
											<h4 class="notification-title">Gmail  <span class="notification-time">12:50pm</span></h4>
											<p class="notification-desc">
												You have 2 unread email
											</p>
										</div>
									</a>
								</li>
								<li class="notification">
									<a href="#">
										<div class="notification-icon">
											<img src="../assets/img/user-2.jpg" alt="" />
										</div>
										<div class="notification-info">
											<h4 class="notification-title">Corey  <span class="notification-time">10:20am</span></h4>
											<p class="notification-desc">
												There's so much room for activities!
											</p>
										</div>
									</a>
								</li>
								<li class="notification">
									<a href="#">
										<div class="notification-icon bg-gradient-aqua">
											<i class="ti-twitter"></i>
										</div>
										<div class="notification-info">
											<h4 class="notification-title">Twitter  <span class="notification-time">12:50pm</span></h4>
											<p class="notification-desc">
												@sergiolucas: Most rain in the last two days: 85mm Gabo Island (Mar
											</p>
										</div>
									</a>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="javascript:;" data-toggle="dropdown" class="navbar-icon">
								<i class="ti-settings"></i>
							</a>
							<ul class="dropdown-menu dropdown-md no-padding" data-dropdown-close="false">
								<li class="dropdown-header">Notifications Settings</li>
								<li class="setting">
									<div class="setting-icon bg-grey"><i class="ti-email"></i></div>
									<div class="setting-info">
										<div class="switcher">
											<input type="checkbox" name="setting_1" id="setting_1" checked />
											<label for="setting_1"></label>
										</div>
										Email
									</div>
								</li>
								<li class="setting">
									<div class="setting-icon bg-grey"><i class="ti-desktop"></i></div>
									<div class="setting-info">
										<div class="switcher">
											<input type="checkbox" name="setting_2" id="setting_2" checked />
											<label for="setting_2"></label>
										</div>
										Desktop and Mobile
									</div>
								</li>
								<li class="setting">
									<div class="setting-icon bg-grey"><i class="ti-mobile"></i></div>
									<div class="setting-info">
										<div class="switcher">
											<input type="checkbox" name="setting_3" id="setting_3" />
											<label for="setting_3"></label>
										</div>
										Text message
									</div>
								</li>
								<li class="dropdown-header">Privacy Settings</li>
								<li class="setting">
									<div class="setting-icon bg-grey"><i class="ti-user"></i></div>
									<div class="setting-info">
										<div class="switcher">
											<input type="checkbox" name="setting_4" id="setting_4" />
											<label for="setting_4"></label>
										</div>
										Public friends list 
									</div>
								</li>
								<li class="setting">
									<div class="setting-icon bg-grey"><i class="ti-search"></i></div>
									<div class="setting-info">
										<div class="switcher">
											<input type="checkbox" name="setting_5" id="setting_5" checked />
											<label for="setting_5"></label>
										</div>
										Public profile page
									</div>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="javascript:;" data-toggle="dropdown">
								<span class="navbar-user-img online pull-left">
									<img src="../assets/img/user.jpg" alt="" />
								</span>
								<span class="hidden-xs ">Sean Ngu <b class="caret"></b></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="javascript:;">Edit Profile</a></li>
								<li><a href="javascript:;">Inbox</a></li>
								<li><a href="javascript:;">Calendar</a></li>
								<li><a href="javascript:;">Setting</a></li>
								<li class="divider"></li>
								<li><a href="javascript:;">Log Out</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<!-- END header navigation right -->
			</div>
			<!-- END container-fluid -->
			<!-- BEGIN header-search-bar -->
			<div class="header-search-bar">
                <form action="#" method="POST" name="search_bar_form">
                    <div class="form-group">
                        <div class="left-icon"><i class="ti-search"></i></div>
                        <input type="text" class="form-control" id="header-search" placeholder="Search infinite admin..." />
                        <a href="javascript:;" data-dismiss="search-bar" class="right-icon"><i class="ti-close"></i></a>
                    </div>
                </form>
			</div>
			<!-- END header-search-bar -->
		</div>
		<!-- END #header -->
		
		<!-- BEGIN #sidebar -->
		<div id="sidebar" class="sidebar sidebar-inverse">
			<!-- BEGIN scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- BEGIN nav -->
				<ul class="nav">
					<li class="nav-profile">
						<div class="image">
							<img src="../assets/img/user.jpg" />
						</div>
						<div class="info">
							<h4>Sean Ngu</h4>
							<p>UXUI Frontend Developer</p>
						</div>
					</li>
					<li class="nav-divider"></li>
					<li class="nav-header">Navigation</li>
					<li class="active"><a href="index.html"><i class="ti-home"></i><span>Home</span></a></li>
					<li><a href="analytics.html"><i class="ti-pie-chart"></i><span>Analytics</span></a></li>
					<li class="has-sub">
						<a href="javascript:;">
						    <span class="caret caret-right pull-right"></span>
							<i class="ti-email"></i> 
							<span>Email <span class="notification">20+</span></span>
						</a>
						<ul class="sub-menu">
						    <li><a href="email_inbox.html">Inbox</a></li>
						    <li><a href="email_compose.html">Compose</a></li>
						    <li><a href="email_detail.html">Detail</a></li>
						</ul>
					</li>
					<li class="nav-divider"></li>
					<li class="nav-header">Components</li>
					<li><a href="widgets.html"><i class="ti-shortcode"></i><span>Widgets</span></a></li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret caret-right pull-right"></b>
						    <i class="ti-heart"></i>
						    <span>UI Kits</span> 
						</a>
						<ul class="sub-menu">
							<li><a href="ui_bootstrap.html">Bootstrap</a></li>
							<li><a href="ui_buttons.html">Buttons</a></li>
							<li><a href="ui_typography.html">Typography</a></li>
							<li><a href="ui_tabs_accordions.html">Tabs & Accordions</a></li>
							<li><a href="ui_modal_notification.html">Modal & Notification</a></li>
							<li><a href="ui_panels.html">Panels</a></li>
							<li><a href="ui_icons.html">Icons</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret caret-right pull-right"></b>
						    <i class="ti-notepad"></i>
						    <span>Forms</span> 
						</a>
						<ul class="sub-menu">
							<li><a href="form_elements.html">Form Elements</a></li>
							<li><a href="form_plugins.html">Form Plugins</a></li>
							<li><a href="form_wizards.html">Wizards</a></li>
							<li><a href="form_jquery_file_upload.html">File Upload</a></li>
							<li><a href="form_summernote.html">Summernote</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret caret-right pull-right"></b>
						    <i class="ti-layout-grid2"></i>
						    <span>Tables</span>
						</a>
						<ul class="sub-menu">
							<li><a href="table_basic.html">Basic Tables</a></li>
							<li><a href="table_data.html">DataTables</a></li>
						</ul>
					</li>
					<li><a href="chart.html"><i class="ti-bar-chart"></i><span>Chart</span></a></li>
					<li class="has-sub">
					    <a href="javascript:;">
						    <b class="caret caret-right pull-right"></b>
					        <i class="ti-map-alt"></i>
					        <span>Map</span>
					    </a>
						<ul class="sub-menu">
							<li><a href="map_vector.html">Vector Map</a></li>
							<li><a href="map_google.html">Google Map</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret caret-right pull-right"></b>
						    <i class="ti-layout-sidebar-left"></i>
						    <span>Layout</span>
						</a>
						<ul class="sub-menu">
							<li><a href="layout_starter.html">Starter Page</a></li>
							<li><a href="layout_fixed_footer.html">Fixed Footer</a></li>
							<li><a href="layout_full_width.html">Full Width</a></li>
							<li><a href="layout_boxed_layout.html">Boxed Layout</a></li>
							<li><a href="layout_full_height.html">Full Height</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret caret-right pull-right"></b>
						    <i class="ti-gift"></i>
						    <span>Pages</span>
						</a>
						<ul class="sub-menu">
					        <li><a href="page_gallery.html">Gallery</a></li>
						    <li><a href="page_coming_soon.html">Coming Soon Page</a></li>
							<li><a href="page_search_results.html">Search Results</a></li>
							<li><a href="page_404_error.html">404 Error Page</a></li>
							<li><a href="page_login.html">Login</a></li>
					        <li><a href="page_register.html">Register</a></li>
						</ul>
					</li>
					<li class="nav-divider"></li>
					<li class="nav-header">Users</li>
					<li><a href="profile.html"><i class="ti-user"></i><span>Profile</span></a></li>
					<li><a href="calendar.html"><i class="ti-calendar"></i> <span>Calendar</span></a></li>
					<li><a href="settings.html"><i class="ti-settings"></i><span>Settings</span></a></li>
					<li><a href="helper.html"><i class="ti-help-alt"></i><span>Helper</span></a></li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret caret-right pull-right"></b>
						    <i class="ti-align-left"></i> 
						    <span>Menu Level</span>
						</a>
						<ul class="sub-menu">
							<li class="has-sub">
								<a href="javascript:;">
						            <b class="caret caret-right pull-right"></b>
						            Menu 1.1
						        </a>
								<ul class="sub-menu">
									<li class="has-sub">
										<a href="javascript:;">
										    <b class="caret caret-right pull-right"></b>
										    Menu 2.1
										</a>
										<ul class="sub-menu">
											<li><a href="javascript:;">Menu 3.1</a></li>
											<li><a href="javascript:;">Menu 3.2</a></li>
										</ul>
									</li>
									<li><a href="javascript:;">Menu 2.2</a></li>
									<li><a href="javascript:;">Menu 2.3</a></li>
								</ul>
							</li>
							<li><a href="javascript:;">Menu 1.2</a></li>
							<li><a href="javascript:;">Menu 1.3</a></li>
						</ul>
					</li>
					<li class="nav-divider"></li>
					<li class="nav-header">Projects</li>
					<li class="nav-project">
						<a href="#">
							<div class="project-icon">
								<i class="ti-mobile"></i>
							</div>	
							<div class="project-info">
								<span class="pull-right project-percentage">70%</span>
								<h4 class="project-title">Mobile App Dev</h4>
								<div class="progress progress-xs">
									<div class="progress-bar bg-theme" style="width: 70%;" role="progressbar"></div>
								</div>
							</div>
						</a>
					</li>
					<li class="nav-project">
						<a href="#">
							<div class="project-icon">
								<i class="ti-headphone"></i>
							</div>	
							<div class="project-info">
								<span class="pull-right project-percentage">40%</span>
								<h4 class="project-title">New Audio Project</h4>
								<div class="progress progress-xs">
									<div class="progress-bar bg-theme" style="width: 40%;" role="progressbar"></div>
								</div>
							</div>
						</a>
					</li>
					<li class="nav-project">
						<a href="#">
							<div class="project-icon">
								<i class="ti-github"></i>
							</div>	
							<div class="project-info">
								<span class="pull-right project-percentage">50%</span>
								<h4 class="project-title">Repository Settings</h4>
								<div class="progress progress-xs">
									<div class="progress-bar bg-theme" style="width: 50%;" role="progressbar"></div>
								</div>
							</div>
						</a>
					</li>
					<li class="nav-divider"></li>
					<li class="nav-copyright">&copy; 2017 seanTheme All Right Reserved</li>
				</ul>
				<!-- END nav -->
			</div>
			<!-- END scrollbar -->
			<!-- BEGIN sidebar-minify-btn -->
			<a href="#" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="ti-arrow-left"></i></a>
			<!-- END sidebar-minify-btn -->
		</div>
		<!-- END #sidebar -->
		
		<!-- BEGIN #content -->
		<div id="content" class="content">
			<!-- BEGIN page-header -->
			<h1 class="page-header">
				Dashboard <small>overview, analytics & report</small>
			</h1>
			<!-- END page-header -->
			
			<!-- BEGIN row -->
			<div class="row">
				<!-- BEGIN col-6 -->
				<div class="col-lg-6 col-sm-12">
					<!-- BEGIN widget -->
					<div class="widget widget-card widget-card-rowspan2 dynamic-xs inverse-mode with-min-height">
						<!-- BEGIN widget-card-cover -->
						<div class="widget-card-cover">
							<div class="cover-bg"></div>
							<img src="../assets/img/dashboard-cover.jpg" alt="" />
						</div>
						<!-- END widget-card-cover -->
						<!-- BEGIN widget-card-content -->
						<div class="widget-card-content">
							<a href="#" class="widget-title-link bg-primary">Dismiss</a>
							<h4 class="widget-title"><b>GETTING STARTED</b></h4>
						</div>
						<!-- END widget-card-content -->
						<!-- BEGIN widget-card-content -->
						<div class="widget-card-content bottom p-b-5">
							<div class="text-center">
								<h3 class="m-b-0">Welcome back, Admin!</h3>
								<p class="opacity-7">We've assembled some links to get you started:</p>
							</div>
							<!-- BEGIN row -->
							<div class="row">
								<!-- BEGIN col-6 -->
								<div class="col-6">
									<!-- BEGIN widget -->
									<ul class="widget widget-list m-b-0 no-bg inverse-mode">
										<li>
											<!-- BEGIN widget-list-container -->
											<a href="#" class="widget-list-container">
												<div class="widget-list-media icon p-l-0">
													<i class="ti-pencil bg-gradient-blue"></i>
												</div>
												<div class="widget-list-content">
													<h4 class="widget-title">Create New Post</h4>
													<div class="widget-desc hidden-xs">Wordpress</div>
												</div>
											</a>
											<!-- END widget-list-container -->
										</li>
										<li>
											<!-- BEGIN widget-list-container -->
											<a href="#" class="widget-list-container">
												<div class="widget-list-media icon p-l-0">
													<i class="ti-shopping-cart-full bg-gradient-purple"></i>
												</div>
												<div class="widget-list-content">
													<h4 class="widget-title">Manage Store</h4>
													<div class="widget-desc hidden-xs">Product</div>
												</div>
											</a>
											<!-- END widget-list-container -->
										</li>
										<li>
											<!-- BEGIN widget-list-container -->
											<a href="#" class="widget-list-container">
												<div class="widget-list-media icon p-l-0">
													<i class="ti-bag bg-gradient-green"></i>
												</div>
												<div class="widget-list-content">
													<h4 class="widget-title">Manage Transaction</h4>
													<div class="widget-desc hidden-xs">Report</div>
												</div>
											</a>
											<!-- END widget-list-container -->
										</li>
									</ul>
									<!-- END widget -->
								</div>
								<!-- END col-6 -->
								<!-- BEGIN col-6 -->
								<div class="col-6">
									<!-- BEGIN widget -->
									<ul class="widget widget-list m-b-0 no-bg inverse-mode">
										<li>
											<!-- BEGIN widget-list-container -->
											<a href="#" class="widget-list-container">
												<div class="widget-list-media icon p-l-0">
													<i class="ti-pencil bg-gradient-orange"></i>
												</div>
												<div class="widget-list-content">
													<h4 class="widget-title">Manage API Key</h4>
													<div class="widget-desc hidden-xs">Library</div>
												</div>
											</a>
											<!-- END widget-list-container -->
										</li>
										<li>
											<!-- BEGIN widget-list-container -->
											<a href="#" class="widget-list-container">
												<div class="widget-list-media icon p-l-0">
													<i class="ti-comments bg-gradient-red"></i>
												</div>
												<div class="widget-list-content">
													<h4 class="widget-title">Manage Inbox</h4>
													<div class="widget-desc hidden-xs">Email</div>
												</div>
											</a>
											<!-- END widget-list-container -->
										</li>
										<li>
											<!-- BEGIN widget-list-container -->
											<a href="#" class="widget-list-container">
												<div class="widget-list-media icon p-l-0">
													<i class="ti-settings bg-gradient-silver"></i>
												</div>
												<div class="widget-list-content">
													<h4 class="widget-title">Settings</h4>
													<div class="widget-desc hidden-xs">System</div>
												</div>
											</a>
											<!-- END widget-list-container -->
										</li>
									</ul>
									<!-- END widget -->
								</div>
								<!-- END col-6 -->
							</div>
							<!-- END row -->
						</div>
						<!-- END widget-card-content -->
					</div>
					<!-- END widget -->
				</div>
				<!-- END col-6 -->
				<!-- BEGIN col-3 -->
				<div class="col-lg-3 col-sm-6">
					<!-- BEGIN widget -->
					<div class="widget widget-card inverse-mode with-min-height">
						<!-- BEGIN widget-card-cover -->
						<div class="widget-card-cover">
							<div class="cover-bg with-gradient"></div>
							<img src="../assets/img/dashboard-cover-1.jpg" alt="" />
						</div>
						<!-- END widget-card-cover -->
						<!-- BEGIN widget-card-content -->
						<div class="widget-card-content">
							<div class="dropdown dropdown-icon pull-right">
								<a href="#" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#">View</a></li>
									<li><a href="#">Analytics</a></li>
									<li><a href="#">Report</a></li>
								</ul>
							</div>
							<h4 class="widget-title"><b>POPULAR VIDEOS</b></h4>
						</div>
						<!-- END widget-card-content -->
						<!-- BEGIN widget-card-content -->
						<div class="widget-card-content bottom">
							<div class="widget-card-icon bg-gradient-blue"><i class="ti-control-play"></i></div>
							<div class="widget-card-info">
								<h4 class="widget-title"><a href="#">In the Heart of the Sea</a></h4>
								<ul class="widget-inline-list">
									<li>1.2m views</li>
									<li>2h 2m</li>
								</ul>
							</div>
						</div>
						<!-- END widget-card-content -->
					</div>
					<!-- END widget -->
					<!-- BEGIN widget -->
					<div class="widget widget-card inverse-mode with-min-height">
						<!-- BEGIN widget-card-cover -->
						<div class="widget-card-cover">
							<div class="cover-bg with-gradient"></div>
							<img src="../assets/img/dashboard-cover-2.jpg" alt="" />
						</div>
						<!-- END widget-card-cover -->
						<!-- BEGIN widget-card-content -->
						<div class="widget-card-content">
							<div class="dropdown dropdown-icon pull-right">
								<a href="#" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#">View</a></li>
									<li><a href="#">Analytics</a></li>
									<li><a href="#">Report</a></li>
								</ul>
							</div>
							<h4 class="widget-title">WEEKLY TRENDING MUSIC</h4>
						</div>
						<!-- END widget-card-content -->
						<!-- BEGIN widget-card-content -->
						<div class="widget-card-content bottom">
							<div class="widget-card-img bg-gradient-orange">
								<img src="../assets/img/dashboard-album-1.jpg" alt="" />
							</div>
							<div class="widget-card-info">
								<h4 class="widget-title"><a href="#">Katy Perry - Firework</a></h4>
								<ul class="widget-inline-list">
									<li>951.9m views</li>
									<li>3m 53s</li>
								</ul>
							</div>
						</div>
						<!-- END widget-card-content -->
					</div>
					<!-- END widget -->
				</div>
				<!-- END col-3 -->
				<!-- BEGIN col-3 -->
				<div class="col-lg-3 col-sm-6">
					<!-- BEGIN widget -->
					<div class="widget widget-card inverse-mode with-min-height">
						<!-- BEGIN widget-card-cover -->
						<div class="widget-card-cover">
							<div class="cover-bg with-gradient"></div>
							<img src="../assets/img/dashboard-cover-3.jpg" alt="" />
						</div>
						<!-- END widget-card-cover -->
						<!-- BEGIN widget-card-content -->
						<div class="widget-card-content">
							<div class="dropdown dropdown-icon pull-right">
								<a href="#" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#">View</a></li>
									<li><a href="#">Analytics</a></li>
									<li><a href="#">Report</a></li>
								</ul>
							</div>
							<h4 class="widget-title">TOP SALES PRODUCT</h4>
						</div>
						<!-- END widget-card-content -->
						<!-- BEGIN widget-card-content -->
						<div class="widget-card-content bottom">
							<div class="widget-card-img bg-gradient-purple">
								<img src="../assets/img/dashboard-product-1.jpg" alt="" />
							</div>
							<div class="widget-card-info">
								<h4 class="widget-title"><a href="#">DJI Mavic Pro</a></h4>
								<ul class="widget-inline-list">
									<li>129 orders</li>
									<li>$1,382 earned</li>
								</ul>
							</div>
						</div>
						<!-- END widget-card-content -->
					</div>
					<!-- END widget -->
					<!-- BEGIN widget -->
					<div class="widget widget-card inverse-mode with-min-height">
						<!-- BEGIN widget-card-cover -->
						<div class="widget-card-cover">
							<div class="cover-bg with-gradient"></div>
							<img src="../assets/img/dashboard-cover-4.jpg" alt="" />
						</div>
						<!-- END widget-card-cover -->
						<!-- BEGIN widget-card-content -->
						<div class="widget-card-content">
							<div class="dropdown dropdown-icon pull-right">
								<a href="#" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#">View</a></li>
									<li><a href="#">Analytics</a></li>
									<li><a href="#">Report</a></li>
								</ul>
							</div>
							<h4 class="widget-title"><b>TRENDING POST</b></h4>
						</div>
						<!-- END widget-card-content -->
						<!-- BEGIN widget-card-content -->
						<div class="widget-card-content bottom">
							<div class="widget-card-icon bg-gradient-purple"><i class="ti-pencil"></i></div>
							<div class="widget-card-info">
								<h4 class="widget-title text-ellipsis"><a href="#">10 iPhone Photography Tips To Quickly Improve Your Photos</a></h4>
								<ul class="widget-inline-list">
									<li>3.9m views</li>
									<li>2 May 2017</li>
								</ul>
							</div>
						</div>
						<!-- END widget-card-content -->
					</div>
					<!-- END widget -->
				</div>
				<!-- END col-3 -->
			</div>
			<!-- END row -->
			
			<!-- BEGIN row -->
			<div class="row">
				<!-- BEGIN col-3 -->
				<div class="col-lg-3 col-sm-6">
					<!-- BEGIN section-title -->
					<div class="section-title m-t-10">TOP AUTHORS</div>
					<!-- END section-title -->
					<!-- BEGIN widget -->
					<div class="widget widget-card dynamic inverse-mode text-center m-b-0">
						<div class="widget-card-cover">
							<div class="cover-bg with-gradient"></div>
							<img class="img-portrait" src="../assets/img/dashboard-cover-5.jpg" alt="" />
						</div>
						<div class="widget-card-content inverse-mode">
							<div class="m-b-10 m-t-10"><img src="../assets/img/user-5.jpg" width="72" class="img-circle" alt="" /></div>
							<h4 class="widget-title f-s-14">Maurice Patterson</h4>
							<div class="widget-desc">Never give up</div>
						</div>
						<div class="widget-card-content p-10 p-t-0">
							<div class="widget-divider m-t-0"></div>
							<div class="row m-b-2">
								<div class="col-4"><div class="widget-title">415</div><div class="widget-desc">posts</div></div>
								<div class="col-4"><div class="widget-title">140k</div><div class="widget-desc">followers</div></div>
								<div class="col-4"><div class="widget-title">697</div><div class="widget-desc">following</div></div>
							</div>
						</div>
					</div>
					<!-- END widget -->
					<!-- BEGIN widget -->
					<ul class="widget widget-list inverse-mode">
						<li>
							<a href="#" class="widget-list-container">
								<div class="widget-list-media square">
									<div class="img-container">
										<img src="../assets/img/dashboard-product-9.jpg" alt="" class="img-portrait" />
									</div>
								</div>
								<div class="widget-list-content">
									<h4 class="widget-title text-ellipsis">DJI Mavic Pro Review</h4>
									<div class="widget-desc">921k view</div>
								</div>
								<div class="widget-list-action">
									<div class="text-muted"><i class="ti-angle-right"></i></div>
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="widget-list-container">
								<div class="widget-list-media square">
									<div class="img-container">
										<img src="../assets/img/dashboard-product-8.jpg" alt="" class="img-portrait" />
									</div>
								</div>
								<div class="widget-list-content">
									<h4 class="widget-title text-ellipsis">Phantom 4 Pro Technology</h4>
									<div class="widget-desc">723k view</div>
								</div>
								<div class="widget-list-action">
									<div class="text-muted"><i class="ti-angle-right"></i></div>
								</div>
							</a>
						</li>
					</ul>
					<!-- END widget -->
				</div>
				<!-- END col-3 -->
				<!-- BEGIN col-3 -->
				<div class="col-lg-3 col-sm-6">
					<!-- BEGIN section-title -->
					<div class="section-title m-t-10">POPULAR PRODUCTS</div>
					<!-- END section-title -->
					<!-- BEGIN widget -->
					<ul class="widget widget-list inverse-mode">
						<li>
							<a href="#" class="widget-list-container">
								<div class="widget-list-media">
									<img src="../assets/img/dashboard-product-8.jpg" alt="" />
								</div>
								<div class="widget-list-content">
									<div class="widget-desc">DJI</div>
									<h4 class="widget-title text-ellipsis">Inspire 2 <br />Combo Price</h4>
									<ul class="widget-rating-star">
										<li class="active"><i class="ti-star"></i></li>
										<li class="active"><i class="ti-star"></i></li>
										<li class="active"><i class="ti-star"></i></li>
										<li class="active"><i class="ti-star"></i></li>
										<li><i class="ti-star"></i></li>
										<li class="text">(128)</li>
									</ul>
								</div>
								<div class="widget-list-action">
									<div class="widget-price">$999.00</div>
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="widget-list-container">
								<div class="widget-list-media">
									<img src="../assets/img/dashboard-product-10.jpg" alt="" />
								</div>
								<div class="widget-list-content">
									<div class="widget-desc">SONY</div>
									<h4 class="widget-title text-ellipsis">PlayStation 4 <br />VR Headset</h4>
									<ul class="widget-rating-star">
										<li class="active"><i class="ti-star"></i></li>
										<li class="active"><i class="ti-star"></i></li>
										<li class="active"><i class="ti-star"></i></li>
										<li class="active"><i class="ti-star"></i></li>
										<li><i class="ti-star"></i></li>
										<li class="text">(93)</li>
									</ul>
								</div>
								<div class="widget-list-action">
									<div class="widget-price">$599.00</div>
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="widget-list-container">
								<div class="widget-list-media">
									<img src="../assets/img/dashboard-product-11.jpg" alt="" />
								</div>
								<div class="widget-list-content">
									<div class="widget-desc">LUMIX</div>
									<h4 class="widget-title text-ellipsis">Camera Lens<br /> 0.2mm</h4>
									<ul class="widget-rating-star">
										<li class="active"><i class="ti-star"></i></li>
										<li class="active"><i class="ti-star"></i></li>
										<li class="active"><i class="ti-star"></i></li>
										<li class="active"><i class="ti-star"></i></li>
										<li><i class="ti-star"></i></li>
										<li class="text">(41)</li>
									</ul>
								</div>
								<div class="widget-list-action">
									<div class="widget-price">$399.00</div>
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="widget-list-container">
								<div class="widget-list-media">
									<img src="../assets/img/dashboard-product-12.jpg" alt="" />
								</div>
								<div class="widget-list-content">
									<div class="widget-desc">DJI</div>
									<h4 class="widget-title text-ellipsis">Phantom 4 <br />Controller</h4>
									<ul class="widget-rating-star">
										<li class="active"><i class="ti-star"></i></li>
										<li class="active"><i class="ti-star"></i></li>
										<li class="active"><i class="ti-star"></i></li>
										<li class="active"><i class="ti-star"></i></li>
										<li><i class="ti-star"></i></li>
										<li class="text">(41)</li>
									</ul>
								</div>
								<div class="widget-list-action">
									<div class="widget-price">$199.00</div>
								</div>
							</a>
						</li>
					</ul>
					<!-- END widget -->
				</div>
				<!-- END col-3 -->
				<!-- BEGIN col-3 -->
				<div class="col-lg-3 col-sm-6">
					<!-- BEGIN section-title -->
					<div class="section-title m-t-10">SERVER SETTINGS</div>
					<!-- END section-title -->
					<!-- BEGIN widget -->
					<div class="widget inverse-mode m-b-0">
						<div class="widget-header">
							<h4 class="widget-title">Weekly Usage <small>11 May - 17 May</small></h4>
						</div>
						<div class="widget-body bg-white-transparent-2 p-t-20 p-b-10">
							<canvas id="barChart" height="128"></canvas>
						</div>
					</div>
					<!-- END widget -->
					<!-- BEGIN widget -->
					<ul class="widget widget-list inverse-mode">
						<li>
							<div class="widget-list-container">
								<div class="widget-list-media icon icon-sm">
									<i class="ti-server bg-white-transparent-5"></i>
								</div>
								<div class="widget-list-content">
									Auto Backup
								</div>
								<div class="widget-list-action">
									<div class="switcher switcher-success pull-left">
										<input type="checkbox" name="backup_checkbox" id="backup_checkbox" value="1">
										<label for="backup_checkbox"></label>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="widget-list-container">
								<div class="widget-list-media icon icon-sm">
									<i class="ti-shield bg-white-transparent-5"></i>
								</div>
								<div class="widget-list-content">
									Firewall
								</div>
								<div class="widget-list-action">
									<div class="switcher switcher-success pull-left">
										<input type="checkbox" name="firewall_checkbox" id="firewall_checkbox" checked="" value="1">
										<label for="firewall_checkbox"></label>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="widget-list-container">
								<div class="widget-list-media icon icon-sm">
									<i class="ti-email bg-white-transparent-5"></i>
								</div>
								<div class="widget-list-content">
									WebMail Service 
								</div>
								<div class="widget-list-action">
									<div class="switcher switcher-success pull-left">
										<input type="checkbox" name="webmail_checkbox" id="webmail_checkbox" checked="" value="1">
										<label for="webmail_checkbox"></label>
									</div>
								</div>
							</div>
						</li>
					</ul>
					<!-- END widget -->
				</div>
				<!-- END col-3 -->
				<!-- BEGIN col-3 -->
				<div class="col-lg-3 col-sm-6">
					<!-- BEGIN section-title -->
					<div class="section-title m-t-10">UPCOMING EVENTS</div>
					<!-- END section-title -->
					<!-- BEGIN widget -->
					<div class="widget widget-reminder inverse-mode">
						<div class="widget-reminder-header">TODAY, NOV 4</div>
						<div class="widget-reminder-container">
							<div class="widget-reminder-time">09:00<br>12:00</div>
							<div class="widget-reminder-divider bg-success"></div>
							<div class="widget-reminder-content">
								<h4 class="widget-title text-ellipsis">Meeting with HR</h4>
								<div class="widget-desc text-ellipsis"><i class="ti-pin"></i> Conference Room</div>
							</div>
						</div>
						<div class="widget-reminder-container">
							<div class="widget-reminder-time">20:00<br>23:00</div>
							<div class="widget-reminder-divider bg-primary"></div>
							<div class="widget-reminder-content">
								<h4 class="widget-title text-ellipsis">Dinner with Richard</h4>
								<div class="widget-desc text-ellipsis"><i class="ti-pin"></i> Tom's Too Restaurant</div>
								<div class="m-t-10 p-t-3 text-ellipsis">
									<a href="#" class="pull-right">Contact</a>
									<img src="../assets/img/user-3.jpg" width="16" class="img-circle pull-left m-r-5" alt="" /> Richard Leong 
								</div>
							</div>
						</div>
						<div class="widget-reminder-header">TOMORROW, NOV 5</div>
						<div class="widget-reminder-container">
							<div class="widget-reminder-time">All day</div>
							<div class="widget-reminder-divider bg-success"></div>
							<div class="widget-reminder-content">
								<h4 class="widget-title text-ellipsis"><i class="ti-gift text-success"></i> Terry Birthday</h4>
							</div>
						</div>
						<div class="widget-reminder-container">
							<div class="widget-reminder-time">08:00</div>
							<div class="widget-reminder-divider bg-warning"></div>
							<div class="widget-reminder-content">
								<h4 class="widget-title text-ellipsis"><i class="ti-gift text-warning"></i> Meeting</h4>
							</div>
						</div>
						<div class="widget-reminder-container">
							<div class="widget-reminder-time">00:00<br>00:30</div>
							<div class="widget-reminder-divider bg-danger"></div>
							<div class="widget-reminder-content">
								<h4 class="widget-title text-ellipsis">Server Maintenance</h4>
								<div class="widget-desc"><i class="ti-pin"></i> Data Centre</div>
							</div>
						</div>
					</div>
					<!-- END widget -->
				</div>
				<!-- END col-3 -->
			</div>
			<!-- END row -->
			
			<!-- BEGIN row -->
			<div class="row">
				<!-- BEGIN col-3 -->
				<div class="col-lg-3 col-sm-6">
					<!-- BEGIN section-title -->
					<div class="section-title">LATEST UPLOADED IMAGE</div>
					<!-- END section-title -->
					<!-- BEGIN widget -->
					<ul class="widget widget-img-list inverse-mode">
						<li class="widget-header">
							<a href="#" class="widget-header-title">
								<span class="pull-right text-muted">
									<i class="ti-angle-right"></i>
								</span> 
								Library (20)
								<br />
								<small class="text-muted">3,192 Image Found</small>
							</a>
						</li>
						<li><div class="widget-img-container"><a href="#"><img src="../assets/img/gallery/gallery-1.jpg" alt="" class="img-portrait" /></a></div></li>
						<li><div class="widget-img-container"><a href="#"><img src="../assets/img/gallery/gallery-2.jpg" alt="" class="img-portrait" /></a></div></li>
						<li><div class="widget-img-container"><a href="#"><img src="../assets/img/gallery/gallery-3.jpg" alt="" class="img-portrait" /></a></div></li>
						<li><div class="widget-img-container"><a href="#"><img src="../assets/img/gallery/gallery-4.jpg" alt="" class="img-portrait" /></a></div></li>
						<li><div class="widget-img-container"><a href="#"><img src="../assets/img/gallery/gallery-5.jpg" alt="" class="img-portrait" /></a></div></li>
						<li><div class="widget-img-container"><a href="#"><img src="../assets/img/gallery/gallery-21.jpg" alt="" class="img-portrait" /></a></div></li>
						<li><div class="widget-img-container"><a href="#"><img src="../assets/img/gallery/gallery-22.jpg" alt="" class="img-portrait" /></a></div></li>
						<li><div class="widget-img-container"><a href="#"><img src="../assets/img/gallery/gallery-23.jpg" alt="" class="img-portrait" /></a></div></li>
						<li><div class="widget-img-container"><a href="#"><img src="../assets/img/gallery/gallery-24.jpg" alt="" class="img-portrait" /></a></div></li>
						<li><div class="widget-img-container"><a href="#"><img src="../assets/img/gallery/gallery-25.jpg" alt="" /></a></div></li>
						<li><div class="widget-img-container"><a href="#"><img src="../assets/img/gallery/gallery-26.jpg" alt="" class="img-portrait" /></a></div></li>
						<li><div class="widget-img-container"><a href="#"><img src="../assets/img/gallery/gallery-27.jpg" alt="" class="img-portrait" /></a></div></li>
						<li><div class="widget-img-container"><a href="#"><img src="../assets/img/gallery/gallery-28.jpg" alt="" class="img-portrait" /></a></div></li>
						<li><div class="widget-img-container"><a href="#"><img src="../assets/img/gallery/gallery-29.jpg" alt="" /></a></div></li>
						<li><div class="widget-img-container"><a href="#"><img src="../assets/img/gallery/gallery-30.jpg" alt="" /></a></div></li>
						<li><div class="widget-img-container"><a href="#"><img src="../assets/img/gallery/gallery-31.jpg" alt="" /></a></div></li>
						<li><div class="widget-img-container"><a href="#"><img src="../assets/img/gallery/gallery-32.jpg" alt="" class="img-portrait" /></a></div></li>
						<li><div class="widget-img-container"><a href="#"><img src="../assets/img/gallery/gallery-33.jpg" alt="" class="img-portrait" /></a></div></li>
						<li><div class="widget-img-container"><a href="#"><img src="../assets/img/gallery/gallery-34.jpg" alt="" class="img-portrait" /></a></div></li>
						<li><div class="widget-img-container"><a href="#"><img src="../assets/img/gallery/gallery-35.jpg" alt=""></a></div></li>
						<li><div class="widget-img-container"><a href="#"><img src="../assets/img/gallery/gallery-36.jpg" alt=""></a></div></li>
						<li><div class="widget-img-container"><a href="#"><img src="../assets/img/gallery/gallery-37.jpg" alt="" class="img-portrait" /></a></div></li>
						<li><div class="widget-img-container"><a href="#"><img src="../assets/img/gallery/gallery-38.jpg" alt="" class="img-portrait" /></a></div></li>
						<li><div class="widget-img-container"><a href="#"><img src="../assets/img/gallery/gallery-39.jpg" alt="" class="img-portrait" /></a></div></li>
						<li><div class="widget-img-container"><a href="#"><img src="../assets/img/gallery/gallery-40.jpg" alt="" class="img-portrait" /></a></div></li>
					</ul>
					<!-- END widget -->
				</div>
				<!-- END col-3 -->
				<!-- BEGIN col-3 -->
				<div class="col-lg-3 col-sm-6">
					<!-- BEGIN section-title -->
					<div class="section-title">APP MANAGEMENT</div>
					<!-- END section-title -->
					<!-- BEGIN widget -->
					<div class="widget inverse-mode p-10 p-b-0">
						<!-- BEGIN row -->
						<div class="row">
							<!-- BEGIN col-6 -->
							<div class="col-6">
								<!-- BEGIN widget -->
								<a href="#" class="widget widget-media square icon bg-gradient-blue m-b-3">
									<div class="widget-media-container">
										<i class="ti-music"></i>
									</div>
								</a>
								<h4 class="widget-title line-height-1"><a href="#">The Chainsmokers</a></h4>
								<div class="widget-desc line-height-1 m-b-5 p-b-5"><a href="#">Youtube</a></div>
								<!-- END widget -->
								<!-- BEGIN widget -->
								<a href="#" class="widget widget-media square img m-b-3">
									<div class="widget-media-container">
										<div class="widget-media-icon bg-gradient-red">
											<i class="ti-control-play"></i>
										</div>
										<img src="../assets/img/dashboard-album-2.jpg" alt="" />
									</div>
								</a>
								<h4 class="widget-title line-height-1"><a href="#">Movie Player</a></h4>
								<div class="widget-desc line-height-1 m-b-5 p-b-5"><a href="#">Apps Store</a></div>
								<!-- END widget -->
							</div>
							<!-- END col-6 -->
							<!-- BEGIN col-6 -->
							<div class="col-6">
								<!-- BEGIN widget -->
								<a href="#" class="widget widget-media square img m-b-3">
									<div class="widget-media-container">
										<div class="widget-media-icon bg-gradient-orange">
											<i class="ti-camera"></i>
										</div>
										<img src="../assets/img/dashboard-album-3.jpg" alt="" />
									</div>
								</a>
								<h4 class="widget-title line-height-1"><a href="#">Shooting Apps</a></h4>
								<div class="widget-desc line-height-1 m-b-5 p-b-4"><a href="#">PlayStore</a></div>
								<!-- END widget -->
								<!-- BEGIN widget -->
								<a href="#" class="widget widget-media square icon bg-gradient-purple m-b-3">
									<div class="widget-media-container">
										<i class="ti-headphone"></i>
									</div>
								</a>
								<h4 class="widget-title line-height-1"><a href="#">Music Player</a></h4>
								<div class="widget-desc line-height-1 m-b-5 p-b-4"><a href="#">Apple</a></div>
								<!-- END widget -->
							</div>
							<!-- END col-6 -->
						</div>
						<!-- END row -->
					</div>
					<!-- END widget -->
				</div>
				<!-- END col-3 -->
				<!-- BEGIN col-3 -->
				<div class="col-lg-3 col-sm-6">
					<!-- BEGIN section-title -->
					<div class="section-title">NEW UPLOADED PRODUCT</div>
					<!-- END section-title -->
					<!-- BEGIN widget -->
					<div class="widget widget-product inverse-mode text-center">
						<div class="widget-lead">INSPIRE 2</div>
						<div class="m-b-10">Image quality, power and intelligence to meet the needs of professional filmmakers and enterprises around the globe.</div>
						<div class="m-b-5">
							<a href="#">See all new product</a>
						</div>
						<div class="widget-img m-b-2">
							<a href="#"><img src="../assets/img/dashboard-product-2.jpg" alt="" /></a>
						</div>
						<div class="row row-space-6">
							<div class="col-3">
								<img class="img-responsive" src="../assets/img/dashboard-product-3.jpg" alt="" />
							</div>
							<div class="col-3">
								<img class="img-responsive" src="../assets/img/dashboard-product-4.jpg" alt="" />
							</div>
							<div class="col-3">
								<img class="img-responsive" src="../assets/img/dashboard-product-5.jpg" alt="" />
							</div>
							<div class="col-3">
								<img class="img-responsive" src="../assets/img/dashboard-product-6.jpg" alt="" />
							</div>
						</div>
					</div>
					<!-- END widget -->
				</div>
				<!-- END col-3 -->
				<!-- BEGIN col-3 -->
				<div class="col-lg-3 col-sm-6">
					<!-- BEGIN section-title -->
					<div class="section-title">GROUP DISCUSSION</div>
					<!-- END section-title -->
					<!-- BEGIN widget -->
					<div class="widget inverse-mode">
						<!-- BEGIN widget-header -->
						<div class="widget-header">
							<h4 class="widget-header-title text-center">App Development</h4>
						</div>
						<!-- END widget-header -->
						<!-- BEGIN widget-body -->
						<div data-scrollbar="true" data-height="253px" class="bg-white-transparent-1">
							<div class="widget-body">
								<!-- BEGIN widget-chat -->
								<ul class="widget-chat">
									<li>
										<div class="widget-chat-media"><img src="../assets/img/user-2.jpg" alt="" /></div>
										<div class="widget-chat-content">
											<div class="widget-chat-name">Roberto Lambert</div>
											<div class="widget-chat-message last">
												Hey, I'm testing out group messaging.
											</div>
										</div>
									</li>
									<li class="reply">
										<div class="widget-chat-content">
											<div class="widget-chat-message last">
												Cool
											</div>
											<div class="widget-chat-status"><b>Read</b> 16:26</div>
										</div>
									</li>
									<li class="widget-chat-date">Today 14:21</li>
									<li>
										<div class="widget-chat-media"><img src="../assets/img/user-3.jpg" alt="" /></div>
										<div class="widget-chat-content">
											<div class="widget-chat-name">Rick Powell</div>
											<div class="widget-chat-message last">
												Awesome! What's new?
											</div>
										</div>
									</li>
									<li>
										<div class="widget-chat-media"><img src="../assets/img/user-2.jpg" alt="" /></div>
										<div class="widget-chat-content">
											<div class="widget-chat-name">Roberto Lambert</div>
											<div class="widget-chat-message">
												Not much, It's got a new look, contact pics show up in group messaging, some other small stuff.
											</div>
											<div class="widget-chat-message last">
												How's crusty old iOS 6 treating you?
											</div>
										</div>
									</li>
									<li class="reply">
										<div class="widget-chat-content">
											<div class="widget-chat-message last">
												Sucks
											</div>
											<div class="widget-chat-status"><b>Read</b> 16:30</div>
										</div>
									</li>
								</ul>
								<!-- END widget-chat -->
							</div>
						</div>
						<!-- END widget-body -->
						<!-- BEGIN widget-footer -->
						<div class="widget-footer">
							<div class="input-group input-group-sm">
							  	<input type="text" class="form-control" placeholder="Search for...">
								<span class="input-group-btn">
									<button class="btn btn-grey" type="button">Send <i class="ti-arrow-right"></i></button>
							  	</span>
							</div>
						</div>
						<!-- END widget-footer -->
					</div>
					<!-- END widget -->
				</div>
				<!-- END col-3 -->
			</div>
			<!-- END row -->
		</div>
		<!-- END #content -->
		
		<!-- BEGIN btn-scroll-top -->
		<a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="ti-arrow-up"></i></a>
		<!-- END btn-scroll-top -->
	</div>
	<!-- END #page-container -->
	
	<!-- BEGIN theme-panel -->
	<div class="theme-panel">
        <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="ti-settings"></i></a>
		<div class="theme-panel-content">
			<div class="form-group">
				<label class="control-label">Color Theme</label>
				<ul class="theme-list clearfix">
					<li class="active"><a href="javascript:;" class="bg-gradient-blue-purple" data-theme="default" data-theme-file="../assets/css/theme/default.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default"></a></li>
					<li><a href="javascript:;" class="bg-gradient-red" data-theme="red" data-theme-file="../assets/css/theme/red.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red"></a></li>
					<li><a href="javascript:;" class="bg-gradient-orange" data-theme="orange" data-theme-file="../assets/css/theme/orange.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange"></a></li>
					<li><a href="javascript:;" class="bg-gradient-yellow" data-theme="yellow" data-theme-file="../assets/css/theme/yellow.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Yellow"></a></li>
					<li><a href="javascript:;" class="bg-gradient-green" data-theme="green" data-theme-file="../assets/css/theme/green.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Green"></a></li>
					<li><a href="javascript:;" class="bg-gradient-aqua" data-theme="aqua" data-theme-file="../assets/css/theme/aqua.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Aqua"></a></li>
					<li><a href="javascript:;" class="bg-gradient-blue" data-theme="blue" data-theme-file="../assets/css/theme/blue.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue"></a></li>
					<li><a href="javascript:;" class="bg-gradient-purple" data-theme="purple" data-theme-file="../assets/css/theme/purple.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple"></a></li>
					<li><a href="javascript:;" class="bg-gradient-black" data-theme="black" data-theme-file="../assets/css/theme/black.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black"></a></li>
				</ul>
			</div>
			<ul class="widget widget-list">
				<li>
					<div class="widget-list-container">
						<div class="widget-list-content">
							Fixed Sidebar
						</div>
						<div class="widget-list-action">
							<div class="switcher switcher-success pull-left">
								<input type="checkbox" name="sidebar_fixed" id="sidebar_fixed" value="1" checked />
								<label for="sidebar_fixed"></label>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="widget-list-container">
						<div class="widget-list-content">
							Light Sidebar
						</div>
						<div class="widget-list-action">
							<div class="switcher switcher-success pull-left">
								<input type="checkbox" name="sidebar_light" id="sidebar_light" value="1" />
								<label for="sidebar_light"></label>
							</div>
						</div>
					</div>
				</li>
				<li>
					<a href="#" class="widget-list-container">
						<div class="widget-list-content">
							Fixed Header
						</div>
						<div class="widget-list-action">
							<div class="switcher switcher-success pull-left">
								<input type="checkbox" name="header_fixed" id="header_fixed" value="1" checked />
								<label for="header_fixed"></label>
							</div>
						</div>
					</a>
				</li>
				<li>
					<div class="widget-list-container">
						<div class="widget-list-content">
							Dark Header
						</div>
						<div class="widget-list-action">
							<div class="switcher switcher-success pull-left">
								<input type="checkbox" name="header_dark" id="header_dark" value="1" />
								<label for="header_dark"></label>
							</div>
						</div>
					</div>
				</li>
			</ul>
			<div class="row m-t-10">
				<div class="col-md-12">
					<a href="javascript:;" class="btn btn-inverse btn-block btn-rounded btn-sm" data-click="reset-theme-setting"><b>Reset Setting</b></a>
				</div>
			</div>
		</div>
	</div>
	<!-- END theme-panel -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="../assets/plugins/cookie/js/js.cookie.js"></script>
	<script src="../assets/plugins/tooltip/popper/popper.min.js"></script>
	<script src="../assets/plugins/bootstrap/bootstrap4/js/bootstrap.min.js"></script>
	<script src="../assets/plugins/scrollbar/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="../assets/plugins/chart/chart-js/Chart.min.js"></script>
	<script src="../assets/js/page/dashboard.demo.min.js"></script>
	<script src="../assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			Dashboard.init();
		});
	</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53034621-1', 'auto');
  ga('send', 'pageview');

</script>
</body>

<!-- Mirrored from seantheme.com/infinite-admin/admin/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 May 2020 07:36:32 GMT -->
</html>
