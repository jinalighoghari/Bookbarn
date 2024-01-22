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
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('resources/user/')?>image/leaf.png">
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
       
        
        <!--=================================
        Hero Area
    ===================================== -->
        <section class="hero-area hero-slider-3">
            <div class="sb-slick-slider" data-slick-setting='{
                                                        "autoplay": true,
                                                        "autoplaySpeed": 8000,
                                                        "slidesToShow": 1,
                                                        "dots":true
                                                        }'>
                <div class="single-slide bg-image  bg-overlay--dark" data-bg="<?php echo base_url('resources/user/');?>image/bg-images/home-3-slider-1.jpg">
                    <div class="container">
                        <div class="home-content text-center">
                            <div class="row justify-content-end">
                                <div class="col-lg-6">
                                    <h1>You Are Only One Book Away...</h1>
                                    <h2>From A Good Mood
                                        <br><br>
                                    <a href="<?php echo site_url('HomeCategory/banner4')?>" class="btn btn--yellow">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide bg-image  bg-overlay--dark" data-bg="<?php echo base_url('resources/user/');?>image/bg-images/home-3-slider-2.jpg">
                    <div class="container">
                        <div class="home-content pl--30">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h1>You Are Bound To Find</h1>
                                    <h2>More And More....
                                        <br></h2>
                                    <a href="<?php echo site_url('HomeCategory/banner5')?>" class="btn btn--yellow">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================================
        Home Category Gallery
    ===================================== -->
        <section class="pt--30 section-margin">
            <h2 class="sr-only">Category Gallery Section</h2>
            <div class="container">
                
                <div class="category-gallery-block">

                    <a href="<?php echo site_url('HomeCategory/imgcat1')?>" class="single-block hr-large" >
                        
                        <img src="<?php echo base_url('resources/user/');?>image/others/cat-gal-large.png" alt="" >
                    
                
                     </a>
                    <div class="single-block inner-block-wrapper">
                     <a href="<?php echo site_url('HomeCategory/imgcat2')?>" class="single-image mid-image">
                            <img src="<?php echo base_url('resources/user/');?>image/others/cat-gal-mid.png" alt="" >
                        </a>
                    
                        <a href="<?php echo site_url('HomeCategory/imgcat5')?>" class="single-image small-image">
                            <img src="<?php echo base_url('resources/user/');?>image/others/cat-gal-small.png" alt="">
                        </a>
                        <a href="<?php echo site_url('HomeCategory/imgcat3')?>" class="single-image small-image">
                            <img src="<?php echo base_url('resources/user/');?>image/others/cat-gal-small-2.jpg" alt="">
                        </a>
                        <a href="<?php echo site_url('HomeCategory/imgcat4')?>" class="single-image mid-image">
                            <img src="<?php echo base_url('resources/user/');?>image/others/cat-gal-mid-2.png" alt="">
                        </a>
                    
                    </div>
                </div>
            
            </div>
        </section>
        <!--=================================
    ARTS & PHOTOGRAPHY BOOKS
