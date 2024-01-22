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
				
			</div>
			<?php include_once('header.php');?>
		</div>

		<section class="breadcrumb-section">
			<h2 class="sr-only">Site Breadcrumb</h2>
			<div class="container">
				<div class="breadcrumb-contents">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo site_url('MyProfile')?>">MyProfile</a></li>
							<li class="breadcrumb-item active">Sold Books</li>
						</ol>
					</nav>
				</div>
			Books
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
											<th class="pro-thumbnail">Orders</th>
											<th class="pro-thumbnail">#</th>
											<th class="pro-thumbnail">BookName</th>
											<th class="pro-remove">Buyer</th>
											<th class="pro-title">City</th>
											<th class="pro-price">Date</th>
											<th class="pro-quantity">Quantity</th>
											<th class="pro-subtotal">Total</th>

										</tr>
									</thead>
									<tbody>
										<?php 
										foreach ($books as $b) {
											?>

										<tr>
										<td class="pro-thumbnail"><?php echo $b->orderid?></td>
										 <?php
                      $i=$b->image;
                      $im=explode(" ", $i);
                      ?>
										<td><a href="<?php echo site_url("Explore/bookMoreInfo/".$b->bookid)?>" ><img src="<?php echo base_url('resources/shared/images/'.$im[0])?>"></a></td>
										<td class="pro-title"><a href="<?php echo site_url("Explore/bookMoreInfo/".$b->bookid)?>"><?php echo $b->bookname?></a></td>
										<td class="pro-title"><a href="<?php echo site_url('MyProfile/loadOtherUserBasic/'.$b->userid)?>"><?php echo $b->username?></a></td>
									  <td class="pro-price"><?php echo $b->cityname?></td>
										<td class="pro-title"><a href="#"><?php echo $b->created?></a></td>
											
											<td class="pro-quantity">
												<div class="pro-qty">
													<div class="count-input-block">
														<?php echo $b->qty?>
													</div>
												</div>
											</td>
										<td class="pro-subtotal"><span><?php echo $b->subtotal?></span></td>
											
										</tr>
											<?php
										}

										?>
									</tbody>
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
		
	</section>
	<!--=================================
    Footer Area
===================================== -->
	<?php include_once("footer.php");?>
	<!-- Use Minified Plugins Version For Fast Page Load -->
	<script src="<?php echo base_url('resources/user/')?>js/plugins.js"></script>
	<script src="<?php echo base_url('resources/user/')?>js/ajax-mail.js"></script>
	<script src="<?php echo base_url('resources/user/')?>js/custom.js"></script>
</body>


<!-- Mirrored from demo.hasthemes.com/pustok-preview/pustok/wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 May 2020 06:15:53 GMT -->
</html>