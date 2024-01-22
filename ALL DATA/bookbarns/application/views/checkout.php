<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from demo.hasthemes.com/pustok-preview/pustok/checkout.html by HTTrack Webbase Copier/3.x [XR&CO'2014], Fri, 01 May 2020 06:15:46 GMT -->
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
	<div class="base-wrapper" id="top">
		<div class="base-header header-2 mb--20 d-none d-lg-block">
			<?php include_once("header.php");?>
		</div>
		
		<section class="breadcrumb-section">
			<h2 class="sr-only">base Breadcrumb</h2>
			<div class="container">
				<div class="breadcrumb-contents">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo site_url('Home')?>">Home</a></li>
							<li class="breadcrumb-item active">Checkout</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<main id="content" class="page-section inner-page-sec-padding-bottom space-db--20">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- Checkout Form s-->
						<div class="checkout-form">
							<div class="row row-40">
								<div class="col-12">
									<h1 class="quick-title">Checkout</h1>
									<!-- Slide Down Trigger  -->
									<div class="checkout-quick-box">

									</div>
									<!-- Slide Down Blox ==> Login Box  -->
									<div class="checkout-slidedown-box" id="quick-login">
																			</div>
									

								</div>
								<div class="col-lg-12 mb--20">
									<!-- Billing Address -->
									<div id="billing-form" class="mb-40">
										<h4 class="checkout-title">Billing Address</h4>
										<form method="post" action="<?php echo site_url('Checkout/booking')?>">
										<div class="row">
											<div class="col-md-6 col-12 mb--20">
												<label>First Name*</label>
												<input type="text" name="fname" placeholder="First Name">
											</div>
											<div class="col-md-6 col-12 mb--20">
												<label>Last Name*</label>
												<input type="text" name="lname" placeholder="Last Name">
											</div>
											
											<div class="col-md-6 col-12 mb--20">
											<label>Email Address*</label>
												<input type="email" name="emailid" placeholder="Email Address">
											</div>
											<div class="col-md-6 col-12 mb--20">
												<label>Phone no*</label>
												<input type="text" name="contactno" placeholder="Phone number">
											</div>

											<div class="col-12 mb--20">
												<label>Address*</label>
												<input type="text" name="hno" placeholder="Address line 1">
												<input type="text" name="street" placeholder="Address line 2">
											</div>
											<div class="col-md-6 col-12 mb--20">
												 <label for="city">Select City</label>
                        <select class="form-control" id="city" required="" name="txtcity" >
                         
                        </select>
                       
											</div>
											<div class="col-md-6 col-12 mb--20">
												<label for="state">Select State</label>
                          <select class="form-control" id="state" name="txtstate" required="" onchange="loadcity(this.value)">
                          <option value="-1">Select state</option>
                          <?php
                          foreach ($states as $s) {
                          ?>
                          <option value="<?php echo $s->stateid ?>"><?php echo $s->statename ?></option>
                          <?php
                          }
                          ?>
                          </select>
											</div>
											<div class="col-md-12 col-12 mb--20">
												<label>Pin Code*</label>
												<input type="text" name="pincode" placeholder="Zip Code">
											</div>
											<div class="col-12 mb--20 ">
												<div class="block-border check-bx-wrapper">
													
												</div>
											</div><button class="place-order w-100">Place order</button>

										</form>										
									</div>
									</div>
									
								</div>

							</div>
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

<script type="text/javascript">
   function loadcity(sid)
    {
      if(sid!=-1)
        {
          $.ajax({
                url:"<?php echo site_url('AddBook/loadCityByStateId/')?>"+sid,
                success: function(result)
                        {
                          document.getElementById('city').innerHTML=result;
                        }
                });
        }
    }
</script>
	<?php include_once("footer.php");?>
	<!-- Use Minified Plugins Version For Fast Page Load -->
	<script src="<?php echo base_url('resources/user/')?>js/plugins.js"></script>
	<script src="<?php echo base_url('resources/user/')?>js/ajax-mail.js"></script>
	<script src="<?php echo base_url('resources/user/')?>js/custom.js"></script>
</body>


<!-- Mirrored from demo.hasthemes.com/pustok-preview/pustok/checkout.html by HTTrack Webbase Copier/3.x [XR&CO'2014], Fri, 01 May 2020 06:15:46 GMT -->
</html>