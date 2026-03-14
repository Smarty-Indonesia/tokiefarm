<?php $pagetitle = 'Earn'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('includes/head.php') ?>
</head>
<body class="home-sticky-pin sidebar-header scrollspy-example position-relative active-light-mode" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" tabindex="0">
    <?php include('includes/header.php') ?>
    <div class="rn-nft-mid-wrapper nft-left-sidebar-nav pr--40 pr_sm--15">
        <div id="list-item-1">
            <?php include('includes/topnav.php') ?>
            
            <!-- banner area start -->
            <div class="rn-banner-area">
                <div class="slider-activation-banner-4 slick-arrow-style-one rn-slick-dot-style">
                    <a href="https://app.tokiefarm.io/tokie-nft-pools" target="_blank"><img src="../assets/images/defi/tokie_nft_pool.jpg" ></a>
                    <a href="https://app.tokiefarm.io/spy-nft-pools" target="_blank"><img src="../assets/images/defi/spy_nft_pool.jpg" ></a>
                    <a href="https://app.tokiefarm.io/pools" target="_blank"><img src="../assets/images/defi/pools.jpg" ></a>
                    <!-- <img src="../assets/images/slider/slider3.png" > 
                    <img src="../assets/images/slider/slider4.png" > -->
                    
                </div>
            </div>
            <!-- banner area end -->
        </div>
    </div>
    <?php 
        array_map( 
            function ($a) { return include($a);}, 
            array('includes/footer.php','includes/modal.php','includes/foot.php')
        ); 
    ?>
</body>
</html>