===================================== -->
        <section class="section-margin">
            <div class="container">
                <div class="section-title section-title--bordered">
                    <h2>COOK BOOKS</h2>
                </div>
                <div class="product-slider sb-slick-slider slider-border-single-row" data-slick-setting='{
                        "autoplay": true,
                        "autoplaySpeed": 8000,
                        "slidesToShow": 5,
                        "dots":true
                    }' data-slick-responsive='[
                        {"breakpoint":1200, "settings": {"slidesToShow": 4} },
                        {"breakpoint":992, "settings": {"slidesToShow": 3} },
                        {"breakpoint":768, "settings": {"slidesToShow": 2} },
                        {"breakpoint":480, "settings": {"slidesToShow": 1} },
                        {"breakpoint":320, "settings": {"slidesToShow": 1} }
                    ]'>
                    <?php 
                   foreach ($book as $b) {
                    ?>
                    
                    <div class="single-slide">
                        <div class="product-card">
                            <div class="product-header">
                                <a href="#" class="author">

                                </a>

                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                     <?php
                      $i=$b->image;
                      $im=explode(" ", $i);
                    
                    ?>
                                    <img src="<?php echo base_url("resources/shared/images/".$im[0])?>" alt="" height="300px" width="274px">
                                    <div class="hover-contents">
                                        <a href="<?php echo site_url("Explore/bookMoreInfo/".$b->bookid)?>" class="hover-image">
                                            <img src="<?php echo base_url("resources/shared/images/". $im[0])?>" height="300px" width="274px" alt="">
                                        </a>
                                        <div class="hover-btns">
                                            <a href="<?php echo site_url('Explore/AddtoCarthome/'.$b->bookid)?>" class="single-btn">
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
                                <h3><a href="<?php echo site_url("Explore/bookMoreInfo/".$b->bookid)?>">    <?php echo $b->bookname?></a></h3>
                                <span class="price"><?php echo "Rs.".$b->price?></span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                   }
                    ?>
                </div>
            </div>
        </section>
        <!--=================================
    POETRY BOOKS
