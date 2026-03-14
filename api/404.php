<?php $pagetitle = '404'; ?>

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
            <?php include('includes/breadcrumb.php') ?>
            
            <!-- banner area start -->
            <div class="rn-banner-area">
                <img src="../assets/images/404.png" >
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