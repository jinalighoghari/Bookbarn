<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/infinite-admin/admin/html/form_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 May 2020 07:37:55 GMT -->
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
	<script src="<?php echo base_url('resources/admin/')?>assets/plugins/loader/pace/pace.min.js"></script>
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
			<?php include_once("aheader.php");?>
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
				<?php include_once("navigation.php");?>
				<!-- END nav -->
			</div>
			<!-- END scrollbar -->
			<!-- BEGIN sidebar-minify-btn -->
			<a href="#" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="ti-arrow-left"></i></a>
			<!-- END sidebar-minify-btn -->
		</div>
		<!-- END #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- BEGIN breadcrumb -->
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="#"><h2>Update Tag</h2></a></li>

			</ul> 

			<!-- END breadcrumb -->
			<!-- BEGIN row -->
			<div class="row">
				<!-- BEGIN col-4 -->
			    <div class="col-md-6 offset-3">
			        <!-- BEGIN panel -->
			    	<div class="panel panel-default">
			    		<!-- BEGIN panel-heading -->
			    		<div class="panel-heading">
			    			<h4 class="panel-title">Edit Tag</h4>
			    		</div>
			        	<!-- END panel-heading -->
			        	<!-- BEGIN panel-body -->
			    		<div class="panel-body">
			    			<form method="post" action="<?php echo site_url("admin/Category/edittag/$taginfo->tagid/$taginfo->subcatid")?>">
								<div class="form-group">
									<label class="control-label">Tagname <span class="text-danger"></span></label>
									<input type="text" class="form-control" required="" name="txttagname" value="<?php echo $taginfo->tagname?>"/>
								</div>
								
								<div class="form-group">
								
									<button class="btn btn-primary">Update</button>
								</div>
							</form>
						</div>
			        	<!-- END panel-body -->
					</div>
				</div>
			</div>
			
			<!-- END row -->
		</div>
		<!-- end #content -->
		
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
	<script src="<?php echo base_url('resources/admin/')?>assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
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

<!-- Mirrored from seantheme.com/infinite-admin/admin/html/form_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 May 2020 07:37:55 GMT -->
</html>
