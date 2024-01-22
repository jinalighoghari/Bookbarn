<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from demo.hasthemes.com/pustok-preview/pustok/product-details-left-thumbnail.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 May 2020 06:15:52 GMT -->
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
		<div class="site-header d-none d-lg-block">
			<div class="header-middle pt--10 pb--10">
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
			</div>
			
		</div>
		
		<div class="sticky-init fixed-header common-sticky">
			
		</div>
		<section class="breadcrumb-section">
			<h2 class="sr-only">Site Breadcrumb</h2>
			<div class="container">
				<div class="breadcrumb-contents">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo site_url("MyProfile")?>">MyProfile</a></li>
							<li class="breadcrumb-item active">Inquiries</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<main class="inner-page-sec-padding-bottom">
			<div class="container">
				<div class="row  mb--60">
					<div class="col-lg-12 mb--30">
						<div class="row no-gutters">
							<div class="col-sm-12 mb--15 mb-sm--0 order-sm-2">
								<!-- Product Details Slider Big Image-->   
								 <div class="blog-post post-details mb--50">
                                        <div class="blog-content mt--30">
                     
                        <footer class="blog-meta">
                            <div> <a href="">Inquiry</a></div>
                        </footer>
                    </div>
                </div>
								       <div class="comment-block-wrapper mb--50">
                    <h3></h3>
                    
   					<?php

                    foreach ($iqrs as $i) 
                    {
                    	if($i->status=="0")
                    	{
                        ?>
                    <div class="single-comment">
                      
                        <div class="comment-avatar">
                            <img src="<?php echo base_url("resources/shared/images/".$i->userimageurl)?>" height="50px" width="50px" alt="">
                        </div>
                        

                        <div class="comment-text">
                           
                            <h5 class="author"> <a href="#"> <?php echo $i->username?></a></h5>
                          
                            <span class="time"><?php echo $i->message?></p>
                        </div>
                          
                        <a href="<?php echo $i->inquiryid ?>" data-toggle="modal" data-target="#quickModal<?php echo $i->inquiryid?>" class="btn btn-outlined--primary btn-rounded reply-btn">Reply</a>

                    </div>
                    <?php
                }
                else
                {

                }
                }
                    ?>
               </div>
				</div>
							<div class="col-sm-3">
							</div>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="product-details-info pl-lg--30 ">
						<div>
						</div>
						</div>
						<div class="compare-wishlist-row">
						</div>
						
						</div>
					</div>
				</div>
				<div class="sb-custom-tab review-tab section-padding">
					
					<div class="tab-content space-db--20" id="myTabContent">
						
						<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab2">
							<div class="review-wrapper">
								
								<div class="review-comment mb--20">
								<div class="text">
										<div class="rating-block mb--15">

										</div>
									
								</div>
								</div>
								</div>
						</div>
					</div>
				</div>
			</div>
	
<!--Model2-->
	<?php
                    foreach ($iqrs as $i) 
                    {
                        ?>	
<div class="modal fade modal-quick-view" id="quickModal<?php echo $i->inquiryid?>" tabindex="-1" role="dialog"
					aria-labelledby="quickModal" aria-hidden="true">

					


					<div class="modal-dialog" role="document">
						<div class="modal-content">

							<button type="button" class="close modal-close-btn ml-auto" data-dismiss="modal"
								aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>

							<div class="product-details-modal">
								<div class="row">
									
									<div class="col-lg-7 mt--30 mt-lg--30">
										<div class="product-details-info pl-lg--30 " >
										
																
											<form method="post" action="<?php echo site_url("Inquiry/sendReply/$i->bookid/$i->fromuserid/$i->inquiryid")?>">

						
												<div class="row">
												 <div class="col-md-12 col-12 mb--15">
                    								<label for="">Inquiry</label>
                    							<input class="mb-0 form-control" type="text" id="name" name="fromuname" title="Enter Username" disabled="" value="<?php echo $i->message?>" >
                 								 </div>
                 								 <div class="col-md-12 col-12 mb--15">
                    								<label for="">Message</label>
                    							<textarea name="txtmsg" id="message" cols="30" rows="10"
														class="form-control"></textarea>
                 								 </div>

												
												<div class="col-md-12">
                  <input type="submit" name="btnEdit" value="submit" class="btn btn--primary">
                  </div>
											</div>
																							
											</form>



										</div>
									</div>
								
								</div>
							</div>
					
					</div>

				</div>
			
			</div>
	<?php
	}
	?>

											
