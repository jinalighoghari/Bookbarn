<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/infinite-admin/admin/html/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 May 2020 07:41:16 GMT -->
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
				<?php include_once("navigation.php")?>
			</div>
			<!-- END scrollbar -->
			<!-- BEGIN sidebar-minify-btn -->
			<a href="#" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="ti-arrow-left"></i></a>
			<!-- END sidebar-minify-btn -->
		</div>
		<!-- END #sidebar -->
		
		<!-- BEGIN #content -->
		<div id="content" class="content p-0">
			<!-- BEGIN profile-header -->
			<div class="profile-header">
				<!-- BEGIN profile-header-cover -->
				<div class="profile-header-cover"></div>
				<!-- END profile-header-cover -->
				<!-- BEGIN profile-header-content -->
				<div class="profile-header-content">
														<?php 
                          foreach ($books as $b) {
                          	?>
                          	 <?php
                      $i=$b->image;
                      $im=explode(" ", $i);
                      ?>
					<!-- BEGIN profile-header-img -->
					<div class="profile-header-img">
						<img src="<?php echo base_url("resources/shared/images/$im[0]")?>" alt="" height="100%" width="100%"/>
					</div>
					<!-- END profile-header-img -->
					<!-- BEGIN profile-header-info -->
					<div class="profile-header-info">
						<h4 class="m-t-sm"><?php echo $b->bookname?></h4>
						<p class="m-b-sm"><?php echo $b->catname?></p>

					</div>
					<?php 
				}
				?>
					<!-- END profile-header-info -->
				</div>
				<!-- END profile-header-content -->
				<!-- BEGIN profile-header-tab -->
				<ul class="profile-header-tab nav nav-tabs">
					<li class="nav-item"><a href="#profile-post" class="nav-link active" data-toggle="tab">POSTS</a></li>
					<li class="nav-item"><a href="#profile-about" class="nav-link" data-toggle="tab">ABOUT</a></li>
					<!-- <li class="nav-item"><a href="#profile-photos" class="nav-link" data-toggle="tab">PHOTOS</a></li>
					<li class="nav-item"><a href="#profile-videos" class="nav-link" data-toggle="tab">VIDEOS</a></li>
					<li class="nav-item"><a href="#profile-friends" class="nav-link" data-toggle="tab">FRIENDS</a></li> -->
				</ul>
				<!-- END profile-header-tab -->
			</div>
			<!-- END profile-header -->
			<!-- BEGIN profile-container -->
			<div class="profile-container">
				<!-- BEGIN row -->
				<div class="row row-space-20">
					<!-- BEGIN col-8 -->
					<div class="col-md-8">
						<!-- BEGIN tab-content -->
						<div class="tab-content p-0">
							<!--xmcnjsfbnmsdbahgdvnmsfcb mndv-->							

							<div class="tab-pane fade in active" id="profile-post">
								<div class="post">
									<?php
									foreach ($books as $b) {
									?>

									<div class="post-header">
										<div class="post-header-img">
											<img src="../assets/img/user.jpg" alt="" />
										</div>
										<div class="post-header-info">
											<h4><a href="<?php echo site_url("admin/User/usermoreinfo/".$b->userid)?>"><?php echo $b->username?></a> has uploaded<a href=""><?php echo " ".$b->bookname?></a></h4>
											<span class="time"><?php echo "Author:"." ".$b->authorname?></span>
										</div>
									</div>
									<div class="post-content">
										<!-- <p class="post-desc"></p> -->
										<ul class="img-list">
											 <?php
                      $i=$b->image;
                      $im=explode(" ", $i);
                      
                    ?>
											<li class=""><a href=""><img src="<?php echo base_url("resources/shared/images/".$im[0])?>" alt="" height="100%"/></a></li>
											<li class=""><a href=""><img src="<?php echo base_url("resources/shared/images/".$im[1])?>" height="100%" alt="" /></a></li>
											<li class=""><a href=""><img src="<?php echo base_url("resources/shared/images/".$im[2])?>" height="100%" alt="" /></a></li>
										
										</ul>
									</div>
									<?php	
									}
									?>
								</div>
								
							</div>

						<!-- BEGIN tab-pane -->
							<div class="tab-pane fade" id="profile-about">
								<table class="table table-profile">
									<thead>
							
										<tr>
											<th colspan="2"><h3><b>Description</b></h3></th>
										</tr>
									</thead>

							<tbody>
							<?php 
                          	foreach ($books as $b) {
                          	?>
							
							<tr>
								<td class="field"></td>
								<td class="value"><?php echo $b->description?></td>
							</tr>

							<?php
							}
							
							?>
							
							</tbody>
							</table>
								
								<table class="table table-profile">
									<thead>
										<tr>
											<th colspan="2"><b>SELLER INFORMATION</b></th>
										</tr>
									</thead>
									<tbody>
										<?php 
                          foreach ($books as $b) {
                          	?>
										<tr>
										<td class="field">Name</td>
												<td class="value"><a href="<?php echo site_url("admin/User/usermoreinfo/".$b->userid)?>">
												<?php echo $b->username?>
                                          </a>
											</td>
									
										</tr>
										<tr>
											<td class="field">EmailID</td>
											<td class="value">
													<?php echo $b->useremailid?>

											</td>
										</tr>
										<tr>
											<td class="field">ContactNo</td>
											<td class="value">
	                                   <?php echo $b->contactno?>
											</td>
										</tr>
										
										<?php
									}
										?>
									</tbody>
								</table>
								<table class="table table-profile">
									<thead>
										<tr>
											<th colspan="2"><b>Comments</b></th>
										</tr>
									</thead>
									<tbody>
										<?php 
                          foreach ($comments as $c) {
                          	?>
										<tr>
											<td class="field"><?php echo $c->username?></td>
											<td class="value">
												<?php echo $c->feedback?>

											</td>
										</tr>

										
										<?php
									}
										?>
									</tbody>
								</table>
			
							</div>
							<!-- END tab-pane -->
						
							
						</div>
						<!-- END tab-content -->
					</div>
					<!-- END col-8 -->
					<!-- BEGIN col-4 -->
					<div class="col-md-4 hidden-xs hidden-sm">
						<?php 
                          foreach ($books as $b) {
                          	?>
                          
						<!-- BEGIN profile-info-list -->
						<ul class="profile-info-list">
							<li class="title"><h3>Bookinfo</h3></li>
							<li>
								<div class="field">BookID</div>
								<div class="value"><?php echo $b->bookid?></div>
							</li>
							<li>
								<div class="field">Name</div>
								<div class="value"><?php echo $b->bookname?></div>
							</li>
							<li>
								<div class="field">Author</div>
								<div class="value"><?php echo $b->authorname?></div>
							</li>
							<li>
								<div class="field">Sub-Category</div>
								<div class="value"><?php echo $b->subcatname?></div>
							</li>
							<li>
								<div class="field">ISBN</div>
								<div class="value">
									<?php echo $b->isbn?>
								</div>
							</li>
							<li>
								<div class="field">Language</div>
								<div class="value">
									<?php echo $b->language?>
								</div>
							</li>

								<li>
								<div class="field">Edition</div>
								<div class="value">
									<?php echo $b->edition?>
								</div>
							</li>
							<li>
								<div class="field">Condition</div>
								<div class="value">
									<?php echo $b->bookcondition?>
								</div>
							</li>
							<li>
								<div class="field">Availability</div>
								<div class="value">
									<?php
								if($b->status==1)
									echo "Available";
								else
									echo "Unavailable";
								?>
								</div>
							</li>
							<li>
								<div class="field">Price</div>
								<div class="value">
									<?php echo $b->price?>
								</div>
							</li>
							<li class="title"><h3>Liked By</h3></li>
								<?php 
                           foreach ($likers as $l) {
                           	?>

							<li class="img-list">
							
								<a href="<?php echo site_url("admin/User/usermoreinfo/".$l->userid)?>" class="m-b-5"><img src="<?php echo base_url("resources/shared/images/".$l->userimageurl)?>" height="35px" width="35px"/></a>
								<a href="<?php echo site_url("admin/User/usermoreinfo/".$l->userid)?>" class="m-b-5"><?php echo $l->username?></a>


							</li>
								<?php
                           }
							?>
						</ul>
						<?php
                          }
						?>
						<!-- END profile-info-list -->
					</div>
					<!-- END col-4 -->
				</div>
				<!-- END row -->
			</div>
			<!-- END profile-container -->
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

<!-- Mirrored from seantheme.com/infinite-admin/admin/html/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 May 2020 07:42:26 GMT -->
</html>