===================================== -->
        <section class="section-margin">
            <div class="container">
                <div class="section-title section-title--bordered">
                    <h2>POETRY BOOKS</h2>
                </div>
                <div class="product-slider sb-slick-slider slider-border-single-row" data-slick-setting='{
                        "autoplay": true,
                        "autoplaySpeed": 8000,
                        "slidesToShow": 5,
                        "dots":true
                    }' data-slick-responsive='[
                        {"breakpoint":1200, "settings": {"slidesToShow": 4} },
                        {"breakpoint":992, "settings": {"slidesToShow": 3} },
                        {"breakpoint":768, "settings": {"slidesToShow": 2} },
                        {"breakpoint":480, "settings": {"slidesToShow": 1} },
                        {"breakpoint":320, "settings": {"slidesToShow": 1} }
                    ]'>
                    <?php
                    foreach ($pbook as $p) {
                        ?>

                    <div class="single-slide">
                        <div class="product-card">
                            <div class="product-header">
                                <a href="#" class="author">
                                
                                </a>

                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                     <?php
                      $i=$p->image;
                      $im=explode(" ", $i);
                    ?>
                                    <img src="<?php echo base_url('resources/shared/images/'. $im[0]);?>" alt="" height="300px" width="274px">
                                    <div class="hover-contents">
                                        <a href="<?php echo site_url("Explore/bookMoreInfo/".$p->bookid)?>" class="hover-image">
                                            <img src="<?php echo base_url('resources/shared/images/'. $im[0]);?>" alt="" height="300px" width="274px">
                                        </a>
                                        <div class="hover-btns">
                                            <a href="<?php echo site_url('Explore/AddtoCarthome/'.$p->bookid)?>" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                          
                                            </a>
                                            <a href="<?php echo $p->bookid?>" data-toggle="modal" data-target="#quickModal<?php echo $p->bookid?>"
                                                class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-block">
                                                                    <h3><a href="<?php echo site_url("Explore/bookMoreInfo/".$p->bookid)?>"><?php echo $p->bookname?></a></h3>
                                    <span class="price"><?php echo $p->price?></span>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                     <?php
                    }
                    ?>
                </div>
            </div>
        </section>
       
        <!--=================================
        Home Features Section
    ===================================== -->
        <section class="mb--30 space-dt--30">
            <div class="container">
                <div class="row">
               
                    <div class="col-xl-6 col-md-6 mt--30">
                        <div class="feature-box h-100">
                            <div class="icon">
                                <i class="fas fa-piggy-bank"></i>
                            </div>
                            <div class="text">
                                <h5>Internet Banking</h5>
                                <p>Customer Surity</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 mt--30">
                        <div class="feature-box h-100">
                            <div class="icon">
                                <i class="fas fa-life-ring"></i>
                            </div>
                            <div class="text">
                                <h5>Help & Support</h5>
                                <p>Call us : + 0123456789</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Modal -->
        <?php
                        foreach ($book as $b) 
                        {
                ?>
        <div class="modal fade modal-quick-view" id="quickModal<?php echo $b->bookid?>" tabindex="-1" role="dialog"
            aria-labelledby="quickModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close modal-close-btn ml-auto" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="product-details-modal">
                        <div class="row">
                            <div class="col-lg-5">
                                <!-- Product Details Slider Big Image-->
                                <div class="product-details-slider sb-slick-slider arrow-type-two" data-slick-setting='{
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
                                  
                                    <h3 class="product-title"><?php echo $b->bookname?></h3>
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
                                        <span class="price-new"><?php echo "Rs.".$b->price?></span>
                                        
                                    </div>
                                    <div class="rating-widget">
                                        
                                    </div>
                                   
                                    <div class="add-to-cart-row">
                                        
                                        <div class="add-cart-btn">
                                            <a href="<?php echo site_url('Explore/AddtoCarthome/'.$b->bookid)?>" class="btn btn-outlined--primary"><span
                                                    class="plus-icon">+</span>Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="compare-wishlist-row">
                                       
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
               
                <?php
                        foreach ($pbook as $p) 
                        {
                ?>
        <div class="modal fade modal-quick-view" id="quickModal<?php echo $p->bookid?>" tabindex="-1" role="dialog"
            aria-labelledby="quickModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close modal-close-btn ml-auto" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="product-details-modal">
                        <div class="row">
                            <div class="col-lg-5">
                                <!-- Product Details Slider Big Image-->
                                <div class="product-details-slider sb-slick-slider arrow-type-two" data-slick-setting='{
              "slidesToShow": 1,
              "arrows": false,
              "fade": true,
              "draggable": false,
              "swipe": false,
              "asNavFor": ".product-slider-nav"
              }'>
                                    <div class="single-slide">
                                                                         <?php
                      $i=$p->image;
                      $im=explode(" ", $i);
                    ?>
                                        <img src="<?php echo base_url('resources/shared/images/'.$im[0])?>" alt="" height="400px" width="80px">
                                    </div>
                                    
                            </div>
                            <div class="col-lg-7 mt--30 mt-lg--30">
                                <div class="product-details-info pl-lg--30 ">
                                  
                                    <h3 class="product-title"><?php echo $p->bookname?></h3>
                                    <ul class="list-unstyled">
                                        <li>Author: <span class="list-value"><?php echo $p->authorname?></span></li>
                                        <li>Category: <a href="#" class="list-value font-weight-bold"><?php echo $p->catname?></a></li>
                                        <li>ISBN: <span class="list-value"> <?php echo $p->isbn?></span></li>
                                        <li>Languge: <span class="list-value"><?php echo $p->language?></span></li>
                                        <li>Availability: <span class="list-value"> <?php
                                if($p->status==1)
                                    echo "Available";
                                else
                                    echo "Unavailable";
                                ?></span></li>
                                    </ul>
                                    <div class="price-block">
                                        <span class="price-new"><?php echo "Rs.".$p->price?></span>
                                       
                                    </div>
                                    <div class="rating-widget">
                                       
                                    </div>
                                    
                                    <div class="add-to-cart-row">
                                        
                                        <div class="add-cart-btn">
                                            <a href="<?php echo site_url('Explore/AddtoCarthome/'.$p->bookid)?>" class="btn btn-outlined--primary"><span
                                                    class="plus-icon">+</span>Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="compare-wishlist-row">
                                       
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
        
    

        <!--=================================
    Footer
===================================== -->
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
    Footer Area===================================== -->
    <?php include_once("footer.php");?>
    <!-- Use Minified Plugins Version For Fast Page Load -->
    <script src="<?php echo base_url('resources/user/')?>js/plugins.js"></script>
    <script src="<?php echo base_url('resources/user/')?>js/ajax-mail.js"></script>
    <script src="<?php echo base_url('resources/user/')?>js/custom.js"></script>
</body>


<!-- Mirrored from demo.hasthemes.com/pustok-preview/pustok/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 May 2020 06:15:10 GMT -->
</html>