<!DOCTYPE html>
<html lang="en">
<?php
include_once ('../views/elements/head.php');
?>
<body class="home-page home-01 ">

	<?php
    include_once ('../views/elements/mobile-menu.php');
    include_once ('../views/elements/header.php');
    ?>

	<!--main area-->
	<main id="main" class="main-site left-sidebar">

		<div class="container">
            <?php
            include_once ('../views/elements/breadcrumb.php');
            include_once ('../views/elements/sign-up.php');

            ?>

		</div><!--end container-->

	</main>
	<!--main area-->

    <?php
    include_once ('../views/elements/footer.php');
    include_once ('../views/elements/script.php');
    ?>
</body>
</html>