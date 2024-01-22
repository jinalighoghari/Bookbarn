
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
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active">Product Details</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<main class="inner-page-sec-padding-bottom">
			<div class="container">
				<div class="row  mb--60">
					<div class="col-lg-5 mb--30">
						<div class="row no-gutters">
							<div class="col-sm-9 mb--15 mb-sm--0 order-sm-2">
								<!-- Product Details Slider Big Image-->
								
								<div class="product-details-slider sb-slick-slider arrow-type-two" data-slick-setting='{
                        "slidesToShow": 1,
                        "arrows": false,
                        "fade": true,
                        "draggable": false,
                        "swipe": false,
                        "asNavFor": ".product-slider-nav"
                        }'>
                         <?php
                      $i=$bookinfo[0]->image;
                      $im=explode(" ", $i);
                      // print_r($im);
                      // die();
                    ?>
                        <?php
								foreach ($bookinfo as $b) {
									?>
									<div class="single-slide">
										<img src="<?php echo base_url("resources/shared/images/".$im[0])?>" alt="" height="500px" width="338px">
									</div>
									<div class="single-slide">
										<img src="<?php echo base_url("resources/shared/images/".$im[1])?>" alt="" height="500px" width="338px">
									</div>
									<div class="single-slide">
										<img src="<?php echo base_url("resources/shared/images/".$im[2])?>" alt="" height="500px" width="338px">
									</div>
									
									<?php
									
								}
								?>
								</div>
								
							</div>
							<div class="col-sm-3">
								<!-- Product Details Slider Nav -->
								<div class="mr-sm--15 product-slider-nav sb-slick-slider arrow-type-two vertical-slider"
									data-slick-setting='{
                                "infinite":true,
                                  "autoplay": true,
                                  "autoplaySpeed": 8000,
                                  "slidesToShow": 2,
                                  "arrows": true,
                                  "prevArrow":{"buttonClass": "slick-prev","iconClass":"fa fa-chevron-left"},
                                  "nextArrow":{"buttonClass": "slick-next","iconClass":"fa fa-chevron-right"},
                                  "asNavFor": ".product-details-slider",
                                  "focusOnSelect": true,
                                  "vertical":true
                                  }' data-slick-responsive='[
                                {"breakpoint":991, "settings": {"slidesToShow": 3} },
                                {"breakpoint":768, "settings": {"slidesToShow": 3} },
                                {"breakpoint":575, "settings": 
                                {"slidesToShow": 2,
    
                                  "vertical":false
                                } 
                              }
                            ]'>
									<div class="single-slide">
										<img src="<?php echo base_url("resources/shared/images/".$im[0])?>" alt="">
									</div>
									<div class="single-slide">
										<img src="<?php echo base_url("resources/shared/images/".$im[1])?>" alt="">
									</div>
									<div class="single-slide">
										<img src="<?php echo base_url("resources/shared/images/".$im[2])?>" alt="">
									</div>
									
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="product-details-info pl-lg--30 ">
							<?php
							foreach ($bookinfo as $b) 
							{
							?>
							
							<p class="tag-block">Tags: 
								<?php
							foreach ($tags as $t) 
							{

								 echo $t->tagname." ";
									
							}?>
								</p>
							<h3 class="product-title"><?php echo $b->bookname?></h3>

							<ul class="list-unstyled">
								
								<li>Author:<span class="list-value"> <?php echo $b->authorname?></span></li>

								 <li>Category: <span class="list-value"> <?php echo $b->catname?></span></li>
								<li>Product ISBN: <span class="list-value"> <?php echo $b->isbn?></span></li>
								<li>Language:<span class="list-value"> <?php echo $b->language?></span></li>
								<li>Condition: <span class="list-value"><?php echo $b->bookcondition?> </span></li>
								<li>Edition: <span class="list-value"><?php echo $b->edition?> </span></li>
								<li>Availability: <span class="list-value"> <?php
								if($b->status==1)
									echo "Available";
								else
									echo "Unavailable";
								?></span></li>
								<li>Seller: <span class="list-value"><a href="<?php echo site_url('MyProfile/loadOtherUserBasic/'.$b->userid)?>" class="author">
										<?php echo $b->username?>
									</a></span></li>
							</ul>
							<div class="price-block">
								<span class="price-new"><?php echo "Rs.".$b->price?></span>
								<!-- <del class="price-old">£91.86</del> -->
							</div>
							<div>
								
								
							</div>
						
							<div class="add-to-cart-row">
								<div class="count-input-block">
									<span class="widget-label">
								<span class="pull-right">
                    <?php
                    if(!isset($_SESSION['uname']))
								{
									?>
									<a href="<?php echo site_url('User')?>">
									<i class="fa fa-thumbs-up">
									</i></a>
									<?php
								}
								else
								{

                       if($likeStatus=='no')
                       {
                    ?>
                            <a href="<?php echo site_url("Explore/like/$b->bookid") ?>">
                            <i class="fa fa-thumbs-up"></i>
                          </a>
                    <?php
                        } 
                        else
                        {
                    ?>
                            <a href="<?php echo site_url("Explore/unlike/$b->bookid") ?>">
                            <i class="fa fa-thumbs-up" style="color: green"></i>
                          </a>
                    <?php
                        }
                    ?>
                  </span></span>
									<!-- <input type="number" class="form-control text-center" value="1"> -->
									<?php
								if(!isset($_SESSION['uname']))
								{
									?><a href="<?php echo site_url("User"); ?>">
									<i class="fas fa-heart">
									</i>
									</a>
									<?php
								}
								else
								{
								if($wishlistStatus=='no')
								{
								?>

							<a href="<?php echo site_url('Explore/Addtowishlist/'.$b->bookid)?>" class="add-link"><i class="fas fa-heart"></i></a>
								<?php
								}
								else
								{
								?>
							<a href="<?php echo site_url('Explore/removewishlist/'.$b->bookid)?>" class="add-link"><i class="fas fa-heart" style="color: red"></i>Add to Wish
									List</a>	
									<?php
								}
							}
								?>
								</div>
								<div class="add-cart-btn">
									
										<?php
								if(!isset($_SESSION['uname']))
								{
									?>
									<a href="<?php echo site_url("User");?>" class="btn btn--primary">
									Inquiry
									</a>
									<?php
								}
								else
									{
										?>
										<a href="<?php echo $b->bookid?>" data-toggle="modal" data-target="#quickModal<?php echo $_SESSION['uid']?>" class="btn btn-outlined--primary">Inquiry</a>
										<?php
									}?>
								</div>
							</div>
							<div class="compare-wishlist-row">
								
								

                  <span class="pull-right"><a href="<?php echo site_url('Explore/AddtoCartbi/'.$b->bookid)?>" class="add-link
									"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Add to Cart</a></span>
							</div>
						</div>
							<div>
								
							</div>
						<?php
					}
				}
					?>
						</div>
					</div>
				</div>
				<div class="sb-custom-tab review-tab section-padding">
					<ul class="nav nav-tabs nav-style-2" id="myTab2" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="tab1" data-toggle="tab" href="#tab-1" role="tab"
								aria-controls="tab-1" aria-selected="true">
								DESCRIPTION
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="tab2" data-toggle="tab" href="#tab-2" role="tab"
								aria-controls="tab-2" aria-selected="true">
								REVIEWS
							</a>
						</li>
					</ul>
					<div class="tab-content space-db--20" id="myTabContent">
						<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab1">
							<article class="review-article">
								<h1 class="sr-only">Tab Article</h1>
								<p><?php echo $b->description?></p>
							</article>
						</div>
						<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab2">
							<div class="review-wrapper">
								<h2 class="title-lg mb--20"><?php echo "Reviews of ".$b->bookname?></h2>
								<?php
									foreach ($comments as $c) {
										?>
								<div class="review-comment mb--20">
									
									
										
									<div class="avatar">
										<img src="<?php echo base_url("resources/shared/images/".$c->userimageurl)?>" alt="" height="60" width="60" >
									</div>
									

									<div class="text">
										<div class="rating-block mb--15">

										</div>
										<h6 class="author"><?php echo $c->username." " ?>
										</h6>
										<p><?php echo $c->feedback?></p>
									</div>
											
									
								</div>
								<?php
									}
									?>
								<?php
								if(!isset($_SESSION['uname']))
									{
										?><a href="<?php echo site_url('User')?>"><h2 class="title-lg mb--20 pt--15">ADD A REVIEW</h2></a>
									<?php
									}
									else
									{
										?>
										<h2 class="title-lg mb--20 pt--15">ADD A REVIEW</h2>
										<div class="rating-row pt-2">
											<form method="post" action="<?php echo site_url('Explore/addComment/'.$b->bookid)?>">
									
									
										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label for="message">Comment</label>
													<textarea name="txtcomment" id="message" cols="30" rows="10"
														class="form-control"></textarea>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="form-group">
													
												</div>
											</div>
											<div class="col-lg-4">
												<div class="form-group">
													
												</div>
											</div>
											
											
											<div class="col-lg-4">
											
											</div>
											<div class="col-lg-3 offset-5">
												<div class="submit-btn">
													<input type="submit" name="txtAdd" class="btn btn--primary">
												</div>
											</div>
										</div>
									</form>
								</div>
										<?php
									}
									?>
								
							
								
							
							</div>
						</div>
					</div>
				</div>
			</div>
	
<!--Model2-->
<?php
if(isset($_SESSION['uname']))
		{?>
			<div class="modal fade modal-quick-view" id="quickModal<?php echo $_SESSION['uid']?>" tabindex="-1" role="dialog"
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
											<form method="post" action="<?php echo site_url("Explore/sendinquiry/$b->bookid/$b->userid")?>">
												<div class="row">
											
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
		else
		{
			
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
										<p class="tag-block">Tags: <a href="#"></a>, <a href="#">Omega</a></p>
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
<h4 class="grey" style="text-align: center; color: green">Book Liked By</h4>
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
				

              <?php
              foreach ($likers as $l) 
              {
              ?>
             
				<div class="col-md-12"> 
               	<img src="<?php echo base_url('resources/shared/images/'.$l->userimageurl) ?>" height="60px" width="60px"/><a href="<?php echo site_url('MyProfile/loadOtherUserBasic/'.$l->userid)?>"><?php echo $l->username ?></a>
                
             	</div>
            
              <br>
              <?php
              }
              ?>
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