<!-- Modal -->
			<div class="modal fade modal-quick-view" id="quickModal" tabindex="-1" role="dialog"
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
									<?php
									foreach ($bookinfo as $b) {
										
									
									?>
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
											<img src="<?php echo $b->image?>" alt="">
										</div>
										<div class="single-slide">
											<img src="<?php echo $b->image?>" alt="">
										</div>
										<div class="single-slide">
											<img src="<?php echo $b->image?>" alt="">
										</div>
										<div class="single-slide">
											<img src="<?php echo $b->image?>" alt="">
										</div>
										<div class="single-slide">
											<img src="<?php echo $b->image?>" alt="">
										</div>
									</div>
									<!-- Product Details Slider Nav -->
									<div class="mt--30 product-slider-nav sb-slick-slider arrow-type-two"
										data-slick-setting='{
            "infinite":true,
              "autoplay": true,
              "autoplaySpeed": 8000,
              "slidesToShow": 4,
              "arrows": true,
              "prevArrow":{"buttonClass": "slick-prev","iconClass":"fa fa-chevron-left"},
              "nextArrow":{"buttonClass": "slick-next","iconClass":"fa fa-chevron-right"},
              "asNavFor": ".product-details-slider",
              "focusOnSelect": true
              }'>
										<div class="single-slide">
											<img src="<?php echo $b->image?>" alt="">
										</div>
										<div class="single-slide">
											<img src="<?php echo $b->image?>" alt="">
										</div>
										<div class="single-slide">
											<img src="<?php echo $b->image?>" alt="">
										</div>
										<div class="single-slide">
											<img src="<?php echo $b->image?>" alt="">
										</div>
										<div class="single-slide">
											<img src="<?php echo $b->image?>" alt="">
										</div>
									</div>
									<?php
								}
								?>
								</div>
								<div class="col-lg-7 mt--30 mt-lg--30">
									<div class="product-details-info pl-lg--30 ">
										<p class="tag-block">Tags: <a href="#">Movado</a>, <a href="#">Omega</a></p>
										<h3 class="product-title">Beats EP Wired On-Ear Headphone-Black</h3>
										<ul class="list-unstyled">
											<li>Ex Tax: <span class="list-value"> £60.24</span></li>
											<li>Brands: <a href="#" class="list-value font-weight-bold"> Canon</a></li>
											<li>Product Code: <span class="list-value"> model1</span></li>
											<li>Reward Points: <span class="list-value"> 200</span></li>
											<li>Availability: <span class="list-value"> In Stock</span></li>
										</ul>
										<div class="price-block">
											<span class="price-new">£73.79</span>
											<del class="price-old">£91.86</del>
										</div>
										<div class="rating-widget">
											<div class="rating-block">
												<span class="fas fa-star star_on"></span>
												<span class="fas fa-star star_on"></span>
												<span class="fas fa-star star_on"></span>
												<span class="fas fa-star star_on"></span>
												<span class="fas fa-star "></span>
											</div>
											<div class="review-widget">
												<a href="#">(1 Reviews)</a> <span>|</span>
												<a href="#">Write a review</a>
											</div>
										</div>
										<article class="product-details-article">
											<h4 class="sr-only">Product Summery</h4>
											<p>Long printed dress with thin adjustable straps. V-neckline and wiring
												under the Dust with ruffles at the bottom
												of the
												dress.</p>
										</article>
										<div class="add-to-cart-row">
											<div class="count-input-block">
												<span class="widget-label">Qty</span>
												<input type="number" class="form-control text-center" value="1">
											</div>
											<div class="add-cart-btn">
												<a href="#" class="btn btn-outlined--primary"><span
														class="plus-icon">+</span>Add to Cart</a>
											</div>
										</div>
										<div class="compare-wishlist-row">
											<a href="#" class="add-link"><i class="fas fa-heart"></i>Add to Wish List</a>
											<a href="#" class="add-link"><i class="fas fa-random"></i>Add to Compare</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<div class="widget-social-share">
								<span class="widget-label">Share:</span>
								<div class="modal-social-share">
									<a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
									<a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
									<a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
									<a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
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
	<?php include_once("footer.php");?>
	<!-- Use Minified Plugins Version For Fast Page Load -->
	<script src="<?php echo base_url('resources/user/') ?>js/plugins.js"></script>
	<script src="<?php echo base_url('resources/user/') ?>js/ajax-mail.js"></script>
	<script src="<?php echo base_url('resources/user/') ?>js/custom.js"></script>
</body>


<!-- Mirrored from demo.hasthemes.com/pustok-preview/pustok/product-details-left-thumbnail.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 May 2020 06:15:53 GMT -->
</html>