<!DOCTYPE html>

<html lang="zxx">





<!-- Mirrored from demo.hasthemes.com/pustok-preview/pustok/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 May 2020 06:15:53 GMT -->

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

        <div class="container">

          

        </div>

      </div>
      <?php include_once("header.php");?>

      

    </div>

    

    <div class="page-section inner-page-sec-padding">

      <div class="container">

        <div class="row">

          <div class="col-12">

            <div class="row">

              <!-- My Account Tab Menu Start -->

              <?php include_once("nav.php");?>

              <!-- My Account Tab Menu End -->

              <!-- My Account Tab Content Start -->

              <div class="col-lg-9 col-12 mt--30 mt-lg--0">

                <div class="tab-content" id="myaccountContent">

                  <!-- Single Tab Content Start -->

                  <div class="tab-pane fade show active" id="dashboad" role="tabpanel">

                    

                  </div>

                  <!-- Single Tab Content End -->

                  <!-- Single Tab Content Start -->

                  

                  <!-- Single Tab Content End -->

                  <!-- Single Tab Content Start -->

                  <!DOCTYPE html>

<html lang="zxx">



<head>

  <meta charset="utf-8" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Pustok - Book Store HTML Template</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Use Minified Plugins Version For Fast Page Load -->

  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('resources/user/')?>css/plugins.css" />

  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('resources/user/')?>css/main.css" />

  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('resources/user/')?>image/favicon.ico">

</head>



<body>

  <div class="site-wrapper" id="top">

    <!--=============================================

    =            Login Register page content         =

    =============================================-->

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
                <a href="#" class="sorting-btn" data-target="list "><i
                    class="fas fa-list"></i></a>
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
            <a href="<?php echo site_url("Addbook/loadAddBook");?>" class="btn btn--primary btn-lg float-right">Add Book</a>
              </div>
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
            <a href="<?php echo site_url("Addbook/loadAddBook");?>" class="btn btn--primary btn-lg float-right">Add Book</a>
              </div>
            </div>
          </div>
        </div>
        <div class="shop-product-wrap grid with-pagination row space-db--30 shop-border">
          
          <?php
              foreach ($books as $b) 
              {
              ?>
          <div class="col-lg-4 col-sm-6">
            <div class="product-card card-style-list">
              <div class="product-grid-content">
                <div class="product-header">
                  <a href="<?php echo $b->userid?>" class="author">
                    <!-- <?php echo $b->username?> -->
                  </a>
                
                </div>
                <div class="product-card--body">
                  <div class="card-image">
                      <?php
                      $i=$b->image;
                      $im=explode(" ", $i);
                      
                    ?>
                    <img src="<?php echo base_url('resources/shared/images/'.$im[0])?>" height="200" width="174" alt="">
                    <div class="hover-contents">
                      <a href="<?php echo site_url("Explore/bookMoreInfo/".$b->bookid)?>" class="hover-image">
                        <img src="<?php echo base_url('resources/shared/images/'.$im[0])?>" height="200" width="174" alt="">
                      </a>
                      <div class="hover-btns">
                        
                        
                        <a href="<?php echo $b->bookid?>" data-toggle="modal" data-target="#quickModal<?php echo $b->bookid?>"
                          class="single-btn">
                          <i class="fas fa-eye"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="price-block">

                  <h3><a href="<?php echo site_url("Explore/bookMoreInfo/".$b->bookid)?>"><?php echo $b->bookname?></a></h3>
                    <span class="price"><i class="fas fa-Rupee"><?php echo "Rs".$b->price?></i></span>

                  </div>
               
                </div>
                   <div class="line-divider">
                                 <a href="<?php echo site_url("MyBooks/loadeditbook/".$b->bookid)?>">
               <span class="btn-outlined--primary pull-right"><i class="fas fa-pencil-alt"></i></span></a>
                    <a href="<?php echo site_url("Addbook/removebook/$b->bookid")?>">
               <span class="btn-outlined--primary pull-right"><i class="fas fa-trash-alt"></i></span>
             </a>

             
               </div>
               <div>
               
             </div>
              </div>
              <div class="product-list-content">
                <div class="card-image">
                  <a href="<?php echo site_url("Explore/bookMoreInfo/".$b->bookid)?>">
                      <?php
                      $i=$b->image;
                      $im=explode(" ", $i);
                      
                    ?>
                  <img src="<?php echo base_url('resources/shared/images/'.$im[0])?>" height="300" width="174" alt="">
                  </a>
                </div>
                <div class="product-card--body">
                  <div class="product-header">
                    <a href="#" class="author">

                    </a>

                    <h3><a href="<?php echo site_url("Explore/bookMoreInfo/".$b->bookid)?>" tabindex="0"><?php echo $b->bookname?></a></h3>
                  </div>
                  <article>
                    <h2 class="sr-only"><?php echo $b->description?></p>
                  </article>
                  <div class="price-block">
                    <span class="price"><i class="fas fa-Rupee"><?php echo "Rs".$b->price?></i></span>
                    
                  </div>
                  <div class="rating-block">

                  </div>
                  <div class="btn-block">


                                              <a href="<?php echo site_url("MyBooks/loadeditbook/".$b->bookid)?>">
               <span class="btn-outlined--primary pull-right"><i class="fas fa-pencil-alt"></i></span></a>
                    <a href="<?php echo site_url("Addbook/removebook/$b->bookid")?>">
               <span class="btn-outlined--primary pull-right"><i class="fas fa-trash-alt"></i></span>
             </a>

                  </div>
                </div>
              </div>
            </div>
               
          </div>
          <?php
            }
            ?>
            

                 
            
        </div>
        <!-- Pagination Block -->
        <div class="row pt--30">
          <div class="col-md-12">
            <div class="pagination-block">
              
            </div>
          </div>
        </div>
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
                      <!-- <p class="tag-block">Tags: <a href="#">Movado</a>, <a href="#">Omega</a></p> -->
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
                        <span class="price-new"><i class="fas fa-Rupee"><?php echo "Rs.".$b->price ?></span>
                        <!-- <del class="price-old">£91.86</del> -->
                      </div>
                    
                      <div class="add-to-cart-row">
                      
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
                ?>      </div>
    </main>


  <section class="section-margin">

    <h2 class="sr-only">Brand Slider</h2>

    <div class="container">

   
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
