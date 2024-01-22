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
    <main class="page-section inner-page-sec-padding-bottom">
      <div class="container">
        <div class="row">
          
            <!-- Login Form s-->
              <div class="col-md-12 col-12 mb--15">
             <form action="<?php echo site_url('Changeimage/editImage')?>" method="post" enctype="multipart/form-data">
              <div class="login-form">
                <h2>Profile Picture</h2>
                <div class="row">
                  
                  <div class="col-md-12 col-12 mb--15">
                    <label for="image">Image</label>
                    <input class="mb-0 form-control" type="file" id="image" name="fup" value="<?php echo $userinfo->username?>">
                  </div>
                  
                </div>
                  
                  <div class="col-md-12">
                   <button type="submit" class="btn btn--primary">Save</button>
                  </div>

                </div>
              </div>
            </form>
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
            url:"<?php echo site_url('User/loadCityByStateId/')?>"+sid,
              success: function(result)
              {
                document.getElementById('city').innerHTML=result;
              }
          });
        }
      }
</script>

  <!-- Use Minified Plugins Version For Fast Page Load -->
  <script src="<?php echo base_url('resources/user/')?>js/plugins.js"></script>
  <script src="<?php echo base_url('resources/user/')?>js/ajax-mail.js"></script>
  <script src="<?php echo base_url('resources/user/')?>js/custom.js"></script>
</body>

</html>
									<!-- Single Tab Content End -->
								</div>
							</div>
							<!-- My Account Tab Content End -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=================================
  Brands Slider
===================================== -->
	<section class="section-margin">
	</section>
	<!--=================================
    Footer Area
===================================== -->

	<!-- Use Minified Plugins Version For Fast Page Load -->
	<script src="<?php echo base_url("resources/user/")?>js/plugins.js"></script>
	<script src="<?php echo base_url("resources/user/")?>js/ajax-mail.js"></script>
	<script src="<?php echo base_url("resources/user/")?>js/custom.js"></script>
</body>


<!-- Mirrored from demo.hasthemes.com/pustok-preview/pustok/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 May 2020 06:15:53 GMT -->
</html>