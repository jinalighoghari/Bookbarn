<div class="col-lg-3 col-12">
								<div class="myaccount-tab-menu nav" role="tablist">
									
									   <li class="img-list">
                            
                                <a href="<?php echo site_url('Changeimage')?>" class="m-b-5"><img src="<?php echo base_url("resources/shared/images/".$_SESSION['propic'])?>" height="60px" width="60px"/><?php echo " ".$_SESSION['uname']?></a>
                            


                            </li>
									<a href="<?php echo site_url('MyProfile')?>" ><i class="fa fa-user"></i> Account
										Details</a>

									<a href="<?php echo site_url('Mybooks')?>"><i class="fa fa-book"></i> My Books</a>
									<a href="<?php echo site_url('MyOrder/MyOrders/')?>" ><i class="fa fa-cart-arrow-down"></i>My Orders</a>
									<a href="<?php echo site_url('MyOrder/')?>" ><i class="fa fa-gift"></i>Sold Books</a>
									<a href="<?php echo site_url('Explore/WishListbook')?>" ><i class="fas fa-heart"></i>WishList</a>
									<a href="<?php echo site_url('Explore/MyLikedBooks')?>"><i class="fas fa-thumbs-up"></i>My Liked Books</a>
									<a href="<?php echo site_url('Changeimage')?>" ><i class="fa fa-image"></i> Change Image</a>
									<a href="<?php echo site_url('Changepass')?>" ><i class="fa fa-key"></i> Change Password</a>
									<a href="<?php echo site_url('Inquiry/')?>" ><i class="fa fa-question"></i> Inquiry</a>
									<a href="<?php echo site_url('Inquiry/Answers/')?>" ><i class="fa fa-lightbulb"></i> Answers</a>
									<a href="<?php echo site_url('User/logout')?>"><i class="fas fa-sign-out-alt"></i> Logout</a>

								</div>
							</div>