<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/infinite-admin/admin/html/page_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 May 2020 07:41:16 GMT -->
<head>
	<meta charset="utf-8" />
	<title>Admin Login</title>
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
	<div id="page-container" class="fade-in">
		<!-- BEGIN login -->
        <div class="login">
        	<img src="C:/wamp/www/bookbarns/resources/admin/assets/img/profile.jpg">
			<!-- BEGIN login-cover -->
			<div class="login-cover"></div>
			<!-- END login-cover -->
			<!-- BEGIN login-content -->
			<div class="login-content">
				<!-- BEGIN login-brand -->
				<div class="login-brand">
					<a href="#"><span class="logo"><i class="ti-infinite"></i></span>  Admin Login</a>
				</div>
				<!-- END login-brand -->
				<!-- BEGIN login-desc -->
				<div class="login-desc">
					For your protection, please verify your identity.
				</div>
				<!-- END login-desc -->
				<!-- BEGIN login-form -->
				<form action="<?php echo site_url('admin/
				AdminLogin/LoginValidate');?>" method="POST" name="login_form">
					<div class="form-group">
						<label class="control-label">Username</label>
						<input type="text" class="form-control" required="" name="txtname" />
					</div>
					<div class="form-group">
						<label class="control-label">Password</label>
						<input type="password" class="form-control" required="" name="txtpwd" />
					</div>
					<?php
              if(isset($loginErr))
              {
                ?>
                 <div class="form-group has-feedback">
                 <p style="color: red"><?php echo $loginErr?></p>
                
                <?php
              }
            ?>

					<button type="submit" class="btn btn-primary">Login</button>
				</form>
				<!-- END login-form -->
				
			</div>
			<!-- END login-content -->
        </div>
        <!-- END login -->
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

<!-- Mirrored from seantheme.com/infinite-admin/admin/html/page_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 May 2020 07:41:16 GMT -->
</html>
