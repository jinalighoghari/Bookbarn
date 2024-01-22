
<div class="site-header header-2 mb--20 d-none d-lg-block">
            <div class="header-middle pt--10 pb--10">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <a href="<?php echo site_url("Home")?>" class="site-brand">
                                <img src="<?php echo base_url("resources/user/")?>image/textlogo.png">
                            </a>
                        </div>
                        <div class="col-lg-5">
                            <form method="post" action="<?php echo site_url("Explore/index")?>">
                                 <select name="rol" class="btn-block">
                                    <option value="-1"></option>
                                    <option value="bookname">Bookname</option>
                                    <option value="category">Category</option>
                                    <option value="cityname">City</option>
                                    <option value="language">Language</option>
                                </select>
                            <div class="header-search-block">

                            <input type="text" placeholder="Search entire store here" name="txtsearch">

                           <button type="submit" name="btnsearch" class="btn btn--primary"><span class="fa fa-search"></span></button>
                            </div>
                        </form>
                        </div>
                        <div class="col-lg-4">
                            <div class="main-navigation flex-lg-right">
                                <div class="cart-widget">
                                     <div class="login-block">
                                        <i class="fa fa-thumbs-up" style="color: green;"></i>
                                        <a href="<?php echo site_url("Explore/MyLikedBooks")?>">Liked Books</a>
                                   
                                    </div> 
                                    
                                    <div class="login-block">
                                         <a href="<?php echo site_url("Explore/WishListbook")?>" class="image"><i class="fa fa-heart" style="color: red"></i>
                                        </a>
                                      </div>
                                        <div>
                                             <span class="price">
                                            <a href="<?php echo site_url("Cart/index")?>" class="cart-link" title="View Cart"><i class="fa fa-shopping-cart"></i>                                 <span>(<?php echo $this->cart->total_items();?>)</span> </a>
                                            </span>
                                        </div>
                                        
                                
                                </div>
                                <!-- @include('menu.htm') -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom bg-primary">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">

                            <nav class="category-nav white-nav  ">
                                <div>
                                    <form method="post">
                            <a href="javascript:void(0)" class="category-trigger">
                            <i class="fa fa-bars"></i>Browse
                                        categories</a>

                                      
                                    <ul class="category-menu" name="txtcat" >
                                      <?php
                                        foreach ($cat as $c) 
                                   {
                                    ?>
                                        <li class=""><a href="<?php echo site_url("HomeCategory/category/".$c->catid)?>" class="btn" style="color:green;">
                                             <?php echo $c->catname?> </a>
                                            <?php
                                                foreach ($cat as $s) {
                                                    ?> 
                                               <?php
                                                }
                                                ?> 
                                          
                                        </li>
                                        <?php
                                    }
                                    ?>
                                      
                                    </ul> 
                                  </form>
                                </div>
                            </nav>
                        </div>
                        <div class="col-lg-3">
                            <div class="header-phone color-white">
                                <div class="icon">
                                </div>
                                
                            </div>
                        </div>
                        <div>
                            <div class="main-navigation flex-lg-right">
                                <ul class="main-menu menu-right main-menu--white li-last-0">
                                    <!-- Blog -->
                                    <li class="menu-item has-children mega-menu">
                                        
                                    </li>
                                    <li class="menu-item has-children">
                                        <a href="<?php echo site_url("Home")?>">Home 
                                        </a>
                                    </li>
                                    <!-- Shop -->
                                    <li class="menu-item has-children mega-menu">
                                        <a href="<?php echo site_url("Explore")?>">Explore</a>
                                        
                                    </li>
                                    <!-- Pages -->
                                    <li class="menu-item has-children">
                                        <a href="<?php echo site_url("MyProfile")?>">My Account </a>
                                        
                                    </li>
                                     <li class="menu-item has-children">
                                    <a href="javascript:void(0)"><?php echo $_SESSION['uname']?> <i
                                            class="fas fa-chevron-down dropdown-arrow"></i></a>
                                    <ul class="sub-menu">
                                        <li> <a href="<?php echo site_url('MyProfile')?>">My Profile</a></li>
                                        <li> <a href="<?php echo site_url('User/logout')?>">Logout</a></li>

                                        
                                    </ul>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            function loadsubcats(cid) {
      if(cid!=-1)
      {
$.ajax({
  url: "<?php echo site_url('Home/loadsubcatbycat/')?>"+cid, 
    success: function(result)
    {

document.getElementById('subcat').innerHTML=result;
  }
});
     }
     }
        </script>
