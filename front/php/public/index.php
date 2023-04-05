<!DOCTYPE html>
<html lang="en">
<?php
include_once ('../views/elements/head.php');
?>
<body class="home-page home-01">

    <?php
    include_once ('../views/elements/mobile-menu.php');
    include_once ('../views/elements/header.php');
    ?>

	<main id="main">
		<div class="container">
            <?php
                include_once ('../views/elements/banner.php');
                include_once ('../views/elements/wrap-banner.php');
                include_once ('../views/elements/on-sale.php');
                include_once ('../views/elements/latest-products.php');
                include_once ('../views/elements/product-categories.php');
            ?>

		</div>
	</main>

	<?php
        include_once ('../views/elements/footer.php');
        include_once ('../views/elements/script.php');
        ?>
	

</body>
</html>