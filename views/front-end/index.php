<?php include 'views/front-end/layouts/master.php' ?>

<?php startblock('title') ?>
    Trang chủ
<?php endblock() ?>

<?php startblock('header') ?>
    <?php include 'layouts/header.php' ?>
    <?php include 'layouts/slider.php' ?>
<?php endblock() ?>

<?php startblock('content') ?>


<div class="main">
    <div class="content">
        <div class="content_top">
            <div class="heading">
                <h3>Feature Products</h3>
            </div>
            <div class="clear"></div>
        </div>
        <div class="section group">
            <div class="grid_1_of_4 images_1_of_4">
                <a href="detail"><img src="/assets/front-end/images/feature-pic1.png" alt="" /></a>
                <h2>Lorem Ipsum is simply </h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                <p><span class="price">$505.22</span></p>
                <div class="button"><span><a href="detail" class="details">Details</a></span></div>
            </div>
            <div class="grid_1_of_4 images_1_of_4">
                <a href="detail"><img src="/assets/front-end/images/feature-pic2.jpg" alt="" /></a>
                <h2>Lorem Ipsum is simply </h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                <p><span class="price">$620.87</span></p>
                <div class="button"><span><a href="detail" class="details">Details</a></span></div>
            </div>
            <div class="grid_1_of_4 images_1_of_4">
                <a href="detail"><img src="/assets/front-end/images/feature-pic3.jpg" alt="" /></a>
                <h2>Lorem Ipsum is simply </h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                <p><span class="price">$220.97</span></p>
                <div class="button"><span><a href="detail" class="details">Details</a></span></div>
            </div>
            <div class="grid_1_of_4 images_1_of_4">
                <img src="/assets/front-end/images/feature-pic4.png" alt="" />
                <h2>Lorem Ipsum is simply </h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                <p><span class="price">$415.54</span></p>
                <div class="button"><span><a href="detail" class="details">Details</a></span></div>
            </div>
        </div>
        <div class="content_bottom">
            <div class="heading">
                <h3>New Products</h3>
            </div>
            <div class="clear"></div>
        </div>
        <div class="section group">
            <div class="grid_1_of_4 images_1_of_4">
                <a href="detail"><img src="/assets/front-end/images/new-pic1.jpg" alt="" /></a>
                <h2>Lorem Ipsum is simply </h2>
                <p><span class="price">$403.66</span></p>
                <div class="button"><span><a href="detail" class="details">Details</a></span></div>
            </div>
            <div class="grid_1_of_4 images_1_of_4">
                <a href="detail"><img src="/assets/front-end/images/new-pic2.jpg" alt="" /></a>
                <h2>Lorem Ipsum is simply </h2>
                <p><span class="price">$621.75</span></p>
                <div class="button"><span><a href="detail" class="details">Details</a></span></div>
            </div>
            <div class="grid_1_of_4 images_1_of_4">
                <a href="detail"><img src="/assets/front-end/images/feature-pic2.jpg" alt="" /></a>
                <h2>Lorem Ipsum is simply </h2>
                <p><span class="price">$428.02</span></p>
                <div class="button"><span><a href="detail" class="details">Details</a></span></div>
            </div>
            <div class="grid_1_of_4 images_1_of_4">
                <img src="/assets/front-end/images/new-pic3.jpg" alt="" />
                <h2>Lorem Ipsum is simply </h2>
                <p><span class="price">$457.88</span></p>

                <div class="button"><span><a href="detail" class="details">Details</a></span></div>
            </div>
        </div>
    </div>
</div>
</div>
<?php endblock() ?>
<?php startblock('script') ?>
<?php include 'layouts/script.php'?>
<script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
              containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
         };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
<link href="/assets/front-end/css/flexslider.css" rel='stylesheet' type='text/css' />
<script defer src="/assets/front-end/js/jquery.flexslider.js"></script>
<script type="text/javascript">

    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
</script>
<?php endblock() ?>




