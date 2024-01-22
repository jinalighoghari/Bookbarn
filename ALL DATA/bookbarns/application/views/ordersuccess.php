<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from demo.hasthemes.com/pustok-preview/pustok/order-complete.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 May 2020 06:15:53 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BookBarns</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Use Minified Plugins Version For Fast Page Load -->
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('resources/user/') ?>css/plugins.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('resources/user/') ?>css/main.css" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('resources/user/') ?>image/favicon.ico">
</head>

<body>
	<div class="site-wrapper" id="top">
		<div class="site-header header-2 mb--20 d-none d-lg-block">
			<div class="header-middle pt--10 pb--10">
				<div class="container">
	
				</div>

			</div>
<?php include_once("header.php")?>
		</div>
		
		<section class="breadcrumb-section">
			<h2 class="sr-only">Site Breadcrumb</h2>
			<div class="container">
				<div class="breadcrumb-contents">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo site_url("Home")?>">Home</a></li>
							<li class="breadcrumb-item active">Order Complete</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>

		<!-- order complete Page Start -->
		<section class="order-complete inner-page-sec-padding-bottom">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="order-complete-message text-center">
							<h1>Thank you !</h1>
							<p>Your order has been received.</p>
						</div>

						<ul class="order-details-list">

							<h5><?php echo "User:"." ".$_SESSION['uname']?></h5>
							</ul>

						
						<h3 class="order-table-title">Order Details</h3>
						<div class="table-responsive">
							<table class="table order-details-table">
								<thead>
									<tr>
										<th>Product</th>
										<th>Total</th>
									</tr>
								</thead>
								<?php if(!empty($order['items'])){ foreach($order['items'] as $item){ ?>
                        <div class="col-md-8 col-md-offset-2">
                            <div class="success-order">

                            </div>
                        </div>

								<tbody>
									
									<tr>
										<td><a href="single-product.html"><?php echo $item["bookname"]; ?></a> <strong><?php echo "x".$item["qty"]; ?></strong></td>
										<td><span><?php echo $item["subtotal"].' Rs'; ?></span></td>
									</tr>
									
								</tbody>
								
										
								                        <?php } } ?>
								<tfoot>
									<tr>
										<th></th>
										<td></td>
									</tr>
									<tr>
									<th><strong>Grand Total:</strong></th>
										<td><span><strong><?php echo $item["grandtotal"].' Rs'; ?></strong></span></td>
									</tr>
									
									<tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- order complete Page End -->
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
	<?php include_once("footer.php");?>
	<!-- Use Minified Plugins Version For Fast Page Load -->
	<script src="<?php echo base_url('resources/user/') ?>js/plugins.js"></script>
	<script src="<?php echo base_url('resources/user/') ?>js/ajax-mail.js"></script>
	<script src="<?php echo base_url('resources/user/') ?>js/custom.js"></script>
</body>


<!-- Mirrored from demo.hasthemes.com/pustok-preview/pustok/order-complete.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 May 2020 06:15:55 GMT -->
</html>