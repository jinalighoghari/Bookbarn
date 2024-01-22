<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from demo.hasthemes.com/pustok-preview/pustok/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 May 2020 06:15:55 GMT -->
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
   <section class="breadcrumb-section">
      <h2 class="sr-only">Site Breadcrumb</h2>
      <div class="container">
        <div class="breadcrumb-contents">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo site_url('Home')?>">Home</a></li>
              <li class="breadcrumb-item active">Liked Books</li>
            </ol>
          </nav>
        </div>
      
    </section>
    
   
    <div class="sticky-init fixed-header common-sticky">
      
    </div>
    
    <section class="inner-page-sec-padding-bottom space-db--30">
      <div class="container">
<!--          <h1 style="text-align: center">My Liked Books</h1> -->
        <div class="row space-db-lg--60 space-db--30">
<?php
             foreach ($books as $b) {
               ?>
          <div class="col-lg-4 col-md-6 mb-lg--60 mb--30">
            <div class="blog-card card-style-grid">
              
 <?php
                      $i=$b->image;
                      $im=explode(" ", $i);
                      ?>
              <a href="<?php echo site_url("Explore/bookMoreinfo/".$b->bookid)?>" class="image d-block">
                <img src="<?php echo base_url('resources/shared/images/'.$im[0])?>" alt="" height="350" width="200">
              </a>
              <div class="card-content">
                <h3 class="title"><a href="<?php echo site_url("Explore/bookMoreinfo/".$b->bookid)?>"><?php echo $b->bookname?></a></h3>
                <p class="post-meta"><span><?php echo $b->username?> </span></p>

                <span class="pull-right" >
                 <a href="<?php echo site_url("Explore/removelikebook/$b->bookid")?>">
                  <i class="icon ion-thumbsup" style="color: green;">  
                  </i>
                  </a>
               
                 </span>
                
                <article>
                  <h2 class="sr-only">
                    Blog Article
                  </h2>
                  
                  <a href="<?php echo site_url("Explore/bookMoreinfo/".$b->bookid)?>" class="blog-link">More...</a>
                </article>
              </div>
            </div>
          </div>
          <?php
        }
          ?>
         
        </div>
      </div>
    </section>
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


<!-- Mirrored from demo.hasthemes.com/pustok-preview/pustok/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 May 2020 06:15:57 GMT -->
</html>