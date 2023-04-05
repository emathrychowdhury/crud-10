<?php

include_once ($_SERVER['DOCUMENT_ROOT']). '/crud-10/config.php';
use Premier\Banners;

$_banner = new Banners();
$_banner->update();


