

<div class="wrap">
    <div class="row header_a">
        <div class="col-8">
            <?php include('views/front-end/menu.php'); ?>
        </div>
        <div class="col-4">
            <div class="row right-header_a">
                <div class="col-6">
                    <label>
                        <?php
                        if(Auth::checkAuth()){
                            ?>
                            <img src="<?php echo Auth::user()->getAvatar();?>" class="avatar">
                            <a  class="label-user-full-name" href="<?php echo Route::name('edit-profile')?>">
                                <?php
                                echo Auth::user()->getFullName();
                                ?>
                            </a>

                            <?php
                        }else{
                            ?>
                            <a href="<?php echo Route::name('auth.show-login')?>">
                                Đăng nhập
                            </a>
                            <?php
                        }
                        ?>
                    </label>
                </div>
                <div class="col-6">
                    <?php
                    if(Auth::checkAuth()){
                        ?>
                        <a href="<?php echo Route::name('logout')?>">
                            Đăng xuất
                        </a>
                        <?php
                    }
                    ?>
                </div>
            </div>

        </div>

    </div>
    <div></div>
    <div class="header_top">
        <div class="logo">
            <a href="index"><img src="/assets/front-end/images/logo.png" alt="" /></a>
        </div>
        <div class="header_top_right">
            <div class="search_box">
                <form>
                    <input type="text" value="Search for Products" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search for Products';}"><input type="submit" value="SEARCH">
                </form>
            </div>
            <div class="shopping_cart">
                <div class="cart">
                    <a href="#" title="View my shopping cart" rel="nofollow">
                        <span class="cart_title">Cart</span>
                        <span class="no_product">(empty)</span>
                    </a>
                </div>
            </div>


        </div>
        <div class="clear"></div>
    </div>
    <div class="menu">
        <ul id="dc_mega-menu-orange" class="dc_mm-orange">
            <li><a href="index">Home</a></li>
            <li><a href="products">Products</a> </li>
            <li><a href="topbrands">Top Brands</a></li>
            <li><a href="cart">Cart</a></li>
            <li><a href="contact">Contact</a> </li>
            <div class="clear"></div>
        </ul>
    </div>