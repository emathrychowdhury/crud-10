<?php

include_once ($_SERVER['DOCUMENT_ROOT']). '/crud-10/config.php';

use Premier\Banners;

$_banner = new Banners();
$banners = $_banner->getActiveBanners();
// var_dump($banners);

?>
<!--MAIN SLIDE-->
<div class="wrap-main-slide">
    <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">

        <?php
        foreach($banners as $banner):

        
        ?>

        <div class="item-slide">
            <img src="<?= $webroot;?>uploads/<?=$banner['picture'] ?>" alt="" class="img-slide">
            <div class="slide-info slide-1">
                <h2 class="f-title">Kid Smart <b>Watches</b></h2>
                <span class="subtitle">Compra todos tus productos Smart por internet.</span>
                <p class="sale-info">Only price: <span class="price">$59.99</span></p>
                <a href="#" class="btn-link">Shop Now</a>
            </div>
        </div>
        <?php
        endforeach
        ?>
       
    </div>
</div>
