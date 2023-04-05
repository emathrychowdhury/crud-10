<?php

include_once ($_SERVER['DOCUMENT_ROOT']). '/crud-10/config.php';

use Premier\Users;

$user = new Users();
$user = $user->update();

var_dump($_POST);
?>
