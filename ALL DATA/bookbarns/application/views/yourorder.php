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
							<li class="breadcrumb-item active">My Order</li>
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
									<h1 class="quick-title" style="align-items: center">Final Cart</h1>
									<!-- Slide Down Trigger  -->
									<div class="checkout-quick-box">

									</div>
									<!-- Slide Down Blox ==> Login Box  -->
									<div class="checkout-slidedown-box" id="quick-login">
										
									</div>
									<!-- Slide Down Trigger  -->
									
									<!-- Slide Down Blox ==> Cupon Box -->
									<div class="checkout-slidedown-box" id="quick-cupon">
									<!--   -->
									</div>
								</div>
								<div class="col-lg-7 mb--20">
									<!-- Billing Address -->
								
									</div>
									
								</div>
								<div class="col-lg-6  offset-3">
									<div class="row">
										<!-- Cart Total -->
										<div class="col-12">
											<div class="checkout-cart-total">
												<h2 class="checkout-title">YOUR ORDER</h2>
												<h4>Product <span>Total</span></h4>
												<ul>
													<?php 
                                    if($this->cart->total_items()>0)
                                    {
                                        foreach($cartItems as $item)
                                        {
                                    ?>
                                    <li><span class="left"><?= $item['name']."x".$item['qty'];?></span> <span
															class="right"><?php echo $item['subtotal']?></span></li>
														<?php
													}
												}
												?>
												</ul>
												<p></p>
												
												<h4>Grand Total <span><?php if($this->cart->total_items()>0)
                            {
                            ?>
                            <b><?php echo $this->cart->total().'  Rs';?></b>
                            <?php }?>                      </span></h4>
												<div class="method-notice mt--25">
																									</div>
											<div class="term-block">
													</div>

												<a href="<?php echo site_url('Checkout/index')?>"><button class="place-order w-100">Place order</button></a>
											</div>
											</div>
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
