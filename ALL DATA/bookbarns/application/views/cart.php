<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from demo.hasthemes.com/pustok-preview/pustok/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 May 2020 06:15:46 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BookBarns</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Use Minified Plugins Version For Fast Page Load -->
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('resources/user/') ?>css/plugins.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('resources/user/') ?>css/main.css" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('resources/user/') ?>image/favicon.ico">
	<script>
        function updateCartItem(obj,rowid) 
        {
            $.get("<?php echo site_url('Cart/updateItemQty');?>",{rowid:rowid,qty:obj.value},function(resp){
                if(resp=='ok')
                {
                    location.reload();
                }else
                {
                    
                }
            })
        }
    </script>
</head>

<body>
	<div class="site-wrapper" id="top">
		<div class="site-header header-2 mb--20 d-none d-lg-block">
			<div class="header-middle pt--10 pb--10">
				<div class="container">
					<div class="row align-items-center">

					</div>
				</div>
				<?php include_once("header.php");?>
			</div>

		</div>
				<section class="breadcrumb-section">
			<h2 class="sr-only">Site Breadcrumb</h2>
			<div class="container">
				<div class="breadcrumb-contents">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo site_url('Explore')?>">Explore</a></li>
							<li class="breadcrumb-item active">Cart</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<!-- Cart Page Start -->
		<main class="cart-page-main-block inner-page-sec-padding-bottom">
			<div class="cart_area cart-area-padding  ">
				<div class="container">
					<div class="page-section-title">
						<h1>Shopping Cart</h1>
					</div>
					<div class="row">
						<div class="col-12">
							<form action="#" class="">
								<!-- Cart Table -->
								<div class="cart-table table-responsive mb--40">
									<table class="table">
										<!-- Head Row -->
										<thead>
											<tr>
												<th class="pro-remove"></th>
												<th class="pro-thumbnail">Image</th>
												<th class="pro-title">Product</th>
												<th class="pro-price">Price</th>
												<th class="pro-quantity">Quantity</th>
												<th class="pro-subtotal">Total</th>
											</tr>
										</thead>

										<tbody>

										  <?php 

                                           if($this->cart->total_items() > 0)
                                           {
                                           	 foreach ($cartItems as $c) {
                                           	 	?>
											<!-- Product Row -->
		<tr>
 			<td class="pro-remove"><a href="<?php echo site_url("Cart/removeItem/".$c['rowid'])?>"><i class="far fa-trash-alt"></i></a></td>
								 <?php
                      $i=$c['image'];
                      $im=explode(" ", $i);
                      // print_r($im);
                      // die();
                    ?>			
		<td class="pro-thumbnail"><a href=""><img src="<?php echo base_url('resources/shared/images/'.$im[0])?>" alt="Product"></a></td>
		<td class="pro-title"><a href="#"><?php echo $c['name']?></a></td>
		<td class="pro-price"><span><?php echo $c['price']?></span></td>
		<td class="pro-quantity">
			<div class="pro-qty">
			<div class="count-input-block">
			<input type="number" class="form-control text-center" value="<?php echo $c['qty']?>" onchange="updateCartItem(this,'<?php echo $c['rowid'];?>')">
			</div>
			</div>
		</td>
		<td class="pro-subtotal"><?php echo '  '.$c['subtotal'];?></td>
		
		</tr>
										<?php
                                         }
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
			<div class="cart-section-2">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-12 mb--30 mb-lg--0">
							<!-- slide Block 5 / Normal Slider -->
							
						</div>
						<!-- Cart Summary -->
						<div class="col-lg-6 col-12 d-flex">
							<div class="cart-summary">
								<div class="cart-summary-wrap">
									<h4><span>Cart Summary</span></h4>
<!-- 									<p>Sub Total <span class="text-primary">$1250.00</span></p> -->

									<h2>Grand Total <span class="text-primary"><?php if($this->cart->total_items()>0)
                            {
                            ?>
                            <b><?php echo $this->cart->total().'  Rs';?></b>
                        <?php }?></span></h2>
								</div>
								<div class="cart-summary-button">
									<a href="<?php echo site_url('Cart/finalcart')?>" class="checkout-btn c-btn btn--primary">Checkout</a>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- Cart Page End -->
	</div>
	
<?php include_once("footer.php");?>
	<!-- Use Minified Plugins Version For Fast Page Load -->
	<script src="<?php echo base_url('resources/user/') ?>js/plugins.js"></script>
	<script src="<?php echo base_url('resources/user/') ?>js/ajax-mail.js"></script>
	<script src="<?php echo base_url('resources/user/') ?>js/custom.js"></script>
</body>


<!-- Mirrored from demo.hasthemes.com/pustok-preview/pustok/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 May 2020 06:15:46 GMT -->
</html>