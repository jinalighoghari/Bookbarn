<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/infinite-admin/admin/html/analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 May 2020 07:37:22 GMT -->
<head>
	<meta charset="utf-8" />
	<title>BookBarns</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="<?php echo base_url('resources/admin/')?>assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('resources/admin/')?>assets/plugins/bootstrap/bootstrap4/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('resources/admin/')?>assets/plugins/icon/themify-icons/themify-icons.css" rel="stylesheet" />
	<link href="<?php echo base_url('resources/admin/')?>assets/css/animate.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('resources/admin/')?>assets/css/style.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('resources/admin/')?>assets/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<link href="<?php echo base_url('resources/admin/')?>assets/plugins/map/jquery-jvectormap/jquery-jvectormap.css" rel="stylesheet" />
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/loader/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
	<!-- BEGIN #page-container -->
	<div id="page-container" class="page-header-fixed page-sidebar-fixed fade">
		<!-- BEGIN #header -->
		<div id="header" class="header navbar navbar-default">
			<!-- BEGIN container-fluid -->
			<div class="container-fluid">
				<!-- BEGIN mobile sidebar expand / collapse button -->
				<?php include_once("aheader.php");?>
				<!-- END navbar-nav-list -->
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
				<?php include_once('navigation.php')?>
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
				Analytics <small>stats, overview & performance</small>
			</h1>
			<!-- END page-header -->
			
			<!-- BEGIN row -->
			<div class="row">
				<!-- BEGIN col-3 -->
                  <div class="col-md-6 col-12 mb--15"> 
					<!-- BEGIN widget -->
					<a href="<?php echo site_url('admin/Book')?>" class="widget widget-stats bg-gradient-blue-dark">
						<div class="widget-stats-info">
							<div class="widget-stats-title">Books</div>
							<div class="widget-stats-value">
								<?php echo $totalbooks?>
							</div>
<div><?php echo @date('d-m-Y')?>	</div>					</div>
						<div class="widget-stats-icon">
							<i class="ti-shopping-cart-full text-inverse"></i>
						</div>
					</a>
					<!-- END widget -->
				</div>
				<!-- END col-3 -->
				<!-- BEGIN col-3 -->
                  <div class="col-md-6 col-12 mb--15"> 
					<!-- BEGIN widget -->
					<a href="<?php echo site_url('admin/Category')?>" class="widget widget-stats bg-gradient-purple-dark">
						<div class="widget-stats-info">
							<div class="widget-stats-title">Categories</div>
							<div class="widget-stats-value">
							<?php echo $categories?>

							</div>
<div><?php echo @date('d-m-Y')?>	</div>						</div>
						<div class="widget-stats-icon text-inverse">
							<i class="ti-pie-chart"></i>
						</div>
					</a>
					<!-- END widget -->
				</div>
				<!-- END col-3 -->
				<!-- BEGIN col-3 -->
                  <div class="col-md-6 col-12 mb--15"> 
					<!-- BEGIN widget -->
					<a href="<?php echo site_url('admin/User')?>" class="widget widget-stats bg-gradient-pink">
						<div class="widget-stats-info">
							<div class="widget-stats-title">Users</div>
							<div class="widget-stats-value">
						<?php echo $totaluser?>

							</div>
                           <div><?php echo @date('d-m-Y')?>	</div>						
                            </div>
						<div class="widget-stats-icon text-inverse">
							<i class="ti-user"></i>
						</div>
					</a>
				</div>
				<div class="col-md-6 col-12 mb--15"> 
					<!-- BEGIN widget -->
					<a href="" class="widget widget-stats bg-gradient-orange-dark">
						<div class="widget-stats-info">
							<div class="widget-stats-title">Most Liked Books</div>
							<div class="widget-stats-value">
						heyz

							</div>
<div><?php echo @date('d-m-Y')?>	</div>						</div>
						<div class="widget-stats-icon text-inverse">
							<i class="ti-pie-chart"></i>
						</div>
					</a>
					<!-- END widget -->
				</div>
				<div class="col-md-12 ">
				<div  class="" id="profile-photos">
								 <div class="m-b-10" style="text-align: center;"><b><h1>Popular Books</h1></b>
								<ul class="img-grid-list">
									<?php 
									foreach ($mlikedbooks as $ml) 
									{
										?>
										<li><a href="<?php echo site_url('admin/BMoreInfo/index/'.$ml->bookid)?>"></a>
											 <?php
                      $i=$ml->image;
                      $im=explode(" ", $i);
                      // print_r($im);
                      // die();
                    ?>
									<a href="#"><img src="<?php echo base_url("resources/shared/images/".$ml->image)?>" alt="" class="" height="150px" width="150px"/><?php echo $im[0]?></a></li>
									
									<?php
									}
									?>
									
								</ul>
							<!-- </div> -->
						</div> 
				<!-- END col-3 -->
				<!-- BEGIN col-3 -->
                  <!--  -->
				<!-- END col-3 -->
			</div>
		 </div>
			<!-- END row -->
		</div>
		<!-- END #content -->
		
		<!-- BEGIN btn-scroll-top -->
		<a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="ti-arrow-up"></i></a>
		<!-- END btn-scroll-top -->
	</div>
	<!-- END #page-container -->
	

	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/cookie/js/js.cookie.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/tooltip/popper/popper.min.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/bootstrap/bootstrap4/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/scrollbar/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/chart/chart-js/Chart.min.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/map/jquery-jvectormap/jquery-jvectormap.min.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/map/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/js/page/analytics.demo.min.js"></script>
	<script src="<?php echo base_url('resources/admin/')?>assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			Analytics.init();
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

<!-- Mirrored from seantheme.com/infinite-admin/admin/html/analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 May 2020 07:37:26 GMT -->
</html>
