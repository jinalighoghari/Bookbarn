<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/infinite-admin/admin/html/page_register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 May 2020 07:41:16 GMT -->
<head>
	<meta charset="utf-8" />
	<title>BookBarns | Admin</title>
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
<body class="inverse-mode">
	<!-- BEGIN #page-container -->
	<div id="page-container" class="fade">
		<!-- BEGIN register -->
        <div class="register">
        	<!-- BEGIN register-cover -->
			<div class="register-cover"></div>
			<!-- END register-cover -->
			<!-- BEGIN register-content -->
			<div class="register-content">
				<!-- BEGIN register-brand -->
				<div class="register-brand">
					<h1 align="center"><a href="<?php echo site_url('admin/AHome')?>"><strong>Book</strong>Barns</a></h1>
				</div>
				<!-- END register-brand -->
				<h3 class="m-b-20"><span>Edit Profile</span></h3>

				<!-- BEGIN register-form -->
				<form action="<?php echo site_url("admin/ManageProfile/editbasic")?>" method="POST" name="register_form">
					<!-- BEGIN row -->
						<!-- BEGIN col-6 -->
					<div class="form-group">
	<label class="control-label">Admin Name</label>
	<input type="text" class="form-control" required="" name="txtaname" value="<?php echo $admininfo->adminname?>" />
		</div>
		<div class="form-group">
		<label class="control-label">Email Address</label>
		<input type="text" class="form-control" required="" name="txtemail" value="<?php echo $admininfo->email?>"/>
							</div>

		<div class="form-group">
				<label class="control-label"> Contact No </label>
				<input type="text" class="form-control" required="" name="txtcon" value="<?php echo $admininfo->contactno?>" />
							</div>	
				<button class="btn btn-primary">Save Change</button>					
							</form>
							
				<form action="<?php echo site_url("admin/ManageProfile/editimage")?>" enctype="multipart/form-data"   method="POST" name="register_form">
				<div class="form-group">
				<label class="control-label"> Change Image </label>
					<input type="file" class="form-control" name="fup" value="" />
							</div>
				<button class="btn btn-primary">Save Change</button>					
							</form>
							


							
						<!-- BEGIN col-6 -->
						
	<form action="<?php echo site_url("admin/ManageProfile/editpass")?>" method="POST" name="register_form">
			<div class="form-group">
			<label class="control-label">Old Password</label>
		<input type="text" class="form-control" name="txtopsw" required="" value="" />
				</div>
			<div class="form-group">
			<label class="control-label">New Password</label>
		<input type="text" name="txtnpsw" class="form-control" required="" value="" />
		      </div>

			<div class="form-group">
			<label class="control-label">Confirm Password </label>
			<input type="password" name="txtcpsw" class="form-control" required="" value="" />
							</div>
							<?php
if(isset($errMsg))
{
?>
<div class="row">
	<label style="color: red"><?php echo $errMsg;?></label>
</div>
<?php
}
?>							
<button class="btn btn-primary">Save Change</button>					
							</form>
							
						<!-- END col-6 -->
					</div>
				
					</div>
					
			
				<!-- END register-form -->
			</div>
		
	</div>
	
	
	
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

<!-- Mirrored from seantheme.com/infinite-admin/admin/html/page_register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 May 2020 07:41:16 GMT -->
</html>
