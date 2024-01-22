

<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from demo.hasthemes.com/pustok-preview/pustok/shop-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 May 2020 06:15:51 GMT -->
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
		        <?php  
       if(!isset($_SESSION['uname']))
        {
           include_once("visitorheader.php");
        }
        else
        {
             include_once("header.php");
        }
       ?>

		<main class="inner-page-sec-padding-bottom">
			<div class="container">
				<div class="shop-toolbar mb--30">
					<div class="row align-items-center">
						<div class="col-lg-2 col-md-2 col-sm-6">
							<!-- Product View Mode -->
							<div class="product-view-mode">
								<a href="#" class="sorting-btn active" data-target="grid"><i class="fas fa-th"></i></a>
								<a href="#" class="sorting-btn" data-target="grid-four">
									<span class="grid-four-icon">
										<i class="fas fa-grip-vertical"></i><i class="fas fa-grip-vertical"></i>
									</span>
								</a>
								<a href="#" class="sorting-btn" data-target="list "><i class="fas fa-list"></i></a>
							</div>
						</div>
						<div class="col-xl-5 col-md-4 col-sm-6  mt--10 mt-sm--0">
						
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6  mt--10 mt-md--0">
							<div class="sorting-selection">
							
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt--10 mt-md--0 ">
							<div class="sorting-selection">
								
							</div>
															<a href="<?php echo site_url("Cart/index")?>" class="cart-link" title="View Cart"><i class="fas fa-shopping-basket"></i>                                 <span>(<?php echo $this->cart->total_items();?>)</span> </a>
						</div>
					</div>
				</div>
				<div class="shop-toolbar d-none">
					<div class="row align-items-center">
						<div class="col-lg-2 col-md-2 col-sm-6">
							<!-- Product View Mode -->
							<div class="product-view-mode">
								<a href="#" class="sorting-btn active" data-target="grid"><i class="fas fa-th"></i></a>
								<a href="#" class="sorting-btn" data-target="grid-four">
									<span class="grid-four-icon">
										<i class="fas fa-grip-vertical"></i><i class="fas fa-grip-vertical"></i>
									</span>
								</a>
								<a href="#" class="sorting-btn" data-target="list "><i class="fas fa-list"></i></a>
							</div>
						</div>
						<div class="col-xl-5 col-md-4 col-sm-6  mt--10 mt-sm--0">
							
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6  mt--10 mt-md--0">
							<div class="sorting-selection">
								
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt--10 mt-md--0 ">
							<div class="sorting-selection">
								
							</div>
						</div>
					</div>
				</div>
				<div class="shop-product-wrap grid with-pagination row space-db--30 shop-border">
					<?php 
						foreach ($books as $b) {
						?>

					<div class="col-lg-4 col-sm-6">
						<div class="product-card">
							<div class="product-grid-content">
								<div class="product-header">
									
									
								</div>
								<div class="product-card--body">
									<div class="card-image">
										<?php 
										$i=$b->image;
										$im=explode(" ",$i);
										 ?>

										<img src="<?php echo base_url('resources/shared/images/'.$im[0])?>" height="200px" width="174px" alt="">
										<div class="hover-contents">


											<a href="<?php echo site_url("Explore/bookMoreInfo/".$b->bookid)?>" class="hover-image">

												<img src="<?php echo base_url('resources/shared/images/'.$im[0])?>" height="200px" width="174px" alt="">
											</a>
											<div class="hover-btns">
												<a href="<?php echo site_url('Explore/AddtoCarthomecat/'.$b->bookid)?>" class="single-btn">
													<i class="fas fa-shopping-basket"></i>
												</a>
												
												<a href="<?php echo $b->bookid?>" data-toggle="modal" data-target="#quickModal<?php echo $b->bookid?>"
													class="single-btn">
													<i class="fas fa-eye"></i>
												</a>
											</div>
										</div>
									</div>
									<div class="price-block">
										<h3><a href="<?php echo site_url("Explore/bookMoreInfo/".$b->bookid)?>"><?php echo $b->bookname?></a></h3>
										<span class="price"><i class="	fa fa-rupee" ><?php echo "Rs.".$b->price?></i></span>
										
									</div>
								</div>
							</div>
							<div class="product-list-content">
								<div class="card-image">
								<a href="<?php echo site_url("Explore/bookMoreInfo/".$b->bookid)?>" class="hover-image">
									<img src="<?php echo base_url('resources/shared/images/'.$im[0])?>" height="200px" width="174px" alt=""></a>
								</div>
								<div class="product-card--body">
									<div class="product-header">
										<a href="#" class="author">
											<?php echo $b->username?>
										</a>

										<h3><a href="<?php echo site_url("Explore/bookMoreInfo/".$b->bookid)?>" tabindex="0"><?php echo $b->bookname?></a></h3>
									</div>
									

									<div class="price-block">
										<span class="price"><i class="fa fa-rupee" ><?php echo "Rs.".$b->price?></i></span>
										
									</div>
									
									<div class="btn-block">
										
										<a href="<?php echo site_url('Explore/AddtoCarthomecat/'.$b->bookid)?>" class="card-link"><i class="fas fa-shopping-basket"></i> Add To Cart</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
						}
					?>
				<!-- Modal -->
		
  
					<?php
				foreach ($books as $b) {
				?> 
				<div class="modal fade modal-quick-view" id="quickModal<?php echo $b->bookid?>" tabindex="-1" role="dialog"
					aria-labelledby="quickModal" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<button type="button" class="close modal-close-btn ml-auto" data-dismiss="modal"
								aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						

							<div class="product-details-modal">
								<div class="row">
									<div class="col-lg-5">
										<!-- Product Details Slider Big Image-->
										<div class="product-details-slider sb-slick-slider arrow-type-two"
											data-slick-setting='{
              "slidesToShow": 1,
              "arrows": false,
              "fade": true,
              "draggable": false,
              "swipe": false,
              "asNavFor": ".product-slider-nav"
              }'>
											<div class="single-slide">
			        <?php
                      $i=$b->image;
                      $im=explode(" ", $i);
                    ?>
												<img src="<?php echo base_url('resources/shared/images/'.$im[0])?>" alt="" height="400px" width="80px">
											</div>
											
										</div>
										
									</div>
				
									<div class="col-lg-7 mt--30 mt-lg--30">

						
										<div class="product-details-info pl-lg--30 ">
											
											<h7 style="color: grey;"><?php echo $b->username ?></h7>
											<h3 class="product-title"><?php echo $b->bookname ?></h3>
											<ul class="list-unstyled">
												 <li>Author: <span class="list-value"><?php echo $b->authorname?></span></li>
                                        <li>Category: <a href="#" class="list-value font-weight-bold"><?php echo $b->catname?></a></li>
                                        <li>ISBN: <span class="list-value"> <?php echo $b->isbn?></span></li>
                                        <li>Languge: <span class="list-value"><?php echo $b->language?></span></li>
                                        <li>Availability: <span class="list-value"> <?php
                                if($b->status==1)
                                    echo "Available";
                                else
                                    echo "Unavailable";
                                ?></span></li>
											</ul>
											<div class="price-block">
												<span class="price-new"><?php echo "Rs.".$b->price ?></span>
												
											</div>
											
											<div class="add-to-cart-row">
												
												<div class="add-cart-btn">
													<a href="<?php echo site_url('Explore/AddtoCarthomecat/'.$b->bookid)?>" class="btn btn-outlined--primary"><span
															class="plus-icon">+</span>Add to Cart</a>
												</div>
											</div>
											
										</div>
										
			
									</div>

								</div>
							</div>
								
						
							<div class="modal-footer">
								<div class="widget-social-share">
									
								</div>
							</div>
						</div>
					</div>
				</div>
				 		<?php
								}
								?>
			</div>
		</main>
	</div>
	<!--=================================
  Brands Slider
===================================== -->
	
	<!--=================================
    Footer Area
===================================== -->
<?php include_once("footer.php");?>
	<!-- Use Minified Plugins Version For Fast Page Load -->
	<script src="<?php echo base_url('resources/user/')?>js/plugins.js"></script>
	<script src="<?php echo base_url('resources/user/')?>js/ajax-mail.js"></script>
	<script src="<?php echo base_url('resources/user/')?>js/custom.js"></script>
</body>


<!-- Mirrored from demo.hasthemes.com/pustok-preview/pustok/shop-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 May 2020 06:15:51 GMT -->
</html>
