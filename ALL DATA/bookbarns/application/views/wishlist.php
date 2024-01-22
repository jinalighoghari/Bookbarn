<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from demo.hasthemes.com/pustok-preview/pustok/wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 May 2020 06:15:53 GMT -->
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
		<div class="site-header header-2 mb--20 d-none d-lg-block">
			<div class="header-middle pt--10 pb--10">
				<div class="container">
				
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
							<li class="breadcrumb-item active">Wishlist</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<!-- Wishlist Page Start -->
		<div class="cart_area inner-page-sec-padding-bottom">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<form action="https://demo.hasthemes.com/pustok-preview/pustok/">
							<!-- Cart Table -->
							<div class="cart-table table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th class="pro-thumbnail">Image</th>
											<th class="pro-title">BookName</th>
											<th class="pro-price">Price</th>
 											<th class="pro-title">Condition</th>
 											<th class="pro-subtotal">Remove</th>
 											<th>#</th>
											
										</tr>
									</thead>
									<?php
                             foreach ($books as $b) {
                             ?>
                             
									<tbody>
										<tr>
											 <?php
                      $i=$b->image;
                      $im=explode(" ", $i);
                      ?>
											<td class="pro-thumbnail"><a href=""><img
														src="<?php echo base_url('resources/shared/images/'.$im[0])?>" alt="Product"></a></td>
											<td class="pro-title"><a href="#"><?php echo $b->bookname?></a></td>
											<td class="pro-price"><span><?php echo $b->price?></span></td>
											
                                       <td class="pro-quantity"><a href="#"><?php echo $b->bookcondition?></a></td>
 										<td class="pro-remove"><a href="<?php echo site_url("Explore/removewishlistbook/$b->bookid")?>"><i class="far fa-trash-alt"></i></a></td>
 										<td>   <a href="<?php echo site_url('Explore/AddtoCartwishlist/'.$b->bookid)?>" class="single-btn">
                      <i class="fas fa-shopping-basket"></i>
                        </a></td>
										</tr>
									
									</tbody>
									<?php
                             }
							 ?>
								</table>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Cart Page End -->
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
	<?php include_once('footer.php')?>
	<!-- Use Minified Plugins Version For Fast Page Load -->
	<script src="<?php echo base_url('resources/user/')?>js/plugins.js"></script>
	<script src="<?php echo base_url('resources/user/')?>js/ajax-mail.js"></script>
	<script src="<?php echo base_url('resources/user/')?>js/custom.js"></script>
</body>


<!-- Mirrored from demo.hasthemes.com/pustok-preview/pustok/wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 May 2020 06:15:53 GMT -->
</html>