<?php

//var_dump($_POST);

$_title = $_POST['title'];
$_link = $_POST['link'];
//echo $_title;

//Connection to database
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=project_10", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Insert Query

$query = "INSERT INTO `brands`( `title`, `link`, `is_draft`, `is_active`, `soft_delete`) VALUES (:title,:link,:NULL ,:NULL ,:NULL)";

$stmt = $conn->prepare($query);

$stmt->bindParam(':title', $_title);
$stmt->bindParam(':link', $_link);
//$stmt->bindParam(':is_draft', $_is_draft);
//$stmt->bindParam(':is_active', $_is_active);
//$stmt->bindParam(':soft_delete', $_soft_delete);
$result = $stmt->execute();
//header("location:index.php");



