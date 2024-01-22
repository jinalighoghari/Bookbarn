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
		
		<div class="page-section inner-page-sec-padding">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="row">
							<!-- My Account Tab Menu Start -->
							<?php include_once("ounav.php");?>
							<!-- My Account Tab Menu End -->
							<!-- My Account Tab Content Start -->
							<div class="col-lg-9 col-12 mt--30 mt-lg--0">
								<div class="tab-content" id="myaccountContent">
									<!-- Single Tab Content Start -->
									<div class="tab-pane fade show active" id="dashboad" role="tabpanel">
										
									</div>
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
    <main class="page-section inner-page-sec-padding-bottom">

      <div class="container">
        <div class="row">
          
            <!-- Login Form s-->
            <form action="<?php echo site_url('MyProfile/editbasic')?>" method="post" enctype="multipart/form-data">
              <div class="login-form">
                <h2> Profile</h2>
              <div class="row">
                  
                  <div class="col-md-12 col-12 mb--15">
                    <label for="uname">UserName</label>
                    <input class="mb-0 form-control" disabled="" type="text" id="uname" name="txtuname" value="<?php echo $userinfo->username?>" >
                  </div>
                  
                  <div class="col-md-12 col-12 mb--15">
                    <label for="fname">FirstName</label>
                    <input class="mb-0 form-control" disabled="" type="text" id="fname" name="txtfname" value="<?php echo $userinfo->firstname?>">
                  </div>

                  <div class="col-md-12 col-12 mb--15">
                    <label for="lname">LastName</label>
                    <input class="mb-0 form-control" disabled="" type="text" id="lname" name="txtlname" value="<?php echo $userinfo->lastname?>">
                  </div>

                  <div class="col-12 mb--20">
                    <label for="email">Email</label>
                    <input class="mb-0 form-control" disabled="" name="txtemail" type="email" id="email" value="<?php echo $userinfo->useremailid?>">
                  </div>
                </div>
                 
                  <div class="col-md-12">
                
                  </div>
                </div>
              </div>
            </form>

        <div class="container"> 
            
           
          </div>

          </div>
          
        </div>
      </div>
    </main>
  </div>
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
	