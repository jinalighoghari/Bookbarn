<div class="col-lg-3 col-12">
								<div class="myaccount-tab-menu nav" role="tablist">
									
									<a href="<?php echo site_url('MyProfile/loadOtherUserBasic/'.$userinfo->userid)?>" ><i class=""></i> 
										<h2><?php echo $userinfo->username?></h2></a>
									<a href="<?php echo site_url('MyProfile/loadOtherUserBasic/'.$userinfo->userid)?>" ><i class="fa fa-user"></i> 
										Profile</a>

									<a href="<?php echo site_url('MyProfile/loadOtherUserBook/'.$userinfo->userid)?>"><i class="fa fa-book"></i> Books</a>

								</div>
							</div>