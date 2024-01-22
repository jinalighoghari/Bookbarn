<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BookBarns</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Use Minified Plugins Version For Fast Page Load -->
  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('resources/user/')?>css/plugins.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('resources/user/')?>css/main.css" />
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('resources/user/')?>image/favicon.ico">
</head>

<body>
  <div class="site-wrapper" id="top">
    <div class="site-header d-none d-lg-block">
      <div class="header-middle pt--10 pb--10">
        <div class="site-header header-2 mb--20 d-none d-lg-block">
            <div class="header-middle pt--10 pb--10">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            
                        </div>
                        <div class="row">
                            <div class="header-search-block">
                                 
                            </div>
                        </div>
                        <div class="col-lg-3 offset-2">
                            <div class="main-navigation flex-lg-right">
                                <div class="cart-widget">
                                    <div class="login-block">
                                        
                                    </div>
                                        <div class="cart-total">
                                            
                                        </div>

                                    
                                </div>
                                <!-- @include('menu.htm') -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom bg-primary">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            
                        </div>
                        <div class="col-lg-3">
                            <div class="header-phone color-white">
                                <div class="icon">
                                </div>
                                
                            </div>
                        </div>
                        <div>
                            <div class="main-navigation flex-lg-right">
                                <ul class="main-menu menu-right main-menu--white li-last-0">
                                    <!-- Blog -->
                                    <li class="menu-item has-children mega-menu">
                                        
                                    </li>
                                    <li class="menu-item has-children">
                                        
                                    </li>
                                    <!-- Shop -->
                                    <li class="menu-item has-children mega-menu">
                                        
                                    </li>
                                    <!-- Pages -->
                                    <li class="menu-item has-children">

                                        
                                    </li>
                                    
                                    <li class="menu-item">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="header-bottom pb--10">

      </div>
    </div>
    
    <div class="sticky-init fixed-header common-sticky">
      <div class="container d-none d-lg-block">
        <div class="row align-items-center">
          <div class="col-lg-4">
            <a href="index.html" class="site-brand">
              <img src="image/logo.png" alt="">
            </a>
          </div>
          
        </div>
      </div>
    </div>
    <section class="breadcrumb-section">
      <h2 class="sr-only">Site Breadcrumb</h2>
      <div class="container">
        <div class="breadcrumb-contents">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            
            </ol>
          </nav>
        </div>
      </div>
    </section>
<!--          Login Register page content         
    =============================================-->
	<main class="page-section inner-page-sec-padding-bottom">
		<div class="container">
    <div class="col-lg-4 offset-4">
        <img src="<?php echo base_url("resources/user/")?>image/textlogo.png" alt="">
</div>
			<div class="row">
					
			<div class="col-sm-12 col-md-12 col-lg-6 col-xs-12 offset-3">
				<form action="<?php echo site_url('User/validateLogin/') ?>" method="post">
					<div class="login-form">
						<h4 class="login-title">Login</h4>
						<p><span class="font-weight-bold">I am a returning customer</span></p>
						<div class="row">

						<div class="col-md-12 col-12 mb--15">
						<label for="uname">Enter your Username</label>
						<input class="mb-0 form-control" type="text" required="" id="uname" name="txtuname" placeholder="Enter you Username here...">
						</div>
									
						<div class="col-12 mb--20">
						<label for="password">Password</label>
						<input class="mb-0 form-control" type="password" required="" id="login-password" placeholder="Enter your password" name="txtpwd">
							
							<?php
								if(isset($loginErr))
								{
									?>
									<p style="color: red"><?php echo $loginErr ?></p>
									<?php
								}
							?>
						
						</div>
									
						<div class="col-md-12">
							<button type="submit" class="btn btn--primary">Login</button>
						</div>
						
						</div>
						</div>
				</form>
						
						<div>
							<a href="<?php echo site_url('User/loadReg') ?>">New User-Click here to Register</a>
						</div>

					</div>
				</div>
			</div>
		</main>
	</div>
	<!--=================================
  Brands Slider
===================================== -->
	<section class="section-margin">
		<h2 class="sr-only">Brand Slider</h2>
		<div class="container">
			<div class="brand-slider sb-slick-slider border-top border-bottom" data-slick-setting='{
                                            "autoplay": true,
                                            "autoplaySpeed": 8000,
                                            "slidesToShow": 6
                                            }' data-slick-responsive='[
                {"breakpoint":992, "settings": {"slidesToShow": 4} },
                {"breakpoint":768, "settings": {"slidesToShow": 3} },
                {"breakpoint":575, "settings": {"slidesToShow": 3} },
                {"breakpoint":480, "settings": {"slidesToShow": 2} },
                {"breakpoint":320, "settings": {"slidesToShow": 1} }
            ]'>
				<div class="single-slide">
					<img src="image/others/brand-1.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-2.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-3.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-4.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-5.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-6.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-1.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-2.jpg" alt="">
				</div>
			</div>
		</div>
	</section>
	<!--=================================
    Footer Area
===================================== -->
	<?php include_once("footer.php"); ?>
	<!-- Use Minified Plugins Version For Fast Page Load -->
	<script src="<?php echo base_url('resources/user/')?>js/plugins.js"></script>
	<script src="<?php echo base_url('resources/user/')?>js/ajax-mail.js"></script>
	<script src="<?php echo base_url('resources/user/')?>js/custom.js"></script>
</body>

</html>